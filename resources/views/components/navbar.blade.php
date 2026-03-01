<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">
            <img src="{{ asset('assets/logo-cp.png') }}" 
                 alt="Logo Perusahaan" 
                 width="15%" 
                 class=" align-text-top">
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link text-primary" href="#home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>

                <li class="nav-item ms-3">
                    <a class="btn btn-primary text-light" href="/login">Masuk</a>
                </li>

            </ul>
        </div>
    </div>
</nav>