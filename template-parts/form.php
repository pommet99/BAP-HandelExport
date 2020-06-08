<?php
/*
*
*  Template Name: form
*/
get_header(); ?>
<div class="containerpromointro">
    <div class="text">
        <h1 class="introppagepartner">CONTACT</h1>
        <div class="rectanglepromo"></div>
    </div>
</div>

<div class="containercontact">
    <div>
        <h2>UNE QUESTION À POSER ? VOUS ÊTES AU BON ENDROIT !</h2>
        <p>Utilisez le formulaire ci-dessous.</p>
    </div>
</div>

<div class=”page-content” style="width:70%;margin-left:15%;">
    <?php
        while (have_posts()) : the_post();
        the_content();
        endwhile;
    ?>
</div>
<?php get_footer(); ?>
