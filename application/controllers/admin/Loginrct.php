<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginrct extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('username')== null) {
			redirect('admin/auth');
		}
	}
	
	public function index(){
		$data = array(
			'judul_halaman' => 'Loginrct',
            'login_rct' => $this->db->from('login_rct')->join('user', 'login_rct.username = user.username')->limit(5)->order_by('tanggal DESC')->get()->result_array(),
			'user'		=> $this->db->get_where('user',['username' => $this->session->userdata('username')])->row_array(),
		);
		$this->template->load('template_admin','admin/loginrct' ,$data);
	}
}
