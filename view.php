<!DOCTYPE html>
<html>
<head>
	<title>Data Nilai</title>
</head>
<body>


	<br/>
	<a href="index.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Semester</th>
			<th>IP</th>

		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from dataindeks");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['semester']; ?></td>
				<td><?php echo $d['ipk']; ?></td>

				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="delete.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php
		}
		?>
	</table>
</body>
</html>