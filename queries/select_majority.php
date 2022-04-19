<?php
ob_start();
?>
<?php
// include database connection file
include_once("../databases/connection.php");

// Check if form is submitted for user update, then redirect to homepage after update
$id = $_GET['id'];
$id_majority = $_GET['id_majority'];
// update user data
$result = mysqli_query($connection, "UPDATE users SET id_majority = $id_majority, id_status = 0 WHERE id=$id");
// Redirect to homepage to display updated user in list
header("Location: ../pages/user/user_detail_user_page.php?id=$id");
ob_end_flush();
?>