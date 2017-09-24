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
		      			<h2 class="du-listheading">CONTACT US</h2>
			      		</div>
		      		<img class="img-responsive du-listingheadbg" src="<?php echo base_url();?>assets/images/contact_bg2.jpg">
		      		</div>
		      	</div>

		      <div class="col-lg-12">
<div class="col-lg-4">
<div id="boxs"></div><h3 class="class_contact_hd">Enquiry  </h3>

<div  id="colum_contact">

<form action="" method="post" id="tp">
<p style="float:left;" class="size"> Your Name    <span class="red">*</span></p><p class="size" style="float:left; margin-left:25%">Email Address    <span class="red">*</span></p>
<br />

<input type="text" class="form-control"  style="width:48%; float:left;" id="pwd" required placeholder="Name" name="location">

<input type="email" class="form-control" style="width:48%; float:right;" id="pwd" required placeholder="Email" name="location">
<br><br><br>
<p style="float:left;" class="size"> Tel No   <span class="red">*</span></p><p class="size" style="float:left; margin-left:34%">Subject    <span class="red">*</span></p>

<input type="tel" class="form-control"  style="width:48%; float:left;" id="pwd" required placeholder="Name" name="location">

<input type="text" class="form-control" style="width:48%; float:right;" id="pwd" required placeholder="Email" name="location">
<br>
<br><br><br>
<p style="float:left;" class="size">Message    <span class="red">*</span></p>

<textarea type="text" style="float:left; height:110px;" class="form-control" id="pwd" required placeholder="Messege" name="location"></textarea><br>

<input type="submit" style="float:right; border:none; margin-left:10px; margin-top:10px;" class="btn btn-success submut" >
<input type="reset" style="float:right; border:none;margin-top:10px;" class="btn btn-success submut" >
</form>

</div>
</div>




<div class="col-lg-1" id="none"><hr class="lines" /></div>



<div class="col-lg-4">
<div id="boxs"></div><h3 class="class_contact_hd">Directions</h3>
<div  id="colum_styles_nw">

<div id="cetr">
<div id="alls_one">
<div id="direct"><img src="<?php echo base_url();?>assets/images/icons/boat.png" class="tp_space2"> </div>
<div id="direct_right">
<p class="size2"><strong>Dubai Metro Station – JLT Station</strong></p>
<ol type="1" class="vacancy"><li>
Go to Exit 1 at JLT Metro Station</li><br>
<li>Take elevator going down</li><br>
<li>Take left and you will see Global Lake View</li><br>
<li>Take left and you will see the Black Building that <br>
      is JBC1 (Black Glass Building)</li></li></ol></div>

 </div>  
 
 
 
 <div id="alls_one2">
     
<div id="direct"><img src="<?php echo base_url();?>assets/images/icons/car_contact.png" class="tp_space3"> </div>

<div id="direct_right">
<p class="size2"><strong>Sheikh Zayed Road - Going towards Abu Dhabi </strong></p>
<ol type="1" class="vacancy">
<li>Keep right to continue on Exit 32 (260m)</li><br>
<li>Take the ramp on the left to Emirates Hills (1.2km)</li><br>
<li>Continue onto Interchange No 5 (1.0km)</li><br>
<li>Keep right (850m)</li><br>
<li>Merge onto First Al Khail St (350m)</li><br>
<li>Keep right (900m)<br>
<li>Keep left to continue toward Cluster G (400m)</li><br>
<li>Turn right onto Cluster G (180m)</li>
</ol>
</div>
      
</div>
                  
 
 <div id="alls_one2">
     
<div id="direct"><img src="<?php echo base_url();?>assets/images/icons/car_contact.png"  class="tp_space3"> </div>

<div id="direct_right">
<p class="size2"><strong>Sheikh Zayed Road - Going towards Dubai </strong></p>
<ol type="1" class="vacancy">
<li>Take exit 29 (900m)</li><br>
<li>Keep left (130m)</li><br>
<li>Keep right, follow signs for Jumeirah Lakes 
      Towers/Jumeirah Islands (1.3km)</li><br>
<li>Continue straight (450m) , Keep left (550m)</li><br>
<li>Slight right toward Al Sarayat St (210m)</li><br>
<li>Slight right onto Al Sarayat St (1.3km)</li><br>
<li>Slight right towards cluster G (450m)</li><br>
<li>Turn right onto Cluster G</li>

</ol>
</div>
      
</div>




      
      

</div>

</div>
</div>

<div class="col-lg-1" id="none"><hr class="lines" /></div>


<div class="col-lg-4">
<div id="boxs"></div><h3 class="class_contact_hd">Our Office  </h3>

<div  id="colum_styles">

<ul id="contact_ids">
<li class="cons"><img src="<?php echo base_url();?>assets/images/icons/contact.png" class="cont_icos" style="float:left; margin-top:5px;"><li class="msg_in"><strong>24/7 Group DMCC</strong><br>
JLT Cluster G<br>
JBC1 Tower<br>
Office 2601<br>
Dubai UAE</li>
</li>
<span class="brdr2"></span>
<li class="cons"><img src="<?php echo base_url();?>assets/images/icons/msg.png" class="cont_icos">info@247grp.com</li>
<span class="brdr2"></span>
<li class="cons"><img src="<?php echo base_url();?>assets/images/icons/24.png" class="cont_icos">www.247grp.com</li>
<span class="brdr"></span>

<li class="cons"><img src="<?php echo base_url();?>assets/images/icons/phone.png" class="cont_icos">+971(0) 4 551 2144</li>
<span class="brdr2"></span>

<li class="cons"><img src="<?php echo base_url();?>assets/images/icons/fax.png" class="cont_icos">+971(0) 4 551 2124</li>
<span class="brdr2"></span>

<li class="cons"><img src="<?php echo base_url();?>assets/images/icons/skype.png" class="cont_icos">group24-7</li>
<span class="brdr2"></span>

<li class="cons"><img src="<?php echo base_url();?>assets/images/icons/cont_ico.png" class="cont_icos">Sunday to Thursday,9 am to6 pm</li>

</ul>

</div>
</div>

<br>


<div class="col-lg-12" id="pad_one">
<!--<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3613.9113805548373!2d55.1364857!3d25.0709926!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sae!4v1448031769251" width="100%" height="510" frameborder="0" style="border:0" allowfullscreen></iframe>-->

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.8993777574815!2d55.13811839884496!3d25.07139936942751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6cae62b2630d%3A0xc3b17478e61f959a!2sJumeirah+Business+Center+1+-+Dubai!5e0!3m2!1sen!2sae!4v1448011537143" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><a href="#"><img src="<?php echo base_url();?>assets/images/dw.jpg" style="float:right;" /> </a></div>

</div>



</div></div>

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