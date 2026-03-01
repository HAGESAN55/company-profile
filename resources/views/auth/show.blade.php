<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">

</head>
<body>


    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('components.footer')

<!-- Custom JS -->
<script src="{{ asset('assets/js/auth.js') }}"></script>

</body>
</html>