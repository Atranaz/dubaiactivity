<div class="container-fluid no-padding">
	<div class="full-image login-image"></div>
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			
			<div class="login-area">
				<?php echo form_open('user/login' , 'class="loginform" id="loginform"'); ?>
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
							<input type="text" class="form-control" id="password" name="password" required="true" placeholder="Secret Password">
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
							<a href="#" class="btn btn-default btn-register">Register</a>
						</div>
					</div>
				
			</div>
			


		</div>
	</div>
</div>
<style type="text/css">
.loginform {
	margin-top: 20px;
}
.full-image {
    background: #ccc;
    height: 300px;
}
.login-area {
	width: 300px;
	margin:0 auto;
}
.form-group label {
	text-transform: uppercase;
}
.form-control {
    border-radius: 0;
    box-shadow: 0 0 0 #ccc;
}
.seprator-log {
	display: block;
	text-align: center;
}

</style>