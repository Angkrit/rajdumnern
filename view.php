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
	
	$strSQL = "";
	$strSQL = "INSERT INTO raj_point_comment ";
	$strSQL .= "(ven_id,pc_id,pc_speaking_point,pc_knowledge_point,pc_entertainment_point,pc_accuracy_point,pc_comment )";
	$strSQL .= "VALUES ";
	$strSQL .= "('$ven_id','$pc_id','$pc_speaking_point','$pc_knowledge_point','$pc_entertainment_point','$pc_accuracy_point','$pc_comment' )";
	$objQuery = mysql_query($strSQL,$link);

}

if(isset($_GET['id'])){$id = $_GET['id'];}

disconnectDB($link);
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
		<div class="col-md-3">
		</div>
		<div class="col-md-1">
			<?php
			echo "<img src=\"image/commentator{$id}.jpg\" width=\"80\" >";
			?>
		</div>
		<!-- Commentator 1
		================================================== --> 
		<div class="col-md-5">
		<form name="form1" method="post" action="view.php?id=<?=$id;?>" >
		<input name="ven_id" type="hidden" size="10" value="1" />
		<table width="100%" border="0">
			<tr bgcolor="#EC1C24">
				<td width="50" align="center">
					<img src="image/skill1.png" width="30" >
				</td>
				<td>Speaking Skill
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill1" value="4" checked>
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill1" value="3">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill1" value="2">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill1" value="1">
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
					<label><input type="radio" name="skill2" value="4" checked>
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill2" value="3">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill2" value="2">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill2" value="1">
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
					<label><input type="radio" name="skill3" value="4" checked>
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill3" value="3">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill3" value="2">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill3" value="1">
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
					<label><input type="radio" name="skill4" value="4" checked>
					<img src="image/vote1.png" width="30" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill4" value="3">
					<img src="image/vote2.png" width="15" >
					</label>
				</td>
				<td width="40" align="center">
					<label><input type="radio" name="skill4" value="2">
					<img src="image/vote3.png" width="15" >
					</label>
				</td>
				<td width="50" align="center">
					<label><input type="radio" name="skill4" value="1">
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
					<textarea name="comment" class="form-control" rows="4" maxlength="500" placeholder="Your Comment....." required ></textarea>
				</td>
			</tr>
			<tr bgcolor="#6FC8C0">
				<td colspan="6" align="center">
					<br><p>
					<input type="submit" name="button" class="btn btn-danger" value="Submit" />
					</p>
				</td>
			</tr>
			
		</table>
		</form>
		<table width="100%" border="0" class="table table-striped table-bordered">
			<?php
			$link = connectDB();
			$sql = "SELECT * FROM raj_point_comment WHERE ven_id = '$id' ORDER BY pc_id DESC;";
			$result = mysql_query($sql,$link);
			
			
			while($array = mysql_fetch_assoc($result)){
				if($array['pc_comment'] != ''){
					echo "<tr>";
					echo "<td>";
					echo $array['pc_comment'];
					echo "</td>";
					echo "</tr>";
				}
			}
			
			disconnectDB($link);
			?>
		</table>
		</div>
		<div class="col-md-3">
		</div>
	</div>
	
</div>

<br>


</body>
</html>