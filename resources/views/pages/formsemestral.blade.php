@extends('layouts.plantilla')
@section('contenido')
    <div class="container mb-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Email</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Universidad</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($info as $informacion)
                <tr>
                    <td>{{$informacion->id}}</td>
                    <td>{{$informacion->dp_nombre}}</td>
                    <td>{{$informacion->dp_edad}}</td>
                    <td>{{$informacion->dp_email}}</td>
                    <td>{{$informacion->curso->nombre}}</td>
                    <td>{{$informacion->universidad->nombre}}</td>
                    <td><div class="btn btn-danger">Eliminar</div><div class="btn btn-warning">Editar</div></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
