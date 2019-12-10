@include('partials/head')
<body id="content-login">
    <main class="text-center p-3 bg-secondary text-white col-3 m-auto">
        <h1>Iniciar sesion</h1>
        <hr>
        <form method="POST">
            <div class="form-group"> 
                <input class="form-control" id="usuario" name="usuario" type="text" placeholder="Usuario" required>		
            </div>
            <div class="form-group">						
                <input class="form-control" id="clave" name="clave" type="password" placeholder="Contraseña" required>
            </div>
            <input class="btn btn-primary col-12 p-2" type="submit" value="Loguearse">
        </form>
        <hr>
        <small>¿Has olvidado la contraseña?</small>
        <a class="btn btn-warning btn-sm" href="{{URL::to('remember')}}" role="button">Recordar contraseña</a>
        <hr>
        <small>¿No tienes cuenta?</small>
        <a class="btn btn-success" href="{{URL::to('registro')}}" role="button">Regístrate</a>
        <hr>
        <a href="{{URL::to('/')}}"><button type="button" class="btn btn-secondary">Volver a inicio</button></a>
    </main>	
</body>