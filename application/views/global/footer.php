  </body>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <script src='assets/js/jquery-1.10.2.min.js'></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src='assets/js/css3-animate-it.js'></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src='assets/js/jquery.newsTicker.min.js'></script>
    <script src='assets/js/owl.carousel.js'></script>
    <script src='assets/js/responsive-calendar.min.js'></script>
    
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


	//Partner Scroller
	var owl = $('#myPartners');
	owl.owlCarousel({
    items:10,
    loop:true,
    margin:50,
    autoplay:true,
    autoplayTimeout:1000,
    slideSpeed:5000,
    autoplayHoverPause:true
	});

	//News Ticker
	 var nt_example1 = $('#nt-example1').newsTicker({
                row_height: 80,
                max_rows: 4,
                duration: 4000,
            });

	//Side Fade Slider 
	$('.carousel-fade').carousel();

	//SDK Slider 
	// jQuery('#demo3').skdslider({delay:5000, animationSpeed: 2000,showNextPrev:false,showPlayButton:false,autoSlide:true,animationType:'fading'});
	// jQuery('#responsive').change(function(){
	// 		  $('#responsive_wrapper').width(jQuery(this).val());
	// 		  $(window).trigger('resize');
	// 		});
	
    </script>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".responsive-calendar").responsiveCalendar({
          time: '2015-11',
          // events: {
          //   "2015-04-30": {"number": 5, "url": "http://w3widgets.com/responsive-slider"},
          //   "2013-04-26": {"number": 1, "url": "http://w3widgets.com"}, 
          //   "2013-05-03":{"number": 1}, 
          //   "2013-06-12": {}}
        });
      });
      /**
 * Vertically center Bootstrap 3 modals so they aren't always stuck at the top
 */
$(function() {
    function reposition() {
        var modal = $(this),
            dialog = modal.find('.modal-dialog');
        modal.css('display', 'block');
        
        // Dividing by two centers the modal exactly, but dividing by three 
        // or four works better for larger screens.
        dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
    }
    // Reposition when a modal is shown
    $('.modal').on('show.bs.modal', reposition);
    // Reposition when the window is resized
    $(window).on('resize', function() {
        $('.modal:visible').each(reposition);
    });
});
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
      function initialize() {
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
</script>
</html>