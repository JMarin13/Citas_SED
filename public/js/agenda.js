document.addEventListener('DOMContentLoaded', function() {

    let formulario = document.querySelector("#formularioEventos");

    var calendarEl = document.getElementById('agenda');

    var calendar = new FullCalendar.Calendar(calendarEl, {

        initialView: 'listWeek',
        locale:"es",

        displayEventTime: false,

        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth, dayGridWeek, listWeek'
        },

        //events: baseURL+"/evento/mostrar",
        eventSources:{
            url: baseURL+"/evento/mostrar",
            method:"POST",
            extraParams: {
                _token: formulario._token.value
            }
        },

        /* Función que me muestra los datos de la cita cuando se le da click al evento */
        dateClick:function(info){
            formulario.reset();
            $("#evento").modal("show");
        },

        eventClick:function (info) {
            var evento = info.event;
            console.log(evento);

            axios.post(baseURL+"/evento/editar/"+info.event.id).
            then(
                (respuesta) => {
                    formulario.id.value = respuesta.data.id;
                    formulario.title.value = respuesta.data.title;
                    formulario.descripcion.value = respuesta.data.descripcion;
                    $("#evento").modal("show");
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
    
    calendar.render();

    document.getElementById("btnGuardar").addEventListener("click", function() {
        
        enviarDatos("/evento/agregar");

    });

    document.getElementById("btnModificar").addEventListener("click", function() {

        enviarDatos("/evento/actualizar/"+formulario.id.value);

    });

    document.getElementById("btnEliminar").addEventListener("click", function() {

        enviarDatos("/evento/borrar/"+formulario.id.value);

    });

    function enviarDatos(url) {

        const datos = new FormData(formulario);
        const nuevaURL = baseURL + url;

        axios.post(nuevaURL, datos).
        then(
            (respuesta) => {
                calendar.refetchEvents();
                $("#evento").modal("hide");
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