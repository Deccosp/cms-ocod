<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller {
	public function __construct(){
		parent::__construct();
        if ($this->session->userdata('username')== null) {
			redirect('admin/auth');
		}
	}
	
	public function index(){
	
        $data = array(
            'judul_halaman' => 'Saran',
            'saran'         => $this->db->get('saran')->result_array(),
			'user'			=> $this->db->get_where('user',['username' => $this->session->userdata('username')])->row_array(),
            
		);
		$this->template->load('template_admin','admin/saran' ,$data);
	}

    public function delete(){
        $where = $this->input->post('id');
        $this->db->where_in('id_saran',$where)->delete('saran');
        $this->session->set_flashdata('alert', 
        '<div class="alert alert-primary alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button> <strong>Selamat!</strong> Data Anda Di Hapus.</div>'
        );
            redirect('admin/saran');
        }

}

