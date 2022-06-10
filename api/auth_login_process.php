<?php

include '../koneksi.php';

session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$name = $_POST['name'] ?? '';

$query = mysqli_query($koneksi, "SELECT * FROM superadmin WHERE username = '$username' AND password = '$password'");

$result = mysqli_num_rows($query);

$row = mysqli_fetch_assoc($query);


if ($result > 0) {
    $_SESSION['id'] = $id;
    $_SESSION['username'] = $username;
    $_SESSION['name'] = $name;
    header("location: ../index.php");
} else {
    echo "
        <script>
            alert('Username atau Password salah!');
            window.location.href = '../dark/auth-login.php';
        </script>";
}
