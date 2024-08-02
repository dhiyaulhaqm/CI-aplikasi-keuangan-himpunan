<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_jenis');
        $this->load->library('form_validation');
    }

    public function index()
    {
        isAdmin();
        //tangkap data
        $data['title'] = 'Jenis Pembayaran';
        $data['jenis'] = $this->M_jenis->GetAllJenis();
        $data['namaAdmin'] = $this->db->get_where('bendahara',['email' => $this->session->userdata('email')])->row_array();
       

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/jenis_pembayaran/jenis_pembayaran', $data);
        $this->load->view('templates/footer', $data);
    }


    public function tambah()
    {
        isAdmin();
        $data['title'] = 'Jenis Pembayaran';
        $data['namaAdmin'] = $this->db->get_where('bendahara',['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('jenis_pembayaran','jenis_pembayaran','required');
        $this->form_validation->set_rules('bukti_pembayaran','bukti_pembayaran','required');
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/jenis_pembayaran/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_jenis->tambahJenis();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('Jenis');
        }
    }

    public function edit($id_pembayaran)
    {
        isAdmin();
        $data['title'] = 'Edit Jenis PEmbayaran';
        $data['namaAdmin'] = $this->db->get_where('bendahara',['email' => $this->session->userdata('email')])->row_array();
        $data['jenis'] = $this->M_jenis->getJenisById($id_pembayaran);

        
        
        $this->form_validation->set_rules('jenis_pembayaran','jenis_pembayaran','required');
        $this->form_validation->set_rules('bukti_pembayaran','bukti_pembayaran','required');
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/jenis_pembayaran/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_jenis->editJenis();
            $this->session->set_flashdata('flash','DiUbah');
            redirect('Jenis');
        }
    }

    public function hapus($id_pembayaran)
    {
        $this->M_jenis->hapusJenis($id_pembayaran);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('Jenis');

    }
}