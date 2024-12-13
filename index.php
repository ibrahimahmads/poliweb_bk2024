<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- <link rel="stylesheet" href="plugins/adminlte/adminlte.min.css" /> -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" />
    <title>Poliklinik</title>
  </head>
  <body class="bg-dark">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
      <div class="container">
        <a class="navbar-brand fs-4" href="#">Poliklinik</a>
        <button
          class="navbar-toggler shadow-none border-0"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- sidebar -->
        <div
          style="
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(20px);
          "
          class="offcanvas offcanvas-start"
          tabindex="-1"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <!-- sidebar header -->
          <div class="offcanvas-header text-white border-bottom">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
              Poliklinik
            </h5>
            <button
              type="button"
              class="btn-close btn-close-white shadow-none"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <!-- sidebar body -->
          <div class="offcanvas-body d-flex flex-column flex-lg-row p-1">
            <ul
              class="navbar-nav justify-content-center justify-content-lg-end align-items-center fs-5 flex-grow-1 pe-3 mx-2"
            >
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
            </ul>
            <!-- button login -->
            <div
              class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3"
            >
              <a class="text-white" href="#tempat-login">Masuk</a>
              <a
                class="text-white text-decoration-none rounded-4 px-3 py-1"
                href="#Daftar"
                style="background-color: #f94ca4"
                >Daftar</a
              >
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!-- Paralax -->
    <section class="vh-100" style="overflow-x: hidden">
      <img src="img/bg/nomoon.png" id="bg3" />
      <img src="img/bg/background_poli1EX.png" id="bg1" />
      <img src="img/bg/background_poli2EX.png" id="bg2" />
      <img src="img/bg/moon.png" id="moon" />
      <h2 id="text" class="text-white">
        <b
          >Sistem Temu Janji<br />
          Pasien - Dokter</b
        >
      </h2>
      <img src="img/bg/background_poli.png" id="bgfront" />
    </section>

    <!-- Isi Konten -->
    <section
      class="vh-100 d-flex flex-column justify-content-center align-items-center content"
      id="tempat-login"
    >
      <marquee
        class="fs-5 text-warning p-3 w-100"
        style="background-color: rgba(0, 0, 0, 0.7)"
      >
        <span id="marqueeText"
          >Jaga Jarak dan Tetap Sehat di Poliklinik Udinus!</span
        >
      </marquee>
      <div class="container mt-5">
        <div class="row justify-content-center login-section">
          <!-- Card Pasien -->
          <div class="col-md-6 mb-4">
            <div class="card" style="background-color: #1a1a1a; color: #eaeaea">
              <div class="card-body text-center">
                <i
                  class="fas fa-bed fa-fw mb-3 text-primary"
                  style="font-size: 34px"
                ></i>
                <h3 class="text-primary"><b>PASIEN</b></h3>
                <p class="card-text fs-5">
                  Untuk mendapatkan layanan kesehatan dari Poliklinik, silahkan
                  login terlebih dahulu
                </p>
                <a href="loginUser.php" class="btn btn-primary w-100">Masuk</a>
              </div>
            </div>
          </div>
          <!-- Card Dokter -->
          <div class="col-md-6 mb-4">
            <div class="card" style="background-color: #1a1a1a; color: #eaeaea">
              <div class="card-body text-center">
                <i
                  class="fas fa-stethoscope fa-fw mb-3 text-success"
                  style="font-size: 34px"
                ></i>
                <h3 class="text-success"><b>DOKTER</b></h3>
                <p class="card-text fs-5">
                  Untuk memulai melayani kesehatan pasien di Poliklinik,
                  silahkan login terlebih dahulu
                </p>
                <a href="login.php" class="btn btn-success w-100">Masuk</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
