@extends('layouts.plantillabase')
@section('contenido')
    <h1>FORMULARIO DESARROLLADOR</h1>
    <form>
        <div class="mb-3">
            <label for="formFile" class="form-label">Documento</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
            <label for="text" class="number">Numero</label>
            <input class="form-control" type="number" id="number">
        </div>
        <div class="row form-group">
            <label for="date">Fecha de nacimiento</label>
            <div class="col-sm-4">
                <div class="input-group date" id="datepicker">
                    <input type="text" class="form-control">
                    <span class="input-group-append">
                    <span class="input-group-text bg-white">
                        <i class="fa fa-calendar"></i>
                    </span>
                </span>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="text" class="number">Archivo</label>
            <input class="form-control" type="text" id="text">
        </div>
        <div class="mb-3">
            <label for="text" class="number">Experiencia laboral</label>
            <input class="form-control" type="text" id="text">
        </div>
        <button type="enviar" class="btn btn-primary">Enviar</button>
    </form>
@endsection
