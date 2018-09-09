<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Webadt extends CI_Controller {

	public function index()
	{
		$query = "SELECT * FROM database_configs WHERE type = ? LIMIT 1";
		$connection = new \PDO("sqlite:".APPPATH.'database/kwit.db');
    	$statement = $connection->prepare($query);
    	$statement->execute(['webADT']);
    	$database_config = $statement->fetch(\PDO::FETCH_OBJ);

    	$webadt_host = $database_config->host;
		$webadt_database = $database_config->database;
		$webadt_username = $database_config->username;
		$webadt_password = $database_config->password;

		$webadt_connection = new \PDO("mysql:host=$webadt_host;dbname=$webadt_database", $webadt_username,$webadt_password);
		$webadt_query = "SELECT * FROM patient";
        $webadt_statement = $webadt_connection->prepare($webadt_query);
        $webadt_statement->execute();
        $data['patients'] = $webadt_statement->fetchAll(\PDO::FETCH_OBJ);

        $data['scripts'] = 
        "<script src='js/datatables.min.js'></script>
        <script type='text/javascript'>
        	$(document).ready(function() {
	        	$('.data-table').DataTable();
	        });
	    </script>";

    	$this->load->view('webadt', $data);
	}
}
