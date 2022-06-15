<table>
    <thead>
    <tr>
        <th>Documento</th>
        <th>Numero</th>
        <th>Fecha de nacimiento</th>
        <th>Archivo</th>
        <th>Experiencia Laboral</th>
    </tr>
    </thead>
    <tbody>
    @foreach($desarrolladores as $desarrollador)
        <tr>
            <td>
                {{$desarrollador->documento_dev}}
            </td>
            <td>
                {{$desarrollador->numero_dev}}
            </td>
            <td>
                {{$desarrollador->fechanac_dev}}
            </td>
            <td>
                {{$desarrollador->archivo_dev}}
            </td>
            <td>
                {{$desarrollador->experiencialab_dev}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
