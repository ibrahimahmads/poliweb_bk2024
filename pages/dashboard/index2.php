<?php
    require 'config/koneksi.php';
    $id_poli = $_SESSION['id_poli'];

    $query_poli = "SELECT nama_poli FROM poli WHERE id = $id_poli";
    $result = mysqli_query($mysqli,$query_poli);

    if ($result) {
        // Ambil hasil query
        $row = mysqli_fetch_assoc($result);

        // Tampilkan nama poli
        $nama_poli = $row['nama_poli'];
    } else {
        // Handle error jika query gagal
        $nama_poli = "Tidak dapat mendapatkan nama poli";
    }
?>
    <!-- Content Header (Page header) -->
    <div class="content-header py-5 bg-primary text-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-center">Selamat Datang <b>Dokter <?php echo $username ?></b></h1>
                    <h4 class="m-0 text-center">Anda berada di <?php echo $nama_poli; ?></h4>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
<section class="content mt-5">
    <div class="container-fluid">

        <!-- Bagian baru untuk gambar dan running text -->
        <div class="row mb-4">
            <div class="col-12">
                <div style="background-image: url('img/bg/bg1.jpg'); background-size: cover; height: 200px; position: relative;">
                <marquee style="position: absolute; bottom: 0; background-color: rgba(0,0,0,0.5); color: white; width: 100%; padding: 10px;">
                    Pakai Masker - Tetap Jaga Protokol Kesehatan!
                </marquee>
                </div>
            </div>
        </div>

        <!-- Info boxes (existing content) -->
        <div class="row">
            <!-- ... isi tetap sama ... -->
        </div>
        <!-- /.row -->

        <!-- Custom Content Here (existing content) -->
        <div class="row">
            <!-- ... isi tetap sama ... -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
