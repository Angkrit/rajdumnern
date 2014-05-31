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
?>