<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cursos;
use Illuminate\Support\Facades\Validator;

use App\Services\CursosRaitingService;


class CursosController extends Controller
{
    //
    protected $ratingService;

    // Inyectamos el servicio en el constructor
    public function __construct( CursosRaitingService $ratingService)
    {
        $this->ratingService = $ratingService;
    }
    
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




        function Principal(){


        // Usamos el método del servicio
        $raiting = $this->ratingService->getAverageRatings();

        


        $cursos = Cursos::select('cursos.id', 'cursos.nombre', 'instructor_id', 'users.name as instructor' )         
        ->join('instructor', 'cursos.instructor_id', 'instructor.id')
        ->join('users', 'instructor.user_id', 'users.id'  )        
        ->cursorPaginate(3);
               //   ->paginate(3)       ;
               // ->simplePaginate(3);


            return view('principal', compact('cursos', 'raiting') );
        }

}
