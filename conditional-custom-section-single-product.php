<?php

function custom_section_product_page() {
	// explode url after slash to determine what language is used
    $exp = explode('/',$_SERVER['REQUEST_URI']); 
    $language = $exp[1];
    // check if used language is english
    if($language != "en") {
        echo '<section class="rental products"><h2>Rental products</h2>';
        echo do_shortcode('[product_category category="rental" limit="4" columns="4"]');
        echo '</section>';
    }
}

add_action( 'woocommerce_after_single_product', 'custom_section_product_page', 30 );

?>