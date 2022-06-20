<!DOCTYPE html>
<html>
    <head>
        <?php include("parties/head.php"); ?>
        <title>Titre du produit - TOUT EN FROMAGE, vente de fromage et plateaux de fromage à Saint-Étienne</title>
        <meta name="description" content="Finesse, subtilité et intensité de goût, ce plateau de fromages de qualité choisi par nos partenaires MOF (meilleurs ouvrier de France)."/>
    </head>

    <body onscroll="backToTop(), changeHeader();">
        <?php include("parties/header.php"); ?>
        <div class="slider small-none">
            <img src="img/slider_plateaux.jpg" alt="Un plateau de formage sur une table"/>
            <p class="slogan-page">Tout les plateaux</p>
        </div>
        <div class="nav-cache small-100 text-center">
            <nav>
                <a href="categories.php" title="Nos Catégories">Catégories</a>
                <a href="categorie_fromages.php" title="Catégorie fromages">Fromages</a>
                <a href="categorie_plateaux.php" title="Catégorie plateaux">Plateaux</a>
                <a href="categorie_saisons" title="Catégorie saisons">Saisons</a>
                <a href="categorie_evenements" title="Catégorie événement">Événements</a>
                <a href="plateaux.php" title="Nos plateaux fromages">Les plateaux</a>
                <a href="Les producteurs.php" title="Nos producteurs">Les producteurs</a>
                <a href="affinage.php" title="L'affinage">L'affinage</a>
                <a href="produits.php" title="Nos produits">Les produits</a>
                <a href="contact.php" title="Contact">Contact</a>
                <a href="connexion.php" title="Nos produits">Connexion</a>
                <a href="panier.php" title="Contact">Panier</a>
            </nav>
        </div>
        <main>
            <div class="panier large-none small-flex align-center justify-center">
                <a href="panier.php" title="Votre panier"><?php include("img/panier.svg") ?></a>
            </div>
            <div class="container">
                <div class="ariane">
                    <a href="index.php">Accueil</a>
                    <span>></span>
                    <a href="categories.php">Catégories</a>
                    <span>></span>
                    <a href="plateaux.php">Plateaux</a>
                    <span>></span>
                    <span>Titre du produit</span>
                </div>
                <div class="menu-small large-none medium-flex small-flex justify-center align-center"><?php include("img/fleche-droite.svg") ?></div>
                <div class="menu-categorie medium-none small-none">
                    <span><a href="categories.php" title="Nos catégories">Catégories</a></span>
                    <ul>
                        <li><a href="categorie_fromages.php" title="Catégorie fromages">Fromages</a></li>
                        <li><a href="categorie_plateaux.php" title="Catégorie plateaux">Plateaux</a></li>
                        <li><a href="categorie_saisons" title="Catégorie saisons">Saisons</a>
                            <ul>
                                <li><a href="printemps.php" title="catégorie printemps">Printemps</a></li>
                                <li><a href="ete.php" title="catégorie été">Été</a></li>
                                <li><a href="automne.php" title="catégorie automne">Automne</a></li>
                                <li><a href="hiver.php" title="catégorie hiver">Hiver</a></li>
                            </ul></li>
                        <li><a href="categorie_evenements" title="Catégorie événement">Événements</a></li>
                    </ul>
                </div>
                <div class="text-center margin-bottom-64">
                    <h2>Plateaux</h2>
                    <span class="deco-bleu"></span>
                </div>
                <!----------------------------------------------------------------------->
                <!------------------------------ PRODUIT -------------------------------->
                <!----------------------------------------------------------------------->
                <div class="produit flex">
                    <div class="large-33 text-center meduim-100 small-100">
                        <h4>Titre du produit</h4>
                        <img src="img/plateau_de_fromages_chevres.jpg" alt=""/>
                    </div>
                    <div class="large-33 text-center meduim-100 small-100">
                        <p class="prix">15€</p>
                        <p>Quantité</p>
                        <div class="flex justify-center">
                            <div class="btn-quantite btn-moins flex align-center justify-center" onclick="moins();"><?php include("img/moins.svg"); ?></div>
                            <div class="flex align-center justify-center quantite-number">1</div>
                            <div class="btn-quantite flex align-center justify-center" onclick="plus();"><?php include("img/plus.svg"); ?></div>
                        </div>
                        <p><span>En stock</span></p>
                        <a href="panier.php" class="btn btn-produit">Ajouter au panier</a>
                    </div>
                    <div class="large-33 description meduim-100 small-100">
                        <p>Description:</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <!----------------------------------------------------------------------->
                <!--------------------------- AUTRES ARTICLES --------------------------->
                <!----------------------------------------------------------------------->
                <div class="text-center">
                    <h2>Autres articles</h2>
                    <span class="deco-bleu"></span>
                </div>
                <article class="flex text-center ventes">
                    <div class="large-25 medium-50 small-100">
                        <img src="img/plateau_fromage.jpg" alt="Un plateau de fromage"/>
                        <h4>Titre du produit</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p><span>5€</span></p>
                        <a href="produit.php" class="btn">Acheter</a>
                    </div>
                    <div class="large-25 medium-50 small-100">
                        <img src="img/fromage_camembert.jpg" alt="Un fromage camembert"/>
                        <h4>Titre du produit</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p><span>15€</span></p>
                        <a href="produit.php" class="btn">Acheter</a>
                    </div>
                    <div class="large-25 medium-50 small-100">
                        <img src="img/fromage_carre.jpg" alt="Un fromage camembert carré"/>
                        <h4>Titre du produit</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p><span>5€</span></p>
                        <a href="produit.php" class="btn">Acheter</a>
                    </div>
                    <div class="large-25 medium-50 small-100">
                        <img src="img/fromage_tomme-brebis.jpg" alt="Un fromage tomme brebis"/>
                        <h4>Titre du produit</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p><span>5€</span></p>
                        <a href="produit.php" class="btn">Acheter</a>
                    </div>
                </article>
                <!----------------------------------------------------------------------->
                <!------------------------- meilleures ventes --------------------------->
                <!----------------------------------------------------------------------->
                <div class="text-center">
                    <h2>Nos meilleures ventes</h2>
                    <span class="deco-bleu"></span>
                </div>
                <article class="flex text-center ventes">
                    <div class="large-25 medium-50 small-100">
                        <img src="img/fondue_fromage_bleu.jpg" alt="Une fondue fromage bleu"/>
                        <h4>Titre du produit</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p><span>5€</span></p>
                        <a href="produit.php" class="btn">Acheter</a>
                    </div>
                    <div class="large-25 medium-50 small-100">
                        <img src="img/plateau_fromage_saint_valentin.jpg" alt="Un plateau fromage spécial Saint-Valentin"/>
                        <h4>Titre du produit</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p><span>15€</span></p>
                        <a href="produit.php" class="btn">Acheter</a>
                    </div>
                    <div class="large-25 medium-50 small-100">
                        <img src="img/munster_laitier_nature.jpg" alt="Un fromage munster laitier nature"/>
                        <h4>Titre du produit</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p><span>5€</span></p>
                        <a href="produit.php" class="btn">Acheter</a>
                    </div>
                    <div class="large-25 medium-50 small-100">
                        <img src="img/fondue_savoyarde.jpg" alt="Une fondue savoyarde"/>
                        <h4>Titre du produit</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p><span>5€</span></p>
                        <a href="produit.php" class="btn">Acheter</a>
                    </div>
                </article>

            </div>
            <?php include("parties/picto.php"); ?>
        </main>
        <?php include("parties/newsletter.php"); ?>
        <?php include("parties/back-to-top.php"); ?>
        <?php include("parties/footer.php"); ?>
        <?php include("parties/script.php"); ?>
    </body>
</html>
