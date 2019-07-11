//Função para Realizar a montagem de um bloco em várias páginas.
function fnMontaBlocos(nomeArq, element) {
    $.get(document.URL.split('/')[0] + "//" + document.URL.split('/')[2] + "/" + nomeArq, function (data) {
        $(element).prepend(data);

    });

}

//Função para criar CTA de Whatsapp.
function fnContatoWhatsapp(txtOn, txtOff, horaIni, horaFim, nomeImg, numeroWhatsapp, nomeEscritorio) {
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
    box += '<div class="labelPrincipal">Gostaria de uma orientação Jurídica?</div>';
    box += '<div class=card>';
    box += '<div class="banner-header">';
    box += '<p class="texto-investio-branco" style="color: white; text-align: center; margin-bottom: -14px;">' + txtMsgHora + '</p>';
    box += '<p></p>';
    box += '<p></p>';
    box += '</div>';
    box += '<div class="banner-body">';
    box += '<div class="card-atendente">';
    box += '<div class="dados-atendente">';
    box += '<div class="avatar">';
    box += '<img class="rounded-circle" style="width: 112px;" src="/assets/img/' + nomeImg + '" />';
    box += '</div>';
    box += '<div class="informacoes">';
    box += '<span><b>' + nomeEscritorio + '</b></span><br>';
    box += '<span>Advocacia</span>';
    box += '</div>';
    box += '</div>';
    box += '<div class="botao-atendente">';
    box += '<a class="btn" href="https://api.whatsapp.com/send?phone=' + numeroWhatsapp + '" target="_blank">';
    box += '<i class="fab fa-whatsapp"></i>';
    box += '<span class="texto-investio-branco">WhatsApp</span>';
    box += '</a>';
    box += '</div>';
    box += '</div>';
    box += '</div>';
    box += '</div>';
    box += '<div class="floating-button">';
    box += '<i class="fab fa-whatsapp icon wa"></i>';
    box += '<i class="fa fa-times icon close" style="color: white;     left: -8px;"></i>';
    box += '</div>';
    box += '</div>';
    $("body").append(box)
    $(".close").click(function(){
        $('.labelPrincipal').css("display", "fixed");        
    })
    $(".floating-button").click(function () {
        $(this).closest('.container-wa').toggleClass('is-opened');        
        $('.labelPrincipal').css("display", "none");
    })

}