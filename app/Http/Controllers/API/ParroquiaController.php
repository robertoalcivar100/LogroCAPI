<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Canton;
use App\Models\Parroquia;
use App\Models\Provincia;
use App\Models\RecintoElectoral;
class ParroquiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Parroquia::all();
    }

    
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parroquia $parroquia)
    {
        $parroquia->delete();
        return response()->json([
            'res'=> true,
            'mensaje'=>'Parroquia Eliminado Correctamente'
        ],200);
    }
}
