    <!-- Full Screen Banner -->
    <section class="block margin-bot2 animatedParent" data-sequence='500'>
    	<div class="col-xs-12" id="arrow-container">
            <p class="text-center">
                <a class="arrow_link" href="#treat" title="">
            	    <img src="https://www.theentertainerme.com/images/2017/icons/scroll.png">
                </a>
            </p>
        </div>
	    <div id="myCarousel" class="carousel slide animated fadeIn slower" data-id='1'>
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
	        <div class="carousel-inner">
	            <div class="active item">
	                <img src="assets/images/bg-slider1.jpg" alt="Slide1" />
	            </div>
	            <div class="item">
	                <img src="assets/images/bg-slider2.jpg" alt="Slide1" />
	            </div>
	            <div class="item">
	                <img src="assets/images/bg-slider3.jpg" alt="Slide1" />
	            </div>
	        </div>
	    </div>
	</section>

	<!-- Content Area Start From Here -->
	<div class="container-fluid no-padding">
      
	    <div class="du-contentfullarea" >
	      	<div class="col-md-10 col-md-offset-1 featured-listing du-imleftcontent">
	      		<div class="animatedParent animateOnce" >
	      			<h2 class="featheading text-center animated fadeIn slower">
	      				<span class="slimhead">What's On,</span>
	      				<span class="boldhead"><?php echo date("l"); ?>?</span>
	      			</h2>
	      		</div>
	      		<div class="animatedParent animateOnce" >
			      	<div class="du-thingtodoarea animated bounceInLeft slower" >
			      		<?php
			      		
			      		$featcount = count($featlist);
			      		for ($i=0; $i < $featcount ; $i++) { 
			      			
			      			$featHTML = '';
			      			$priceblock = '';

			      			$priceblock .= '<div class="du-priceblock">
			      					<span class="du-pricerange">Price</span>';
			      			$priceblock .='<span class="du-priceno">'.$featlist[$i]->price.'</span>
			      					<span class="du-pcurency">AED</span>';
			      			$priceblock .='</div>';
			      			// featured layout
			      			$featHTML .= '<div class="col-md-4 no-padding"><div class="hovereffect">';
			      			$featHTML .= '<a class="linkforall" href="'.base_url().'detailpage/'.$featlist[$i]->list_slug.'"></a>';
			      			$featHTML .= '<img class="img-responsive" src="./uploads/'.$featlist[$i]->image_name.'" alt="'.$featlist[$i]->list_title.'">';
			      			$featHTML .= '<div class="overlay">';
			      			$featHTML .= '<h2>'.$featlist[$i]->list_title.'</h2>';
			      			$featHTML .= '<p class="overlay-text">'.$featlist[$i]->list_desc.'</p>';
			      			$featHTML .= '<a class="info" href="#">View Details</a>';

			      			$featHTML .= '</div>';
			      			$featHTML .= $priceblock;
			      			$featHTML .= '</div></div>';

			      			print_r($featHTML);

			      		}
			      		 ?>
			      		
			      	</div>
			    </div>
	      	</div>	
	      <!-- $(".du-imleftcontent").outerHeight() -->
			<div class="col-md-12 no-padding du-imleftcontent">

			  	<!-- Kids Activities -->
			  	<div class="animatedParent animateOnce">
			      	<div class="du-bestdealdubai animated fadeInUp">
			      		<div class="col-md-12 no-padding">
			      			<h2 class="du-kidblue">Kids Activities</h2>
			      		</div>

			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-kidblue">
								<img class="img-responsive" src="assets/images/bddubai-img.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-kidblue">
								<img class="img-responsive" src="assets/images/bddubai-img-1.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-kidblue">
								<img class="img-responsive" src="assets/images/bddubai-img-2.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-kidblue">
								<img class="img-responsive" src="assets/images/bddubai-img-3.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-kidblue">
								<img class="img-responsive" src="assets/images/bddubai-img-4.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-kidblue">
								<img class="img-responsive" src="assets/images/bddubai-img-5.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-kidblue">
								<img class="img-responsive" src="assets/images/bddubai-img-4.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-kidblue">
								<img class="img-responsive" src="assets/images/bddubai-img-5.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>

			      	</div>
			  	</div>

			  	<!-- family Activities -->
			  	<div class="animatedParent animateOnce">
			      	<div class="du-bestdealdubai animated fadeInUp">
			      		<div class="col-md-12 no-padding">
			      			<h2 class="du-familypink">Family Activities</h2>
			      		</div>

			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-1.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-2.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-3.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-4.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-5.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-4.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-5.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>

			      	</div>
			  	</div>

			  	<!-- Parent Activities without kid -->
			  	<div class="animatedParent animateOnce">
			      	<div class="du-bestdealdubai animated fadeInUp">
			      		<div class="col-md-12 no-padding">
			      			<h2 class="du-parentred">Parents Activities Without Kids</h2>
			      		</div>

			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-parentred">
								<img class="img-responsive" src="assets/images/bddubai-img.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-1.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-2.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-3.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-4.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-5.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-4.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-5.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>

			      	</div>
			  	</div>

			  	<!-- Parent Activities with Nursery -->
			  	<div class="animatedParent animateOnce">
			      	<div class="du-bestdealdubai animated fadeInUp">
			      		<div class="col-md-12 no-padding">
			      			<h2 class="du-parentlightblu">Parents Activities with Nursery</h2>
			      		</div>

			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-parentlightblu">
								<img class="img-responsive" src="assets/images/bddubai-img.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-1.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-2.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-3.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-4.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-5.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-4.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>
			      		<div class="col-md-3 no-padding">

							<div class="hovereffect hf-familypink">
								<img class="img-responsive" src="assets/images/bddubai-img-5.jpg" alt="">
								<div class="overlay">
									<h2>Dubai Desert Safari</h2>
									<a class="info" href="#">View Details</a>
								</div>
							</div>
			      		</div>

			      	</div>
			  	</div>
			  	<div class="clearfix "></div>
			</div>

			

		    

	    </div>

    	<div class="clearfix"></div>

    	<div class="col-md-12 no-padding featured-listing du-imleftcontent">
				<div class="animatedParent animateOnce" >
					<h2 class="featheading text-center animated fadeIn slower">
						<span class="slimhead">Oure Precious</span>
						<span class="boldhead">Moments!</span>
					</h2>
				</div>
				<div class="row">
					<div class="tech-slideshow">
						<div class="mover-1"></div>
					</div>
				</div>
			</div>
	  

    </div>

   

    <!-- All Popup Comes Here -->
  
	