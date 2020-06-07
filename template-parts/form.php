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

<div class="containercontact" style="margin: 0 200px 100px 200px">
    <div>
        <h2>UNE QUESTION À POSER ? VOUS ÊTES AU BON ENDROIT !</h2>
        <p>Utilisez le formulaire ci-dessous.</p>
    </div>
</div>

<div class=”page-content” style="margin: 10px 500px 10px 500px;">
    <?php
        while (have_posts()) : the_post();
        the_content();
        endwhile;
    ?>
</div>
<?php get_footer(); ?>
