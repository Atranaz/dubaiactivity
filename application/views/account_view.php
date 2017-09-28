<div class="container-fluid no-padding">
	<div class="full-image acount-image"></div>
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="col-md-4 userimg">
				<img src="https://www.theentertainerme.com/images/profile_img2.jpg" alt="Zaheer Ahmad" title="Zaheer Ahmad" class="img-responsive">
			</div>
			<div class="col-md-8">
				<div class="welcomearea">
					<h1 class="info-heading">User Profile</h1>
					<h2><?php echo $user[0]->name ?> ,<span> welcome back...</span></h2>
				</div>
			</div>

			<div class="col-md-12">
				<div class="panel panel-default user-account personal-details">
					<div class="panel-heading">Personal Details</div>
					<div class="panel-body">
						<form class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-3" for="name">Name:</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="name" readonly="" value="<?php echo $user[0]->name; ?>" >
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3" for="email">E-mail:</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" id="email" readonly="" value="<?php echo $user[0]->email; ?>" >
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3" for="mobile">Mobile Number:</label>
								<div class="col-sm-8">
									<input type="number" class="form-control" id="mobile" readonly="" value="<?php echo $user[0]->mobile ?>" >
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3" for="mobile">Country of Residence:</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="country" readonly="" value="<?php echo $user[0]->country ?>" >
								</div>
							</div>
							
							<div class="form-group"> 
								<div class="col-sm-11 text-right">
									<button type="submit" class="btn btn-default btn-big">Save</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<!-- Change the Password -->
				<div class="panel panel-default user-account change-password">
					<div class="panel-heading">Change Password</div>
					<div class="panel-body">
						<form class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-3" for="old-password">Old Password:</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" id="old-password" name="old-password" >
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3" for="new-password">New Password:</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" id="new-password" name="new-password" >
								</div>
							</div>
							
							
							
							
							<div class="form-group"> 
								<div class="col-sm-11 text-right">
									<button type="submit" class="btn btn-default btn-big">Update Now</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<!-- My Bookings -->
				<div class="panel panel-default user-account my-booking">
					<div class="panel-heading">My Booking</div>
					<div class="panel-body">
						<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>Date</th>
									<th>Price</th>
									<th>Status</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td><a href="#">Free Entry in Wild Wadi</a></td>
									<td>31-09-2017</td>
									<td>600 <sup>AED<sup></td>
									<td><span class="label label-success">Active</span></td>
									<td>
										<a href="#"><i class="fa fa-print" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i> </a>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td><a href="#">One Day Trip to Musem</a></td>
									<td>03-10-2017</td>
									<td>350 <sup>AED<sup></td>
									<td><span class="label label-success">Active</span></td>
									<td>
										<a href="#"><i class="fa fa-print" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i> </a>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td><a href="#">One Day Trip to Musem</a></td>
									<td>03-10-2017</td>
									<td>350 <sup>AED<sup></td>
									<td><span class="label label-default">Expire</span></td>
									<td>
										<a href="#"><i class="fa fa-print" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i> </a>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td><a href="#">One Day Trip to Musem</a></td>
									<td>03-10-2017</td>
									<td>350 <sup>AED<sup></td>
									<td><span class="label label-warning">Active</span></td>
									<td>
										<a href="#"><i class="fa fa-print" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i> </a>
									</td>
								</tr>
							</tbody>
  
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>