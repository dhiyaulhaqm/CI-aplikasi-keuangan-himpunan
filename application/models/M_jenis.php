<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis extends CI_Model{
   public function GetAllJenis()
   {
      return $this->db->get('jenis_pembayaran')->result_array();

   }

   public function tambahJenis()
   {
      $data = [
         "jenis_pembayaran" => $this->input->post('jenis_pembayaran',true),
         "bukti_pembayaran" => $this->input->post('bukti_pembayaran',true),
      ];

      $this->db->insert('jenis_pembayaran',$data);
   }

   public function getJenisById($id_pembayaran)
   {
      return $this->db->get_where('jenis_pembayaran', ['id_pembayaran' => $id_pembayaran])->row_array();
   }

   public function hapusJenis($id_pembayaran)
   {
      $this->db->where('id_pembayaran',$id_pembayaran);
      $this->db->delete('jenis_pembayaran');

   }

   public function editJenis()
   {
      $data = [
         "id_pembayaran" => $this->input->post('id_pembayaran',true),
         "jenis_pembayaran" => $this->input->post('jenis_pembayaran',true),
         "bukti_pembayaran" => $this->input->post('bukti_pembayaran',true),
      ];

      $this->db->where('id_pembayaran',$this->input->post('id_pembayaran'));
      $this->db->update('jenis_pembayaran',$data);
   }

 

 
}