<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CCS Website</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="@yield('body-class')">
    <header>
        <div class="header-container">
            <img src="{{ asset('images/cspc_logo.png') }}" alt="CSPC Logo" class="logo">

            <div class="header-center">
                <h1>Camarines Sur Polytechnic Colleges</h1>
                <h2>College of Computer Studies</h2>
                <nav>
                    <a href="{{ url('/home') }}">Home</a> |
                    <a href="{{ url('/about') }}">About</a> |
                    <a href="{{ url('/contact') }}">Contact</a>
                </nav>
            </div>

            <img src="{{ asset('images/ccs_logo.png') }}" alt="CCS Logo" class="logo">
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© {{ date('Y') }} College of Computer Studies</p>
    </footer>
</body>
</html>
