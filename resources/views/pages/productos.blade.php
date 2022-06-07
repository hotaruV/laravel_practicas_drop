<x-guest-layout>

<h1>Hola {{ $nombre }} desde la vista</h1>



<table class="md:table-fixed">
    <thead>
      <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>descripcion</th>
        <th>cantidad</th>
        <th>activo</th>
        <th>Fecha de caducidad</th>
        <th>Fecha de Creacion</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($pro as $producto)
        <td>{{ $producto->id }}</td>
        <td>{{ $producto->nombre }}</td>
        <td>{{ $producto->descripcion }}</td>
        <td>{{ $producto->cantidad }}</td>
        @if ($producto->activo == 1)
            <td>Activo</td>
        @else
            <td>Inactivo</td>
        @endif
        <td>{{ $producto->f_caducidad }}</td>
        <td>{{ $producto->created_at }}</td>
    @endforeach
      </tr>
    </tbody>
  </table>
</x-guest-layout>
