@extends('layout/template')

@section('title', 'mantenedor ventas')

@section('content')
<script type="text/javascript">
	 function ingresa_ventas()
	 {
		var producto=$("#producto").val();
		var precio=$("#precio").val();
		if(producto=="")
		{
			alert("debe ingresar un producto");
		}
		else if(precio=="")
		{
			alert("debe ingresar un precio");
		}
		else
		{
			$("#ingresa_venta").submit();
		}
	 }
</script>

<div class="container">
	<div class="panel panel-default">
		<div align="center" class="panel-heading"><h2>ingreso venta<h2></div>
	</div>
	<nav class="navbar navbar-default" role="navigation" width="80%">
	  <a class="nav-link" href="inicio">inicio</a>
	  <a class="nav-link" href="ver_ventas">ver ventas</a>
	  <a class="nav-link" href="ver_costos">ver costos</a>
	</nav>
	<div class="panel-body">
		<div class="card card-body"> 
			<form id="ingresa_venta"  method="post" action="{{route('ingreso_venta')}}" >
				@csrf
				<div class="row">
					<div class="col-sm-4">
						producto:
					</div>
					<div class="col-sm-4">
						<input id="producto" name="producto" type="text" class="form-control" />
					</div>
                </div>
				<div class="row">
					<div class="col-sm-4">
						precio:
					</div>
					<div class="col-sm-4">
						<input id="precio" name="precio" type="number" class="form-control" />
					</div>
                </div>
			</form>
			<div class="row">
                <button type="button" class="btn btn-primary" onclick="ingresa_ventas()" >ingresar</button>
            </div>
		</div>
	</div>
</div>
			
					