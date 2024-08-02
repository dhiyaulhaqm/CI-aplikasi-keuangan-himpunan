<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model{
   public function GetAllAdmin()
   {
      //ambil semua data tabel admin
      return $this->db->get('bendahara')->result_array(); 

   }

   public function tambahAdmin()
   {
      $data = [
         "id_admin" => $this->input->post('id_admin',true),
         "username" => $this->input->post('username',true),
         "email" => $this->input->post('email',true),
         "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
      ];

      $this->db->insert('bendahara',$data);
   }

   public function getAdminById($id_admin)
   {
      return $this->db->get_where('bendahara', ['id_admin' => $id_admin])->row_array();
   }

   public function hapusAdmin($id_admin)
   {
      $this->db->where('id_admin',$id_admin);
      $this->db->delete('bendahara');

   }

   public function editAdmin()
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