<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- <style>
        body { scroll-behavior: smooth; }

        .hero {
            background: linear-gradient(to right, #0d6efd, #0b5ed7);
            color: white;
            padding: 120px 0;
        }

        .section-padding {
            padding: 80px 0;
        }

        .navbar-nav .nav-link:hover {
            color: #0b5ed7 !important;
        }

    </style> --}}
</head>
<body>

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>