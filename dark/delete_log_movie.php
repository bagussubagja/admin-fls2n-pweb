<?php
include "../koneksi.php";
$result = mysqli_query($koneksi, "DELETE FROM log_movie");
header("Location: ./index.php");
