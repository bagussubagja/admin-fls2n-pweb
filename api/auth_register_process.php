<?php

include '../koneksi.php';

session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$name = $_POST['name'] ?? '';


if (mysqli_query($koneksi, "INSERT INTO superadmin (`username`, `password`, `name`) VALUES ('$username', '$password', '$name')")) {
    $_SESSION['username'] = $username;
    $_SESSION['name'] = $name;
    $_SESSION['status'] = "LOGGED_IN";
    header("location: ../index.php");
} else {
    echo "
        <script>
            alert('Ada kesalahan!');
            window.location.href = '../dark/auth-register.php';
        </script>";
}
