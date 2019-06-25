$(document).ready(function () {
    fnConsultaBlog()
})

function fnDefineMes(mes) {
    var mes = mes + 1;
    if (mes === 1) {
        mes = "Janeiro"
    } else if (mes === 2) {
        var mes = "Fevereiro";
    } else if (mes === 3) {
        var mes = "Março";
    } else if (mes === 4) {
        var mes = "Abril";
    } else if (mes === 5) {
        var mes = "Maio";
    } else if (mes === 6) {
        var mes = "Junho";
    } else if (mes === 7) {
        var mes = "Julho";
    } else if (mes === 8) {
        var mes = "Agosto";
    } else if (mes === 9) {
        var mes = "Setembro";
    } else if (mes === 10) {
        var mes = "Outubro";
    } else if (mes === 11) {
        var mes = "Novembro";
    } else if (mes === 12) {
        var mes = "Dezembro";
    }

    return mes;

}

function fnConsultaBlog() {
    $.ajax({
        url: "/blog/wp-json/wp/v2/posts",
        type: "GET",
        success: function (data) {
            var contador = 0;

            $.each(data, function () {

                var dataDia = data[contador].date;
                var d = new Date(dataDia);
                var ano = d.getFullYear();
                var mes = d.getMonth();
                var mes = fnDefineMes(mes);



                console.log(mes, ano)
                var qtdcategorias = data[contador].categories.length;

                for (i = 0; i < qtdcategorias; i++) {
                    var categoria = data[contador].categories[i];

                    if (categoria === 66) {
                        var qtdArtigo = 0;
                        if (qtdArtigo < 3) {

                            var linkimg = data[contador].better_featured_image.source_url;
                            var nomeartigo = data[contador].title.rendered;
                            var linkartigo = data[contador].link;
                            var leiamais = data[contador].excerpt.rendered;
                            var resul = '<div class="blog_post_preview format-quote has_post_thumb">';
                            resul += '<div class="item_wrapper">';
                            resul += '<div class="blog_content">';
                            resul += '<div class="blog_post_media">';
                            resul += '<a href="' + linkartigo + '">';
                            resul += '<img src="' + linkimg + '" alt="" />';
                            resul += '</a>';
                            resul += '</div>';
                            resul += '<div class="featured_post_info ">';
                            resul += '<div class="listing_meta upper_text"><span>' + mes + ' ' + ano + '</span>';
                            resul += '</div>';
                            resul += '<h4 class="blogpost_title"><a href="' + linkartigo + '">' + nomeartigo + '</a></h4>';
                            resul += '<p><a style="color: #544640;"href="'+linkartigo+'">' + leiamais + '</a></p>';
                            resul += '</div>';
                            resul += '</div>';
                            resul += '</div>';
                            resul += '</div>';
                            $("#postDestaque").append(resul);
                            qtdArtigo++
                        } else {
                            return false;
                        }

                    }

                }
                contador++
            });

            var contadorOrig = 0;
            var qtdArtigo2 = 0;
            $.each(data, function () {
                var dataDia = data[contadorOrig].date;
                var d = new Date(dataDia);
                var ano = d.getFullYear();
                var mes = d.getMonth();
                var mes = fnDefineMes(mes);

                console.log(mes, ano)
                if (qtdArtigo2 < 2) {

                    var linkimg = data[contadorOrig].better_featured_image.source_url;
                    var nomeartigo = data[contadorOrig].title.rendered;
                    var linkartigo = data[contadorOrig].link;
                    var leiamais = data[contadorOrig].excerpt.rendered;
                    var resul = '<div class="blog_post_preview format-quote has_post_thumb">';
                    resul += '<div class="item_wrapper">';
                    resul += '<div class="blog_content">';
                    resul += '<div class="blog_post_media">';
                    resul += '<a href="' + linkartigo + '">';
                    resul += '<img src="' + linkimg + '" alt="" />';
                    resul += '</a>';
                    resul += '</div>';
                    resul += '<div class="featured_post_info ">';
                    resul += '<div class="listing_meta upper_text"><span>' + mes + ' ' + ano + '</span>';
                    resul += '</div>';
                    resul += '<h4 class="blogpost_title"><a href="' + linkartigo + '">' + nomeartigo + '</a></h4>';
                    resul += '<p><a style="color: #544640;"href="'+linkartigo+'">' + leiamais + '</a></p>';
                    resul += '</div>';
                    resul += '</div>';
                    resul += '</div>';
                    resul += '</div>';
                    $("#postBlog").append(resul);
                    qtdArtigo2++
                } else {
                    return false;
                }

                contadorOrig++
            });

        }

    });

}