<!-- RECORDATORIO AGREGAR FUNCIONALIDAD PARA USUARIOS NATURALES -->

<html>
<body>
<table>
    <thead>
    <th>
        NOMBRE
    </th>
    <th>
        APELLIDO
    </th>
    <th>
        EMAIL
    </th>
    <th>
        TIPO
    </th>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr>
            <td>
                {{$usuarios -> nombre}}
            </td>
            <td>
                {{$usuarios -> apellido}}
            </td>
            <td>
                {{$usuarios -> email}}
            </td>
            <td>
                {{$usuarios -> tipo}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
