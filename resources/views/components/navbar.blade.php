<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container d-flex justify-content-center align-items-center mx-auto">
        <a class="navbar-brand" href="/">Navbar</a>
        <div class="collapse navbar-collapse d-flex justify-content-center align-items-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page">Artikel Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page">Bergabung Bersama</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav d-flex gap-3">

            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Welcome Back, {{ Auth::user()->username }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Dashboard</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            @method('post')
                            <button class="dropdown-item">
                                Log out...
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
            @else
            <li>
                <a href="/login">
                    Login
                </a>
            </li>
            <li>
                <a href="/register">
                    Register
                </a>
            </li>
            @endauth


        </ul>
    </div>
</nav>
