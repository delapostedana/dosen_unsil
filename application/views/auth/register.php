<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dosen Unsil | Registration</title>
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

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?= base_url() ?>/assets/index2.html">Dosen<b>UNSIL</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>
    <div id="flash" data-flash="<?= $this->session->flashdata('notif') ?>">

    <form action="<?= base_url('auth/regist') ?>" method="post">
      <div class="form-group has-feedback">
        <input name="nama" type="text" class="form-control" placeholder="Full name" value="<?= set_value('nama')?>" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="username" type="text" class="form-control" placeholder="Username" value="<?= set_value('username')?>" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <span class="text-danger ml-1"><?php echo form_error('username'); ?></span>
      </div>
      <div class="form-group has-feedback">
        <input name="email" type="email" class="form-control" placeholder="Email" value="<?= set_value('email')?>" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <span class="text-danger ml-1"><?php echo form_error('email'); ?></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="Password" value="<?= set_value('password')?>" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <span class="text-danger ml-1"><?php echo form_error('password'); ?></span>
      </div>
      <div class="form-group has-feedback">
        <input name="re-password" type="password" class="form-control" placeholder="Retype password" value="<?= set_value('re-password')?>" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        <span class="text-danger ml-1"><?php echo form_error('re-password'); ?></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    Already have a membership? <br> please <a href="<?= base_url() ?>auth/login" class="text-center">login</a>
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
        'Error!',
        'Registrasi gagal!!',
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
</script>
    
</body>
</html>
