<?php $title = 'Contato - Ribeiro, Gomes & Costa'; include("header.php"); ?>
			<!--
			=============================================
				Theme Inner Banner
			==============================================
			-->
			<div class="theme-inner-banner" style="background: url(images/img/img15.jpg) no-repeat center; background-size:cover;">
				<div class="overlay">
					<div class="container">
						<h2 class="title">Contato</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>.</li>
							<li>Contato</li>
						</ul>
					</div>
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->




			<!--
			=====================================================
				Contact us
			=====================================================
			-->
			<div class="contact-us-page color-cinza">
				<div class="container">
					<div class="title">
						<h4>NÓS SEMPRE ESTAREMOS AQUI PARA TE AJUDAR</h4>
						<p>Nosso time de especialistas está ao seu dispor para proporcionar orientações e serviços jurídicos para priorizar os seus direitos. Sinta-se à vontade para nos ligar ou visitar o nosso escritório! Ficaremos felizes te receber.</p>
					</div>
					<div class="address">
						<ul class="clearfix">
							<li>
								<i class="flaticon-map"></i>
								<p>Rua Sete de Abril, 264<br> -  11º andar,salas 1106/1108 - São Paulo.</p>
							</li>
							<li>
								<i class="flaticon-clock"></i>
								<p>De segunda à sexta<br> - 9h às 18h</p>
							</li>
							<li>
								<i class="flaticon-phone-call"></i>
								<p><a href="tel:+551132597650">(11) 3259-7650</a><br>
								<a href="tel:+5511942339647">(11) 94233-9647</p></a>
							</li>
							<li>
								<i class="flaticon-email"></i>
								<a href="mailto:contato@ribeirogomesecosta.com.br"><p>contato@ribeiro<br>gomesecosta.com.br </p></a>
							</li>
						</ul>
					</div>
					<form action="inc/sendemail.php" class="theme-form-one form-validation" autocomplete="off">
						<div class="row">
							<div class="col-lg-4 col-sm-6 col-12"><input type="text" placeholder="Nome" name="name"></div>
							<div class="col-lg-4 col-sm-6 col-12"><input type="email" placeholder="Email" name="email"></div>
							<div class="col-lg-4 col-sm-6 col-12"><input type="text" placeholder="Contato" name="phone"></div>
							<div class="col-lg-12 col-sm-6 col-12"><input type="text" placeholder="sujeito" name="sub"></div>
							<div class="col-12"><textarea placeholder="Digite seu texto ..." name="message"></textarea></div>
							<div class="col-12"><button class="theme-button-one">Enviar</button></div>
						</div>
					</form>
				</div> <!-- /.container -->
				<!--Contact Form Validation Markup -->
				<!-- Contact alert -->
				<div class="alert-wrapper" id="alert-success">
					<div id="success">
						<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
						<div class="wrapper">
			               	<p>Sua mensagem foi enviada com sucesso.</p>
			             </div>
			        </div>
			    </div> <!-- End of .alert_wrapper -->
			    <div class="alert-wrapper" id="alert-error">
			        <div id="error">
			           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
			           	<div class="wrapper">
			               	<p>Desculpa, algo deu errado, tente novamente.</p>
			            </div>
			        </div>
			    </div> <!-- End of .alert_wrapper -->
			</div> <!-- /.contact-us-page -->


			<!--
			=====================================================
				Google Map
			=====================================================
			-->
			<!-- Google Map -->
			<div class="google-map"><div class="map-canvas"></div></div>





			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<?php include 'footer.php'; ?>


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="vendor/jquery.2.2.3.min.js"></script>
		<!-- Popper js -->
		<script src="vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- Style-switcher  -->
		<script src="vendor/jQuery.style.switcher.min.js"></script>
		<!-- Camera Slider -->
		<script src='vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
	    <script src='vendor/Camera-master/scripts/jquery.easing.1.3.js'></script>
	    <script src='vendor/Camera-master/scripts/camera.min.js'></script>
	    <!-- menu  -->
		<script src="vendor/menu/src/js/jquery.slimmenu.js"></script>
		<!-- WOW js -->
		<script src="vendor/WOW-master/dist/wow.min.js"></script>
		<!-- owl.carousel -->
		<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script src="vendor/jquery.appear.js"></script>
		<script src="vendor/jquery.countTo.js"></script>
		<!-- Fancybox -->
		<script src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		<!-- Calendar js -->
		<script type="text/javascript" src="vendor/monthly-master/js/monthly.js"></script>
		<!-- Time picker -->
		<script type="text/javascript" src="vendor/time-picker/jquery.timepicker.min.js"></script>
		<!-- ui js -->
		<script type="text/javascript" src="vendor/jquery-ui/jquery-ui.min.js"></script>
		<!-- Validation -->
		<script type="text/javascript" src="vendor/contact-form/validate.js"></script>
		<script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>
		<!-- Google map js -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDc4IV5YWMKm0zEpQ_IfWpY5UISro94pdU"></script>
		<script src="vendor/sanzzy-map/dist/snazzy-info-window.min.js"></script>

		<!-- Theme js -->
		<script src="js/theme.js"></script>
		<script src="js/map-script.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
