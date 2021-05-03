<?php $conn = new mysqli("localhost","root","","dataipk"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Laman Registrasi</title>
</head>
<body bgcolor="#C8A2C8">
	<nav></nav>
	<br>	<br>
	<table align="center" bgcolor="white" cellpadding="10" cellspacing="3" style="width: 40%" style="box-shadow: 100px">
	<form action="" method='post' enctype="multipart/form-data">
		<tr>
			<TH colspan= "2" align = "center" ><h2 style="color: #7C3F7C">REGISTRASI</h2></TH>
		</tr>
		<tr>
			<td align="right"><label style="color: #7C3F7C"><b>Nama				:	</b></label></td>
			<td align="center"><input type="text" name="nama" placeholder="Nama Lengkap..." style="border-color: #7C3F7C"></td>
		</tr>
		<tr>
			<td align="right"><label style="color: #7C3F7C"><b>Email 			:	</b></label></td>
			<td align="center"><input type="email" name="email" placeholder="Email..." style="border-color: #7C3F7C"></td>
		</tr>
		<tr>
			<td align="right"><label style="color: #7C3F7C"><b>Password			: </b></label></td>
			<td align="center"><input type="password" name="katasandi" placeholder="Password..." style="border-color: #7C3F7C"></td>
		</tr>
		<tr>
			<td align="right"><label style="color: #7C3F7C"><b>Confirm Password	: </b></label></td>
			<td align="center"><input type="password" name="confirm" placeholder="Konfirmasi Password..." style="border-color: #7C3F7C"></td>
		</tr>
		<tr>
			<td align="right"><label style="color: #7C3F7C"><b>Username			: </b></label></td>
			<td align="center"><input type="text" name="username" placeholder="Username..." style="border-color: #7C3F7C"></td>
		</tr>
		<tr>
			<td align="left"><button style="border-color: #7C3F7C"><a href="login.php">Back</a></button></td>
			<td align="right"><input type="submit" name="submit" style="border-color: #7C3F7C"></td>
		</tr>
	</form>
</table>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
		$nama =$_POST['nama'];
		$email = $_POST['email'];
		$katasandi = $_POST['katasandi'];
		$confirm = $_POST['confirm'];
		$username = $_POST['username'];
		$sql="INSERT INTO regist VALUES (null,'$nama','$email','".md5($katasandi)."','$username')";
		$result=$conn->query($sql);
		if ($result == true) {
				echo "<script> alert('Data berhasil masuk ke database');</script>";
		} else {
				echo "<script> alert('Data gagal masuk ke database');</script>";
		}
		echo "<script> location='login.php'; </script>";
	} else {
		echo "<script> alert('Data Gagal masuk ke folder');</script>";
	}
}
 ?>