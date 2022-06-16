<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FrontLine</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
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
    </main>
    <footer></footer>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
