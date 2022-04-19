<?php

if (isset($_GET['id'])) {
    if ($_GET['id'] == "unidentified_user") {
        $header = "Unidentified User";
        $content = "User level not detected";
    } else if ($_GET['id'] == "user_not_registered") {
        $header = "User not Registered";
        $content = "User have not registered, please register first";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        PSBO
        <?php
        echo $header;
        ?>
    </title>
    <link rel="icon" href="../dist/img/favicon.ico" type="image/ico">
    <link rel="apple-touch-icon" sizes="180x180" href="../dist/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../dist/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../dist/img/favicon-16x16.png">
    <link rel="manifest" href="../dist/img/site.webmanifest">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Content Wrapper. Contains page content -->
    <div class="wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><?php echo $header ?></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Error Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="error-page">
                <!-- <h2 class="headline text-danger">500</h2> -->

                <div class="error">
                    <h3><i class="fas fa-exclamation-triangle text-danger"></i> <?php echo $content ?></h3>

                    <p>
                        We will work on fixing that right away.
                        Meanwhile, you may <a href="../index.html">return to dashboard</a> or try using the search form.
                    </p>

                    <form class="search-form">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" name="submit" class="btn btn-danger"><i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.input-group -->
                    </form>
                </div>
            </div>
            <!-- /.error-page -->

        </section>
        <!-- /.content -->
    </div>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
</body>

</html>