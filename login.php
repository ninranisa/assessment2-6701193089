<?php
$conn = mysqli_connect('localhost','root', '', 'dataipk');
 ?>
<?php
session_start();
if (empty($_SESSION['user'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body bgcolor="#C8A2C8">
	<br><br>
<table align="center" cellpadding="10" cellspacing="2" bgcolor="white" style="width: 29%">
<form action="" method="post">
	<tr>
		<th colspan="2" align="center" style="color: #7C3F7C"><H2 >LOGIN</H2></th>
	</tr>
	<tr>
		<td align="right"><label style="color: #7C3F7C">Username : </label></td>
		<td align="center"><input type="text" name="username" style="border-color: #7C3F7C" placeholder="Masukkan username anda..."></td>
	</tr>
	<tr>
		<td align="right"><label style="color: #7C3F7C">Password : </label></td>
		<td align="center"><input type="password" name="katasandi" style="border-color: #7C3F7C" placeholder="Masukkan password anda..."></td>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="login"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><a href="regist.php">Belum mempunyai akun? Regist Here.</a></td>
	</tr>
</form>
</table>
<?php

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$katasandi = md5($_POST['katasandi']);
	$sql      = "SELECT * FROM mhs WHERE username=LOWER('$username') AND katasandi='$katasandi';";
	$result     = $conn->query($sql);
	$row        = $result->fetch_assoc();
	if (!empty($row)) {
		$_SESSION['user']=$username;
		echo "<script> location= 'home.php'; </script>";
	} else{
		echo "Username atau Password salah";
	}
}
 ?>
</body>
</html>
<?php
} else{
	header("location: home.php");
} ?>