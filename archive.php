<?php get_header(); ?>


<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-md-9">
            <h1 class="pb-5"><?php single_cat_title(); ?> </h1>

            <?php if (have_posts()) : while (have_posts()) : the_post() ?>
            <h3> <?php the_title();?></h3>

            <div class="row">
                <div class="col-md-2">
                    <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('small'); ?>" class="img-fluid">
                    <?php endif ?>
                </div>
                <div class="col-md-10">
                    <?php the_excerpt(); ?>
                </div>


            </div>

            <a class="mb-5  btn btn-outline-primary" href="<?php the_permalink(); ?>"> Lire la suite</a>
            <?php endwhile; endif; ?>

        </div>
        <div class="col-md-3" style="list-style-type: none;">
            <?php dynamic_sidebar('page-sidebar'); ?>
        </div>

    </div>



</div>


<?php get_footer(); ?>

<?php 
/*

! line 11 et 17 => Ici, nous ajustons la mise en page des articles sur mon blog. Si la photo est à gauche et que le texte est à gauche, nous définissons la photo pour qu'elle soit à gauche.

! La page que nous avons créée ici nous aide à rendre nos pages statiques.
! et nous envoyons également le contenu à la page en créant une boucle (if-while).  


? "the_excerpt();" ( line10 ) => Cette fonctionnalité nous permet de montrer non pas tout le contenu, mais une partie de celui-ci, c'est-à-dire sous forme de résumé.

?  (line 9) En enfermant la balise "h1" dans quelle boucle, on obtient les titres de chaque article tout en récupérant le contenu.

? single_cat_title(); (line 6) => nous obtenons automatiquement les titres des catégories

? the_permalink(); (line 11) => ajoute un lien à la fin de chaque article et en cliquant sur va à la suite de l'article concerné



todo Puisque nous avons donné 'page-sidebar' comme identifiant à la fonction que nous avons écrite pour créer une barre latérale sur la page function.php, nous l'activons en donnant cet identifiant dans le code dynamic_sidebar sur la page archive.php.

*/
?>