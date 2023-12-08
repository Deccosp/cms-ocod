<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	public function __construct(){
		parent::__construct();
        if ($this->session->userdata('username')== null) {
			redirect('admin/auth');
		}
	}
	
	public function index(){
        $data = array(
            'judul_halaman' => 'Data Pengguna',
			'user'			=> $this->db->get_where('user',['username' => $this->session->userdata('username')])->row_array(),
            'kategori'          => $this->db->get('kategori')->result_array(),
		);
		$this->template->load('template_admin','admin/kategori' ,$data);
	}
    
    public function simpan(){
        $data = array(
        'nama_kategori'     => $this->input->post('nama_kategori'),
        );
        $this->db->insert('kategori', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button> <strong>Selamat!</strong> Data Anda Berhasil Di Masukan.</div>'); 
         redirect('admin/kategori');
        }
        
    public function hapus($id){
        $where = array('id_kategori' => $id);
        $this->db->delete('kategori',$where);
        $this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button> <strong>Selamat!</strong> Data Anda Berhasil Dihapus.</div>'
        );
            redirect('admin/kategori');
        }

    public function edit()
    {
        $data = array(
            'nama_kategori'       => $this->input->post('nama_kategori'),
        );

        $where = array('id_kategori' => $this->input->post('id_kategori'));
        $this->db->update('kategori', $data, $where);
        $this->session->set_flashdata('arlet',  '<div class="alert alert-primary alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
        </button> <strong>Selamat!</strong> Data Anda Berhasil Di Perbarui.</div>');
        redirect('admin/kategori');
         }
}
