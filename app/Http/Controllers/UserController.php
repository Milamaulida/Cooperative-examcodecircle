<?php

namespace App\Http\Controllers;

use App\Models\TbUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tbusers = TbUser::simplePaginate(10);
        return view('tbuser.index', compact('tbusers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('TbUser.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $birthday = $request->input('birthday');
        $no_ktp = $request->input('no_ktp');
        $status = $request->input('status');
        $role = $request->input('role');
        $data = new TbUser();
        $data->name = $name;
        $data->email = $email;
        $data->password = $password;
        $data->phone = $phone;
        $data->address = $address;
        $data->birthday = $birthday;
        $data->no_ktp= $no_ktp;
        $data->status = $status;
        $data->role = $role;
        $data->save();
        return redirect('/user');
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
        $tbusers = TbUser::find($id);
        return view('tbuser.edit', compact('tbusers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $birthday = $request->input('birthday');
        $no_ktp = $request->input('no_ktp');
        $status = $request->input('status');
        $role = $request->input('role');
        $data = $tbusers = TbUser::find($id);
        $data->name = $name;
        $data->email = $email;
        $data->password = $password;
        $data->phone = $phone;
        $data->address = $address;
        $data->birthday = $birthday;
        $data->no_ktp= $no_ktp;
        $data->status = $status;
        $data->role = $role;
        $data->save();
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tbusers = TbUser::find($id);
        $tbusers->delete();

        return redirect('/user');
    }
}
