<!-- RECORDATORIO AGREGAR FUNCIONALIDAD PARA USUARIOS NATURALES -->
<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Tipo</th>
    </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr>
            <td>
                {{$usuario->nombre}}
            </td>
            <td>
                {{$usuario->apellido}}
            </td>
            <td>
                {{$usuario->email}}
            </td>
            <td>
                {{$usuario->tipo}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>