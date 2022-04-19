<?php
ob_start();
?>
<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../databases/connection.php';

// menangkap data yang dikirim dari form login
$majority_name = $_POST['majority_name'];
$majority_description = $_POST['majority_description'];

// menyeleksi data user dengan email dan password yang sesuai
$insert = mysqli_query($connection, "INSERT INTO majorities(majority_name, majority_description) VALUES('$majority_name','$majority_description')");
// menghitung jumlah data yang ditemukan
header("location:../pages/admin/majority_list_page.php");
ob_end_flush();
