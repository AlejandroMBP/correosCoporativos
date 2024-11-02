@extends('layouts.app', ['module_title' => 'User List', 'title' => 'User List', 'active' => 'user-list-mini', 'isSweetalert' => true])

@section('content')
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center py-3">
                        <div class="d-flex align-items-center pt-3 gap-2">
                            <div class="form-group mb-0">
                                <select type="select" class="form-control select2-basic-multiple" placeholder="No Action">
                                    <option>{{ __('dashboard.no_action') }}</option>
                                    <option>{{ __('dashboard.status') }}</option>
                                    <option>{{ __('dashboard.delete') }}</option>
                                </select>

                            </div>
                            <button class="btn btn-primary ">{{ __('dashboard.apply') }}</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive rounded py-4 table-space">
                            <table id="user-list-table" class="table custom-table" role="grid" data-toggle="data-table">
                                <thead>
                                    <tr class="ligth">
                                        <th>Perfil</th>
                                        <th>Nombre</th>
                                        <th>Nombre de Usuario</th>
                                        <th>Correo</th>
                                        <th>Correo verificado</th>
                                        <th>Estado</th>
                                        <th style="min-width: 100px">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $user)
                                        <tr>
                                            <td class="text-center"><img
                                                    class="bg-soft-primary rounded img-fluid avatar-40 me-3"
                                                    src="{{ asset('dashboard/images/avatars/01.png') }}" alt="profile"
                                                    loading="lazy"></td>
                                            <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->email_verified_at }}</td>
                                            <td><span class="badge bg-primary">Active</span></td>
                                            <td>
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="btn btn-sm btn-icon btn-success rounded"
                                                        data-bs-toggle="tooltip" data-placement="top" title=""
                                                        data-bs-original-title="Add" href="#">
                                                        <span class="btn-inner">
                                                            <i class="fa-solid fa-user-plus fa-xs"></i>
                                                        </span>
                                                    </a>

                                                    <a class="btn btn-sm btn-icon btn-danger delete-btn rounded"
                                                        data-bs-toggle="tooltip" data-placement="top" title=""
                                                        data-bs-original-title="Delete" href="#">
                                                        <span class="btn-inner">
                                                            <i class="fa-solid fa-trash fa-xs"></i>
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
    </div>
@endsection
