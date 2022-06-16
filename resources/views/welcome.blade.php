<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FrontLine</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
    <!--script js -- Glider.js-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.css">
    <link rel="stylesheet" type="text/css" href="glider.css">
    <!-- end -- script js -- Glider.js-->
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
    <div class="container-planes">
        <div class="container">
            <x-planes/>
        </div>
    </div>
    </main>
    <footer></footer>

    <!--script js -- Glider.js-->
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

    <!-- end -- script js -- Glider.js-->
    <script src="{{ asset(mix('js/app.js')) }}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
