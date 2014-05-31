<?php
    include_once 'setup.php';

    $id = $_GET['id'];
    
    $link = connectDB();
    $result = mysql_query("select * from raj_ventriloquist",$link);
    $values = mysql_fetch_array($result);
    $name = $values['raj_name'];
    $age = $values['raj_age'];
    $experience = $values['raj_experience'];
    $introduction = $values['raj_introduction'];
    
    $result = mysql_query("select * from raj_ventriloquist",$link);
    
    
?>