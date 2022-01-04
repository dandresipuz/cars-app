<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Departamento</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cities as $city)
            <tr>
                <td>{{ $city->nombre }}</td>
                <td>{{ $city->departamento->nombre }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
