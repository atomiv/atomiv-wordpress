<?php

/* =============================================================
	Register menus
==============================================================*/

register_nav_menus( array(
	'main-nav'				=> 'Main navigation',
	'meta-nav'				=> 'Meta navigation'
) );

/* =============================================================
	END: Register menus
==============================================================*/




/* =============================================================
    Custom logo
==============================================================*/

function atomiv_custom_logo_setup() {
    $cldefaults = array(
        'height'      => 100,
        'width'       => 351,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $cldefaults );
}
add_action( 'after_setup_theme', 'atomiv_custom_logo_setup' );

/* =============================================================
    END: Custom logo
==============================================================*/




/* =============================================================
	Register widgets
==============================================================*/

// Blog sidebar
function atomiv_blog_widgets_init() {
	register_sidebar( array(
		'name'			=> esc_html__( 'Blog sidebar', 'atomiv_blog' ),
		'id'			=> 'blog-sidebar',
		'description'	=> esc_html__( 'Add widgets here.', 'atomiv_blog' ),
		'before_widget'	=> '<div id="%1$s" class="sidebar__widget %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="sidebar__title">',
		'after_title'	=> '</h3>',
	));
}
add_action( 'widgets_init', 'atomiv_blog_widgets_init' );


// Single post sidebar
function custom_post_sidebar_widget() {
    register_sidebar( array(
        'name'          => __( 'Single Post Sidebar', 'singlepost' ),
        'id'            => 'single_post_sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts.', 'singlepost' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widget__title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'custom_post_sidebar_widget' );

/* =============================================================
	END: Register widgets
==============================================================*/



/* =============================================================
	Search function for posts
==============================================================*/

function atomiv_search_filter( $query ) {
    if ( $query->is_search ) {
        $query->set( 'post_type', array('post') );
    }
    return $query;
}
add_filter('pre_get_posts','atomiv_search_filter');


function atomiv_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }

    return $join;
}
add_filter('posts_join', 'atomiv_search_join' );


/* Modify the search query with posts_where */
function atomiv_search_where( $where ) {
    global $pagenow, $wpdb;

    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;
}
add_filter( 'posts_where', 'atomiv_search_where' );

/* Prevent duplicates */
function atomiv_search_distinct( $where ) {
    global $wpdb;

    if ( is_search() ) {
        return "DISTINCT";
    }

    return $where;
}
add_filter( 'posts_distinct', 'atomiv_search_distinct' );

/* =============================================================
	End: Search function for posts
==============================================================*/




/* =============================================================
	Add function for post thumbnail image
==============================================================*/

add_theme_support( 'post-thumbnails' );

/* =============================================================
	End: Add function for post thumbnail image
==============================================================*/

