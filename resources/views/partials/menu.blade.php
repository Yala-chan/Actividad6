<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img id="logo" src="{{asset('img/logo.png')}}" class="d-inline-block align-top" alt="logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('login')}}"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('registro')}}"><i class="fas fa-paper-plane"></i> Registrarse</a>
                </li>
            </ul>
        </div>
    </nav>
</header>