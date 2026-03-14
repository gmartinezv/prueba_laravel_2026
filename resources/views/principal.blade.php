<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




    </head>
    <body class="">
        <div class="container">            
                <h1> {{ __("Principal de Cursos ") }} </h1>
            
        </div>

        <div class="container">

                    <h3 class="bg-success text-white"> Listado de cursos </h3>

                        <table class="table table-bordered data-table">
                        <thead>
                            <tr class="table-primary">
                                <th>id</th>
                                <th>nombre</th>
                                <th>Instructores </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($cursos as $curso)
                                <tr>
                                    <td>{{ $curso->id }}</td>
                                    <td>{{ $curso->nombre }}</td>
                                    <td>{{ $curso->instructor  }}</td>                                       

                                </tr>
                            @endforeach

                            
                        </tbody>
                    </table>
<div class="mt-4">
    {{ $cursos->links() }}
</div>
                    <!--  $cursos->withQueryString()->links('pagination::bootstrap-5') -->







                    

                    <div class='row mt-6 py-4'>
                        <div class='col-md-5'>
                            <h3 class="bg-success text-white mt-6"> Promedios de cursos </h3>

                        <table class="table table-bordered data-table">
                        <thead>
                            <tr class="table-primary">
                                
                                <th>nombre</th>
                                <th>Promedio </th>
                                <th>Cantidad </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($raiting['datos'] as $rai)
                                <tr>
                                    <td>{{ $rai->id }}.- {{ $rai->nombre }}</td>
                                    <td>{{ $rai->promedio  }}</td>                                       
                                    <td>{{ $rai->cantidad  }}</td>  
                                </tr>                            
                            @endforeach 
                        </tbody>
                    </table>
                    </div>  
                    </div>  

  {{  $raiting['sql']  }}

        </div>  




    </body>
</html>
