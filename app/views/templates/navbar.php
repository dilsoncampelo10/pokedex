<nav class="navbar navbar-danger navbar-expand-md bg-danger">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= $base ?>" alt="logo da empresa"><img src="<?= $base ?>/assets/images/pokeball_logo.png" alt="logo da empresa" id="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= $base ?>/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pokemons no pc</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Configurações
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Logout</a>
                </li>
            </ul>
            <form class="d-flex" role="search" action="<?= $base ?>/search">
                <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search" name="search">
                <button class="btn btn-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
</nav>