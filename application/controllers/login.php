<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class login extends CI_Controller{


		private $system;
		private $user_logs;

		function __construct(){
			parent::__construct();
			$this->load->helper('main');
			addHeader();
			if($this->session->userdata('id')){
				redirect('home');
			}

			$this->load->model('system' , 's_m');
			$this->load->model('user_logs' , 'u_m');

			$this->system = $this->s_m->where('status' , 1)->get_single();
			$this->user_logs = $this->u_m->where('status' , 1)->get_single();
		}



		function index(){

			$data['title'] = 'Login';

			$this->load->view('login' , $data);
		}

		function check_credentials(){
			if($this->input->is_ajax_request()){
				$args =  $this->input->post();
				$this->db->trans_begin();
				$cs = $args['password'];
				$md5Pass = md5($args['password']);
				if($this->system['password'] == $md5Pass ){
					unset($args['password']);
					
					$user = $this->u_m->where('fullname' , $args['fullname'])->get_single();
					$args['logged_count'] = 0;
					if(!empty($user)){
						$args['logged_count'] = $user['logged_count'] + 1;
						$this->u_m->set('logged_count' , $args['logged_count'])->update();
						$this->session->set_userdata($user);
						echo json_encode(array('status' => 'success'));

					}else{
						$args['date_created'] = date('Y-m-d H:i:s');
						$args['status'] = 1;
						$this->u_m->insert($args);
						$id = $this->u_m->insert_id();
						if($id > 0){
							$user = $this->u_m->where('fullname' , $args['fullname'])->get_single();
							$this->session->set_userdata($user);
							$this->s_m->set('last_user_log_id' , $id)->where('status' , 1)->update();
							echo json_encode(array('status' => 'success'));
						}
						
					}
					

					
				}else{
					echo json_encode(array('status' => 'error' , 'system' => $this->system['password'] , 'args' => $cs , 'post' =>  $this->input->post()));
				}

				if($this->db->trans_status() === FALSE){
					$this->db->trans_rollback();
				}else{
					$this->db->trans_commit();
				}
			}
		}
	}

?>