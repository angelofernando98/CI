<?php
class Input extends CI_Controller
{
	
	public function insert()
	{
		$this->load->view('table_view');

	}
	public function dbi()
	{
		$this->load->model('User_model');
		$name = $_POST["name"];
		$sur = $_POST["sur"];
		$this->User_model->insert_users([

			'username' => $name,
			'password' => $sur

		]);
	}
	
}	
?>
