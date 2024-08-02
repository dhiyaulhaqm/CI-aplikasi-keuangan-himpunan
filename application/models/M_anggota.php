<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anggota extends CI_Model{
   public function GetAllAnggota()
   {
      return $this->db->get('anggota')->result_array();

   }

   public function tambahAnggota()
   {
      $data = [
         "NIM" => $this->input->post('NIM',true),
         "Nama" => $this->input->post('Nama',true),
         "Angkatan" => $this->input->post('Angkatan',true),
         "Divisi" => $this->input->post('Divisi',true),
      ];

      $this->db->insert('Anggota',$data);
   }

   public function getAnggotaById($NIM)
   {
      return $this->db->get_where('Anggota', ['NIM' => $NIM])->row_array();
   }

   public function hapusAnggota($NIM)
   {
      $this->db->where('NIM',$NIM);
      $this->db->delete('anggota');

   }

   public function editAnggota()
   {
      $data = [
         "NIM" => $this->input->post('NIM',true),
         "Nama" => $this->input->post('Nama',true),
         "Angkatan" => $this->input->post('Angkatan',true),
         "Divisi" => $this->input->post('Divisi',true),
      ];

      $this->db->where('NIM',$this->input->post('NIM'));
      $this->db->update('anggota',$data);
   }

 

 
}