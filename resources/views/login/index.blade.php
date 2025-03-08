<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!--  ===== Iconscout CSS ===== -->
    @vite(["resources/css/login.css", "resources/js/app.js"])
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- ===== CSS ===== -->
</head>

<body>
    <div class="logo">
        <img src="img/Logo.png">
    </div>

    <div class="tampilan">
        <img src="img/pemilihan.png">
    </div>

    <div class="forms">
        <div class="form login">
            <span class="title">Log In</span>
        </div>

        <div class="container">
            <form action="#">
                <div class="input-field userName">
                    <span class="judul">Username</span><br>
                    <input type="text" id="userName" placeholder="Masukkan NIS/NISN" required>
                </div>
                <div class="input-field passWord">
                    <span class="judul">Kode Akses</span><br>
                    <input type="password" id="passWord" placeholder="Masukkan Kode" required>
                </div>
                <div class="checkbox-text">
                    <div class="checkbox-content">
                        <input type="checkbox" id="logCheck">
                        <label for="logCheck" class="text">Remember me</label>
                    </div>
                    <a method="POST" class="text forgot">Forgot password?</a>
                </div>
                <div class="input-field button">
                    <input type="button" value="Log In">
                </div>
            </form>

            <div class="login-signup">
            </div>
        </div>
    </div>
    </div>

    <script src="script.js"></script>
</body>

<footer>

</footer>

</html>