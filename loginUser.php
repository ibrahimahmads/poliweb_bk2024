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
            background-image: url('img/bg/mesh.png'); /* Ganti dengan path gambar Anda */
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

        .sign-in {
            flex: 1;
            background-color: #ffffff;
            padding: 40px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .sign-in h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .sign-in form {
            width: 100%;
            max-width: 320px;
        }

        .sign-in input {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .sign-in button {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #6c757d;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .sign-in button:hover {
            background-color: #212529;
        }

        .sign-in a{
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

        .sign-in a:hover{
            background-color: #7f7f7f;
            color: white;
        }

        .sign-up {
            flex: 1;
            background-color: rgba(255, 255, 255, 0.05);
            color: white;
            padding: 40px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .sign-up h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .sign-up p {
            font-size: 16px;
            margin-bottom: 20px;
            text-align: center;
        }

        .sign-up a {
            padding: 10px 20px;
            border: 2px solid white;
            background: transparent;
            color: white;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
        }

        .sign-up a:hover {
            background-color: white;
            color: #7f7f7f;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="sign-in">
            <h2>Login</h2>
            <p class="login-box-msg text-center">Lakukan login <span style="color: #212529;">Pasien</span> untuk mendapatkan layanan
            <br><br>
            <form action="pages/loginUser/checkLoginUser.php" method="post">
                <label for="nama">Username :</label>
                <input type="text" class="form-control" name="username">

                <label for="no_hp">Password :</label>
                <input type="password" class="form-control" name="password" required>

                <button type="submit" class="btn btn-block btn-success">
                    Masuk
                </button>
                
            </form>
            <a href="index.php#tempat-login">Home</a>
        </div>
        <div class="sign-up">
            <h2>Halo, Sobat Poli!</h2>
            <p>Daftarkan diri anda dan mulai gunakan layanan kami segera</p>
            <a href="register.php">Registrasi disini</a>
        </div>
    </div>
    </div>

</body>

</html>
