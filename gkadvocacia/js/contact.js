var map;
if ($('#map').length > 0) {
    map = new GMaps({
        el: '#map',
        lat: -25.4342006,
        lng: -49.3028818,
        scrollwheel: false
    });

    map.addMarker({
        lat: -25.4342006,
        lng: -49.3028818,
        title: 'Garlet & Kalluf',
        infoWindow: {
            content: '<p>Rua Padre Anchieta, 2454 ∙ 3° Andar ∙ Sala 305 ∙ Bigorrilho ∙ Curitiba ∙ Paraná</p>'
        }
    });

	}
