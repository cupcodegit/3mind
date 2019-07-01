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
        url: "http://www.tinelliferrarini.com.br/blog/wp-json/wp/v2/posts",
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
                var resul = '<li class="blog-grid-item grid-item blog-item col-md-4 col-sm-4 format-standard">';
                resul += '<a href="' + linkartigo + '" class="media-box"><img src="' + linkimg + '" alt="' + nomeartigo + '"></a>';
                resul += '<div class="grid-item-inner">';
                resul += '<div class="post-item-meta">';
                resul += '<i class="fa fa-clock-o"></i>' + dia + ' ' + mes + ' ,' + ano;
                resul += '</div>';
                resul += '<div class="meta-data"><a href="' + linkartigo + '">Blog</a></div>';
                resul += '<h4><a href="' + linkartigo + '">' + nomeartigo + '</a></h4>';
                resul += '<span>' + leiamais + '</span>';
                resul += '<a href="' + linkartigo + '" class="btn btn-default btn-ghost btn-dark btn-sm">Continue lendo</a>';
                resul += '</div>';
                resul += '</li>';
                $('#artigosBlog').append(resul);



            }


        }

    });

}
