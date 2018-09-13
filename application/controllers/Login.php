<?php

class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('batik_model');

    }

    function index(){
        $this->load->view('frontend/login');
    }

    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' =>md5($password)
            );
        $cek = $this->batik_model->cek_login('admin',$where)->num_rows();
        if($cek > 0){

            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );

            $this->session->set_userdata($data_session);

          	redirect(base_url("admin"));

        }else{
            echo "Username dan password salah !";
            echo $username." ".md5($password);
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
