<?php
ob_start();
?>
<?php
// mengaktifkan session php
session_start();

// menghapus semua session
session_destroy();

// mengalihkan halaman ke halaman login
header("location:../index.php");
ob_end_flush();