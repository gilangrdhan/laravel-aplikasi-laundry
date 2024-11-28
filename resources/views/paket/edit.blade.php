@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card.header">Nama Paket</h3>
        <div class="card-body">

            <form action="{{ route('service.update', $service->id) }}" method="post">
                {{-- //biar  gak expired pake csrf --}}
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="">Nama Paket</label>
                    <input type="text" value="{{ $service->service_name }}" class="form-control" placeholder="Nama Paket" name="service_name">
                </div>
                <div class="mb-3">
                    <label for="">Harga</label>
                    <input type="number" value="{{ $service->price }}" class="form-control" placeholder="Harga"name="price">
                </div>
                <div class="mb-3">
                    <label for="">Deskripsi</label>
                    <input type="text" value="{{ $service->description }}" class="form-control" placeholder="Deskripsi"name="description">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
