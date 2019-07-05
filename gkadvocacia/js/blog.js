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
        url: "http://www.gkadvocacia.com/blog/wp-json/wp/v2/posts",
        type: "GET",
        success: function (data) {

            for (i = 0; i < 7; i++) {
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
                var resul = '<div class="row p-b-100">';
                resul += '<div class="col-md-6 col-sm-6 col-xs-12">';
                resul += '<div class="latest_box_image">';
                resul += '<img src="' + linkimg + '" alt="' + nomeartigo + '">';
                resul += '</div>';
                resul += '</div>';
                resul += '<div class="col-md-6 col-sm-6 col-xs-12 text-center">';
                resul += '<div class="latest_box_5">';
                resul += '<span>' + dia + ' de ' + mes + ', ' + ano + '</span>';
                resul += '<h2><a href="' + linkartigo + '">' + nomeartigo + '</a></h2>';
                resul += '<p>' + leiamais + '</p>';
                resul += '<a href="' + linkartigo + '"><i class="fa fa-plus"></i> Continue lendo</a>';
                resul += '</div>';
                resul += '</div>';
                resul += '</div>';
                $('#artigosBlog').append(resul);



            }


        }

    });

}
