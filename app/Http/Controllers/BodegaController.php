<?php

namespace App\Http\Controllers;

Use App\Models\Bodega;
use App\Http\Requests\BodegaRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;


class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodega=Bodega::all();
        
        return inertia::render('Bodegas/Index', [
            'registros' => $bodega,

        ]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Bodegas/FormStore');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BodegaRequest $request)
    {
        Bodega::create($request->validated());

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param int  $id 
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bodega $bodega)
    {
        return Inertia::render('Bodegas/FormEditar',compact('bodega'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(BodegaRequest $request, Bodega $bodega )
    {
        $bodega->update($request->validated());

        return $this->index();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  in $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bodega $bodega)
    {
        ($bodega);
        $bodega->delete();
        
        return $this->index();
    }
}

