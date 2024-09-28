<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <?php wp_head(); ?>
   
</head>
<body <?php body_class(); ?>>

  <header>
            <nav>
                <?php
                    echo wp_nav_menu(
                            array(
                              'theme_location' => 'header-menu',
                              'walker'         => new Category_post_walker(),
                              'menu_class'     => 'main-menu',         
                            )
                    );
                  ?>
                
            </nav>

   
