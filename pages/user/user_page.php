<?php
// Create database connection using config file
include_once("../../databases/connection.php");
session_start();

$email = $_SESSION['email'];
// Fetch all users data from database
$result = mysqli_query($connection, "SELECT * FROM majorities");

$result_user = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'");

while ($user_data = mysqli_fetch_array($result_user)) {
    $id = $user_data['id'];
    $email = $user_data['email'];
    $name = $user_data['name'];
}
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSBO Home</title>
    <link rel="icon" href="../../dist/img/favicon.ico" type="image/ico">
    <link rel="apple-touch-icon" sizes="180x180" href="../../dist/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../dist/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../dist/img/favicon-16x16.png">
    <link rel="manifest" href="../../dist/img/site.webmanifest">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="../../index3.html" class="navbar-brand">
                    <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">PSBO Stemanika</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a href="../../queries/logout.php" class="btn btn-danger btn-block"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Hi, <?php echo $name ?></small></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard User</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="" alt="SMK Negeri 1 Majalengka">
                            </div>

                            <h3 class="profile-username text-center">SMK Negeri 1 Majalengka</h3>

                            <p class="text-muted text-center">Teknologi Informasi Web khususnya, menjadi sarana bagi SMK Negeri 1 Majalengka untuk memberi pelayanan informasi secara cepat, jelas, dan akuntable. Dari layanan ini pula, sekolah siap menerima saran, tanggapan konstruktif dari semua pihak yang akhirnya sekolah akan mampu menjawab keinginan yang di butuhkan masyarakat yaitu membekali peserta didik yang kompeten dan berkarakter sesuai dengan visi dan misi SMK Negeri 1 Majalengka.</p>

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Majorities</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <tbody>
                                            <?php
                                            $number = 1;
                                            while ($user_data = mysqli_fetch_array($result)) {
                                                echo "<tr>";
                                                echo "<td style='width: 5%'>" . $number . "</td>";
                                                echo "<td style='width: 15%'>";
                                                echo '<img class="profile-user-img img-fluid img-circle" src="data:image/png;base64,' . base64_encode($user_data['majority_image']) . '"/>';
                                                echo "</td>";
                                                echo "<td style='width: 60%'>" . $user_data['majority_name'] . "</td>";
                                                echo "<td style='width: 20%'>";
                                                echo "<span class='btn bg-primary'> <a href='./majority_detail_user_page.php?id=$id&id_majority=$user_data[id_majority]'>Detail</a></span>";
                                                echo "<div style='width: 20px; height: auto; display: inline-block;'></div>";
                                                echo "<span class='btn bg-success'> <a href='../../queries/select_majority.php?id=$id&id_majority=$user_data[id_majority]'>Select</a></span>";
                                                echo "</td>";
                                                echo "</tr>";
                                                $number += 1;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div><!-- /.container-fluid -->

                <!-- Main content -->

                <!-- /.card -->
                <!-- /.content -->
            </div>
            <!-- /.content-header -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
</body>

</html>