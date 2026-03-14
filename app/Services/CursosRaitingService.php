<?php

namespace App\Services;

use App\Models\Calificacion;
use Illuminate\Support\Facades\DB;

class CursosRaitingService
{
    /**
     * Calcula el rating promedio de los cursos de forma optimizada.
     */
    
    public function getAverageRatings()
    {
        // Usamos withAvg para que Laravel haga el cálculo en SQL
        // Esto es mucho más rápido que procesarlo en PHP

        $datos =  Calificacion::select('curso_instructor_id', 'nombre', 
        DB::raw('round(AVG(puntaje),0) as promedio'), 
        DB::raw('count(curso_instructor_id) as cantidad') )
            // ->Avg('puntaje')            
            ->join('cursos', 'calificacion.curso_instructor_id', 'cursos.id')
            ->where('hacia_cu_in','=',1)    // 1 = curso, 2 = instructor
            ->groupBy('curso_instructor_id', 'nombre')
            ->orderBy('nombre'); 
            //   ->cursorPaginate(10);

            $sql = $datos->toSql();

            $data = ['datos' => $datos, 'sql'=>$sql];


            return $data ;
    }
}