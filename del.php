<?php
include("config.php");
$id=$_GET["id"];
$q=mysql_query("delete from studentda where id='$id'",$x);
if($q)
header("Location:adhome.php?msg= deleted");
else
header("Location:adhome.php?msg= not deleted");



?>