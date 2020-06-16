<?php

include("config.php");
$id = $_GET['id'];

$q="select * from studentda where id = '$id' ";
$res = mysql_query($q);

if($r=mysql_fetch_assoc($res))
{?>
<form action="doupdate.php">
<input type=text name="id" value="<?php echo $r["id"];?>"><BR>    
<input type=text name="name" value="<?php echo $r["name"];?>"><BR>
<input type=text name="branch" value="<?php echo $r["branch"];?>"><BR>
<input type=text name="college" value="<?php echo $r["college"];?>"><BR>
<input type=text name="year" value="<?php echo $r["year"];?>"><BR>
<input type=submit>

</form>
<?php }

?>