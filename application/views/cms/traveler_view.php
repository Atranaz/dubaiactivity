<?php

$name = $user[0]->fname;
$email = $user[0]->email;
$mobile = $user[0]->mobile;
$phone = $user[0]->phone;
$city = $user[0]->city;
$country = $user[0]->country;

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>User Information & Requests</small>
      </h1>
    </section>
    
    <section class="content"> 
        <!-- <div class="row"> -->
        	<div class="col-md-12 white-bg">
              	
              	<div class="row">
                	<div class="col-md-10">
                    	<h1 class="trip-heading"><?php echo $name ?> 
                      <small class="trip-budget"><?php // echo $t_price ?> Total Request (<?php echo $travelcount; ?>)</small></h1>
                	</div>
              	</div>
  	            <div class="row">
  	            	<div class="col-md-10"><hr style="margin-top: 0"></div>
  	            </div>
                <div class="row">
                  <div class="col-md-4">
                    <p><strong>Email</strong>
                      <span><?php echo $email; ?></span></p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>mobile</strong>
                      <span> <?php echo $mobile; ?></span></p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>Phone</strong>
                      <span> <?php echo $phone; ?></span></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <p><strong>City</strong>
                      <span><?php echo $city; ?></span></p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>Country</strong>
                      <span> <?php echo $country; ?></span></p>
                  </div>
                  <div class="col-md-4">
                    
                  </div>
                </div>
                
          	</div>

          	<div class="col-md-12 white-bg tablepanel">
          		
          		<table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Request Name</th>
                      <th>Date / Time</th>
                      <th>Budget</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php print_r($requests); ?>  
                  </tbody>
              </table>

          	</div>


        	
          
          
        <!-- </div> -->
    </section>
</div>