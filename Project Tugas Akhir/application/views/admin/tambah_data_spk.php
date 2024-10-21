<?php if(isset($_GET['kd'])){ $kd = $this->input->get('kd'); $mn = $this->input->get('mn'); }else { $kd = 0; $mn = 0; } ?>
<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/backend/') ?>dist/img/logo.png" height="160" width="160"
          class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('nama_emonitoring'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i>
          <?php echo $this->session->userdata('jabatan_emonitoring'); ?>
        </a>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="<?php echo base_url('dashboard'); ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="header">SURAT PERINTAH TUGAS</li>
      <li class="active">
        <a href="<?php echo base_url('dashboard/tambah_data_spk'); ?>">
          <i class="fa fa-tasks"></i> <span>Tambah Data SPK</span>
        </a>
      </li>
      <li class="header">KELOLA PROYEK PEKERJAAN</li>
      <li <?php if($kd == '1'){echo 'class="treeview active menu-open"';}else{echo'class="treeview"';} ?>>
        <a href="#">
          <i class="fa fa-industry"></i> <span>Dibawah 100 Jt</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?php if($kd == '1' && $mn == '1'){echo 'class="active"';} ?>><a href="<?php echo base_url('dashboard/surat_perintah_kerja?kd=1&mn=1'); ?>"><i class="fa fa-circle-o"></i> Surat Perintah Kerja</a></li>
          <li <?php if($kd == '1' && $mn == '2'){echo 'class="active"';} ?>><a href="<?php echo base_url('dashboard/surat_tugas?kd=1&mn=2'); ?>"><i class="fa fa-circle-o"></i> Surat Tugas</a></li>
          <li <?php if($kd == '1' && $mn == '3'){echo 'class="active"';} ?>><a href="<?php echo base_url('dashboard/addendum?kd=1&mn=3'); ?>"><i class="fa fa-circle-o"></i> Addendum</a></li>
          <li <?php if($kd == '1' && $mn == '4'){echo 'class="active"';} ?>><a href="<?php echo base_url('dashboard/ass_build_drawing?kd=1&mn=4'); ?>"><i class="fa fa-circle-o"></i> Ass Build Drawing</a></li>
          <li <?php if($kd == '1' && $mn == '5'){echo 'class="active"';} ?>><a href="<?php echo base_url('dashboard/dokumentasi?kd=1&mn=5'); ?>"><i class="fa fa-circle-o"></i> Dokumentasi</a></li>
        </ul>
      </li>
      <li <?php if($kd == '2'){echo 'class="treeview active menu-open"';}else{echo'class="treeview"';} ?>>
        <a href="#">
          <i class="fa fa-industry"></i> <span>100 Jt - 300 Jt</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?php if($kd == '2' && $mn == '1'){echo 'class="active"';} ?>><a href="<?php echo base_url('dashboard/surat_perintah_kerja?kd=2&mn=1'); ?>"><i class="fa fa-circle-o"></i> Surat Perintah Kerja</a></li>
          <li <?php if($kd == '2' && $mn == '2'){echo 'class="active"';} ?>><a href="<?php echo base_url('dashboard/surat_tugas?kd=2&mn=2'); ?>"><i class="fa fa-circle-o"></i> Surat Tugas</a></li>
          <li <?php if($kd == '2' && $mn == '3'){echo 'class="active"';} ?>><a href="<?php echo base_url('dashboard/laporan_kerja?kd=2&mn=3'); ?>"><i class="fa fa-circle-o"></i> Laporan Kerja</a></li>
          <li <?php if($kd == '2' && $mn == '4'){echo 'class="active"';} ?>><a href="<?php echo base_url('dashboard/addendum?kd=2&mn=4'); ?>"><i class="fa fa-circle-o"></i> Addendum</a></li>
          <li <?php if($kd == '2' && $mn == '5'){echo 'class="active"';} ?>><a href="<?php echo base_url('dashboard/ass_build_drawing?kd=2&mn=5'); ?>"><i class="fa fa-circle-o"></i> Ass Build Drawing</a></li>
          <li <?php if($kd == '2' && $mn == '6'){echo 'class="active"';} ?>><a href="<?php echo base_url('dashboard/berita_acara?kd=2&mn=6'); ?>"><i class="fa fa-circle-o"></i> Berita Acara</a></li>
          <li <?php if($kd == '2' && $mn == '7'){echo 'class="active"';} ?>><a href="<?php echo base_url('dashboard/dokumentasi?kd=2&mn=7'); ?>"><i class="fa fa-circle-o"></i> Dokumentasi</a></li>
        </ul>
      </li>      
      <li <?php if($kd == '3'){echo 'class="treeview active menu-open"';}else{echo'class="treeview"';} ?>>
        <a href="#">
          <i class="fa fa-industry"></i> <span>Diatas 300 Jt</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?php if($kd == '3' && $mn == '1'){echo 'class="active"';} ?>><a href="<?php echo base_url('dashboard/surat_perintah_kerja?kd=3&mn=1'); ?>"><i class="fa fa-circle-o"></i> Surat Perintah Kerja</a></li>
          <li <?php if($kd == '3' && $mn == '8'){echo 'class="active"';} ?>><a href="<?php echo base_url('dashboard/surat_keputusan?kd=3&mn=8'); ?>"><i class="fa fa-circle-o"></i> Surat Keputusan</a></li>
          <li <?php if($kd == '3' && $mn == '3'){echo 'class="active"';} ?>><a href="<?php echo base_url('dashboard/laporan_kerja?kd=3&mn=3'); ?>"><i class="fa fa-circle-o"></i> Laporan Kerja</a></li>
          <li <?php if($kd == '3' && $mn == '4'){echo 'class="active"';} ?>><a href="<?php echo base_url('dashboard/addendum?kd=3&mn=4'); ?>"><i class="fa fa-circle-o"></i> Addendum</a></li>
          <li <?php if($kd == '3' && $mn == '5'){echo 'class="active"';} ?>><a href="<?php echo base_url('dashboard/ass_build_drawing?kd=3&mn=5'); ?>"><i class="fa fa-circle-o"></i> Ass Build Drawing</a></li>
          <li <?php if($kd == '3' && $mn == '6'){echo 'class="active"';} ?>><a href="<?php echo base_url('dashboard/berita_acara?kd=3&mn=6'); ?>"><i class="fa fa-circle-o"></i> Berita Acara</a></li>
          <li <?php if($kd == '3' && $mn == '7'){echo 'class="active"';} ?>><a href="<?php echo base_url('dashboard/dokumentasi?kd=3&mn=7'); ?>"><i class="fa fa-circle-o"></i> Dokumentasi</a></li>
        </ul>
      </li>
      <li class="header">MANAJEMEN PENGGUNA</li>
      <li>
        <a href="<?php echo base_url('dashboard/tambah_pengguna'); ?>">
          <i class="fa fa-users"></i> <span>Tambah Pengguna</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('dashboard/data_pengguna'); ?>">
          <i class="fa fa-list"></i> <span>Data Pengguna</span>
        </a>
      </li>
    </ul>
  </section>
</aside>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <b>Tambah Data SPK</b>
      <small>(Surat Perintah Kerja)</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li>Tambah Data SPK</li>
    </ol>
  </section>
  <section class="content">
    <div class="box box-default">
      <div class="box-header with-border">
      </div>

      <script>
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
        }

        document.addEventListener('DOMContentLoaded', function() {
            var nilaiKontrakInput = document.getElementById('nilai_kontrak');
            nilaiKontrakInput.addEventListener('keyup', function(e) {
                nilaiKontrakInput.value = formatRupiah(this.value, '');
            });
        });
    </script>

