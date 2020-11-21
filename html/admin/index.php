<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Veap TV - Bootstrap 4 Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
    WebFont.load({
        google: {
            "families": ["Lato:300,400,700,900"]
        },
        custom: {
            "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                "simple-line-icons"
            ],
            urls: ['assets/css/fonts.min.css']
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/atlantis.min.css">
    <link href="assets/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/demo.css">
    <style>
    .toggle.ios,
    .toggle-on.ios,
    .toggle-off.ios {
        border-radius: 20px;
    }

    .toggle.ios .toggle-handle {
        border-radius: 20px;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <div class="logo-header" data-background-color="blue">

                <a href="index.html" class="logo">
                    <img src="https://veap.tv/veaptv/veap_user/img/veapLogo.png" alt="navbar brand"
                        class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-primary">
                        <li class="nav-item inactive">
                            <a href="dashboard.php" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-section inactive">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">EVENT PAGE</h4>
                        </li>
                        <li class="nav-item active">
                            <a href="index.php">
                                <i class="fas fa-layer-group"></i>
                                <p>Setup</p>
                            </a>
                        </li>
                        <li class="nav-item inactive">
                            <a href="customize.php">
                                <i class="fas fa-layer-group"></i>
                                <p>Customize</p>
                            </a>
                        </li>
                        <li class="nav-section inactive">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">&nbsp;</h4>
                        </li>
                        <li class="nav-item inactive">
                            <a href="user.php">
                                <i class="fas fa-layer-group"></i>
                                <p>User Accounts</p>
                            </a>
                        </li>

                        <li class="nav-item inactive">
                            <a href="information.php">
                                <i class="fas fa-layer-group"></i>
                                <p>Information</p>
                            </a>
                        </li>

                        <li class="nav-item inactive">
                            <a href="media.php">
                                <i class="fas fa-layer-group"></i>
                                <p>Media</p>
                            </a>
                        </li>

                        <li class="nav-item inactive">
                            <a href="survey.php">
                                <i class="fas fa-layer-group"></i>
                                <p>Surveys</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                <div class="page-inner mt--12">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card full-height">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="col-md-6">
                                            <div class="card-title">Event Overview</div>
                                            <div class="card-category">Setup your Event Below</div>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-danger float-right btn-round">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <h3><strong>EVENT DETAILS</strong></h3>
                            <div class="card full-height">
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="card-title">Event Name</div>
                                        <div class="card-category">Enter event name here.</div>

                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <input type="email" class="form-control" placeholder="Event Name">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <button class="btn btn-success btn-round mb-2 ml-2">Save</button>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="card-title">Event Code</div>
                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <input type="email" class="form-control" placeholder="Event Code">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <button class="btn btn-success btn-round mb-2 ml-2">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card full-height">
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="card-title">Optional Event Components</div>
                                        <div class="card-category">Toggle optional events components here.</div>

                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <div class="card-category">Live Poll</div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-style="ios">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <div class="card-category">Live Poll</div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-style="ios">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h3><strong>COMPONENTS</strong></h3>
                            <div class="card full-height">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="col-md-12">
                                            <div class="card-title">Live Broadcast</div>
                                            <div class="card-category">Insert Broadcast link here.</div>
                                            <textarea class="form-control" id="comment" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card full-height">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="col-md-12">
                                            <div class="card-title">Live Poll</div>
                                            <div class="card-category">Insert your poll link here.</div>
                                            <textarea class="form-control" id="comment" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h3><strong>&nbsp;</strong></h3>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="col-md-6">
                                            <div class="card-title">User Accounts</div>
                                            <div class="card-category">Setup user accounts here</div>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-danger float-right btn-round">Open</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="col-md-6">
                                            <div class="card-title">Information</div>
                                            <div class="card-category">Setup user accounts here</div>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-default float-right btn-round"
                                                disabled="disabled">Closed</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="col-md-6">
                                            <div class="card-title">Media</div>
                                            <div class="card-category">Setup user accounts here</div>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-default float-right btn-round"
                                                disabled="disabled">Closed</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="col-md-6">
                                            <div class="card-title">Survey</div>
                                            <div class="card-category">Setup user accounts here</div>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-default float-right btn-round"
                                                disabled="disabled">Closed</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Help
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Licenses
                                </a>
                            </li> -->
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        &nbsp;
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <!-- <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> -->

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis JS -->
    <script src="assets/js/atlantis.min.js"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script>
    <script src="assets/js/bootstrap-toggle.min.js"></script>

</body>

</html>