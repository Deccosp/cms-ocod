<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('username')== null) {
			redirect('admin/auth');
		}
	}
	
	public function index(){
		$data = array(
			'judul_halaman' => 'Galeri', 
			'galeri'          => $this->db->get('galeri')->result_array(),
			'user'			=> $this->db->get_where('user',['username' => $this->session->userdata('username')])->row_array(),
		);
		$this->template->load('template_admin','admin/galeri' ,$data);
	}

	public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']          = 'assets/upload/galeri/';
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
            redirect('admin/galeri');  
        }  elseif(!$this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }
        $this->db->from('galeri');
        $this->db->where('judul',$this->input->post('judul'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-primary alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
            </button> <strong>Peringatan!</strong> Judul konten yang anda gunakan sudah ada.
            </div>'); 

            redirect('admin/galeri');
        }
		$data = array(
			'judul'           => $this->input->post('judul'),
			'foto'            => $namafoto,
			);
			$this->db->insert('galeri', $data);
			$this->session->set_flashdata('alert', '<div class="alert alert-primary alert-dismissible fade show">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
			</button> <strong>Selamat!</strong> Anda berhasil menambahkan galeri.</div>'); 
			 redirect('admin/galeri');
			}

            public function hapus($namefoto){
                $filename = FCPATH . '/assets/upload/galeri/' . $namefoto;
                 if (file_exists($filename)) {
                     unlink("./assets/upload/galeri/" . $namefoto);
                    }
                $where = array('foto' => $namefoto);
                $this->db->delete('galeri',$where);
                $this->session->set_flashdata('alert', 
                '<div class="alert alert-primary alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
                </button> <strong>Selamat!</strong> Data Anda Di Hapus.</div>'
                );
                    redirect('admin/galeri');
                }
        
            public function edit(){
                $namafoto                       = $this->input->post('nama_foto');
                $config['upload_path']          = 'assets/upload/galeri/';
                $config['max_size']             = 2048 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
                $config['file_name']            = $namafoto;
                $config['overwrite']            = true;
                $config['allowed_types']        = '*'; 
                $this->load->library('upload', $config);
                if($_FILES['foto']['size'] >= 2048 * 1024){
                    $this->session->set_flashdata('alert', '
                        <div class="alert alert-danger alert-dismissible" role="alert">
                        Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    ');
                    redirect('admin/galeri');
                } elseif(!$this->upload->do_upload('foto')){
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    // var_dump($data);die;
                }
                
                $data = array(
                'judul'           => $this->input->post('judul'),
                'foto'            => $namafoto,
                );

                $where = array('foto' => $this->input->post('nama_foto'));
                $this->db->update('galeri',$data ,$where);
                $this->session->set_flashdata('alert', 
                '<div class="alert alert-primary alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button> <strong>Selamat!</strong> Data Anda Berhasil Di Perbarui .</div>'
                );
                    redirect('admin/galeri');
                }
}
