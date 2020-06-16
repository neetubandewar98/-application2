<?php
include("config.php");
$id=$_GET['id'];
$name=$_GET["name"];
$branch=$_GET["branch"];
$college=$_GET['college'];
$year=$_GET['year'];
$q="update studentda set name='$name',branch='$branch',college='$college',year='$year' where id ='$id' ";
$up = mysql_query($q);
if($up)
{
header("Location:adhome.php?msg=REcord updated");
}
else
{
header("Location:adhome.php?msg=REcord  not updated");
}

?>