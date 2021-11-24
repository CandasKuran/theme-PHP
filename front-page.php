<?php get_header(); ?>




<div class="container pt-5 pb-5">

    <h1> <?php the_title();?></h1>

    <?php if (have_posts()) : while (have_posts()) : the_post() ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>




<?php get_footer(); ?>

<?php /* 


c'est notre page. C'est ainsi que nous pouvons éditer une page que nous avons créée dans 
wordpress. Comme nous n'incluons que le corps de la page, 
nous l'ajoutons entre les balises "header" et "footer".




*/ ?>

