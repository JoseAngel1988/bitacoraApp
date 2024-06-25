<?php

namespace App\Http\Controllers;

use App\Models\Indicador;
use Illuminate\Http\Request;

class IndicadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       $indicator = Indicador::all();
        return view('indicador.index', compact('indicator'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('indicador.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*return $request->all();*/

        $indicator = new Indicador();
        $indicator->id_agente = $request->input('id_agente');
        $indicator->chat_atendidos = $request->input('chat_atendidos');
        $indicator->tiempo_promedio_chat = $request->input('tiempo_promedio_chat');
        $indicator->calificacion_satisfaccion = $request->input('calificacion_satisfaccion');
        $indicator->save();

        return 'Guardado';

         //return view ('indicador.index');

    }

    /**
     * Display the specified resource.
     */
     public function show(string $id)
    {
        $indicator = Indicador::find($id);
        return view('indicador.show', compact('indicator'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
