<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Jenis;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class JenisController extends Controller
{
    public function index()
    {
        $jenis = Jenis::all();
        return view('jenis.index', compact('jenis'));
    }

    public function create()
    {
        return view('jenis.create');
    }

    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'tipe' => 'required|max:255'
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $jenis = new Jenis;
            $jenis->tipe = $request->tipe;
            $jenis->save();
    
            return redirect()->action('JenisController@index');
        }
    }

    public function show(Request $request, $id_jenis)
    {
        $jenis = Jenis::find($id_jenis);
        return view('jenis.show', compact('jenis'));
    }

    public function edit($id_jenis)
    {
        $jenis = Jenis::find($id_jenis);
        return view('jenis.edit', compact('jenis'));
    }

    public function update(Request $request, $id_jenis)
    {
        $v = Validator::make($request->all(), [
            'tipe' => 'required|max:255'
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        } else {
            $jenis = Jenis::find($request->id);
            $jenis->tipe = $request->tipe;
            $jenis->save();

            return redirect()->action('JenisController@index');
        }
    }

    public function destroy(Request $request, $id)
    {
        Jenis::destroy($request->id);
        
        return redirect()->action('JenisController@index');
    }
}
