document.addEventListener('DOMContentLoaded', function() {

    let formulario = document.querySelector("#formularioEventosUser");

    var calendarEl = document.getElementById('agendaUser');
    var calendar = new FullCalendar.Calendar(calendarEl, {

        initialView: 'dayGridWeek',
        locale:"es",

        displayEventTime: false,

        headerToolbar: {
            left: '',
            center: 'title',
            right: 'dayGridWeek'
        },

        //events: baseURL+"/evento/mostrar",
        eventSources:{
            url: baseURL+"/eventoUser/mostrar",
            method:"POST",
            extraParams: {
                _token: formulario._token.value,
            }
        },

        dateClick:function(){
            formulario.reset();

            $("#eventoUser").modal("show");
        },

        /* eventClick:function (info) {
            var evento = info.event;
            console.log(evento);

            axios.post(baseURL+"/eventoUser/editar/"+info.event.id).
            then(
                (respuesta) => {
                    formulario.id.value = respuesta.data.id;
                    formulario.documento.value = respuesta.data.documento;
                    formulario.nombres.value = respuesta.data.nombres;
                    formulario.apellidos.value = respuesta.data.apellidos;
                    formulario.descripcion.value = respuesta.data.descripcion;
                    $("#eventoUser").modal("show");
                }
            ).catch(
                error=>{
                    if (error.response) {
                        console.log(error.response.data);
                    }
                }
            ) 
        } */

    });
    
    calendar.render();

    document.getElementById("btnGuardar").addEventListener("click", function() {

        enviarDatos("/eventoUser/agregar");

    });

    function enviarDatos(url) {

        const datos = new FormData(formulario);
        const nuevaURL = baseURL + url;

        axios.post(nuevaURL, datos).
        then(
            (respuesta) => {
                calendar.refetchEvents();
                $("#eventoUser").modal("hide");
            }
        ).catch(
            error=>{
                if (error.response) {
                    console.log(error.response.data);
                }
            }
        )
    }

});