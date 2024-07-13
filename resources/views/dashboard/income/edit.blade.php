@extends('dashboard.master')
@section('titulo','NuevoIngreso')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1 class="mb-4">Modificar ingreso</h1>
    <form action="{{url('dashboard/income/'.$income->id)}}" method="post">
        @csrf  
        @method('PUT')          
            <div class="form-group row">
                <label for="provider_id" class="col-sm-2 col-form-label">Identificacion proveedor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="provider_id" id="provider_id" value="{{$income->provider_id}}" placeholder="Ingresa identificador proveedor">
                </div>
            </div>
            <div class="form-group row">
                <label for="user_id" class="col-sm-2 col-form-label">Identificador usuario</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="user_id" id="user_id" value="{{$income->user_id}}" placeholder="Ingresa identificador usuario">
                </div>
            </div>   
        <div class="form-group row">
            <label for="receipt_type" class="col-sm-2 col-form-label">Tipo de recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_type" id="receipt_type" value="{{$income->receipt_type}}" placeholder="Ingresa el tipo de recibo">
            </div>
        </div>
        <div class="form-group row">
            <label for="receipt_series" class="col-sm-2 col-form-label">Serie del recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_series" id="receipt_series" value="{{$income->receipt_series}}" placeholder="Ingresa la serie del recibo">
            </div>
        </div>
        <div class="form-group row">
            <label for="receipt_number" class="col-sm-2 col-form-label">Numero del recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_number" id="receipt_number" value="{{$income->receipt_number}}" placeholder="Ingresa el numero del recibo">
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Fecha</label>
            <div class="col-sm-10">
                <input type="date" class="date" name="date" id="date" value="{{$income->date}}" placeholder="Ingresa la fecha">
            </div>
        </div>
        <div class="form-group row">
            <label for="tax" class="col-sm-2 col-form-label">Porcentaje</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="tax" id="tax" value="{{$income->tax}}" placeholder="Ingresa el porcentaje">
            </div>
        </div>
        <div class="form-group row">
            <label for="total" class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="total" id="total" value="{{$income->total}}" placeholder="Digita el ingreso total">
            </div>
        </div> 
        <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">Estatus</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="status" id="status" value="{{$income->status}}" placeholder="Ingresa el estatus">
            </div>
        </div>    
        <div class="form-group row">           
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Actualizar</button>
                <a href="{{url('dashboard/income')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>

@endsection