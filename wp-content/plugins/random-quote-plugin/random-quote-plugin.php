<?php
/*
Plugin Name: Random Quote of the Day
Description: Display a random quote on your website.
Version: 1.0
Author: Your Name
*/

// Register custom post type for quotes
function rqtod_register_post_type() {
    register_post_type('quote', array(
        'labels' => array(
            'name' => __('Quotes'),
            'singular_name' => __('Quote'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'quotes'),
    ));
}
add_action('init', 'rqtod_register_post_type');

// Display a random quote
function rqtod_display_random_quote() {
    $args = array(
        'post_type' => 'quote',
        'posts_per_page' => 1,
        'orderby' => 'rand',
    );

    $quote_query = new WP_Query($args);

    if ($quote_query->have_posts()) {
        while ($quote_query->have_posts()) {
            $quote_query->the_post();
            $quote_content = get_the_content();
            $quote_author = get_post_meta(get_the_ID(), 'quote_author', true);

            echo '<div class="random-quote">';
            echo '<p class="quote-content">' . esc_html($quote_content) . '</p>';
            if ($quote_author) {
                echo '<p class="quote-author">- ' . esc_html($quote_author) . '</p>';
            }
            echo '</div>';
        }
        wp_reset_postdata();
    } else {
        echo 'No quotes found.';
    }
}
add_shortcode('random_quote', 'rqtod_display_random_quote');

// Add meta box for quote author
function rqtod_add_meta_boxes() {
    add_meta_box('quote_author', 'Quote Author', 'rqtod_quote_author_meta_box', 'quote', 'side', 'default');
}
add_action('add_meta_boxes', 'rqtod_add_meta_boxes');

// Callback function to display the quote author meta box
function rqtod_quote_author_meta_box($post) {
    $quote_author = get_post_meta($post->ID, 'quote_author', true);
    ?>
    <label for="quote_author">Author:</label>
    <input type="text" id="quote_author" name="quote_author" value="<?php echo esc_attr($quote_author); ?>">
    <?php
}

// Save quote author meta box data
function rqtod_save_quote_author_meta_box($post_id) {
    if (array_key_exists('quote_author', $_POST)) {
        update_post_meta($post_id, 'quote_author', sanitize_text_field($_POST['quote_author']));
    }
}
add_action('save_post', 'rqtod_save_quote_author_meta_box');

?>
