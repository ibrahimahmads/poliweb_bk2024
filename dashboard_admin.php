<!DOCTYPE html>
<?php
    session_start();
    $username = $_SESSION['username'];

    if ($username == "") {
        header("location:login.php");
    }
?>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Udinus Poliklinik</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css2/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="plugins/adminlte/adminlte.min.css">
    <style>
        /* Style umum untuk teks putih */
        .text-white {
            font-weight: 500;
            /* membuat teks sedikit lebih tebal */
        }

        /* Mengubah ukuran dan gaya font untuk judul dan konten yang berbeda */
        h1.text-white {
            font-size: 2.2rem;
            /* ukuran font yang lebih besar */
            font-family: 'Arial', sans-serif;
            /* ganti dengan font pilihan Anda */
        }

        h4.text-white {
            font-size: 1.6rem;
            font-family: 'Arial', sans-serif;
        }

        h5.text-white {
            font-size: 1.3rem;
            font-family: 'Arial', sans-serif;
        }

        /* Gaya khusus untuk teks pada info-box */
        .info-box-text {
            font-size: 1rem;
            /* menyesuaikan ukuran font */
            margin-bottom: 5px;
            /* memberikan sedikit ruang di bawah teks */
        }

        /* Gaya khusus untuk nomor pada info-box */
        .info-box-number {
            font-size: 1.2rem;
            /* menyesuaikan ukuran font */
            font-weight: bold;
            /* membuatnya tebal */
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include ('components/navbar.php') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include ('components/sidebar.php') ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php include ('pages/dashboard/index3.php') ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Halo</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js2/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="plugins/adminlte/adminlte.min.js"></script>
</body>

</html>