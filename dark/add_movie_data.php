<?php
include "../koneksi.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $duration = $_POST['duration'];
    $archievement = $_POST['archievement'];
    $description = $_POST['description'];
    $level = $_POST['level'];
    $position = $_POST['position'];
    $link = $_POST['link'];
    $thumbnail = "http://img.youtube.com/vi/" . $_POST['thumbnail'] . "/maxresdefault.jpg";
    $year = $_POST['year'];
    $school = $_POST['school'];
    $embedded_link = "https://www.youtube.com/embed/" . $_POST['thumbnail'];
    $query = mysqli_query($koneksi, "INSERT INTO `database_fls2n_web`.`movies` (`name`, `duration`, `archievement`, `description`, `level`, `position`, `link`, `thumbnail`, `year`, `school`, `embedded_link`) VALUES ('$name', '$duration', '$archievement', '$description', '$level', '$position', '$link', '$thumbnail', '$year', '$school', '$embedded_link')");
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
    <title>Add Data Movie | FLS2N Web</title>

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
                            <li class="breadcrumb-item active">Add Data Movie</li>
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
                    <li class="g_heading">Main</li>
                    <li><a href="./index.php"><i class="ti-home"></i><span>Dashboard</span></a></li>
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
                            <li><a href="table-foo.html">Table Foo</a></li>
                        </ul>
                    </li>
                    <li class="g_heading">Users</li>
                    <li><a href="page-profile.html"><i class="ti-user"></i><span>Profile</span></a></li>
                    <li><a href="page-timeline.html"><i class="ti-menu-alt"></i><span>Timeline</span></a></li>
                    <li><a href="page-invoices.html"><i class="ti-file"></i><span>Invoices</span></a>
                    </li>
                    <li class="g_heading">Authentication</li>
                    <li>
                        <a href="javascript:void(0)" class="has-arrow"><i class="ti-lock"></i><span>Authentication</span></a>
                        <ul>
                            <li><a class="dropdown-item" href="auth-login.html">Login</a></li>
                            <li><a class="dropdown-item" href="auth-register.html">Register</a></li>
                            <li><a class="dropdown-item" href="auth-forgot-password.html">Forgot password</a></li>
                            <li><a class="dropdown-item" href="auth-lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                    <li>
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
                    <li class="active">
                        <a href="javascript:void(0)" class="has-arrow"><i class="ti-clipboard"></i><span>Pages</span></a>
                        <ul>
                            <li class="active"><a href="page-empty.html">Empty page</a></li>
                            <li><a href="page-pricing.html">Pricing cards</a>
                            <li><a href="page-search.html">Search Results</a></li>
                            <li><a href="page-testimonials.html">Testimonials</a></li>
                            <li><a href="page-icons.html">Icons</a></li>
                            <li><a href="page-gallery.html">Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="../docs/introduction.html"><i class="ti-file"></i><span>Documentation</span></a></li>
                </ul>
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
                                <h4>Tambah Data Film FLS2N</h4>
                                <form method="post">
                                    <label for="basic-url">Judul Film</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="name" placeholder="Nama Film (e.g Sang Petualang)" aria-label="name" aria-describedby="basic-addon1" required>
                                    </div>
                                    <label for="basic-url">Durasi</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="duration" placeholder="Durasi (e.g 04:01)" aria-label="duration" aria-describedby="basic-addon1">
                                    </div>
                                    <label for="basic-url">Penghargaan</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="archievement" placeholder="Penghargaan (e.g Juara 1 FLS2N Nasional)" aria-label="archievement" aria-describedby="basic-addon1">
                                    </div>
                                    <label for="basic-url">Deskripsi</label>
                                    <div class="input-group mb-3">
                                        <textarea class="form-control" rows="5" cols="30" id="description" name="description" placeholder="Masukkan deskripsi film disini"></textarea>
                                    </div>
                                    <label for="basic-url">Tingkat</label>
                                    <div class="mb-3">
                                        <select class="form-control show-tick ms select2" data-placeholder="position" name="level">
                                            <option selected hidden>Pilih Tingkat Kompetisi Film FLS2N</option>
                                            <option style="background-color: #192B3F;">Kabupaten</option>
                                            <option style="background-color: #192B3F;">Kota</option>
                                            <option style="background-color: #192B3F;">Provinsi</option>
                                            <option style="background-color: #192B3F;">Nasional</option>
                                        </select>
                                    </div>
                                    <label for="basic-url">Peringkat</label>
                                    <div class="mb-3">
                                        <select class="form-control show-tick ms select2" data-placeholder="position" name="position">
                                            <option selected hidden>Pilih Peringkat Juara Film</option>
                                            <option style="background-color: #192B3F;">Juara 1</option>
                                            <option style="background-color: #192B3F;">Juara 2</option>
                                            <option style="background-color: #192B3F;">Juara 3</option>
                                            <option style="background-color: #192B3F;">Juara 4</option>
                                            <option style="background-color: #192B3F;">Juara 5</option>
                                            <option style="background-color: #192B3F;">Juara Favorit</option>
                                            <option style="background-color: #192B3F;">Lainnya</option>
                                        </select>
                                    </div>
                                    <label for="basic-url">Link Video Youtube</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="link" placeholder="Link Video FL2SN (e.g https://www.youtube.com/watch?v=6lGmrLR1AYg)" aria-label="link" aria-describedby="basic-addon1">
                                    </div>
                                    <label for="basic-url">ID Video Youtube</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="thumbnail" placeholder="Link ID Youtube Film (https://www.youtube.com/watch?v=ID_VIDEO)" aria-label="thumbnail" aria-describedby="basic-addon1">
                                    </div>
                                    <label for="basic-url">Tahun Pembuatan</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="year" placeholder="Tahun Pembuatan Video" aria-label="year" aria-describedby="basic-addon1">
                                    </div>
                                    <label for="basic-url">Asal Sekolah</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="school" placeholder="Asal Sekolah" aria-label="school" aria-describedby="basic-addon1">
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