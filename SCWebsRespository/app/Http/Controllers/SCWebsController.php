<?php

namespace App\Http\Controllers;

use App\Models\SCWebs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SCWebsController extends Controller
{
    public function index()
    {
        $webs = DB::select('SELECT * FROM webs');
        return view('index', ['webs' => $webs]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        if ($request->cliente == null || $request->url == null || $request->abreviacion == null || $request->estado == null) {
            return view('create');
        } else {
            DB::insert('INSERT INTO webs (cliente,url,abreviacion,estado) VALUES (?,?,?,?)', [$request->cliente, $request->url, $request->abreviacion, $request->estado]);
            return redirect('/')->withSuccess('Nueva web creada');
        }
    }


    public function edit($id)
    {
        $webs = DB::select('SELECT * FROM webs WHERE id = ?', [$id]);
        return view('update', ['webs' => $webs]);
    }
    public function update(Request $request, $id)
    {
        if ($request->cliente == null || $request->url == null || $request->abreviacion == null || $request->estado == null) {
            return view('update');
        } else {
            DB::table('webs')->where('id', $id)->update(array('cliente' => $request->cliente, 'url' => $request->url, 'abreviacion' => $request->abreviacion, 'estado' => $request->estado));
            return redirect('/');
        }
    }

    public function delete($id)
    {
        DB::delete('DELETE FROM webs WHERE id = ?', [$id]);
        return redirect('/');
    }
}
