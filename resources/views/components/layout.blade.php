<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>Crud Website - {{$title}}</title>
</head>
<body>
    <div class="container-fluid bg-dark">
        <div class="container">
            <h1 class="text-center p-4 text-white">Laravel Crud</h1>
        </div>
    </div>
    {{$content}}
</body>
</html>