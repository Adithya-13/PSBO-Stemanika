<?php
ob_start();
?>
<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../databases/connection.php';

// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];
$remember_me = $_POST['remember'];

// menyeleksi data user dengan email dan password yang sesuai
$login = mysqli_query($connection, "SELECT * FROM users WHERE email='$email' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah email dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['id_levels'] == 0) {

        // buat session login dan email
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $data['name'];
        $_SESSION['level'] = 0;
        // alihkan ke halaman dashboard admin
        header("location:../pages/admin/verify_list_page.php");
        ob_end_flush();

        // cek jika user login sebagai pegawai
    } else if ($data['id_levels'] == 1) {
        // buat session login dan email
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $data['name'];
        $_SESSION['level'] = 1;
        // alihkan ke halaman dashboard pegawai
        if (isset($data['id_majority'])) {
            header("location:../pages/user/user_detail_user_page.php?id=$data[id]");
            ob_end_flush();
        } else {
            header("location:../pages/user/user_page.php");
            ob_end_flush();
        }
    } else {
        header("location:../pages/error_page.php?id=unidentified_user");
        ob_end_flush();
    }
} else {
    header("location:../pages/error_page.php?id=user_not_registered");
    ob_end_flush();
}
