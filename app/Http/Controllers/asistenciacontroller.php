<?php

namespace App\Http\Controllers;

use App\models\asistencia;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class asistenciacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistencia=asistencia::all();
        return inertia::render('mostrarasistencia', ['asistencia'=>$asistencia]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia::render('formcrearasistencia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'inicio'=>'required',
          'final'=>'required',
          'totaldia'=>'required',
          'fecha'=>'required',
          'empleado'=>'required'
        ]);

        echo$asistencia::create($request->all());
        //return Redirect::route('asistencia.index');
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
        return inertia::render('formeditarasistencia',['asistencia'=> $asistencia]);
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
        $asistencia->update($request->all());
        returnredirect::route('asistencia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asistencia->delete();
        returnredirect::route('asistencia.index');
    }
}    
