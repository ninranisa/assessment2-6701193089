<<!DOCTYPE html>
 <html>
 <head>
 	<title>StudentsIP.</title>
 </head>
 <body>

 	<h2>CRUD DATA MAHASISWA </h2>
 	<br/>
 	<a href="index.php">KEMBALI</a>
 	<br/>
 	<br/>
 	<h3>EDIT DATA MAHASISWA</h3>

 	<?php
 	include 'koneksi.php';
 	$id = $_GET['id'];
 	$data = mysqli_query($koneksi,"select * from dataindeks where id='$id'");
 	while($d = mysqli_fetch_array($data)){
 		?>
 		<form method="post" action="update.php">
 			<table>
 				<tr>
 					<td>Semester</td>
 					<td>
 						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
 						<input type="text" name="semester" value="<?php echo $d['semester']; ?>">
 					</td>
 				</tr>
 				<tr>
 					<td>IP</td>
 					<td><input type="number" name="ipk" value="<?php echo $d['ipk']; ?>"></td>
 				</tr>

 				<tr>
 					<td></td>
 					<td><input type="submit" value="SIMPAN"></td>
 				</tr>
 			</table>
 		</form>
 		<?php
 	}
 	?>

 </body>
 </html>