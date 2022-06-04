<?php
include "../koneksi.php";
$result = mysqli_query($koneksi, "SELECT * FROM log_movie");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ThemeMakker">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Admin | FLS2N WEB</title>

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
                            <li class="breadcrumb-item active">Show Log Movie Data</li>
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
                            <h6 class="dropdown-header">User menu</h6>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-user text-primary"></i>My Profile</a>
                            <a class="dropdown-item" href="javascript:void(0);"><span class="float-right badge badge-success">$50K</span><i class="fa fa-briefcase text-primary"></i>My Balance</a>
                            <a class="dropdown-item" href="javascript:void(0);"><span class="float-right badge badge-warning">4</span><i class="fa fa-envelope text-primary"></i>Inbox</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-cog text-primary"></i>Settings</a>
                            <div class="dropdown-divider" role="presentation"></div>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-sign-out text-primary"></i>Sign out</a>
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
                    <div class="col-lg-12 col-md-12">
                        <div class="card planned_task">
                            <div class="header">
                                <h2>Festival dan Lomba Seni Siswa Nasional</h2>
                            </div>
                            <div class="body">
                                <h4>Daftar Pengguna Gallery FLS2N WEB</h4>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0 c_list">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID Film</th>
                                                <th>Nama Film</th>
                                                <th>Log Status</th>
                                                <th>Waktu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            while ($log_data = mysqli_fetch_array($result)) {
                                                echo "<tr>";
                                                echo "<td>$no</td>";
                                                echo "<td>" . $log_data['id'] . "</td>";
                                                echo "<td>" . $log_data['name'] . "</td>";
                                                echo "<td>" . $log_data['status'] . "</td>";
                                                echo "<td>" . $log_data['created_date'] . "</td>";
                                                $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <button onclick="location.href='./delete_log_movie.php'" type="button" class="btn btn-block btn-primary">Delete</button>
                                </div>
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