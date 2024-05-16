<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        @include('layout.navigation')
    </header>
    <main class="grid min-h-screen place-content-center">
        <h1 class="text-6xl text-blue-500">
            Hello
        </h1>
    </main>
    <footer>
        @include('layout.footer')
    </footer>
</body>

</html>
