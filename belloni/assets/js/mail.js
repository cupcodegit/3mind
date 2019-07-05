$(document).ready( function(){
    $(".gt3-contact-widget_label").click( function(){
        $(".gt3-contact-widget").toggleClass("open")
    })
})

$("#contact_submit").click(function () {
    "use strict";
    var nameValue = $("#Name").val();
    if (!nameValue.length) {
        $("#Name").css({
            "border": "1px solid red"
        });
        $("#Name").parent().find(".error_message").remove();
        $("#Name").parent().append("<div class='error_message'>Name is required</div>");
        return !1
    }
    if (nameValue.length < 1) {
        $("#Name").css({
            "border": "1px solid red"
        });
        $("#Name").parent().find(".error_message").remove();
        $("#Name").parent().append("<div class='error_message'>Name value should be at least 2</div>").show();
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
        $("#Email").parent().append("<div class='error_message'>Please entire a valid email.</div>").show();
        return !1
    }
    var WhatsappD = $("#WhatsappD").val();
    var messageValue = $("#Message").val();
    if (nameValue && emailValue) {
        $(".feedback_box").slideDown();
        $.ajax({
            url: '/mail/mail.php',
            data: {
                name: nameValue,
                email: emailValue,
                Whatsapp: WhatsappD,
                message: messageValue
            },
            method: 'POST',
            success: function (result) {
                "use strict";
                $(".show_result").append('<div class="result_message"><i class="far fa-check-circle"></i>Sua mensagem foi recebida, responderemos em até 1 dia útil</div>');
                $(".custom-38").css("display", "none");
                //$(".result_message").slideDown();
                $("#Name").val("");
                $("#Email").val("");
                $("#WhatsappD").val("");
                $("#Message").val("")
            }
        })
    }

});

$("#contact-side").click(function () {
            var messageValueSide = "Mensagem enviada Atraves do form lateral, sem mensagem."
            var nameValue = $("#NomeSide").val();
            var WhatsappSide = $("#Whatsapp").val();
            var EmailSide = $("#EmailSide").val();
            $.ajax({
                url: '/mail/mail.php',
                data: {
                    name: nameValue,
                    email: EmailSide,
                    Whatsapp: WhatsappSide,
                    message: messageValueSide
                },
                type: 'POST',
                success: function(){
                    $('#contact-side').css('display', 'none')
                    $("#sideform").empty().append('<div class="result_message" style="width: unset; margin-top: 33px;"><i class="far fa-check-circle"></i>Mensagem enviada com sucesso.</div>');
                }


            });
        });