$(document).ready(function () {
    fnConsultaBlog()
})

function fnDefineMes(mes) {
    var mes = mes + 1;
    if (mes === 1) {
        mes = "Jan"
    } else if (mes === 2) {
        var mes = "Fev";
    } else if (mes === 3) {
        var mes = "Mar";
    } else if (mes === 4) {
        var mes = "Abr";
    } else if (mes === 5) {
        var mes = "Mai";
    } else if (mes === 6) {
        var mes = "Jun";
    } else if (mes === 7) {
        var mes = "Jul";
    } else if (mes === 8) {
        var mes = "Ago";
    } else if (mes === 9) {
        var mes = "Set";
    } else if (mes === 10) {
        var mes = "Out";
    } else if (mes === 11) {
        var mes = "Nov";
    } else if (mes === 12) {
        var mes = "Dez";
    }

    return mes;

}

function fnConsultaBlog() {
    $.ajax({
        url: "/noticias/wp-json/wp/v2/posts",
        type: "GET",
        success: function (data) {

            for (i = 0; i < 3; i++) {
                var dataDia = data[i]["date"];
                var d = new Date(dataDia);
                var ano = d.getFullYear();
                var mes = d.getMonth();
                var dia = d.getDate();
                var mes = fnDefineMes(mes);
                var linkimg = data[i]["better_featured_image"]["source_url"];
                var leiamais = data[i]['excerpt']["rendered"];

                var nomeartigo = data[i].title.rendered;
                var linkartigo = data[i].link;
                var resul = '<div class="news-block col-lg-4 col-md-6 col-sm-12">';
                resul += '<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">';
                resul += '<div class="image">';
                resul += '<img src="' + linkimg + '" alt="" />';
                resul += '<div class="overlay-box">';
                resul += '<a href="' + linkartigo + '" data-fancybox="news" data-caption="" class="plus flaticon-plus"></a>';
                resul += '</div>';
                resul += '</div>';
                resul += '<div class="lower-content">';
                resul += '<ul class="post-meta">';
                resul += '<li><span class="fa fa-calendar"></span>' + mes + ' ' + ano + '</li>';
                resul += '</ul>';
                resul += '<h5><a href="' + linkartigo + '">' + nomeartigo + '</a></h5>';
                resul += '<a href="'+linkartigo+'" class="theme-btn btn-style-two">Ler artigo</a>';
                resul += '</div>';
                resul += '</div>';
                resul += '</div>';
                $("#blogArtigos").append(resul);



            }


        }

    });

}
