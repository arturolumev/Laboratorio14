<html>
<body>
<table>
    <thead>
    <th>
        DOCUMENTO
    </th>
    <th>
        NUMERO
    </th>
    <th>
        FECHA DE NACIMIENTO
    </th>
    <th>
        ARCHIVO
    </th>
    <th>
        EXPERIENCIA LABORAL
    </th>
    </thead>
    <tbody>
    @foreach($desarrolladores as $desarrollador)
    <tr>
        <td>
            {{$desarrollador -> documento_dev}}
        </td>
        <td>
            {{$desarrollador -> numero_dev}}
        </td>
        <td>
            {{$desarrollador -> fechanac_dev}}
        </td>
        <td>
            {{$desarrollador -> archivo_dev}}
        </td>
        <td>
            {{$desarrollador -> experiencialab_dev}}
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
