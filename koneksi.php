<?php
$koneksi = mysqli_connect("localhost:3306", "root", "");
mysqli_select_db($koneksi, "admin_fls2n_web") or die("Koneksi tidak ditemukan");
