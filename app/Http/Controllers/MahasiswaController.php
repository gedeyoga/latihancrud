<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MahasiswaRequest;
use App\Mahasiswa;
use App\Jurusan;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mahasiswa::with('jurusan')->get();
        return view('mahasiswa.index' , [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Jurusan::all();
        return view('mahasiswa.create', ['jurusan' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MahasiswaRequest $request)
    {
        $data = $request->all();
        Mahasiswa::create($data);

        return redirect()->route('mahasiswa.index')->withSuccess('Berhasil tambah data !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Mahasiswa::with('jurusan')->findOrFail($id);

        return view('mahasiswa.show' , ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Mahasiswa::with('jurusan')->findOrFail($id);
        $jurusan = Jurusan::all();

        return view('mahasiswa.edit' , [
            'data' => $data , 
            'jurusan' => $jurusan
        ]);
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
        $mhs = Mahasiswa::findOrFail($id);
        // $mhs->nama = $request->nama;
        // $mhs->jurusan_id = $request->jurusan_id;
        // $mhs->alamat = $request->alamat;
        // $mhs->save();

        $mhs->update([
            'nama' => $request->nama,
            'jurusan_id' => $request->jurusan_id,
            'alamat' => $request->alamat
        ]);
        return redirect()->route('mahasiswa.index')->withSuccess('Data berhasil di ubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Mahasiswa::find($id)->delete();
        return redirect()->route('mahasiswa.index')->withSuccess('Data berhasil di hapus !');
    }
}
