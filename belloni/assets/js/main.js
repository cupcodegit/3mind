$(document).ready(function () {

    //Função para montar o Menu
    fnMontaBlocos("_menu.html", "#menuAppend");

    //Função para montar o Footer
    fnMontaBlocos("_footer.html", "#footer");

    //Função para criar CTA Whatsapp
    txtOn = "Estamos Online, envie uma mensagem para nós!";
    txtOff = "Envie uma mensagem para nós, em breve um especialista estará lhe respondendo.";
    horaIni = "09:30";
    horaFim = "18:30";
    nomeImg = "logo-wpp.jpg";
    numeroWhatsapp = "5541991684245";
    nomeEscritorio = "Belloni Advogados";


    fnContatoWhatsapp(txtOn, txtOff, horaIni, horaFim, nomeImg, numeroWhatsapp, nomeEscritorio);

    setTimeout( function(){
        $("body").append("<script src='assets/js/theme.js'></script>")
    }, 600)


});