<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dosen Universitas Siliwangi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/css/skins/_all-skins.min.css">
  <!-- <link rel="icon" href="<?php echo base_url(); ?>assets/dist/img/logo.png" type="image/gif"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar">
      <div class="container">
        <div class="">
          <a href="<?= base_url() ?>" class="navbar-brand">Dosen<b>UNSIL</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="pull-right">
          <!-- <a href=""type="button" class="btn btn-block btn-success" style="margin-top: 10px">
            Login</a> -->
            <ul class="nav" style="margin-top: 5px">
                <li style="display: inline;"><a style="display: inline-block" href="<?= base_url() ?>auth/login">Login</a></li>
                <li style="display: inline;"><a style="display: inline-block" href="<?= base_url() ?>auth/register">Register</a></li>
            </ul>
        </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          DAFTAR DOSEN
          <small>Universitas Siliwangi</small>
        </h1>
       
      </section>

      <!-- Main content -->
      <section class="content">
      <div class="callout callout-info">
          <h4>Tip!</h4>
          <p>Ini adalah daftar dosen di Universitas Siliwangi</p>
        </div>
        <div class="box box-default">
          <!-- <div class="box-header with-border">
            <h3 class="box-title">Blank Box</h3>
          </div> -->
          <div class="box-body table-responsive">
          <table id="datatable" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NID</th>
                  <th>Nama Dosen</th>
                  <th>Fakultas</th>
                  <th>Mata Kuliah</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>2010140270</td>
                  <td>Ahmad Santoso</td>
                  <td>Teknik Informatika</td>
                  <td>Analisa dan Perancangan</td>
                  <td><a href="<?= base_url() ?>home/v_biodata" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>2010140271</td>
                  <td>Ahmad Jaelani</td>
                  <td>Teknik Informatika</td>
                  <td>Basis Data</td>
                  <td><a href="<?= base_url() ?>home/v_biodata" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>2010140272</td>
                  <td>Abdul Muttaqin</td>
                  <td>Sistem Informatika</td>
                  <td>Pemrograman</td>
                  <td><a href="<?= base_url() ?>home/v_biodata" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>2010140273</td>
                  <td>Abdul Ilyas</td>
                  <td>Teknik Informatika</td>
                  <td>Kalkulus</td>
                  <td><a href="<?= base_url() ?>home/v_biodata" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>2010140274</td>
                  <td>Abdul Nurrohman</td>
                  <td>Teknik Informatika</td>
                  <td>Testing</td>
                  <td><a href="<?= base_url() ?>home/v_biodata" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>2010140275</td>
                  <td>Adbul Karim</td>
                  <td>Sistem Informatika</td>
                  <td>Pengantar Aplikasi</td>
                  <td><a href="<?= base_url() ?>home/v_biodata" class="btn btn-success">Detail</a></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>2010140276</td>
                  <td>Zainudin</td>
                  <td>Sistem Informatika</td>
                  <td>Pemrograman Web</td>
                  <td><a href="<?= base_url() ?>home/v_biodata" class="btn btn-success">Detail</a></td>
                </tr>
               
              </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; 2021 <a href="#">Dosen Unsil</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url() ?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url() ?>/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>/assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>/assets/dist/js/demo.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/dataTables/1.10.18/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/dataTables/buttons/1.5.6/css/buttons.bootstrap.min.css" />
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/dataTables/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/dataTables/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/dataTables/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/dataTables/1.10.18/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/dataTables/1.10.18/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/dataTables/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/dataTables/buttons/1.5.6/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/dataTables/buttons/1.5.6/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/dataTables/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/dataTables/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/dataTables/buttons/1.5.6/js/buttons.print.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/dataTables/progress/percentageBars.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable()
    })
    // $(document).ready(function() {
    //     $('#datatable1').DataTable()
    // })
</script>
</body>
</html>
