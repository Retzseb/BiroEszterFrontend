<?php

namespace App\Http\Controllers;

use App\Models\Esemeny;
use App\Http\Requests\StoreEsemenyRequest;
use App\Http\Requests\UpdateEsemenyRequest;

class EsemenyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Esemeny::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEsemenyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Esemeny $esemeny)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEsemenyRequest $request, Esemeny $esemeny)
    {
        $esemeny -> fill($request -> all());
        $esemeny -> save();
        return response() -> json($esemeny, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Esemeny $esemeny)
    {
        $esemeny -> delete();
        return response() -> json(null, 200);
    }

    public function esemenyKategoriaval($id)
    {
        return Esemeny::with('kategoria')->where('id', $id)->get();
    } 
}
