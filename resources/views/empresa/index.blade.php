@extends('layouts.plantillabase')
@section('contenido')
    <h1>FORMULARIO EMPRESA</h1>
    <form>
        <div class="mb-3">
            <label class="ruc">RUC</label>
            <input class="form-control" type="number" id="ruc">
        </div>
        <div class="mb-3">
            <label class="nombre">Nombre de la empresa</label>
            <input class="form-control" type="text" id="nombre">
        </div>
        <div class="mb-3">
            <label class="sector">Sector</label>
            <input class="form-control" type="text" id="sector">
        </div>
        <div class="mb-3">
            <label class="numero">Numero de contacto</label>
            <input class="form-control" type="number" id="numero">
        </div>
        <div class="mb-3">
            <label class="direccion">Direccion</label>
            <input class="form-control" type="text" id="direccion">
        </div>
        <div class="mb-3">
            <label class="mision">Misión</label>
            <input class="form-control" type="text" id="mision">
        </div>
        <div class="mb-3">
            <label class="vision">Visión</label>
            <input class="form-control" type="text" id="vision">
        </div>

        <button type="button" class="btn btn-primary">Enviar</button>
    </form>
@endsection
