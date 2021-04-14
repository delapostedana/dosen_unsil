<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dosen Universitas Siliwangi</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
	<!-- Morris chart -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/morris.js/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/select2/dist/css/select2.min.css">

	<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<!-- jQuery UI 1.11.4 -->
	<!-- <link rel="icon" href="<?php echo base_url(); ?>assets/dist/img/logo.png" type="image/gif"> -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert2.min.css">
	<script src="<?php echo base_url() ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/dropdown/css/dd.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/magnific/magnific-popup.css">
	<script src="<?php echo base_url() ?>assets/plugins/magnific/jquery.magnific-popup.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
	<style>
		.swal2-popup {
			font-size: 1.6rem !important;
		}

		.satu {
			width: 45%;
			text-align: right;
		}

		.dua {
			width: 10%;
			text-align: center;
		}

		.tiga {
			width: 45%;
			text-align: left;
		}
	</style>

</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="#" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>D</b>U</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg">Dosen<b>UNSIL</b></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- User Account: style can be found in dropdown.less -->
						<!-- <?php $foto = $this->session->userdata['foto']; ?> -->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo base_url(); ?>assets/dist/img/avatar5.png" class="user-image" alt="User Image">
								<?= strtoupper($this->fungsi->user_login()->nama_user); ?>
							</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header">
									<img src="<?php echo base_url(); ?>assets/dist/img/avatar5.png" class="user-image"  class="img-circle" alt="User Image">
									<p class="text-bold">
									<?= strtoupper($this->fungsi->user_login()->nama_user); ?>
									</p>
									<p>
										<p> <?php $role = $this->fungsi->user_login()->id_role;
										if($role == 1){
											echo 'Admin';
										}
										else if($role == 2){
											echo "Approver";
										}
										else{
											echo "Dosen";
										}
										?>  
										</p>
									</p>
								</li>
								<!-- Menu Body -->
								<li class="user-footer">
									<div class="pull-left">
										<a href="<?php echo base_url() ?>profile" class="btn btn-default btn-flat">Profile</a>
									</div>
									<div class="pull-right">
										<a href="<?php echo base_url() ?>auth/logout" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?php echo base_url(); ?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p> <?php $role = $this->fungsi->user_login()->id_role;
						if($role == 1){
							echo 'Admin';
						}
						else if($role == 2){
							echo "Approver";
						}
						else{
							echo "Dosen";
						}
						?>  
						</p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				
				</div>
				<!-- /.search form -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
				
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>
					<li>
						<a href="<?php echo base_url() ?>dashboard">
							<i class="fa fa-dashboard"></i> <span>Dashboard</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url() ?>profile">
							<i class="fa fa-user-circle"></i> <span>Profile</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-folder-o"></i> <span>Data Master</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right-container"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="<?php echo base_url() ?>matkul"><i class="fa fa-circle-o"></i>Mata Kuliah</a></li>
							<!-- <li><a href="<?php echo base_url() ?>index.php/ukuran"><i class="fa fa-circle-o"></i>Varian</a></li> -->
							<li><a href="<?php echo base_url() ?>fakultas"><i class="fa fa-circle-o"></i>Fakultas</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo base_url() ?>user">
							<i class="fa fa-user-plus"></i> <span>User</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url() ?>approval">
							<i class="fa fa-check"></i> <span>Approval</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-history"></i> <span>Riwayat Dosen</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right-container"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="<?php echo base_url() ?>pendidikan"><i class="fa fa-circle-o"></i>Riwayat Pendidikan</a></li>
							<li><a href="<?php echo base_url() ?>pengabdian"><i class="fa fa-circle-o"></i>Pengabdian</a></li>
							<li><a href="<?php echo base_url() ?>penelitian"><i class="fa fa-circle-o"></i>Penelitian</a></li>
							<li><a href="<?php echo base_url() ?>publikasi"><i class="fa fa-circle-o"></i>Daftar Publikasi</a></li>
							<li><a href="<?php echo base_url() ?>buku"><i class="fa fa-circle-o"></i>Daftar Buku</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo base_url() ?>biodata">
							<i class="fa fa-address-book"></i> <span>Biodata Dosen</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-file"></i> <span>Laporan</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right-container"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="<?php echo base_url() ?>laporan/status_pengajuan"><i class="fa fa-circle-o"></i>Status Pengajuan</a></li>
							<li><a href="<?php echo base_url() ?>laporan/daftar_dosen"><i class="fa fa-circle-o"></i>Daftar Dosen</a></li>
						</ul>
					</li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Dosen UNSIL
					<small>Control panel</small>
				</h1>
			</section>
			<!-- Main content -->
			<?php echo $contents ?>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 1.0.0
			</div>
			<strong>Copyright &copy; 2021 <a href="#">Dosen Unsil</a></strong> All rights
			reserved.
		</footer>
		<!-- /.control-sidebar -->
		<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
		
	</div>

	<script src="<?php echo base_url() ?>assets/plugins/dropdown/js/jquery.dd.js"></script>

	<script src="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert2.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/Bootstrap-validator/validator.js"></script>
	<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- datepicker -->
	<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<!-- Slimscroll -->
	<script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
	<script src="<?php echo base_url() ?>assets/bower_components/select2/dist/js/select2.min.js"></script>
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
	<script>
		$(document).ready(function() {
			$(".select22").select2({
				placeholder: "Please Select"
			});
		});
	</script>
	<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable()
    })
    // $(document).ready(function() {
    //     $('#datatable1').DataTable()
    // })
	</script>
	<script>
		var flash = $('#flash').data('flash');
		if(flash=='success'){
			Swal.fire(
			'Success',
			'Data berhasil ditambahkan!',
			'success'
			)
		}
		else if(flash=='error') {
			Swal.fire(
			'Error!',
			'Terjadi Kesalahan',
			'error'
			)
		}
		else if(flash=='updated') {
			Swal.fire(
			'Updated',
			'Data berhasil diubah!',
			'success'
			)
		}
		else if(flash=='deleted') {
			Swal.fire(
			'Deleted',
			'Data berhasil Dihapus!',
			'success'
			)
		}
		else if(flash=='signin') {
			const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.addEventListener('mouseenter', Swal.stopTimer)
				toast.addEventListener('mouseleave', Swal.resumeTimer)
			}
			})

			Toast.fire({
			icon: 'success',
			title: 'Signed in successfully'
			})
		}
	</script>
</body>

</html>