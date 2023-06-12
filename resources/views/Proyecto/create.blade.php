@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{url('/Proyecto')}}" method="post" enctype="multipart/form-data">
    @csrf

    @include('Proyecto.form',['modo'=>'Crear'] )

</form>
</div>
@endsection