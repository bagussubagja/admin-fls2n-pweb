<?php
include "../koneksi.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($koneksi, "INSERT INTO `database_fls2n_web`.`users` (`username`, `password`, `name`) VALUES ('$username', '$password', '$name')");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ThemeMakker">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Edit Data Movie | FLS2N Web</title>

    <link rel="stylesheet" href="../assets/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../assets/vendor/fontawesome/css/font-awesome.min.css">

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
                            <li class="breadcrumb-item active">Add Data User</li>
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
                            <h6 class="dropdown-header">Admin Menu</h6>
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
                    <li><a href="./statistics_page.php"><i class="ti-bar-chart"></i><span>Statistik</span></a></li>
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
                    <div class="col-lg-12 col-md-12">
                        <div class="card planned_task">
                            <div class="body">
                                <h4>Tambah Data Pengguna</h4>
                                <form method="post">
                                    <label for="basic-url">Nama Pengguna</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Nama Pengguna" aria-label="name" aria-describedby="basic-addon1">
                                    </div>
                                    <label for="basic-url">Username</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="username" placeholder="Username" aria-label="username" aria-describedby="basic-addon1">
                                    </div>
                                    <label for="basic-url">Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" name="password" placeholder="Password" aria-label="password" aria-describedby="basic-addon1">
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="../assets/bundles/libscripts.bundle.js"></script>
    <script src="../assets/bundles/vendorscripts.bundle.js"></script>

    <script src="../assets/js/theme.js"></script>
</body>

</html>