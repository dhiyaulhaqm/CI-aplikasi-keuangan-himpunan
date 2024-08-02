<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_KasMasuk extends CI_Model{
   public function GetAllKasMasuk()
   {
      return $this->db->get('kas_masuk')->result_array();

   }
   
   public function tambahKasMasuk()
   {
      $data = [
         // "kode_kas" => $this->input->post('kode_kas',true),
         "jumlah" => $this->input->post('jumlah',true),
         "tanggal_bayar" => $this->input->post('tanggal_bayar',true),
         "id_pembayaran" => $this->input->post('id_pembayaran',true),
         "NIM" => $this->input->post('NIM',true),
      ];

      $this->db->insert('kas_masuk',$data);
   }

   public function getKasMasukById($kode_kas)
   {
      return $this->db->get_where('kas_masuk', ['kode_kas' => $kode_kas])->row_array();
   }

   public function hapusKasMasuk($kode_kas)
   {
      $this->db->where('kode_kas',$kode_kas);
      $this->db->delete('kas_masuk');

   }

   public function editKasMasuk()
   {
      $data = [
         "kode_kas" => $this->input->post('kode_kas',true),
         "jumlah" => $this->input->post('jumlah',true),
         "tanggal_bayar" => $this->input->post('tanggal_bayar',true),
         "id_pembayaran" => $this->input->post('id_pembayaran',true),
         "NIM" => $this->input->post('NIM',true),
      ];

      $this->db->where('kode_kas',$this->input->post('kode_kas'));
      $this->db->update('kas_masuk',$data);
   }
   
   
   public function GetAllKasMasuk_anggota_jenis()
   {
      $this->db->select('kas_masuk.tanggal_bayar, kas_masuk.kode_kas, kas_masuk.jumlah, anggota.Nama, jenis_pembayaran.jenis_pembayaran')
         ->from('kas_masuk')
         ->join('anggota', 'anggota.NIM = kas_masuk.NIM')
         ->join('jenis_pembayaran', 'jenis_pembayaran.id_pembayaran = kas_masuk.id_pembayaran');
      $result = $this->db->get()->result_array();
      return $result;
      // return $this->db->get('barang_masuk')->result_array();

   }
   
   
}