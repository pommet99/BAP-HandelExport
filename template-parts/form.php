<?php
/*
*
*  Template Name: form
*/
get_header(); ?>

<div class=”page-content”>
    <?php
        while (have_posts()) : the_post();
        the_content();
        endwhile;
    ?>
</div>
<?php get_footer(); ?>