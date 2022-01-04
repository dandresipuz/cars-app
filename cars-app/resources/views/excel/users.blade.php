<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cédula</th>
            <th>Departamento</th>
            <th>Ciudad</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Fecha de registro</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->nombre }}</td>
                <td>{{ $user->apellido }}</td>
                <td>{{ $user->cedula }}</td>
                <td>{{ $user->departamento->nombre }}</td>
                <td>{{ $user->city->nombre }}</td>
                <td>{{ $user->telefono }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
