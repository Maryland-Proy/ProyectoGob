@extends('layouts.app')

@section('content')
<div class="container">
 
    @if(Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">
                {{Session::get('mensaje')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hiden=true>&times;</span>
                </button>
    
        </div>
    @endif
    

  
<a href="{{url('Proyecto/create')}}" class= "btn btn-success" > Registrar Nuevo Proyecto</a>
&nbsp
<a  href="{{ route('proyecto.pdf') }}" class="btn btn-primary btn-sm ">
  {{ __('PDF') }}
</a>

<br>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre del proyecto</th>
                <th>FuenteFondos</th>
                <th>Monto Planificado</th>
                <th>Monto Patrocinado</th>
                <th>Monto Fondos Propios</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proyectos as $proyecto)
            <tr>
            
                <td>{{ $proyecto->id}}</td>
                <td>{{ $proyecto->NombreProyecto}}</td>
                <td>{{ $proyecto->fuenteFondos}}</td>
                <td>{{ $proyecto->MontoPlanificado}}</td>
                <td>{{ $proyecto->MontoPatrocinado}}</td>
                <td>{{ $proyecto->MontoFondosPropios}}</td>
                <td>
                    <a href="{{url('/Proyecto/'.$proyecto->id.'/edit') }} " class="btn btn-warning">
                        Editar
                    </a>
                | 
                    <form action="{{url('/Proyecto/'.$proyecto->id) }} " class="d-inline" method="post">
                    @csrf
                    {{method_field('DELETE') }}    
                        <input class="btn btn-danger" type="submit" onclick="return confirm('Quieres Borrar?') " 
                        value="Borrar">
                    </form>
                    
                    
                </td>
            </tr>
            @endforeach
        </tbody>
     
    </table>
    {!! $proyectos->Links() !!}
</div>
@endsection


