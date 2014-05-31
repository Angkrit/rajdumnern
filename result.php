<?php
include "setup.php";

$link = connectDB();



    $sql = "SELECT pc_id FROM raj_point_comment WHERE ven_id = '$ven_id' ORDER BY pc_id DESC;";
    $result = mysql_query($sql,$link);
    $array = mysql_fetch_assoc($result);

    $pc_id = $array['pc_id']+1;

    $strSQL = "";
    $strSQL = "SELECT ven_id,
TRUNCATE(AVG(pc_speaking_point)/4*100,2) as speaking,
TRUNCATE(AVG(pc_knowledge_point)/4*100,2) as knowledge,
TRUNCATE(AVG(pc_entertainment_point)/4*100,2) as entertainment,
TRUNCATE(AVG(pc_accuracy_point)/4*100,2) as accuracy,

TRUNCATE((TRUNCATE(AVG(pc_speaking_point)/4*100,2) + TRUNCATE(AVG(pc_knowledge_point)/4*100,2) +
TRUNCATE(AVG(pc_entertainment_point)/4*100,2) +
TRUNCATE(AVG(pc_accuracy_point)/4*100,2))/4,2) as total

FROM raj_point_comment
GROUP BY ven_id";

    $objQuery = mysql_query($strSQL,$link);
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
        <table>
            <tr>
                <td>
                    Commentator
                </td>
                <td>
                    Speaking Skill
                </td>
                <td>
                    Soccer Knowledge
                </td>
                <td>
                    Entertainment Skill
                </td>
                <td>
                    Accuracy Skill
                </td>
                <td>
                    Total
                </td>
                <td>
                    Rank
                </td>
            </tr>
        <?php
        while($value = mysql_fetch_array($objQuery)){
        ?>
           <tr>
               <td>
                   <h1></h1>
               </td>
               <td>
                   <img width="30" src="image/commentator<?php echo $value['ven_id']; ?>.jpg">
               </td>
               <td>
                   <?php echo $value['speaking']; ?>
               </td>
               <td>
                   <?php echo $value['knowledge']; ?>
               </td>
               <td>
                   <?php echo $value['entertainment']; ?>
               </td>
               <td>
                   <?php echo $value['accuracy']; ?>
               </td>
               <td>
                   <?php echo $value['total']; ?>
               </td>
               <td>
                   <?php
                   if($value['total'] > 90)
                       echo 'S';
                   elseif($value['total'] > 80)
                       echo 'A';
                   elseif($value['total'] > 70)
                       echo 'B';
                   elseif($value['total'] > 60)
                       echo 'C';
                   else
                       echo 'D';
                   ?>
               </td>
           </tr>


        <?php
        }
        disconnectDB($link);
        ?>
        </table>
    </div>
    <div class="col-md-3">
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-1">
        <img src="image/commentator2.jpg" width="80" >
    </div>
    <!-- Commentator 2
    ================================================== -->
    <div class="col-md-5">
        <form name="form2" method="post" action="index.php" >
            <input name="ven_id" type="hidden" size="10" value="2" />
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
    </div>
    <div class="col-md-3">
    </div>
</div>
<br><div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-1">
        <img src="image/commentator3.jpg" width="80" >
    </div>
    <!-- Commentator 3
    ================================================== -->
    <div class="col-md-5">
        <form name="form3" method="post" action="index.php" >
            <input name="ven_id" type="hidden" size="10" value="3" />
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
    </div>
    <div class="col-md-3">
    </div>
</div>
<br><div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-1">
        <img src="image/commentator4.jpg" width="80" >
    </div>
    <!-- Commentator 4
    ================================================== -->
    <div class="col-md-5">
        <form name="form4" method="post" action="index.php" >
            <input name="ven_id" type="hidden" size="10" value="4" />
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
    </div>
    <div class="col-md-3">
    </div>
</div>
<br><div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-1">
        <img src="image/commentator5.jpg" width="80" >
    </div>
    <!-- Commentator 5
    ================================================== -->
    <div class="col-md-5">
        <form name="form5" method="post" action="index.php" >
            <input name="ven_id" type="hidden" size="10" value="5" />
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
    </div>
    <div class="col-md-3">
    </div>
</div>
<br>
</div>

<br>


</body>
</html>