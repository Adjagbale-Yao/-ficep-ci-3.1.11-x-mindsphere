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
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-adjust"></i>
            </span>
            <span class="menu-title">Machine Supervision</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/machine-monitoring/default'); ?>">Machine Monitoring</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/alarms'); ?>">Alarms</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/parameters'); ?>">Parameters</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/axys-monitoring'); ?>">Axys Monitoring</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title">OEE</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/oee'); ?>">Analytics</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="true" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-chart-areaspline"></i>
            </span>
            <span class="menu-title">KPI Comparison</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/kpi-process-log'); ?>">Process Log</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/kpi-analytics'); ?>">KPI Analytics</a></li>

            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="true" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-settings"></i>
            </span>
            <span class="menu-title">Breakdowns</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/breakdowns-list-view'); ?>">List View</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/breakdowns-kpi/'); ?>">Pareto + KPI</a></li>

            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="true" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-wrench"></i>
            </span>
            <span class="menu-title">Maintenance</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/maintenance-list-view'); ?>">List View</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('home/maintenance-kpi/'); ?>">Pareto + KPI</a></li>

            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <span class="menu-icon">
              <i class="mdi mdi-battery-charging-100"></i>
            </span>
            <span class="menu-title">Energy Consumption</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
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
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card btn btn-outline-secondary btn-fw" type="button">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0"><a class="nav-link" href="<?php echo base_url('home/grid-view'); ?>">GRID VIEW</a></h3>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-item">
                        <span class="mdi mdi mdi-grid icon-item"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card btn btn-outline-secondary btn-fw" type="button">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0"><a class="nav-link" href="<?php echo base_url('home/list-view'); ?>">LIST VIEW</a></h3>
                        <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-item">
                        <span class="mdi mdi mdi-format-list-bulleted-type icon-item" type="button"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card btn btn-outline-secondary btn-fw">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">MAP VIEW</h3>
                        <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-item">
                        <span class="mdi mdi-map-marker-radius icon-item" type="button"></span>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h4 class="mb-0">CUSTOMER SELECTION</h4>
                      </div>
                    </div>
                    <div class="form-check form-check-muted m-0">
                      <label class="form-check-label">
                        <input type="checkbox" class=" form-check-input">
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h4 class="mb-0">PLANT SELECTION</h4>
                        <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                      </div>
                    </div>
                    <div class="form-check form-check-muted m-0">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h4 class="mb-0">MODEL SELECTION</h4>
                        <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                      </div>
                    </div>
                    <div class="form-check form-check-muted m-0">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                      </label>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h4 class="mb-0">TECHNOLOGY SELECTION</h4>
                        <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-check form-check-muted m-0">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                        </label>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
              <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search w-50">
                <input type="text" class="form-control" id="searchId" onkeyup="searchFunction()" placeholder="Search Serial Number ...">
              </form>
            </div>
          </div>



          <div class="row ">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Machines</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th> Name </th>
                          <th> Customer </th>
                          <th> Plant </th>
                          <th> Technology </th>
                          <th> Model </th>
                          <th> Tool ID </th>
                          <th> Cemas Tool ID</th>
                          <th> OEE (last 30 days)</th>

                        </tr>
                      </thead>
                      <tbody id="tableBodyId">
                        <tr id="911.342">
                          <td>
                            <img src="../../public/assets/images/ficep_presse/btn_X4C.jpg" alt="image" />
                            <span class="pl-2">911.342</span>
                          </td>
                          <td> Magneti Marelli </td>
                          <td> Crevalcore </td>
                          <td> LASER </td>
                          <td> 911 MK2 IR </td>
                          <td> - </td>
                          <td> - </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 61%" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100" 98%></div>
                            </div>
                          </td>
                          <td>
                            <label class="badge btn-outline-secondary card ">
                              <a class="mdi mdi-eye" href="<?php echo base_url('home/machine-monitoring'); ?>"></a>
                            </label>
                          </td>
                        </tr>
                        <tr id="932.342">
                          <td>
                            <img src="../../public/assets/images/ficep_presse/DD.jpg" alt="image" />
                            <span class="pl-2">932.342</span>
                          </td>
                          <td> Varroc Marocco </td>
                          <td> Tageri </td>
                          <td> VIBRATION </td>
                          <td> 911 STD MK2 </td>
                          <td> - </td>
                          <td> - </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 96%" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100" 98%></div>
                            </div>
                          </td>
                          <td>
                            <label class="badge btn-outline-secondary card ">
                              <a class="mdi mdi-eye" href="<?php echo base_url('home/machine-monitoring'); ?>"></a>
                            </label>
                          </td>
                        </tr>
                        <tr id="966.142">
                          <td>
                            <img src="../../public/assets/images/ficep_presse/PVX series.jpg" alt="image" />
                            <span class="pl-2">966.142</span>
                          </td>
                          <td> Cemas Elettra </td>
                          <td> Carmagnola </td>
                          <td> VIBRATION </td>
                          <td> 911 STD MK2 </td>
                          <td> - </td>
                          <td> - </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" 98%></div>
                            </div>
                          </td>
                          <td>
                            <label class="badge btn-outline-secondary card ">
                              <a class="mdi mdi-eye" href="<?php echo base_url('home/machine-monitoring'); ?>"></a>
                            </label>
                          </td>
                        </tr>

                        <tr id="966.142">
                          <td>
                            <img src="../../public/assets/images/ficep_presse/PVX series.jpg" alt="image" />
                            <span class="pl-2">966.142</span>
                          </td>
                          <td> Cars Technology </td>
                          <td> Rezzato </td>
                          <td> VIBRATION </td>
                          <td> MF 240 </td>
                          <td> - </td>
                          <td> - </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" 98%></div>
                            </div>
                          </td>
                          <td>
                            <label class="badge btn-outline-secondary card ">
                              <a class="mdi mdi-eye" href="<?php echo base_url('home/machine-monitoring'); ?>"></a>
                            </label>
                          </td>
                        </tr>
                        <tr id="955.111">
                          <td>
                            <img src="../../public/assets/images/ficep_presse/btn_X4C.jpg" alt="image" />
                            <span class="pl-2">955.111</span>
                          </td>
                          <td> Magneti Marelli </td>
                          <td> Crevalcore </td>
                          <td> LASER </td>
                          <td> 911 MK2 IR </td>
                          <td> - </td>
                          <td> - </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" 98%></div>
                            </div>
                          </td>
                          <td>
                            <label class="badge btn-outline-secondary card ">
                              <a class="mdi mdi-eye" href="<?php echo base_url('home/machine-monitoring'); ?>"></a>
                            </label>
                          </td>
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