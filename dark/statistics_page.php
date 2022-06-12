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
                            <li class="breadcrumb-item active">Statistik Data Film</li>
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
                            <div class="header">
                                <h2>Statistik Data Film FLS2N</h2>
                            </div>
                            <div class="body">

                                <div class="col-lg-9">
                                    <p>Jumlah Film yang memiliki peringkat 1 : <?php
                                                                                include "../koneksi.php";
                                                                                $result = mysqli_query($koneksi, "SELECT show_total_movie_by_p1()");
                                                                                while ($row = mysqli_fetch_array($result)) {
                                                                                    echo $row['show_total_movie_by_p1()'];
                                                                                }
                                                                                ?> Film</p>
                                </div>
                                <div class="col-lg-9">
                                    <p>Jumlah Film yang memiliki peringkat 2 : <?php
                                                                                include "../koneksi.php";
                                                                                $result = mysqli_query($koneksi, "SELECT show_total_movie_by_p2()");
                                                                                while ($row = mysqli_fetch_array($result)) {
                                                                                    echo $row['show_total_movie_by_p2()'];
                                                                                }
                                                                                ?> Film</p>
                                </div>
                                <div class="col-lg-9">
                                    <p>Jumlah Film yang memiliki peringkat 3 : <?php
                                                                                include "../koneksi.php";
                                                                                $result = mysqli_query($koneksi, "SELECT show_total_movie_by_p3()");
                                                                                while ($row = mysqli_fetch_array($result)) {
                                                                                    echo $row['show_total_movie_by_p3()'];
                                                                                }
                                                                                ?> Film</p>
                                </div>
                                <div class="col-lg-9">
                                    <p>Jumlah Film yang tidak memiliki peringkat : <?php
                                                                                    include "../koneksi.php";
                                                                                    $result = mysqli_query($koneksi, "SELECT show_total_movie_by_p0()");
                                                                                    while ($row = mysqli_fetch_array($result)) {
                                                                                        echo $row['show_total_movie_by_p0()'];
                                                                                    }
                                                                                    ?> Film</p>
                                </div>
                                <div class="col-lg-9">
                                    <p>Jumlah Total Film pada database           : <?php
                                                                            include "../koneksi.php";
                                                                            $result = mysqli_query($koneksi, "SELECT show_total_movie()");
                                                                            while ($row = mysqli_fetch_array($result)) {
                                                                                echo $row['show_total_movie()'];
                                                                            }
                                                                            ?> Film</p>
                                </div>
                                <div class="body">
                                    <div class="page-content page-container" id="page-content">
                                        <div class="padding">
                                            <div class="row container d-flex justify-content-center">

                                                <div class="col-xl-12">
                                                    <div class="card proj-progress-card">
                                                        <div class="card-block">
                                                            <div class="row">
                                                                <div class="col-xl-3 col-md-6">
                                                                    <h6>Juara 1</h6>
                                                                    <h5 class="m-b-30 f-w-700"><?php
                                                                                                include "../koneksi.php";
                                                                                                $result = mysqli_query($koneksi, "SELECT show_total_movie_by_p1()");
                                                                                                while ($row = mysqli_fetch_array($result)) {
                                                                                                    echo $row['show_total_movie_by_p1()'];
                                                                                                }
                                                                                                ?> Film</h5>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-c-red" style="width:<?php
                                                                                                                        include "../koneksi.php";
                                                                                                                        $result = mysqli_query($koneksi, "SELECT show_total_movie_by_p1()");
                                                                                                                        $result2 = mysqli_query($koneksi, "SELECT show_total_movie()");
                                                                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                                                                            while ($row2 = mysqli_fetch_array($result2)) {
                                                                                                                                echo $row['show_total_movie_by_p1()'] / $row2['show_total_movie()'] * 100;
                                                                                                                            }
                                                                                                                        }
                                                                                                                        ?>%"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3 col-md-6">
                                                                    <h6>Juara 2</h6>
                                                                    <h5 class="m-b-30 f-w-700"><?php
                                                                                                include "../koneksi.php";
                                                                                                $result = mysqli_query($koneksi, "SELECT show_total_movie_by_p2()");
                                                                                                while ($row = mysqli_fetch_array($result)) {
                                                                                                    echo $row['show_total_movie_by_p2()'];
                                                                                                }
                                                                                                ?> Film</h5>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-c-blue" style="width:<?php
                                                                                                                            include "../koneksi.php";
                                                                                                                            $result = mysqli_query($koneksi, "SELECT show_total_movie_by_p2()");
                                                                                                                            $result2 = mysqli_query($koneksi, "SELECT show_total_movie()");
                                                                                                                            while ($row = mysqli_fetch_array($result)) {
                                                                                                                                while ($row2 = mysqli_fetch_array($result2)) {
                                                                                                                                    echo $row['show_total_movie_by_p2()'] / $row2['show_total_movie()'] * 100;
                                                                                                                                }
                                                                                                                            }
                                                                                                                            ?>%"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3 col-md-6">
                                                                    <h6>Juara 3</h6>
                                                                    <h5 class="m-b-30 f-w-700"><?php
                                                                                                include "../koneksi.php";
                                                                                                $result = mysqli_query($koneksi, "SELECT show_total_movie_by_p3()");
                                                                                                while ($row = mysqli_fetch_array($result)) {
                                                                                                    echo $row['show_total_movie_by_p3()'];
                                                                                                }
                                                                                                ?> Film</h5>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-c-green" style="width:<?php
                                                                                                                            include "../koneksi.php";
                                                                                                                            $result = mysqli_query($koneksi, "SELECT show_total_movie_by_p3()");
                                                                                                                            $result2 = mysqli_query($koneksi, "SELECT show_total_movie()");
                                                                                                                            while ($row = mysqli_fetch_array($result)) {
                                                                                                                                while ($row2 = mysqli_fetch_array($result2)) {
                                                                                                                                    echo $row['show_total_movie_by_p3()'] / $row2['show_total_movie()'] * 100;
                                                                                                                                }
                                                                                                                            }
                                                                                                                            ?>%"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3 col-md-6">
                                                                    <h6>Lainnya</h6>
                                                                    <h5 class="m-b-30 f-w-700"><?php
                                                                                                include "../koneksi.php";
                                                                                                $result = mysqli_query($koneksi, "SELECT show_total_movie_by_p0()");
                                                                                                while ($row = mysqli_fetch_array($result)) {
                                                                                                    echo $row['show_total_movie_by_p0()'];
                                                                                                }
                                                                                                ?> Film</h5>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-c-yellow" style="width:<?php
                                                                                                                            include "../koneksi.php";
                                                                                                                            $result = mysqli_query($koneksi, "SELECT show_total_movie_by_p0()");
                                                                                                                            $result2 = mysqli_query($koneksi, "SELECT show_total_movie()");
                                                                                                                            while ($row = mysqli_fetch_array($result)) {
                                                                                                                                while ($row2 = mysqli_fetch_array($result2)) {
                                                                                                                                    echo $row['show_total_movie_by_p0()'] / $row2['show_total_movie()'] * 100;
                                                                                                                                }
                                                                                                                            }
                                                                                                                            ?>%"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
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