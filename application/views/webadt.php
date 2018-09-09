<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->view('header'); ?>

	<h1>webADT</h1>
	<div class="table-responsive">
		<table class="table table-hover table-striped data-table">
			<thead>
				<th>Patient Number</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Other Name</th>
				<th>DOB</th>
				<th>POB</th>
				<th>Gender</th>
				<th>Phone</th>
			</thead>
			<tbody>
				<?php foreach ($patients as $patient):?>
			    	<tr>
			    		<td><?=$patient->patient_number_ccc?></td>
			    		<td><?=$patient->first_name?></td>
			    		<td><?=$patient->last_name?></td>
			    		<td><?=$patient->other_name?></td>
			    		<td><?=$patient->dob?></td>
			    		<td><?=$patient->pob?></td>
			    		<td><?=$patient->gender?></td>
			    		<td><?=$patient->phone?></td>
			    	</tr>
			    <?php endforeach;?>
			</tbody>
		</table>
	</div>

	
<?php $this->view('footer'); ?>