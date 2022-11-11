@extends('layout/template')

@section('title', 'ver ventas')

@section('content')
<script type="text/javascript">	
	$(document).ready(function(){
		//Defino los totales de mis 2 columnas en 0
		var total_col1 = 0;
		var total_col2 = 0;
		//Recorro todos los tr ubicados en el tbody
		$('#detalle_venta tbody').find('tr').each(function (i, el) {
				 
			//Voy incrementando las variables segun la fila ( .eq(0) representa la fila 1 )     
			total_col1 += parseFloat($(this).find('td').eq(0).text());
			total_col2 += parseFloat($(this).find('td').eq(1).text());
					
		});
		//Muestro el resultado en el th correspondiente a la columna
		//$('#detalle_venta tfoot tr th').eq(0).text("Total " + total_col1);
		$('#detalle_venta tfoot tr th').eq(1).text("Total " + total_col2);
		$("#pormes").click(function(){
			alert("aki")
			$("#mes").css('display','block');
			$("#busca_por_mes").css('display','block');
		})
	})
	
	function por_mes()
	{
		var mes=$("#mes").val();
		if(mes=="")
		{
			alert("debe ingresar el mes")
		}
		else
		{
			$("#det_venta_por_mes").submit();
		}
	}

</script>
<div class="panel panel-default">
        <div align="center" class="panel-heading"><h2>detalles ventas<h2></div>
</div>
<nav class="navbar navbar-default" role="navigation" width="80%">
	<a class="nav-link" id="pormes" href="#">ventas por mes</a>
	<a class="nav-link" href="inicio">inicio</a>
</nav>
<div class="container">
	<form id="det_venta_por_mes"  method="post" action="{{route('ventas_por_mes')}}" >
		@csrf
		<select id="mes" name="mes" style="display:none" class="form-control">
			<option value="">seleccione...</option>
			<option value="enero">enero</option>
			<option value="febrero">febrero</option>
			<option value="marzo">marzo</option>
			<option value="abril">abril</option>
			<option value="mayo">mayo</option>
			<option value="junio">junio</option>
			<option value="julio">julio</option>
			<option value="agosto">agosto</option>
			<option value="septiembre">septiembre</option>
			<option value="octubre">octubre</option>
			<option value="noviembre">noviembre</option>
			<option value="diciembre">diciembre</option>
		</select>
		<!--<input type="text" style="display:none" id="mes" name="mes" class="form-control" placeholder="ingrese mes a buscar"/>-->
	</form> 
	<div class="row">
		<div class="col-sm4">
			<button id="busca_por_mes" type="button" style="display:none" class="btn btn-primary" onclick="por_mes()" >buscar</button>
		</div>
	</div> 
</div>
<div class="card card-body">
	<div class="table-responsive"> 
		<table class="table detalle_productos" style="" id="detalle_venta">
			<thead>
				<tr>
					<th>Producto</th>
					<th>precio</th>
					<th>fecha</th>
				</tr>
			</thead>
			<tbody>
				@foreach($lista as $item)
				<tr>
					<td>{{$item->nombre_producto}}</td>
					<td>{{$item->valor_producto}}</td>
					<td>{{$item->created_at}}
				</tr>
				@endforeach
			</tbody>
			<tfoot>
				<tr>
					<th></th>
					<th>Total</th>
				</tr>
			</tfoot>
		</table>
	</div>
</div>

@endsection