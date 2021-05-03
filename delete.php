<?php
$conn = new mysqli("localhost", "root", "", "dataipk");
$semester = $_GET['semester'];
$sql = "DELETE FROM `indeks` WHERE semester='$semester'";
$result = $conn->query($sql);
echo "<script> alert('Data Sudah dihapus');</script>";
echo "<script> location='home.php'; </script>";
?>