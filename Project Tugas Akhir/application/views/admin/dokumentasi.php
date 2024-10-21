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
      <b>Dokumentasi</b>
      <small><?php if($kd == '1'){echo "Dibawah 100 Jt";}elseif($kd=='2'){echo "100 jt  - 300 Jt";}elseif($kd=='3'){echo "Diatas 300 Jt";} ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li>Dokumentasi</li>
    </ol>
  </section>

  <script>
    function formatPercentage(angka) {
        // Remove any non-numeric characters except for the comma
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            formatted = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            formatted += separator + ribuan.join('.');
        }

        // Add the decimal part if it exists
        formatted = split[1] != undefined ? formatted + ',' + split[1] : formatted;
        
        // Append the percentage symbol
        return formatted + '%';
    }

    document.addEventListener('DOMContentLoaded', function() {
        var progres_pekerjaan = document.getElementById('progres_pekerjaan');
        progres_pekerjaan.addEventListener('keyup', function(e) {
          progres_pekerjaan.value = formatPercentage(this.value);
        });
    });
</script>

  <section class="content">
    <div class="box box-default">
      <div class="box-header with-border">
      </div>
      <form action="<?php echo base_url('dashboard/simpan_dokumentasi'); ?>" method="post" enctype="multipart/form-data">     
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
              
              <div class="form-group">
                <label>Tanggal Dokumentasi</label>
                <input type="date" name="tanggal_dokumentasi" id="tanggal_dokumentasi" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Persentase Pekerjaan (%)</label>
                <input type="text" name="progres_pekerjaan" id="progres_pekerjaan" class="form-control" required>
              </div>

            </div>

            <div class="col-md-6">    
              
              <div class="form-group">
                <label>Gambar 1 (file dalam format .png/jpg/jpeg)</label>
                <input type="file" name="gambar1" id="gambar1" class="form-control" required>
              </div>
              
              <div class="form-group">
                <label>Gambar 2 (file dalam format .png/jpg/jpeg)</label>
                <input type="file" name="gambar2" id="gambar2" class="form-control" required>
              </div>
              
              <div class="form-group">
                <label>Gambar 3 (file dalam format .png/jpg/jpeg)</label>
                <input type="file" name="gambar3" id="gambar3" class="form-control" required>
              </div>
              
              <div class="form-group">
                <label>Gambar 4 (file dalam format .png/jpg/jpeg)</label>
                <input type="file" name="gambar4" id="gambar4" class="form-control" required>
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
                <th class="text-center">Tanggal Dokumentasi</th>
                <th class="text-center">Persentase Pekerjaan (%)</th>
                <th class="text-center">Gambar 1</th>
                <th class="text-center">Gambar 2</th>
                <th class="text-center">Gambar 3</th>
                <th class="text-center">Gambar 4</th>
                <th class="text-center"></th>
                <th class="text-center"></th>
                <th class="text-center"></th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no=0;
                if($kd == '1'){
                  $data = $this->db->query("SELECT tbl_dokumentasi.id_dokumentasi,tbl_spk.pekerjaan,tbl_dokumentasi.tanggal_dokumentasi,tbl_dokumentasi.progres_pekerjaan,tbl_dokumentasi.gambar1,tbl_dokumentasi.gambar2,tbl_dokumentasi.gambar3,tbl_dokumentasi.gambar4 
                  FROM tbl_spk,tbl_dokumentasi 
                  WHERE tbl_spk.id_spk = tbl_dokumentasi.id_spk
                  AND tbl_spk.nilai_kontrak < '100000000'
                  ORDER BY tbl_dokumentasi.id_dokumentasi DESC");
                }elseif($kd=='2'){
                  $data = $this->db->query("SELECT tbl_dokumentasi.id_dokumentasi,tbl_spk.pekerjaan,tbl_dokumentasi.tanggal_dokumentasi,tbl_dokumentasi.progres_pekerjaan,tbl_dokumentasi.gambar1,tbl_dokumentasi.gambar2,tbl_dokumentasi.gambar3,tbl_dokumentasi.gambar4 
                  FROM tbl_spk,tbl_dokumentasi 
                  WHERE tbl_spk.id_spk = tbl_dokumentasi.id_spk
                  AND tbl_spk.nilai_kontrak BETWEEN '100000000' AND '300000000'
                  ORDER BY tbl_dokumentasi.id_dokumentasi DESC");
                }elseif($kd=='3'){
                  $data = $this->db->query("SELECT tbl_dokumentasi.id_dokumentasi,tbl_spk.pekerjaan,tbl_dokumentasi.tanggal_dokumentasi,tbl_dokumentasi.progres_pekerjaan,tbl_dokumentasi.gambar1,tbl_dokumentasi.gambar2,tbl_dokumentasi.gambar3,tbl_dokumentasi.gambar4 
                  FROM tbl_spk,tbl_dokumentasi 
                  WHERE tbl_spk.id_spk = tbl_dokumentasi.id_spk
                  AND tbl_spk.nilai_kontrak > '300000000'
                  ORDER BY tbl_dokumentasi.id_dokumentasi DESC");
                }
                foreach($data->result_array() as $tampil):
                  $no++;
                  $id_dokumentasi = $tampil['id_dokumentasi'];
                  $pekerjaan = $tampil['pekerjaan'];
                  $tanggal_dokumentasi = $tampil['tanggal_dokumentasi'];
                  $progres_pekerjaan = $tampil['progres_pekerjaan'];
                  $gambar1 = $tampil['gambar1'];
                  $gambar2 = $tampil['gambar2'];
                  $gambar3 = $tampil['gambar3'];
                  $gambar4 = $tampil['gambar4'];
              ?>
                <tr>
                  <td class="text-center"><?php echo $no; ?></td>
                  <td class="text-left"><?php echo $pekerjaan; ?></td>
                  <td class="text-center"><?php echo $tanggal_dokumentasi; ?></td>
                  <td class="text-center"><?php echo $progres_pekerjaan; ?></td>
                  <td class="text-center">
                    <img src="<?php echo base_url('assets/backend/file/'.$gambar1); ?>" width="60" height="30">
                  </td>                  
                  <td class="text-center">
                    <img src="<?php echo base_url('assets/backend/file/'.$gambar2); ?>" width="60" height="30">
                  </td>                  
                  <td class="text-center">
                    <img src="<?php echo base_url('assets/backend/file/'.$gambar3); ?>" width="60" height="30">
                  </td>                  
                  <td class="text-center">
                    <img src="<?php echo base_url('assets/backend/file/'.$gambar4); ?>" width="60" height="30">
                  </td>
                  <td class="text-center">
                  <a href="#" data-toggle="modal" data-target="#lihat<?php echo $id_dokumentasi; ?>">
                          <small class="label pull-center bg-blue"><i class="fa fa-eye"></i> Lihat</small>
                        </a>
                        <div class="modal fade in" id="lihat<?php echo $id_dokumentasi; ?>">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title">Dokumen: <?php echo $pekerjaan; ?></h4>
                                <h5 class="modal-title">Tanggal Dokumentasi: <?php echo $tanggal_dokumentasi; ?></h5>
                                <h6 class="modal-title">Progres Pekerjaan: <?php echo $progres_pekerjaan; ?></h6>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <img
                                      src="<?php echo base_url('assets/backend/file/'.$gambar1); ?>"
                                      class="img-responsive"
                                      alt="Gambar 1"
                                      width="100%"
                                      height="auto" />
                                  </div>
                                  <div class="col-md-6">
                                    <img
                                      src="<?php echo base_url('assets/backend/file/'.$gambar2); ?>"
                                      class="img-responsive"
                                      alt="Gambar 2"
                                      width="100%"
                                      height="auto" />
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <img
                                      src="<?php echo base_url('assets/backend/file/'.$gambar3); ?>"
                                      class="img-responsive"
                                      alt="Gambar 3"
                                      width="100%"
                                      height="auto" />
                                  </div>
                                  <div class="col-md-6">
                                    <img
                                      src="<?php echo base_url('assets/backend/file/'.$gambar4); ?>"
                                      class="img-responsive"
                                      alt="Gambar 4"
                                      width="100%"
                                      height="auto" />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>   
                  <td class="text-center">
                    <a href="#" onclick="printImages(
                      '<?php echo base_url('assets/backend/file/'.$gambar1); ?>',
                      '<?php echo base_url('assets/backend/file/'.$gambar2); ?>', 
                      '<?php echo base_url('assets/backend/file/'.$gambar3); ?>', 
                      '<?php echo base_url('assets/backend/file/'.$gambar4); ?>'); return false;">
                      <small class="label pull-center bg-green"><i class="fa fa-print"></i> Cetak</small>
                    </a>
                  </td>
                  <td class="text-center">
                    <a href="<?php echo base_url('dashboard/hapus_dokumentasi?id_dokumentasi='.$id_dokumentasi.'&kd='.$kd.'&mn='.$mn); ?>">
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
  function printImages(gambar1, gambar2, gambar3, gambar4) {
  // Open a new tab
  const printWindow = window.open('', '_blank');
  
  // Create the HTML structure for printing
  printWindow.document.write('<style>');
  printWindow.document.write('body { font-family: Arial, sans-serif; text-align: center; margin: 0; padding: 0; }');
  printWindow.document.write('.image-container { display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; margin: 20px; }');
  printWindow.document.write('img { max-width: 45%; height: auto; margin: 5px; }');
  printWindow.document.write('</style>');
  printWindow.document.write('<h4>Dokumen: <?php echo $pekerjaan; ?></h4>');
  printWindow.document.write('<h5>Tanggal Dokumentasi: <?php echo $tanggal_dokumentasi; ?></h5>');
  printWindow.document.write('<h6>Progres Pekerjaan: <?php echo $progres_pekerjaan; ?></h6>');
  printWindow.document.write('<div class="image-container">');
  
  // Check and append each image if the URL is provided
  if (gambar1) printWindow.document.write('<img src="' + gambar1 + '" alt="Gambar 1" />');
  if (gambar2) printWindow.document.write('<img src="' + gambar2 + '" alt="Gambar 2" />');
  if (gambar3) printWindow.document.write('<img src="' + gambar3 + '" alt="Gambar 3" />');
  if (gambar4) printWindow.document.write('<img src="' + gambar4 + '" alt="Gambar 4" />');
  
  printWindow.document.write('</div>');
  
  // Close the document to apply changes
  printWindow.document.close();
  
  // Focus on the new tab
  printWindow.focus();
  
  // Print the document
  printWindow.print();
}


</script>