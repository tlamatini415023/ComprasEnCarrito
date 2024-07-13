@extends('dashboard.master')
@section('titulo','NuevaPersona')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <form action="{{route('person.store')}}" method="post">
        @csrf     
        <div class="form-group row">
            <label for="Type">Perfil</label>
            <div class="col-sm-10">
                <select class="form-control" name="Type" id="Type">                   
                    <option value="1">Persona natural</option>
                    <option value="0">Proveedor</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="First_Name" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="First_Name" id="First_Name" placeholder="Ingresa nombre de la persona">
            </div>
        </div>
        <div class="form-group row">
            <label for="Last_Name" class="col-sm-2 col-form-label">Apellidos</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Last_Name" id="Last_Name" placeholder="Ingresa apellido de la persona">
            </div>
        </div>
        <div class="form-group row">
            <label for="Document_Type" class="col-sm-2 col-form-label">Tipo de documento</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Document_Type" id="Document_Type" placeholder="Ingresa tipo de documento">
            </div>
        </div>
        <div class="form-group row">
            <label for="Document_Number" class="col-sm-2 col-form-label">Numero de documento</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Document_Number" id="Document_Number" placeholder="Ingresa numero de documento">
            </div>
        </div>
        <div class="form-group row">
            <label for="Email" class="col-sm-2 col-form-label">Correo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Email" id="Email" placeholder="Ingresa el correo">
            </div>
        </div>
        <div class="form-group row">
            <label for="Phone" class="col-sm-2 col-form-label">Telefono</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Phone" id="Phone" placeholder="Ingresa el telefono">
            </div>
        </div>
        <div class="form-group row">
            <label for="Address" class="col-sm-2 col-form-label">Direccion</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Address" id="Address" placeholder="Ingresa la direccion">
            </div>
        </div>        
        <div class="form-group row">           
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Registrar</button>
                <a href="{{url('dashboard/person')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>

@endsection