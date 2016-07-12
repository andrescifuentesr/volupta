<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package loulou
 */

//-------------------------------------------------  
//function separator
//-------------------------------------------------
function content_separator_shortcode( $atts ) {
	return '
		<div class="line-separator"></div>';
}
add_shortcode( 'separator', 'content_separator_shortcode' );


//-------------------------------------------------  
//Upload svg via Media library
//-------------------------------------------------
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


//-------------------------------------------------  
//function custom Image: Press image
//-------------------------------------------------
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'imgPresse', 250, 350, false );
}


//-------------------------------------------------  
//function custom Image: Home page - Restaurant 
//-------------------------------------------------
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'imgResto', 740, 300, true );
}

//-------------------------------------------------  
//function custom Image: Home page - Restaurant 
//-------------------------------------------------
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'imgActu', 620, 490, true );
}


//-------------------------------------------------  
// Add class to current CPT and removes from blog
//-------------------------------------------------
// when you are in a single from a CTP,
// WP adds a class to blog but not to your CPT
// http://wordpress.stackexchange.com/questions/121194/current-menu-item-class-for-custom-post-type-parent

add_filter( 'nav_menu_css_class', 'nav_parent_class', 10, 2 );

function nav_parent_class( $classes, $item ) {
    $class = ''; //concern CPT slug
    $cpt_name = 'restaurant'; //concern CPT slug
    $parent_slug = 'menus-de-saison'; //parent page of $cpt_name

    if ( $cpt_name == get_post_type() && ! is_admin() ) {
        global $wpdb;

        // http://wordpress.stackexchange.com/questions/206523/remove-current-page-parent-nav-class-from-blog-index-when-in-cpt
        // we remoe the current_page_parent class from the index (Actu) page.
        if( ( is_post_type_archive( 'restaurant' ) || is_singular( 'restaurant' ) )
            && ( $item->title == 'Actualités' || !is_page('actu') ) ){
            $classes = array_diff( $classes, array( 'current_page_parent' ) );
        }

        // get page info
        // - we really just want the post_name so it cane be compared to the post type slug
        $page = get_page_by_title( $item->title, OBJECT, 'page' );

        // check if slug matches post_name
        if( !empty( $page ) && $page->post_name == $parent_slug ) {
            $classes[] = 'current_page_parent';
        }

    }

    return $classes;
}


//-------------------------------------------------  
// Set a name for the Actus Results Search Form 
//-------------------------------------------------
add_filter('wp_title','search_form_title');

function search_form_title($title){
 
 global $searchandfilter;
 
    if ( $searchandfilter->active_sfid() == 50)
    {
        return 'Actu';
    } else {
        return $title;
    }
 
}