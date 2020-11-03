

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMULASI MONTECALRO</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="asset/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jsGrid -->
  <link rel="stylesheet" href="asset/AdminLTE/plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="asset/AdminLTE/plugins/jsgrid/jsgrid-theme.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="asset/AdminLTE/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    

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
      
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <div align="Center" >
     <span >MENU BAR</span></div>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/LINGGA.JFIF" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">LINGGA</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Administrator
                
              </p>
            </a>
          </li>
          
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                SIMULASI MONTECARLO
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="soal2data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CONTOH SOAL 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="soal3data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CONTOH SOAL 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="soal1data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SOAL 1</p>
                </a>
              </li>

          
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
          <div class="col-sm-6" align="center">
           
            
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header" >
          
       <div class="card-body">
         <table id="example2" class="table table-bordered table-hover">
          <thead>
            
          
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <center>
        <h1>APLIKASI HITUNG NILAI SIMULASI MONTECARLO</h1>
        <h4>Tanpa Database</h4>

        <form action="input1.php" method="post">
        <label>Jumlah Data : </label>
        <tr>
        <td>Masukkan Jumlah Data Hari <input type="number" name="jummapel" required></td>
        <td>Masukkan Jumlah Bilangan Acak <input type="number" name="bilacak" required></td>
        
       </tr>
        
        
    </center>
    </table>
        </thead>
              
              <input type="submit" name="submit" value="submit">
        </form>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="asset/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="asset/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jsGrid -->
<script src="asset/AdminLTE/plugins/jsgrid/demos/db.js"></script>
<script src="asset/AdminLTE/plugins/jsgrid/jsgrid.min.js"></script>
<!-- AdminLTE App -->
<script src="asset/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="asset/AdminLTE/dist/js/demo.js"></script>
<!-- page script -->
 
        

</body>
</html>


 


   
