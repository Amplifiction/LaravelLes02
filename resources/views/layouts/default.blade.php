<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <nav class="bg-warning">
        <div class="mx-5">
            <h2>Navigatie</h2>
            @include('includes/nav')
        </div>
    </nav>

    <main class="container-sm">
        @yield('content')
    </main>

    <footer class="bg-warning">
        <div class="mx-5">
            <p>&copy; 2024</p>
        </div>
    </footer>
</body>
</html>
