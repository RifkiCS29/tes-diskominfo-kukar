<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawais = Pegawai::orderBy('id','asc')->paginate(5);
        return view('pegawai.index',compact('pegawais'))
                ->with('i',(request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|max:50',
            'nip' => 'required|max:18',
            'jabatan'=>'required',
            'alamat' => 'required|max:100',
        ]);
 
        $new_pegawai = new Pegawai;

        $new_pegawai->nama = $request->get('nama');
        $new_pegawai->nip = $request->get('nip');
        $new_pegawai->jabatan = $request->get('jabatan');
        $new_pegawai->alamat = $request->get('alamat');
        $new_pegawai->save();
        return redirect()->route('pegawai.index')
                         ->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai.detail', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'=>'required|max:50',
            'nip' => 'required|max:18',
            'jabatan'=>'required',
            'alamat' => 'required|max:100',
        ]);
        $pegawai = pegawai::find($id);
        $pegawai->nama = $request->get('nama');
        $pegawai->nip = $request->get('nip');
        $pegawai->jabatan = $request->get('jabatan');
        $pegawai->alamat = $request->get('alamat');
        $pegawai->save();
        return redirect()->route('pegawai.index')
                         ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = pegawai::find($id);
        $pegawai->delete();
        return redirect()->route('pegawai.index')
                         ->with('success', 'Data Pegawai berhasil dihapus');
    }
}
