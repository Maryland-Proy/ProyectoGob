<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      
    
   
    <!--<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">-->
      
    <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">
   

</head>
<body>
    <h3>Gobierno de el
        <br>Salvador
    </h3>
    <H4>Nombre de la Institución: CORSAIN</H4>
    <h5> Fecha: <div class="align=cleft"> <div class="date">{{ date('d/m/Y') }}     </h5>
<br><br>    
    <table class="table table-striped table-hover">
        <thead class="thead">
      
            <tr>
                <th>#</th>
                <th>Nombre del proyecto</th>
                <th>FuenteFondos</th>
                <th>Monto Planificado</th>
                <th>Monto Patrocinado</th>
                <th>Monto Fondos Propios</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($proyecto as $proyecto)
            <tr>
                
                <td>{{ $proyecto->id}}</td>
                <td>{{ $proyecto->NombreProyecto}}</td>
                <td>{{ $proyecto->fuenteFondos}}</td>
                <td>{{ $proyecto->MontoPlanificado}}</td>
                <td>{{ $proyecto->MontoPatrocinado}}</td>
                <td>{{ $proyecto->MontoFondosPropios}}</td>
                
            </tr>
            @endforeach
        </tbody>
     
    </table>
</body>
</html>