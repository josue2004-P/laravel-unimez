<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MateriaAsignada;
use App\Models\Materias;


class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materias::all();
        return $materias;
    }

    // Materias por maestro

    // public function buscar($id)
    // {
    //     $resultados = Materias::where('id_maestro', $id)->get();
    //   return response()->json($resultados);
    // }
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function materiaId($id)
    {

        $materias = Materias::find($id);

        return $materias;
        
    }
    
    public function show($id)
    {
        $resultados = MateriaAsignada::where('id_maestro', $id)->get();
        // Select only the 'id_maestro' attribute from each object in the collection
        $ids = $resultados->pluck('id_maestro');
        
        $materias = Materias::whereIn('id_maestro', $ids)->get();
        
        return response()->json($materias);
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
