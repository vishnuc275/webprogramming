<html>
<head></head>
<title>Student Registration</title>
<body>
<form method="post" action="student.php" >
<h1 style="text-align:center"><u>STUDENT REGISTRATION FORM</u></h1>

<table align="center">
<tr>
<td>STUDENT ID</td>
<td>:</td>
<td><input type="text" name="id"></td></tr>
<tr>
<td>NAME</td>
<td>:</td>
<td><input type="text" name="name"></td></tr>
<tr>
<td>BRANCH</td>
<td>:</td>
<td><input type="text" name="branch"></td></tr>
<tr>
<td>MARKS</td>
<td>:</td>
<td><input type="text" name="mark"></td></tr>
<tr>
<td>&nbsp;</td></tr>
<tr>
<td colspan="2" style="text-align:right"><input type="submit" name="insert" value="insert"></td></tr>
</table>
</form>

<div align="center">

<form method="POST" action="student.php">
<h1 style="text-align:center"><u>UPDATE DATA</u></h1>
<input type="text" name="search_id" >
<input type="submit" name="search" value="SEARCH">
<input type="submit" name="view" value="VIEW">
</form>
</div>
<?php
$con=mysqli_connect("localhost","20mca020","2444","20mca020");
if(isset($_POST['insert']))
{
if($con)
{
$id=$_POST["id"];
$name=$_POST["name"];
$branch=$_POST["branch"];
$mark=$_POST["mark"];

$query="insert into STUDENT(id,name,branch,mark) values('$id','$name','$branch','$mark')";
if(mysqli_query($con,$query))
{
echo "data inserted !";
}
}
}

if(isset($_POST["search"]))
{
$sid=$_POST["search_id"];
$query="select*from STUDENT where id='$sid'";
$data=mysqli_query($con, $query);
?>

<h1 style="text-align:center"><u>STUDENT DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>SL.NO</th>
<th>STUDENT ID</th>
<th>STUDENT NAME</th>
<th>BRANCH</th>
<th>MARK</th>
</tr>

<?php
$res=mysqli_fetch_array($data);
?>
<tr>
<td><?php echo $res['id'];?></td>
<td><?php echo $res['name'];?></td>
<td><?php echo $res['branch'];?></td>
<td><?php echo $res['mark'];?></td>
<td><a href="update.php?id=<?php echo $res['id'];?>">UPDATE</a></td>
<td><a href="delete.php?id=<?php echo $res['id'];?>">DELETE</a></td>
</tr>
</table>

<?php
}

if(isset($_POST["view"]))
{
$query="select*from STUDENT";
$data=mysqli_query($con, $query);
?>
<h1 style="text-align:center"><u>STUDENT DETAILS</u></h1>
<table align="center" border="1">
<tr>

<th>STUDENT ID</th>
<th>STUDENT NAME</th>
<th>BRANCH</th>
<th>MARK</th>
</tr>

<?php
while($res=mysqli_fetch_array($data))
{
?>
<tr>
<td><?php echo $res['id'];?></td>
<td><?php echo $res['name'];?></td>
<td><?php echo $res['branch'];?></td>
<td><?php echo $res['mark'];?></td>
</tr>
<?php
}
}
?>
</table>
</body>
</html>
