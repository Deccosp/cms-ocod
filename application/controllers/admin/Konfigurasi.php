<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('username')== null) {
			redirect('admin/auth');
		}
	}
	
	public function index(){
		$data = array(
			'judul_halaman' => 'Konfigurasi', 
			'kon'   => $this->db->get('konfigurasi')->row(),
			'user'			=> $this->db->get_where('user',['username' => $this->session->userdata('username')])->row_array(),
		);
		$this->template->load('template_admin','admin/konfigurasi' ,$data);
	}

    public function edit()
    {
        $data = array(
            'judul_website'      => $this->input->post('judul_website'),
            'profil_website'     => $this->input->post('profil_website'),
            'instagram'          => $this->input->post('instagram'),
            'twitter'            => $this->input->post('twitter'),
            'facebook'           => $this->input->post('facebook'),
            'email'              => $this->input->post('email'),
            'alamat'             => $this->input->post('alamat'),
            'no_wa'              => $this->input->post('no_wa'),

        );  

        $where = array('id_konfigurasi' => $this->input->post('id_konfigurasi'));
        $this->db->update('konfigurasi', $data, $where);
        $this->session->set_flashdata('arlet',  '<div class="alert alert-primary alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
        </button> <strong>Selamat!</strong> Data Anda Berhasil Di Perbarui.</div>');
        redirect('admin/konfigurasi');
         }
}
