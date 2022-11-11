<!DOCTYPE html>
    <html lang="en">
        <head>
	        <!-- Required meta tags -->
	        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
	        <!-- Bootstrap CSS -->
	        <!--<link href="https://code.jquery.com/jquery-3.6.0.min.js" />-->
			<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
			<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	        
			<title>@yield('title')</title>
		</head>
			<body>	
				<main>
					<div class="container py-4">
						
						@yield('content')
						
						<footer class="pt-3 mt-4 text-muted border-top">
							prueba dentidesk
						</footer>
					</div>
				</main>
			</body>