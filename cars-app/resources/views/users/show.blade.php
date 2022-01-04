@extends('layouts.app')

@section('title', 'Ganador')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card-header">
                <h1><i class="fa fa-fw fa-info-circle"></i> Detalles del ganador</h1>
            </div>
            <nav aria-label="breadcrumb" class="pt-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">
                            <i class="fa fa-fw fa-th-list"></i> Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="fa fa-info"></i>
                        Detalles del ganador
                    </li>
                </ol>
            </nav>
            <a class="btn btn-sm btn-success" href="{{ url('users/export/excel') }}"><i
                    class="fas fa-fw fa-file-excel"></i>
                Exportar usuarios</a>
            <a class="btn btn-sm btn-warning" href="{{ url('users/export/excel') }}"><i
                    class="fas fa-fw fa-file-excel"></i>
                Exportar departamentos</a>
            <a class="btn btn-sm btn-info" href="{{ url('users/export/excel') }}"><i class="fas fa-fw fa-file-excel"></i>
                Exportar ciudades</a>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    @foreach ($userData as $user)
                        <table class="table table-striped table-hover">

                            <tr>
                                <th>Nombre Completo:</th>
                                <td>{{ $user->nombre }}</td>
                            </tr>
                            <tr>
                                <th>Cédula</th>
                                <td>{{ $user->cedula }}</td>
                            </tr>
                            <tr>
                                <th>Teléfono:</th>
                                <td>{{ $user->telefono }}</td>
                            </tr>
                            <tr>
                                <th>Correo Electrónico:</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th>Estado:</th>
                                <td>
                                    @if ($user->active == 1)
                                        <button class="btn btn-success">
                                            <i class="fa fa-check"></i> Activo
                                        </button>
                                    @else
                                        <button class="btn btn-danger">
                                            <i class="fas fa-skull-crossbones"></i> Inactivo
                                        </button>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Registrado hace:</th>
                                @php
                                    $td = \Carbon\Carbon::now();
                                    $dt = \Carbon\Carbon::parse($user->created_at);
                                @endphp
                                <td>{{ $td->diffForHumans($dt, 1) }}</td>
                            </tr>
                        </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
