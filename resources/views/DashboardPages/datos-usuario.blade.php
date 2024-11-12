@extends('layouts.app', ['title' => 'Datos', 'active' => 'blank-page', 'bannerClass' => 'blank-page-banner'])

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card shadow-sm border-light">
                <div class="card-header border-bottom d-flex justify-content-between align-items-center py-3">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-title">
                        <h4 class="m-0 text-primary font-weight-bold">Datos del Usuario:
                            {{ strtoupper(auth()->user()->first_name) }} {{ strtoupper(auth()->user()->last_name) }}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p><strong>Carnet:</strong> {{ $usuario->carnet }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Nombre de Usuario:</strong> {{ $usuario->username }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p><strong>Nombre:</strong> {{ ucfirst($usuario->first_name) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Apellido:</strong> {{ ucfirst($usuario->last_name) }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p><strong>Correo de referencia:</strong> {{ $usuario->email }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Correo de corporativo asignado:</strong>
                                <span class="{{ $usuario->correoCorporativo ? 'text-success' : 'text-primary' }}">
                                    {{ $usuario->correoCorporativo ? $usuario->correoCorporativo->emailCorporativo : 'No asignado' }}
                                </span>
                            </p>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Estado del correo:</strong>
                                @if (is_null($usuario->email_verified_at))
                                    <span class="badge bg-warning text-dark">Pendiente</span>
                                @else
                                    <span class="badge bg-success">Verificado</span>
                                    <br>
                                    <strong>Fecha de verificación:</strong>
                                    {{ \Carbon\Carbon::parse($usuario->email_verified_at)->format('d M Y, H:i') }}
                                @endif
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
