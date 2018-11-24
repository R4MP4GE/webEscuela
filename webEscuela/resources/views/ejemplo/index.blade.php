@extends('layouts.app')


{{--asi se hace un comentario del lado del servidor--}}

@section('subtitulo',"listado de usuario")



@section('content')
<!-- dentro del content si puedo meter un comntario html y que quede dentro  -->
    @foreach($usuarios as $usuario)
   <div class="row col-sm-12"> <label>Nombre usuario: {{$usuario->name}}</label> </div> 
    @endforeach

@endsection





