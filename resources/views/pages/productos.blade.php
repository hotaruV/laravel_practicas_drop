<h1>Hola {{ $nombre }} desde la vista</h1>

<table border="1" >
    <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>descripcion</th>
        <th>cantidad</th>
        <th>activo</th>
        <th>Fecha de caducidad</th>
        <th>Fecha de Creacion</th>
    </tr>
    <tbody>
        <tr>
            @foreach ($productos as $producto)
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
