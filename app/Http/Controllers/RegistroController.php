<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $register = Registro::count();

        return view('usuarios.index', ['registro' => $register]);



        /**return view ('usuarios.index');**/


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contraseñaEncriptada = Hash::make($request->input('contraseña'));

        $register = new Registro();
        $register -> nombre = $request->input('nombre');
        $register -> correo = $request->input('correo');
        $register -> contraseña = $contraseñaEncriptada;
        $register->save();



        return view('usuarios.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $register = Registro::find($id);
        return view ('usuarios.show', compact('register'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $register = Registro::find($id);
        return view('usuarios.edit',compact('register'));

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
