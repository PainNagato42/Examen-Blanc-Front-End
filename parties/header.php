<header class="flex justify-between">
    <div>
        <a href="index.php" title="Revenir à l'accueil"><img class="logo" src="img/logo_tout_en_fromage.png" alt="Logo Tout en fromage"/></a>
    </div>
    <div>
        <a href="index.php" title="Revenir à l'accueil" class="logo_bleu"><?php include("img/logo_bleu.svg"); ?></a>
    </div>
    <div class="recherche">
        <form class="flex align-center small-none">
            <input type="search" placeholder="Recherche..."/>
            <button class="btn-recherche"><?php include("img/loupe.svg"); ?></button>
        </form>
    </div>
    <div class="large-none medium-block small-block" onclick="menu();">
        <div class="hamb">
            <div class="barre1"></div>
            <div class="barre2"></div>
            <div class="barre3"></div>
        </div>
    </div>
    <nav class="flex medium-none small-none ">
        <a href="index.php" title="Revenir à l'accueil"><?php include("img/home.svg"); ?></a>
        <ul class="flex">
            <li><a href="categories.php" title="Nos Catégories">Catégories</a>
                <ul>
                    <li><a href="categorie_fromages.php" title="Catégorie fromages">Fromages</a></li>
                    <li><a href="categorie_plateaux.php" title="Catégorie plateaux">Plateaux</a></li>
                    <li><a href="categorie_saisons" title="Catégorie saisons">Saisons</a></li>
                    <li><a href="categorie_evenements" title="Catégorie événement">Événements</a></li>
                </ul></li>
            <li><a href="plateaux.php" title="Nos plateaux fromages">Les plateaux</a></li>
            <li><a href="Les producteurs.php" title="Nos producteurs">Les producteurs</a></li>
            <li><a href="affinage.php" title="L'affinage">L'affinage</a></li>
            <li><a href="produits.php" title="Nos produits">Les produits</a></li>
            <li><a href="contact.php" title="Contact">Contact</a></li>
            <li><a href="conexion.php" title="connexion au compte"><?php include("img/connexion.svg"); ?></a></li>
            <li><a href="panier.php" title="Votre panier"><?php include("img/panier.svg") ?></a></li>
        </ul>
    </nav>
</header>