<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!--header section start -->
<div class="header_section">
   <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="logo"><a href="<?php echo bloginfo('url');?>"><img src="<?php echo bloginfo('template_url');?>/assets/images/logo.png"></a></div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <!-- <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="about.html">About Us</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="gallery.html">Gallery</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="services.html">Services</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact Us</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
               </li>
            </ul> -->

            <?php
              echo wp_nav_menu(
                      array(
                        'theme_location' => 'main-menu',
                        'container' =>'ul',
                        'menu_class' => 'navbar-nav ml-auto'                        
                      )
              );
            ?>
         </div>
      </nav>
   </div>
</div>
<!--header section end -->