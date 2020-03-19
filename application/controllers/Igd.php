<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Igd extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('/admin/login');
        } else {
            if ($this->session->userdata('role_id') === '4') {
                redirect('/');
            }
        }
    }
    public function index()
    {
        $data['title'] = 'MANPRO-RS | Pendaftaran';
        $data['page'] = 'bedigd';
        $this->load->view('headers/normal_header', $data);
        $this->load->view('pages/bedigd');
        $this->load->view('footers/normal_footer');
    }


    
    public function pendaftaranigd()
    {
        $data['title'] = 'MANPRO-RS | IGD';
        $data['page'] = 'pendaftaranigd';
        $this->load->view('headers/normal_header', $data);
        $this->load->view('pages/pendaftaranigd');
        $this->load->view('footers/normal_footer');
    }

    public function rekammedisawal()
    {
        $data['title'] = 'MANPRO-RS | IGD';
        $data['page'] = 'rekammedisawal';
        $this->load->view('headers/normal_header', $data);
        $this->load->view('pages/rekammedisawal');
        $this->load->view('footers/normal_footer');
    }

    public function rekammedisawaldetail()
    {
        $data['title'] = 'MANPRO-RS | IGD';
        $data['page'] = 'rekammedisawal';
        $this->load->view('headers/normal_header', $data);
        $this->load->view('pages/rekammedisawaldetail');
        $this->load->view('footers/normal_footer');
    }


    public function datapasieninap()
    {
        $data['title'] = 'MANPRO-RS | IGD';
        $data['page'] = 'datapasieninap';
        $this->load->view('headers/normal_header', $data);
        $this->load->view('pages/datapasieninap');
        $this->load->view('footers/normal_footer');
    }

    public function datapasieninapdetail()
    {
        $data['title'] = 'MANPRO-RS | IGD';
        $data['page'] = 'datapasieninapdetail';
        $this->load->view('headers/normal_header', $data);
        $this->load->view('pages/datapasieninapdetail');
        $this->load->view('footers/normal_footer');
    }
    public function inventoryigd()
    {
        $data['title'] = 'MANPRO-RS | IGD';
        $data['page'] = 'inventoryigd';
        $this->load->view('headers/normal_header', $data);
        $this->load->view('pages/inventoryigd');
        $this->load->view('footers/normal_footer');
    }

    public function jadwaligd()
    {
        $data['title'] = 'MANPRO-RS | IGD';
        $data['page'] = 'jadwaligd';
        $this->load->view('headers/normal_header', $data);
        $this->load->view('pages/jadwaligd');
        $this->load->view('footers/normal_footer');
    }

        public function bedigd()
    {
        $data['title'] = 'MANPRO-RS | IGD';
        $data['page'] = 'bedigd';
        $this->load->view('headers/normal_header', $data);
        $this->load->view('pages/bedigd');
        $this->load->view('footers/normal_footer');
    }
}
