<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard Admin | E-Monitoring</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet"
    href="<?php echo base_url('/assets/backend/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/backend/css/jquery-ui.css'); ?>">
  <link rel="stylesheet"
    href="<?php echo base_url('/assets/backend/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet"
    href="<?php echo base_url('/assets/backend/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <link rel="stylesheet"
    href="<?php echo base_url('/assets/backend/bower_components/jvectormap/jquery-jvectormap.css'); ?>">
  <link rel="stylesheet"
    href="<?php echo base_url('/assets/backend/bower_components/select2/dist/css/select2.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/backend/dist/css/AdminLTE.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/backend/dist/css/skins/_all-skins.min.css'); ?>">
  <link rel="stylesheet"
    href="<?php echo base_url('/assets/backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
  <link rel="stylesheet"
    href="<?php echo base_url('/assets/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwtxQN8hMp0bg4pxx9lvpeU43J1tlitxY&sensor=true&libraries=places,geometry"></script> -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
  <script src="<?php echo base_url('/assets/backend/sweetalert/sweetalert.min.js'); ?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('/assets/backend/sweetalert/sweetalert.min.css'); ?>" />
  <script src="<?php echo base_url('/assets/backend/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/js/jquery-ui.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>">
  </script>
  <script
    src="<?php echo base_url('/assets/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>">
  </script>
  <!-- <script src="<?php //echo base_url('/assets/angularjs/angular.min.js'); ?>"></script>
    <script src="<?php //echo base_url('/assets/angularjs/angular-validate.min.js'); ?>"></script> -->
  <link rel="stylesheet" type="text/css" media="screen"
    href="<?php echo base_url('/assets/backend/googledrive/upload.css'); ?>" />
  <script src="<?php echo base_url('/assets/backend/googledrive/main.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/googledrive/upload.js'); ?>"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>

<body class="hold-transition sidebar-mini skin-purple fixed">
  <div class="wrapper">
    <header class="main-header">
    <a href="index2.html" class="logo">
      <span class="logo-mini"><b>E</b>MO</span>
      <span class="logo-lg"><b>E-</b>Monitoring</span>
    </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url('assets/backend/') ?>dist/img/KOSONG.png" class="user-image"
                  alt="User Image">
                <span class="hidden-xs"><?php echo $this->session->userdata('nama_emonitoring'); ?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="<?php echo base_url('assets/backend/') ?>dist/img/KOSONG.png" class="img-circle"
                    alt="User Image">
                  <p>
                    <?php echo $this->session->userdata('nama_emonitoring'); ?>
                    <small>
                      <?php echo $this->session->userdata('jabatan_emonitoring'); ?>
                    </small>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?php echo base_url('login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>