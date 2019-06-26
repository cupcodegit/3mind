<?php $title = 'Márcio Ferezin Advocacia - Contato'; include("header.php"); ?>
<!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
    <div class="bg-section">
        <img src="images/page-titles/7.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <div class="title title-6 text-center">
                    <div class="title--heading">
                        <h1>Contato</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="sobre.php">Sobre nós</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contato</li>
                    </ol>
                </div>
                <!-- .title end -->
            </div>
            <!-- .col-lg-8 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->


<!-- Contact #1
============================================= -->
<section id="contact1" class="contact contact-1 pt-110 pb-110 text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading heading-2 mb-50 text--center">
                    <p class="heading--subtitle">Gostaria de tirar alguma dúvida?</p>
                    <h2 class="heading--title">Entre em contato conosco</h2>
                    <p class="heading--desc mb-0">Será um prazer ajuda-lo!.</p>
                </div>
            </div>
            <!-- .col-lg-6 end -->
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                <?php include 'box-contato.php'; ?>
                <!-- form end -->
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #contact1 end -->
<!-- Google maps
============================================= -->
<section class="google-maps pb-0 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-xs-12  col-sm-12  col-md-12">
                <script src="http://maps.google.com/maps/api/js?key=AIzaSyDc4IV5YWMKm0zEpQ_IfWpY5UISro94pdU"></script>
                <div id="googleMap" class="googleMap" data-map-address="Rua Batataes, 46 - CONJ 31 e 32 - Jardim Paulista, São Paulo - SP" data-map-zoom="18" data-map-marker-icon="images/gmap/maker.png" data-map-type="ROADMAP" data-map-info="Márcio Ferezin<br>Advocacia" style="width:100%;height:490px;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Info
============================================= -->
<section id="contactInfo" class="contact contact-info bg-white text--center pt-90 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="contact--info">
                    <h3>Nosso endereço</h3>
					<p>Rua Itápolis, 1468 - Pacaembu</p>
					<p>Cep 01245- 000 - São Paulo/S</p>
                    <a class="link--styled" href="https://www.google.com/maps/dir//R.+Batataes,+46+-+CONJ+31+e+32+-+Jardim+Paulista,+São+Paulo+-+SP,+01423-010/@-23.5725755,-46.6569101,17z/data=!4m17!1m7!3m6!1s0x94ce59c197919ab5:0xdac332e430a38d30!2sR.+Batataes,+46+-+CONJ+31+e+32+-+Jardim+Paulista,+São+Paulo+-+SP,+01423-010!3b1!8m2!3d-23.5725755!4d-46.6547214!4m8!1m0!1m5!1m1!1s0x94ce59c197919ab5:0xdac332e430a38d30!2m2!1d-46.6547214!2d-23.5725755!3e3"  target="_blank"><i class="fas fa-directions"></i> Rotas</a>
                </div>
            </div>
            <!-- .col-lg-4 end -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="contact--info">
                    <h3>Nosso e-mail</h3>
                    <p>contato@ferezin.adv.br</p>
                    <a class="link--styled" href="mailto:marcioferezin@gmail.com"><i class="fas fa-at"></i> Enviar um e-mail</a>
                </div>
            </div>
            <!-- .col-lg-4 end -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="contact--info">
                    <h3>Telefones</h3>
                    <p>(11) 3105-1909</p>
					<p>(11) 3101-7108</p>
                    <a class="link--styled" href="tel:+551131051909"><i class="fas fa-phone"></i> Ligar</a>
                </div>
            </div>
            <!-- .col-lg-4 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #contactInfo end -->

<!-- Footer #1
============================================= -->
<?php include 'footer.php'; ?>
<!-- Footer Scripts
============================================= -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/functions.js"></script>
</body>
</html>