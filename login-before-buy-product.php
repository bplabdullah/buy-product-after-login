// Add this code in functions.php

add_action( 'template_redirect', 'my_redirect_nonmembers' );
function prevent_access_to_product_page(){
    global $post;
    if ( is_product() && is_user_logged_in()) {
        wp_safe_redirect( home_url() );
        exit;
    }
}
