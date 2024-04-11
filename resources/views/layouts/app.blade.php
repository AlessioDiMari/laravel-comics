<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comix</title>

    @vite('resources/js/app.js')
</head>
<body>

    {{-- includo l navbar dalle partials --}}
    @include('partials/Navbar')


    {{-- includo l'hero --}}
    @include('partials/Hero')

    <main>
        
        {{-- Concedo il main dal file home --}}
        @yield('content')

    </main>

    {{-- includo il footer dalle partials --}}
    @include('partials/Footer')


</body>
</html>