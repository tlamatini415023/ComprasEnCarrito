@extends('dashboard.master')
@section('titulo','NuevoArticulo')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <form action="{{route('article.store')}}" method="post">
        @csrf   
        <div class="form-group row">
            <label for="Category_id" class="col-sm-2 col-form-label">Codigo de la categoria</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Category_id" id="Category_id" placeholder="Ingresa codigo de la categoria">
            </div>
        </div>           
        <div class="form-group row">
            <label for="code" class="col-sm-2 col-form-label">Codigo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="code" id="code" placeholder="Ingresa codigo del articulo">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="Ingresa nombre del articulo">
            </div>
        </div>
        <div class="form-group row">
            <label for="article" class="col-sm-2 col-form-label">Categoria</label>
            <div class="col-sm-10">
               <select name="article" id="article" class="form-select">
                <option value="">Seleccionar categoria</option>
                @foreach ($article as $article)  
                <option value="{{$article->id}}">{{$article->name}}</option>                  
                @endforeach
               </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="sale_price" class="col-sm-2 col-form-label">Precio de venta</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="sale_price" id="sale_price" placeholder="Ingresa el precio del articulo">
            </div>
        </div>
        <div class="form-group row">
            <label for="stock" class="col-sm-2 col-form-label">Cantidad disponible(Stock)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="stock" id="stock" placeholder="Ingresa la cantidad de articulos">
            </div>
        </div>
        <div class="form-group row">
            <label for="description">Descripcion</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description" id="description"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="state">Estado</label>
            <div class="col-sm-10">
                <select class="form-control" name="state" id="state">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>
        </div>
        <div class="form-group row">           
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Registrar</button>
                <a href="{{url('dashboard/article')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>

@endsection