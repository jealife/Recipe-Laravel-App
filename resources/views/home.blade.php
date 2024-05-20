<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @include('layout.aosCSS')
</head>

<body>
    <header>
        @include('layout.navigation')
    </header>
    <main>
        <div class="hero">
            <div class="hero_overlay">
                <h1 class="hero_title"  data-aos="fade-up"  data-aos-duration="800">Site de recettes</h1>
                <p  data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">Profitez des meilleures recettesde cuisine de tout types de plats et de cultures.</p>
            </div>
        </div>

        <!-- --------------------------------------------------------------- -->
        <!-- Login Section -->
       @include('layout.loginForm')
        <!-- --------------------------------------------------------------- -->

        <!-- --------------------------------------------------------------- -->
        @include('layout.reciepes')
    </main>
    <footer>
        @include('layout.footer')
    </footer>

    @include('layout.aosJS')
</body>

</html>
