$("#contact_submit").click(function () {
    "use strict";
    var nameValue = $("#Name").val();
    if (!nameValue.length) {
        $("#Name").css({
            "border": "1px solid red"
        });
        $("#Name").parent().find(".error_message").remove();
        $("#Name").parent().append("<div class='error_message'>Nome é Obrigatório</div>");
        return !1
    }
    if (nameValue.length < 1) {
        $("#Name").css({
            "border": "1px solid red"
        });
        $("#Name").parent().find(".error_message").remove();
        $("#Name").parent().append("<div class='error_message'>Seu nome precisa de no mínimo duas letras.</div>").show();
        return !1
    }
    var emailValue = $("#Email").val();
    var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    if (!emailValue) {
        $("#Email").css({
            "border": "1px solid red"
        });
        $("#Email").parent().find(".error_message").remove();
        $("#Email").parent().append("<div class='error_message'>Email is required</div>").show();
        return !1
    }
    if (!testEmail.test(emailValue)) {
        $("#Email").css({
            "border": "1px solid red"
        });
        $("#Email").parent().find(".error_message").remove();
        $("#Email").parent().append("<div class='error_message'>Informe um endereço de e-mail válido.</div>").show();
        return !1
    }
    var assunto = $("#Assunto").val();
    var messageValue = $("#Mensagem").val();
    if (nameValue && emailValue) {
        $(".feedback_box").slideDown();
        $.ajax({
            url: 'assets/mail/mail.php',
            data: {
                name: nameValue,
                email: emailValue,
                assunto: assunto,
                mensagem: messageValue
            },
            method: 'POST',
            success: function (result) {
                "use strict";
                $(".show_result").append('<div class="result_message"><i class="far fa-check-circle"></i> Agradecemos o seu contato, retornaremos em breve!</div>');
                $(".custom-38").css("display", "none");
                //$(".result_message").slideDown();
                $("#Name").val("");
                $("#Email").val("");
                $("#Assunto").val("");
                $("#Mensagem").val("")
            }
        })
    }

});
$("#sideSubmit").click(function () {
    "use strict";
    var nameValue = $("#sideNome").val();
    var assunto = $("#sideAssunto").val();
    var sideTelefone = $("#sideTelefone").val();

    $.ajax({
        url: 'assets/mail/side.php',
        data: {
            name: nameValue,
            assunto: assunto,
            telefone: sideTelefone
        },
        method: 'POST',
        success: function (result) {
            "use strict";
            $("#show_result_Side").append('<div class="result_message"><i class="far fa-check-circle"></i> Agradecemos o seu contato, retornaremos em breve!</div>');
            //$(".result_message").slideDown();
            $("#sideNome").val("");
            $("#sideAssunto").val("");
            $("#sideTelefone").val("");
        }
    })





});





$("#submitTrabalhe").click(function () {
    "use strict";
    var nome = $("#nome").val();
    var email = $("#email").val();
    var horario = $("#horario").val();
    var arquivo = $("#arquivo").val();
    var cargo = $("#cargo").val();

    $.ajax({
        url: 'assets/mail/anex.php',
        data: {
            nome: nome,
            email: email,
            horario: horario,
            arquivo: arquivo,
            cargo: cargo
        },
        method: 'POST',
        success: function (result) {
            "use strict";
            $("#show_result_Side").append('<div class="result_message"><i class="far fa-check-circle"></i> Agradecemos o seu contato, retornaremos em breve!</div>');
            //$(".result_message").slideDown();
            $("#sideNome").val("");
            $("#sideAssunto").val("");
            $("#sideTelefone").val("");
        }
    });

});