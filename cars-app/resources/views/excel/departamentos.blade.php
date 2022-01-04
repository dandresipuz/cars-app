<table>
    <thead>
        <tr>
            <th>Nombre</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($departamentos as $departamento)
            <tr>
                <td>{{ $departamento->nombre }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
