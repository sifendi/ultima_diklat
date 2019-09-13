<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Auth extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
	}
 
	public function index(){
		$this->load->library('session');
		//restrict users to go back to login if session has been set
		if($this->session->userdata('user')){
			redirect('home');
		}
		else{
			$this->load->view('login_page');
		}
	}
 
	public function login(){
		//load session library
		$this->load->library('session');
		$email = $_POST['username'];
		$password = $_POST['password'];
		$data = $this->users_model->login($email, md5($password));

		if($data['user_type']==1){
			$this->session->set_userdata('user', $data);
			redirect('admin/document');
		}
		else if ($data['user_type'] >= 2){
			$this->session->set_userdata('user', $data);
			
			redirect('unit/document');
		}
		else{
			header('location:'.base_url().$this->index());
			$this->session->set_flashdata('error','Invalid login. User not found');
		} 
	}
 
	public function home(){
		//load session library
		$this->load->library('session');
		//restrict users to go to home if not logged in
		if($this->session->userdata('user')){
			$this->load->view('home');
		}
		else{
			redirect('/');
		}
 
	}
 
	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('user');
		redirect('/');
	}
 
}