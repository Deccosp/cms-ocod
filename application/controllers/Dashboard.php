<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('Dashboard_model');
	}
	
	public function index()
	{
		$this->load->library('pagination');
		$config['base_url']= base_url('dashboard/index/');

		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword',$data['keyword']);
		} else{
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$this->db->like('judul',$data['keyword']);
		$this->db->from('konten');
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 5;

		$data['start'] = $this->uri->segment(3);


		$this->pagination->initialize($config);

		$data=[
			'caraousel' => $this->db->get('caraousel')->result_array(),
			'kategori' => $this->db->get('kategori')->result_array(),
			'konfigurasi' => $this->db->get('konfigurasi')->row(),
			'galeri' => $this->db->get('galeri')->result_array(),
			'konten' => $this->Dashboard_model->konten($config['per_page'] ,$data['start'],$data['keyword']),
			'kontenLimit' => $this->db->from('konten')->join('user','konten.username = user.username')->join('kategori','konten.id_kategori = kategori.id_kategori')->limit(5)->get()->result_array(),
		];
		$this->template->load('template_home','home' ,$data);


	}
	
	public function artikel($id)
	{
		$data=[
			'kategori' => $this->db->get('kategori')->result_array(),
			'konfigurasi' => $this->db->get('konfigurasi')->row(),
			'galeri' => $this->db->get('galeri')->result_array(),
			'konten' => $this->db->from('konten')->join('user','konten.username = user.username')->join('kategori','konten.id_kategori = kategori.id_kategori')->where('slug', $id)->get()->row(),
			'kontenLimit' => $this->db->from('konten')->join('user','konten.username = user.username')->join('kategori','konten.id_kategori = kategori.id_kategori')->limit(5)->get()->result_array(),
		];
		$this->template->load('template_home','artikel' ,$data);
	}
	public function konten($id)
	{
		
		$data=[
			'kategori' => $this->db->get('kategori')->result_array(),
			'konfigurasi' => $this->db->get('konfigurasi')->row(),
			'galeri' => $this->db->get('galeri')->result_array(),
			'konten' => $this->db->from('konten')->join('user','konten.username = user.username')->join('kategori','konten.id_kategori = kategori.id_kategori')->where('konten.id_kategori', $id)->get()->result_array(),
			'kontenLimit' => $this->db->from('konten')->join('user','konten.username = user.username')->join('kategori','konten.id_kategori = kategori.id_kategori')->limit(5)->get()->result_array(),
		];
		$this->template->load('template_home','konten',$data);
	}

	public function galeri()
	{
		
		$data=[
			'kategori' => $this->db->get('kategori')->result_array(),
			'konfigurasi' => $this->db->get('konfigurasi')->row(),
			'galeri' => $this->db->get('galeri')->result_array(),
			'kontenLimit' => $this->db->from('konten')->join('user','konten.username = user.username')->join('kategori','konten.id_kategori = kategori.id_kategori')->limit(5)->get()->result_array(),
		];
		$this->template->load('template_home','galeri',$data);
	}
	
	public function saran()
	{
		
		$data = [
			'kategori' => $this->db->get('kategori')->result_array(),
			'konfigurasi' => $this->db->get('konfigurasi')->row(),
			'galeri' => $this->db->get('galeri')->result_array(),
			'kontenLimit' => $this->db->from('konten')->join('user','konten.username = user.username')->join('kategori','konten.id_kategori = kategori.id_kategori')->limit(5)->get()->result_array(),
		];
		$this->template->load('template_home','saran',$data);
	}
	
	public function saranTambah(){
		$pesan = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'tanggal' => date('Y-m-d'),
			'isi_saran' => $this->input->post('isi_saran'),
		);
		$this->db->insert('saran' ,$pesan);
		redirect('dashboard/saran');
	}
	
	public function about(){
		$data = [
			'kategori' => $this->db->get('kategori')->result_array(),
			'konfigurasi' => $this->db->get('konfigurasi')->row(),
			'galeri' => $this->db->get('galeri')->result_array(),
			'kontenLimit' => $this->db->from('konten')->join('user','konten.username = user.username')->join('kategori','konten.id_kategori = kategori.id_kategori')->limit(5)->get()->result_array(),
		];
		$this->template->load('template_home','about',$data);

	}

}
