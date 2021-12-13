<?php
include "../../connection.php";
$sql ="SELECT id, latitude,longitude, ph ,ec ,temperature, turbidity FROM water_quality" ;
$result = $conn->query($sql);

if ($result->num_rows >0) {
    # we output that data here
    while ($row = $result->fetch_assoc()) {
        
    }
}else {
    echo "no results";
}
$conn->close();

$page = $_SERVER['PHP_SELF'];
$sec = "10";

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Muringato | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>
  
      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
  
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
            </a>
            <div class="dropdown-divider"></div>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header"></span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i>
              <span class="float-right text-muted text-sm"></span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i>
              <span class="float-right text-muted text-sm"></span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 
              <span class="float-right text-muted text-sm"></span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer"></a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
  
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-4 pb-4 mb-4 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">ADMINISTRATOR</a>
        </div>
      </div>
      <!-- <div class="dropdown-divider"></div> -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="../../index.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p> 
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item has-treeview">
              <a href="../map.php" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  Maps
                </p>
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item has-treeview">
              <li class="nav-item">
                <a href="../charts/chartjs.php" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>Data Viaualization</p>
                </a>
              </li>
              <div class="dropdown-divider"></div>
              <li class="nav-item">
                <a href="../charts/flot.php" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>Real Time Data</p>
                </a>
              </li>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item has-treeview">
              <a href="../UI/timeline.php" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  Project Timeline
                </p>
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item has-treeview">
              <li class="nav-item">
                <a href="../tables/data.php" class="nav-link active">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Tabulated Data</p>
                </a>
              </li>
              <div class="dropdown-divider"></div>
              <li class="nav-item">
                <a href="../tables/jsgrid.php" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Data Download</p>
                </a>
              </li>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a href="../calendar.php" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Calendar
                  <span class="badge badge-info right">2</span>
                </p>
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a href="../gallery.php" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Gallery
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
    include "../../connection.php";
    $results = mysqli_query($conn,"SELECT * FROM water_quality");
    ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable Showing the Main parameters and their corrdinates</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php
                if (mysqli_num_rows($results) >0){
              ?>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Water PH</th>
                    <th>Electrical conductivity</th>
                    <th>Turbidity</th>
                    <th>Date & Time</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $i = 0;
                    while($row = mysqli_fetch_array($results)){
                  ?>
                  <tr>
                    <td><?php echo $row["latitude"]?></td>
                    <td><?php echo $row["longitude"]?></td>
                    <td><?php echo $row["ph"]?></td>
                    <td><?php echo $row["ec"]?></td>
                    <td><?php echo $row["turbidity"]?></td>
                    <td><?php echo $row["date& time"]?></td>
                  </tr>
                  <?php
                  $i++;
                }
              ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Water PH</th>
                    <th>Electrical conductivity</th>
                    <th>Turbidity</th>
                    <th>Date & Time</th>
                  </tr>
                  </tfoot>
                </table>
                <?php
                  }
                  else{
                    echo "No result found";
                  }
                  ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="http://muringato.co.ke">Muringato.co.ke</a>.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
