<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
        if ($this->session->userdata('username')== null) {
			redirect('admin/auth');
		}
	}
	
	public function index(){
		$this->db->from('user');
        $this->db->order_by('nama', 'ASC');
        $user = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Data Pengguna',
			'user'			=> $this->db->get_where('user',['username' => $this->session->userdata('username')])->row_array(),
            'user'          => $user,
		);
		$this->template->load('template_admin','admin/user_index' ,$data);
	}
    public function simpan(){
        $data = array(
        'nama'     => $this->input->post('nama'),
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),
        'level'    => $this->input->post("level"),
        );
        $this->db->insert('user', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button> <strong>Selamat!</strong> Data Anda Berhasil Di Masukan.</div>'); 
         redirect('admin/user');
        }
        
    public function hapus($id){
        $where = array('id_user' => $id);
        $this->db->delete('user',$where);
        $this->session->set_flashdata('alert', 
        '<div class="alert alert-primary alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button> <strong>Selamat!</strong> Data Anda Di Hapus.</div>'
        );
            redirect('admin/user');
        }

    public function edit()
    {
        $data = array(
            'nama'       => $this->input->post('nama'),
            'level'      => $this->input->post('level'),
        );

        $where = array('id_user' => $this->input->post('id_user'));
        $this->db->update('user', $data, $where);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fa fa-circle-check me-2"></i>Gemgeekang Gacorr!!!</div>');
        redirect('admin/user');
         }
}

