<?php

/**
 * Custom Post Type for Portfolio Items
 */
function anthonyjones_register_post_types() {
  $labels = array(
    'name'               => _x( 'Portfolios', 'post type general name' ),
    'singular_name'      => _x( 'Portfolio', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'portfolio' ),
    'add_new_item'       => __( 'Add New Portfolio' ),
    'edit_item'          => __( 'Edit Portfolio' ),
    'new_item'           => __( 'New Portfolio' ),
    'all_items'          => __( 'All Portfolios' ),
    'view_item'          => __( 'View Portfolio' ),
    'search_items'       => __( 'Search Portfolios' ),
    'not_found'          => __( 'No portfolios found' ),
    'not_found_in_trash' => __( 'No portfolios found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Portfolios'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our products and product specific data',
    'public'        => true,
    'menu_position' => null,
    'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' ),
    'has_archive'   => true,
    'show_in_nav_menus' => true,
    'rewrite' => array('slug' => 'portfolio')
  );
  register_post_type( 'portfolio' , $args ); 

}

add_action( 'init', 'anthonyjones_register_post_types' );

/**
 * Create taxonomies for the Portfolio post type.
 */
function create_taxonomies_portfolio() {
   $labels = array(
    'name'              => _x( 'Portfolio Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Portfolio Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Portfolio Categories' ),
    'all_items'         => __( 'All Portfolio Categories' ),
    'parent_item'       => __( 'Parent Portfolio Category' ),
    'parent_item_colon' => __( 'Parent Portfolio Category:' ),
    'edit_item'         => __( 'Edit Portfolio Category' ), 
    'update_item'       => __( 'Update Portfolio Category' ),
    'add_new_item'      => __( 'Add New Portfolio Category' ),
    'new_item_name'     => __( 'New Portfolio Category' ),
    'menu_name'         => __( 'Portfolio Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'portfolio_category', 'portfolio', $args );
}

add_action( 'init', 'create_taxonomies_portfolio', 0 );

/**
 * Add Meta Box to Portfolio
 */
function portfolio_meta_box(){  
  add_meta_box('projInfo-meta', 'Project Options', 'portfolio_meta_options', 'portfolio', 'side', 'low');  
}  
   
/**
 * Add Mata Options From to WP Backend
 */
function portfolio_meta_options() {  
  global $post;  
  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
  $custom = get_post_custom($post->ID);  
  $link = $custom["projLink"][0];  
  ?>  
    <label>Link:</label><input name="projLink" value="<?php echo $link; ?>" />  
  <?php  
}
add_action('admin_init', 'portfolio_meta_box'); 

/**
 * Save Meta Options
 */
function save_project_link(){  
  global $post;  
   
  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) { 
    return $post_id;
  }
  else {
    update_post_meta($post->ID, "projLink", $_POST["projLink"]); 
  } 
}

add_action('save_post', 'save_project_link'); 

?>