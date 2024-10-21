<?php
class Login extends CI_Controller
{
  function __construct(){
    parent::__construct();
    $this->load->model('login_model');
  }

  /** ------------------------------------------------------------------ */
  function index(){
    /** menampilkan halaman login */
    if($this->session->userdata('logged_in_emonitoring') !== TRUE){
      $this->load->view('login_view');
    }else{ 
      redirect('dashboard');
    }
    /** menampilkan halaman login */
  }

  function auth(){
    /** mengecek user password akses login */
    $username = $this->input->post('username',TRUE);
    $password = $this->input->post('password');
    $validate = $this->login_model->validate($username);
    if($validate->num_rows() > 0){
      $katakunci = $this->login_model->cek_password_pengguna($username, $password);
      if(password_verify($password, $katakunci)){
        $data  = $validate->row_array();
        $id_pengguna_emonitoring = $data['id_pengguna'];
        $username_emonitoring = $data['username'];
        $password_emonitoring = $data['password'];
        $nama_emonitoring = $data['nama'];
        $jabatan_emonitoring = $data['jabatan'];
        $status_emonitoring = $data['status'];
        $sesdata = array(
          'id_pengguna_emonitoring' => $id_pengguna_emonitoring,
          'username_emonitoring'    => $username_emonitoring,
          'nama_emonitoring'        => $nama_emonitoring,
          'jabatan_emonitoring'     => $jabatan_emonitoring,
          'status_emonitoring'      => $status_emonitoring,
          'logged_in_emonitoring'   => TRUE
        );
        $this->session->set_userdata($sesdata);
        redirect('dashboard');
      }else{
        echo $this->session->set_flashdata('msg','message');
        redirect('login');
      }      
    }else{ 
      echo $this->session->set_flashdata('msg','message');
      redirect('login');
    }
    /** mengecek user password akses login */
  }

  function logout(){
    /** kode fungsi untuk logout */
    $this->session->sess_destroy();
    redirect('login');
    /** kode fungsi untuk logout */
  }
  /** ------------------------------------------------------------------ */
}