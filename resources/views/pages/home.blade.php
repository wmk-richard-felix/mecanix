@extends('layout.master')

@section('title', 'Mecanix')
@section('description', 'O maior portal de profissionais de veículos do Brasil')

@section('content')

	<section class="banner-home">   
		<div id="carouselBanner" class="carousel carousel-dark slide" data-bs-ride="carousel">
			<ol class="carousel-indicators">
				@for($i = 0; $i < count((array)$banners); $i++)
					<li data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $i }}" class="@if($i == 0) {{ 'active' }} @endif "></li>
				@endfor
			</ol>
			<div class="carousel-inner">
				@for($i = 0; $i < count((array)$banners); $i++)
					<div class="carousel-item @if($i == 0) {{ 'active' }} @endif">
						<img src="{{url('/')}}/images/{{ $banners[$i]->image }}"  class="d-block w-100" alt="...">
						{{-- <div class="carousel-caption d-none d-md-block">
							<h5>Conheça os nossos serviços</h5>
							<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
						</div> --}}
					</div>
				@endfor
			</div>
			<a class="carousel-control-prev" href="#carouselBanner" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselBanner" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</a>
		</div>
	</section>
	<section class="section-category">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>
						Qual especialista deseja encontrar?
					</h1>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-12 box-category">
					<h2>
						<a href="#">
							Mecânico
						</a>
					</h2>
				</div>
				<div class="col-md-3 col-12 box-category">
					<h2>
						<a href="#">
							Funileiro
						</a>
					</h2>
				</div>
				<div class="col-md-3 col-12 box-category">
					<h2>
						<a href="#">
							Vidraçeiro
						</a>
					</h2>
				</div>
				<div class="col-md-3 col-12 box-category">
					<h2>
						<a href="#">
							Auto elétrico
						</a>
					</h2>
				</div>
			</div>
		</div>
	</section>	    
    <section class="section-diagnosis">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>
						Deseja realizar um diagnóstico do problema do seu carro?
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-5 col-lg-5">
					<img class="diagnostico-home img-fluid" src="{{ asset('/images/robot.png') }}" alt="">
				</div>
				<div class="col-sm-12 col-md-5 col-lg-5">
					<a class="btn btn-primary btn-diagnosis diagnostico-home diagnostico-home-btn" href="{{url('diagnostico')}}" role="button">Realizar diagnóstico</a>
				</div>
			</div>
		</div>
	</section>
	<section class="section-category">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>
						Últimos especialista visualizados
					</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-12 box-category">
					<h2>
						<a href="#">
							Nome Mecânico
						</a>
					</h2>
				</div>
				<div class="col-md-3 col-12 box-category">
					<h2>
						<a href="#">
							Nome Funileiro
						</a>
					</h2>
				</div>
				<div class="col-md-3 col-12 box-category">
					<h2>
						<a href="#">
							Nome Vidraçeiro
						</a>
					</h2>
				</div>
				<div class="col-md-3 col-12 box-category">
					<h2>
						<a href="#">
							Nome Auto elétrico
						</a>
					</h2>
				</div>
			</div>
		</div>
	</section>	 
@endsection

@section('script')
	<script type="text/javascript">
		$(function() {
			var myCarousel = document.querySelector('#carouselBanner')
			var carousel = new bootstrap.Carousel(myCarousel)
			// var owlLoop = $('.loop');
			// owlLoop.owlCarousel({
			// 	loop:true,
			// 	margin:0,
			// 	responsiveClass:true,
			// 	dots:true,
			// 	nav:true,
			// 	autoplay:true,
			// 	autoplayTimeout:5000,
			// 	// autoplayHoverPause:true,
			// 	// URLhashListener:true,
			// 	// startPosition: 'URLHash',
			// 	navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
			// 	smartSpeed: 1000,
			// 	responsive:{
			// 		0:{
			// 			items:1,
			// 			nav:true,
			// 			dots:false,
			// 		},
			// 		600:{
			// 			items:1,
			// 			nav:true,
			// 			dots:true,
			// 		},
			// 		1000:{
			// 			items:1,
			// 			nav:false,
			// 			dots:true,
			// 		}
			// 	}
			// });

			// $('.customNextBtn').click(function() {
			//     owlLoop.trigger('next.owl.carousel');
			// })
			// $('.customPrevBtn').click(function() {
			//     owlLoop.trigger('prev.owl.carousel',[500]);
			// })

			
			// $('#modalSucesso, #modalError').modal('show');
			// $('#modalSucesso, #modalError').on('hidden.bs.modal', function (e) {
			// 	positionPage = $('#formularioInteresse').offset().top - 70;
			// 	$('html, body').animate({
			// 		scrollTop: positionPage
			// 	}, 1000);
			// 	return false;
			// });

			// $(function() { 
			// 	var phone = $('#telefone, #celular');
			// 	phone.focusin(function() { 
			// 		phone.mask("(99) 99999999?9"); 
			// 	});
			// 	phone.focusout(function() {
			// 			var phone;
			// 			var element;

			// 			element = $(this);
			// 			element.unmask();
			// 			phone = element.val().replace(/\D/g, '');

			// 			if (phone.length > 10) {
			// 				element.mask("(99) 99999-999?9");
			// 			} else {
			// 				element.mask("(99) 9999-9999?9");
			// 			}
			// 	}).trigger('focusout');
			// });
		    
	    	// var boxCarousel = $('.owl-carousel');		

		});
	</script>
@endsection