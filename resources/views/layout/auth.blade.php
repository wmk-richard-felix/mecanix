<!DOCTYPE html>
<html lang="pt-br" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>@yield('title')</title>
		<meta name="description" content="@yield('description')">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	
		<script src="https://kit.fontawesome.com/72fbff17f3.js" crossorigin="anonymous"></script>

		<link href="{{ asset('img/favicon.ico/') }}" rel="shortcut icon">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600&display=swap" rel="stylesheet">
		
		<link href="{{ asset('assets/css/auth.css/') }}?v=3" rel="stylesheet" type="text/css"> 
		<link href="{{ asset('assets/css/includes.css/') }}?v=3" rel="stylesheet" type="text/css"> 

	</head>
	<body>
		@include('shared.simple-header')
			<div class="container-fluid">
				<div class="row">
					<div class="col-6 d-none d-md-block d-lg-block d-xl-block px-0">
						<img src="{{url('/')}}/images/car-mechanic-and-customer-shaking-hands.jpg" alt="login image" class="login-img"> 
					</div>    
					
					<div class="col-md-6 col-sm-12 container-auth px-5 pt-5 pb-4">
						@yield('content-auth')
					</div>
				</div>
			</div>

	    @include('shared.footer')
     	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
		@yield('script')
	</body>
</html>