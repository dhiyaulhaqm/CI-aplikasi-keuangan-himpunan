<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model{

    public function getProfileById($id_profile)
    {
       return $this->db->get_where('admin', ['id_admin' => $id_profile])->row_array();
    }

    public function editProfile()
    {
       $data = [
          "id_admin" => $this->input->post('id_admin',true),
          "username" => $this->input->post('username',true),
          "email" => $this->input->post('email',true),
          "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
       ];
 
       $this->db->where('id_admin',$this->input->post('id_admin'));
       $this->db->update('bendahara',$data);
    }

}