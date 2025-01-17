@extends('dashboard.master')
@section('titulo','Ingresos')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
        <h1>listado de ingresos</h1>
        <br>
        <a href="{{url('dashboard/income/create')}}"class="btn btn-primary">Nuevo ingreso</a>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>Id ingreso</th>
                    <th>Id proveedor</th>
                    <th>Id usuario</th>
                    <th>Tipo recibo</th>
                    <th>Serie recibo</th>
                    <th>Numero recibo</th>
                    <th>Fecha</th>
                    <th>Porcentaje</th>
                    <th>Total</th>
                    <th>Estatus</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach ($income as $income)                
                <tr>
                    <td scope="row">{{$income->id}}</td>
                    <td>{{$income->provider_id}}</td>
                    <td>{{$income->user_id}}</td>
                    <td>{{$income->receipt_type}}</td>
                    <td>{{$income->receipt_series}}</td>
                    <td>{{$income->receipt_number}}</td>
                    <td>{{$income->date}}</td>
                    <td>{{$income->tax}}</td>
                    <td>{{$income->total}}</td>
                    <td>{{$income->status}}</td>
                    <td>{{$income->state? _('Activo'): _('Inactivo')}}</td>
                    <td><a href="{{url('dashboard/income/'.$income->id.'/edit')}}"class="bi bi-pencil-fill"></a></td>
                    <td>
                        <form action="{{url('dashboard/income/'.$income->id)}}" method="post">
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