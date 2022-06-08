@extends('layouts.plantilla')

@section('contenido')

<div class="container data">
<table class="table table-striped mb-4 mt-4 ">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Edad</th>
        <th scope="col">Email</th>
        <th scope="col">Curso</th>
        <th scope="col">Universidad</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($inscripciones as $incripcion)
      <tr>
        <td>{{ $incripcion->id}}</td>
        <td>{{ $incripcion->dp_nombre }}</td>
        <td>{{ $incripcion->dp_edad}}</td>
        <td>{{ $incripcion->dp_email}}</td>
        <td>{{ $incripcion->curso->nombre}}</td>
        <td>{{ $incripcion->universidad->nombre}}</td>
        <td><a href="{{ route('formu.edit', $incripcion) }}" class="btn btn-warning btn-sm" >Modificar</a> <a class="btn-danger btn btn-sm">Eliminar</a>  </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection
