@extends('layout/template')

@section('title', 'login')
       
	      
            <script type="text/javascript">
                function ingreso()
                {
                   var usuario=$("#us").val();
                   var clave=$("#clave").val();
                   if(usuario=="")
                   {
                       alert("Debe ingresar un usuario");
                   }
                   else if(clave=="")
                   {
                       alert("debe ingresar una contraseña")
                   }
				   else
				   {
					   $("#login_usr").submit();
				   }
				}
				
            </script>
        
        <body>
		@section('content')
            <div class="container">
                <div class="panel panel-default">
                    <div align="center" class="panel-heading"><h2>Login<h2></div>
                </div>
                <div class="card card-body"> 
                    <form id="login_usr" method="post" action="{{route('logindentidesk.verifica_user')}}" >
						@csrf
					   <div align="center" class="row">
                        <div class="col-sm-2">
                        </div>    
                            <div class="col-sm-2">
                                Usuario:
                            </div>
                            <div class="col-sm-4">
                                <input type="text" id="us" name="us" class="form-control" />
                            </div>
                        </div>
                        <div align="center" class="row">
                        <div class="col-sm-2">
                        </div>    
                            <div class="col-sm-2">
                                Clave:
                            </div>
                            <div class="col-sm-4">
                                <input type="password" id="clave" name="clave" class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-primary" onclick="ingreso()" >ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
		@endsection
        </body>    