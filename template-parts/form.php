<?php
/*
*
*  Template Name: form
*/
get_header(); ?>

<div class=”page-content” style="margin-top:5%;">
    <?php
        while (have_posts()) : the_post();
        the_content();
        endwhile;
    ?>
</div>
<?php get_footer(); ?>