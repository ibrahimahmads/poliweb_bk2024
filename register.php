<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" />
    <!-- Tambahan CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('img/bg/mesh2.png'); /* Ganti dengan path gambar Anda */
            background-size: cover; /* Gambar menyesuaikan ukuran layar */
            background-repeat: no-repeat; /* Gambar tidak diulang */
            background-position: center;
        }

        .container {
            display: flex;
            width: 1100px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.4);
        }

        .sign-up {
            flex: 1;
            background-color: #ffffff;
            padding: 40px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .sign-up h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .sign-up form {
            width: 100%;
            max-width: 320px;
        }

        .sign-up input {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .sign-up button {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #6c757d;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .sign-up button:hover {
            background-color: #212529;
        }

        .sign-up a{
            width: 320px;
            margin-top: 5px;
            padding: 10px 20px;
            border: 2px solid #7f7f7f;
            background: transparent;
            color:  #7f7f7f;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
        }

        .sign-up a:hover{
            background-color: #7f7f7f;
            color: white;
        }

        .sign-in {
            flex: 1;
            background-color: rgba(255, 255, 255, 0.05);
            color: white;
            padding: 40px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .sign-in h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .sign-in p {
            font-size: 16px;
            margin-bottom: 20px;
            text-align: center;
        }

        .sign-in a {
            padding: 10px 20px;
            border: 2px solid white;
            background: transparent;
            color: white;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
            width: 140px;
            text-align: center;
        }

        .sign-in a:hover {
            background-color: white;
            color: #7f7f7f;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="sign-in">
            <h2>Halo, Sobat Poli!</h2>
            <p>Sudah punya akun? buruan login untuk mendapatkan layanan kesehatan dari poliklinik kami</p>
            <a href="loginUser.php">Login disini</a>
            <a href="index.php#tempat-login" style="margin-top: 8px;">Home</a>
        </div>
        <div class="sign-up">
            <br><br>
            <h4 class="text-center">Registrasi Disini </h4>
            <p class="login-box-msg text-center">Data Diri <span
                class="text-primary">Pasien</span> </p>
            <form action="pages/register/checkRegister.php" method="post">
                <label for="nama">Nama :</label>
                <input type="text" class="form-control" name="nama" required>

                <label for="no_hp">Nomor KTP :</label>
                <input type="number" class="form-control" name="no_ktp" required>

                <label for="no_hp">Alamat :</label>
                <input class="form-control" id="alamat" name="alamat" required></input>

                <label for="no_hp">Nomor Handphone :</label>
                <input type="number" class="form-control" name="no_hp" required>

                <!-- Catatan untuk password -->
                <p class="text-muted mt-2">
                    <small><em>Catatan: Password akun Anda akan sama dengan alamat yang diisi. jadi buat alamat semudah mungkin untuk diingat.</em></small>
                </p>

                <button type="submit" class="btn btn-block btn-primary">
                    Buat Akun
                </button>
            </form>
        </div>
    </div>
    </div>

</body>

</html>
</script>
</body>

</html>