@extends('layouts.app')

section('content')

    <div class="container">
        <div class="row justify-content-center d-flex">
            <div class="col-md-10">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="mb-2 pt-2">
                            <a href="{{route('users.Kegiatan.index')}}" class="btn btn-info">Add New User</a>
                        </div>
                        <div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Naurah Azzahra Q</td>
                                        <td>naurahazzahra.23@gmail.com</td>
                                        <td>siswa</td>
                                        <td>
                                            <form action="">
                                                <a href="" class="btn btn-sm btn-info">Show</a>
                                                <button href="" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection