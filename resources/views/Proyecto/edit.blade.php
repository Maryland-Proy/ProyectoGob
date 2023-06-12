@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{url('/Proyecto/'.$proyecto->id) }} "  method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH') }} 

    @include('Proyecto.form',['modo'=>'Editar'])

</form>
</div>
@endsection