<?php

class Login extends CI_Controller{
	
	public function index(){
		$this->load->view('login');
	}
	
	function authuser(){

		$username = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

		echo $username."<br>";
		// $password = md5($password);
		echo $password;


		$cek_user = $this->smp_model->cari_user($username, $password);

		if ($cek_user->num_rows() > 0){
			$data = $cek_user->row_array();
			$this->session->set_userdata('masuk', TRUE);
			if ($data['level'] == '1'){
				$this->session->set_userdata('level','1');
				$this->session->set_userdata('ses_username',$data['username']);
				$this->session->set_userdata('ses_password', $data['password']);
				redirect('main');
			}
		}else{
			redirect('login');
		}
	}

	function logout(){
		session_destroy();
		redirect('login');
	}
}