<?php

namespace App\Http\Controllers;

use App\Models\Punto;
use Illuminate\Http\Request;

class PuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $point = Punto::all();
        //return $point;
        return view('puntos.index', compact('point'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('puntos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //return $request->all();

        $point = new Punto();
        $point->nombre = $request->input('nombre');
        $point->area= $request->input('area');
        $point->puntos = $request->input('puntos');

        $point->save();

        //return view('puntos.index');

        return 'Guardado';



    }

    /**
     *
     *
     * return Display the specified resource.
     */
    public function show(string $id)
    {
          $point = Punto::find($id);
           return view('puntos.show', compact('point'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $point = Punto::find($id);
        return view('puntos.edit',compact('point'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
