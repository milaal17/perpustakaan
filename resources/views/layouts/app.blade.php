<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description"
          content="Sistem Informasi Perpustakaan">

    <meta name="author"
          content="Perpustakaan">

    <title>
        @yield('title', 'Perpustakaan')
    </title>

    {{-- Font Awesome --}}
    <link
        href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet"
        type="text/css"
    >

    {{-- SB Admin 2 --}}
    <link
        href="{{ asset('css/sb-admin-2.min.css') }}"
        rel="stylesheet"
    >

</head>

<body id="page-top">

    {{-- Konten halaman --}}
    @yield('content')


    {{-- jQuery --}}
    <script
        src="{{ asset('vendor/jquery/jquery.min.js') }}">
    </script>

    {{-- Bootstrap --}}
    <script
        src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>

    {{-- jQuery Easing --}}
    <script
        src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}">
    </script>

    {{-- SB Admin 2 --}}
    <script
        src="{{ asset('js/sb-admin-2.min.js') }}">
    </script>

</body>

</html>