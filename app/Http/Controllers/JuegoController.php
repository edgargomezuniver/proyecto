<?php

namespace App\Http\Controllers;

use App\Juego;
use Illuminate\Http\Request;
use Session;

class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juegos = Juego::all();
        return view('juegos.index',compact('juegos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('juegos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate{[
            'titulo' => 'required',
            'descripcion' => 'required',
            'genero' => 'required',
            'precio' => 'required',
        ]};

        Juego::create ($request->all());

        Session::flash('message','Juego publicado con exito');
        return redirect()->route('juegos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function show(Juego $juego)
    {
        return view('juegos.show', compact('juego'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function edit(Juego $juego)
    {
        return view('juegos.edit' ,compact('juego'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Juego $juego)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'genero' => 'required',
            'precio' => 'required',
        ]);

        $juego->update($request->all());

        Session::flash('message', 'se ha modificado el juego correctamente');
        return redirect()->route('juegos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function destroy(Juego $juego)
    {
        $juego->delete();
        Session::flash('message', 'Juego ha sido borrado correctamente');
        return redirect()->route('juegos.index');
    }
}
