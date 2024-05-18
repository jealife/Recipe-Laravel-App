<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @include('layout.aosCSS')
    <title>Contact</title>
</head>
<body>
    <header>
        @include('layout.navigation')
    </header>
    <main class="grid min-h-screen place-content-center">
        <h1 class="text-6xl text-blue-500">
            Contact
        </h1>
    </main>
    <footer>
        @include('layout.footer')
    </footer>
    @include('layout.aosJS')
</body>
</html>
