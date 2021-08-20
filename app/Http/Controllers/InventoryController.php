<?php

namespace App\Http\Controllers;

use Illuminate\Http\InventoryRequest;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use App\Models\Inventory;
use Illuminate\Http\Request;


class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventory = Inventory::all();
        return Inertia::render('Inventorys/Index', [
            'registros' => $inventory,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Inventorys/FormStore');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //   return response()->json($request);

        Inventory::Insert([
            'cantidad'=> $request->cantidad,
            'tipo'=> $request->tipo,
            'proveedor'=> $request->estado,
            'fecha'=> $request->fecha
            ]);
        

     //   Inventory::create($request->validated());

       return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        return Inertia::render('Inventorys/FormEditar',compact('inventory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        $inventory->update($request->validated());

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        ($inventory);
        $inventory->delete();
        
        return $this->index();
    }
}
