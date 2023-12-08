<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    { 
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if($this->form_validation->run() == false){
            $this->load->view('admin/auth/login'); 
        }else{
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user',['username'=>$username])->row_array();
        
        if($user){
            //usernya ada 
                if($password == $user['password']){
                    $data=[
                        'username'=>$user['username'],
                        'level'=>$user['level']
                    ];
                    $this->session->set_userdata($data);
                    $recent =[
                        'username' => $user['username'],
                        'tanggal' => date('Y-m-d'),
                        'status' => 'Login',
                        
                    ];
                    $this->db->insert('login_rct',$recent);
                        redirect('admin/home');
                }else{

                    $this->session->set_flashdata('massage' ,'<div class="alert alert-danger" role="alert">
                    Wrong password!!</div>'); 
                    redirect('admin/auth'); 
                }
        }else{
            $this->session->set_flashdata('massage' ,'<div class="alert alert-danger" role="alert">
            username is not register!</div>'); 
            redirect('admin/auth'); 
        }
    }

    public function logout(){
        $this->session->unset_userdata('urername');
        $this->session->unset_userdata('level');
        
        $this->session->set_flashdata('massage' ,'<div class="alert alert-success" role="alert">
        You have been logout!</div>');
        redirect('admin/auth');
    }
    public function blokblok(){
        $this->load->view('auth/blokblok');
}
}