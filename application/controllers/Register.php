<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

     public function registerUser() {
		  $this->load->helper('form');
    $this->load->library('form_validation');

        //validasi
        $this->form_validation->set_rules('username','Username','required|is_unique[users.username]');
        $this->form_validation->set_rules('nama','Full Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('noTelp','No Telp','required');
      $this->form_validation->set_rules('jeniskelamin', 'jenis kelamin', 'required');
        $this->form_validation->set_rules('pekerjaan','pekerjaan','callback_pekerjaan_check');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('cpassword','Confirm Password','required|matches[password]');


        if ($this->form_validation->run() == false) {
        $this->load->view('register_view');
    } else {

        $config['upload_path'] = './assets/upload/image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')){
  
            echo $this->upload->display_errors('<p>', '</p>');
        }else{
  
			$this->load->model('Model_user');
	 $this->Model_user->insertUser($this->upload->data('file_name'),$this->input->post());
           $this->session->set_flashdata('success','Terima kasih! Data Berhasil Di Simpan');
        redirect('Home/Register');
        }
      

        }
    }
	
	//cek pekerjaan
	 function pekerjaan_check( )

	 {
		if(empty($this->input->post('pekerjaan')))

		{
			$this->form_validation->set_message('pekerjaan_check', 'The pekerjaan Required');

			return false;

		}
		else

		{
			return true; 
		}
	}

}
?>
