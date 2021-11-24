<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mega web site</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="top">

        <?php //Nous ajoutons le "top-menu", que nous avons créé dans wp, dans la classe conteneur que nous avons ouverte, sous forme de tableau, et l'ajoutons à notre page.  ?>

        <nav class="navbar navbar-expand navbar-light bg-light">

         
            <div class="collapse navbar-collapse" id="navbarNav">


                <?php wp_nav_menu(
                        array(          
                            'theme_location' => 'top-menu',
                            'menu_class' => 'navigation'       
                        )
                    );
                    ?>
            </div>
            <div class="form-search">
                <input class="form-control lg-2" type="search" placeholder="Search" aria-label="Search">
                
            </div>
        </nav>

    </header>


    <?php   

# 'menu_class' => 'navigation'  => pour style header.

# c'est notre page de titre. Ici, nous ouvrons notre page comme une page html normale, 
# mais n'incluons que les balises "header".


/*

? La balise php s'ouvre et se ferme de cette manière. => " <?php .... ?>

    */
    ?>






