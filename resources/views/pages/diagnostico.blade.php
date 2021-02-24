@extends('layout.master')

@section('title', 'Mecanix')
@section('description', 'O maior portal de profissionais de veículos do Brasil')

@section('content')
	<section class="section-category mt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-6 box-category">
					<h1>Realize o diagnóstico do seu veículo</h1>
					<img src="{{ asset('/images/robot.png') }}" alt="">
                </div>
                <div class="col-md-6 box-category">
					<iframe class="chatbot" src="https://mecanix-chatroom.azurewebsites.net/"></iframe>
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
@endsection