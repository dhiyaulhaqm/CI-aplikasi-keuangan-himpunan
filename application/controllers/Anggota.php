<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_anggota');
        $this->load->library('form_validation');
    }

    public function index()
    {
        isAdmin();
        //tangkap data
        $data['title'] = 'Data anggota';
        $data['anggota'] = $this->M_anggota->GetAllAnggota();
        $data['namaAdmin'] = $this->db->get_where('bendahara',['email' => $this->session->userdata('email')])->row_array();
       

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/anggota/anggota', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah()
    {
        isAdmin();
        $data['title'] = 'Form Tambah Anggota';
        $data['namaAdmin'] = $this->db->get_where('bendahara',['email' => $this->session->userdata('email')])->row_array();

        
        $this->form_validation->set_rules('NIM','NIM','required|is_unique[anggota.NIM]');
        $this->form_validation->set_rules('Nama','Nama','required');
        $this->form_validation->set_rules('Angkatan','Angkatan','required');
        $this->form_validation->set_rules('Divisi','Divisi','required');
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/anggota/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_anggota->tambahAnggota();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('anggota');
        }
    }

    public function edit($NIM)
    {
        isAdmin();
        $data['title'] = 'Edit Data Anggota';
        $data['namaAdmin'] = $this->db->get_where('bendahara',['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->M_anggota->getAnggotaById($NIM);

        
        // $this->form_validation->set_rules('NIM','NIM','required|is_unique[anggota.NIM]');
        $this->form_validation->set_rules('Nama','Nama','required');
        $this->form_validation->set_rules('Angkatan','Angkatan','required');
        $this->form_validation->set_rules('Divisi','Divisi','required');
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/anggota/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_anggota->editAnggota();
            $this->session->set_flashdata('flash','DiUbah');
            redirect('anggota');
        }
    }

    public function hapus($NIM)
    {
        $this->M_anggota->hapusAnggota($NIM);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('Anggota');

    }


}