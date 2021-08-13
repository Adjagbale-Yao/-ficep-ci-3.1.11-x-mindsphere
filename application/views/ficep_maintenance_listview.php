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
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/alarms'); ?>">Alarms</a></li>
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
        <li class="nav-item menu-items active">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="true" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-wrench"></i>
            </span>
            <span class="menu-title">Maintenance</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic5">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link font-weight-bold">List View</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/maintenance-kpi/'); ?>">Pareto + KPI</a></li>

            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="auth">
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
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic7" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-settings"></i>
            </span>
            <span class="menu-title">Settings</span>
            <i class="menu-arrow"></i>
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
            <!-- INTESTAZIONE ALARMS -->



            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card d-flex align-items-center justify-content-center">
                <select name="plan" class="btn btn-outline-secondary w-100 h-100">
                  <option value="-1" selected>OFFSET - YESTERDAY</option>
                  <option value="1">OFFSET - TODAY</option>
                  <option value="7">OFFSET - LAST 7 DAYS</option>
                  <option value="W">OFFSET - THIS WEEK</option>
                  <option value="30">OFFSET - LAST 30 DAYS</option>
                  <option value="90">OFFSET - LAST 90 DAYS</option>
                  <option value="M">OFFSET - THIS MONTH</option>
                  <option value="-M">OFFSET - LAST MONTH</option>
                  <option value="3M">OFFSET - LAST 3 MONTHS</option>
                  <option value="6M">OFFSET - LAST 6 MONTHS</option>
                  <option value="-Y">OFFSET - LAST YEAR</option>
                  <option value="Y">OFFSET - THIS YEAR</option>
                </select>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card btn btn-outline-secondary">
                <label for="start">START:</label>
                <input type="date" id="start" name="start" class="btn text-muted mb-0">
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card btn btn-outline-secondary">
                <label for="start">END:</label>
                <input type="date" id="start" name="start" class="btn text-muted mb-0">
              </div>
            </div>


          </div>


          <div class="row">
            <!-- INTESTAZIONE ALARMS -->
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
              <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search w-50">
                <input type="text" class="form-control" placeholder="Search ...">
              </form>
            </div>
          </div>



          <!--Maintenance Delays table-->

          <div class="row ">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Maintenance Delays</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th> Code </th>
                          <th> Maintenance Message </th>
                          <th> Start </th>
                          <th> End </th>
                          <th> Duration </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <span class="menu-icon">
                              <i class="mdi mdi-wrench"></i>
                              <h8>30</h8>
                            </span>
                          </td>
                          <td> Guasto motore </td>
                          <td> 05 June 2021 11:01:90</td>
                          <td> 05 June 2021 11:31:40</td>
                          <td> 1:31:40 </td>
                        </tr>

                        <tr>
                          <td>
                            <span class="menu-icon">
                              <i class="mdi mdi-wrench"></i>
                              <h8>5</h8>
                            </span>
                          </td>
                          <td> Sostituzione Olio 1500 ore </td>
                          <td> 07 June 2021 15:01:90</td>
                          <td> 07 June 2021 11:31:40</td>
                          <td> 1:31:40 </td>
                        </tr>

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