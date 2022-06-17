<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FrontLine</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    {{-- mapa --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    {{-- Carruosel --}}
    <link rel="stylesheet"href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>
</head>
<body>
    <header>
        <!--Navbar-->
        <x-navbar />
    </header>
    <main>
        <!--NavbarMovile-->
        <x-navbarmovile/>
        <!--Banner-->
    <x-banner/>
    <div class="container">
        <x-servicios/>
    </div>
     <!--Planes-->
    <section class="container-planes">
        <div class="container">
            <x-planes/>
        </div>
    </section>
        <!--Mapa-->
        <x-mapa/>
    </div>
    </main>
    <footer></footer>
    <script src="{{ asset(mix('js/app.js')) }}"></script>
    {{-- Carrusel --}}
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    {{-- Main js --}}
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
