@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card.header">Data Pengguna</h3>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('user.create') }}" class="btn btn-primary">
                    Tambah
                </a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $val)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $val->name }}</td>
                            <td>{{ $val->email }}</td>
                            <td>
                                <a href="{{ route('user.edit', $val->id) }}"class="btn btn-icon btn-secondary">
                                    <i class="tf-icons bx bx-pencil bx-22px"></i>
                                </a>
                                <form method="post" action="{{ route('user.destroy', $val->id) }}"class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-icon btn-danger">
                                        <i class="tf-icons bx bx-trash bx-22px"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
