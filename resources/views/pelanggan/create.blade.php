@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card.header">{{ $title ?? '' }}</h3>
        <div class="card-body">

            <form action="{{ route('customer.store') }}" method="post">
                {{-- //buat gak expired pakai csrf --}}
                @csrf
                <div class="mb-3">
                    <label for="">Nama Pelanggan</label>
                    <input type="text"class="form-control" placeholder="Nama"name="customer_name">
                </div>
                <div class="mb-3">
                    <label for="">Telephone</label>
                    <input type="number"class="form-control" placeholder="Telephone"name="phone">
                </div>
                <div class="mb-3">
                    <label for="">Alamat</label>
                    <input type="text"class="form-control" placeholder="Alamat"name="address">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
