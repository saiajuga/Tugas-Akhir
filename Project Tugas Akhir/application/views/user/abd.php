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
    </ul>
  </section>
</aside>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <b>Ass Build Drawing</b>
      <small><?php if($kd == '1'){echo "Dibawah 300 Jt";}elseif($kd=='2'){echo "100 jt  - 300 Jt";}elseif($kd=='3'){echo "Diatas 300 Jt";} ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li>Ass Build Drawing</li>
    </ol>
  </section>
  <section class="content">
    <div class="box box-default">
      <div class="box-header with-border">
      </div>

      <form action="<?php echo base_url('dashboard/simpan_abd'); ?>" method="post" enctype="multipart/form-data">      
        <input type="hidden" name="kd" value="<?php echo $kd; ?>">
        <input type="hidden" name="mn" value="<?php echo $mn; ?>">
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">

              <div class="form-group">
                <label>Pekerjaan</label>
                <select name="id_spk" id="id_spk" class="form-control select2" style="width: 100%;" required>
                  <option value="">~ Pilih Pekerjaan</option>
                  <?php
                    $no=0;
                    foreach($this->db->query("SELECT * 
                      FROM tbl_spk
                      ORDER BY id_spk ASC")->result_array() as $tampil):
                    $id_spk = $tampil['id_spk'];
                    $pekerjaan = $tampil['pekerjaan'];
                  ?>
                  <option value="<?php echo $id_spk; ?>"><?php echo $pekerjaan; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              
            </div>

            <div class="col-md-6">    
              
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
        <div class="box-footer">
          <table class="table table-bordered table-hover" id="laporan">
            <thead>
              <tr class="bg-primary">
                <th class="text-center" width="10">No</th>
                <th class="text-center">Pekerjaan</th>
                <th class="text-center"></th>
                <th class="text-center"></th>
                <th class="text-center"></th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no=0;
                if($kd == '1'){
                  $data = $this->db->query("SELECT tbl_abd.id_abd,tbl_spk.pekerjaan,tbl_abd.dokumen 
                  FROM tbl_spk,tbl_abd 
                  WHERE tbl_spk.id_spk = tbl_abd.id_spk
                  AND tbl_spk.nilai_kontrak < '100000000'
                  ORDER BY tbl_abd.id_abd DESC");
                }elseif($kd=='2'){
                  $data = $this->db->query("SELECT tbl_abd.id_abd,tbl_spk.pekerjaan,tbl_abd.dokumen 
                  FROM tbl_spk,tbl_abd 
                  WHERE tbl_spk.id_spk = tbl_abd.id_spk
                  AND tbl_spk.nilai_kontrak BETWEEN '100000000' AND '300000000'
                  ORDER BY tbl_abd.id_abd DESC");
                }elseif($kd=='3'){
                  $data = $this->db->query("SELECT tbl_abd.id_abd,tbl_spk.pekerjaan,tbl_abd.dokumen 
                  FROM tbl_spk,tbl_abd 
                  WHERE tbl_spk.id_spk = tbl_abd.id_spk
                  AND tbl_spk.nilai_kontrak > '300000000'
                  ORDER BY tbl_abd.id_abd DESC");
                }
                foreach($data->result_array() as $tampil):
                  $no++;
                  $id_abd = $tampil['id_abd'];
                  $pekerjaan = $tampil['pekerjaan'];
                  $dokumen = $tampil['dokumen'];
              ?>
                <tr>
                  <td class="text-center"><?php echo $no; ?></td>
                  <td class="text-left"><?php echo $pekerjaan; ?></td>
                  <td class="text-center">
                    <a href="#" data-toggle="modal" data-target="#lihat<?php echo $id_abd; ?>">
                      <small class="label pull-center bg-blue"><i class="fa fa-eye"></i> Lihat</small>
                    </a>
                    <div class="modal fade in" id="lihat<?php echo $id_abd; ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                            <h4 class="modal-title">Dokumen <?php echo $pekerjaan; ?></h4>
                          </div>
                          <div class="modal-body">
                            <embed
                            type="application/pdf"
                            src="<?php echo base_url('assets/backend/file/'.$dokumen); ?>"
                            id="pdfDocument"
                            width="100%"
                            height="450" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>                  
                  <td class="text-center">
                    <a href="<?php echo base_url('dashboard/cetak?dokumen='.$dokumen); ?>" target="_blank">
                      <small class="label pull-center bg-green"><i class="fa fa-print"></i> Cetak</small>
                    </a>
                  </td>                  
                  <td class="text-center">
                    <a href="<?php echo base_url('dashboard/hapus_abd?id_abd='.$id_abd.'&kd='.$kd.'&mn='.$mn); ?>">
                      <small class="label pull-center bg-red"><i class="fa fa-trash"></i> Hapus</small>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
    </div>
  </section>
</div>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();
  })
</script>