@extends('layout/template')

@section('title', 'ingreso costo')

@section('content')
<script type="text/javascript">
	function ingresa_costo()
	{
		var insumo=$("#insumo").val();
		var precio_insumo=$("#precio_insumo").val();
		if(insumo=="")
		{
			alert("ingrese un insumo");
		}
		else if(precio_insumo=="")
		{
			alert("ingrese el precio del insumo");
		}
		else
		{
			$("#ingreso_costo").submit();
		}
	}
</script>

<div class="container">
	<div class="panel panel-default">
		<div align="center" class="panel-heading"><h2>ingreso costo<h2></div>
	</div>
	<nav class="navbar navbar-light bg-light">
	  <a class="nav-link" href="inicio">inicio</a>
	  <a class="nav-link" href="ver_ventas">ver ventas</a>
	  <a class="nav-link" href="ver_costos">ver costos</a>
	</nav>
	<div class="panel-body">
		<div class="card card-body"> 
			<form id="ingreso_costo"  method="post" action="{{route('ingreso_costo')}}" >
				@csrf
				<div class="row">
					<div class="col-sm-4">
						nombre insumo:
					</div>
					<div class="col-sm-4">
						<input id="insumo" name="insumo" type="text" class="form-control" />
					</div>
                </div>
				<div class="row">
					<div class="col-sm-4">
						precio insumo:
					</div>
					<div class="col-sm-4">
						<input id="precio_insumo" name="precio_insumo" type="number" class="form-control" />
					</div>
                </div>
			</form>
			<div class="row">
                <button type="button" class="btn btn-primary" onclick="ingresa_costo()" >ingresar</button>
            </div>
		</div>
	</div>
</div>

@endsection