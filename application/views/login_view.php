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
				<?php echo form_open('user/loginMe' , 'class="loginform" id="loginform"'); ?>
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
						<div class="form-group text-center">
							<input type="submit" class="btn btn-default btn-login" value="Sign In" >
						</div>
					</div>
				<?php echo form_close(); ?>
				<span class="seprator-log">OR</span>
				<div class="row">
						<div class="form-group text-center">
							<a href="register" class="btn btn-default btn-register">Register</a>
						</div>
					</div>
				
			</div>
			


		</div>
	</div>
</div>
<style type="text/css">


</style>