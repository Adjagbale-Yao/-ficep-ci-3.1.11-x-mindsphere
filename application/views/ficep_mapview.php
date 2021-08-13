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

  <!-- OPENLAYERS -->
  <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">


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
        <li class="nav-item menu-items active">
          <a class="nav-link" href="<?php echo base_url('home/'); ?>">
            <span class="menu-icon">
              <i class="mdi mdi-home"></i>
            </span>
            <span class="menu-title">Homepage</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-adjust" style="color:gray"></i>
            </span>
            <span class="menu-title" style="color:gray">Machine Supervision</span>
            <i class="menu-arrow" style="color:gray"></i>
          </a>
          <div class="collapse" id="ui-basic1">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/machine-monitoring/default'); ?>">Machine Monitoring</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/alarms'); ?>">Alarms</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/parameters'); ?>">Parameters</a></li>
              <li class="nav-item "> <a class="nav-link font-weight-bold">Axys Monitoring</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar" style="color:gray"></i>
            </span>
            <span class="menu-title" style="color:gray">OEE</span>
            <i class="menu-arrow" style="color:gray"></i>
          </a>
          <div class="collapse" id="ui-basic2">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/oee'); ?>">Analytics</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" aria-expanded="true" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-chart-areaspline" style="color:gray"></i>
            </span>
            <span class="menu-title" style="color:gray">KPI Comparison</span>
            <i class="menu-arrow" style="color:gray"></i>
          </a>
          <div class="collapse" id="ui-basic3">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/kpi-process-log'); ?>">Process Log</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/kpi-analytics'); ?>">KPI Analytics</a></li>

            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" aria-expanded="true" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-settings" style="color:gray"></i>
            </span>
            <span class="menu-title" style="color:gray">Breakdowns</span>
            <i class="menu-arrow" style="color:gray"></i>
          </a>
          <div class="collapse" id="ui-basic4">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/breakdowns-list-view'); ?>">List View</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/breakdowns-kpi/'); ?>">Pareto + KPI</a></li>

            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" aria-expanded="true" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-wrench" style="color:gray"></i>
            </span>
            <span class="menu-title" style="color:gray">Maintenance</span>
            <i class="menu-arrow" style="color:gray"></i>
          </a>
          <div class="collapse" id="ui-basic5">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/maintenance-list-view'); ?>">List View</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/maintenance-kpi/'); ?>">Pareto + KPI</a></li>

            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="auth">
            <span class="menu-icon">
              <i class="mdi mdi-battery-charging-100" style="color:gray"></i>
            </span>
            <span class="menu-title" style="color:gray">Energy Consumption</span>
            <i class="menu-arrow" style="color:gray"></i>
          </a>
          <div class="collapse" id="ui-basic6">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/electrical/'); ?>"> Electrical Consumption </a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/water/'); ?>"> Water Consumption </a></li>
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
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/upload/'); ?>"> Upload CSV </a></li>
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
          <div class="row">
            <div class="col-12 grid-margin stretch-card">

            </div>

          </div>


          <div class="row">
            <div class="col grid-margin stretch-card">
              <div class="card btn btn-outline-secondary btn-fw" type="button">
                <div class="row d-flex justify-content-center align-items-center">
                  <h3 class="mb-0"><a class="nav-link custom-a" href='<?php echo base_url('home/'); ?>'>LIST VIEW</a></h3>
                  <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                  <div class="icon icon-item">
                    <span class="mdi mdi mdi-format-list-bulleted-type icon-item" type="button"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col grid-margin stretch-card">
              <div class="card btn btn-outline-secondary btn-fw" type="button">
                <div class="row d-flex justify-content-center align-items-center">
                  <h3 class="mb-0"><a class="nav-link custom-a" href='<?php echo base_url('home/grid-view'); ?>'>GRID VIEW</a></h3>
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
                  <h3 class="mb-0"><a class="nav-link custom-a" href='<?php echo base_url('home/map-view'); ?>'>MAP VIEW</a></h3>
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


          <div class="row">
            <!-- MAP-->
            <div id="map" class="col-12 grid-margin card stretch-card">

            </div>
            <div class="overlay-card card stretch-card" style="height: 300px; width:300px">
              <div class="card-body">
                <div class="row">
                  <div class="col text-gray">
                    <div class="row">
                      <!-- image -->
                      <div class="col-md-5">
                        <canvas id="machine_image_id_1" class="DD mw-100">Sorry. Your browser does not support HTML5 canvas element.</canvas>
                      </div>
                      <!-- machine info -->
                      <div class="col-md-7 stretch">
                        <h4 id="machine-name" class="card-text"></h4><br>
                        <h4 id="machine-customer" class="card-text"></h4><br>
                        <h4 id="machine-location" class="card-text"></h4><br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col grid-margin stretch-card">
                        <div class="card btn btn-outline-secondary btn-fw" type="button">
                          <a class="nav-link custom-a" id="machine-supervision-link" href="">MACHINE SUPERVISION</a>
                        </div>
                      </div>
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
    <script type="text/javascript">
      var data = <?php echo json_encode($machines) ?>;
      var baseurl = <?php echo json_encode(base_url('home/machine-monitoring')) ?>;
    </script>
    <script src="../../public/assets/js/dashboard.js"></script>
    <script src="../../public/assets/js/ficep-custom-scripts.js"></script>
    <script src="../../public/assets/js/ficep-maps.js"></script>
    <!--OPENLAYERS-->
    <script type="text/javascript" src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
    <!-- END OPENLAYERS -->
    <!-- End custom js for this page -->
</body>

</html>