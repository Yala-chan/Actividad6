@include('partials/head')
<body id="content-login">
	<main class="text-center p-3 bg-secondary text-white col-4 m-auto">
		<h1>Recuperar contraseña</h1>
		<hr>
		<form method="POST">
			<div class="form-group"> 
				<label for="exampleInputEmail1">Email</label>
				<input class="form-control" id="email" name="email" type="text">		
			</div>
			<input class="btn btn-primary col-12" type="submit" value="Enviar nueva contraseña">
		</form>
		<hr>
        <a href="{{URL::to('/')}}"><button type="button" class="btn btn-secondary">Volver a inicio</button></a>
	</main>	
</body>