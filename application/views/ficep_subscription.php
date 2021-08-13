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
                            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/upload')?>"> Upload CSV </a></li>
                            <li class="nav-item"> <a class="nav-link"> Language </a></li>
                            <li class="nav-item"> <a class="nav-link font-weight-bold"> Subscription </a></li>
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
                    <div class="row">
                        <form class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h4 class="font-weight-bold text-muted mb-1">Gruppi di Allarmi</h4>
                                    <input type="submit" class="btn btn-inverse-dark" name="" id="">
                                </div>
                                <div class="align-items-center card-body d-flex">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <?php $j = 1; ?>
                                                <?php for ($i = 0; $i < 8; $i++) : ?>
                                                    <tr>
                                                        <td>
                                                            <label class=" text-black" for="<?php echo (($j - 1) * 15) + $j; ?> _<?php echo ($j * 15) + $j; ?>"><?php echo (($j - 1) * 15) + $j; ?> _<?php echo ($j * 15) + $j; ?></label>
                                                            <input type="checkbox" id="<?php echo (($j - 1) * 15) + $j; ?> _<?php echo ($j * 15) + $j; ?>">
                                                        </td>
                                                        <?php $j++; ?>
                                                        <td>
                                                            <label class=" text-black" for="<?php echo (($j - 1) * 15) + $j; ?> _<?php echo ($j * 15) + $j; ?>"><?php echo (($j - 1) * 15) + $j; ?> _<?php echo ($j * 15) + $j; ?></label>
                                                            <input type="checkbox" id="<?php echo (($j - 1) * 15) + $j; ?> _<?php echo ($j * 15) + $j; ?>">
                                                        </td>
                                                        <?php $j++; ?>
                                                        <td>
                                                            <label class=" text-black" for="<?php echo (($j - 1) * 15) + $j; ?> _<?php echo ($j * 15) + $j; ?>"><?php echo (($j - 1) * 15) + $j; ?> _<?php echo ($j * 15) + $j; ?></label>
                                                            <input type="checkbox" id="<?php echo (($j - 1) * 15) + $j; ?> _<?php echo ($j * 15) + $j; ?>">
                                                        </td>
                                                        <?php $j++; ?>
                                                        <td>
                                                            <label class=" text-black" for="<?php echo (($j - 1) * 15) + $j; ?> _<?php echo ($j * 15) + $j; ?>"><?php echo (($j - 1) * 15) + $j; ?> _<?php echo ($j * 15) + $j; ?></label>
                                                            <input type="checkbox" id="<?php echo (($j - 1) * 15) + $j; ?> _<?php echo ($j * 15) + $j; ?>">
                                                        </td>
                                                        <?php $j++; ?>
                                                        <td>
                                                            <label class=" text-black" for="<?php echo (($j - 1) * 15) + $j; ?> _<?php echo ($j * 15) + $j; ?>"><?php echo (($j - 1) * 15) + $j; ?> _<?php echo ($j * 15) + $j; ?></label>
                                                            <input type="checkbox" id="<?php echo (($j - 1) * 15) + $j; ?> _<?php echo ($j * 15) + $j; ?>">
                                                        </td>
                                                        <?php $j++; ?>
                                                    </tr>
                                                <?php endfor; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-md-6">
                            <form class="card grid-margin">
                                <div class="card-header d-flex justify-content-between">
                                    <h4 class="font-weight-bold text-muted mb-1">Analogiche</h4>
                                    <input type="submit" class="btn btn-inverse-dark" name="" id="">
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <?php $j = 1; ?>
                                                <?php for ($i = 0; $i < 6; $i++) : ?>
                                                    <tr>
                                                        <td>
                                                            <label class=" text-black" for="Analogica <?php echo $j; ?>">Analogica <?php echo $j; ?></label>
                                                            <input type="checkbox" id="Analogica <?php echo $j; ?>" value="Analogica <?php echo $j; ?>">
                                                        </td>
                                                        <?php $j++; ?>
                                                        <td>
                                                            <label class=" text-black" for="Analogica <?php echo $j; ?>">Analogica <?php echo $j; ?></label>
                                                            <input type="checkbox" id="Analogica <?php echo $j; ?>" value="Analogica <?php echo $j; ?>">
                                                        </td>
                                                        <?php $j++; ?>
                                                        <td>
                                                            <label class=" text-black" for="Analogica <?php echo $j; ?>">Analogica <?php echo $j; ?></label>
                                                            <input type="checkbox" id="Analogica <?php echo $j; ?>" value="Analogica <?php echo $j; ?>">
                                                        </td>
                                                        <?php $j++; ?>
                                                        <td>
                                                            <label class=" text-black" for="Analogica <?php echo $j; ?>">Analogica <?php echo $j; ?></label>
                                                            <input type="checkbox" id="Analogica <?php echo $j; ?>" value="Analogica <?php echo $j; ?>">
                                                        </td>
                                                        <?php $j++; ?>
                                                        <td>
                                                            <label class=" text-black" for="Analogica <?php echo $j; ?>">Analogica <?php echo $j; ?></label>
                                                            <input type="checkbox" id="Analogica <?php echo $j; ?>" value="Analogica <?php echo $j; ?>">
                                                        </td>
                                                        <?php $j++; ?>
                                                    </tr>
                                                <?php endfor; ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </form>
                            <form class="card grid-margin">
                                <div class="card-header d-flex justify-content-between">
                                    <h4 class="font-weight-bold text-muted mb-1">Assi</h4>
                                    <input type="submit" class="btn btn-inverse-dark" name="" id="">
                                </div>
                                <div class="card-body p-1">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="border-top-0">
                                                        <label class=" text-black" for="Asse1">Asse 1</label>
                                                        <input type="checkbox" id="Asse1" value="Asse1">
                                                    </td>
                                                    <td class="border-top-0">
                                                        <label class=" text-black" for="Asse2">Asse 2</label>
                                                        <input type="checkbox" id="Asse2" value="Asse2">
                                                    </td>
                                                    <td class="border-top-0">
                                                        <label class=" text-black" for="Asse3">Asse 3</label>
                                                        <input type="checkbox" id="Asse3" value="Asse3">
                                                    </td>
                                                    <td class="border-top-0">
                                                        <label class=" text-black" for="Asse4">Asse 4</label>
                                                        <input type="checkbox" id="Asse4" value="Asse4">
                                                    </td>
                                                    <td class="border-top-0">
                                                        <label class=" text-black" for="Asse5">Asse 5</label>
                                                        <input type="checkbox" id="Asse5" value="Asse5">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </form>
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