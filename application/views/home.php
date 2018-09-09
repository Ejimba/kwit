<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->view('header'); ?>

	<style type="text/css">
		.col-sm-5 {
			border-color: #ddd;
			border-radius: 4px 4px 0 0;
			border-style: solid;
			border-width: 1px;
			box-shadow: none;
			padding: 15px 15px 15px;
		}
	</style>
	<h1>KenyaEMR to webADT Import Tool</h1>
	<div>
		<p>Please update the configuration below:</p>
		<form method="POST" action="<?=base_url('/home/store')?>">
			<div class="row">
				<div class="col-sm-12">
				<?php foreach ($database_configs as $database_config):?>
	                <?php if ($database_config->type == 'KenyaEMR'):?>
						<div class="col-sm-5">
							<legend>KenyaEMR</legend>
							<div class="form-group">
								<label for="kenyaemr_host">Host</label>
								<input type="text" class="form-control" id="kenyaemr_host" name="kenyaemr_host" value="<?=$database_config->host?>">
							</div>
							<div class="form-group">
								<label for="kenyaemr_database">Database</label>
								<input type="text" class="form-control" id="kenyaemr_database" name="kenyaemr_database" value="<?=$database_config->database?>">
							</div>
							<div class="form-group">
								<label for="kenyaemr_host">Username</label>
								<input type="text" class="form-control" id="kenyaemr_username" name="kenyaemr_username" value="<?=$database_config->username?>">
							</div>
							<div class="form-group">
								<label for="kenyaemr_password">Password</label>
								<input type="password" class="form-control" id="kenyaemr_password" name="kenyaemr_password" value="<?=$database_config->password?>">
							</div>
						</div>
						<div class="col-sm-1"></div>
					<?php endif;?>
					<?php if ($database_config->type == 'webADT'):?>
						<div class="col-sm-5">
							<legend>webADT</legend>
							<div class="form-group">
								<label for="webadt_host">Host</label>
								<input type="text" class="form-control" id="webadt_host" name="webadt_host" value="<?=$database_config->host?>">
							</div>
							<div class="form-group">
								<label for="webadt_database">Database</label>
								<input type="text" class="form-control" id="webadt_database" name="webadt_database" value="<?=$database_config->database?>">
							</div>
							<div class="form-group">
								<label for="webadt_host">Username</label>
								<input type="text" class="form-control" id="webadt_username" name="webadt_username" value="<?=$database_config->username?>">
							</div>
							<div class="form-group">
								<label for="webadt_password">Password</label>
								<input type="password" class="form-control" id="webadt_password" name="webadt_password" value="<?=$database_config->password?>">
							</div>
						</div>
						<div class="col-sm-1"></div>
					<?php endif;?>
				<?php endforeach;?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<br>
					<button type="submit" class="btn btn-info">Update Configuration</button>
				</div>
			</div>
		</form>
	</div>
	
<?php $this->view('footer'); ?>