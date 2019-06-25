<?php $title = 'Sobre nós - penamasi'; include("header.php"); ?>
			<!--
			=============================================
				Theme Inner Banner
			==============================================
			-->
			<div class="inner-banner">
				<div class="overlay">
					<div class="container clearfix">
						<h2>Contato</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>/</li>
							<li>Contato</li>
						</ul>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.inner-banner -->


			<!--
			=============================================
				Contact Us
			==============================================
			-->
			<div class="contact-us">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-12">
							<div class="contact-us-form">
								<form action="inc/sendemail.php" class="form-validation form-styl-two" autocomplete="off">
									<div class="row">
										<div class="col-sm-6 col-12"><input type="text" placeholder="Nome" name="name"></div>
										<div class="col-sm-6 col-12"><input type="email" placeholder="Telefone" name="email"></div>
									</div>
									<input type="text" placeholder="Assunto" name="sub">
									<textarea placeholder="Mensagem" name="message"></textarea>
									<input type="submit" value="Enviar">
								</form>
							</div> <!-- /.contact-us-form -->
						</div> <!-- /.col- -->
						<div class="col-lg-5 col-12">
							<div class="contact-address">
								<h2>Estamos disponíveis para esclarecer suas dúvidas e agendar uma reunião para entender melhor seu caso.</h2>
								<a href="tel:+5519991780117" class="tran3s"> (19) 99178-0117</a>
								<ul>
									<li><a href="https://www.facebook.com/penamasiadvocaciaeconsultoria/" class="tran3s" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="https://www.instagram.com/rogeriopenamasi/" class="tran3s" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="https://www.linkedin.com/in/rogerio-pena-masi-8a810629/" class="tran3s" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div> <!-- /.contact-address -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.conatiner -->

				<!--Contact Form Validation Markup -->
				<!-- Contact alert -->
				<div class="alert-wrapper" id="alert-success">
					<div id="success">
						<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
						<div class="wrapper">
			               	<p>Your message was sent successfully.</p>
			             </div>
			        </div>
			    </div> <!-- End of .alert_wrapper -->
			    <div class="alert-wrapper" id="alert-error">
			        <div id="error">
			           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
			           	<div class="wrapper">
			               	<p>Sorry!Something Went Wrong.</p>
			            </div>
			        </div>
			    </div> <!-- End of .alert_wrapper -->
			</div> <!-- /.contact-us -->

			<!-- Google Map -->
			<div class="map-canvas"></div>




			<!--
			=====================================================
				Footer
			=====================================================
			-->
		<?php include 'footer.php'; ?>


		<!-- Optional JavaScript _____________________________  -->

		<!-- Popper js -->
		<script src="vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- Language Stitcher -->
		<script src="vendor/language-switcher/jquery.polyglot.language.switcher.js"></script>
	    <!-- Mega menu  -->
		<script src="vendor/bootstrap-mega-menu/js/menu.js"></script>
		<!-- WOW js -->
		<script src="vendor/WOW-master/dist/wow.min.js"></script>
		<!-- owl.carousel -->
		<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script src="vendor/jquery.appear.js"></script>
		<script src="vendor/jquery.countTo.js"></script>
		<!-- Fancybox -->
		<script src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		<!-- Validation -->
		<script type="text/javascript" src="vendor/contact-form/validate.js"></script>
		<script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>
		<!-- Google map js -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjQLCCbRKFhsr8BY78g2PQ0_bTyrm_YXU" type="text/javascript"></script>
		<script src="vendor/sanzzy-map/dist/snazzy-info-window.min.js"></script>

		<!-- Theme js -->
		<script src="js/theme.js"></script>
		<script src="js/map-script.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
