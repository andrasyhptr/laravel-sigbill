<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Info;
use Validator;
use App\Kategori;
use App\Kecamatan;
use App\Jenis;

class InfoController extends Controller
{

    public function index()
    {
        $info = Info::all();
        return view('info.index', compact('info'));
    }

    public function create()
    {
        $kecamatan = Kecamatan::all();
        $jenis = Jenis::all();
        $kategori = Kategori::all();
        return view('info.create', compact('kecamatan', 'jenis', 'kategori'));
    }

    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'nama' => 'required',
            'jalan' => 'required',
            'kordinat_x' => 'required',
            'kordinat_y' => 'required',
            'status' => 'required',
            'tipe' => 'required',
            'media' => 'required',
            'keterangan' => 'required'
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $info = new Info;
            $info->nama = $request->nama;
            $info->jalan   = $request->jalan;
            $info->kordinat_x = $request->kordinat_x;
            $info->kordinat_y = $request->kordinat_y;
            $info->id_status = $request->id_status;
            $info->id_jenis = $request->id_jenis;
            $info->id_media = $request->id_media;
            $info->keterangan = $request->keterangan;
            $info->save();

            return redirect()->action('InfoController@index');
        }
    }

    public function show(Request $request, $id)
    {
        $info = Info::find($id);
        $kecamatan = Kecamatan::find($info->id_status);
        $jenis = Jenis::find($info->id_jenis);
        $kategori = Kategori::find($info->id_media);
        return view('info.show', compact('info', 'kecamatan', 'jenis', 'kategori'));
    }

    public function edit(Request $request, $id)
    {
        $info = Info::find($id);
        $kecamatan = Kecamatan::find($info->id_status);
        $jenis = Jenis::find($info->id_jenis);
        $kategori = Kategori::find($info->id_media);
        return view('info.edit', compact('info', 'kecamatan', 'jenis', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $v = Validator::make($request->all(), [
            'nama' => 'required',
            'jalan' => 'required',
            'kordinat_x' => 'required',
            'kordinat_y' => 'required',
            'id_status' => 'required',
            'id_jenis' => 'required',
            'id_media' => 'required',
            'keterangan' => 'required'
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $info = Info::find($request->id);
            $info->nama = $request->nama;
            $info->jalan   = $request->jalan;
            $info->kordinat_x = $request->kordinat_x;
            $info->kordinat_y = $request->kordinat_y;
            $info->id_status = $request->id_status;
            $info->id_jenis = $request->id_jenis;
            $info->id_media = $request->id_media;
            $info->keterangan = $request->keterangan;
            $info->save();

            return redirect()->action('InfoController@index');
        }    

    }

    public function destroy(Request $request, $id)
    {
        Info::destroy($request->id);
        
        return redirect()->action('InfoController@index');
    }
}
