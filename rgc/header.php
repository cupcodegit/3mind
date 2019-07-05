<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#151515">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#151515">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#151515">
		<title><?php if (isset($title)) {echo $title;} else {echo "Ribeiro, Gomes & Costa";} ?></title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<!-- Theme-Color css -->
		<link rel="stylesheet" id="jssDefault" href="css/color.css">
		<!-- FontAwesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>

			<!-- ==================== Style Switcher ==================== -->
			<div class="switcher">
				<!-- Switcher button -->
				<div class="switch-btn">
					<button><i class="fa fa-cog fa-spin"></i></button>
				</div>

				<!-- switcher body -->
				<div class="switch-menu">
					<h5 class="title">Style Switcher</h5>
					<!-- Theme color changer -->
					<div class="switcher-container">
						<h5>Color Skins</h5>
						<ul id="styleOptions" title="Switch Color" class="clearfix">
							<li><a href="javascript: void(0)" data-theme="color" class="color1"></a></li>
							<li><a href="javascript: void(0)" data-theme="color-2" class="color2"></a></li>
							<li><a href="javascript: void(0)" data-theme="color-3" class="color3"></a></li>
							<li><a href="javascript: void(0)" data-theme="color-4" class="color4"></a></li>
							<li><a href="javascript: void(0)" data-theme="color-5" class="color5"></a></li>
						</ul>
					</div>
				</div> <!-- /switch-menu -->
			</div> <!-- /.switcher -->



			<!--
			=============================================
				Theme Header
			==============================================
			-->
			<header class="theme-main-header theme-header-one">
				<div class="top-header">
					<div class="container clearfix">
						<p class="float-left text-bottom email-us"><a href="mailto:contato@ribeirogomesecosta.com.br"><i class="fa fa-envelope">
						</i> contato@ribeirogomesecosta.com.br</a>
						<p class="float-right call-us"><a href="https://api.whatsapp.com/send?phone=5511942339647" target="_blank"><i aria-hidden="true" class="fab fa-whatsapp"></i> (11) 94233-9647</a></p>
						<p class="float-right call-us p-d-20"><a href="tel:+551132597650"><i class="fa fa-phone"></i> (11 ) 3259-7650</a></p>
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="inner-wrapper clearfix">
							<!-- ================= Logo ==================== -->
							<div class="logo"><a href="index.php"><img src="images/logo/logo.png" alt="logo"></a></div>
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-right">
					   			<nav id="mega-menu-holder" class="clearfix">
								   <ul class="clearfix">
									    <li><a href="index.php">Home</a>
									    </li>
									    <li><a href="sobre-nos.php">Sobre nós</a>
									    </li>
									    <li><a href="areas.php">Áreas de atuação</a>
									    </li>
									    <li><a href="/blog">Notícias</a>
									    </li>
									    <li><a href="contato.php">Contato</a>
									    </li>
										<li>
									</ul>
								</nav> <!-- /#mega-menu-holder -->
					   		</div> <!-- /.menu-wrapper -->
						</div> <!-- /.inner-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-menu-wrapper -->
			</header> <!-- /.theme-main-header -->
