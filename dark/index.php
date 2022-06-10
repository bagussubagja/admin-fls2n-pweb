<?php
include "../koneksi.php";
$result = mysqli_query($koneksi, "SELECT * FROM movies");
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Admin | FLS2N WEB</title>

    <link rel="stylesheet" href="../assets/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../assets/vendor/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="../assets/vendor/charts-c3/plugin.css" />
    <link rel="stylesheet" href="../assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css" />
    <link rel="stylesheet" href="../assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/dark.css" type="text/css">
</head>

<body class="theme-black full-dark">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="../assets/images/brand/icon_black.svg" width="48" height="48" alt="ArrOw"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <nav class="navbar custom-navbar navbar-expand-lg py-2">
        <div class="container-fluid px-0">
            <a href="javascript:void(0);" class="menu_toggle"><i class="fa fa-align-left"></i></a>
            <a href="./index.php" class="navbar-brand"><img src="../assets/images/brand/icon.svg" alt="BigBucket" /> <strong>FLS2N |</strong> Admin </a>
            <div id="navbar_main">
                <ul class="navbar-nav mr-auto hidden-xs">
                    <li class="nav-item page-header">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./index.php"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item hidden-xs">
                        <form class="form-inline main_search">
                            <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search..." aria-label="Search">
                        </form>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <h6 class="dropdown-header">Admin menu</h6>
                            <a class="dropdown-item" href="../api/auth_logout_process.php"><i class="fa fa-sign-out text-primary"></i>Sign out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main_content" id="main-content">

        <div class="left_sidebar">
            <nav class="sidebar">
                <div class="user-info">
                    <div class="image"><a href="javascript:void(0);"><img src="../assets/images/user.png" alt="User"></a></div>
                    <div class="detail mt-3">
                        <h5 class="mb-0">Groove Street Families</h5>
                        <small>Admin</small>
                    </div>
                </div>
                <ul id="main-menu" class="metismenu">
                    <li class="g_heading">Main Menu</li>
                    <li><a href="./index.php"><i class="ti-home"></i><span>Dashboard</span></a></li>
                    <li class="g_heading">Movie Menu</li>
                    <li><a href="./show_movie_data.php"><i class="ti-server"></i><span>Tampilkan Data Film</span></a></li>
                    <li><a href="./add_movie_data.php"><i class="ti-plus"></i><span>Tambahkan Data Film</span></a></li>
                    <li class="g_heading">User Menu</li>
                    <li><a href="./show_user_data.php"><i class="ti-user"></i><span>Tampilkan Data User</span></a></li>
                    <li><a href="./add_user_data.php"><i class="ti-plus"></i><span>Tambahkan Data User</span></a></li>
                    <li class="g_heading">Log Kejadian</li>
                    <li><a href="./show_log_movie_data.php"><i class="ti-list"></i><span>Tampilkan Log Data Film</span></a></li>
            </nav>
        </div>

        <div class="page">

            <div class="container-fluid">

                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>Admin Homepage<small>Berikut adalah data film lomba FLS2N yang tersimpan pada database</small></h2>
                            </div>
                            <div class="body">
                                <div class="gallery b4gallery" style="display:none;">
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<img link=" . $row['embedded_link'] . " class='gallery-item' src='" . $row['thumbnail'] . "' alt='' />";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Core -->
    <script src="../assets/bundles/libscripts.bundle.js"></script>
    <script src="../assets/bundles/vendorscripts.bundle.js"></script>

    <script src="../assets/vendor/LightboxGallery/mauGallery.min.js"></script>
    <script src="../assets/vendor/LightboxGallery/scripts.js"></script>

    <script src="../assets/bundles/c3.bundle.js"></script>
    <script src="../assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->

    <script src="../assets/js/theme.js"></script>
    <script src="../assets/js/pages/index.js"></script>
    <script src="../assets/js/pages/todo-js.js"></script>
</body>

</html>