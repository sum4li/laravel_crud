<?php

namespace App\Http\Controllers;

use App\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $data = Penduduk::all();
        return view('backend.penduduk.index',compact(['data']));
    }
    
    public function create()
    {
        return view('backend.penduduk.create');
    }
    
    public function store(Request $request)
    {
        Penduduk::create($request->all());
        return redirect()->route('admin.penduduk.index')->with('success-message','Data Berhasil Disimpam');
    }
    
    public function show($id)
    {
        $data = Penduduk::findOrFail($id);
        // return $data;
        return view('backend.penduduk.show',compact(['data']));
    }
    
    public function edit(Request $request, $id)
    {
        $data = Penduduk::findOrFail($id);
        return view('backend.penduduk.edit',compact(['data']));
    }

    public function update(Request $request, $id)
    {
        $data = Penduduk::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('admin.penduduk.index')->with('success-message','Data Berhasil Dirubah');
    }

    public function destroy($id)
    {
        $data = Penduduk::findOrFail($id);
        $data->delete();
        return redirect()->route('admin.penduduk.index')->with('success-message','Data Berhasil Dihapus');
    }
}
