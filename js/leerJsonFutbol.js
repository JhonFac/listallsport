LeerFutbol();
function LeerFutbol() {

    $.ajax({
        url: 'https://apptrafic.com/scraping/Telerium/URL/',
        type: 'POST',
        cache: 'false',
        data: { vista: vista }
    }).done(function (data) {
        var datosObtenidosDiv = JSON.parse(JSON.stringify(data));
        var Cantidad = datosObtenidosDiv.length;

        let TableEventos = " <div class='widget-next-match'> <table class='table custom-table'><thead><tr><th >Hora</th>";
        TableEventos += "<th >Evento</th>";
        TableEventos += "<th >Versus</th>";
        TableEventos += "<th >Canal</th></tr></thead><tbody style='background-color:#252933' >";

        for (var i = 0; i < Cantidad; i++) {
            TableEventos += "<tr><td> <img src='images/icon_reloj.png' alt='' width='20'> &nbsp;&nbsp;" + datosObtenidosDiv[i]['hora'] + "</td>";
            TableEventos += "<td> <strong class='text-white'> " + datosObtenidosDiv[i]['evento'] + "</strong></td>";
            TableEventos += "<td> <strong class='text-white'> " + datosObtenidosDiv[i]['titulo'] + "</strong></td>";
            TableEventos += " <td><a href='play.php?i=" + datosObtenidosDiv[i]['identificador'] + "'> <strong class='text-white'> <img src='images/icono_play.png' alt='' width='20'></strong></a></td></tr>";
        }
        TableEventos += "</tbody></table></div>";

        $("#CantidadFutbol").text(Cantidad);
        $("#TableEventos").html(TableEventos);

    })

}


