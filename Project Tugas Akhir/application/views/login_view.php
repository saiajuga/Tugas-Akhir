<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>

  <head>
    
    <!-- Menampilkan judul website pada tab browser -->
    <title>E-Monitoring</title>
    <!-- Menampilkan judul website pada tab browser -->

    <!-- Meta untuk menyimpan informasi tentang website -->
    <meta name="robots" content="noindex">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Meta untuk menyimpan informasi tentang website -->

    <!-- Baris kode untuk mengimport data css dari luar file -->
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/backend/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/backend/bower_components/Ionicons/css/ionicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/backend/dist/css/AdminLTE.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/backend/plugins/iCheck/square/blue.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="<?php echo base_url('/assets/backend/css/custom.css'); ?>">
    <!-- Baris kode untuk mengimport data css dari luar file -->

  </head>

  <body class="hold-transition login-page">
    <div class="login-box">

      <!-- menampilkan logo pada halaman login -->
      <div class="login-logo">
        <a href="#">E-<b>Monitoring</b></a>
      </div>
      <!-- menampilkan logo pada halaman login -->
      
      <!-- form halaman login -->
      <div class="login-box-body">
        <p class="login-box-msg">Halaman Login Pengguna</p>
        <form action="<?php echo base_url('login/auth'); ?>" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="Username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Ingat Saya
                </label>
              </div>
            </div>            
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-in"></i> Masuk</button>
            </div>            
          </div>
        </form>
      </div>
       <!-- form halaman login -->
      
    </div>
  </body>

  <!-- tampilan pemberitahuan gagal login -->
  <input type="hidden" onclick="launch_toast()" id="message"/>
  <div id="toast">
    <div id="img">
      <i class="fa fa-remove"></i>
    </div>
    <div id="desc">Gagal login! Silahkan coba lagi.</div>
  </div>
  <!-- tampilan pemberitahuan gagal login -->

  <!-- Baris kode untuk mengimport data javascript dari luar file -->
  <script src="<?php echo base_url('/assets/backend/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/plugins/iCheck/icheck.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/js/custom.js'); ?>"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%'
      });
    });

    $(document).ready(function(){
      $('#<?php echo $this->session->flashdata('msg'); ?>').trigger('click');
    });
  </script>
  <!-- Baris kode untuk mengimport data javascript dari luar file -->

</html>