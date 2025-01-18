<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adopt a Cat</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">


    <!-- Favicon -->
    <link rel="icon" href="{{ asset('cat_icon.png') }}" type="image/png">

    <!-- Includiamo gli assets con la direttiva vite -->
    @vite('resources/js/app.js')
</head>

<body>
    {{-- HEADER --}}
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm ">
            <div class="container ">

                <!-- Logo -->
                <a class="navbar-brand d-flex align-items-end pb-3" href="{{ route('home') }}">
                    <img src="{{ asset('cat_icon.png') }}" alt="Adopt a Cat" style="height: 30px;">
                    <span
                        style="font-family: 'Cinzel', serif; font-size: 1rem; font-weight: 600; color: #333; line-height: 1;">Adopt
                        a Cat</span>
                </a>


                <!-- Hamburger button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Chi Siamo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contatti') }}">Contattaci</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main>
        @yield('content')
    </main>

</body>

</html>
