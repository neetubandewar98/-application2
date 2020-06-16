

<?php 
include('config.php');

if(isset($_POST['submit']))
{   $id = $_POST['id'];
	$name 	= $_POST['name'];
	$branch = $_POST['branch'];
    $college = $_POST['college'];
    $year = $_POST['year'];
	
	$sql ="insert into studentda (id,name, branch, college,year) values ('".$id."','".$name."', '".$branch."', '".$college."','".$year."')";
	
	$result = mysql_query( $sql);
	
	if($result)
	{
		echo "Post has been saved successfully";
	}
	else
	{
		echo "Unable to save post";
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>	
<title> How to insert data in mysql using php</title>

<style>
	body{
		font-family:verdana;
	}
	.container{width:500px;margin: 0 auto;}
	h3{line-height:20px;font-size:20px;}
	input{display:block;width:350px;height:20px;margin:10px 0;}
	textarea{display:block;width:350px;margin:10px 0;}
	button{background:green; border:1px solid green;width:70px;height:30px;color:#ffffff}
</style>


</head>	
<body>
<div class="container">
	<h3>Add Post</h3>
	
	
	<form action="" method="post">
	<input type="id" name="id" placeholder="insert id" required>
        <input type="text" name="name" placeholder="insert name" required>
        <input type="text" name="branch" placeholder="insert branch" required>
        <input type="text" name="college" placeholder="insert college" required>
        <input type="text" name="year" placeholder="insert year" required>
		
		<button type="submit" name="submit">Submit</button>
	</form>
</div>


<Br>
<table border=1 width=700 align='center'>
<tr>
<th>id</th>
<th>Name</th>
<th>Branch</th>
<th>College</th>
<th>Year</th>
<th>Delete</th>
<th>Update</th>

</tr>
<?php
include("config.php");
$q=mysql_query("select * from studentda",$x);
while($r=mysql_fetch_assoc($q))
{?>
<tr>
<td><?php  echo $r["id"];?></td>
<td><?php  echo $r["name"];?></td>
<td><?php  echo $r["branch"];?></td>
<td><?php  echo $r["college"];?></td>
<td><?php  echo $r["year"];?></td>
<td><a href="del.php?id=<?php  echo $r["id"];?>">delete</a></td>
<td><a href="update.php?id=<?php  echo $r["id"];?>">Update</a></td></tr>
<?php }

?>
</body>
</html>
