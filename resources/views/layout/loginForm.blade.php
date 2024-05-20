<div class="section_login">
    <div class="form_login_container "  data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
        <form action="">
            @csrf
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
