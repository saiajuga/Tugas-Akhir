    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>PDAM Tirta Khatulistiwa</b>
      </div>
      <strong><a>E-Monitoring Aplikasi Monitoring Proyek</a></strong>
    </footer>
    <div class="control-sidebar-bg"></div>
  </div>

  <script src="<?php echo base_url('/assets/backend/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/dist/js/adminlte.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/bower_components/chart.js/Chart.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/dist/js/demo.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/js/raphael.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/js/morris.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/bower_components/select2/dist/js/select2.full.min.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/bower_components/ckeditor/ckeditor.js'); ?>"></script>
  <script src="<?php echo base_url('/assets/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
  <script>
    $(function () {
      $('#laporan').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : false,
        'info'        : true,
        'autoWidth'   : false,
        'pageLength'  : 10
      });
    })
  </script>
</body>
</html>