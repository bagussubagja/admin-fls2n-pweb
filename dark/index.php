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
                    <li class="g_heading">Main</li>
                    <li><a href="./index.php"><i class="ti-home"></i><span>Dashboard</span></a></li>
                    <li><a href="./view_movie.php"><i class="ti-list"></i><span>Show Movie Data</span></a></li>
                    <li><a href="./add_movie.php"><i class="ti-list"></i><span>Add Movie Data</span></a></li>
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
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon traffic">
                            <div class="body">
                                <h6>Traffic</h6>
                                <h2>20 <small class="info">of 1Tb</small></h2>
                                <small>2% higher than last month</small>
                                <div class="progress mb-0">
                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon sales">
                            <div class="body">
                                <h6>Sales</h6>
                                <h2>12% <small class="info">of 100</small></h2>
                                <small>6% higher than last month</small>
                                <div class="progress mb-0">
                                    <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon email">
                            <div class="body">
                                <h6>Email</h6>
                                <h2>39 <small class="info">of 100</small></h2>
                                <small>Total Registered email</small>
                                <div class="progress mb-0">
                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon domains">
                            <div class="body">
                                <h6>Domains</h6>
                                <h2>8 <small class="info">of 10</small></h2>
                                <small>Total Registered Domain</small>
                                <div class="progress mb-0">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Revenue Statistics</h2>
                            </div>
                            <div class="body">
                                <div class="d-flex bd-highlight mb-4">
                                    <div class="flex-fill bd-highlight">
                                        <h5 class="mb-0">21,521 <i class="fa fa-angle-up"></i></h5>
                                        <small>Today</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <h5 class="mb-0">%12.35 <i class="fa fa-angle-down"></i></h5>
                                        <small>Last month %</small>
                                    </div>
                                </div>
                                <div id="chart-bar-rotated" class="c3_chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="header">
                                <h2>Products Monthly Sales</h2>
                            </div>
                            <div class="body">
                                <div class="d-flex bd-highlight mb-4">
                                    <div class="flex-fill bd-highlight">
                                        <h5 class="mb-0">2,521 <i class="fa fa-angle-up"></i></h5>
                                        <small>Today</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <h5 class="mb-0">18.35 <i class="fa fa-angle-down"></i></h5>
                                        <small>Last month %</small>
                                    </div>
                                </div>
                                <div id="chart-area-step" class="c3_chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="header">
                                <h2>ToDo List</h2>
                            </div>
                            <div class="body todo_list">
                                <div class="form-group d-flex mb-1">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type your task here...">
                                    </div>
                                    <button class="btn btn-primary ml-2" type="button" id="button-addon2">Add</button>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Walk the dog this evening
                                        <span class="badge badge-primary badge-pill">x</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Go shopping at 3 PM
                                        <span class="badge badge-primary badge-pill">x</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Keep coding 'till you're dead
                                        <span class="badge badge-primary badge-pill">x</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Enjoy every moment you have
                                        <span class="badge badge-primary badge-pill">x</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Sleep well tonight
                                        <span class="badge badge-primary badge-pill">x</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Sleep well tonight
                                        <span class="badge badge-primary badge-pill">x</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-8">
                        <div class="card">
                            <div class="header">
                                <h2>Visitors Statistics</h2>
                            </div>
                            <div class="body">
                                <div id="world-map-markers" class="jvector-map" style="height: 405px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Distribution</h2>
                            </div>
                            <div class="body text-center">
                                <div id="chart-pie" class="c3_chart d_distribution"></div>
                                <button class="btn btn-primary mt-4 mb-4">View More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2>Social Media</h2>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Like</th>
                                                <th>Comments</th>
                                                <th>Share</th>
                                                <th>Members</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><i class="fa fa-linkedin"></i>
                                                </td>
                                                <td>
                                                    <span class="">Linked In</span>
                                                    <span class="text-muted">Florida, United States</span>
                                                </td>
                                                <td>19K</td>
                                                <td>14K</td>
                                                <td>10K</td>
                                                <td>
                                                    <span class="badge badge-success">2341</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-twitter"></i>
                                                </td>
                                                <td><span class="list-name">Twitter</span>
                                                    <span class="text-muted">Arkansas, United States</span>
                                                </td>
                                                <td>7K</td>
                                                <td>11K</td>
                                                <td>21K</td>
                                                <td>
                                                    <span class="badge badge-success">952</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-facebook"></i>
                                                </td>
                                                <td><span class="list-name">Facebook</span>
                                                    <span class="text-muted">Illunois, United States</span>
                                                </td>
                                                <td>15K</td>
                                                <td>18K</td>
                                                <td>8K</td>
                                                <td>
                                                    <span class="badge badge-success">6127</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-google-plus"></i>
                                                </td>
                                                <td><span class="list-name">Google Plus</span>
                                                    <span class="text-muted">Arizona, United States</span>
                                                </td>
                                                <td>15K</td>
                                                <td>18K</td>
                                                <td>154</td>
                                                <td>
                                                    <span class="badge badge-success">325</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-youtube-play"></i>
                                                </td>
                                                <td><span class="list-name">YouTube</span>
                                                    <span class="text-muted">Alaska, United States</span>
                                                </td>
                                                <td>15K</td>
                                                <td>18K</td>
                                                <td>200</td>
                                                <td>
                                                    <span class="badge badge-success">160</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="header">
                                <h2>Referrals</h2>
                            </div>
                            <div class="body">
                                <ul class="list-unstyled list-referrals">
                                    <li>
                                        <p><span class="value">2301</span><span class="text-muted float-right">visits from Facebook</span></p>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-indigo" data-transitiongoal="87" aria-valuenow="87" role="progressbar" style="width: 87%;"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <p><span class="value">2107</span><span class="text-muted float-right">visits from Twitter</span></p>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-orange" data-transitiongoal="34" aria-valuenow="34" role="progressbar" style="width: 34%;"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <p><span class="value">2308</span><span class="text-muted float-right">visits from Search</span></p>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-purple" data-transitiongoal="54" aria-valuenow="54" role="progressbar" style="width: 54%;"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <p><span class="value">1024</span><span class="text-muted float-right">visits from Affiliates</span></p>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" data-transitiongoal="67" aria-valuenow="67" role="progressbar" style="width: 67%;"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2>Browser Stats</h2>
                            </div>
                            <div class="body">
                                <table class="table mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Google Chrome</td>
                                            <td class="align-right"><span class="badge badge-lg badge-pill badge-success text-uppercase">40%</span></td>
                                        </tr>
                                        <tr>
                                            <td>Mozila Firefox</td>
                                            <td class="align-right"><span class="badge badge-lg badge-pill badge-primary text-uppercase">30%</span></td>
                                        </tr>
                                        <tr>
                                            <td>Safari</td>
                                            <td class="align-right"><span class="badge badge-lg badge-pill badge-tertiary text-uppercase">15%</span></td>
                                        </tr>
                                        <tr>
                                            <td>Internet Explorer</td>
                                            <td class="align-right"><span class="badge badge-lg badge-pill badge-primary text-uppercase">15%</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header py-4">
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-sm bg-purple">BM</span>
                                    <div class="avatar-content">
                                        <h5 class="h6 mb-0">Bettie Mavis</h5>
                                        <small class="d-block text-muted">New York, US</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-image">
                                <img src="../assets/images/image-gallery/5.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <div class="row mb-1">
                                    <div class="col">
                                        <div class="card-icon-actions card-icon-actions-lg">
                                            <a href="javascript:void(0);" class="love active"><i class="fa fa-heart"></i></a>
                                            <a href="javascript:void(0);"><i class="fa fa-comment"></i></a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-icon-actions card-icon-actions-lg text-right">
                                            <a href="javascript:void(0);"><i class="fa fa-bookmark"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="heading h6 mb-3">23 likes</h6>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                                <div class="row ">
                                    <div class="col-10">
                                        <form class="card-comment-box">
                                            <textarea rows="1" class="form-control" placeholder="Add a comment..."></textarea>
                                        </form>
                                    </div>
                                    <div class="col-2 text-right">
                                        <div class="card-icon-actions card-icon-actions-lg">
                                            <a href="javascript:void(0);" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </a>
                                            <div class="dropdown-menu py-0 text-center">
                                                <a class="dropdown-item" href="javascript:void(0);">Got to post</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Repost inappropriate</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Embed</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-primary">
                            <div class="card-body py-5">
                                <div class="d-flex align-items-start">
                                    <div class="icon icon-lg">
                                        <i class="fa fa-twitter text-white"></i>
                                    </div>
                                    <div class="icon-text">
                                        <h4 class="heading text-white">Latest Bootstrap framework <small>(v4.3.1)</small></h4>
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body py-5">
                                <div class="d-flex align-items-start">
                                    <div class="icon icon-lg">
                                        <i class="fa fa-codepen text-white"></i>
                                    </div>
                                    <div class="icon-text">
                                        <h4 class="heading text-white">Latest JQuery framework <small>(v3.3.1)</small></h4>
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                    </div>
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

    <script src="../assets/bundles/c3.bundle.js"></script>
    <script src="../assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->

    <script src="../assets/js/theme.js"></script>
    <script src="../assets/js/pages/index.js"></script>
    <script src="../assets/js/pages/todo-js.js"></script>
</body>

</html>