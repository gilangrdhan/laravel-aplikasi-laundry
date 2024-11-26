<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //select * from users
        //compact buat parsing ngelempar data
        $users = User::get();
        $title = "Data User";
        return view('user.index', compact('users', 'title'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //lempar ke view
        $title ='Tambah User';
        return view('user.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        User::create($request->all());
        // User::create([
        //     'name'=>$request->name,
        //     'email'=>$request->email,
        //     'password'=> Hash::make($request->password),

        // ]);

    Alert::success('Success Title', 'Data berhasil ditambah');
    return redirect()->to('user');
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
        $title ="Edit User";
        $user  = User::find($id);
        return view('user.edit', compact('title','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = User::find($id);
        if($request->password){
            User::where('id', $id)->update([
                'name' => $request ->name,
                'email' => $request->email,
                'password'=> Hash::make($request->password),
            ]);
        }else{
            User::where('id', $id)->update([
                'name' => $request ->name,
                'email' => $request->email,
                'password' =>$user->password
            ]);
        }
        Alert::success('Success Title', 'Data berhasil diupdate');
        return redirect()->to('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    //destroy buat delete tapi methodnya delete
    public function destroy(string $id)
    {
        //REDIRECT meminta ke halaman sebelumnya
        $user = User::find($id)->delete();
        Alert::success('Success Title', 'Data berhasil dihapus');
        return redirect()->to('user');
    }
    public function delete ($id) {
        $user = User::find($id)->delete();
        return redirect()->to('user');
    }
}
