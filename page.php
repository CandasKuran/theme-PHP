<?php get_header(); ?>


<div class="container pt-5 pb-5">

<h1> <?php the_title();?></h1>

    <?php if (have_posts()) : while (have_posts()) : the_post() ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>


</div>


<?php get_footer(); ?>

<?php 
/*

! La page que nous avons créée ici nous aide à rendre nos pages statiques.
! et nous envoyons également le contenu à la page en créant une boucle (if-while).  

*/
?>