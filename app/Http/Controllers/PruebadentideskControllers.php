<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\venta;
use App\Models\costo;
class PruebadentideskControllers extends Controller
{
	public function index()
	{
		return view('logindentidesk');
	}
	public function verifica_user(Request $request)
	{
		$usuario= new usuario();
		$nombre=$usuario->nombre=$request->input('us');
		$clave=$usuario->clave=$request->input('clave');
		$usuario = DB::select("select * from usuarios where nombre='".$nombre."' and clave='".$clave."' ");
		if(empty($usuario))
		{
			echo "<script type='text/javascript'>alert('usuario no existe');</script>";
			return view('logindentidesk');
		}
		else
		{
			return view('inicio');
			//inicio();
		}
		
	}
	public function venta()
	{
		return view('ventas');
	}
	public function costo()
	{
		return view('costos');
	}
	public function ingresa_venta(Request $request)
	{
		$venta=new venta();
		$venta->nombre_producto=$request->input('producto');
		$venta->valor_producto=$request->input('precio');
		$venta->save();
		//$venta=DB::select("select * from ventas");
		//print_r($venta);
		return view('ventas');
	}
	public function inicio()
	{
		return view('inicio');
	}
	public function ver_ventas()
	{
		//$venta=new venta();
		//$venta=DB::select("select * from ventas");
		//print_r($venta);
		return view('ver_ventas', ['lista'=>venta::all()]);
	}
	public function ingresa_costo(Request $request)
	{
		$costo=new costo();
		$costo->nombre_insumo=$request->input('insumo');
		$costo->valor_insumo=$request->input('precio_insumo');
		$costo->save();
		return view('costos');
	}
	public function ver_costos()
	{
		return view('ver_costos', ['lista'=>costo::all()]);
	}
	public function ventas_por_mes(Request $request)
	{
		$mes=$request->input('mes');
		if($mes=='enero')
		{
			$fecha_inicial='2022-01-01';
			$fecha_final='2022-01-31';
			
		}
		else if($mes=='febrero')
		{
			$fecha_inicial='2022-02-01';
			$fecha_final='2022-02-29';
			
		}
		else if($mes=='marzo')
		{
			$fecha_inicial='2022-03-01';
			$fecha_final='2022-03-31';
			
		}
		else if($mes=='abril')
		{
			$fecha_inicial='2022-04-01';
			$fecha_final='2022-04-30';
			
		}
		else if($mes=='mayo')
		{
			$fecha_inicial='2022-05-01';
			$fecha_final='2022-05-31';
			
		}
		else if($mes=='junio')
		{
			$fecha_inicial='2022-06-01';
			$fecha_final='2022-06-31';
			
		}
		else if($mes=='julio')
		{
			$fecha_inicial='2022-07-01';
			$fecha_final='2022-07-31';
			
		}
		else if($mes=='agosto')
		{
			$fecha_inicial='2022-08-01';
			$fecha_final='2022-08-31';
			
		}
		else if($mes=='septiembre')
		{
			$fecha_inicial='2022-09-01';
			$fecha_final='2022-09-30';
			
		}
		else if($mes=='octubre')
		{
			$fecha_inicial='2022-10-01';
			$fecha_final='2022-10-31';
			
		}
		else if($mes=="noviembre")
		{
			$fecha_inicial='2022-11-01';
			$fecha_final='2022-11-30';
		}
		else if($mes=="diciembre")
		{
			$fecha_inicial='2022-12-01';
			$fecha_final='2022-12-31';
		}
			$venta=new venta();
			$venta=DB::select("select * from ventas  where created_at BETWEEN '".$fecha_inicial."' and '".$fecha_final."' ");
			return view('detalles_venta', ['lista'=>$venta]);
		
	}
	public function costos_por_mes(Request $request)
	{
		$mes=$request->input('mes');
		if($mes=='enero')
		{
			$fecha_inicial='2022-01-01';
			$fecha_final='2022-01-31';
			
		}
		else if($mes=='febrero')
		{
			$fecha_inicial='2022-02-01';
			$fecha_final='2022-02-29';
			
		}
		else if($mes=='marzo')
		{
			$fecha_inicial='2022-03-01';
			$fecha_final='2022-03-31';
			
		}
		else if($mes=='abril')
		{
			$fecha_inicial='2022-04-01';
			$fecha_final='2022-04-30';
			
		}
		else if($mes=='mayo')
		{
			$fecha_inicial='2022-05-01';
			$fecha_final='2022-05-31';
			
		}
		else if($mes=='junio')
		{
			$fecha_inicial='2022-06-01';
			$fecha_final='2022-06-31';
			
		}
		else if($mes=='julio')
		{
			$fecha_inicial='2022-07-01';
			$fecha_final='2022-07-31';
			
		}
		else if($mes=='agosto')
		{
			$fecha_inicial='2022-08-01';
			$fecha_final='2022-08-31';
			
		}
		else if($mes=='septiembre')
		{
			$fecha_inicial='2022-09-01';
			$fecha_final='2022-09-30';
			
		}
		else if($mes=='octubre')
		{
			$fecha_inicial='2022-10-01';
			$fecha_final='2022-10-31';
			
		}
		else if($mes=="noviembre")
		{
			$fecha_inicial='2022-11-01';
			$fecha_final='2022-11-30';
		}
		else if($mes=="diciembre")
		{
			$fecha_inicial='2022-12-01';
			$fecha_final='2022-12-31';
		}
			$costo=new costo();
			$costo=DB::select("select * from costos  where created_at BETWEEN '".$fecha_inicial."' and '".$fecha_final."' ");
			return view('detalles_costo', ['lista'=>$costo]);
		
	}
	
}