<!DOCTYPE html>
<?php
    session_start();
    $username = $_SESSION['username'];
    $idPasien = $_SESSION['id'];

    if ($username == "") {
        header("location:loginUser.php");
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
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="plugins/adminlte/adminlte.min.css">
    <style>
        /* Global styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Card container styles */
        .card {
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            margin: 20px;
        }

        /* Header styles */
        .card-header {
            font-size: 1.25rem;
            font-weight: bold;
            background-color: #0284c7;
            padding: 10px 15px;
            border-radius: 8px 8px 0 0;
            text-align: center;
        }

        /* Body styles */
        .card-body {
            padding: 20px;
        }

        /* Lead and text styles */
        h2.lead {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #0284c7;
        }

        .text-muted {
            color: #6c757d !important;
        }

        .text-lg {
            font-size: 1rem;
        }

        /* List styles */
        .fa-ul {
            list-style: none;
            padding-left: 0;
        }

        .fa-ul .fa-li {
            position: relative;
            left: -2em;
            margin-right: 10px;
            color: #0284c7;
        }

        ul {
            margin: 0;
            padding-left: 20px;
        }

        /* Button styles */
        .btn {
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        /* Centered column styles */
        .col-5 {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        /* Antrian number box styles */
        .rounded-lg {
            height: 60px;
            width: 60px;
            background-color: #0284c7;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            font-size: 1.5rem;
            font-weight: bold;
        }

        /* Footer styles */
        .card-footer {
            width: 100%;
            background-color: #f1f1f1;
            border-top: 1px solid #e0e0e0;
            padding: 10px 15px;
            border-radius: 0 0 8px 8px;
            text-align: left;
        }

        .card-footer a {
            width: 100%;
            background-color: #0284c7;
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        .card-footer a:hover {
            color: #f1f1f1;
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
            <?php include ('pages/detailDaftarPoli/index.php') ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="plugins/adminlte/adminlte.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#poli').on('change', function() {
            var poliId = $(this).val();

            // Mengambil data jadwal berdasarkan poli yang dipilih
            $.ajax({
                type: 'POST',
                url: 'getJadwal.php', // Ganti dengan path file get_jadwal.php sesuai dengan struktur proyek Anda
                data: {
                    poliId: poliId
                },
                success: function(data) {
                    $('#jadwal').html(data);
                }
            });
        });
    });
    </script>
</body>

</html>