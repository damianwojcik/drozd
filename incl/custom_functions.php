<?php

function bamboo_request($query_string )
{
    if( isset( $query_string['page'] ) ) {
        if( ''!=$query_string['page'] ) {
            if( isset( $query_string['name'] ) ) {
                unset( $query_string['name'] );
            }
        }
    }
    return $query_string;
}
add_filter('request', 'bamboo_request');

add_action('pre_get_posts','bamboo_pre_get_posts');
function bamboo_pre_get_posts( $query ) {
    if( $query->is_main_query() && !$query->is_feed() && !is_admin() ) {
        $query->set( 'paged', str_replace( '/', '', get_query_var( 'page' ) ) );
    }
}

?>
