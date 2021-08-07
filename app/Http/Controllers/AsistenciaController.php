<?php

namespace App\Http\Controllers;

use App\Http\Requests\AsistenciaRequest;
use App\Models\Asistencia;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistencia = Asistencia::all();
        
        return inertia::render('Asistencias/Index', [
            'registros' => $asistencia,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Asistencias/FormStore');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AsistenciaRequest $request)
    {
        Asistencia::create($request->validated());

        return $this->index();
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
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Asistencia $asistencia)
    {
        return Inertia::render('Asistencias/FormEditar',compact('asistencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function update(AsistenciaRequest $request, Asistencia $asistencia)
    {
        $asistencia->update($request->validated());

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asistencia $asistencia)
    {
        ($asistencia);
        $asistencia->delete();
        
        return $this->index();
    }
}
