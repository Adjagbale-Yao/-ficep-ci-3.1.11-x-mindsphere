<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ficep IoT</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../public/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../public/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../../public/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../../../public/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../public/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../public/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
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
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Login</h3>
                            <form action="/login" method="POST">
                                <div class="form-group">
                                    <input type="hidden" id="_csrf" name="_csrf" class="form-control p_input"
                                        value="<?php echo (isset($_COOKIE["XSRF-TOKEN"])) ? $_COOKIE["XSRF-TOKEN"] : ''; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Username or email *</label>
                                    <input type="text" class="form-control p_input" name="identity">
                                </div>
                                <div class="form-group">
                                    <label>Password *</label>
                                    <input type="text" class="form-control p_input" name="password">
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input"> Remember me </label>
                                    </div>
                                    <a href="#" class="forgot-pass">Forgot password</a>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn"
                                        name="login-action" value="login">Login</button>
                                </div>
                                <div class="d-flex">
                                </div>
                                <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../../public/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../../public/assets/js/off-canvas.js"></script>
    <script src="../../../public/assets/js/hoverable-collapse.js"></script>
    <script src="../../../public/assets/js/misc.js"></script>
    <script src="../../../public/assets/js/settings.js"></script>
    <script src="../../../public/assets/js/todolist.js"></script>
    <script src="../../../public/assets/js/ficep-custom-scripts.js"></script>
    <!-- endinject -->
</body>

</html>