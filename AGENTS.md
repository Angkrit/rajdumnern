# AGENTS.md

## Cursor Cloud specific instructions

This repo is a small **legacy PHP web app** ("Soccer Voice" / rajdumnern) — a Thai
soccer-commentator voting site. It is a flat set of `.php` files served from the repo
root. There is **no package manager, no build step, no automated tests, and no linter**
configured in the repo.

### Key gotcha: legacy `mysql_*` API on PHP 8

The app calls the old ext/mysql functions (`mysql_pconnect`, `mysql_query`,
`mysql_fetch_array`, etc.), which were **removed in PHP 7.0**. The VM runs PHP 8.3, so a
compatibility shim maps those functions onto `mysqli`. The shim lives **outside the repo**
(so app code stays unmodified) at `/home/ubuntu/mysql_compat_shim.php` and is loaded via
`auto_prepend_file`. The app also uses short-open tags (`<? ... ?>` in `each_speaker.php`),
so `short_open_tag=On` is required.

Because of this, **do not run the app with a bare `php -S`** — you must pass the shim and
short-open-tag flags (see run command below), otherwise pages fatal with
"Call to undefined function mysql_pconnect()" or render raw PHP.

### Services

Two services must run for the app to work:

1. **MariaDB** (stands in for MySQL). Start it with:
   ```bash
   sudo service mariadb start
   ```
   DB credentials are hardcoded in `setup.php`: database `rajdumnern`, user `rajdumnern`,
   password `rajdumnern` (localhost socket). The database, schema, and seed data are
   provisioned in the VM snapshot. If the DB is ever missing/empty, re-create it with:
   ```bash
   sudo mariadb < /home/ubuntu/rajdumnern_setup.sql
   ```
   Schema: `raj_ventriloquist` (commentators) and `raj_point_comment` (votes/comments).
   The seed adds 5 commentators matching `image/commentator1..5.jpg`.

2. **PHP dev server** (serves the pages). Start it from the repo root:
   ```bash
   php -d auto_prepend_file=/home/ubuntu/mysql_compat_shim.php \
       -d short_open_tag=On -d display_errors=On \
       -S 0.0.0.0:8080 -t /workspace
   ```
   Then browse `http://localhost:8080/index.php` (voting), `result.php` (rankings),
   `view.php?id=N` (single commentator + comments).

The Facebook Like widget in `head.php` is optional and requires outbound internet; the
voting/results flow does not depend on it.

### Notes

- On the very first vote for a commentator (no prior rows), PHP 8 emits a harmless
  warning about an array offset in `index.php`/`view.php` (`$array['pc_id']+1` on an empty
  result). This is pre-existing behavior in the original code and does not break voting.
- `profile.php` is an unused/incomplete stub that references non-existent columns; it is
  not linked from any page.
- There are no tests or lint targets. To sanity-check PHP syntax you can run
  `php -l <file>` (note: files using `<?` short tags need `-d short_open_tag=On`).
