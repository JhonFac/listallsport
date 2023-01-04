function contenidoFutbol() {
    vista = "ok";

    $.ajax({
        url: 'https://apptrafic.com/scraping/RojaDirecta/scraping.php',
        type: 'POST',
        cache: 'false',
        data: { vista: vista }
    }).done(function (data) {
        var datosObtenidosDiv = JSON.parse(JSON.stringify(data));
        var Cantidad = datosObtenidosDiv.length;
        let TableEventos = ''


        for (var i = 0; i < Cantidad; i++) {
            TableEventos += '<div class="pricing-table">';
            TableEventos += "<tr><td> <img src='images/icon_reloj.png' alt='' width='20'> &nbsp;&nbsp;" + datosObtenidosDiv[i]['hora'] + "</td>";
            TableEventos += "<td> <strong class='text-white'> " + datosObtenidosDiv[i]['evento'] + "</strong></td>";
            TableEventos += "<td> <strong class='text-white'> " + datosObtenidosDiv[i]['titulo'] + "</strong></td>";
            TableEventos += " <td><a href='play.php?i=" + datosObtenidosDiv[i]['identificador'] + "'> <strong class='text-white'> <img src='images/icono_play.png' alt='' width='20'></strong></a></td></tr>";
            TableEventos += '</div>';
        }

        $("#CantidadFutbol").text(Cantidad);
        $("#TableEventos").html(TableEventos);

    })


}

contenidoFutbol();





