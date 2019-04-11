<?php

namespace App\Http\Controllers;

use App\Anggota;
use App\Arisan;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arisan = Arisan::all();
        return view('app', compact('arisan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_anggota' => 'required|max:100',
            'alamat' => 'required'
        ];
        $anggota = Anggota::create([
            'nama_anggota' => $request->nama_anggota,
            'alamat' => $request->alamat,
            
        ]);
        $arisan = Arisan::create([
            'status_menang' => 'belum_menang',
            'status_bayar' => 'belum_bayar',
            'id_anggota' => $anggota->id_anggota            
        ]);
        if ($anggota && $arisan) return redirect()->route('arisan.index')->with('success', 'Data Berhasil Ditambahkan');
        else return redirect()->route('arisan.create')->with('error', 'Terjadi Kesalahan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = Anggota::findOrFail($id)->first();
        return view('form', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $anggota = Anggota::find($id);
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->alamat = $request->alamat;
        $result = $anggota->save();
        if($result) return redirect()->route('arisan.index')->with('succes', 'Data Berhasil Diubah');
        else return redirect()->route('arisan.edit', $id)->with('error', 'Terjadi Kesalahan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = Arisan::findOrFail($id);
        $res = $find->anggota()->delete();
        $res2 = $find->delete();
        if($res && $res2) return redirect()->route('arisan.index')->with('success', 'Data Berhasil Dihapus');
        else return redirect()->route('arisan.index')->with('error', 'Data Berhasil Dihapus');
    }

    public function lunas($id)
    {
        $arisan = Arisan::find($id);
        $arisan->status_bayar = 'lunas';
        $result = $arisan->save();
        if($result) return redirect()->route('arisan.index')->with('success', 'Anggota Telah Membayar Arisan');
        else return redirect()->route('arisan.index')->with('error', 'Data Gagal Diubah');
    }

    public function menang($id)
    {
        $arisan = Arisan::where('id_arisan',$id)->update([
            'status_menang' => 'menang'
        ]);
        if($arisan) return redirect()->route('arisan.index')->with('success', 'Anggota Telah Membayar Arisan');
        else return redirect()->route('arisan.index')->with('error', 'Data Gagal Diubah');
    }
}
