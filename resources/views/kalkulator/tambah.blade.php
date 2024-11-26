{{-- //utk menambahkan @extends , @section utk block section mengikuti yieldnya. : yield bisa berubah secara dinamis --}}
@extends('kalkulator.index')
@section('content')
    <form action="{{ route('store-tambah') }}"method="post" style="margin-top:20px;">
        @csrf
        <label for="">Angka 1</label>
        <input type="text" name="angka1" placeholder="masukkan angka 1">
        <br>
        +
        <br>
        <label for="">Angka 2</label>
        <input type="text"name="angka2" placeholder="masukkan angka 2">
        <br>
        <button>Proses</button>
    </form>
    <h3>hasilnya adalah :{{ $jumlah }}</h3>
@endsection
