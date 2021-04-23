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
  <link rel="icon" href="<?php echo base_url(); ?>assets/dist/img/logo.png" type="image/gif">

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
	<div class="row">
	<div class="col-md-12">
  <div class="box box-info">
				<div class='box-header  with-border'>
					<h3 class='box-title'>Biodata Dosen</h3>
                </div>
                
                <div class="box-body table-responsive">
                <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" style="width: 200px; height: 200px" src="<?php echo base_url(); ?>assets/dist/img/<?= $user['foto'] ?>" alt="User Image">
                </div>
                <h3 class="profile-username text-center text-bold text-uppercase"><?= $user['nama_user']?></h3>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td class="text-right satu">NIP Dosen</td>
                            <td class="text-center dua"> : </td>
                            <td class="tiga"><?= $user['nip']?></td>
                        </tr>
                        <tr>
                            <td class="text-right satu">NIDN</td>
                            <td class="text-center dua"> : </td>
                            <td class="tiga"><?= $user['nidn']?></td>
                        </tr>
                        <tr>
                            <td class="text-right satu">ID Scopus</td>
                            <td class="text-center dua"> : </td>
                            <td class="tiga"><?= $user['id_scopus']?></td>
                        </tr>
                        <tr>
                            <td class="text-right satu">Program Studi</td>
                            <td class="text-center dua"> : </td>
                            <td class="tiga"><?= $user['program_studi']?></td>
                        </tr>
                        <tr>
                            <td class="text-right satu">Jenis Kelamin</td>
                            <td class="text-center dua"> : </td>
                            <td class="tiga"><?= $user['jk']?></td>
                        </tr><tr>
                            <td class="text-right satu">Jabatan Fungsional</td>
                            <td class="text-center dua"> : </td>
                            <td class="tiga"><?= $user['jabatan']?></td>
                        </tr><tr>
                            <td class="text-right satu">Pendidikan Tertinggi</td>
                            <td class="text-center dua"> : </td>
                            <td class="tiga"><?= $user['pendidikan_tertinggi']?></td>
                        </tr><tr>
                            <td class="text-right satu">Status Ikatan Kerja</td>
                            <td class="text-center dua"> : </td>
                            <td class="tiga"><?= $user['status_ikatan_kerja']?></td>
                        </tr><tr>
                            <td class="text-right satu">Status Aktivitas</td>
                            <td class="text-center dua"> : </td>
                            <td class="tiga"><?= $user['status_aktivitas']?></td>
                        </tr>
                    </tbody>
                </table>
          
               <div class="infobox">
               <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Riwayat Pendidikan</a></li>
                    <li><a data-toggle="tab" href="#menu1">Pengabdian</a></li>
                    <li><a data-toggle="tab" href="#menu2">Penelitian</a></li>
                    <li><a data-toggle="tab" href="#menu3">Daftar Publikasi</a></li>
                    <li><a data-toggle="tab" href="#menu4">Daftar Buku</a></li>
                    <!-- <li><a data-toggle="tab" href="#menu2">Menu 2</a></li> -->
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <h3>Riwayat Pendidikan</h3>
                        <table class="table table-bordered table-hover table-striped">
						<thead class="bg-primary">
							<tr>
								<th class="text-center">No</th>
								<th class="text-center">Perguruan Tinggi</th>
								<th class="text-center">Gelar Akademik</th>
								<th class="text-center">Tahun Ijazah</th>
								<th class="text-center">Jenjang</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$no=1;
								foreach ($pendidikan as $a) { ?>
                                <tr>
									<td class="text-center"><?= $no++ ?> </td>
                                    <td><?= $a->perguruan_tinggi ?></td>
									<td><?= $a->gelar_akademik ?> </td>
									<td><?= $a->tahun_ijazah ?> </td>
									<td><?= $a->jenjang ?> </td>
								</tr>
								<?php } ?>
						</tbody>
					</table>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>Pengabdian</h3>
                        <table class="table table-bordered table-hover table-striped">
						<thead class="bg-primary">
							<tr>
								<th class="text-center">No</th>
								<th class="text-center">Smester</th>
								<th class="text-center">Nama Mata Kuliah</th>
								<th class="text-center">Kelas</th>
								<th class="text-center">Perguruan Tinggi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$no=1;
								foreach ($pengabdian as $a) { ?>
								<tr>
									<td class="text-center"><?= $no++ ?> </td>
									<td><?= $a->smester ?> </td>
									<td><?= $a->nama_matkul ?> </td>
									<td><?= $a->kelas ?> </td>
									<td><?= $a->perguruan_tinggi ?> </td>
                                </tr>
                                <?php } ?>
						    </tbody>
					    </table>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Penelitian</h3>
                        <table class="table table-bordered table-hover table-striped">
							<thead class="bg-primary">
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">Judul Penelitian</th>
									<th class="text-center">Bidang Ilmu</th>
									<th class="text-center">Lembaga</th>
									<th class="text-center">Tahun</th>
								</tr>
							</thead>
							<tbody>
							<?php 
								$no=1;
								foreach ($penelitian as $a) { ?>
								<tr>
									<td class="text-center"><?= $no++ ?> </td>
									<td><?= $a->judul ?> </td>
									<td><?= $a->bidang_ilmu ?> </td>
									<td><?= $a->lembaga ?> </td>
									<td><?= $a->tahun ?> </td>
								</tr>
							<?php } ?>
						    </tbody>
					    </table>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <h3>Daftar Publikasi</h3>
                        <table class="table table-bordered table-hover table-striped">
							<thead class="bg-primary">
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">Judul</th>
									<th class="text-center">Jurnal</th>
									<th class="text-center">No Artikel</th>
									<th class="text-center">Volume</th>
									<th class="text-center">Tahun</th>
								</tr>
							</thead>
							<tbody>
							<?php 
								$no=1;
								foreach ($publikasi as $a) { ?>
								<tr>
									<td class="text-center"><?= $no++ ?> </td>
									<td><?= $a->judul_pub ?> </td>
									<td><?= $a->jurnal ?> </td>
									<td><?= $a->no_artikel ?> </td>
									<td><?= $a->volume ?> </td>
									<td><?= $a->tahun ?> </td>
								</tr>
							<?php } ?>
						    </tbody>
					    </table>
                    </div>
                    <div id="menu4" class="tab-pane fade">
                        <h3>Daftar Buku</h3>
                        <table class="table table-bordered table-hover table-striped">
						<thead class="bg-primary">
							<tr>
								<th class="text-center">No</th>
								<th class="text-center">Judul Buku</th>
								<th class="text-center">ISBN</th>
								<th class="text-center">Penerbit</th>
								<th class="text-center">Tahun Terbit</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$no=1;
								foreach ($buku as $a) { ?>
								<tr>
								<tr>
									<td class="text-center"><?= $no++ ?> </td>
									<td><?= $a->judul_buku ?> </td>
									<td><?= $a->isbn ?> </td>
									<td><?= $a->penerbit ?> </td>
									<td><?= $a->tahun_terbit ?> </td>
								</tr>
							<?php } ?>
						</tbody>
					    </table>
                    </div>
				</div>
				
             </div>
                <!-- /.card-body -->
				</div>
			</div>
                <!-- /.card-body -->
				</div>
			</div>
		</div>
	</div>

</section>

<script src="<?php echo base_url() ?>assets/app/js/alert.js"></script>
<script>
	$(document).ready(function() {
		$('#myTable').DataTable();
	});
</script>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="#">Dosen Unpam</a>.</strong> All rights
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
