@extends('kalkulator.index');
@section('content')
<h1>Data Pengguna</h1>
<a href="{{route('user.create')}}">Tambah User</a>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>name</th>
            <th>email</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user )
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{route('user.edit', $user->id)}}">Edit</a>
                {{-- //delete bisa pake get dan delete --}}
                {{-- ini pake method get, buat function baru(delete)di user controller--}}
                {{-- <a href="{{route('delete', $user->id)}}" onclick="return confirm('Are you sure delete??')">
                    Delete
                </a> --}}
                {{-- //bikin yg pakai destroy --}}
                <form action="{{route('user.destroy',$user->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn-click">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
