<?php
include "setup.php";

$link = connectDB();

if ( isset($_POST['button']) AND $_POST['button'] == 'Submit' ) {

	$ven_id = $_POST['ven_id'];
	$pc_speaking_point = $_POST['skill1'];
	$pc_knowledge_point = $_POST['skill2'];
	$pc_entertainment_point = $_POST['skill3'];
	$pc_accuracy_point = $_POST['skill4'];
	$pc_comment = $_POST['comment'];
	
	$sql = "SELECT pc_id FROM raj_point_comment WHERE ven_id = '$ven_id' ORDER BY pc_id DESC;";
	$result = mysql_query($sql,$link);
	$array = mysql_fetch_assoc($result);
	
	$pc_id = $array['pc_id']+1;
	// for auto increment 
	$strSQL = "";
	$strSQL = "INSERT INTO raj_point_comment ";
	$strSQL .= "(ven_id,pc_id,pc_speaking_point,pc_knowledge_point,pc_entertainment_point,pc_accuracy_point,pc_comment )";
	$strSQL .= "VALUES ";
	$strSQL .= "('$ven_id','$pc_id','$pc_speaking_point','$pc_knowledge_point','$pc_entertainment_point','$pc_accuracy_point','$pc_comment' )";
	$objQuery = mysql_query($strSQL,$link);

}
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
<?php include('head.php'); ?>
</head>
<body>
<br>
<div class="container">
	<?php include("each_speaker.php");
	
	$sql = "SELECT * FROM `raj_ventriloquist` ORDER BY `raj_ventriloquist`.`ven_id` ASC"; 
	$query =  mysql_query($sql);
	while($res = mysql_fetch_array($query)):
		render_each_speaker($res);
	endwhile;
	?>
</div>
</body>
</html>