<form action="<?php echo base_url('dashboard/simpan_spk'); ?>" method="post" enctype="multipart/form-data">     
        <input type="hidden" name="kd" value="<?php echo $kd; ?>">
        <input type="hidden" name="mn" value="<?php echo $mn; ?>"> 
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">

              <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Lokasi</label>
                <input type="text" name="lokasi" id="lokasi" placeholder="Lokasi" class="form-control" required>
              </div>         

              <div class="form-group">
                <label>Nomor Kontrak</label>
                <input type="text" name="nomor_kontrak" id="nomor_kontrak" placeholder="Nomor Kontrak" class="form-control" required>
              </div>

            </div>

            <div class="col-md-6">    
                
              <div class="form-group">
                <label>Tanggal Kontrak</label>
                <input type="text" name="jangka_kontrak" id="jangka_kontrak" placeholder="dd/mm/yyyy - dd/mm/yyyy" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Nilai Kontrak</label>
                <input type="text" name="nilai_kontrak" id="nilai_kontrak" placeholder="Nilai Kontrak" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Dokumen (file dalam format .pdf)</label>
                <input type="file" name="dokumen" id="dokumen" class="form-control" required>
              </div>

            </div>
          </div>
        </div>
        <div class="box-footer">
          <button type="reset" class="btn btn-default"><i class="fa fa-remove"></i> Batal</button>
          <button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"></i> Simpan</button>
        </div>
      </form>
    </div>
  </section>
</div>