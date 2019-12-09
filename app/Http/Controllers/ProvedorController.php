<?php

namespace App\Http\Controllers;

use App\Provedor;
use Illuminate\Http\Request;
use Session;

class ProvedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provedors = Provedor::all();
        return view('provedors.index',compact('provedors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('provedors.create');
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
            'nombre' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'email' => 'required',
        ]};

        Provedor::create ($request->all());

        Session::flash('message','proveedor publicado con exito');
        return redirect()->route('provedors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Provedor  $provedor
     * @return \Illuminate\Http\Response
     */
    public function show(Provedor $provedor)
    {
        return view('provedors.show', compact('provedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Provedor  $provedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Provedor $provedor)
    {
        return view('provedor.edit' ,compact('provedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Provedor  $provedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provedor $provedor)
    {
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'email' => 'required',
        ]);

        $provedor->update($request->all());

        Session::flash('message', 'se ha modificado el proveedor correctamente');
        return redirect()->route('provedors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provedor  $provedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provedor $provedor)
    {
        $provedor->delete();
        Session::flash('message', 'proveedor borrado correctamente');
        return redirect()->route('provedors.index');
    }
}
