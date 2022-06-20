<div class="bg-color-30385F color-fff">
    <div class="container flex newsletter">
        <div class="large-50 meduim-100 small-100">
            <p><span>Abonnez-vous</span> à notre newsletter</p>
            <p>pour ne rien rater</p>
        </div>
        <form method="POST" action="affiche-formulaire.php" onsubmit="return verifie();" class="flex large-50 meduim-100 small-100">
            <input type="email" id="email" name="email" placeholder="Votre e-mail"/>
            <input onclick="verifieEmail();" type="submit" value="Je m'abonne"/>
            <p class="erreur"></p>
        </form>
    </div>

</div>