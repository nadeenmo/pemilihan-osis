document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('container').addEventListener('submit', function(event) {
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
    });