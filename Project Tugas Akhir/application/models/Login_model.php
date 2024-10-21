<?php
class Login_model extends CI_Model
{

  /** ----------------------------------------------- */
  function validate($username){
    /** query cek eksistensi username */
    $this->db->where('username',$username);
    $result = $this->db->get('tbl_pengguna',1);
    return $result;
    /** query cek eksistensi username */
  }

  function cek_password_pengguna($username,$password){    
    /** query cek username dan password */
    $query = $this->db->query("SELECT password 
      FROM tbl_pengguna WHERE username='$username' 
      LIMIT 1")->row()->password;
    return $query;
    /** query cek username dan password */
  }
  /** ----------------------------------------------- */

}