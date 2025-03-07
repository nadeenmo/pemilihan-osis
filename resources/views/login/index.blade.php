<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!--  ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="resources/css/login.css"> 
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- ===== CSS ===== -->
</head>

<body>
    <div class="logo">
        <img src="public/img/logo.png">
    </div>

    <div class="tampilan">
        <img src="public/img/pemilihan.png">
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
                <a href="{!!route('password.request')!!}" method="POST" class="text forgot">Forgot password?</a>
            </div>
            <div class="input-field button">
                <input type="button" value="Login Now">
            </div>
        </form>

        <div class="login-signup">
        </div>
        </div>
    </div>
    </div>
</body>

<footer>
    <script type="module">
        document.getElementById('adminForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah form dari pengiriman default

    const adminUsername = document.getElementById('adminUsername').value;
    const adminPassword = document.getElementById('adminPassword').value;

    // Validasi login admin (contoh sederhana)
    if (adminUsername === 'admin' && adminPassword === 'admin123') {
        alert('Login Admin Berhasil!');
        // Redirect atau lakukan sesuatu setelah login berhasil
    } else {
        alert('Username atau Password Admin salah!');
    }
});

document.getElementById('userForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah form dari pengiriman default

    const userUsername = document.getElementById('userUsername').value;
    const userPassword = document.getElementById('userPassword').value;

    // Validasi login user (contoh sederhana)
    if (userUsername === 'user' && userPassword === 'user123') {
        alert('Login User Berhasil!');
        // Redirect atau lakukan sesuatu setelah login berhasil
    } else {
        alert('Username atau Password User salah!');
    }
});

    </script>

</footer>
</html>