<?php
ob_start();
?>
<?php
// include database connection file
include_once("../databases/connection.php");

// Check if form is submitted for user update, then redirect to homepage after update
$id = $_GET['id'];
$to = $_GET['to'];
if (!isset($to)) {
    $to = 'admin/verify_list_page.php';
}
// update user data
$result = mysqli_query($connection, "UPDATE users SET id_status = 0 WHERE id=$id");

// Redirect to homepage to display updated user in list
header("location:../pages/$to");
ob_end_flush();
?>