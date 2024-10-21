<?php
class Dashboard extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in_emonitoring') !== TRUE)
    {
      redirect('/');
    }
  }

  /** ------------------------------------------------------------------ */

  // class untuk menampilkan halaman dashboard admin atau user
  function Index(){
    if($this->session->userdata('jabatan_emonitoring')==='admin')
    {
      $this->load->view('admin/header');
      $this->load->view('admin/dashboard');
      $this->load->view('admin/footer');
    }else if($this->session->userdata('jabatan_emonitoring')==='user')
    {
      $this->load->view('user/header');
      $this->load->view('user/dashboard');
      $this->load->view('user/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }

  // class untuk menampilkan halaman tambah data spk
  function Tambah_data_spk(){
    if($this->session->userdata('jabatan_emonitoring')==='admin')
    {
      $this->load->view('admin/header');
      $this->load->view('admin/tambah_data_spk');
      $this->load->view('admin/footer');
    }else if($this->session->userdata('jabatan_emonitoring')==='user')
    {
      $this->load->view('user/header');
      $this->load->view('user/tambah_data_spk');
      $this->load->view('user/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }

  //class untuk menampilkan halaman surat perintah kerja
  function Surat_perintah_kerja(){
    if($this->session->userdata('jabatan_emonitoring')==='admin')
    {
      $this->load->view('admin/header');
      $this->load->view('admin/surat_perintah_kerja');
      $this->load->view('admin/footer');
    }else if($this->session->userdata('jabatan_emonitoring')==='user')
    {
      $this->load->view('user/header');
      $this->load->view('user/surat_perintah_kerja');
      $this->load->view('user/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }

  //class untuk menampilkan halaman laporan kerja
  function Laporan_kerja(){
    if($this->session->userdata('jabatan_emonitoring')==='admin')
    {
      $this->load->view('admin/header');
      $this->load->view('admin/laporan_kerja');
      $this->load->view('admin/footer');
    }else if($this->session->userdata('jabatan_emonitoring')==='user')
    {
      $this->load->view('user/header');
      $this->load->view('user/laporan_kerja');
      $this->load->view('user/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }

  //class untuk menampilkan halaman berita acara
  function Berita_acara(){
    if($this->session->userdata('jabatan_emonitoring')==='admin')
    {
      $this->load->view('admin/header');
      $this->load->view('admin/berita_acara');
      $this->load->view('admin/footer');
    }else if($this->session->userdata('jabatan_emonitoring')==='user')
    {
      $this->load->view('user/header');
      $this->load->view('user/berita_acara');
      $this->load->view('user/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }

  //class untuk menampilkan halaman surat keputusan
  function Surat_keputusan(){
    if($this->session->userdata('jabatan_emonitoring')==='admin')
    {
      $this->load->view('admin/header');
      $this->load->view('admin/surat_keputusan');
      $this->load->view('admin/footer');
    }else if($this->session->userdata('jabatan_emonitoring')==='user')
    {
      $this->load->view('user/header');
      $this->load->view('user/surat_keputusan');
      $this->load->view('user/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }

  // class untuk menampilkan halaman surat tegugas
  function Surat_tugas(){
    if($this->session->userdata('jabatan_emonitoring')==='admin')
    {
      $this->load->view('admin/header');
      $this->load->view('admin/surat_tugas');
      $this->load->view('admin/footer');
    }else if($this->session->userdata('jabatan_emonitoring')==='user')
    {
      $this->load->view('user/header');
      $this->load->view('user/surat_tugas');
      $this->load->view('user/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }

  // class untuk menampilkan halaman addendum
  function Addendum(){
    if($this->session->userdata('jabatan_emonitoring')==='admin')
    {
      $this->load->view('admin/header');
      $this->load->view('admin/addendum');
      $this->load->view('admin/footer');
    }else if($this->session->userdata('jabatan_emonitoring')==='user')
    {
      $this->load->view('user/header');
      $this->load->view('user/addendum');
      $this->load->view('user/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }

  // class untuk menampilkan halaman ass build drawing
  function Ass_build_drawing(){
    if($this->session->userdata('jabatan_emonitoring')==='admin')
    {
      $this->load->view('admin/header');
      $this->load->view('admin/abd');
      $this->load->view('admin/footer');
    }else if($this->session->userdata('jabatan_emonitoring')==='user')
    {
      $this->load->view('user/header');
      $this->load->view('user/abd');
      $this->load->view('user/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }

  // class untuk menampilkan halaman dokumentasi
  function Dokumentasi(){
    if($this->session->userdata('jabatan_emonitoring')==='admin')
    {
      $this->load->view('admin/header');
      $this->load->view('admin/dokumentasi');
      $this->load->view('admin/footer');
    }else if($this->session->userdata('jabatan_emonitoring')==='user')
    {
      $this->load->view('user/header');
      $this->load->view('user/dokumentasi');
      $this->load->view('user/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }

  // class untuk menampilkan halaman tambah penggunas
  function Tambah_pengguna(){
    if($this->session->userdata('jabatan_emonitoring')==='admin')
    {
      $this->load->view('admin/header');
      $this->load->view('admin/tambah_pengguna');
      $this->load->view('admin/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }

  // class untuk menampilkan halaman data pengguna
  function Data_pengguna(){
    if($this->session->userdata('jabatan_emonitoring')==='admin')
    {
      $this->load->view('admin/header');
      $this->load->view('admin/data_pengguna');
      $this->load->view('admin/footer');
    }else{ 
      redirect('index/lockscren');
    }
  }

  // class untuk cetak dokumen
  function Cetak(){
    $this->load->view('cetak');
  }
  function Cetak_gambar(){
    $this->load->view('Cetak_gambar');
  }
  
  /** ------------------------------------------------------------------ */
  
  /** FUNCTION */
  /** ------------------------------------------------------------------ */

  // class untuk menyimpan surat perintah kerja
  public function simpan_spk(){
    $data = array();
    $config['upload_path'] = './assets/backend/file/';
    $config['allowed_types'] = 'pdf';
    $config['max_size'] = 3000000;
    $config['encrypt_name'] = true;

    $this->load->library('upload', $config);
    $pekerjaan = addslashes($this->input->post('pekerjaan'));
    $lokasi = $this->input->post('lokasi');
    $nomor_kontrak = addslashes($this->input->post('nomor_kontrak'));
    $jangka_kontrak = $this->input->post('jangka_kontrak');
    $nilai_kontrak = $this->input->post('nilai_kontrak');
    
    // Remove formatting before saving
    $nilai_kontrak = preg_replace("/[^0-9]/", "", $nilai_kontrak);

    if (!$this->upload->do_upload('dokumen')) {
        $error = ['error' => $this->upload->display_errors()];
        $link = base_url('dashboard/tambah_data_spk?pekerjaan='.$pekerjaan.'&lokasi='.$lokasi.'&nomor_kontrak='.$nomor_kontrak.'&jangka_kontrak='.$jangka_kontrak.'&nilai_kontrak='.$nilai_kontrak);
        echo "<script language=\"javascript\">alert(\"Ukuran file terlalu besar, Maksimal 1MB!\");document.location.href='$link';</script>";
    } else {
        $fileData = $this->upload->data();
        $data['dokumen'] = $fileData['file_name'];
        $dokumen = $data['dokumen'];        

        $simpan = $this->db->query("INSERT INTO tbl_spk(pekerjaan, lokasi, nomor_kontrak, jangka_kontrak, nilai_kontrak, dokumen) VALUES('$pekerjaan', '$lokasi', '$nomor_kontrak', '$jangka_kontrak', '$nilai_kontrak', '$dokumen')");
        if ($simpan) {
            $link = base_url('dashboard/tambah_data_spk');
            echo "<script language=\"javascript\">alert(\"Simpan Berhasil\");document.location.href='$link';</script>";
        } else {
            echo "Gagal Simpan";
        }
    }
}

  // class untuk simpan surat tugas
  function simpan_surattugas(){
    $data = array();
    $config['upload_path'] = './assets/backend/file/';
    $config['allowed_types'] = 'pdf';
    $config['max_size'] = 3000000;
    $config['encrypt_name'] = true;

    $this->load->library('upload', $config);
    $id_spk = $this->input->post('id_spk');
    $no_surattugas = addslashes($this->input->post('no_surattugas'));
    $pengawas = $this->input->post('pengawas');
    
    $kd = $this->input->post('kd');
    $mn = $this->input->post('mn');

    if (!$this->upload->do_upload('dokumen')) {
      $error = ['error' => $this->upload->display_errors()];
      $link = base_url('dashboard/surat_tugas?kd='.$kd.'&mn='.$mn);
      echo "<script language=\"javascript\">alert(\"Format file Bukan .pdf!\");document.location.href='$link';</script>";
    }else{
      $fileData = $this->upload->data();
      $data['dokumen'] = $fileData['file_name'];
      $dokumen = $data['dokumen'];        

      $simpan = $this->db->query("INSERT INTO tbl_surattugas(id_spk,no_surattugas,pengawas,dokumen) VALUES('$id_spk','$no_surattugas','$pengawas','$dokumen')");
      if($simpan){
        $link = base_url('dashboard/surat_tugas?kd='.$kd.'&mn='.$mn);
        echo "<script language=\"javascript\">alert(\"Simpan Berhasil\");document.location.href='$link';</script>";
      }else{
        echo "Gagal Simpan";
      }
    }
  }
  
  // class untuk simpan addendum
  function simpan_addendum(){
    $data = array();
    $config['upload_path'] = './assets/backend/file/';
    $config['allowed_types'] = 'pdf';
    $config['max_size'] = 3000000;;
    $config['encrypt_name'] = true;

    $this->load->library('upload', $config);
    $id_spk = $this->input->post('id_spk');
    $no_addendum = addslashes($this->input->post('no_addendum'));
    
    $kd = $this->input->post('kd');
    $mn = $this->input->post('mn');

    if (!$this->upload->do_upload('dokumen')) {
      $error = ['error' => $this->upload->display_errors()];
      $link = base_url('dashboard/addendum?kd='.$kd.'&mn='.$mn);
      echo "<script language=\"javascript\">alert(\"Format file Bukan .pdf!\");document.location.href='$link';</script>";
    }else{
      $fileData = $this->upload->data();
      $data['dokumen'] = $fileData['file_name'];
      $dokumen = $data['dokumen'];        

      $simpan = $this->db->query("INSERT INTO tbl_addendum(id_spk,no_addendum,dokumen) VALUES('$id_spk','$no_addendum','$dokumen')");
      if($simpan){
        $link = base_url('dashboard/addendum?kd='.$kd.'&mn='.$mn);
        echo "<script language=\"javascript\">alert(\"Simpan Berhasil\");document.location.href='$link';</script>";
      }else{
        echo "Gagal Simpan";
      }
    }
  }

  // class untuk simpan abd
  function simpan_abd(){
    $data = array();
    $config['upload_path'] = './assets/backend/file/';
    $config['allowed_types'] = 'pdf';
    $config['max_size'] = 3000000;;
    $config['encrypt_name'] = true;

    $this->load->library('upload', $config);
    $id_spk = $this->input->post('id_spk');
    
    $kd = $this->input->post('kd');
    $mn = $this->input->post('mn');

    if (!$this->upload->do_upload('dokumen')) {
      $error = ['error' => $this->upload->display_errors()];
      $link = base_url('dashboard/ass_build_drawing?kd='.$kd.'&mn='.$mn);
      echo "<script language=\"javascript\">alert(\"Format file Bukan .pdf!\");document.location.href='$link';</script>";
    }else{
      $fileData = $this->upload->data();
      $data['dokumen'] = $fileData['file_name'];
      $dokumen = $data['dokumen'];        

      $simpan = $this->db->query("INSERT INTO tbl_abd(id_spk,dokumen) VALUES('$id_spk','$dokumen')");
      if($simpan){
        $link = base_url('dashboard/ass_build_drawing?kd='.$kd.'&mn='.$mn);
        echo "<script language=\"javascript\">alert(\"Simpan Berhasil\");document.location.href='$link';</script>";
      }else{
        echo "Gagal Simpan";
      }
    }
  }

  // class untuk simpan dokumentasi
  function Simpan_dokumentasi(){
    $data = array();
    $config['upload_path'] = './assets/backend/file/';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size'] = 3000000;;
    $config['remove_spaces'] = TRUE;
    $config['encrypt_name'] = TRUE;

    $this->load->library('upload', $config);
    $tanggal_dokumentasi = $this->input->post('tanggal_dokumentasi');
    $progres_pekerjaan = $this->input->post('progres_pekerjaan');
    
    $kd = $this->input->post('kd');
    $mn = $this->input->post('mn');

    if($_FILES["gambar1"]["size"] > 0){
      $this->upload->do_upload('gambar1');
      $fileData = $this->upload->data();
      $data['gambar1'] = $fileData['file_name'];
      $gambar1 = $data['gambar1'];
    }else{
      $gambar1 = "KOSONG";
    }

    if($_FILES["gambar2"]["size"] > 0){
      $this->upload->do_upload('gambar2');
      $fileData = $this->upload->data();
      $data['gambar2'] = $fileData['file_name'];
      $gambar2 = $data['gambar2'];
    }else{
      $gambar2 = "KOSONG";
    }

    if($_FILES["gambar3"]["size"] > 0){
      $this->upload->do_upload('gambar3');
      $fileData = $this->upload->data();
      $data['gambar3'] = $fileData['file_name'];
      $gambar3 = $data['gambar3'];
    }else{
      $gambar3 = "KOSONG";
    }

    if($_FILES["gambar4"]["size"] > 0){
      $this->upload->do_upload('gambar4');
      $fileData = $this->upload->data();
      $data['gambar4'] = $fileData['file_name'];
      $gambar4 = $data['gambar4'];
    }else{
      $gambar4 = "KOSONG";
    }

    $id_spk = $this->input->post('id_spk');

    $simpan = $this->db->query("INSERT INTO tbl_dokumentasi(id_spk,tanggal_dokumentasi,progres_pekerjaan,
      gambar1,gambar2,gambar3,gambar4) 
      VALUES('$id_spk','$tanggal_dokumentasi','$progres_pekerjaan','$gambar1','$gambar2','$gambar3','$gambar4')");
    
    if($simpan){
      $link = base_url('dashboard/dokumentasi?kd='.$kd.'&mn='.$mn);
      echo "<script language=\"javascript\">alert(\"Simpan Berhasil\");
      document.location.href='$link';</script>";
    }else{
      $link = base_url('dashboard/dokumentasi?kd='.$kd.'&mn='.$mn);
      echo "<script language=\"javascript\">alert(\"Gagal Simpan\");
      document.location.href='$link';</script>";
    }

  }

  // class untuk simpan laporankerja
  function simpan_laporankerja(){
    $data = array();
    $config['upload_path'] = './assets/backend/file/';
    $config['allowed_types'] = 'pdf';
    $config['max_size'] = 3000000;;
    $config['encrypt_name'] = true;

    $this->load->library('upload', $config);
    $id_spk = $this->input->post('id_spk');
    
    $kd = $this->input->post('kd');
    $mn = $this->input->post('mn');

    if (!$this->upload->do_upload('dokumen')) {
      $error = ['error' => $this->upload->display_errors()];
      $link = base_url('dashboard/laporan_kerja');
      echo "<script language=\"javascript\">alert(\"Format file Bukan .pdf!\");document.location.href='$link';</script>";
    }else{
      $fileData = $this->upload->data();
      $data['dokumen'] = $fileData['file_name'];
      $dokumen = $data['dokumen'];        

      $simpan = $this->db->query("INSERT INTO tbl_laporankerja(id_spk,dokumen) VALUES('$id_spk','$dokumen')");
      if($simpan){
        $link = base_url('dashboard/laporan_kerja?kd='.$kd.'&mn='.$mn);
        echo "<script language=\"javascript\">alert(\"Simpan Berhasil\");document.location.href='$link';</script>";
      }else{
        echo "Gagal Simpan";
      }
    }
  }

  // class untuk simpan berita acara
  function simpan_beritaacara(){
    $data = array();
    $config['upload_path'] = './assets/backend/file/';
    $config['allowed_types'] = 'pdf';
    $config['max_size'] = 3000000;;
    $config['encrypt_name'] = true;

    $this->load->library('upload', $config);
    $id_spk = $this->input->post('id_spk');
    $berita = $this->input->post('berita');
    $no_berita = $this->input->post('no_berita');
    
    $kd = $this->input->post('kd');
    $mn = $this->input->post('mn');

    if (!$this->upload->do_upload('dokumen')) {
      $error = ['error' => $this->upload->display_errors()];
      $link = base_url('dashboard/berita_acara?kd='.$kd.'&mn='.$mn);
      echo "<script language=\"javascript\">alert(\"Format file Bukan .pdf!\");document.location.href='$link';</script>";
    }else{
      $fileData = $this->upload->data();
      $data['dokumen'] = $fileData['file_name'];
      $dokumen = $data['dokumen'];        

      $simpan = $this->db->query("INSERT INTO tbl_beritaacara(id_spk,berita,no_berita,dokumen) VALUES('$id_spk','$berita','$no_berita','$dokumen')");
      if($simpan){
        $link = base_url('dashboard/berita_acara?kd='.$kd.'&mn='.$mn);
        echo "<script language=\"javascript\">alert(\"Simpan Berhasil\");document.location.href='$link';</script>";
      }else{
        echo "Gagal Simpan";
      }
    }
  }

  // class untuk simpan surat keputusan
  function simpan_suratkeputusan(){
    $data = array();
    $config['upload_path'] = './assets/backend/file/';
    $config['allowed_types'] = 'pdf';
    $config['max_size'] = 3000000;;
    $config['encrypt_name'] = true;

    $this->load->library('upload', $config);
    $id_spk = $this->input->post('id_spk');
    $no_suratkeputusan = $this->input->post('no_suratkeputusan');
    $pengawas = $this->input->post('pengawas');
    
    $kd = $this->input->post('kd');
    $mn = $this->input->post('mn');

    if (!$this->upload->do_upload('dokumen')) {
      $error = ['error' => $this->upload->display_errors()];
      $link = base_url('dashboard/surat_keputusan?kd='.$kd.'&mn='.$mn);
      echo "<script language=\"javascript\">alert(\"Format file Bukan .pdf!\");document.location.href='$link';</script>";
    }else{
      $fileData = $this->upload->data();
      $data['dokumen'] = $fileData['file_name'];
      $dokumen = $data['dokumen'];        

      $simpan = $this->db->query("INSERT INTO tbl_suratkeputusan(id_spk,no_suratkeputusan,pengawas,dokumen) VALUES('$id_spk','$no_suratkeputusan','$pengawas','$dokumen')");
      if($simpan){
        $link = base_url('dashboard/surat_keputusan?kd='.$kd.'&mn='.$mn);
        echo "<script language=\"javascript\">alert(\"Simpan Berhasil\");document.location.href='$link';</script>";
      }else{
        echo "Gagal Simpan";
      }
    }
  }

  // class untuk simpan pengguna
  function Simpan_pengguna(){
    $nama = $this->input->post('nama');
    $username = $this->input->post('username');
    $jabatan = $this->input->post('jabatan');
    $password = $this->input->post('password');

    // Validasi panjang username dan password
    if (strlen($username) < 4) {
        echo "<script language=\"javascript\">alert(\"Username minimal 4 karakter\");history.back();</script>";
        return;
    }

    if (strlen($password) < 8) {
        echo "<script language=\"javascript\">alert(\"Password minimal 8 karakter\");history.back();</script>";
        return;
    }

    $password_encrypt = password_hash($password, PASSWORD_BCRYPT);

    $simpan = $this->db->query("INSERT INTO tbl_pengguna(nama,username,jabatan,password) VALUES('$nama','$username','$jabatan','$password_encrypt')");

    if($simpan){
      $link = base_url('dashboard/tambah_pengguna');
      echo "<script language=\"javascript\">alert(\"Tambah Pengguna Berhasil\");document.location.href='$link';</script>";
    }else{
      echo "Gagal Simpan";
    }
}
  /** ------------------------------------------------------------------ */

  // class untuk hapus spk
  public function Hapus_spk() {
    $id_spk = $this->input->get('id_spk');
    $kd = $this->input->get('kd');
    $mn = $this->input->get('mn');
    
    // Validasi id_spk
    $query = $this->db->query("SELECT id_spk FROM tbl_spk WHERE id_spk='$id_spk'");
    $spk_exists = $query->num_rows();

    if ($spk_exists > 0) {
        if ($this->input->get('confirm') == 'yes') {
            // Hapus data
            $this->db->query("DELETE FROM tbl_spk WHERE id_spk='$id_spk'");
            // Redirect kembali ke halaman dashboard dengan parameter kd dan mn
            redirect('dashboard?kd=' . $kd . '&mn=' . $mn);
        } else {
            // Tampilkan konfirmasi penghapusan
            echo "<script>
                    var konfirmasi = confirm('Anda yakin ingin menghapus data ini?');
                    if (konfirmasi) {
                        // Redirect ke fungsi penghapusan dengan konfirmasi
                        var link = '" . site_url('dashboard/Hapus_spk?id_spk=' . $id_spk . '&kd=' . $kd . '&mn=' . $mn . '&confirm=yes') . "';
                        document.location.href = link;
                    } else {
                        // Batal menghapus
                        var link = '" . site_url('dashboard?kd=' . $kd . '&mn=' . $mn) . "';
                        document.location.href = link;
                    }
                  </script>";
        }
    } else {
        echo "ID SPK tidak valid atau tidak ditemukan.";
    }
}

  // class untuk hapus surat tugas
  function Hapus_surattugas(){
    $id_surattugas = $this->input->get('id_surattugas');
    $kd = $this->input->get('kd');
    $mn = $this->input->get('mn');
    
    // Validasi id_surattugas
    $query = $this->db->query("SELECT id_surattugas FROM tbl_surattugas WHERE id_surattugas='$id_surattugas'");
    $surattugas_exists = $query->num_rows();

    if($surattugas_exists > 0) {
        // Cek apakah ada konfirmasi penghapusan
        if($this->input->get('confirm') == 'yes') {
            // Hapus data jika konfirmasi diterima
            $this->db->query("DELETE FROM tbl_surattugas WHERE id_surattugas='$id_surattugas'");
            echo "<script>
                    alert('Data berhasil dihapus');
                    window.location.href = '" . base_url('dashboard/surat_tugas?kd=' . $kd . '&mn=' . $mn) . "';
                  </script>";
        } else {
            // Tampilkan konfirmasi penghapusan menggunakan JavaScript
            echo "<script>
                    var konfirmasi = confirm('Anda yakin ingin menghapus data ini?');
                    if(konfirmasi) {
                        // Redirect ke URL yang sama dengan tambahan parameter konfirmasi
                        window.location.href = '" . base_url('dashboard/hapus_surattugas?id_surattugas=' . $id_surattugas . '&kd=' . $kd . '&mn=' . $mn . '&confirm=yes') . "';
                    } else {
                        // Redirect jika batal menghapus
                        window.location.href = '" . base_url('dashboard/surat_tugas?kd=' . $kd . '&mn=' . $mn) . "';
                    }
                  </script>";
        }
    } else {
        echo "ID Surat Tugas tidak valid atau tidak ditemukan.";
    }
  }

  // class untuk hapus addendum
  function Hapus_addendum(){
    $id_addendum = $this->input->get('id_addendum');
    $kd = $this->input->get('kd');
    $mn = $this->input->get('mn');
    
    // Validasi id_addendum
    $query = $this->db->query("SELECT id_addendum FROM tbl_addendum WHERE id_addendum='$id_addendum'");
    $addendum_exists = $query->num_rows();

    if($addendum_exists > 0) {
      // Cek apakah ada konfirmasi penghapusan
      if($this->input->get('confirm') == 'yes') {
          // Hapus data jika konfirmasi diterima
          $this->db->query("DELETE FROM tbl_addendum WHERE id_addendum='$id_addendum'");
          echo "<script>
                  alert('Data berhasil dihapus');
                  window.location.href = '" . base_url('dashboard/addendum?kd=' . $kd . '&mn=' . $mn) . "';
                </script>";
      } else {
          // Tampilkan konfirmasi penghapusan menggunakan JavaScript
          echo "<script>
                  var konfirmasi = confirm('Anda yakin ingin menghapus data ini?');
                  if(konfirmasi) {
                      // Redirect ke URL yang sama dengan tambahan parameter konfirmasi
                      window.location.href = '" . base_url('dashboard/hapus_addendum?id_addendum=' . $id_addendum . '&kd=' . $kd . '&mn=' . $mn . '&confirm=yes') . "';
                  } else {
                      // Redirect jika batal menghapus
                      window.location.href = '" . base_url('dashboard/addendum?kd=' . $kd . '&mn=' . $mn) . "';
                  }
                </script>";
      }
  } else {
      echo "ID Addendum tidak valid atau tidak ditemukan.";
  }
}
  // class untuk hapus ass build drawing
  public function Hapus_abd() {
    $id_abd = $this->input->get('id_abd');
    $kd = $this->input->get('kd');
    $mn = $this->input->get('mn');
    
    if ($this->input->get('confirm') == 'yes') {
        // Validasi id_abd
        $query = $this->db->query("SELECT id_abd FROM tbl_abd WHERE id_abd='$id_abd'");
        $abd_exists = $query->num_rows();

        if ($abd_exists > 0) {
            // Hapus data
            $this->db->query("DELETE FROM tbl_abd WHERE id_abd='$id_abd'");
            echo "<script>
                    alert('Data berhasil dihapus.');
                  </script>";
        } else {
            echo "<script>
                    alert('ID ABD tidak valid atau tidak ditemukan.');
                  </script>";
        }

        // Redirect kembali ke halaman ass_build_drawing
        echo "<script>
                window.location.href = '" . base_url('dashboard/ass_build_drawing?kd=' . $kd . '&mn=' . $mn) . "';
              </script>";
    } else {
        // Tampilkan konfirmasi penghapusan
        echo "<script>
                var konfirmasi = confirm('Anda yakin ingin menghapus data ini?');
                if (konfirmasi) {
                    // Redirect ke fungsi penghapusan dengan konfirmasi
                    var link = '" . base_url("dashboard/Hapus_abd?id_abd=$id_abd&kd=$kd&mn=$mn&confirm=yes") . "';
                    document.location.href = link;
                } else {
                    // Batal menghapus
                    var link = '" . base_url("dashboard/ass_build_drawing?kd=$kd&mn=$mn") . "';
                    document.location.href = link;
                }
              </script>";
    }
}



  // class untuk hapus dokumentasi
  public function Hapus_dokumentasi() {
    // Ambil parameter dari URL
    $id_dokumentasi = $this->input->get('id_dokumentasi');
    $kd = $this->input->get('kd');
    $mn = $this->input->get('mn');
    
    // Validasi id_dokumentasi
    $query = $this->db->query("SELECT id_dokumentasi FROM tbl_dokumentasi WHERE id_dokumentasi='$id_dokumentasi'");
    $dokumentasi_exists = $query->num_rows();

    if ($dokumentasi_exists > 0) {
        if ($this->input->get('confirm') == 'yes') {
            // Hapus data
            $this->db->query("DELETE FROM tbl_dokumentasi WHERE id_dokumentasi='$id_dokumentasi'");
            // Redirect kembali ke halaman dokumentasi
            redirect('dashboard/dokumentasi?kd=' . $kd . '&mn=' . $mn);
        } else {
            // Tampilkan konfirmasi penghapusan
            echo "<script>
                    var konfirmasi = confirm('Anda yakin ingin menghapus data ini?');
                    if (konfirmasi) {
                        // Redirect ke fungsi penghapusan dengan konfirmasi
                        var link = '" . site_url('dashboard/Hapus_dokumentasi?id_dokumentasi=' . $id_dokumentasi . '&kd=' . $kd . '&mn=' . $mn . '&confirm=yes') . "';
                        document.location.href = link;
                    } else {
                        // Batal menghapus
                        var link = '" . site_url('dashboard/dokumentasi?kd=' . $kd . '&mn=' . $mn) . "';
                        document.location.href = link;
                    }
                  </script>";
        }
    } else {
        echo "ID Dokumentasi tidak valid atau tidak ditemukan.";
    }
}

  // class untuk hapus laporan kerja
  public function Hapus_laporankerja() {
    $id_laporankerja = $this->input->get('id_laporankerja');
    $kd = $this->input->get('kd');
    $mn = $this->input->get('mn');
    
    if ($this->input->get('confirm') == 'yes') {
        // Validasi id_laporankerja
        $laporankerja_exists = $this->db->query("SELECT id_laporankerja FROM tbl_laporankerja WHERE id_laporankerja='$id_laporankerja'")->num_rows();

        if ($laporankerja_exists > 0) {
            // Hapus data
            $this->db->query("DELETE FROM tbl_laporankerja WHERE id_laporankerja='$id_laporankerja'");
            echo "Data berhasil dihapus.";
        } else {
            echo "ID Laporan Kerja tidak valid atau tidak ditemukan.";
        }

        // Redirect kembali ke halaman daftar
        redirect('dashboard/laporan_kerja?kd=' . $kd . '&mn=' . $mn);
    } else {
        // Tampilkan konfirmasi penghapusan
        echo "<script>
                var konfirmasi = confirm('Anda yakin ingin menghapus data ini?');
                if (konfirmasi) {
                    // Redirect ke fungsi penghapusan dengan konfirmasi
                    var link = '" . base_url('dashboard/Hapus_laporankerja?id_laporankerja=' . $id_laporankerja . '&kd=' . $kd . '&mn=' . $mn . '&confirm=yes') . "';
                    document.location.href = link;
                } else {
                    // Batal menghapus
                    var link = '" . base_url('dashboard/laporan_kerja?kd=' . $kd . '&mn=' . $mn) . "';
                    document.location.href = link;
                }
              </script>";
    }
}


  // class untuk hapus surat keputusan
  public function Hapus_suratkeputusan() {
    $id_suratkeputusan = $this->input->get('id_suratkeputusan');
    $kd = $this->input->get('kd');
    $mn = $this->input->get('mn');
    
    // Validasi id_suratkeputusan
    $suratkeputusan_exists = $this->db->query("SELECT id_suratkeputusan FROM tbl_suratkeputusan WHERE id_suratkeputusan='$id_suratkeputusan'")->num_rows();

    if ($suratkeputusan_exists > 0) {
        if ($this->input->get('confirm') == 'yes') {
            // Hapus data
            $this->db->query("DELETE FROM tbl_suratkeputusan WHERE id_suratkeputusan='$id_suratkeputusan'");
            // Redirect kembali ke halaman daftar
            redirect('dashboard/surat_keputusan?kd=' . $kd . '&mn=' . $mn);
        } else {
            // Tampilkan konfirmasi penghapusan
            echo "<script>
                    var konfirmasi = confirm('Anda yakin ingin menghapus data ini?');
                    if (konfirmasi) {
                        // Redirect ke fungsi penghapusan dengan konfirmasi
                        var link = '" . base_url('dashboard/Hapus_suratkeputusan?id_suratkeputusan=' . $id_suratkeputusan . '&kd=' . $kd . '&mn=' . $mn . '&confirm=yes') . "';
                        document.location.href = link;
                    } else {
                        // Batal menghapus
                        var link = '" . base_url('dashboard/surat_keputusan?kd=' . $kd . '&mn=' . $mn) . "';
                        document.location.href = link;
                    }
                  </script>";
        }
    } else {
        echo "ID Surat Keputusan tidak valid atau tidak ditemukan.";
    }
}

  // class untuk hapus berita acara
  public function Hapus_beritaacara() {
    $id_beritaacara = $this->input->get('id_beritaacara');
    $kd = $this->input->get('kd');
    $mn = $this->input->get('mn');

    if ($this->input->get('confirm') == 'yes') {
        // Lakukan penghapusan data
        $data = $this->db->query("DELETE FROM tbl_beritaacara WHERE id_beritaacara='$id_beritaacara'");
        
        if ($data) {
            // Redirect dan tampilkan pesan sukses
            echo "<script language=\"javascript\">alert(\"Hapus Berhasil\");
                  window.location.href = '" . base_url('dashboard/berita_acara?kd=' . $kd . '&mn=' . $mn) . "';
                  </script>";
        } else {
            echo "Gagal Hapus";
        }
    } else {
        // Tampilkan konfirmasi penghapusan
        echo "<script>
                var konfirmasi = confirm('Anda yakin ingin menghapus data ini?');
                if (konfirmasi) {
                    // Redirect untuk konfirmasi penghapusan
                    var link = '" . base_url("dashboard/Hapus_beritaacara?id_beritaacara=$id_beritaacara&kd=$kd&mn=$mn&confirm=yes") . "';
                    document.location.href = link;
                } else {
                    // Redirect jika batal
                    var link = '" . base_url('dashboard/berita_acara?kd=' . $kd . '&mn=' . $mn) . "';
                    document.location.href = link;
                }
              </script>";
    }
}


  // class untuk hapus pengguna
  function Hapus_pengguna() {
    $id_pengguna = $this->input->get('id_pengguna');
    $kd = $this->input->get('kd');
    $mn = $this->input->get('mn');

    // Cek apakah id_pengguna adalah 1
    if ($id_pengguna == 1) {
        // Tampilkan notifikasi dalam bentuk alert
        echo "<script>
                alert('Pengguna dengan ID 1 tidak dapat dihapus.');
                window.location.href = '" . base_url('dashboard/data_pengguna?kd=' . $kd . '&mn=' . $mn) . "';
              </script>";
        return;
    }

    // Validasi id_pengguna
    $pengguna_exists = $this->db->query("SELECT id_pengguna FROM tbl_pengguna WHERE id_pengguna='$id_pengguna'")->num_rows();

    if ($pengguna_exists > 0) {
        // Tampilkan konfirmasi penghapusan
        echo "<script>
                var konfirmasi = confirm('Anda yakin ingin menghapus pengguna ini?');
                if (konfirmasi) {
                    // Jika pengguna menekan OK, eksekusi penghapusan
                    window.location.href = '" . base_url('dashboard/hapus_pengguna?id_pengguna=' . $id_pengguna . '&kd=' . $kd . '&mn=' . $mn . '&confirm=yes') . "';
                } else {
                    // Batal menghapus, kembali ke halaman sebelumnya
                    window.location.href = '" . base_url('dashboard/data_pengguna?kd=' . $kd . '&mn=' . $mn) . "';
                }
              </script>";

        // Jika ada konfirmasi untuk penghapusan
        if ($this->input->get('confirm') == 'yes') {
            // Hapus pengguna dari database
            if ($this->db->where('id_pengguna', $id_pengguna)->delete('tbl_pengguna')) {
                // Pengguna berhasil dihapus, redirect ke halaman data pengguna
                redirect('dashboard/data_pengguna?kd=' . $kd . '&mn=' . $mn);
            } else {
                // Gagal menghapus pengguna, tampilkan pesan kesalahan
                echo "Gagal menghapus pengguna. ID tidak ditemukan.";
            }
        }

    } else {
        echo "ID Pengguna tidak valid atau tidak ditemukan.";
    }
}
  /** FUNCTION */
}