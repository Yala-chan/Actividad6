@include('partials/head')

<body>
	@include('partials/menu')
	<header class="text-center cabecerasPaginas">
		<h1 class="texto-animado"><span>VideoAnime</span></h1>
		<hr class="hrPersonalizado">
		<p class="text-white mt-3">¡Guarda los animes que estes viendo o te gustaría ver para tener tu propia lista de animes!</p>
	</header>
	<main class="container mt-5">
		<!-- Page Content -->
		<div class="row mt-5">
			<!-- /.col-lg-3 -->
			@include('catalog/sidebar')
			<div class="col-lg-9">
				<!-- CAJAS DE LOS ANIMES Y SERIES -->
				<div class="row">
					@for ($i = 0; $i < 9; $i++) 
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="card h-100">
							<a href="{{URL::to('ficha-anime')}}"><img class="card-img-top" src="{{asset('img/background.jpg')}}" alt=""></a>
							<div class="card-body">
								<h4 class="card-title">
									<a href="{{URL::to('ficha-anime')}}">Nombre Anime</a>
								</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
							<div class="card-footer">
								<a href="{{URL::to('ficha-anime')}}"><button type="button" class="btn btn-warning col-12 botonGeneral">Ver ficha</button></a>
							</div>
						</div>
					</div>
					@endfor
				</div>
			</div><!-- /.row -->
		</div><!-- /.col-lg-9 -->
		</div><!-- /.row -->
		</div><!-- /.container -->
	</main>
</body>