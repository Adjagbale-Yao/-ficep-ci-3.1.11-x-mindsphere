<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ficep IoT</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../public/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../public/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../public/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../../public/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../public/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../../public/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../public/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../public/assets/images/ficep-mini.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="<?php echo base_url('home/'); ?>"><img src="../../public/assets/images/ficep-logo.png" alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="<?php echo base_url('home/'); ?>"><img src="../../public/assets/images/ficep-mini.png" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src="../../public/assets/images/faces/admin_face.png" alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal">Admin</h5>
                                <span>Admin</span>
                            </div>
                        </div>
                        <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-primary"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-onepassword  text-info"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?php echo base_url('auth/logout'); ?>" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-calendar-today text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Logout</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="<?php echo base_url('home/'); ?>">
                        <span class="menu-icon">
                            <i class="mdi mdi-home"></i>
                        </span>
                        <span class="menu-title">Homepage</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-adjust"></i>
                        </span>
                        <span class="menu-title">Machine Supervision</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic1">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/machine-monitoring/default'); ?>">Machine Monitoring</a></li>
                            <li class="nav-item"> <a class="nav-link font-weight-bold">Alarms</a></li>
                            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/parameters'); ?>">Parameters</a></li>
                            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/axys-monitoring'); ?>">Axys Monitoring</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-chart-bar"></i>
                        </span>
                        <span class="menu-title">OEE</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic2">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/oee'); ?>">Analytics</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="true" aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-chart-areaspline"></i>
                        </span>
                        <span class="menu-title">KPI Comparison</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic3">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/kpi-process-log'); ?>">Process Log</a></li>
                            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/kpi-analytics'); ?>">KPI Analytics</a></li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="true" aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-settings"></i>
                        </span>
                        <span class="menu-title">Breakdowns</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic4">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/breakdowns-list-view'); ?>">List View</a></li>
                            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/breakdowns-kpi/'); ?>">Pareto + KPI</a></li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="true" aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-wrench"></i>
                        </span>
                        <span class="menu-title">Maintenance</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic5">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/maintenance-list-view'); ?>">List View</a></li>
                            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/maintenance-kpi/'); ?>">Pareto + KPI</a></li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-battery-charging-100"></i>
                        </span>
                        <span class="menu-title">Energy Consumption</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic6">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/electrical/'); ?>"> Electrical Consumption </a></li>
                            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/water/'); ?>"> Water Consumption </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items active">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic7" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-settings"></i>
                        </span>
                        <span class="menu-title">Settings</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic7">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link font-weight-bold"> Upload CSV </a></li>
                            <li class="nav-item"> <a class="nav-link"> Language </a></li>
                            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/subscription/'); ?>"> Subscription </a></li>
                            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/data-mapping/'); ?>"> Data Mapping </a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="<?php echo base_url('home/'); ?>"><img src="../../public/assets/images/ficep-mini.png" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>


                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <?php if (isset($validation)) : ?>
                        <div class="text-danger">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?php echo base_url('home/upload'); ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="file" name="csvFile" class="form-control-file" id="file" accept=".csv" />
                            </div>
                            <div class="form-group">
                                <button type="submit" id="send_form" class="btn btn-inverse-dark">Submit</button>
                            </div>
                        </div>
                    </form>


                    <!-- show file list -->
                    <?php if (isset($rows)) : ?>
                        <div class="row ">
                            <div class="col-8 grid-margin">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="font-weight-bold text-muted mb-1">Codici Allarmi</h6>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <h4 class="text-dark"> Codice Allarme </h4>
                                                        </th>
                                                        <th>
                                                            <h4 class="text-dark"> Offset </h4>
                                                        </th>
                                                        <th>
                                                            <h4 class="text-dark"> Descrizione </h4>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php for ($i = 0; $i < count($rows); $i += 3) : ?>
                                                        <tr>
                                                            <td>
                                                                <h6><?php echo $rows[$i]; ?> </h6>
                                                            </td>
                                                            <td>
                                                                <h6><?php echo $rows[$i + 1]; ?> </h6>
                                                            </td>
                                                            <td>
                                                                <h6><?php echo $rows[$i + 2]; ?> </h6>
                                                            </td>
                                                        </tr>
                                                    <?php endfor; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../public/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../public/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../../public/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../../public/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../../public/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../public/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../public/assets/js/off-canvas.js"></script>
    <script src="../../public/assets/js/hoverable-collapse.js"></script>
    <script src="../../public/assets/js/misc.js"></script>
    <script src="../../public/assets/js/settings.js"></script>
    <script src="../../public/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../public/assets/js/dashboard.js"></script>
    <script src="../../public/assets/js/ficep-custom-scripts.js"></script>
    <!-- End custom js for this page -->
</body>

</html>