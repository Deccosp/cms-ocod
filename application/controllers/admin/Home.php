<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('username')== null) {
			redirect('admin/auth');
		}
	}
	
	public function index(){
		$data = array(
			'judul_halaman' => 'Dashboard',
			'konten' => $this->db->get('konten')->num_rows(),
            'usere' => $this->db->get('user')->num_rows(),
            'saran' => $this->db->get('saran')->num_rows(),
            'galeri' => $this->db->get('galeri')->num_rows(),
			'user'			=> $this->db->get_where('user',['username' => $this->session->userdata('username')])->row_array(),
			'jumlah_konten' => $this->db->select('k.nama_kategori, k.id_kategori, COUNT(c.id_konten) AS jumlah_konten')->from('kategori k')->join('konten c', 'k.id_kategori = c.id_kategori', 'left')->group_by('k.nama_kategori, k.id_kategori')->get()->result(),
		);
		$this->template->load('template_admin','admin/dashboard' ,$data);
	}
}
