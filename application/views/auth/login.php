<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dosen Unsil | Log in</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/iCheck/square/blue.css">
  <script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert2.min.css">
	<style>
		.swal2-popup {
			font-size: 1.6rem !important;
		}
	</style>
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#">Dosen<b>UNSIL</b></a>
  </div>
  <!-- /.login-logo -->
  <div id="flash" data-flash="<?= $this->session->flashdata('notif') ?>">
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="<?= base_url('auth/proses') ?>" role="form" id="myForm" method="post">
    
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" id="username"  placeholder="Username"  required>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control"  name="password" id="password"  placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
         
        </div>
          
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Login</button>
        </div>
     
      </div>
    </form>

    <a href="<?= base_url() ?>auth/forgot_password">Forgot my password</a><br>
    <a href="<?= base_url() ?>auth/register" class="text-center">Register</a> a new membership

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?= base_url() ?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url() ?>/assets/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert2.min.js"></script>
<script>
		var flash = $('#flash').data('flash');
		if(flash=='error') {
			Swal.fire(
			'Error!',
			'Username / Password yang anda masukan SALAH!',
			'error'
			)
    }

		if(flash=='success'){
			Swal.fire(
			'Success',
			'Registrasi berhasil!',
			'success'
			)
    }
    
    
		if(flash=='send'){
			Swal.fire(
			'Success',
			'Silahkan cek email anda!',
			'success'
			)
    }
    
    if(flash=='reset'){
        Swal.fire(
        'Berhasil',
        'Password berhasil diubah!',
        'success'
        )
    }
	</script>
</body>
</html>
