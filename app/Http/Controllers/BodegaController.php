<?php

namespace App\Http\Controllers;

Use App\Models\Bodega;
// use App\Http\Requests\BodegaRequest;
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
        $bodegas = Bodega::all();

        return inertia::render('Bodegas/Index', [
            'bodegas' => $bodegas
        ]);
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
     * @param  \App\Models\Bodega 
     * @return \Illuminate\Http\Response
     */
    public function show(Bodega $bodega)
    {
        dd($bodega);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Bodega 
     * @return \Illuminate\Http\Response
     */
    public function edit(Bodega $bodega)
    {
        return inertia::render('formeditarBodega',[$bodega=>'Bodega']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bodega 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bodega $customer )
    {
        $customer->update($request->all());
        return redirect ()->route('Bodega.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bodega $bodega
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bodega $bodega)
    {
        $bodega->delete();
        return redirect ()->route('Bodega.index');
    }
}

