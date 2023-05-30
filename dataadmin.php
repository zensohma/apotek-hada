<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
</head>
<body>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar me-4" href="index.php"></a>
        <div class="col-md-4 d-flex align-items-center">
          <div class="d-flex flex-row align-items-center">
            <i class="ti-heart-broken icon-md text-primary"></i>
            <p class="mb-0 ms-2 display-5"><cite title="Apotek">Apotek</cite>
          </p>
          </div>
        </div>
      </div>
    
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        
        <ul class="navbar-nav navbar-nav-right">
            
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" alt class="w-px-40 h-auto rounded-circle">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="obat.php">
              <i class="ti-layout-list-post menu-icon"></i>
              <span class="menu-title">Data Obat</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transaksi.php">
              <i class="ti-money menu-icon"></i>
              <span class="menu-title">Transaksi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_supplier.php">
              <i class="ti-truck menu-icon"></i>
              <span class="menu-title">Data Supplier</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dataadmin.php">
              <i class="ti-id-badge menu-icon"></i>
              <span class="menu-title">Data Admin</span>
            </a>
          </li>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Apotek Hada | Data Admin</h4>
                </div>
                <div>
                <a class="btn btn-primary btn-icon-text btn-rounded" href="tambahadmin.php">
                      <i class="ti-export btn-icon-prepend"></i>Tambah Admin
</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Admin</h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Nama Admin</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php
                          include 'config.php';
                          $no = 1;
                          $query = mysqli_query($conn, "SELECT * FROM tb_admin");
                          while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                          <td><?= $i; ?></td>
                          <td><?php echo $data['username']; ?></td>
                          <td><?php echo $data['password']; ?></td>
                          <td><?php echo $data['nama_admin']; ?></td>
                          <td>
                            <a href="editadmin.php?id=<?php echo $data['id_admin'] ?>" class="btn btn-success">Edit</a>
                            <a href="deleteadmin.php?id=<?php echo $data['id_admin'] ?>" class="btn btn-danger">Hapus</a>
                          </td>
                        </tr>
                        <?php $i++; ?>
                        <?php 
                        $no++;
                          }
                         ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
            </div>
          
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
  
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

