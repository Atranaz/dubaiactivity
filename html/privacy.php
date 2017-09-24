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
<div class="du-contentfullarea animatedParent animateOnce" >
	      <!-- Listing Area Start From Here -->
		      <div class="col-md-9 no-padding du-imleftcontent animated fadeInUp">
		      	<!-- Filter area -->
		      	<div class="col-md-12 no-padding du-imrelative">
		      		<div class="margin-right2 margin-bot2">
		      		<div class="du-headingposition">
		      			<ol class="breadcrumb du-breadcrums">
						  <li><a href="#">Home</a></li>
						  <li class="active">Policy & Disclaimer</li>
						</ol>
		      			<!-- <p class=""><a href=""><span class="du-bcfirst">Home</span></a><span class="du-bclast">Accoumadation</span></p> -->
		      			<h2 class="du-listheading">POLICY & DISCLAIMER</h2>
			      		</div>
		      		<img class="img-responsive du-listingheadbg" src="<?php echo base_url();?>assets/images/privacy_policy_bg.jpg">
		      		</div>
		      	</div>

		      <div class="col-lg-12">
              
              <div id="cont_srl">
              
              <h5 class="all_prt_hd">PRIVACY POLICY </h5>
              <p class="abt_prt" id="privacy_para">24/7 Group respects the privacy of its users whether they use our website and or our mobile applications. Our privacy policy is designed to inform you about the types of information that see 24/7 Group may gather or collect, about you in connection with your use of the Website. If you do not agree to all the terms and conditions of this Agreement, or you are under 13 years of age, please do not use the Sites and or our mobile applications. If you choose to access the Sites, you do so at your own risk, and are responsible for complying with all local laws, rules and regulations.</p><br>

<h5 class="all_prt_hd">PERSONALLY AND NON-PERSONALLY IDENTIFIABLE INFORMATION </h5>
  <p class="abt_prt" id="privacy_para">In order for you to use our Sites and mobile platform we and our third party service providers may require that you give us personally and non-personally Identifiable and information that may not reveal your specific identity, such as your name, postal address, telephone number, e-mail address, date of birth, when you voluntarily provide it to us. We also may request information about your interests and activities, your gender, username, hometown and other demographic information, and other potentially relevant information as determined by see 24/7 Group from time to time. Users of the Website are under no obligation to provide see 24/7 Group with Personal Information of any kind, although refusing to do so may prevent the user from using certain Website features.  </p>
<br>

<h5 class="all_prt_hd">COOKIES </h5>

 <p class="abt_prt" id="privacy_para">Cookies are created when a user's browser loads a particular app. The app sends information to the browser which then creates a text file. Every time the user goes back to the same website, the browser retrieves and sends this file to the website's server. 24/7 Group uses Cookies to improve users' experiences and to help 24/7 Group understand how the Website is being used. </p><br>

 
 
<h5 class="all_prt_hd">IP ADDRESSES</h5>
 <p class="abt_prt" id="privacy_para">We may obtain information about your physical location, such as by use of GPS, or by inference from other information we collect for example, your IP address. IP Addresses are the Internet Protocol addresses of the computers that you are using. Your IP Address is automatically assigned to the computer that you are using by your Internet Service Provider. Your IP Address is identified and logged automatically in our server log files whenever you visit the Sites, along with the time(s) of your visit(s) and the page(s) of the Sites that you visited. Collecting IP Addresses is standard practice on the Internet and is done automatically by many web sites. </p><br>
              
 <h5 class="all_prt_hd">FORUMS AND PROFILES</h5>             
 <p class="abt_prt" id="privacy_para">Please note certain Personal Information we collect about users is provided to us as a result of those user's use of the App and or our mobile, may become public, and may be available to visitors to the Sites and to the general public. For example, if you post your email address, you may receive unsolicited messages. We cannot control who reads your posting or what other users may do with the information you voluntarily post, so we encourage you to exercise discretion and caution with respect to your personal information. You assume all responsibility for any loss of privacy or other harm resulting from your voluntary disclosure of Personal Information. </p>
<br>

  <h5 class="all_prt_hd">THIRD PARTY SITES</h5>             
             
 <p class="abt_prt" id="privacy_para">Please note neither we nor our third party service providers are responsible for, the privacy, information or other practices of other websites, including without limitation any of our affiliates and/or any third party operating any site to which the Sites contains a link. Users should inform themselves of the privacy policies and practices (if any) of the third party responsible for that website, and should take those steps necessary to, in those users' discretion, protect their privacy. </p> <br>

   <h5 class="all_prt_hd">SECURITY</h5>             
            
 <p class="abt_prt" id="privacy_para">We cannot and do not guarantee that your information will not be accessed, viewed, disclosed, altered, or destroyed by breach of any of our physical, technical, or managerial safeguards. If you have reason to believe that your interaction with us is not secure, you must immediately notify us of the problem by contacting us in accordance with the "Contacting Us" section below. </p> <br> 
<h5 class="all_prt_hd">PRIVACY POLICY CHANGES</h5>             
            
 <p class="abt_prt" id="privacy_para">We may change this PRIVACY POLICY from time to time and without prior notice. If we make a change to this Agreement it will be effective as soon as we post it, and the most current version of this PRIVACY POLICY will always be posted. You agree that you will review this PRIVACY POLICY periodically and you agree to be bound by the revised PRIVACY POLICY. You if you do not agree to the new terms of the PRIVACY POLICY, you will stop using the Sites. </p>    <br>

<h5 class="all_prt_hd">DISCLAIMER </h5>             
 <p class="abt_prt" id="privacy_para">If you choose to access the Sites, you do so at your own risk, and are responsible for complying with all local laws, rules and regulations. </p><br>

<h5 class="all_prt_hd">CONTACT  </h5>             
              
 <p class="abt_prt" id="privacy_para">If you have any questions regarding our Privacy Policy, please contact our privacy officer at Cluster G, JBC1, Office 2601, JLT.</p> 


             
  </div>	             
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