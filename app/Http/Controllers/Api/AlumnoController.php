<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\TareaSubida;
use App\Models\TareaCalificada;
use App\Models\MateriaAsignada; 
use App\Models\Materias;


class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //Total alumno
     public function totalALumno($id)
     {
       
        $resultados = MateriaAsignada::where('id_maestro', $id)->get();
        // Select only the 'id_maestro' attribute from each object in the collection
        $ids = $resultados->pluck('id_maestro');
        //Busca las materias del arreglo
        $materias = Materias::whereIn('id_maestro', $ids)->get();
        //Dame solos los id_grupo
        $materias = $materias->pluck('id_grupo');
        //Busca los alumnos que estan en id_grupo
        $alumnos = Alumno::whereIn('id_grupo', $ids)->get();
        $alumnos = $alumnos->count();


        return response()->json($alumnos);
     }


     public function alumnoGrupo($id)
     {
         $conditions = [
             ['id_grupo', '=', $id],
          ];
         $alumnos = Alumno::where($conditions)->get();
         return $alumnos;
     }

    public function index($id,$parcial,$materia)
    {
        $conditions = [
            ['id_tarea', '=', $id],
            ['id_parcial', '=', $parcial],
            ['id_materia','=',$materia],
         ];

         $id_alumno = TareaSubida::where($conditions)->pluck('id_alumno');

        $alumnos = Alumno::whereNotIn('id', $id_alumno)->get();
        return $alumnos;
    }

    public function tareaSubida($id,$parcial,$materia)
    {
        $conditions = [
            ['id_tarea', '=', $id],
            ['id_parcial', '=', $parcial],
            ['id_materia','=',$materia],
         ];

         $id_alumno = TareaSubida::where($conditions)->pluck('id_alumno');


        $alumnos = Alumno::find($id_alumno);

        return $alumnos;
    }

    public function tareaCalificada($id,$parcial,$materia)
    {
        $conditions = [
            ['id_tarea', '=', $id],
            ['id_parcial', '=', $parcial],
            ['id_materia','=',$materia],
         ];

         $id_alumno = TareaCalificada::where($conditions)->pluck('id_alumno');


        $alumnos = Alumno::find($id_alumno);

        return $alumnos;
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
    public function show($id)
    {
        //
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
