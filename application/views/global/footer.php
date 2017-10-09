   <div class="container-fluid no-padding">
      <div class="du-footerarea ">
        
          <div class="container">
              <div class="col-md-4">
                <h4 class="du-fheader du-flinkind">Support</h4>
                <ul class="list-unstyled du-footerlink">
                  <li><a href="">Help</a></li>
                  <li><a href="">Contact us</a></li>
                  <li><a href="">Careers</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <h4 class="du-fheader du-flinkind">Company</h4>
                <ul class="list-unstyled du-footerlink">
                  <li><a href="">About us</a></li>
                  <li><a href="">Advertising</a></li>
                  <li><a href="">our partner</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <h4 class="du-fheader du-flinkind">Legal</h4>
                <ul class="list-unstyled du-footerlink">
                  <li><a href="">Term of Use</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">Blog</a></li>
                </ul>
              </div>
          </div>
       
      </div>
      <div class="col-md-12 du-copyrights"><p>© UAE ACTIVITY. ALL RIGHTS RESERVED.</p></div>
    </div>
  </body>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <script src='<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js'></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src='<?php echo base_url(); ?>assets/js/css3-animate-it.js'></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src='<?php echo base_url(); ?>assets/js/jquery.newsTicker.min.js'></script>
    <script src='<?php echo base_url(); ?>assets/js/owl.carousel.js'></script>
    
    
    <!-- 
	disabled some issue will be fix soon
	<script type="text/javascript" src="http://leafo.net/sticky-kit/src/jquery.sticky-kit.js"></script>
    <script src='assets/js/skdslider.min.js'></script> -->
    <!-- Script to Activate the Carousel -->
    <script>
    //Mega Menu
    // Dropdown Menu Fade    
	jQuery(document).ready(function(){
	    $(".dropdown").hover(
	        function() { $('.dropdown-menu', this).stop().fadeIn("fast");
	        },
	        function() { $('.dropdown-menu', this).stop().fadeOut("fast");
	    });
	});
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })

    $(document).ready(function(){
	$.doTimeout(2500, function(){
		$('.repeat.go').removeClass('go');

		return true;
	});
	$.doTimeout(2520, function(){
		$('.repeat').addClass('go');
		return true;
	});
	
	});
    //Sticky Sides
 	 // $(function() {
   //  	return $("#sidebar").stick_in_parent({
   //    	parent: "[data-sticky_parent]"
   //  	});
  	// });


	

	

	//Side Fade Slider 
	$('.carousel-fade').carousel();

	
	
    </script>
   
    <!-- detail pge jump to text -->
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBCoKXMcfZfqzAzMD4M2xK2i4-cXkBBzic&sensor=false'></script>
 
    <script type="text/javascript">
    var slideheight = $( '.my_place_image_1' ).height();
    $(".jumper").on("click", function( e ) {
        e.preventDefault();
        $('html, body').stop().animate({scrollTop: slideheight}, 1300);
    });

  // Google responsive map 
  function initialize() 
  {
    var myLatlng = new google.maps.LatLng(53.3333,-3.08333);
    var imagePath = 'http://m.schuepfen.ch/icons/helveticons/black/60/Pin-location.png'
    var mapOptions = {
      zoom: 11,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    var map = new google.maps.Map(document.getElementById('map'), mapOptions);
    //Callout Content
    var contentString = 'Some address here..';
    //Set window width + content
    var infowindow = new google.maps.InfoWindow({
      content: contentString,
      maxWidth: 500
    });

    //Add Marker
    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      icon: imagePath,
      title: 'image title'
    });

    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
    });

    //Resize Function
    google.maps.event.addDomListener(window, "resize", function() {
      var center = map.getCenter();
      google.maps.event.trigger(map, "resize");
      map.setCenter(center);
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);


  // detail page booking form 
  var element = $('#bookingform');
  if(element.length > 0) 
  {
    var form = $('#bookingform');

    // Get the messages div.
    var formMessages = $('#form-messages');

    // Set up an event listener for the contact form.
    $(form).submit(function(event) {
        // Stop the browser from submitting the form.
        event.preventDefault();

        // Serialize the form data.
        var formData = $(form).serialize();

        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })

        .done(function(response) {
            // Make sure that the formMessages div has the 'success' class.
            $(formMessages).removeClass('error');
            $(formMessages).addClass('success');
            $(form).hide();

            // Set the message text.
            $(formMessages).text(response);

            $('#booking-form')[0].reset();
        })

        .fail(function(data) {
            // Make sure that the formMessages div has the 'error' class.
            $(formMessages).removeClass('success');
            $(formMessages).addClass('error');
            $(form).hide();

            // Set the message text.
            if (data.responseText !== '') {
                $(formMessages).text(data.responseText);
            } else {
                $(formMessages).text('Oops! An error occured and your message could not be sent.');
            }
        });

    });
  }

</script>
</html>