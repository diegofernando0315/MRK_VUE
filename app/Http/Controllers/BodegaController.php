<?php

namespace App\Http\Controllers;

use App\Http\Requests\BodegaRequest;
use App\Http\Bodega;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Iluminate\Support\Facades\Redirect;


class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Bodega=Bodega::all();
        return inertia::render('mostrarBodega', compact('Bodega'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('formcrearBodega');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Bodega::create($request->all());
        return Inertia::render('mostrarBodega');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return inertia::render('formeditarBodega',['Bodega'=>$Bodega]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Bodega->update($request->all());
        returnredirect::route('Bodega.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Bodega->delete();
        returnredirect::route('Bodega.index');
    }
}
