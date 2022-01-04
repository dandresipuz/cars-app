@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('users.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombre</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror"
                                        name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre"
                                        autofocus>

                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="apellido" class="col-md-4 col-form-label text-md-end">Apellido</label>

                                <div class="col-md-6">
                                    <input id="apellido" type="text"
                                        class="form-control @error('apellido') is-invalid @enderror" name="apellido"
                                        value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>

                                    @error('apellido')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="cedula" class="col-md-4 col-form-label text-md-end">Cédula</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control @error('cedula') is-invalid @enderror"
                                        name="cedula" value="{{ old('cedula') }}" required autocomplete="cedula"
                                        autofocus>

                                    @error('cedula')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="departamento_id"
                                    class="col-md-4 col-form-label text-md-end">Departamento</label>
                                <div class="col-md-6">
                                    <select name="departamento_id"
                                        class="form-select @error('departamento_id') is-invalid @enderror"
                                        id="departamento">
                                        <option value="">Seleccionar Departamento...</option>
                                        @foreach ($departamentos as $departamento)
                                            <option value="{{ $departamento->id }}" @if ($departamento->id == old('departamento_id')) selected @endif>
                                                {{ $departamento->nombre }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('departamento_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="city_id" class="col-md-4 col-form-label text-md-end">Ciudad</label>
                                <div class="col-md-6">
                                    <div class="col-md-6">
                                        <select name="city_id" class="form-select @error('city_id') is-invalid @enderror"
                                            id="city">
                                            <option value="">Seleccionar ciudad...</option>
                                        </select>

                                        @error('city_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="teléfono" class="col-md-4 col-form-label text-md-end">Teléfono</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control @error('telefono') is-invalid @enderror"
                                        name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono"
                                        autofocus>

                                    @error('telefono')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Correo
                                    electrónico</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-mb-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                            name="habeas">
                                        <label class="form-check-label" for="habeas">
                                            “Autorizo el tratamiento de mis datos de acuerdo con la
                                            finalidad establecida en la política de protección de datos personales”. Haga
                                            clic
                                            aquí
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
