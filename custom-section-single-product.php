<?php

function custom_section_product_page() {
    echo '<section class="featured products"><h2>Featured products</h2>';
    echo do_shortcode('[featured_products limit="4" columns="4"]');
    echo '</section>';
}

add_action( 'woocommerce_after_single_product', 'custom_section_product_page', 30 );


?>