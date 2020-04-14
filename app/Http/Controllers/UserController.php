<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('backend.user.index',compact(['data']));
    }
    
    public function create()
    {
        return view('backend.user.create');
    }
    
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('admin.user.index')->with('success-message','Data Berhasil Disimpam');
    }
    
    public function show($id)
    {
        $data = User::findOrFail($id);
        // return $data;
        return view('backend.user.show',compact(['data']));
    }
    
    public function edit(Request $request, $id)
    {
        $data = User::findOrFail($id);
        return view('backend.user.edit',compact(['data']));
    }

    public function update(Request $request, $id)
    {
        $update_data = [];
        $data = User::findOrFail($id);
        if($request->password != '')
        {
            $update_data['password']=$request->password;
        }
        $update_data['name']=$request->name;
        $update_data['email']=$request->email;
        dd($update_data);
        // $data->update($request->all());
        // return redirect()->route('admin.user.index')->with('success-message','Data Berhasil Dirubah');
    }

    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect()->route('admin.user.index')->with('success-message','Data Berhasil Dihapus');
    }
}
