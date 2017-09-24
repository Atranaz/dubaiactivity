<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style type="text/css">
.hovereffect-one {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect-one .overlay {
  position: absolute;
  overflow: hidden;
  width: 80%;
  height: 80%;
  left: 10%;
  top: 10%;
  /*border-bottom: 1px solid #FFF;
  border-top: 1px solid #FFF;*/
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale(0,1);
  -ms-transform: scale(0,1);
  transform: scale(0,1);
}

.hovereffect-one:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.hovereffect-one img {
  display: block;
  position: relative;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}

.hovereffect-one:hover img {
  filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.6" /><feFuncG type="linear" slope="0.6" /><feFuncB type="linear" slope="0.6" /></feComponentTransfer></filter></svg>#filter');
  filter: brightness(0.3);
  -webkit-filter: brightness(0.3);
}

.hovereffect-one .listdetail {
  
  position: relative;
  font-size: 17px;
  background-color: transparent;
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,-100%,0);
  transform: translate3d(0,-100%,0);
}

.hovereffect-one a, hovereffect p {
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,100%,0);
  transform: translate3d(0,100%,0);
  
}
.hovereffect-one a:hover {
	text-decoration: underline;
}

.hovereffect-one:hover a, .hovereffect-one:hover p, .hovereffect-one:hover .listdetail {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
  font-family: proxmanovalight;
  text-align: left;
  text-transform: capitalize;
}
.du-listprice {
    bottom: 2px;
    color: #fff;
    font-family: proxmanova;
    font-size: 20px;
    position: absolute;
    right: 10px;
}
.du-listcurency {
    font-size: 14px;
    margin: 0 2px 0 0;
}
.bootstrap-select .dropdown-menu {
	background-color: #fff;
}
    </style>
    <link href="<?php echo base_url();?>assets/css/inner.css" rel="stylesheet">
<div class="container-fluid no-padding">
      
	      <div class="du-contentfullarea animatedParent animateOnce" >
	      <!-- Listing Area Start From Here -->
		      <div class="col-md-9 no-padding du-imleftcontent animated fadeInUp">
		      	<!-- Filter area -->
		      	<div class="col-md-12 no-padding du-imrelative">
		      		<div class="margin-right2 margin-bot2">
		      		<div class="du-headingposition">
		      			<ol class="breadcrumb du-breadcrums">
						  
						</ol>
		      			<!-- <p class=""><a href=""><span class="du-bcfirst">Home</span></a><span class="du-bclast">Accoumadation</span></p> -->
		      			<h2 class="du-listheading">ABOUT US</h2>
			      		</div>
		      		<img class="img-responsive du-listingheadbg" src="<?php echo base_url();?>assets/images/abt_img.jpg">
		      		</div>
		      	</div>

		      <div class="col-lg-12">
              
              <p class="abt_fnt" id="mrg_abt">Dubai24-7.com is an online and mobile platform that brings you the buzz on Dubai. At your fingertips, Dubai 24-7.com allows you to plan your travel itinery, providing up-to-date listings on restaurants, shows, accommodation, attractions and leisure activities. Our mobile apps enable users to browse and discover what’s on offer in Dubai, whether you want to off-road in the desert, fine-dine al fresco, attend any of the numerous shows or dance the night away, shop to your hearts content at one of Dubai’s infamous malls or at pop-up stores/exhibitions. In the mood for fishing or paint-balling, a trip to the zoo or sky-diving? Whether it’s dinner at Zuma or tasting the delectable delights in rustic Jumeirah. We will have the low-down for the busy 21st century traveller or resident so all you need to do is book. You get the dril</p><br>


 <p class="abt_fnt" id="mrg_abt">Not only is Dubai24-7.com great for users, but it also serves as a platform for advertising and marketing your enterprise, there is room for small and big businesses alike. Entice your customers with offers, tap into an untouched customer base, launch your latest brand.  With Dubai24-7.com, you can, and you will succeed in growing your business! It’s just another way we help you provide the best possible experience to your customers, by offering choices. It’s a win-win for everyone. Our team consists of expertise in App development, marketing and sales professionals from the UK and the Middle East. With the Expo around the corner and vast new developments to the city, UAE will be at the forefront both globally and locally. Our aim is to grow with the city and give the users the best of what Dubai has to offer. Simplicity is the key to success – we want to take the pain out of planning for our users and be the region’s one-stop-shop for listings.l. </p>
