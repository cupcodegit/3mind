<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">
<head>
<!-- Document Meta
    ============================================= -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--IE Compatibility Meta-->
<meta name="author" content="zytheme"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Página do escritório de advocacia de Márcio Ferezin Advocacia">
<link href="images/favicon/favicon.png" rel="icon">

<!-- Fonts
    ============================================= -->
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800%7CRoboto:300i,400,400i,500,500i,700" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!-- Stylesheets
    ============================================= -->
<link href="css/external.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<!-- RS5.0 Main Stylesheet -->
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

<!-- Document Title
    ============================================= -->
<title><?php if (isset($title)) {echo $title;}
else {echo "Márcio Ferezin Advocacia";} ?></title>
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "(+5511) 969107420", // WhatsApp number
            call_to_action: "Gostaria de uma consultoria?", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
</head>
<body>
<div class="preloader">
	<div class="reverse-spinner"></div>
</div><!-- Document Wrapper
	============================================= -->
<div id="wrapper" class="wrapper clearfix">
	<header id="navbar-spy" class="header header-1 header-transparent">
		<nav id="primary-menu" class="navbar navbar-expand-lg navbar-light navbar-bordered">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img class="logo logo-light" src="images/logo/logo-light.png" alt="Márcio Ferezin Advocacia">
					<img class="logo logo-dark" src="images/logo/logo-dark.png" alt="Márcio Ferezin Advocacia">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbarContent">
					<ul class="navbar-nav ml-auto">
						<li>
							<a href="index.php" class="menu-item">Home</a>
						</li>
						<!-- Pages Menu -->
						<li>
							<a href="sobre.php" class="menu-item">Sobre nós</a>
						</li>
						<li>
							<a href="areas.php" class="menu-item">Áreas de atuação</a>
						</li>
						<li>
							<a href="blog" class="menu-item">Notícias</a>
						</li>
						<li>
							<a href="contato.php" class="menu-item">Contato</a>
						</li>
						<!-- li end -->
					</ul>
					<div class="module-container">
					<!-- Module Contact  -->
						<div class="module module-consultation">
							<a href="whatsapp://send?text=Olá!&phone=+5511969107420" class="btn"><i class="fab fa-whatsapp"></i> (11) 96910-7420 </a>
						</div>				<!-- Module Social -->
						<div class="module module-social">
							<a href="https://www.facebook.com/mferezinadvocacia/"><i class="fab fa-facebook-square"></i>
							<a href="#"><i class="fab fa-instagram"></i>
						</div><!-- .module-social end -->
						<!-- Module Search -->
						<div class="module module-search">
							<!--div class="module-icon search-icon">
								<i class="lnr lnr-magnifier"></i>
								<span class="title">Procurar</span>
							</div-->
							<div class="module-content module-fullscreen module--search-box">
								<div class="pos-vertical-center">
									<div class="container">
										<div class="row">
											<div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
												<form class="form-search">
													<input type="text" class="form-control" placeholder="Procurar...">
												</form><!-- .form-search end -->
											</div><!-- .col-md-8 end -->
										</div><!-- .row end -->
									</div><!-- .container end -->
								</div>
								<a class="module-cancel" href="#"><i class="fa fa-close"></i></a>
							</div>
						</div><!-- .module-search end -->
					</div>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
	</header>
