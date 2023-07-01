<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container d-flex justify-content-center align-items-center mx-auto">
        <a class="navbar-brand" href="/dashboard">Navbar</a>
        <div class="collapse navbar-collapse d-flex justify-content-center align-items-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/dashboard">Data Mading</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav d-flex gap-3">
            @auth
            <li class="nav-item dropdown d-flex">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Welcome Back, {{ Auth::user()->username }}
                </a>
                <ul class="dropdown-menu w-50">
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            @method('post')
                            <button class="dropdown-item text-end">
                                Log out...
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
            @endauth


        </ul>
    </div>
</nav>
