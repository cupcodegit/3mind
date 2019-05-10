<?php $title = 'Contato - Tinelli Ferrarini'; include("head.php"); ?>
    <!-- Start Hero Area -->
    <div class="hero-area">
       	<div id="contact-map"></div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="container">
                <div class="shadow-block contact-info-block">
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <form method="post" id="contactform" name="contactform" class="contact-form clearfix" action="mail/contact.php">
                        		<h4>Entre em contato com o escritório</h4>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <label>Seu nome (obrigatório)</label>
                                        <input type="text" id="name" name="name" class="form-control input-lg">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label>Seu e-mail (obrigatório)</label>
                                        <input type="email" id="email" name="email" class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <label>Seu telefone (obrigatório)</label>
                                        <input type="text" id="phone" name="phone" class="form-control input-lg">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label>Seu endereço</label>
                                        <input type="text" id="address" name="address" class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Sua mensagem</label>
                                        <textarea class="form-control input-lg" id="comments" name="comments" rows="6"></textarea>

                                        <button type="submit" id="btn-enviar" name="submit" class="btn btn-primary btn-lg">Enviar contato</button>
                                    </div>
                                </div>
                            </form>
                            <div class="clearfix"></div>
                            <div id="message"></div>
                        </div>
                        <div class="col-md-5 col-sm-5">
                        	<div class="accent-bg parallax-light padding-all40">
                            	<h4>Escritório</h4>
                                <span class="label label-info">Endereço</span>
                            	<p>Rua Peru, 636 - Sala 811<br>Vila Frezzarim - Americana/SP</p>
                                <br>
                                <span class="label label-info">WhatsApp</span>
                            	<p><i class="fa fa-whatsapp"></i> (19) 9 9951 2096<br>
									<i class="fa fa-phone"></i> (19) 3013 0781</p>
                                <br>
                                <span class="label label-info">E-mail</span>
                                <p><em class="fa fa-envelope"></em> contato@tinelliferrarini.com.br </p>
                                <ul class="social-icons">
                                  <li class="facebook"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="alert alert-success" style="display: none;">
                	<p><i class="fa fa-info-circle"></i> Sua mensagem foi enviada com sucesso.</p>
                </div>
            </div>
        </div>
  	</div>
    <!-- Site Footer -->
	<?php include 'footer.php'; ?>
	<script src="js/jquery-2.2.3.min.js"></script> <!-- Jquery Library Call -->
<script src="vendor/magnific/jquery.magnific-popup.min.js"></script> <!-- Maginific Popup Plugin -->
<script src="js/ui-plugins.js"></script> <!-- UI Plugins -->
<script src="js/helper-plugins.js"></script> <!-- Helper Plugins -->
<script src="vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel -->
<script src="js/bootstrap.js"></script> <!-- UI -->
<script src="js/init.js"></script> <!-- All Scripts -->
<script src="vendor/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
	<script type="text/javascript">
	// When the window has finished loading create our google map below
	google.maps.event.addDomListener(window, 'load', init);

	function init() {
		// Basic options for a simple Google Map
		// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
		var mapOptions = {
			// How zoomed in you want the map to start at (always required)
			zoom: 15,

			scrollwheel: false,
			// The latitude and longitude to center the map (always required)
			center: new google.maps.LatLng(-22.7509691,-47.3431544), // Tinelli Ferrarini

			// How you would like to style the map.
			// This is where you would paste any style found on Snazzy Maps.
			styles: [{"featureType":"road","stylers":[{"hue":"#5e00ff"},{"saturation":-79}]},{"featureType":"poi","stylers":[{"saturation":-78},{"hue":"#6600ff"},{"lightness":-47},{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"lightness":22}]},{"featureType":"landscape","stylers":[{"hue":"#6600ff"},{"saturation":-11}]},{},{},{"featureType":"water","stylers":[{"saturation":-65},{"hue":"#1900ff"},{"lightness":8}]},{"featureType":"road.local","stylers":[{"weight":1.3},{"lightness":30}]},{"featureType":"transit","stylers":[{"visibility":"simplified"},{"hue":"#5e00ff"},{"saturation":-16}]},{"featureType":"transit.line","stylers":[{"saturation":-72}]},{}]
		};

		// Get the HTML DOM element that will contain your map
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById('contact-map');

		// Create the Google Map using our element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);

		// Let's also add a marker while we're at it
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(-22.7509691,-47.3431544),
			map: map,
			title: 'Tinelli Ferrarini'
		});
	}
</script>
</body>
</html>
