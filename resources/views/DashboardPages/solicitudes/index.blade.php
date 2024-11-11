@extends('layouts.app', ['title' => 'Solicitudes', 'active' => 'blank-page', 'bannerClass' => 'blank-page-banner'])

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header border-bottom d-flex justify-content-between align-items-center py-3">
                    <div class="card-title">
                        <h4 class="m-0">{{ __('dashboard.Rating_List') }}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-view table-responsive table-space">
                        <table id="commentTable" class="data-tables table custom-table movie_table" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Usuario</th>
                                    <th>Nombre</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>Correo</th>
                                    <th>Estado correo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $index => $user)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                        <td>{{ $user->fechaNacimiento }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if (is_null($user->email_verified_at))
                                                <span class="badge bg-warning-subtle p-2 text-warning">Pendiente</span>
                                            @else
                                                <span class="badge bg-success-subtle p-2 text-success">Verificado</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-evenly">
                                                <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#"
                                                    role="button">
                                                    <span class="btn-inner">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </span>
                                                </a>

                                                <a class="btn btn-danger btn-icon btn-sm rounded-pill ms-2" href="#"
                                                    role="button">
                                                    <span class="btn-inner">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
