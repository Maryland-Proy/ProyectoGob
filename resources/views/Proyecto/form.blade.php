    <h1>{{ $modo }} Proyecto </h1>
    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach( $errors->all() as $error)
                   <li> {{ $error }}  </li>
                @endforeach
            </ul>
        </div>>

       

    @endif

    <div class="form-group">
    <label for="NombreProyecto">Nombre del Proyecto</label>
    <input type="text" class="form-control" name="NombreProyecto" 
    value="{{ isset($proyecto->NombreProyecto)?$proyecto->NombreProyecto:old('NombreProyecto') }}" id="NombreProyecto"> 
    </div>
    <div class="form-group">
    <label for="fuenteFondos">Fuente Fondos</label>
    <input type="text" class="form-control" name="fuenteFondos" 
    value="{{ isset($proyecto->fuenteFondos)?$proyecto->fuenteFondos:old('fuenteFondos')  }}" id="fuenteFondos">
    </div>

    <div class="form-group">
    <label for="MontoPlanificado">Monto Planificado</label>
    <input type="double" class="form-control" name="MontoPlanificado" 
    value="{{ isset($proyecto->MontoPlanificado)?$proyecto->MontoPlanificado:old('MontoPlanificado')  }}" id="MontoPlanificado">
    </div>

    <div class="form-group">
    <label for="MontoPatrocinado">Monto Patrocinado</label>
    <input type="double" class="form-control" name="MontoPatrocinado" 
    value="{{ isset($proyecto->MontoPatrocinado)?$proyecto->MontoPatrocinado:old('MontoPatrocinado')  }}" id="MontoPatrocinado">
    </div>

    <div class="form-group">
    <label for="MontoFondosPropios">Monto Fondos Propios</label>
    <input type="double" class="form-control" name="MontoFondosPropios" 
    value="{{ isset($proyecto->MontoFondosPropios)?$proyecto->MontoFondosPropios:old('MontoFondosPropios')  }}" id="MontoFondosPropios">
    </div>

    <br><br>
    <input class="btn btn-success" type="submit" value="{{ $modo }} Datos">

    <a class="btn btn-primary" href="{{url('Proyecto/')}}"> Regresar </a>
  