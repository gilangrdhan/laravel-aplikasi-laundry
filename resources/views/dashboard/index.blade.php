{{-- // se akan akan app.blade.php di save as kesini --}}
{{-- //section buat ngambil dari @yield dari app.blade.php --}}
{{-- //@section('judul', 'Dashboard') dashboard itu isinya --}}
@extends('layout.app')
{{-- @section('judul', 'Dashboard') --}}
@section('content')
    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="card">
                <div class="card-header">
                    <a href=""><img src="" alt=""></a>
                </div>
                <div class="card-body text-center">
                    <h1>My Laundry</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
