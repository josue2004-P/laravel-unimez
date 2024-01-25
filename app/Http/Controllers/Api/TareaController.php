<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarea = Tarea::all();
        return $tarea;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarea = new Tarea();
        $tarea->nombre = $request->nombre;
        $tarea->descripcion = $request->descripcion;
        $tarea->id_materia = $request->id_materia;
        $tarea->id_grupo = $request->id_grupo;
        $tarea->id_parcial = $request->id_parcial;
        $tarea->id_maestro = $request->id_maestro;


        $tarea->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($p,$m)
    {
        $conditions = [
            ['id_parcial', '=', $p],
            ['id_materia', '=', $m]
         ];
         $resultados = Tarea::where($conditions)->get();
         return response()->json($resultados);
         
    }

    public function tareaId($id,$p,$m)
    {
        $conditions = [
            ['id', '=', $id],
            ['id_parcial', '=', $p],
            ['id_materia', '=', $m]
         ];
         $resultados = Tarea::where($conditions)->get();
         return response()->json($resultados);
         
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
