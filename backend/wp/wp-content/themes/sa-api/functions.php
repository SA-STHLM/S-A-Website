<?php
register_nav_menus( array( $location => $description ) );

// Add S/A Admin menu items
function dev_tools() {
	add_menu_page(
	  'Dev Tools',
	  'Dev Tools', 
	  'manage_options', 
	  'sa-dev/tools.php', 
	  'tools', 
	  '', 
	1
  );
}

// WooCommerce Support / WooCommerce stuff
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action('wp_logout','go_home');
function go_home(){
  wp_redirect( home_url() );
  exit();
}


// Clean up Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// Remove WP Emojis
function disable_wp_emojicons() {
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

// Remove WP Admin menu items
function remove_menus(){
  
  remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'jetpack' );                    //Jetpack* 
  //remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'upload.php' );                 //Media
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  //remove_menu_page( 'themes.php' );                 //Appearance
  //remove_menu_page( 'plugins.php' );                //Plugins
  //remove_menu_page( 'users.php' );                  //Users
  remove_menu_page( 'tools.php' );                  //Tools
  //remove_menu_page( 'options-general.php' );        //Settings
  
}
add_action( 'admin_menu', 'remove_menus' );

function dashboard_redirect(){
    wp_redirect(admin_url('admin.php?page=sa-dev/tools.php'));
}
add_action('load-index.php','dashboard_redirect');

add_action('admin_head', 'custom_css');

function custom_css() { ?>
	<link rel="stylesheet" type="text/css" href="../../../../resources/css/styles.admin.css">
<?php }

add_action( 'admin_menu', 'dev_tools' );

function tools(){
	require('../../dev/dev-tools.php');
  require('../../api/merge.api.php');
}


/* Remove Default Editor */
function reset_editor() {
     global $_wp_post_type_features;

     $post_type="page";
     $feature = "editor";
     if ( !isset($_wp_post_type_features[$post_type]) )
     {

     }
     elseif ( isset($_wp_post_type_features[$post_type][$feature]) )
     unset($_wp_post_type_features[$post_type][$feature]);
}

function reset_post() {
     global $_wp_post_type_features;

     $post_type="post";
     $feature = "editor";
     if ( !isset($_wp_post_type_features[$post_type]) )
     {

     }
     elseif ( isset($_wp_post_type_features[$post_type][$feature]) )
     unset($_wp_post_type_features[$post_type][$feature]);
}

add_action("init","reset_post");
add_action("init","reset_editor");
?>