<?php /*
    Template Name: catalogue
*/
?>

<?php get_header(); ?>

<body>

<div>
    <div class="containerintro">
        <img class="flogo" src="<?php echo get_template_directory_uri(); ?>/photos/Magazine-Mockup-Presentation-vol9.jpg" style="max-width: 100%">
        <div class="text">
            <h1 class="firsth1">CATALOGUE</h1>
            <div class="rectangle"></div>
        </div>
    </div>

    <div class="containercat">
        <p class="pcatalogue">Vous retrouverez ici l'ensemble de nos catalogues.</p>
        <h2 class="h2cat">NOS CATALOGUES</h2>
        <ul class="flex-container">
            <li class="flex-item">
                <div id="oval"><img src="<?php echo get_template_directory_uri(); ?>/photos/catalogue1.png"></div>
                <p class="pcatdescriptiongen">Catalogue - Prêt à brancher</p>
                <p class="pcatdescription">Edition 2017</p>
            </li>
            <li class="flex-item">
                <div id="oval"><img src="<?php echo get_template_directory_uri(); ?>/photos/catalogue2.png"></div>
                <p class="pcatdescriptiongen">Catalogue - Les arts de table</p>
                <p class="pcatdescription">Edition 2019</p>
            </li>
            <li class="flex-item">
                <div id="oval"><img src="<?php echo get_template_directory_uri(); ?>/photos/catalogue3.png"></div>
                <p class="pcatdescriptiongen">Catalogue - Les Indispensables / Art de la Table</p>
                <p class="pcatdescription">Edition 2018</p>
            </li>
        </ul>
    </div>
    <div class="containercat2">
        <div id="rectanglecatalogue">NOS MEILLEURES VENTES</div>

        <div class="caroussel">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block" src="<?php echo get_template_directory_uri(); ?>/photos/aluminium.png" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>PLAQUE PATISSIERE ALUMINUM</h2>
                            <p>Dimension: 800x600 mm<br>
                                Matériaux: Aluminium<br><br>
                                Sans revêtement</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="<?php echo get_template_directory_uri(); ?>/photos/diviseuse.png" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>DIVISEUSE 20 DIVISIONS</h2>
                            <p>Autres modèles avec pied, ou sur table, 30 divisions </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="<?php echo get_template_directory_uri(); ?>/photos/petrin-spirale.png" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>PETRIN SPIRALE À CUVE FIXE</h2>
                            <p>Matériaux: Inox<br>
                                Caractéristiques:<br>
                                - Usage intensif<br>
                                - Résistant (solidité renforcée)
                            </p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>
</div>

<div class="caroussel">
    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block" src="<?php echo get_template_directory_uri(); ?>/photos/laminoire.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>LAMINOIRE SUR SOCLE</h2>
                    <p>Socle: 500x1000<br>
                        Vitesse: 30 m/mn<br>
                        Matériaux: Acier Peint<br>
                        Dimension: Tapis ouvert 2410 L x 910<br>
                        P x 1335 H mm<br>
                        Tapis fermé 1020 L X 910<br>
                        P X 1760 H mm</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block" src="<?php echo get_template_directory_uri(); ?>/photos/chariot.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>CHARIO CUISSON</h2>
                    <p>Four Rotatif Bongard - Accrochage bas<br><br>
                        Matériaux: Inox<br>
                        Caractéristiques:<br>
                        - Usage intensif<br>
                        - Résistant (solidité renforcée)<br>
                        - Cuisson haute température<br>
                        - 4 roues</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block" src="<?php echo get_template_directory_uri(); ?>/photos/robot.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>BATTEUR MÉLANGEUR 40L ELECTROMÉCANIQUE</h2>
                    <p>Matériaux: Inox<br>
                        Caractéristiques:<br>
                        - Usage intensif<br>
                        - Résistant (solidité renforcée)
                    </p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

</div>
</div>

</body>

<?php get_footer(); ?>
