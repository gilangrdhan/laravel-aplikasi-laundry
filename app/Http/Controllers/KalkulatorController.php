<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index()
    {
        return view('kalkulator.index');
    }

    public function tambah()
    {
        $title = "Form Tambah";
        $jumlah = 0;
        return view('kalkulator.tambah', compact('title', 'jumlah'));
    }

    public function storeTambah(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 + $angka2;
        $title = "Hasil dari" . $angka1 . "+" . $angka2 . "adalah : " . $jumlah;
        return view('kalkulator.tambah', compact('jumlah', 'title'));
    }

    public function kurang()
    {
        $title = "Form Kurang";
        $kurang = 0;
        return view('kalkulator.kurang', compact('title', 'kurang'));
    }
    public function storeKurang(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $kurang = $angka1 - $angka2;
        $title = "Hasil dari" . $angka1 . "-" . $angka2 . "adalah : " . $kurang;
        return view('kalkulator.kurang', compact('kurang', 'title'));
    }
    public function bagi()
    {
        $title = "Form Bagi";
        $bagi = 0;
        return view('kalkulator.bagi', compact('title', 'bagi'));
    }
    public function storeBagi(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $bagi = $angka1 / $angka2;
        $title = "Hasil dari" . $angka1 . "-" . $angka2 . "adalah : " . $bagi;
        return view('kalkulator.bagi', compact('bagi', 'title'));
    }
    public function kali()
    {
        $title = "Form Kali";
        $kali = 0;
        return view('kalkulator.kali', compact('title', 'kali'));
    }
    public function storeKali(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $kali = $angka1 * $angka2;
        $title = "Hasil dari" . $angka1 . "-" . $angka2 . "adalah : " . $kali;
        return view('kalkulator.kali', compact('kali', 'title'));
    }
}
