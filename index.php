<?php
/* Function
================================================== */
function connectDB() {
    $mysql_server = "localhost";
    $mysql_user = "rajdumnern";
    $mysql_password = "rajdumnern";
	$mysql_db = "rajdumnern";//1

    $link = mysql_pconnect( $mysql_server, $mysql_user, $mysql_password);
    if (!$link) {
        die('Could not connect: ' . mysql_error());
    }

    $db_selected = mysql_select_db( $mysql_db, $link);
    if (!$db_selected) {
        die ('Can\'t use DB : ' . mysql_error() ."<br>\n");
    }

    mysql_query("set NAMES UTF8");
	return $link;
}

function disconnectDB( $link) {    
    mysql_close( $link);
}
/* End 
================================================== */
//$link = connectDB();
//disconnectDB($link);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<title><?php echo $TitleWeb;?></title>
<link rel="shortcut icon" href="<?php echo $UrlPage.$FolderImage.$FileLogo;?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>
<body>
<br>
<div class="container">
	<div class="row">
		<!-- Commentator 1
		================================================== --> 
		<div class="col-md-4">
		<form name="form1" method="post" action="index.php" >
		<table width="100%" border="0">
			<tr>
				<td colspan="6" align="center">
					<p>
					<img src="image/commentator1.jpg" width="100" >
					</p>
				</td>
			</tr>
			<tr bgcolor="#EC1C24">
				<td width="50" align="center">
					<img src="image/skill1.png" width="30" >
				</td>
				<td>Speaking Skill
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#FFCA05">
				<td align="center">
					<img src="image/skill2.png" width="30" >
				</td>
				<td>Soccer Knowledge
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#CCCCCC">
				<td align="center">
					<img src="image/skill3.png" width="30" >
				</td>
				<td>Entertainment Skill
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td align="center">
					<img src="image/skill4.png" width="30" >
				</td>
				<td>Accuracy Skill
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td colspan="6" align="center">
					
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td colspan="6" align="center">
					<textarea name="kpi" id="kpi" class="form-control" rows="4" maxlength="500" placeholder="Your Comment....." required ></textarea>
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td colspan="6" align="center">
					<br><p>
					<button type="button" class="btn btn-danger">Submit</button>
					</p>
				</td>
			</tr>
		</table>
		</form>
		</div>
		<!-- Commentator 2
		================================================== -->
		<div class="col-md-4">
		<form name="form2" method="post" action="index.php" >
		<table width="100%" border="0">
			<tr>
				<td colspan="6" align="center">
					<p>
					<img src="image/commentator2.jpg" width="100" >
					</p>
				</td>
			</tr>
			<tr bgcolor="#EC1C24">
				<td width="50" align="center">
					<img src="image/skill1.png" width="30" >
				</td>
				<td>Speaking Skill
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#FFCA05">
				<td align="center">
					<img src="image/skill2.png" width="30" >
				</td>
				<td>Soccer Knowledge
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#CCCCCC">
				<td align="center">
					<img src="image/skill3.png" width="30" >
				</td>
				<td>Entertainment Skill
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td align="center">
					<img src="image/skill4.png" width="30" >
				</td>
				<td>Accuracy Skill
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td colspan="6" align="center">
					
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td colspan="6" align="center">
					<textarea name="kpi" id="kpi" class="form-control" rows="4" maxlength="500" placeholder="Your Comment....." required ></textarea>
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td colspan="6" align="center">
					<br><p>
					<button type="button" class="btn btn-danger">Submit</button>
					</p>
				</td>
			</tr>
		</table>
		</form>
		</div>
		<!-- Commentator 3
		================================================== -->
		<div class="col-md-4">
		<form name="form3" method="post" action="index.php" >
		<table width="100%" border="0">
			<tr>
				<td colspan="6" align="center">
					<p>
					<img src="image/commentator3.jpg" width="100" >
					</p>
				</td>
			</tr>
			<tr bgcolor="#EC1C24">
				<td width="50" align="center">
					<img src="image/skill1.png" width="30" >
				</td>
				<td>Speaking Skill
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#FFCA05">
				<td align="center">
					<img src="image/skill2.png" width="30" >
				</td>
				<td>Soccer Knowledge
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#CCCCCC">
				<td align="center">
					<img src="image/skill3.png" width="30" >
				</td>
				<td>Entertainment Skill
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td align="center">
					<img src="image/skill4.png" width="30" >
				</td>
				<td>Accuracy Skill
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td colspan="6" align="center">
					
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td colspan="6" align="center">
					<textarea name="kpi" id="kpi" class="form-control" rows="4" maxlength="500" placeholder="Your Comment....." required ></textarea>
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td colspan="6" align="center">
					<br><p>
					<button type="button" class="btn btn-danger">Submit</button>
					</p>
				</td>
			</tr>
		</table>
		</form>
		</div>
	</div>
	<br>
	<div class="row">
		<!-- Commentator 4
		================================================== -->
		<div class="col-md-4">
		<form name="form4" method="post" action="index.php" >
		<table width="100%" border="0">
			<tr>
				<td colspan="6" align="center">
					<p>
					<img src="image/commentator4.jpg" width="100" >
					</p>
				</td>
			</tr>
			<tr bgcolor="#EC1C24">
				<td width="50" align="center">
					<img src="image/skill1.png" width="30" >
				</td>
				<td>Speaking Skill
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#FFCA05">
				<td align="center">
					<img src="image/skill2.png" width="30" >
				</td>
				<td>Soccer Knowledge
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#CCCCCC">
				<td align="center">
					<img src="image/skill3.png" width="30" >
				</td>
				<td>Entertainment Skill
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td align="center">
					<img src="image/skill4.png" width="30" >
				</td>
				<td>Accuracy Skill
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td colspan="6" align="center">
					
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td colspan="6" align="center">
					<textarea name="kpi" id="kpi" class="form-control" rows="4" maxlength="500" placeholder="Your Comment....." required ></textarea>
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td colspan="6" align="center">
					<br><p>
					<button type="button" class="btn btn-danger">Submit</button>
					</p>
				</td>
			</tr>
		</table>
		</form>
		</div>
		<!-- Commentator 5
		================================================== -->
		<div class="col-md-4">
		<form name="form5" method="post" action="index.php" >
		<table width="100%" border="0">
			<tr>
				<td colspan="6" align="center">
					<p>
					<img src="image/commentator5.jpg" width="100" >
					</p>
				</td>
			</tr>
			<tr bgcolor="#EC1C24">
				<td width="50" align="center">
					<img src="image/skill1.png" width="30" >
				</td>
				<td>Speaking Skill
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill1">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#FFCA05">
				<td align="center">
					<img src="image/skill2.png" width="30" >
				</td>
				<td>Soccer Knowledge
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill2">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#CCCCCC">
				<td align="center">
					<img src="image/skill3.png" width="30" >
				</td>
				<td>Entertainment Skill
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill3">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td align="center">
					<img src="image/skill4.png" width="30" >
				</td>
				<td>Accuracy Skill
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill4">
					<img src="image/vote4.png" width="30" >
					</label>
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td colspan="6" align="center">
					
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td colspan="6" align="center">
					<textarea name="kpi" id="kpi" class="form-control" rows="4" maxlength="500" placeholder="Your Comment....." required ></textarea>
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td colspan="6" align="center">
					<br><p>
					<button type="button" class="btn btn-danger">Submit</button>
					</p>
				</td>
			</tr>
		</table>
		</form>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>

<br>


</body>
</html>