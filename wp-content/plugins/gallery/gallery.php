<?php
/*
Plugin Name: Gallery Plugin
Description: A simple gallery plugin.
Version: 1.0
Author: Arshi Alam
*/

function flush_rewrite_rules_on_activation() {
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'flush_rewrite_rules_on_activation');


function register_custom_gallery_post_type() {
    $labels = array(
        'name' => 'Galleries',
        'singular_name' => 'Gallery',
        'add_new' => 'Add New Gallery',
        'add_new_item' => 'Add New Gallery',
        'edit_item' => 'Edit Gallery',
        'new_item' => 'New Gallery',
        'view_item' => 'View Gallery',
        'search_items' => 'Search Galleries',
        'not_found' => 'No Galleries found',
        'not_found_in_trash' => 'No Galleries found in Trash',
        'all_items' => 'All Galleries',
        'menu_name' => 'Galleries',
        'name_admin_bar' => 'Gallery'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'galleries'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-format-gallery'
    );

    register_post_type('custom_gallery', $args);
}
add_action('init', 'register_custom_gallery_post_type');

function custom_gallery_shortcode() {
    $args = array(
        'post_type' => 'custom_gallery',
        'posts_per_page' => -1, // Fetch all published posts
        'post_status' => 'publish', // Only show published posts
    );
    $galleries = new WP_Query($args);

    ob_start(); // Start output buffering

    if ($galleries->have_posts()) {
        echo '<div class="custom-gallery-wrapper row">'; // Bootstrap row to handle columns
        while ($galleries->have_posts()) {
            $galleries->the_post();
            
            // Fetch the ACF image field
            $gallery_image = get_field('gallery_images'); // Field name: gallery_images

            if (!empty($gallery_image) && is_array($gallery_image)) {
                ?>
                <div class="col-md-4">
                    <div class="container_main">
                        <img src="<?php echo esc_url($gallery_image['url']); ?>" alt="<?php echo esc_attr($gallery_image['alt'] ?? 'Avatar'); ?>" class="image">
                        <div class="overlay">
                            <div class="overlay">
                                <div class="text">
                                    <a href="<?php echo esc_url($gallery_image['url']); ?>"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                echo '<p>No image found for ' . get_the_title() . '.</p>';
            }
        }
        echo '</div>'; // End the gallery wrapper
    } else {
        echo '<p>No galleries found.</p>';
    }

    wp_reset_postdata(); // Reset post data after the query

    return ob_get_clean(); // Return the buffered output
}
add_shortcode('custom_gallery', 'custom_gallery_shortcode');

