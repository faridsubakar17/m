<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Smart Report</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/SR_-_1-removebg (1).png" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="index.php"><img src="assets/images/logo smart report (1).png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.php"><img src="assets/images/logo smart report (1).png" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Forms</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
                <ul class="mt-4 pl-0">
                  <li>Sign Out</li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <ul class="navbar-nav">
              <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                <form class="nav-link form-inline mt-2 mt-md-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                  </div>
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item dropdown d-none d-xl-flex border-0">
                <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-earth"></i> English </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                  <a class="dropdown-item" href="#"> French </a>
                  <a class="dropdown-item" href="#"> Spain </a>
                  <a class="dropdown-item" href="#"> Latin </a>
                  <a class="dropdown-item" href="#"> Japanese </a>
                </div>
              </li>
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <img class="nav-profile-img mr-2" alt="" src="assets/images/faces/face1.jpg" />
                  <span class="profile-name">Gita Ayu</span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <h3 
                class="mb-0"> Hi, Welcome to Smart Report
              </h3>
              <div class="d-flex">
                <button type="button" class="btn btn-sm bg-white btn-icon-text border ml-3">
                  <i class="mdi mdi-printer btn-icon-prepend"></i> Print </button>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-8 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body px-0 overflow-auto">
                    <h4 class="card-title pl-4">Project Admin</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="bg-light">
                          <tr>
                            <th>Admin</th>
                            <th>Project</th>
                            <th>Invoice</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <img src="assets/images/faces/face1.jpg" alt="image" />
                                <div class="table-user-name ml-3">
                                  <p class="mb-0 font-weight-medium"> Andi Candra </p>
                                  <small> on state </small>
                                </div>
                              </div>
                            </td>
                            <td>Admin</td>
                            <td>
                              <div class="badge badge-inverse-success"> Completed </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <img src="assets/images/faces/face10.jpg" alt="image" />
                                <div class="table-user-name ml-3">
                                  <p class="mb-0 font-weight-medium"> Erdin Sukamto </p>
                                  <small>Email verified</small>
                                </div>
                              </div>
                            </td>
                            <td>Admin</td>
                            <td>
                              <div class="badge badge-inverse-success"> Completed </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <img src="assets/images/faces/face11.jpg" alt="image" />
                                <div class="table-user-name ml-3">
                                  <p class="mb-0 font-weight-medium"> Gita Ayu </p>
                                  <small>Email verified</small>
                                </div>
                              </div>
                            </td>
                            <td>Admin</td>
                            <td>
                              <div class="badge badge-inverse-danger"> Completed </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <img src="assets/images/faces/face13.jpg" alt="image" />
                                <div class="table-user-name ml-3">
                                  <p class="mb-0 font-weight-medium"> Syambudi </p>
                                  <small>Email verified</small>
                                </div>
                              </div>
                            </td>
                            <td>Admin</td>
                            <td>
                              <div class="badge badge-inverse-success"> Declined </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-4 col-md-6 grid-margin stretch-card">
                <div class="card card-invoice">
                  <div class="card-body">
                    <h4 class="card-title pb-3">Team Smart Report</h4>
                    <div class="list-card">
                      <div class="row align-items-center">
                        <div class="col-7 col-sm-8">
                          <div class="row align-items-center">
                            <div class="col-sm-4">
                              <img src="assets/images/faces/face2.jpg" alt="" />
                            </div>
                            <div class="col-sm-8 pr-0 pl-sm-0">
                              <h6 class="mb-1 mb-sm-0">Andi Candra</h6>
                            </div>
                          </div>
                        </div>
                        <div class="col-5 col-sm-4">
                          <div class="d-flex pt-1 align-items-center">
                            <div class="reload-outer bg-info">
                              <i class="mdi mdi-reload"></i>
                            </div>
                            <div class="dropdown dropleft pl-1 pt-3">
                              <div id="dropdownMenuButton2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <p><i class="mdi mdi-dots-vertical"></i></p>
                              </div>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <a class="dropdown-item" href="#">Sales</a>
                                <a class="dropdown-item" href="#">Track Invoice</a>
                                <a class="dropdown-item" href="#">Payment History</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="list-card">
                      <div class="row align-items-center">
                        <div class="col-7 col-sm-8">
                          <div class="row align-items-center">
                            <div class="col-sm-4">
                              <img src="assets/images/faces/face3.jpg" alt="" />
                            </div>
                            <div class="col-sm-8 pr-0 pl-sm-0">
                              <h6 class="mb-1 mb-sm-0">Erdin Sukamto</h6>
                            </div>
                          </div>
                        </div>
                        <div class="col-5 col-sm-4">
                          <div class="d-flex pt-1 align-items-center">
                            <div class="reload-outer bg-primary">
                              <i class="mdi mdi-reload"></i>
                            </div>
                            <div class="dropdown dropleft pl-1 pt-3">
                              <div id="dropdownMenuButton3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <p><i class="mdi mdi-dots-vertical"></i></p>
                              </div>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <a class="dropdown-item" href="#">Sales</a>
                                <a class="dropdown-item" href="#">Track Invoice</a>
                                <a class="dropdown-item" href="#">Payment History</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="list-card">
                      <div class="row align-items-center">
                        <div class="col-7 col-sm-8">
                          <div class="row align-items-center">
                            <div class="col-sm-4">
                              <img src="assets/images/faces/face11.jpg" alt="" />
                            </div>
                            <div class="col-sm-8 pr-0 pl-sm-0">
                              <h6 class="mb-1 mb-sm-0">Gita Ayu</h6>
                            </div>
                          </div>
                        </div>
                        <div class="col-5 col-sm-4">
                          <div class="d-flex pt-1 align-items-center">
                            <div class="reload-outer bg-warning">
                              <i class="mdi mdi-reload"></i>
                            </div>
                            <div class="dropdown dropleft pl-1 pt-3">
                              <div id="dropdownMenuButton4" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <p><i class="mdi mdi-dots-vertical"></i></p>
                              </div>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                <a class="dropdown-item" href="#">Sales</a>
                                <a class="dropdown-item" href="#">Track Invoice</a>
                                <a class="dropdown-item" href="#">Payment History</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="list-card">
                      <div class="row align-items-center">
                        <div class="col-7 col-sm-8">
                          <div class="row align-items-center">
                            <div class="col-sm-4">
                              <img src="assets/images/faces/face3.jpg" alt="" />
                            </div>
                            <div class="col-sm-8 pr-0 pl-sm-0">
                              <h6 class="mb-1 mb-sm-0">Syambudi</h6>
                            </div>
                          </div>
                        </div>
                        <div class="col-5 col-sm-4">
                          <div class="d-flex pt-1 align-items-center">
                            <div class="reload-outer bg-info">
                              <i class="mdi mdi-reload"></i>
                            </div>
                            <div class="dropdown dropleft pl-1 pt-3">
                              <div id="dropdownMenuButton5" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <p><i class="mdi mdi-dots-vertical"></i></p>
                              </div>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                <a class="dropdown-item" href="#">Sales</a>
                                <a class="dropdown-item" href="#">Track Invoice</a>
                                <a class="dropdown-item" href="#">Payment History</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 grid-margin stretch-card">
                <!--datepicker-->
                <div class="card">
                  <div class="card-body">
                    <div id="inline-datepicker" class="datepicker table-responsive"></div>
                  </div>
                </div>
                <!--datepicker ends-->
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/flot/jquery.flot.js"></script>
    <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="assets/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>