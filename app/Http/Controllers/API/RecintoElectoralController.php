<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Canton;
use App\Models\Parroquia;
use App\Models\Provincia;
use App\Models\RecintoElectoral;
class RecintoElectoralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return RecintoElectoral::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActualizarRecintosElectoralesRequest $request, RecintoElectoral $recintoelectoral)
    {
        $recintoelectoral>update($request->all());
        return response()->json([
            'res'=> true,
            'mensaje'=>'Recinto Actualizado Correctamente'
        ],200);

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( RecintoElectoral $recintoelectoral)
    {
        $recintoelectoral->delete();
        return response()->json([
            'res'=> true,
            'mensaje'=>'Recinto Eliminado Correctamente'
        ],200);
    }
}
