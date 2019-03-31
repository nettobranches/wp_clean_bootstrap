<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

/**
 * Twenty Seventeen only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

function bsimple_scripts() {
    wp_enqueue_style( 'bsimple-style', get_stylesheet_uri() );
    wp_enqueue_style( 'bsimple-clean', get_template_directory_uri() . '/css/clean-blog.min.css' );
    wp_enqueue_style( 'bsimple-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bsimple-fontawesome', get_template_directory_uri() . '/css/fa-all.min.css' );
    wp_enqueue_style( 'bsimple-font1', "https://fonts.googleapis.com/css?family=Lora:400,700,
    ➥400italic,700italic" );
    wp_enqueue_style( 'bsimple-font2', "https://fonts.googleapis.com/css?family=Open+Sans:300italic,4
    ➥00italic,600italic,700italic,800italic,400,300,600,700,800" );

    wp_enqueue_script( 'bsimple-jq', get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script( 'bsimple-bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js');
    wp_enqueue_script( 'bsimple-clean', get_template_directory_uri() . '/js/clean-blog.min.js');
}    

add_action( 'wp_enqueue_scripts', 'bsimple_scripts' );   

function add_menu_link_class( $atts, $item, $args ) {
    if($args->link_class) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

function add_menu_list_item_class($classes, $item, $args) {
    if($args->list_item_class) {
        $classes[] = $args->list_item_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

if(!function_exists('dynamic_header')){

function dynamic_header(){

    global $post;

    ?>

    <?php if (is_front_page()){ ?>

        <header class="masthead" style="background:#ccc;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="site-heading">
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
                        ➥rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <span class="subheading"><?php get_bloginfo( 'description', 'display' );?>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

    <?php } else if (is_home()){ ?>

        <header class="masthead" style="background:#ccc;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="site-heading">
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
                        ➥rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <span class="subheading"><?php get_bloginfo( 'description', 'display' );?>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

    <?php } else if (is_page()){ ?>

        <header class="masthead" style="background:#ccc;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="site-heading">
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
                        ➥rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <span class="subheading"><?php get_bloginfo( 'description', 'display' );?>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

    <?php } else if (is_single()){ ?>

        <header class="masthead" style="background:#ccc;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="site-heading">
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
                        ➥rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <span class="subheading"><?php get_bloginfo( 'description', 'display' );?>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

    <?php } else { ?>

        <header class="masthead" style="background:#ccc;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="site-heading">
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
                        ➥rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <span class="subheading"><?php get_bloginfo( 'description', 'display' );?>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

    <?php }
}

} //endif(!function_exists('dynamic_header')){