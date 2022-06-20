<!DOCTYPE html>
<html>
    <head>
        <?php include("parties/head.php"); ?>
        <title>TOUT EN FROMAGE, vente de fromage et plateaux de fromage à Saint-Étienne</title>
        <meta name="description" content="TOUT EN FROMAGE vous propose de nombreux fromages artisanaux et plateaux de fromages, nous disposons de caves d'affinages, des producteurs de qualité, des partenaires MOF (meilleurs ouvriers de France) et ainsi des normes environnementales certifié."/>
    </head>

    <body onscroll="backToTop(), changeHeader();">
        <?php include("parties/header.php"); ?>
        <div class="slider small-none">
            <img class="image-slide active" src="img/slider_lot_de_fromage.jpg" alt="lot de fromage"/>
            <img class="image-slide" src="img/slider2.jpg" alt=""/>
            <img class="image-slide" src="img/slider3.jpg" alt=""/>
            <div class="left" onclick="slidePrecedent();"><?php include("img/fleche-gauche.svg"); ?></div>
            <div class="right" onclick="slideSuivant();"><?php include("img/fleche-droite.svg"); ?></div>
            <div class="slogan text-center">
                <p><strong>pour chaque fromage ou<br /> plateau, un <span>vin</span> en<br /> complément sélectionné<br /> par nos sommeliers</strong></p>
                <a href="vin_complément.php" class="btn btn-slogan">En savoir plus</a>
            </div>
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
            <div class="popup text-center small-80">
                <p>Bienvenue sur notre boutique en ligne,</p>
                <p>nous vous offrons une réduction</p>
                <p>de 10% lors de votre première commande.</p>
                <div class="croix-popup" onclick="fermePopup();"><?php include("img/cross.svg"); ?></div>
            </div>
            <form class="large-none small-inline align-center small-block small-100">
                <input type="search" placeholder="Recherche"/>
                <button><?php include("img/loupe.svg"); ?></button>
            </form>
            <div class="panier large-none small-flex align-center justify-center">
                <a href="panier.php" title="Votre panier"><?php include("img/panier.svg") ?></a>
            </div>


            <!----------------------------------------------------------------------->
            <!----------------------------- CATÉGORIES ------------------------------>
            <!-----------------------------------------------------------------------> 
            <div class="container">
                <div class="text-center">
                    <h2>Nos catégories</h2>
                    <span class="deco-bleu"></span>
                </div>
                <article class="text-center flex categories">
                    <div class="large-25 medium-50 small-100">
                        <h3>Fromages</h3>
                        <img src="img/fromage_camembert.jpg" alt="Fromage camembert"/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="categorie_fromages.php" class="btn">Découvrir</a>
                    </div>
                    <div class="large-25 medium-50 small-100">
                        <h3>Plateaux</h3>
                        <img src="img/plateau_de_fromages_chevre.jpg" alt="Plateau de fromages chèvre"/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="categorie_plateaux.php" class="btn">Découvrir</a>
                    </div>
                    <div class="large-25 medium-50 small-100">
                        <h3>Saisons</h3>
                        <img src="img/saisons.jpg" alt="les 4 saisons"/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="categorie_saisons.php" class="btn">Découvrir</a>
                    </div>
                    <div class="large-25 medium-50 small-100">
                        <h3>Événements</h3>
                        <img src="img/plateau_fromage_saint_valentin.jpg" alt="Plateau de fromage spécial Saint-Valentin"/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="categorie_evenements.php" class="btn">Découvrir</a>
                    </div>
                </article>
            </div>
            <!----------------------------------------------------------------------->
            <!---------------------------- PRESENTATION ----------------------------->
            <!----------------------------------------------------------------------->                        
            <div class="bg-color-30385F color-fff">
                <div class="text-center">
                    <h1>Tout en fromage Représentant de l'excellence française à saint-étienne</h1>
                    <span class="deco-blanc"></span>
                </div>
                <div class="container">
                    <div class="flex margin-top-bot-50">
                        <div class="large-30 text-center medium-50 small-100">
                            <img src="img/artisan_fromager.jpg" alt="Un artisan formager dans sa cave d'affinage"/>
                        </div>
                        <div class="large-60  medium-50 small-100">
                            <p class="margin-bottom-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <div class="flex">
                                <div class="large-70">
                                    <p>Nos partenaires fromagers</p>
                                    <p>Si un de nos fromagers partenaires est installé dans la ville du client, il peut également proposer des livraisons par coursier de Fondue au reblochon, de Fondue au Mont d'Or, à la fourme de Montbrison ou au camembert (selon les fromages locaux)</p>
                                    <a href="partenaire.php" class="btn btn-presentation">En savoir plus</a>
                                </div>
                                <div class="large-30 text-center">
                                    <img src="img/MOF.png" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="large-70 small-100">
                            <p>Nous disposons de caves d'affinage afin que nos fromages puissent être livrés à la mâturité choisie.</p>
                            <p class="padding-right-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <a href="cave_affinage.php" class="btn btn-presentation">En savoir plus</a>
                        </div>
                        <div class="large-30 text-center small-100 flex-order-1">
                            <img src="img/cave_d'affinage.jpg" alt="Des caves d'affinages"/>
                        </div>
                    </div>
                    <div class="text-center margin-top-bot-50">
                        <h2 class="color-fff">Normes environnementales certifié</h2>
                        <span class="deco-blanc"></span>
                    </div>
                    <div class="flex justify-center text-center logos">
                        <div class="padding-right-50 small-100">
                            <img src="img/logo_agriculture_biologique.png" alt="logo agriculture biologique"/>
                        </div>
                        <div class="padding-right-50 small-100">
                            <img src="img/logo_demter.png" alt="logo demter"/>
                        </div>
                        <div class="small-100">
                            <img src="img/logo_nature&progres.png" alt="logo nature&progres"/>
                        </div>
                    </div>
                </div>
            </div>

            <!----------------------------------------------------------------------->
            <!------------------------- MEILLEURES VENTES --------------------------->
            <!----------------------------------------------------------------------->
            <div class="container">
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
        <script src="js/slider.js" type="text/javascript"></script>
    </body>
</html>
