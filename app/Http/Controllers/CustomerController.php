<?php

namespace App\Http\Controllers;


use App\Models\Customer;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //select * from users
        //compact buat parsing ngelempar data
        $customers = Customer::get();
        $title = "Data Pelanggan";
        return view('pelanggan.index', compact('customers', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //lempar ke view
        $title = 'Tambah Pelanggan';
        return view('pelanggan.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Customer::create($request->all());
        // User::create([
        //     'name'=>$request->name,
        //     'email'=>$request->email,
        //     'password'=> Hash::make($request->password),

        // ]);

        Alert::success('Success Title', 'Data berhasil ditambah');
        return redirect()->to('customer');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit
        //seperti select * from users where id = $id
        $title = "Edit Pelanggan Laundry";
        $customer  = Customer::find($id);
        return view('pelanggan.edit', compact('title', 'customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $customer = Customer::find($id);
        $customer->customer_name = $request->customer_name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->save();

        Alert::success('Success Title', 'Data berhasil diupdate');
        return redirect()->to('customer');
    }

    /**
     * Remove the specified resource from storage.
     */
    //destroy buat delete tapi methodnya delete
    public function destroy(string $id)
    {
        //REDIRECT meminta ke halaman sebelumnya
        $customer = Customer::find($id)->delete();
        Alert::success('Success Title', 'Data berhasil dihapus');
        return redirect()->to('customer');
    }
    public function delete($id)
    {
        $customer = Customer::find($id)->delete();
        return redirect()->to('paket');
    }
}
