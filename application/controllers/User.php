<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('model_user');
	}
    public function profile() {

        if ($_SESSION['user_logged'] == FALSE) {

            $this->session->set_flashdata("error","Please login first to view");
            redirect('Home/Login');


        }

        $this->load->view('user_view');

    }
	public function users_data(){
		$data=$this->Model_user->user_list();
		echo json_encode($data);
	}
	
}
