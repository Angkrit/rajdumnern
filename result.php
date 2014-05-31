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
        <?php
        while($value = mysql_fetch_array($objQuery)){
        ?>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-1">
                <img src="image/commentator<?php echo $value['ven_id']; ?>.jpg" width="80" >
            </div>
            <!-- Commentator 1
            ================================================== -->
            <div class="col-md-5">
                <form name="form1" method="post" action="index.php" >
                    <input name="ven_id" type="hidden" size="10" value="1" />
                    <table width="100%" border="0">
                        <tr bgcolor="#EC1C24">
                            <td width="50" align="center">
                                <img src="image/skill1.png" width="30" >
                            </td>
                            <td>Speaking Skill
                            </td>
                            <td width="50" align="center">
                                <?php echo $value['speaking']; ?>
                            </td>

                        </tr>
                        <tr bgcolor="#FFCA05">
                            <td align="center">
                                <img src="image/skill2.png" width="30" >
                            </td>
                            <td>Soccer Knowledge
                            </td>
                            <td width="50" align="center">
                                <?php echo $value['knowledge']; ?>
                            </td>

                        </tr>
                        <tr bgcolor="#CCCCCC">
                            <td align="center">
                                <img src="image/skill3.png" width="30" >
                            </td>
                            <td>Entertainment Skill
                            </td>
                            <td width="50" align="center">
                                <?php echo $value['entertainment']; ?>
                            </td>

                        </tr>
                        <tr bgcolor="#6FC8C0">
                            <td align="center">
                                <img src="image/skill4.png" width="30" >
                            </td>
                            <td>Accuracy Skill
                            </td>
                            <td width="50" align="center">
                                <?php echo $value['accuracy']; ?>
                            </td>
                        </tr>
                        <tr bgcolor="white">
                            <td align="center">
                                <img src="image/skill4.png" width="30" >
                            </td>
                            <td>Total
                            </td>
                            <td width="50" align="center">
                                <?php echo $value['total']; ?>
                            </td>
                        </tr>
                        <tr bgcolor="#adff2f">
                            <td align="center">
                                <img src="image/skill4.png" width="30" >
                            </td>
                            <td>Ranking
                            </td>
                            <td width="50" align="center">
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

                    </table>
                </form>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        <br>


        <?php
        }
        disconnectDB($link);
        ?>
</div>


</body>
</html>