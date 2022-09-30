@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between">
                            <h2 class="text-uppercase text-bold">Employees</h2>
                            <h5>
                                <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal"
                                    data-bs-target="#addUser">
                                    <i class="bi-plus me-1"></i>Add</a>
                            </h5>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($users->count() >= 1)
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>
                                                @if ($user->is_admin == 1)
                                                    Admin
                                                @else
                                                    Cashier
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="me-4 btn btn-sm btn-outline-primary"
                                                        href="{{ route('users.edit', $user->id) }}" data-bs-toggle="modal"
                                                        data-bs-target="#edit_{{ $user->id }}">
                                                        Edit</a>
                                                    <button class="btn btn-sm btn-outline-danger" role="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete-{{ $user->id }}">Delete</button>
                                                </div>
                                            </td>
                                        </tr>

                                        {{-- edit user --}}
                                        <div class="modal fade" id="edit_{{ $user->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" data-bs-backdrop="stat" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-uppercase" id="exampleModalLabel">Edit
                                                            user</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('users.update', $user->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')

                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Name</span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter name" aria-label="Name"
                                                                    name="name" aria-describedby="basic-addon1"
                                                                    value="{{ $user->name }}">
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text"
                                                                    id="basic-addon1">Email</span>
                                                                <input type="email" class="form-control"
                                                                    placeholder="Enter email address" name="email"
                                                                    aria-describedby="basic-addon1"
                                                                    value="{{ $user->email }}">
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text"
                                                                    id="basic-addon1">Phone</span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter phone number" name="phone"
                                                                    value="{{ $user->phone }}">
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <label class="input-group-text"
                                                                    for="inputGroupSelect01">Role</label>
                                                                <select class="form-select" id="inputGroupSelect01"
                                                                    name="is_admin">
                                                                    <option selected>Choose...</option>
                                                                    <option value="1"
                                                                        @if ($user->is_admin == 1) selected @endif>
                                                                        Admin</option>
                                                                    <option value="0"
                                                                        @if ($user->is_admin == 0) selected @endif>
                                                                        Cashier</option>
                                                                </select>
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Update</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- delete user --}}
                                        <div class="modal fade" id="delete-{{ $user->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" data-bs-backdrop="stat" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-uppercase" id="exampleModalLabel">Delete
                                                            user</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('users.destroy', $user->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')

                                                            <h3>Are you sure?</h3>
                                                            <div class="modal-footer ">
                                                                <button data-bs-dismiss="modal" type="button"
                                                                    class="btn btn-secondary">Cancel</button>
                                                                <button type="submit"
                                                                    class="btn btn-danger">Delete</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <td colspan="6">No users found</td>
                                @endif
                            </tbody>
                        </table>
                        {{-- {{ $users->link() }} --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Search</div>

                    <div class="card-body">
                        <div class="search-box">
                            <form action="" method="GET">
                                <input type="text" id="search" placeholder="Search item..." class="form-control"
                                    name="search" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- add user modal --}}
    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-uppercase" id="exampleModalLabel">Add user</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Name</span>
                            <input type="text" class="form-control" placeholder="Enter name" aria-label="Name"
                                name="name" aria-describedby="basic-addon1" autofocus>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Email</span>
                            <input type="email" class="form-control" placeholder="Enter email address" name="email"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Phone</span>
                            <input type="text" class="form-control" placeholder="Enter phone number" name="phone"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Role</label>
                            <select class="form-select" id="inputGroupSelect01" name="is_admin">
                                <option selected>Choose...</option>
                                <option value="1">Admin</option>
                                <option value="0">Cashier</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Password</span>
                            <input type="password" class="form-control" placeholder="Password" name="password"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Confirm Password</span>
                            <input type="password" class="form-control" placeholder="Confirm password"
                                name="confirm_password" aria-describedby="basic-addon1">
                        </div>
                        <div class="modal-footer text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection
