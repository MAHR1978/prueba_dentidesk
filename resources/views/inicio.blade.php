@extends('layout/template')

@section('title', 'bienvenido')

@section('content')

<div class="container">
		
    <div class="panel panel-default">
        <div align="center" class="panel-heading"><h4>Bienvenido !!, seleccione la opcion deseada</h4></div>
    </div>
		<div class="row">
			<a class="btn btn-primary" href="{{route('ventas')}}">ingresar ventas</a>
		</div>
		<div class="row">
            <a class="btn btn-primary" href="{{route('costos')}}">ingresar Costos</a>
        </div>
</div>
@endsection