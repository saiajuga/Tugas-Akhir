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
      <li class="header">SURAT PERINTAH KERJA</li>
      <li>
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
      <li class="active">
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
      <b>Data Pengguna</b>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li>Data Pengguna</li>
    </ol>
  </section>
  <section class="content">
    <div class="box box-primary">
      <div class="box-body chart-responsive">                  
        <div class="form-horizontal table-responsive">
          <table class="table table-bordered table-hover" id="laporan">
            <thead>
              <tr class="bg-primary">
                <th class="text-center" width="10">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Jabatan</th>
                <th class="text-center">Username</th>
                <th class="text-center"></th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no=0;
                foreach($this->db->query("SELECT * FROM tbl_pengguna 
                  ORDER BY id_pengguna DESC")->result_array() as $tampil):
                  $no++;
                  $id_pengguna = $tampil['id_pengguna'];
                  $nama = $tampil['nama'];
                  $jabatan = $tampil['jabatan'];
                  $username = $tampil['username'];
              ?>
                <tr>
                  <td class="text-center"><?php echo $no; ?></td>
                  <td class="text-left"><?php echo $nama; ?></td>
                  <td class="text-left"><?php echo $jabatan; ?></td>
                  <td class="text-center"><?php echo $username; ?></td>                                              
                  <td class="text-center">
                    <a href="<?php echo base_url('dashboard/hapus_pengguna?id_pengguna='.$id_pengguna); ?>">
                      <small class="label pull-center bg-red"><i class="fa fa-trash"></i> Hapus</small>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>   
        </div>   
      </div>                    
    </div>
  </section>
</div>