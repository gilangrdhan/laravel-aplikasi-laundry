@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card.header">Edit Pengguna</h3>
        <div class="card-body">

            <form action="{{ route('user.update', $user->id) }}" method="post">
                {{-- //biar  gak expired pake csrf --}}
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="">Nama</label>
                    <input type="text" value="{{ $user->name }}" class="form-control" placeholder="Nama" name="name">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email" value="{{ $user->email }}" class="form-control" placeholder="Email"name="email">
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password"class="form-control" placeholder="Password"name="password">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
