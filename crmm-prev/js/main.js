$(document).ready(function () {

    //Função para montar o Menu
    fnMontaBlocos("_menu.html", "header");

    //Função para montar o Footer
    fnMontaBlocos("_footer.html", "#footer");

    //Função para criar CTA Whatsapp
    txtOn = "Estamos Online, envie uma mensagem para nós!";
    txtOff = "Envie uma mensagem para nós, em breve um especialista estará lhe respondendo.";
    horaIni = "08:00";
    horaFim = "18:00";
    nomeImg = "logo-wpp.png";
    numeroWhatsapp = "5541991684245";
    nomeEscritorio = "CRMM Advogados";


    fnContatoWhatsapp(txtOn, txtOff, horaIni, horaFim, nomeImg, numeroWhatsapp, nomeEscritorio);

    setTimeout( function(){
        $("body").append("<script src='/js/theme.js'></script>")
    }, 600)


});