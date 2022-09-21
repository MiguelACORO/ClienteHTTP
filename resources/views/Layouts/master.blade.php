<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- BOOTSTRAP 4.6 CSS CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Cliente HTTP</title>
</head>
<body>
    <div class="head p-2">
        <a href=" {{ route('principal') }} ">
            <h1>Cliente<small>HTTP</small></h1>
        </a>
    </div>

    <div class="container-fluid">
        @yield('contenido')
    </div>
</body>
</html>