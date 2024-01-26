<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MateriaAsignada;
use App\Models\Materias;
use App\Models\Alumno;
use App\Models\GrupoMateria;

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
        $ids = $resultados->pluck('id_materia');
        
        $materias = Materias::whereIn('id', $ids)->get();
        
        return response()->json($materias);
        
    }
    
    //BUSCAR MATERIA POR CUATRIMESTRE Y GRUPO
    public function materiasGrupo($id){

        //BUSCA EL ID QUE SEAN IGUALES Y TRAE EL ID_GRUPO
        $id_grupo = Alumno::where('id', $id)->pluck('id_grupo')->first();
        $cuatrimestre = Alumno::where('id', $id)->pluck('cuatrimestre')->first();

        $conditions = [
            ['id_grupo', '=', $id_grupo],
            ['cuatrimestre', '=',$cuatrimestre ]
         ];
        $materias = GrupoMateria::where($conditions)->pluck('id_materia');


        $materias = Materias::whereIn('id', $materias)->get();


        return $materias;
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
