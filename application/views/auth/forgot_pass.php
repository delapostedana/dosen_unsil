<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dosen Unsil | Forgot Password</title>
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
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert2.min.css">
  <style>
		.swal2-popup {
			font-size: 1.6rem !important;
		}
	</style>
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#">Dosen<b>UNSIL</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Forgot Password</p>
    <div id="flash" data-flash="<?= $this->session->flashdata('notif') ?>">

    <form action="<?= base_url('auth/forgot') ?>" method="post">
      <div class="form-group has-feedback">
        <input name="username" type="text" class="form-control" placeholder="Username" value="<?= set_value('username')?>" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <span class="text-danger ml-1"><?php echo form_error('username'); ?></span>
      </div>
        <!-- /.col -->
      </div>
      <button class="btn btn-primary" class="text-center">Reset Password</button>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?= base_url() ?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url() ?>/assets/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert2.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

<script>
    var flash = $('#flash').data('flash');

    if(flash=='error') {
        Swal.fire(
        'Salah!',
        'Username yang anda masukkan tidak terdaftar!!',
        'error'
        )
    }

    if(flash=='success'){
        Swal.fire(
        'Berhasil',
        'Silahkan cek email anda!',
        'success'
        )
    }
</script>
    
</body>
</html>
