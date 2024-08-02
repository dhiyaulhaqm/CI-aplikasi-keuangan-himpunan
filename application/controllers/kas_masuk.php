<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kas_masuk extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_KasMasuk');
        $this->load->model('M_jenis');
        $this->load->model('M_anggota');
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        isAdmin();
        $data['title'] = 'Kas Masuk';
        $data['kas_masuk'] = $this->M_KasMasuk->GetAllKasMasuk_anggota_jenis();
        $data['namaAdmin'] = $this->db->get_where('bendahara',['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/kas_masuk/kas_masuk', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah()
    {
        isAdmin();
        $data['title'] = 'Form Kas Masuk';
        $data['namaAdmin'] = $this->db->get_where('bendahara',['email' => $this->session->userdata('email')])->row_array();
        $data['kas_masuk'] = $this->M_KasMasuk->GetAllKasMasuk_anggota_jenis();
        $data['jenis'] = $this->M_jenis->GetAllJenis();
        $data['anggota'] = $this->M_anggota->GetAllAnggota();

        
        $this->form_validation->set_rules('jumlah','jumlah','required');
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/kas_masuk/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_KasMasuk->tambahKasMasuk();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('kas_masuk');
        }
    }

    public function edit($kode_kas)
    {
        isAdmin();
        $data['title'] = 'Edit Kas Masuk';
        $data['namaAdmin'] = $this->db->get_where('bendahara',['email' => $this->session->userdata('email')])->row_array();
        // $data['kas_masuk'] = $this->M_KasMasuk->GetAllKasMasuk_anggota_jenis();
        $data['jenis'] = $this->M_jenis->GetAllJenis();
        $data['anggota'] = $this->M_anggota->GetAllAnggota();
        $data['kas_masuk'] = $this->M_KasMasuk->getKasMasukById($kode_kas);
        
        
        $this->form_validation->set_rules('jumlah','jumlah','required');
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/kas_masuk/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_KasMasuk->editKasMasuk();
            $this->session->set_flashdata('flash','DiUbah');
            redirect('kas_masuk');
        }
    }

    public function hapus($kode_kas)
    {
        $this->M_KasMasuk->hapusKasMasuk($kode_kas);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('kas_masuk');

    }
}