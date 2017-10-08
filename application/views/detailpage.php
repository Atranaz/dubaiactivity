<div class="container-fluid no-padding">
	<section class="b-pic b-pic--place lazy b-parallax  my_place_image_1" data-type="background" data-speed="8" style="background-image: url(&quot;<?php echo base_url().'uploads/'.$singlelist[0]->image_name;  ?>&quot;);">
  
	    <div class="container b-pic-hgroup lazy-cont">
	        <h1 class="b-pic__title"><?php echo $singlelist[0]->list_title;  ?></h1>
	       

	        <div class="desciption">
				<?php echo $singlelist[0]->list_desc;  ?>            <a href="#" class="noajax">Read More</a>

				        </div>
	    </div>
 
	
        <div class="b-pic__check b-pic__address">

        	<i class="fa fa-tag b-pic__check__icon"></i>

        	<div class="b-pic__check__title">Price </div>
            <div class="b-pic__check__amount">

                <div class="press--right">

                    <span class="address-value"><?php echo $singlelist[0]->price;  ?>  AED</span>

                    <!-- &euro;41 -&euro;59 -->

                </div>

            </div>
    	</div>

	
        <div class="b-pic__check b-pic__phone" data-toggle="modal" data-target="#myModalHorizontal">

            <i class="fa fa-ticket b-pic__check__icon"></i>

            <div class="b-pic__check__title">booking </div>
            <div class="b-pic__check__amount">

                <div class="press--right">


                    <span class="phone-value">BOOK NOW!</span>
                </div>
            </div>
        </div>
	    <div class="b-pic__check b-pic__see-more">
	    	<a class="jumper" href="#detailtext">
        <i class="fa fa-chevron-down b-pic__check__icon"></i>

        <div class="b-pic__check__title">See more information </div></a>
        <div class="b-pic__check__amount">

            <div class="press--right">

                <!-- &euro;41 -&euro;59 -->

            </div>
        </div>
    </div>
			
	</section>
	<div class="container-fluid no-padding lightbg">
		<div class="col-md-12 ">
			<div class="col-md-8 ">
				<h2 class="secondmain-heading"><?php echo $singlelist[0]->list_title;  ?></h2>
				<ul class="list-unstyled list-feature">
					<li class="list-expire">
						<p><strong><i class="fa fa-calendar-times-o" aria-hidden="true"></i></strong> 28SEP2017</p>
					</li>
					<li class="list-review">
						<p><strong><i class="fa fa-commenting-o" aria-hidden="true"></i></strong> Write a Review</p>
					</li>
					<li class="list-share">
						<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=atranaz"></script> 
						<!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
					</li>
				</ul>
				<div class="white-bg detail-text" " >
					
					<p>
					<?php echo $singlelist[0]->list_desc;  ?> </p>
				</div>
				<div class="gallery" id="detailtext"></div>
			</div>
			<div class="col-md-4 sidebar" >
				<div class="googlemap">
					<div id="map_container"></div>
	  				<div id="map"></div>
				</div>
				<div class="white-bg map-area" >
					<!-- map come here if need it -->
					<address>
						<span class="postal">
							<strong><i class="fa fa-map-marker"></i></strong> City Walk - Al Wasl - Dubai
						</span>
						<span class="tel">
							<strong><i class="fa fa-phone-square"></i></strong> +971 4 317 3999
						</span>
						<span class="web">
							<strong><i class="fa fa-internet-explorer"></i></strong> <a href="#">www.greenplanet.ae</a>
						</span>
						<span class="hours">
							<strong>Opening Hours:</strong> 10AM - 07PM
						</span>
					</address>
				</div>
			</div>
			
		</div>
		<div class="col-md-12 no-padding">
			<ul class="liat-unatyled list-images">
				<li class="listimage">
					<a href="#">
						<img class="img-responsive" src="assets/images/bddubai-img-1.jpg">
					</a>
				</li>
				<li class="listimage">
					<a href="#">
						<img class="img-responsive" src="assets/images/bddubai-img-2.jpg">
					</a>
				</li>
				<li class="listimage">
					<a href="#">
						<img class="img-responsive" src="assets/images/bddubai-img-3.jpg">
					</a>
				</li>
				<li class="listimage">
					<a href="#">
						<img class="img-responsive" src="assets/images/bddubai-img-1.jpg">
					</a>
				</li>
				<li class="listimage">
					<a href="#">
						<img class="img-responsive" src="assets/images/bddubai-img-1.jpg">
					</a>
				</li>
				<li class="listimage">
					<a href="#">
						<img class="img-responsive" src="assets/images/bddubai-img-1.jpg">
					</a>
				</li>

			</ul>
		</div>
	</div>
	
	<!-- booking form  -->
	<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <!-- Modal Header -->
	            <div class="modal-header">
	                <button type="button" class="close" 
	                   data-dismiss="modal">
	                       <span aria-hidden="true">&times;</span>
	                       <span class="sr-only">Close</span>
	                </button>
	                <h4 class="modal-title" id="myModalLabel">
	                    <small>Booking for</small> <?php echo $singlelist[0]->list_title;  ?> <small>Price </small> <strong> <?php echo $singlelist[0]->price;  ?> <sup>AED</sup></strong>
	                </h4>
	            </div>
	            
	            <!-- Modal Body -->
	            <div class="modal-body">
	                <div id="form-messages"></div>
	                
	                <?php echo form_open('home/bookoffer',array('id'=>'bookingform','class'=>'form-horizontal','role'=>'form')); ?>
						<div class="form-group">
						    <label  class="col-sm-2 control-label"
						              for="persons">Persons</label>
						    <div class="col-sm-10">
						        <select name="totalseat" class="form-control">
						        	<option value="1">1 Person</option>
						        	<option value="2">2 Persons</option>
						        	<option value="3">3 Persons</option>
						        	<option value="4">4 Persons</option>
						        	<option value="5">5 Persons</option>
						        	<option value="6">6 Persons</option>
						        	<option value="7">7 Persons</option>
						        	<option value="8">8 Persons</option>
						        	<option value="9">9 Persons</option>
						        	<option value="10">10 Persons</option>
						        </select>
						    </div>
						</div>
						<?php

							$isLoggedIn = $this->session->userdata('isLoggedIn');
							
							
							if (empty($isLoggedIn)) 
							{
								
								$name = '';
								$email = '';
								$mobile = '';
								$usercheck = '';

							} else {

								$name = $this->session->userdata('name');
								$email = $this->session->userdata('email');
								$mobile = $this->session->userdata('mobile');
								$usercheck = $this->session->userdata('isLoggedIn');

							}
						?>
						<div class="form-group">
							<label  class="col-sm-2 control-label"
							          for="name">Name</label>
							<div class="col-sm-10">
							    <input type="text" class="form-control" 
							    id="name" name="name" placeholder="Full Name" value="<?php echo $name;  ?>" />
							</div>
						</div>
						<div class="form-group">
							<label  class="col-sm-2 control-label"
							          for="email">Email</label>
							<div class="col-sm-10">
							    <input type="email" class="form-control" 
							    id="email" name="email" placeholder="Email" value="<?php echo $email;  ?>"/>
							</div>
						</div>
						<div class="form-group">
							<label  class="col-sm-2 control-label"
							          for="mobile">Mobile</label>
							<div class="col-sm-10">
							    <input type="tel" class="form-control" 
							    id="mobile" name="mobile" placeholder="Mobile Number" value="<?php echo $mobile;  ?>"/>
							    <input type="hidden" readonly="" 
							    id="offerid" name="offerid" value="<?php echo $singlelist[0]->list_id;  ?>" />
							    <input type="hidden" readonly="" id="price" name="price" value="<?php echo $singlelist[0]->price;  ?>" />
							    <input type="hidden" readonly="" id="usercheck" name="usercheck" value="<?php echo $usercheck;  ?>" />
							</div>
						</div>
						
	                  
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							  <button type="submit" class="btn btn-default">Book Now</button>
							</div>
						</div>
	                </form>
	                
	                
	                
	                
	                
	                
	            </div>
	            
	            <!-- Modal Footer -->
	            <!-- <div class="modal-footer">
	                <button type="button" class="btn btn-default"
	                        data-dismiss="modal">
	                            Close
	                </button>
	                <button type="button" class="btn btn-primary">
	                    Save changes
	                </button>
	            </div> -->
	        </div>
	    </div>
	</div>
	

</div>