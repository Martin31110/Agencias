<?php

namespace App\Http\Controllers;

use App\Models\tipo_viajes;
use Illuminate\Http\Request;

class TipoViajesController extends Controller
{

    public function index()
    {
        $tipo_viajes = tipo_viajes::all();
        return view('tipoIndex', compact('tipo_viajes'));
    }

    public function create()
    {
        return view('tipoCreate');
    }

    public function store(Request $request)
    {
        tipo_viajes::create($request->all());
        return redirect('/tipoViajes');
    }


    public function show($id)
    {
        $tipo_viajes = tipo_viajes::findOrFail($id);
        return view('tipo_viajesShow', compact('tipo_viajes'));
    }

    public function edit(tipo_viajes $tipo_viajes)
    {
        //
    }

    public function update(Request $request, tipo_viajes $tipo_viajes)
    {
        //
    }

    public function destroy(tipo_viajes $tipo_viajes)
    {
        //
    }
}
