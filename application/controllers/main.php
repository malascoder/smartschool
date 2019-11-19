<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class main extends CI_Controller{

         public function __construct(){
             parent::__construct();
             if($this->session->userdata('masuk')!=TRUE){
                 redirect(base_url('login'));
             }
            
         }

        public function index(){
            $this->load->view('index');
        }

        public function masuk(){
            $data['listsuratmasuk'] = $this->smp_model->listsuratmasuk();
            $this->load->view('out_masuk',$data);
        }

        public function keluar(){
            $data['listsuratkeluar'] = $this->smp_model->listsuratkeluar();
            $this->load->view('out_keluar',$data);
        }

        public function in_masuk(){
            $this->load->view('in_masuk');
        }

        public function in_keluar(){
            $this->load->view('in_keluar');
        }

        public function register(){
            $this->load->view('register');
        }

        public function input_masuk(){
            $this->smp_model->inputsurat();
            redirect(base_url('out_masuk'));
        }

        public function input_keluar(){
            $this->smp_model->inputkeluar();
            redirect(base_url('out_keluar'));
        }
    }
?>