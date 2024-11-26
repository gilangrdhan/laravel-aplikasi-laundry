<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //class itu blue print objek (OOP)
    // public itu visibilalisasi bisa dilihat secara umum

    //method/fuction : kebiasaan

    //public function index() contohnya bikin rumah dari index, about tapi belum ada tampilan hanya tulisan
    public function index()
    {
        return "Halo first time";
    }

    public function edit ($id)
    {
        return "Ini adalah form edit dengan nama params:" . $id;
    }

    public function delete ($id)
    {
        return "Ini adalah form delete dengan id:" . $id;
    }
}
