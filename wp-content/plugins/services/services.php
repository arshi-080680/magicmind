<?php
/*
Plugin Name: Services Plugin
Description: A custom plugin to manage services.
Version: 1.0
Author: Arshi Alam
*/

// Flush rewrite rules on activation
function services_plugin_activation() {
    register_services_post_type();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'services_plugin_activation');

// Register Custom Post Type for Services
function register_services_post_type() {
    $labels = array(
        'name'                  => _x('Services', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Service', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Services', 'text_domain'),
        'name_admin_bar'        => __('Service', 'text_domain'),
        'add_new_item'          => __('Add New Service', 'text_domain'),
        'new_item'              => __('New Service', 'text_domain'),
        'edit_item'             => __('Edit Service', 'text_domain'),
        'view_item'             => __('View Service', 'text_domain'),
        'all_items'             => __('All Services', 'text_domain'),
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'has_archive'           => true,
        'show_in_rest'          => true,
        'menu_icon'             => 'dashicons-admin-generic', // Icon for the post type
    );
    register_post_type('service', $args);
}
add_action('init', 'register_services_post_type');

// Shortcode to display the services
function services_shortcode() {
    $args = array(
        'post_type' => 'service',
        'posts_per_page' => -1, // Fetch all published services
        'post_status' => 'publish',
    );
    $services = new WP_Query($args);

    ob_start(); // Start output buffering

    if ($services->have_posts()) {
        echo '<div class="services-wrapper row">'; // Bootstrap row for services
        while ($services->have_posts()) {
            $services->the_post();

            // ACF fields for service details
            $icon1 = get_field('service_icon1'); // First icon image (field name: service_icon1)
            $icon2 = get_field('service_icon2'); // Second icon image (field name: service_icon2)
            $description = get_field('service_description'); // Description text (field name: service_description)
            ?>
            <div class="col-lg-4 col-sm-12 col-md-4">
                <div class="box_main active">
                    <div class="house_icon">
                        <img src="<?php echo esc_url($icon1['url']); ?>" class="image_1">
                        <img src="<?php echo esc_url($icon2['url']); ?>" class="image_2">
                    </div>
                    <h3 class="decorate_text"><?php the_title(); ?></h3>
                    <p class="tation_text"><?php echo esc_html($description); ?></p>
                    <div class="readmore_bt"><a href="<?php the_permalink(); ?>">Read More</a></div>
                </div>
            </div>
            <?php
        }
        echo '</div>';
    } else {
        echo '<p>No services found.</p>';
    }

    wp_reset_postdata(); // Reset post data after the query

    return ob_get_clean(); // Return the buffered output
}
add_shortcode('services', 'services_shortcode');
