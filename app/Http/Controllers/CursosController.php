<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cursos;
use Illuminate\Support\Facades\Validator;

class CursosController extends Controller
{
    //
    function index(){
        // return "probando rutas api en laravel Controller ";
        $cursos = Cursos::all();
        return response()->json( $cursos, 200 );
    }   
  

    function guardar(Request $request){

        $validator = Validator::make($request->all(), [
            'nombre' => 'required',
            'instructor_id' => 'required',
            
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $curso = Cursos::create([
            'nombre' => $request->nombre,
            'instructor_id' => $request->instructor_id,            
        ]);

        return response()->json($curso, 201);       
        

    }   


    function mostrar ($id){

         $curso = Cursos::find($id);

            if (!$curso) {
                return response()->json(['message' => 'Curso no encontrado'], 404);
            }
            return response()->json($curso, 200);


        } 


  function eliminar($id){

         $curso = Cursos::find($id);

            if (!$curso) {                
            return response()->json(['message' => 'Curso no encontrado'], 404);
            }
            
            

            $curso->delete();

            return response()->json(['message' => 'Curso eliminado'], 200);



        } 


        function actualizar(Request $request, $id){

         $curso = Cursos::find($id);

            if (!$curso) {
                return response()->json(['message' => 'Curso no encontrado'], 404);
            }
           

            $validator = Validator::make($request->all(), [
            'nombre' => 'required',
            'instructor_id' => 'required'           ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }


        $curso->update([
            'nombre' => $request->nombre,
            'instructor_id' => $request->instructor_id,            
        ]);

        return response()->json($curso, 200);   


        } 

}
