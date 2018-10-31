<?php  

function register_enqueue_style(){
	$theme_data = wp_get_theme();


wp_register_style('bootstrap', get_theme_file_uri('assets/vendor/css/bootstrap.min.css'), null, $theme_data->get('Version'), 'screen');

//wp_register_style('icon', get_theme_file_uri('assets/img/logo.png'), null, $theme_data->get('Version'), 'screen');

wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');


wp_register_style('fonts', 'https://fonts.google.com/?selection.family=Open+Sans');


wp_register_style('mistyle', get_theme_file_uri('assets/css/style.css'), null, $theme_data->get('Version'), 'screen');



wp_enqueue_style('bootstrap');
//wp_enqueue_style('icon');
wp_enqueue_style('fontawesome');
wp_enqueue_style('fonts');
wp_enqueue_style('mistyle');

}

add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );

//registros de scripts

function register_enqueue_scripts (){
	$theme_data = wp_get_theme();

//desregistrando scripts

wp_deregister_script('jquery');
wp_deregister_script('jquery-migrate');


wp_register_script('jquery3', get_parent_theme_file_uri('assets/vendor/js/jquery-3.3.1.min.js'), null, "3.3.1", true);

//wp_register_script('jquery_migrate', get_parent_theme_file_uri('assets/vendor/js/jquery-migrate-1.4.1.min.js'), array('jquery3'), '3.3.1', true);


wp_register_script('boostrap', get_parent_theme_file_uri('assets/vendor/js/bootstrap.min.js'),array('jquery3'), null, true);


//wp_register_script('easingjquery', get_parent_theme_file_uri('assets/vendor/js/jquery.easing.1.3.min.js'),array('jquery3'), null, true);

wp_register_script('mainjs', get_parent_theme_file_uri('assets/js/script.js'),array('jquery3'), null, true);



wp_enqueue_script('jquery3');
//wp_enqueue_script('jquery_migrate');
wp_enqueue_script('boostrap');
//wp_enqueue_script('easingjquery');
wp_enqueue_script('mainjs');

}

add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );


//logo personalizado

 function config_custom_logo() {
    add_theme_support( 'custom-logo', array(
      'height'      => 200,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description' ),
    ));
  }
  add_action( 'after_setup_theme', 'config_custom_logo' );


//Tamaños personalizados

function thumbnails_setup() {
    add_theme_support( 'post-thumbnails' );
  }

  add_action( 'after_setup_theme', 'thumbnails_setup' );

  function dl_image_sizes( $sizes ) {
    $add_sizes = array(
      'portfolio-home'    => __( 'Tamaño de las imágenes del portafolio en el home' ),
      'square'            => __( 'Tamaño personalizado para hacer cuadradas las imágenes' ),
      'post-custom-size'  => __( 'Tamaño personalizado para la imagen destada de los post' ),
      'custom-size-blog'  => __( 'Tamaño personalizado para la imagen destada de los post' )
    );
    return array_merge( $sizes, $add_sizes );
  }
  if ( function_exists( 'add_theme_support' ) ) {
    add_image_size( 'portfolio-home', 465, 250, true );
    add_image_size( 'square', 400, 400, true );
    add_image_size( 'post-custom-size', 800, 520, true );
    add_image_size( 'custom-size-blog', 400, 300, true );

    add_filter( 'image_size_names_choose', 'dl_image_sizes' );
  }
  


//menú personalizable
  function menus_setup() {
	register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu' ),
			'footer-menu'	=> __( 'Footer Menu' ),
		)
	);
}
add_action( 'after_setup_theme', 'menus_setup' );



// Register Custom Post Type

if ( ! function_exists('agrupaciones') ) {

// Register Custom Post Type
function agrupaciones() {

  $labels = array(
    'name'                  => _x( 'agrupaciones', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'agrupacion', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'agrupaciones', 'text_domain' ),
    'name_admin_bar'        => __( 'agrupaciones', 'text_domain' ),
    'archives'              => __( 'Item Archives', 'text_domain' ),
    'attributes'            => __( 'Item Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Item', 'text_domain' ),
    'view_items'            => __( 'View Items', 'text_domain' ),
    'search_items'          => __( 'Search Item', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'agrupacion', 'text_domain' ),
    'description'           => __( 'personalización de foto', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-admin-users',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'agrupaciones', $args );

}
add_action( 'init', 'agrupaciones', 0 );

}

//este es el registro de widget footer


function dl_widgets() {
    register_sidebar( array(
      'name' => 'Widget Footer',
      'id' => 'widget_footer'
    ));

    register_sidebar( array(
      'name' => 'Barra Lateral',
      'id' => 'sidebar-widget',
      'before_widget' => '<div id="%1$s" class="widget %2$s" mt-4',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widgettitle">',
      'after_title' => '</h2>',
    ));

  }
  add_action('widgets_init', 'dl_widgets');


if ( ! function_exists('nosotros_post_type') ) {

// Register Custom Post Type
function nosotros_post_type() {

  $labels = array(
    'name'                  => _x( 'nosotros', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'nosotro', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'nosotros', 'text_domain' ),
    'name_admin_bar'        => __( 'nosotros', 'text_domain' ),
    'archives'              => __( 'Item Archives', 'text_domain' ),
    'attributes'            => __( 'Item Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Item', 'text_domain' ),
    'view_items'            => __( 'View Items', 'text_domain' ),
    'search_items'          => __( 'Search Item', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'nosotro', 'text_domain' ),
    'description'           => __( 'infomación de escuela', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-format-aside',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'nosotros', $args );

}
add_action( 'init', 'nosotros_post_type', 0 );

}






Remove_action ("shutdown", "wp_ob_end_flush_all",1);
?>


