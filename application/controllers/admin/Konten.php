<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten extends CI_Controller {
	public function __construct(){
		parent::__construct();
        if ($this->session->userdata('username')== null) {
			redirect('admin/auth');
		}   
       
	}
	
	public function index(){
        $this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $konten = $this->db->get()->result_array();
        $data = array(
            'judul_halaman'     => 'Data Pengguna',
            'konten'            => $konten,
			'user'			    => $this->db->get_where('user',['username' => $this->session->userdata('username')])->row_array(),
            'kategori'          => $this->db->get('kategori')->result_array(),
		);
		$this->template->load('template_admin','admin/konten' ,$data);
    }

    public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']          = 'assets/upload/konten/';
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['allowed_types']        = '*'; 
        $config['file_name']            = $namafoto;
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ');
            redirect('admin/konten');  
        } elseif(!$this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
        $this->db->from('konten');
        $this->db->where('judul',$this->input->post('judul'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-primary alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
            </button> <strong>Peringatan!</strong> Judul konten yang anda gunakan sudah ada.
            </div>'); 

            redirect('admin/konten');
        }
        
        $data = array(
        'judul'           => $this->input->post('judul'),
        'id_kategori'     => $this->input->post('id_kategori'),
        'keterangan'      => $this->input->post('keterangan'),
        'tanggal'         => date('Y-m-d'),
        'foto'            => $namafoto,
        'username'        => $this->input->post('username'),
        'slug'            => str_replace(' ', '-', $this->input->post('judul'))
        );
        $this->db->insert('konten', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
        </button> <strong>Selamat!</strong> Anda berhasil menambahkan konten.</div>'); 
         redirect('admin/konten');
        }

    public function edit(){
        $namafoto                       = $this->input->post('nama_foto');
        $config['upload_path']          = 'assets/upload/konten/';
        $config['max_size']             = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namafoto;
        $config['overwrite']            = true;
        $config['allowed_types']        = '*'; 
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ');
            redirect('admin/konten');
        } elseif(!$this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
        
        $data = array(
        'judul'           => $this->input->post('judul'),
        'id_kategori'     => $this->input->post('id_kategori'),
        'keterangan'      => $this->input->post('keterangan'),
        'foto'            => $namafoto,
        'slug'            => str_replace(' ', '-',$this->input->post('judul'))
        );
        $where = array('foto' => $this->input->post('nama_foto'));
        $this->db->update('konten',$data ,$where);
        $this->session->set_flashdata('alert', 
        '<div class="alert alert-primary alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button> <strong>Selamat!</strong> Data Anda Berhasil Di Perbarui .</div>'
        );
         redirect('admin/konten');
        }
        
    public function hapus($id){
        $filename=FCPATH.'/assets/upload/konten/'.$id;
            if(file_exists($filename)){
                unlink("./assets/upload/konten/".$id);
            }
      
        $where = array(
            'foto' => $id
         );
        $this->db->delete('konten',$where);
        $this->session->set_flashdata('alert', 
        '<div class="alert alert-primary alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button> <strong>Selamat!</strong> Data Anda Berhasil Di Hapus.</div>'
        );

            redirect('admin/konten');
        }

}
    
