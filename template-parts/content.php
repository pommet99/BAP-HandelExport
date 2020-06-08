<?php /*
    Template Name: content
*/
?>
<?php get_header(); ?>

<body>

<div>
    <div class="containerintro">
        <img class="imghome" src="<?php echo get_template_directory_uri(); ?>/photos/photo_intro.png" style="max-width: 100%">
        <div class="text">
            <h1 class="h1intro">EQUIPEMENT DE CUISINE<br>
            PROFESSIONNEL</h1>
        </div>
    </div>

    <div class="container">
        <h1 class="firsth">PRÉSENTATION</h1>
        <div class="rectangle"></div>
        <ul class="flex-container">
            <li class="flex-item">
                <h1>Qui sommes-nous ?</h1><br>
                <div class="rectangle2"></div>
                <p>Nous accompagnons les professionnels de la restauration collective et traditionnelle, en leur proposant le meilleur de l'équipement culinaire.</la></p>
            </li>
            <li class="flex-item">
                <h1>La proximité</h1><br>
                <div class="rectangle2"></div>
                <p>Les établissements Handel Overseas, vous livrent, assurent le service après vente ainsi que les installations du matériel proposé.</p>
            </li>
            <li class="flex-item">
                <h1>Que défendons-nous ?</h1><br>
                <div class="rectangle2"></div>
                <p>Toujours à votre écoute et soucieux de vous satisfaire, Handel Overseas s'engage à vous proposer du matériel de qualité.<br><br>
                Votre métier nécessite des besoins particuliers, auxquels notre équipe commerciale vous apporte des solutions crédibles et durables.</p>
            </li>
        </ul>
    </div>
    <div class="container2">
    <ul class="flex-container2">
        <li class="flex-item2">
            <div id="cercle"><img class="flogo" src="<?php echo get_template_directory_uri(); ?>/photos/michael-browning-MtqG1lWcUw0-unsplash.png" style="width:500px; clip-path:circle(150px at 50% 150px); margin-top: -125px; margin-left: -125px;"></div>
        </li>
        <li class="flex-item2">
            <div id="cercle"><img class="flogo" src="<?php echo get_template_directory_uri(); ?>/photos/shangyou-shi-VdRex9AiBOc-unsplash.png" style="width:500px; clip-path:circle(150px at 50% 150px); margin-top: -125px; margin-left: -125px;"></div>
        </li>
        <li class="flex-item2">
            <div id="cercle"><img class="flogo" src="<?php echo get_template_directory_uri(); ?>/photos/zhaoqi-yu-1tiLDBo0Wlk-unsplash.png" style="width:500px; clip-path:circle(150px at 50% 150px); margin-top: -125px; margin-left: -125px;"></div>
        </li>
    </ul>
    </div>
    <div class="container3">

        <ul class="flex-container3">
        <a href="http://localhost/A2/wordpress/catalogue/" class="bouton2">NOS PRODUITS</a>
        </ul>
    </div>
</div>

</body>


<?php get_footer(); ?>


