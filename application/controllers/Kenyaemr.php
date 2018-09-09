<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kenyaemr extends CI_Controller {

	public function index()
	{
		$query = "SELECT * FROM database_configs WHERE type = ? LIMIT 1";
		$connection = new \PDO("sqlite:".APPPATH.'database/kwit.db');
    	$statement = $connection->prepare($query);
    	$statement->execute(['KenyaEMR']);
    	$database_config = $statement->fetch(\PDO::FETCH_OBJ);

    	$kenyaemr_host = $database_config->host;
		$kenyaemr_database = $database_config->database;
		$kenyaemr_username = $database_config->username;
		$kenyaemr_password = $database_config->password;

		$kenyaemr_connection = new \PDO("mysql:host=$kenyaemr_host;dbname=$kenyaemr_database", $kenyaemr_username,$kenyaemr_password);
		$kenyaemr_query = "SELECT * FROM patient_demographics WHERE unique_patient_no IS NOT NULL";
        $kenyaemr_statement = $kenyaemr_connection->prepare($kenyaemr_query);
        $kenyaemr_statement->execute();
        $data['patient_demographics'] = $kenyaemr_statement->fetchAll(\PDO::FETCH_OBJ);

        $data['scripts'] = 
        "<script src='js/datatables.min.js'></script>
        <script type='text/javascript'>
        	$(document).ready(function() {
	        	$('.data-table').DataTable();
	        });
	    </script>";

    	$this->load->view('kenyaemr', $data);
	}
}
