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
                <a class="sidebar-brand brand-logo" href="<?php echo base_url('home/'); ?>"><img
                        src="../../public/assets/images/ficep-logo.png" alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="<?php echo base_url('home/'); ?>"><img
                        src="../../public/assets/images/ficep-mini.png" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle "
                                    src="../../public/assets/images/faces/admin_face.png" alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal">Admin</h5>
                                <span>Admin</span>
                            </div>
                        </div>
                        <a href="#" id="profile-dropdown" data-toggle="dropdown"><i
                                class="mdi mdi-dots-vertical"></i></a>
                        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                            aria-labelledby="profile-dropdown">
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

                <li class="nav-item menu-items inactive">
                    <a class="nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="ui-basic1">
                        <span class="menu-icon">
                            <i class="mdi mdi-adjust" style="color:gray"></i>
                        </span>
                        <span class="menu-title" style="color:gray">Machine Supervision</span>
                        <i class="menu-arrow" style="color:gray"></i>
                    </a>
                    <div class="collapse" id="ui-basic1">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link"
                                    href="<?php echo base_url('home/machine-monitoring/default'); ?>">Machine
                                    Monitoring</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="<?php echo base_url('home/alarms'); ?>">Alarms</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="<?php echo base_url('home/parameters'); ?>">Parameters</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="<?php echo base_url('home/axys-monitoring'); ?>">Axys Monitoring</a></li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="ui-basic2">
                        <span class="menu-icon">
                            <i class="mdi mdi-chart-bar" style="color:gray"></i>
                        </span>
                        <span class="menu-title" style="color:gray">OEE</span>
                        <i class="menu-arrow" style="color:gray"></i>
                    </a>
                    <div class="collapse" id="ui-basic2">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link"
                                    href="<?php echo base_url('home/oee'); ?>">Analytics</a></li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="ui-basic3">
                        <span class="menu-icon">
                            <i class="mdi mdi-chart-areaspline" style="color:gray"></i>
                        </span>
                        <span class="menu-title" style="color:gray">KPI Comparison</span>
                        <i class="menu-arrow" style="color:gray"></i>
                    </a>
                    <div class="collapse" id="ui-basic3">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link"
                                    href="<?php echo base_url('home/kpi-process-log'); ?>">Process Log</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="<?php echo base_url('home/kpi-analytics'); ?>">KPI Analytics</a></li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="ui-basic4">
                        <span class="menu-icon">
                            <i class="mdi mdi-settings" style="color:gray"></i>
                        </span>
                        <span class="menu-title" style="color:gray">Breakdowns</span>
                        <i class="menu-arrow" style="color:gray"></i>
                    </a>
                    <div class="collapse" id="ui-basic4">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link"
                                    href="<?php echo base_url('home/breakdowns-list-view'); ?>">List View</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="<?php echo base_url('home/breakdowns-kpi/'); ?>">Pareto + KPI</a></li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="ui-basic5">
                        <span class="menu-icon">
                            <i class="mdi mdi-wrench" style="color:gray"></i>
                        </span>
                        <span class="menu-title" style="color:gray">Maintenance</span>
                        <i class="menu-arrow" style="color:gray"></i>
                    </a>
                    <div class="collapse" id="ui-basic5">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link"
                                    href="<?php echo base_url('home/breakdowns-list-view'); ?>">List View</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="<?php echo base_url('home/maintenance-kpi/'); ?>">Pareto + KPI</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" aria-expanded="true" aria-controls="ui-basic6">
                        <span class="menu-icon">
                            <i class="mdi mdi-battery-charging-100" style="color:gray"></i>
                        </span>
                        <span class="menu-title" style="color:gray">Energy Consumption</span>
                        <i class="menu-arrow" style="color:gray"></i>
                    </a>
                    <div class="collapse" id="ui-basic6">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link"
                                    href="<?php echo base_url('home/electrical/'); ?>"> Electrical Consumption </a></li>
                            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/water/'); ?>">
                                    Water Consumption </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" aria-expanded="true" aria-controls="ui-basic7">
                        <span class="menu-icon">
                            <i class="mdi mdi-settings" style="color:gray"></i>
                        </span>
                        <span class="menu-title" style="color:gray">Settings</span>
                        <i class="menu-arrow" style="color:gray"></i>
                    </a>
                    <div class="collapse" id="ui-basic7">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/upload/'); ?>">
                                    Upload CSV </a></li>
                            <li class="nav-item"> <a class="nav-link"> Language </a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="<?php echo base_url('home/subscription/'); ?>"> Subscription </a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="<?php echo base_url('home/data-mapping/'); ?>"> Data Mapping </a></li>
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
                    <a class="navbar-brand brand-logo-mini" href="<?php echo base_url('home/'); ?>"><img
                            src="../../public/assets/images/ficep-mini.png" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col grid-margin stretch-card" id="listViewButton">
                            <div class="card btn btn-outline-secondary btn-fw">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <h3 class="mb-0"><a class="nav-link custom-a"
                                            href='<?php echo base_url('home/home'); ?>'>LIST VIEW</a></h3>
                                    <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                                    <div class="icon icon-item">
                                        <span class="mdi mdi mdi-format-list-bulleted-type icon-item"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col grid-margin stretch-card">
                            <div class="card btn btn-outline-secondary btn-fw" type="button">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <h3 class="mb-0"><a class="nav-link custom-a"
                                            href='<?php echo base_url('home/grid-view'); ?>'>GRID VIEW</a></h3>
                                    <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                                    <div class="icon icon-item">
                                        <span class="mdi mdi mdi-grid icon-item" type="button"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col grid-margin stretch-card">
                            <div class="card btn btn-outline-secondary btn-fw" type="button">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <h3 class="mb-0"><a class="nav-link custom-a"
                                            href='<?php echo base_url('home/map-view'); ?>'>MAP VIEW</a></h3>
                                    <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                                    <div class="icon icon-item">
                                        <span class="mdi mdi-map-marker-radius icon-item" type="button"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">

                        </div>
                        <div class="col">

                        </div>
                    </div>


                    <div class="row" id="test">
                        <div class="col grid-margin stretch-card" id="customerSelection">
                            <div class="card d-flex align-items-center justify-content-center">
                                <select name="plan" id="customer" class="btn btn-outline-secondary w-100 h-100">
                                    <option value="customer" selected> CUSTOMER SELECTION </option>
                                    <?php foreach ($customers as $customer) : ?>
                                    <option><?php echo $customer ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col grid-margin stretch-card" id="plantSelection">
                            <div class="card d-flex align-items-center justify-content-center">
                                <select name="plan" id="plant" class="btn btn-outline-secondary w-100 h-100">
                                    <option value="plant" selected> PLANT SELECTION </option>
                                    <?php foreach ($plants as $plant) : ?>
                                    <option><?php echo $plant ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col grid-margin stretch-card" id="modelSelection">
                            <div class="card d-flex align-items-center justify-content-center">
                                <select name="plant" id="model" class="btn btn-outline-secondary w-100 h-100">
                                    <option value="model" selected> MODEL SELECTION </option>
                                    <?php foreach ($models as $model) : ?>
                                    <option><?php echo $model ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col grid-margin stretch-card" id="technologySelection">
                            <div class="card d-flex align-items-center justify-content-center">
                                <select name="plant" id="technology" class="btn btn-outline-secondary w-100 h-100">
                                    <option value="technology" selected> TECHNOLOGY SELECTION </option>
                                    <?php foreach ($technologies as $technology) : ?>
                                    <option><?php echo $technology ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col grid-margin stretch-card">
                            <input type="button"
                                class="card btn btn-outline-secondary  d-flex align-items-center justify-content-center"
                                value="CLEAR FILTERS" id="clearSelectionId" />
                        </div>
                    </div>

                    <!-- <div class="row">
            <div class="col-xl-2 col-sm-6 grid-margin stretch-card">
              <input type="button" class="card btn btn-outline-secondary" value="Clear filters" onclick="window.location.reload()" />
            </div>
          </div> -->
                    <div class="row">
                        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search w-50">
                                <input type="text" class="form-control" id="searchId" onkeyup="searchFunction()"
                                    placeholder="Search Serial Number ...">
                            </form>
                        </div>
                    </div>
                    <br />

                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title">Machines</h2>
                                    <?php //if (!empty($message) && isset($message)) : ?>
                                    <?php //echo $message; ?>
                                    <?php //endif; ?>
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table" id="machineTableId">
                                            <thead id="tableHeadId">
                                                <tr>
                                                    <th id="name">
                                                        <h3> Name </h3>
                                                    </th>
                                                    <th id="customer">
                                                        <h3> Customer </h3>
                                                    </th>
                                                    <th id="plant">
                                                        <h3> Plant </h3>
                                                    </th>
                                                    <th id="technology">
                                                        <h3> Technology </h3>
                                                    </th>
                                                    <th>
                                                        <h3> Model </h3>
                                                    </th>
                                                    <th>
                                                        <h3> Tool ID </h3>
                                                    </th>
                                                    <th>
                                                        <h3> Cemas Tool ID </h3>
                                                    </th>
                                                    <th>
                                                        <h3> OEE (Last 30 days) </h3>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableBodyId">
                                                <?php if (is_countable($machines) && count($machines) > 0) : ?>
                                                <?php foreach ($machines as $machine) : ?>
                                                <tr class="btn-outline-secondary" id=<?php echo $machine['name']; ?>>
                                                    <td>
                                                        <h4><?php echo $machine['name']; ?> </h4>
                                                    </td>
                                                    <td>
                                                        <h4><?php echo $machine['customer']; ?> </h4>
                                                    </td>
                                                    <td>
                                                        <h4><?php echo $machine['plant']; ?> </h4>
                                                    </td>
                                                    <td>
                                                        <h4><?php echo $machine['technology']; ?> </h4>
                                                    </td>
                                                    <td>
                                                        <h4><?php echo $machine['model']; ?> </h4>
                                                    </td>
                                                    <td>
                                                        <h4><?php echo $machine['tool_id']; ?> </h4>
                                                    </td>
                                                    <td>
                                                        <h4><?php echo $machine['cemas_tool_id']; ?> </h4>
                                                    </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 61%" aria-valuenow="61" aria-valuemin="0"
                                                                aria-valuemax="100" 98%></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label class="badge btn-outline-secondary card ">
                                                            <a class="mdi mdi-eye"
                                                                href="<?php echo base_url('home/machine-monitoring/' . $machine['name']); ?>"></a>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
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