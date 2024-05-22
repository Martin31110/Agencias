<?php

namespace App\Http\Controllers;

use App\Models\Viajes;
use App\Models\tipo_viajes;
use Illuminate\Http\Request;

class ViajesController extends Controller
{

    public function index()
    {
        $viajes = Viajes::all();
        return view('viajesIndex', compact('viajes'));
    }


    public function create()
    {
        $tipo_viajes = tipo_viajes::all();
        return view('viajeCreate', compact('tipo_viajes'));
    }


    public function store(Request $request)
    {
        $viajes = new Viajes();
        $viajes->Destino = $request->Destino;
        $viajes->Cliente = $request->Cliente;
        $viajes->Hotel = $request->Hotel;
        $viajes->Fecha = $request->Fecha;
        $viajes->numeroPersonas = $request->numeroPersonas;
        $viajes->Servicios = $request->Servicios;
        $viajes->Estado = $request->Estado;
        $viajes->save();
        

    //Asociar las   Sucursales sleccionadas al juguete
        $viajes->tipo_viajes()->attach($request->tipo_viajes);

        Session()->flash('success', 'Se ha guardado con extio');
        return redirect('/viajes');
    }


    public function show($id)
    {
        $viajes = Viajes::findOrFail($id);
        return view('viajeShow', compact('viajes'));
    }


    public function edit($id)
    {
        $tipo_viajes = tipo_viajes::all();
        $viajes = Viajes::findOrFail($id);
        return view('viajeEdit', compact('tipo_viajes', 'viajes'));
    }


    public function update(Request $request, Viajes $viajes)
    {
        $viajes = new Viajes();
        $viajes->Destino = $request->Destino;
        $viajes->Cliente = $request->Cliente;
        $viajes->Hotel = $request->Hotel;
        $viajes->Fecha = $request->Fecha;
        $viajes->numeroPersonas = $request->numeroPersonas;
        $viajes->Servicios = $request->Servicios;
        $viajes->Estado = $request->Estado;
        $viajes->save();


        if ($request->has('tipo_viajes')) {
            $viajes->tipo_viajes()->sync($request->tipo_viajes);
        } else {
            $viajes->tipo_viajes()->detach(); 
        }

        return redirect('/viajes');
    }


    public function destroy($id)
    {
        $id = Viajes::findOrFail($id);
        $id->delete();
        Session()->flash('Success', 'Se ah eliminado con exito');
        return redirect('/viajes');
    }
}
