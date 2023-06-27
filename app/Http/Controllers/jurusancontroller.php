<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class jurusancontroller extends controller
{
    //
    public function index()
    {
        $jurusans=Jurusan::latest()->paginate(10);
        return view('jurusan.index', compact('jurusans'));
    }
    public function create()
    {
        return view('jurusan.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_jurusan'=>'required',
            'nama_kajur'=>'required',
            'namasiswa'=>'required'
        ]);
        DB::table('jurusans')->insert([
            'nama_jurusan'=>$request->nama_jurusan,
            'nama_kajur'=>$request->nama_kajur,
            'namasiswa'=>$request->namasiswa
        ]);
        if(DB::table('jurusans')){
            return redirect()->route('jurusan.index')->with(['success'=>'Data berhasi di simpan']);
        }else{
            return redirect()->route('jurusan.index')->with(['error'=>'Data gagal disimpan']);
        }
    }
    public function edit(Jurusan $jurusan)
 {
 return view('jurusan.edit', compact('jurusan'));
 }
 public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);

        $jurusan->delete();

        if($jurusan){
            //redirect dengan pesan sukses
            return redirect()->route('jurusan.index')->with(['success' => 'Data Berhasil Dihapus']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('jurusan.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
 public function update(Request $request, jurusan $jurusan)
 {
 $this->validate($request, [
 'nama_jurusan' => 'required',
 'nama_kajur' => 'required',
 'namasiswa' => 'required'
 ]);
 //get data mapel by ID
 
 $jurusan=Jurusan::findOrFail($jurusan->id); 
 $jurusan->update([
 'nama_jurusan'=>$request->nama_jurusan,
 'nama_kajur'=>$request->nama_kajur,
 'namasiswa'=>$request->namasiswa
 ]); 
 if($jurusan){
 //redirect dengan pesan sukses
 return redirect()->route('jurusan.index')->with(['success'=>'Data berhasil disimpan']);
 }else{
 return redirect()->route('jurusan.index')->with(['error'=>'Data gagal disimpan']);
 }
 } 

}
