<html>
<head></head>
<title>Student Registration</title>
<body>
<?php 
$id=$_GET['id'];
$con=mysqli_connect("localhost","20mca020","2444","20mca020");
$query="select*from STUDENT where id='$id'";
$res=mysqli_query($con, $query);
$r=mysqli_fetch_array($res);
?>
<form method="POST" action="update.php" >
<h1 style="text-align:center"><u>UPDATE</u></h1>
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<table align="center">
<tr>
<td>STUDENT ID</td>
<td>:</td>
<td><input type="text" name="id" value="<?php echo $r['id'];?>"></td></tr>
<tr>
<td>STUDENT NAME</td>
<td>:</td>
<td><input type="text" name="name" value="<?php echo $r['name'];?>"></td></tr>
<tr>
<td colspan="2" style="text-align:right"><input type="submit" value="update" name="update"></td></tr>
</table>
</form>
<?php
if(isset($_POST["update"]))
{
$id=$_POST["id"];
$name=$_POST["name"];
$query1="update STUDENT set name='$name' where id='$id'";
if(mysqli_query($con, $query1))
{
echo "Data updated successfully !<br>";
}
}
?>
</body>
</html>
