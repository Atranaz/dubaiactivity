<div class="container-fluid no-padding">
	<div class="full-image login-image"></div>
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<div class="row">
				<?php
				$this->load->helper('form');
				$error = $this->session->flashdata('error');
				if($error)
				{
					?>
					<div class="alert alert-danger alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<?php echo $this->session->flashdata('error'); ?>                    
					</div>
					<?php } ?>
					<?php  
					$success = $this->session->flashdata('success');
					if($success)
					{
						?>
						<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<?php echo $this->session->flashdata('success'); ?>
						</div>
						<?php } ?>
			</div>
			<div class="login-area">
				<?php echo form_open('user/registerME' , 'class="registerform" id="registerform"'); ?>
					<!-- <h3 class="loginhead">Sign In</h3> -->
					<div class="row">
						<div class="form-group">
							<label for="title">Email</label>
							<input type="text" class="form-control" id="email" name="email"  required="true" placeholder="Your email address">
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<label for="title">Password</label>
							<input type="password" class="form-control" id="password" name="password" required="true" placeholder="Secret Password">
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<label for="title">Name</label>
							<input type="text" class="form-control" id="name" name="name"  required="true" placeholder="Your Full Name">
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<label for="title">Mobile Number</label>
							<input type="number" class="form-control" id="mobile" name="mobile"  required="true" placeholder="Your Valid Mobile Number">
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<label for="title">Country of Residence</label>
							<select class="form-control" id="country" name="country"  required="true" >
								<?php  include('global/countrylist.php') ?>
							</select>
						</div>
					</div>
					
					<div class="row">
						<div class="form-group text-center">
							<input type="submit" class="btn btn-default btn-login" value="Register" >
						</div>
					</div>
				<?php echo form_close(); ?>
				<span class="seprator-log">OR</span>
				<div class="row">
						<div class="form-group text-center">
							<a href="<?php echo base_url() ?>user" class="btn btn-default btn-register">Sign In</a>
						</div>
					</div>
				
			</div>
			


		</div>
	</div>
</div>
<style type="text/css">


</style>