<nav id="navbar" class="navbar navbar-expand-lg bg-black" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand name-navbar" href="/">GameWorld</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-navbar display-1" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-navbar display-1" href="{{ route('article_index') }}">Giochi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-navbar display-1" href="{{ route('article_create') }}">Vendi</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link active text-navbar display-1" href="{{ route('register') }}">Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-navbar display-1" href="{{ route('login') }}">Login</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link active text-navbar display-1 dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Ciao {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-navbar display-1" href="/user-page">
                                <i class="bi bi-gear me-2 my-auto"></i>Profilo</a>
                            </li>
                            <li class="dropdown-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="nav-link active text-navbar display-1" type="submit">
                                        <i class="bi bi-box-arrow-right me-2 my-auto"></i>Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
