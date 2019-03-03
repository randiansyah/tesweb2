<?php

class Model_user extends CI_Model {

    public function insertUser ($path,$post) {

        //insert data
		$pekerjaan=implode(',',$this->input->post('pekerjaan'));
        $data = array(
            //assign data into array elements
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'email' =>$this->input->post('email'),
            'noTelp' => $this->input->post('noTelp'),
            'gender' => $this->input->post('jeniskelamin'),
            'pekerjaan' => $pekerjaan,
            'password' => sha1($this->input->post('password')),
			'photo' => $path

        );
        //insert data to the database
        $this->db->insert('users',$data);

    }

    public function checkLogin() {

        //enter username and password
        $username = $this->input->post('username',TRUE);
        $password = sha1($this->input->post('password',TRUE));

        //fetch data from database
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $res = $this->db->get('users');

        //check if there's a user with the above inputs
        if ($res->num_rows() == 1) {

            //retrieve the details of the user
            return $res->result();

        } else {

            return false;

        }

    }
	
function user_list(){
		$hasil=$this->db->get('users');
		return $hasil->result();
	}
	
	
	function delete_user(){
		$product_code=$this->input->post('product_code');
		$this->db->where('id', $product_code);
		$result=$this->db->delete('users');
		return $result;
	}
	
}



?>
