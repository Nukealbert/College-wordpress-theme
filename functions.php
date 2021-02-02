<?php



//stylesheets & js files

function load_stylesheets()
{
    //enqueue css files

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.1', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
    wp_enqueue_style('versions', get_template_directory_uri() . '/css/versions.css', array(), '1.1', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.1', 'all');
    wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.1', 'all');
    wp_enqueue_style('customs', get_template_directory_uri() . '/custom.css', array(), '1.1', 'all');

    //enqueue js files

    wp_enqueue_script('allsin', get_template_directory_uri() . '/js/alls.js', array(), 1, 1, 1);
    wp_enqueue_script('customss', get_template_directory_uri() . '/js/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('timeliness', get_template_directory_uri() . '/js/timeline.mins.js', array(), 1, 1, 1);
    wp_enqueue_script('custom', get_template_directory_uri() . '/custom.js', array(), 1, 1, 1);

 }
add_action('wp_enqueue_scripts', 'load_stylesheets');







//menu support
add_theme_support('menus');





//register menus
register_nav_menus(

    array(

        'top-menu'=> __('Top Menu','theme'),
        'footer-social'=> __('Footer Social'),
    )
);


//register footer menu
function footer_1() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'footer_1' );




// Add class to A element of .primary-menu
function tps_primary_menu_anchor_class($item_output, $item, $depth, $args) {
    $item_output = preg_replace('/<a /', '<a class="nav-link " ', $item_output, 1);
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'tps_primary_menu_anchor_class', 10, 4);



// Add class to LI element of .primary-menu
function tps_primary_menu_li_class($objects, $args) {
    foreach($objects as $key => $item) {
      $objects[$key]->classes[] = 'nav-item';
    }
    return $objects;
}
add_filter('wp_nav_menu_objects', 'tps_primary_menu_li_class', 10, 2);





function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);












//post thumbnail

if (function_exists('add_theme_support')) {
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(742, 428);
}



/* Remove the brackets, ellipsis and hellip on excerpt */

function trim_excerpt($text) {
    $text = str_replace('[hellip;]', '...', $text);
     return $text;
    }
add_filter('get_the_excerpt', 'trim_excerpt');




    // Custom logo.
    $logo_width  = 200;
    $logo_height = 57;

    // If the retina setting is active, double the recommended width and height.
    if ( get_theme_mod( 'retina_logo', false ) ) {
        $logo_width  = floor( $logo_width  );
        $logo_height = floor( $logo_height );
    }

    add_theme_support(
        'custom-logo',
        array(
            'height'      => $logo_height,
            'width'       => $logo_width,
            'flex-height' => true,
            'flex-width'  => true,
        )
    );
    

    add_theme_support( 'title-tag' );


   

   



    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );

    // Add support for responsive embeds.
    add_theme_support( 'responsive-embeds' );





//Register Widget

  register_sidebar(array(
    'name' => 'Footer 1',
    'id' => 'footer-1',
    'description'   => 'Custom Footer Widget',
    'before_widget' => '<div class="footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));
 register_sidebar(array(
    'name' => 'Footer social',
    'id' => 'footer-social',
    'description'   => 'Custom Footer Widget',
    'before_widget' => '<div class="footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));
  register_sidebar(array(
    'name' => 'Footer 2',
    'id' => 'footer-2',
    'description'   => 'Custom Footer Widget',
    'before_widget' => '<div class="footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));

 
  
  



function register_my_customizations( $wp_customize ) {
  // setting
  $wp_customize->add_setting( 'header_color' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
  ));
  // section
  $wp_customize->add_section( 'colors' , array(
    'title'      => __( 'Colors', 'custom_theme' ),
    'priority'   => 30,
  ));
  // control
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
    'label'      => __( 'Header Color', 'custom_theme' ),
    'section'    => 'colors',
    'settings'   => 'header_color',
   )
  ));
}







// Define path for acf
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/includes/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/includes/acf/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

//custom field save point
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    
    
    // return
    return $path;
}

//load custom field
add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    // append path
    $paths[] = get_stylesheet_directory() . '/acf-json';
    // return
    return $paths;  
}


?>
