@extends('layouts.app', ['title' => 'Solicitudes', 'active' => 'blank-page', 'bannerClass' => 'blank-page-banner'])

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header border-bottom d-flex justify-content-between align-items-center py-3">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
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
                                    <th>correo asignado</th>
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
                                        <td class="{{ $user->correoCorporativo ? 'text-success' : 'text-warning' }}">
                                            {{ $user->correoCorporativo ? $user->correoCorporativo->emailCorporativo : 'No asignado' }}
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-evenly">
                                                <button class="btn btn-primary btn-icon btn-sm rounded-pill" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#modalVistaDatos"
                                                    data-id="{{ encrypt($user->id) }}"
                                                    data-userName = "{{ $user->username }}"
                                                    data-carnet = "{{ $user->carnet }}"
                                                    data-first_name="{{ $user->first_name }}"
                                                    data-last_name="{{ $user->last_name }}"
                                                    data-email="{{ $user->email }}" data-celular="{{ $user->celular }}"
                                                    data-fechaNacimiento="{{ $user->fechaNacimiento }}">

                                                    <span class="btn-inner">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </span>
                                                </button>
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
            @include('DashboardPages.solicitudes.vistaPrevia')
        </div>
    </div>
@endsection

@if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modalElement = document.getElementById('modalVistaDatos');
            if (modalElement) {
                var modalInstance = new bootstrap.Modal(modalElement);
                modalInstance.show();
            }
        });
    </script>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var modalVistaDatos = document.getElementById('modalVistaDatos');
        modalVistaDatos.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;

            var id = button.getAttribute('data-id');
            var userName = button.getAttribute('data-userName');
            var carnet = button.getAttribute('data-carnet');
            var firstName = button.getAttribute('data-first_name');
            var lastName = button.getAttribute('data-last_name');
            var email = button.getAttribute('data-email');
            var celular = button.getAttribute('data-celular');
            var fechaNacimiento = button.getAttribute('data-fechaNacimiento');

            modalVistaDatos.querySelector('#hiddenId').value = id;
            modalVistaDatos.querySelector('#username').value = userName;
            modalVistaDatos.querySelector('#carnet').value = carnet;
            modalVistaDatos.querySelector('#nombre').value = `${firstName} ${lastName}`;
            modalVistaDatos.querySelector('#email').value = email;
            modalVistaDatos.querySelector('#phone').value = celular;
            modalVistaDatos.querySelector('#fechaNacimiento').value = fechaNacimiento
        });
    });
</script>
