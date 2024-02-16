<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <a class="nav-link" href="/home">Home</a>
            <a class="nav-link {{($title == "About Page")?'active':''}}" href="/about">About</a>
            <a class="nav-link" href="/student">Student</a>
            <a class="nav-link" href="/extracurricular">Extra</a>
            <a class="nav-link" href="/kelas">Kelas</a>
        </div>

        <div>
            @auth
                <li class="nav-item dropdown">
                    <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Hi, {{ auth()->user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="/dashboard/student">Dashboard</a></li>
                        <li><a class="dropdown-item" href="/auth/logout">SIGNUP</a></li>
                    </ul>
                </li>
            @else
                <button type="button" class="btn btn-outline-light">
                    <a class="nav-link text-white" href="/auth/register">REGISTER</a>
                </button>
                <button type="button" class="btn btn-outline-light">
                    <a class="nav-link text-white" href="/auth/login">SIGNIN</a>
                </button>
            @endauth
        </div>
    </div>
</nav>


<div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LARAVEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link " href="/home">Home</a>
                    <a class="nav-link {{($title == "About Page")?'active':''}}" href="/about">About</a>
                    <a class="nav-link" href="/student">Student</a>
                    <a class="nav-link" href="/extracurricular">Extra</a>
                    <a class="nav-link" href="/kelas">Kelas</a>
                </div>
            </div>
        </div>
    </nav>
</div>
