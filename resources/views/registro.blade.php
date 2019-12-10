@include('partials/head')
<body id="content-login">
    <main class="text-center p-3 bg-secondary text-white col-4 m-auto">
        <h1>Registro</h1>
        <hr>
        <form method="POST">
            <div class="form-group"> 
                <input class="form-control" id="usuario" name="usuario" type="text" placeholder="Usuario" required>        
            </div>
            <div class="form-group"> 
                <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre" required>        
            </div>
            <div class="form-group"> 
                <input class="form-control" id="apellidos" name="apellidos" type="text" placeholder="Apellidos" required>        
            </div>
            <div class="form-group">
                <input class="form-control" id="email" name="email" type="email" placeholder="Email" required>        
            </div>
            <div class="form-group">    
                <input class="form-control" id="clave" name="clave" type="password" placeholder="Contraseña" required>
            </div>
            <input class="btn btn-primary col-12 p-2" type="submit" value="Registrarse">
        </form>
        <hr>
        <small>¿Tienes cuenta?</small>
        <a class="btn btn-success" href="{{URL::to('login')}}" role="button">Logueate</a>
        <hr>
        <a href="{{URL::to('/')}}"><button type="button" class="btn btn-secondary">Volver a inicio</button></a>
    </main> 
</body>