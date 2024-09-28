<!DOCTYPE html>
<html>
<head>
	<?php 
 wp_head();
 get_header();
 ?>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <title></title>
</head>
<body>
    <?php 
    while(have_posts()):the_post();
        the_content();
    endwhile;
    ?>
    
    <?php
    get_footer();
    ?>
