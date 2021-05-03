<?php $conn = new mysqli("localhost", "root", "", "dataipk");
$sql = "SELECT * FROM indeks WHERE semester='$_GET[semester]'";
$result = $conn->query($sql);
while ($row=$result->fetch_assoc()) {
	$semester = $row['semester'];
	$ipk = $row['ipk'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">
		<label>SEMESTER</label>
		<input type="text" name="semester" value="<?=$semester?>"><br>
		<label>IPK</label>
		<input type="text" name="ipk" value="<?=$ipk?>"> <br>
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
	$sql = "UPDATE `indeks` SET `semester`='$_POST[semester]',`ipk`='$_POST[ipk]' WHERE semester=$_GET[semester]";
	$result = $conn->query($sql);
	echo "<script> alert('Data berhasil diubah');</script>";
	echo "<script> location='home.php'; </script>";
}
 ?>