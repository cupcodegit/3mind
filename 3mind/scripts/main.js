$(document).ready(function () {
    var txtOn = 'Envie uma mensagem, estamos online!'
    var txtOff = 'Envie uma mensagem, em breve responderemos.'
    var horaIni = '8:30'
    var horaFim = '18:30'
    var nomeImg = '3mind-wpp.png'
    var numeroWhatsapp = '5541988761105'
    var nomeEscritorio = '3MIND Marketing Jurídico'

    var txtMsgHora;

    horaIni = horaIni.split(":");
    horaFim = horaFim.split(":");

    var d = new Date();
    var horaIni = new Date(d.getFullYear(), d.getMonth(), d.getDate(), horaIni[0], horaIni[1]);
    var horaFim = new Date(d.getFullYear(), d.getMonth(), d.getDate(), horaFim[0], horaFim[1]);

    if ((d > horaIni) && (d < horaFim)) {
        var txtMsgHora = txtOn;

    } else {
        var txtMsgHora = txtOff;
    }


    var box = '';

    box += '<div class="container-wa">';
    box += '<div class=card>';
    box += '<div class="banner-header">';
    box += '<p class="texto-investio-branco" style="color: white; text-align: center; font-size: 16px;">' + txtMsgHora + '</p>';
    box += '<p></p>';
    box += '<p></p>';
    box += '</div>';
    box += '<div class="banner-body">';
    box += '<div class="card-atendente">';
    box += '<div class="dados-atendente">';
    box += '<div class="avatar">';

    box += '<img class="rounded-circle" style="width: 112px;" src="/images/' + nomeImg + '" />';
    box += '</div>';
    box += '<div class="informacoes">';
    box += '<span><b>' + nomeEscritorio + '</b></span><br>';
    box += '<span>Advocacia</span>';
    box += '</div>';
    box += '</div>';
    box += '<div class="botao-atendente">';
    box += '<a style="color:white!important;" class="btn" href="https://api.whatsapp.com/send?phone=' + numeroWhatsapp + '" target="_blank">';
    box += '<i class="fa fa-whatsapp"></i>';
    box += '<span class="texto-investio-branco"> WhatsApp</span>';
    box += '</a>';
    box += '</div>';
    box += '</div>';
    box += '</div>';
    box += '</div>';
    box += '<div class="floating-button">';
    box += '<i style="left: 1px;" class="fa fa-whatsapp icon wa"></i>';
    box += '<i class="fa fa-times icon close" style="color: white;     left: -1px;"></i>';
    box += '</div>';
    box += '</div>';


    $("body").append(box)
    $(".floating-button").click(function () {
        $(this).closest('.container-wa').toggleClass('is-opened');
    })





    console.log(window.Width);

    if (window.innerWidth < 600) {
        $(".client-carousel").owlCarousel({
            loop: !0,
            items: 2,
            autoplay: !0,
            dots: !1
        })
    } else {
        $(".client-carousel").owlCarousel({
            loop: !0,
            items: 4,
            autoplay: !0,
            dots: !1
        })
    }



});

$(function (e) {
    "use strict";
    e(window).load(function () {
        e(".page-loader").fadeOut("slow")
    }), e(window).on("scroll resize", function () {
        e(window).scrollTop() >= 75 && (e("body").addClass("secondNav"), e(".scroll-to-top").css("bottom", "0px")), e(window).scrollTop() < 75 && (e("body").removeClass("secondNav"), e(".scroll-to-top").css("bottom", "-50px"))
    }), e(".scroll-to-top", "footer").on("click", function () {
        return e("html, body").animate({
            scrollTop: 0
        })
    }), e(".counter").counterUp({
        delay: 10,
        time: 1e3
    }), smoothScroll.init({
        offset: 50
    }), e(".anim").waypoint({
        handler: function () {
            var o, t = this.element;
            o = e(t).data("animation"), o = "animated " + o, e(t).addClass(o)
        },
        offset: "60%"
    }), e(".open-nav-button").on("click", function () {
        var o;
        o = e(this).data("clicks"), o ? (e(".main-menu").removeClass("animated fadeIn"), e(".main-menu").css("display", "none")) : (e(".main-menu").css("display", "block"), e(".main-menu").addClass("animated fadeIn")), e(this).data("clicks", !o)
    }), e(".typed").typed({
        strings: ["ThemeForest", "WordPress", "Web Design", "Graphic Design"],
        typeSpeed: 100,
        backDelay: 1e3,
        loop: !0,
        loopCount: !1
    }), e(".chart").easyPieChart({
        barColor: "#47b475",
        scaleColor: !1,
        lineCap: "square",
        size: 150
    }), e(".pageTitleHero").revolution({
        sliderType: "hero",
        sliderLayout: "fullwidth",
        dottedOverlay: "none",
        delay: 9e3,
        responsiveLevels: [1240, 1024, 778, 480],
        visibilityLevels: [1240, 1024, 778, 480],
        gridwidth: [1170, 1024, 778, 480],
        gridheight: [400, 400, 300, 300],
        lazyType: "none",
        shadow: 0,
        spinner: "off",
        autoHeight: "off",
        disableProgressBar: "on",
        hideThumbsOnMobile: "off",
        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        debugMode: !1,
        parallax: {
            type: "scroll"
        }
    }), e(".handle").on("click", function () {
        var o;
        o = e(this).data("clicks"), o ? e(".switcher").css("left", "-200px") : e(".switcher").css("left", "0px"), e(this).data("clicks", !o)
    }), e(".color").on("click", function () {
        var o;
        o = e(this).data("color-class"), e("head").append("<link rel='stylesheet' href='styles/" + o + ".css' type='text/css'>")
    }), e(".word-rotator-footer", "#footer").Morphext({
        animation: "fadeIn",
        separator: ",",
        speed: 4e3
    })
});
