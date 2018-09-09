<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$query = "SELECT * FROM database_configs";
		$connection = new \PDO("sqlite:".APPPATH.'database/kwit.db');
    	$statement = $connection->prepare($query);
    	$statement->execute();
    	$data['database_configs'] = $statement->fetchAll(\PDO::FETCH_OBJ);
    	$this->load->view('home', $data);
	}

	public function store()
	{
		$kenyaemr_host = $this->input->post('kenyaemr_host');
		$kenyaemr_database = $this->input->post('kenyaemr_database');
		$kenyaemr_username = $this->input->post('kenyaemr_username');
		$kenyaemr_password = $this->input->post('kenyaemr_password');

		$webadt_host = $this->input->post('webadt_host');
		$webadt_database = $this->input->post('webadt_database');
		$webadt_username = $this->input->post('webadt_username');
		$webadt_password = $this->input->post('webadt_password');

		$connection = new \PDO("sqlite:".APPPATH.'database/kwit.db');
		$query = "UPDATE database_configs SET host = ?, database = ?, username = ?, password = ? WHERE type = ?";
    	$statement = $connection->prepare($query);
    	$statement->execute([$kenyaemr_host, $kenyaemr_database, $kenyaemr_username, $kenyaemr_password, 'KenyaEMR']);
    	$statement->execute([$webadt_host, $webadt_database, $webadt_username, $webadt_password, 'webADT']);
    	$this->session->set_flashdata('flash_message', 'Configurations updated successfully');
    	redirect(base_url('/'));
	}
}
