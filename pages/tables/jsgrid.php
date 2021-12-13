
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Muringato | Visualization</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jsGrid -->
  <link rel="stylesheet" href="../../plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="../../plugins/jsgrid/jsgrid-theme.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- download button styling -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
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
            <a href="../" class="nav-link">
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
              <a href="../tables/data.php" class="nav-link ">
                <i class="nav-icon fas fa-table"></i>
                <p>Tabulated Data</p>
              </a>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a href="../tables/jsgrid.php" class="nav-link active">
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
            <h1>Downloads</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <?php 
      include "../../connection.php";
    ?>

<div class="container">
 
 <form method='post' action='download.php'>
  <button type="submit" value='Export' class="btn btn-lg btn-primary" > Download Data</button>
 
  <table border='1'  id="example2" class="table table-bordered table-hover" style='border-collapse:collapse;'>
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
     $query = "SELECT * FROM water_quality ORDER BY id asc";
     $result = mysqli_query($conn,$query);
     $user_arr = array();
     while($row = mysqli_fetch_array($result)){
      $id = $row['id'];
      $latitude = $row['latitude'];
      $longitude = $row['longitude'];
      $pH = $row['ph'];
      $EC = $row['ec'];
      $turbidity = $row['turbidity'];
      $Date_Time = $row['date& time'];
      $user_arr[] = array($id,$latitude,$longitude,$pH,$EC,$turbidity,$Date_Time);
   ?>
   <tr>
     <td><?php echo $latitude?></td>
     <td><?php echo $longitude?></td>
     <td><?php echo $pH?></td>
     <td><?php echo $EC?></td>
     <td><?php echo $turbidity?></td>
     <td><?php echo $Date_Time?></td>
   </tr>
      
   <?php
    }
   ?>
   <tbody>
   </table>
   <?php 
    $serialize_user_arr = serialize($user_arr);
   ?>
  <textarea name='export_data' style='display: none;'><?php echo $serialize_user_arr; ?></textarea>
 </form>
</div>
      <!-- /.card -->
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
<!-- jsGrid -->
<script src="../../plugins/jsgrid/demos/db.js"></script>
<script src="../../plugins/jsgrid/jsgrid.min.js"></script>
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