<br>
 <p class="abt_fnt" id="mrg_abt">The Dubai 24-7 team resides at JLT. Teamwork is at the core of our values and we welcome you all to be a part of our team. We believe a strong, dedicated and happy team are vital to a successful business. 
At Dubai 24-7 our mission is to be of service to both consumers and businesses alike. Integral to our success is our fundamental belief in balancing the pursuit of excellence with a friendly, flexible approach. 
Creativity is the heart and soul of Dubai and its vision, and we wish to embrace this framework to build a successful model. It is our pleasure to take your business on this journey with us. 
</p><br>
<p class="abt_fnt_red">Dubai24-7.com is a subsidiary of 24/7 Group DMCC.</p>
              
              
              
              
              </div>	
			      	
		      </div>

		      <div id="sidebar" class="col-md-3 no-padding animatedParent animateOnce">

			      	<div class="col-md-12 no-padding animated flipInX">      		
			      			<div class="du-sideadarea margin-bot2">
								<div id="adfade" class="carousel slide carousel-fade" data-ride="carousel">
								<div class="carousel-inner" role="listbox">
								<div class="active item">
									<a href=""><img  class="img-responsive" src="<?php echo base_url();?>assets/images/side-ad-img.jpg"></a>
								</div>
								<div class="item">
									<a href=""><img  class="img-responsive" src="<?php echo base_url();?>assets/images/side-ad-img-rot.jpg"></a>
								</div>
								
								</div>

								</div>

			      			
			      			</div>      		
			      	</div>

			      	<div class="col-md-12 no-padding ">
			      		<div class="du-sidecalarea">
			      			<h3 class="du-redhead">Dubai Calendar</h3>      		
				      		<!-- Responsive calendar - START -->
					    	<div class="responsive-calendar">
						        <div class="controls">
						            <a class="pull-left" data-go="prev">
						            	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						            </a>
						            <h4><span data-head-year></span> <span data-head-month></span></h4>
						            <a class="pull-right" data-go="next">
						            	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						            </a>
						        </div>
						        <div class="day-headers">
						          <div class="day header">M</div>
						          <div class="day header">T</div>
						          <div class="day header">W</div>
						          <div class="day header">T</div>
						          <div class="day header">F</div>
						          <div class="day header">S</div>
						          <div class="day header">S</div>
						        </div>
					        	<div class="days" data-group="days"></div>
					      	</div>
	      					<!-- Responsive calendar - END -->      		
	      				</div>
			      	</div>

			      	<div class="col-md-12 no-padding animated flipInX">
			      			<div class="du-sideadarea margin-bot2">
			      			<div id="adfade2" class="carousel slide carousel-fade" data-ride="carousel">
								<div class="carousel-inner" role="listbox">
								<div class="active item">
									<a href=""><img  class="img-responsive" src="<?php echo base_url();?>assets/images/side-ad-img-1.jpg"></a>
								</div>
								<div class="item">
									<a href=""><img  class="img-responsive" src="<?php echo base_url();?>assets/images/side-ad-img-1-1.jpg"></a>
								</div>
								
								</div>

								</div>
			      			</div>
			      	</div>

			      	<div class="col-md-12 no-padding animated flipInX">      		
			      			<div class="du-sideadarea margin-bot2">
								<div id="adfade5" class="carousel slide carousel-fade" data-ride="carousel">
									<div class="carousel-inner" role="listbox">
									<div class="active item">
										<a href=""><img  class="img-responsive" src="<?php echo base_url();?>assets/images/side-ad-img.jpg"></a>
									</div>
									<div class="item">
										<a href=""><img  class="img-responsive" src="<?php echo base_url();?>assets/images/side-ad-img-rot.jpg"></a>
									</div>
									
									</div>
								</div>
			      			</div>      		
			      	</div>
			      	
		      </div>

	      </div>

    	<div class="clearfix"></div>
	  	

    </div>