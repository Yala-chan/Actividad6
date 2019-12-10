@include('partials/head')

<body>
	@include('partials/menu')
	<header class="text-center cabecerasPaginas">
		<h1 class="texto-animado"><span>Nombre anime</span></h1>
		<hr class="hrPersonalizado">
	</header>
	<main class="container mt-5">
		<!-- Page Content -->
		<div class="row mt-5">
			<!-- /.col-lg-3 -->
			@include('catalog/sidebar')
			<div class="col-lg-9">
				<!-- CONTENIDO DE LA FICHA DEL ANIME -->
				<div class="row">
					<div class="card card-ficha-anime mt-4">
						<img class="card-img-top img-fluid" src="{{asset('img/background.jpg')}}" alt="">
						<div class="card-body row">
							<div class="col-8 pr-5">
								<h3 class="card-title">Nombre anime</h3>
								<p class="card-text">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem
									accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
									inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
									Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
									sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
									Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
									adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
									magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem
									ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
									Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
									molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
								</p>
							</div>
							<div class="col-4 border-left">
								<!--Si hay un usuario iniciado podra valorar-->
									<form class="mb-5" method="POST">
										<select class="browser-default custom-select" id="valoracion-select" name="valoracion-select">
											<option selected>★ Selecciona una puntuación</option>
											<option value="1">★ 1 Pésimo</option>
											<option value="2">★ 2 Horrible</option>
											<option value="3">★ 3 Muy malo</option>
											<option value="4">★ 4 Malo</option>
											<option value="5">★ 5 Promedio</option>
											<option value="6">★ 6 Bien</option>
											<option value="7">★ 7 Bueno</option>
											<option value="8">★ 8 Muy bueno</option>
											<option value="9">★ 9 Genial</option>
											<option value="10">★ 10 Obra maestra</option>
										</select>
										<button type="submit" class="btn btn-warning col-12 mt-2">Enviar puntuación</button>
									</form>

								<span>Valoración de la gente:</span><br>
							</div>
						</div>
					</div>
				</div><!-- /.row -->
			</div><!-- /.col-lg-9 -->
		</div><!-- /.row -->
		</div><!-- /.container -->
	</main>
</body>