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
        <div class="section_login">
            <div class="form_login_container " data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                <form action="">
                    <div class="input">
                        <div class="email">
                            <label for="Email">Email</label>
                            <input id="email" placeholder="you@exemple.com" type="email" required>
                            <span class=" ">L'email utilisé lors de la creation de compte</span>
                        </div>
                        <div class="password">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" id="password" placeholder="***********" required>
                        </div>
                    </div>
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </div>
        <!-- --------------------------------------------------------------- -->

        <!-- --------------------------------------------------------------- -->
        <!-- Recipes section -->

        <section class="recipes">
            <div class="recipes_container">

                <!-- =========================================================== -->
                <!-- ---------------  signle recipe       ---------------------- -->
                <article class="recipe">
                    <h3 class="recipe_title">
                        <a href="#">Cassoulet</a>
                    </h3>
                    <p class="recipe_description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nihil quod atque nam qui.
                    </p>
                    <span class="recipe_">
                        Author (35ans)
                    </span>
                </article>

                <article class="recipe">
                    <h3 class="recipe_title">
                        <a href="#">Cousous</a>
                    </h3>
                    <p class="recipe_description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nihil quod atque nam qui.
                    </p>
                    <span class="recipe_">
                        Author (35ans)
                    </span>
                </article>

                <article class="recipe">
                    <h3 class="recipe_title">
                        <a href="#">Escargot milanaise</a>
                    </h3>
                    <p class="recipe_description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nihil quod atque nam qui.
                    </p>
                    <span class="recipe_">
                        Author (35ans)
                    </span>
                </article>
                <article class="recipe">
                    <h3 class="recipe_title">
                        <a href="#">Omeltte à l'avicat</a>
                    </h3>
                    <p class="recipe_description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nihil quod atque nam qui.
                    </p>
                    <span class="recipe_">
                        Author (35ans)
                    </span>
                </article>
            </div>


        </section>
        <!-- --------------------------------------------------------------- -->
    </main>
    <footer>
        @include('layout.footer')
    </footer>

    @include('layout.aosJS')
</body>

</html>
