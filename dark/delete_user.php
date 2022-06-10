<?php
include "../koneksi.php";
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM users WHERE id='$id'");
header("Location: ./show_user_data.php");
