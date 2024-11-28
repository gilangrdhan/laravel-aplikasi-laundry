@extends('layout.app')
@section('content')
    <div class="card">
        <h3 class="card.header">Nama Pelanggan</h3>
        <div class="card-body">

            <form action="{{ route('customer.update', $customer->id) }}" method="post">
                {{-- //biar  gak expired pake csrf --}}
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="">Nama Pelanggan</label>
                    <input type="text" value="{{ $customer->customer_name }}" class="form-control"
                        placeholder="Nama Pelanggan" name="customer_name">
                </div>
                <div class="mb-3">
                    <label for="">Telephone</label>
                    <input type="number" value="{{ $customer->phone }}" class="form-control"
                        placeholder="Telephone"name="phone">
                </div>
                <div class="mb-3">
                    <label for="">Alamat</label>
                    <input type="text" value="{{ $customer->address }}" class="form-control"
                        placeholder="Alamat"name="address">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
