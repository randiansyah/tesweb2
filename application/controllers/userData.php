<?php
class UserData extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('model_user');
	}
	function index(){
		$this->load->view('user_view');
	}

	function user_data(){
		$data=$this->model_user->user_list();
		echo json_encode($data);
	}


	function delete(){
		$data=$this->model_user->delete_user();
		echo json_encode($data);
	}

}