<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->view('header'); ?>

	<h1>KenyaEMR</h1>
	<div class="table-responsive">
		<table class="table table-hover table-striped data-table">
			<thead>
				<th>Unique Patient Number</th>
				<th>Given Name</th>
				<th>Middle Name</th>
				<th>Family Name</th>
				<th>DOB</th>
				<th>Birth Place</th>
				<th>Gender</th>
				<th>Phone Number</th>
			</thead>
			<tbody>
				<?php foreach ($patient_demographics as $patient_demographic):?>
			    	<tr>
			    		<td><?=$patient_demographic->unique_patient_no?></td>
			    		<td><?=$patient_demographic->given_name?></td>
			    		<td><?=$patient_demographic->middle_name?></td>
			    		<td><?=$patient_demographic->family_name?></td>
			    		<td><?=$patient_demographic->DOB?></td>
			    		<td><?=$patient_demographic->birth_place?></td>
			    		<td><?=$patient_demographic->Gender?></td>
			    		<td><?=$patient_demographic->phone_number?></td>
			    	</tr>
			    <?php endforeach;?>
			</tbody>
		</table>
	</div>

	
<?php $this->view('footer'); ?>