<?php
include("config.php");
$uid = $_GET['uid'];
$pass = $_GET['pass'];
$q = mysql_query("select * from admin where uid = '$uid' and pass = '$pass' ",$x);
if($r=mysql_fetch_assoc($q))
{
    $_SESSION['uid']=$uid;
   header("Location:adhome.php");
}
else
{
    header("Location:adlogin.php?msg=Invalid details");
}



?>