@extends('layouts.app')
@section('content')

<div class="container">
    <div id="agenda"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Generar Cita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="" id="formularioEventos">
                    
                    {!! csrf_field() !!}

                    <div class="form-group d-none">
                      <label for="id">ID:</label>
                      <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="form-group">
                      <label for="documento">Número de Documento de Identidad</label>
                      <input type="number" class="form-control" name="documento" id="documento" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Diligenciar el número de documento de identidad</small>
                    </div>

                    <div class="form-group">
                      <label for="nombres">Nombres</label>
                      <input type="text" class="form-control" name="nombres" id="nombres" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Diligenciar los nombres</small>
                    </div>

                    <div class="form-group">
                      <label for="apellidos">Apellidos</label>
                      <input type="text" class="form-control" name="apellidos" id="apellidos" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Diligenciar los apellidos</small>
                    </div>

                    <div class="form-group">
                      <label for="descripcion">Descripción</label>
                      <textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder=""></textarea>
                      <small id="helpId" class="form-text text-muted">Agrega una descripción de la cita</small>
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
                <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> 
            </div>
        </div>
    </div>
</div>

@endsection