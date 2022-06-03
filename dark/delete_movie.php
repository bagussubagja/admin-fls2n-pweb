<?php
include "../koneksi.php";
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM movies WHERE id='$id'");
header("Location: ./show_movie_data.php");
