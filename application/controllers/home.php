<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class home extends CI_Controller{


		function __construct(){
			parent::__construct();
			$this->load->helper('main');
			addHeader();
			if(!$this->session->userdata('id')){
				redirect('login');
			}
			$this->load->model('system');
			$this->load->model('videos');
			$this->load->model('user_logs');
		}



		function index(){

			$video = $this->videos->where('status' , 1)->get_single();
			$system = $this->system->where('status' , 1)->get_single();

			$data['video'] = $video;
			$data['system'] = $system;

			$data['title'] = 'Home';


			$this->load->view('home' , $data);
		}

		function logout(){
			$this->session->sess_destroy();
			redirect('login' , 'refresh');
		}

	}

?>