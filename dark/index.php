<?php
include "../koneksi.php";
$result = mysqli_query($koneksi, "SELECT * FROM movies");
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
                        <h5 class="mb-0">Bagus Subagja</h5>
                        <small>Admin</small>
                    </div>
                    <div class="social">
                        <a href="javascript:void(0);" title="facebook"><i class="ti-twitter-alt"></i></a>
                        <a href="javascript:void(0);" title="twitter"><i class="ti-linkedin"></i></a>
                        <a href="javascript:void(0);" title="instagram"><i class="ti-facebook"></i></a>
                    </div>
                </div>
                <ul id="main-menu" class="metismenu">
                    <li class="g_heading">Main Menu</li>
                    <li><a href="./index.php"><i class="ti-home"></i><span>Dashboard</span></a></li>
                    <li class="g_heading">Movie Menu</li>
                    <li><a href="./show_movie_data.php"><i class="ti-list"></i><span>Tampilkan Data Film</span></a></li>
                    <li><a href="./add_movie_data.php"><i class="ti-list"></i><span>Tambahkan Data Film</span></a></li>
                    <li class="g_heading">User Menu</li>
                    <li><a href="./show_user_data.php"><i class="ti-list"></i><span>Tampilkan Data User</span></a></li>
                    <li><a href="./add_user_data.php"><i class="ti-list"></i><span>Tambahkan Data User</span></a></li>
                    <li class="g_heading">Log Kejadian</li>
                    <li><a href="ui-elements.html"><i class="ti-vector"></i><span>UI Elements</span></a></li>
                    <li class="g_heading">Application</li>
                    <li><a href="app-calendar.html"><i class="ti-calendar"></i><span>Calendar</span></a></li>
                    <li><a href="app-taskboard.html"><i class="ti-notepad"></i><span>TaskBoard</span></a></li>
                    <li><a href="app-inbox.html"><i class="ti-email"></i><span>Inbox</span></a></li>
                    <li><a href="app-chat.html"><i class="ti-comments"></i><span>Chat Apps</span></a></li>
                    <li><a href="app-contact.html"><i class="ti-id-badge"></i><span>Contact List</span></a></li>
                    <li><a href="widgets.html"><i class="ti-widget"></i><span>Widgets</span></a></li>
                    <li class="g_heading">Chart, Froms & Elements</li>
                    <li>
                        <a href="javascript:void(0)" class="has-arrow"><i class="ti-pie-chart"></i><span>Charts</span></a>
                        <ul>
                            <li><a href="chart-c3.html">C3 Chart</a></li>
                            <li><a href="chartsjs.html">Charts JS</a></li>
                            <li><a href="chart-flot.html">Flot Chart</a></li>
                            <li><a href="chart-knob.html">JQuery Knob</a></li>
                            <li><a href="chart-morris.html">Morris Chart</a></li>
                            <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="has-arrow"><i class="ti-pencil-alt"></i><span>Forms</span></a>
                        <ul>
                            <li><a href="form-elements.html">Basic Elements</a></li>
                            <li><a href="form-advanced.html">Advanced Elements</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-summernote.html">Summernote</a></li>
                            <li><a href="form-markdown.html">Markdown</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="has-arrow"><i class="ti-view-list"></i><span>Tables</span></a>
                        <ul>
                            <li><a href="table-basic.html">Table Example</a></li>
                            <li><a href="table-normal.html">Table Normal</a></li>
                            <li><a href="table-datatable.html">Jquery Datatable</a></li>
                            <li><a href="table-editable.html">Table Editable</a></li>
                            <li><a href="table-color.html">Table Color</a></li>
                            <li><a href="table-filter.html">Table Filter</a></li>
                        </ul>
                    </li>
                    <li class="g_heading">Users</li>
                    <li><a href="page-profile.html"><i class="ti-user"></i><span>Profile</span></a></li>
                    <li><a href="page-timeline.html"><i class="ti-menu-alt"></i><span>Timeline</span></a></li>
                    <li><a href="page-invoices.html"><i class="ti-file"></i><span>Invoices</span></a></li>
                    <li class="g_heading">Authentication</li>
                    <li class="open-top">
                        <a href="javascript:void(0)" class="has-arrow"><i class="ti-lock"></i><span>Authentication</span></a>
                        <ul>
                            <li><a class="dropdown-item" href="auth-login.html">Login</a></li>
                            <li><a class="dropdown-item" href="auth-register.html">Register</a></li>
                            <li><a class="dropdown-item" href="auth-forgot-password.html">Forgot password</a></li>
                            <li><a class="dropdown-item" href="auth-lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                    <li class="open-top">
                        <a href="javascript:void(0)" class="has-arrow"><i class="ti-na"></i><span>Error Pages</span></a>
                        <ul>
                            <li><a class="dropdown-item" href="error-400.html">400 error</a></li>
                            <li><a class="dropdown-item" href="error-401.html">401 error</a></li>
                            <li><a class="dropdown-item" href="error-403.html">403 error</a></li>
                            <li><a class="dropdown-item" href="error-404.html">404 error</a></li>
                            <li><a class="dropdown-item" href="error-500.html">500 error</a></li>
                            <li><a class="dropdown-item" href="error-503.html">503 error</a></li>
                        </ul>
                    </li>
                    <li class="g_heading">Extra</li>
                    <li class="open-top">
                        <a href="javascript:void(0)" class="has-arrow"><i class="ti-clipboard"></i><span>Pages</span></a>
                        <ul>
                            <li><a href="page-empty.html">Empty page</a></li>
                            <li><a href="page-pricing.html">Pricing cards</a>
                            <li><a href="page-search.html">Search Results</a></li>
                            <li><a href="page-testimonials.html">Testimonials</a></li>
                            <li><a href="page-maps.html">Maps</a></li>
                            <li><a href="page-icons.html">Icons</a></li>
                            <li><a href="page-carousel.html">Carousel</a></li>
                            <li><a href="page-gallery.html">Gallery</a></li>
                            <li><a href="page-lookup.html">Lookup</a></li>
                        </ul>
                    </li>
                    <li><a href="../docs/introduction.html"><i class="ti-file"></i><span>Documentation</span></a></li>
                </ul>
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