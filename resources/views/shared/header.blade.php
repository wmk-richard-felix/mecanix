<header class="shadow mb-2 fixed-top bg-white large">
    <div class="container ">
        <nav class="navbar navbar-expand-lg navbar-light pt-0 nav-main">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{url('/')}}/images/logo.png" class="d-block img-logo" id="logo" alt="Logo Mecanix">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse pt-1" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 itens-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Busca Profissionais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/diagnostico')}}">Diagnóstico</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre nós</a>
                        </li>
                        <li>
                            <a class="button-cnt" href="{{url('auth/signin')}}">Acessar Conta</a>
                        </li>
                        <li>
                            <a class="button-prestar" href="#">Seja um profissional</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>