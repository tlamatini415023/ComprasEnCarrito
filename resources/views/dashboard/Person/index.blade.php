@extends('dashboard.master')
@section('titulo','Personas')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
        <h1>listado de personas</h1>
        <br>
        <a href="{{url('dashboard/person/create')}}"class="btn btn-primary">Nueva Persona</a>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>Id Persona</th>
                    <th>Perfil</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Tipo de documento</th>
                    <th>Numero de documento</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($person as $person)                
                <tr>
                    <td scope="row">{{$person->id}}</td>     
                    <td>{{$person->Type}}</td>              
                    <td>{{$person->First_Name}}</td>
                    <td>{{$person->Last_Name}}</td>
                    <td>{{$person->Document_Type}}</td>
                    <td>{{$person->Document_Number}}</td>
                    <td>{{$person->Email}}</td>
                    <td>{{$person->Phone}}</td>
                    <td>{{$person->Address}}</td>
                    <td>{{$person->state? _('Activo'): _('Inactivo')}}</td>
                    <td><a href="{{url('dashboard/person/'.$person->id.'/edit')}}"class="bi bi-pencil-fill"></a></td>
                    <td>
                        <form action="{{url('dashboard/person/'.$person->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="bi bi-eraser-fill" type="submit"></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

@endsection