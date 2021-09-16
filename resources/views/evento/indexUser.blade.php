@extends('layouts.appUser')
@section('content')

<div class="container">
    <div id="agendaUser"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="eventoUser" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Generar agenda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="" id="formularioEventosUser">
                    
                    {!! csrf_field() !!}

                    <div class="form-group d-none">
                      <label for="id">ID:</label>
                      <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="form-group">
                      <label for="title">Título</label>
                      <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Aquí se describe el título del evento</small>
                    </div>

                    <div class="form-group">
                      <label for="descripcion">Descripción</label>
                      <textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder=""></textarea>
                      <small id="helpId" class="form-text text-muted">Agrega una descripción</small>
                    </div>

                    <div class="form-group">
                      <label for="horario">Elegir la hora de la cita</label>
                      <select name="horario">
                        <option></option>
                        <option>7:00 AM - 7:30 AM</option>
                        <option>7:30 AM - 8:00 AM</option>
                        <option>8:00 AM - 8:30 AM</option>
                        <option>8:30 AM - 9:00 AM</option>
                        <option>9:00 AM - 9:30 AM</option>
                        <option>9:30 AM - 10:00 AM</option>
                        <option>10:00 AM - 10:30 AM</option>
                        <option>10:30 AM - 11:00 AM</option>
                        <option>11:00 AM - 11:30 AM</option>
                        <option>11:30 AM - 12:00 M</option>
                        </select>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

@endsection