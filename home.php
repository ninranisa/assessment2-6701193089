<?php $conn = new mysqli("localhost","root","","dataipk");
session_start();
if (isset($_SESSION['user'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>IPK</title>
</head>
<header style="background-color: #7C3F7C">
<H1><font face="Century Gothic" color="white">HOME</font></H1>


</header>
<body bgcolor="white">
	<h1 align="center">DATA IPK</h1>
<table border="1" align="center" cellpadding="10" cellspacing="2" style="width: 90%" bgcolor="white" style="border-color: #7C3F7C">
	<tr>
		<th style="color: #7C3F7C">SEMESTER</th>
		<th style="color: #7C3F7C">IPK </th>
	</tr>
<?php
$sql = " SELECT * FROM indeks";
$result = $conn->query($sql);
while ($row=$result->fetch_assoc()) { ?>
	<tr>
		<td style="color :#7C3F7C"><?php echo $row['semester'] ?></td>
		<td style="color :#7C3F7C"><?php echo $row['ipk'] ?></td>
		<td><a href="delete.php?id=<?=$row['id']?>">Hapus</a></td>
	</tr>
<?php
}
?>
</table>
<br><br>
<footer style="background-color: #7C3F7C" ><font face="Century Gothic" color="white" ><h2 align="right"><a href="logout.php" style="background-color: white" >LogOut</a></h2></font></footer>
</body>
</html>
<?php
} else{
	header("location: login.php");
}
 ?>