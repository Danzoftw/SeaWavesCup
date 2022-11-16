<?php
/*
=============================================================
  Enqueue Scripts and Styles
=============================================================
*/
function theme_enqueue_scripts() {
  //CSS
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.1', 'all');
  wp_enqueue_style('slick-slider',get_template_directory_uri() . '/css/slick.css', array(), '3.3.4', 'all');
  // wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/css/slick-theme.css', array(), '3.3.4', 'all');
  wp_enqueue_style('aos',get_template_directory_uri() . '/css/aos.css', array(), '3.3.4', 'all');
  wp_enqueue_style('seawaves', get_template_directory_uri() . '/css/style.css', array(), '3.3.5', 'all');

 	//JS
  wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/js/jquery.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('slick-js', get_stylesheet_directory_uri() . '/js/slick.js', array('jquery'), '1.0.1', true);
  wp_enqueue_script('jquery-waypoints', get_stylesheet_directory_uri() . '/js/jquery.waypoints.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('aos', get_stylesheet_directory_uri() . '/js/aos.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('seawaves', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), '3.3.5', true);
 }
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

/*
=============================================================
  Hide admin bar
=============================================================
*/
function remove_admin_login_header() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

function remove_admin_bar(){
  show_admin_bar(false);
}
add_action('after_setup_theme', 'remove_admin_bar');

/*
=============================================================
  Register Menus
=============================================================
*/
function register_my_menus() {
  add_theme_support('menus');
  register_nav_menu('primary_header','Primary header navigation');
  register_nav_menu('footer_primary','Footer primary navigation');
  register_nav_menu('privacy_primary','Privacy primary navigation');
}
add_action('init', 'register_my_menus');

/*
===================================
  Theme support function
===================================
*/
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'audio', 'gallery', 'status'));
add_theme_support('custom-background');
add_theme_support('custom-header');

function cc_customize_register($wp_customize) {
	//header logo
	$wp_customize->add_section("site_logo", array(
    "title" => __("Site Logo", "seawaves"),
    "priority" => 30,
	));
  $wp_customize->add_setting("logo_url", array(
    "default" => "",
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, "logo_url", array(
    'label' => __('Upload a white logo', 'seawaves'),
    'section' => 'site_logo',
    'settings' => 'logo_url'
    )
  ));
  //logo text
  $wp_customize->add_section("site_logo_text", array(
    "title" => __("Site Logo text", "seawaves"),
    "priority" => 30,
  ));
  $wp_customize->add_setting("logo_text", array(
    "default" => "",
  ));
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize, "logo_text", array(
    'label' => __('Logo text', 'seawaves'),
    'section' => 'site_logo_text',
    'settings' => 'logo_text'
    )
  ));
  //footer logo
  $wp_customize->add_section("footer_logo", array(
    "title" => __("Footer Logo", "seawaves"),
    "priority" => 30,
  ));
  $wp_customize->add_setting("footer_logo_url", array(
    "default" => "",
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, "footer_logo_url", array(
    'label' => __('Upload a footer logo', 'seawaves'),
    'section' => 'footer_logo',
    'settings' => 'footer_logo_url'
    )
  ));
  /*Site copyright*/
  $wp_customize->add_section("site_copyright", array(
	    "title" => __("Site copyright", "seawaves"),
	    "priority" => 30,
	));
  $wp_customize->add_setting("copyright_text", array(
    "default" => "",
  ));
  $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize, "copyright_text", array(
      'label' => __('Copyright Text', 'seawaves'),
      'section' => 'site_copyright',
      'settings' => 'copyright_text'
      )
  ));
  /*Social media links*/
  $wp_customize->add_section("social_links", array(
    "title" => __("Social media links", "seawaves"),
    "priority" => 30,
  ));
  $wp_customize->add_setting("linkedin_link", array(
      "default" => "",
  ));
  $wp_customize->add_setting("twitter_link", array(
      "default" => "",
  ));
  $wp_customize->add_setting("youtube_link", array(
      "default" => "",
  ));
  $wp_customize->add_setting("linkedin_logo", array(
    "default" => "",
  ));
  $wp_customize->add_setting("twitter_logo", array(
    "default" => "",
  ));
  $wp_customize->add_setting("youtube_logo", array(
    "default" => "",
  ));
  $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize, "linkedin_link", array(
      'label' => __('Linkedin link', 'seawaves'),
      'section' => 'social_links',
      'settings' => 'linkedin_link'
      )
  ));
  $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize, "twitter_link", array(
      'label' => __('Twitter link', 'seawaves'),
      'section' => 'social_links',
      'settings' => 'twitter_link'
      )
  ));
  $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize, "youtube_link", array(
      'label' => __('Youtube link', 'seawaves'),
      'section' => 'social_links',
      'settings' => 'youtube_link'
      )
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, "linkedin_logo", array(
    'label' => __('Upload Linkedin logo', 'seawaves'),
    'section' => 'social_links',
    'settings' => 'linkedin_logo'
    )
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, "twitter_logo", array(
    'label' => __('Upload Twitter logo', 'seawaves'),
    'section' => 'social_links',
    'settings' => 'twitter_logo'
    )
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, "youtube_logo", array(
    'label' => __('Upload Youtube logo', 'seawaves'),
    'section' => 'social_links',
    'settings' => 'youtube_logo'
    )
  ));
}
  add_action("customize_register", "cc_customize_register");
  /*
    ===================================
    Excerpt Limit
    ===================================
  */
  function custom_excerpt_length( $length ) {
    if ( is_admin() ) {
      return $length;
    }
    return 10;
  }
  add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
  /*
    ===================================
    Excerpt Custom
    ===================================
  */
  function wpdocs_excerpt_more( $more ) {
    return '...';
  }
  add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

  /*-------------------------------------------------------------
  Custom Post Type - Teams
---------------------------------------------------------------*/
function post_type_teams() {
  $labels = array(
    'name'               => _x( 'Teams', 'post type general name' ),
    'singular_name'      => _x( 'Teams', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Teams' ),
    'add_new_item'       => __( 'Add New Teams' ),
    'edit_item'          => __( 'Edit Teams' ),
    'new_item'           => __( 'New Teams' ),
    'all_items'          => __( 'All Teams' ),
    'view_item'          => __( 'View Teams' ),
    'search_items'       => __( 'Search Teams' ),
    'not_found'          => __( 'No Teams found' ),
    'not_found_in_trash' => __( 'No Teams found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Teams'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Add your Teams',
    'public'        => true,
    'menu_position' => 3,
    // 'taxonomies'    => array( 'category' ), //This adds default category to CPT
    'show_in_rest'  => true,
    'menu_icon'     => 'dashicons-admin-site',
    'supports'      => array( 'title', 'thumbnail','editor', 'page-attributes','excerpt','comments', 'custom-fields'),
    'has_archive'   => true,
  );
  register_post_type( 'Teams', $args );
}
add_action( 'init', 'post_type_teams' );

//First taxonomy for Teams
function register_taxonomy_for_teams()
{
  $labels = [
    'name'              => _x('Teams categories', 'taxonomy general name'),
    'singular_name'     => _x('Teams category', 'taxonomy singular name'),
    'search_items'      => __('Search Teams category'),
    'all_items'         => __('All Teams categories'),
    'parent_item'       => __('Parent Teams category'),
    'parent_item_colon' => __('Parent Teams category:'),
    'edit_item'         => __('Edit Teams category'),
    'update_item'       => __('Update Teams category'),
    'add_new_item'      => __('Add New Teams category'),
    'new_item_name'     => __('New Teams category Name'),
    'menu_name'         => __('Teams categories'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => ['slug' => 'teams_category'],
  ];
  register_taxonomy('teams_category', ['teams'], $args);
}
add_action('init', 'register_taxonomy_for_teams');

/*-------------------------------------------------------------
  Custom Post Type - Tournaments
---------------------------------------------------------------*/
function post_type_tournaments() {
  $labels = array(
    'name'               => _x( 'Tournaments', 'post type general name' ),
    'singular_name'      => _x( 'Tournaments', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Tournaments' ),
    'add_new_item'       => __( 'Add New Tournaments' ),
    'edit_item'          => __( 'Edit Tournaments' ),
    'new_item'           => __( 'New Tournaments' ),
    'all_items'          => __( 'All Tournaments' ),
    'view_item'          => __( 'View Tournaments' ),
    'search_items'       => __( 'Search Tournaments' ),
    'not_found'          => __( 'No Tournaments found' ),
    'not_found_in_trash' => __( 'No Tournaments found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Tournaments'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Add your Tournaments',
    'public'        => true,
    'menu_position' => 3,
    // 'taxonomies'    => array( 'category' ), //This adds default category to CPT
    'show_in_rest'  => true,
    'menu_icon'     => 'dashicons-admin-site',
    'supports'      => array( 'title', 'thumbnail','editor', 'page-attributes','excerpt','comments', 'custom-fields'),
    'has_archive'   => true,
  );
  register_post_type( 'Tournaments', $args );
}
add_action( 'init', 'post_type_tournaments' );

//First taxonomy for Tournaments
function register_taxonomy_for_tournaments()
{
  $labels = [
    'name'              => _x('Tournaments categories', 'taxonomy general name'),
    'singular_name'     => _x('Tournaments category', 'taxonomy singular name'),
    'search_items'      => __('Search Tournaments category'),
    'all_items'         => __('All Tournaments categories'),
    'parent_item'       => __('Parent Tournaments category'),
    'parent_item_colon' => __('Parent Tournaments category:'),
    'edit_item'         => __('Edit Tournaments category'),
    'update_item'       => __('Update Tournaments category'),
    'add_new_item'      => __('Add New Tournaments category'),
    'new_item_name'     => __('New Tournaments category Name'),
    'menu_name'         => __('Tournaments categories'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => ['slug' => 'tournaments_category'],
  ];
  register_taxonomy('tournaments_category', ['tournaments'], $args);
}
add_action('init', 'register_taxonomy_for_tournaments');

/*-------------------------------------------------------------
  Custom Post Type - News
---------------------------------------------------------------*/
function post_type_news() {
  $labels = array(
    'name'               => _x( 'News', 'post type general name' ),
    'singular_name'      => _x( 'New', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'News' ),
    'add_new_item'       => __( 'Add New News' ),
    'edit_item'          => __( 'Edit News' ),
    'new_item'           => __( 'New News' ),
    'all_items'          => __( 'All News' ),
    'view_item'          => __( 'View News' ),
    'search_items'       => __( 'Search News' ),
    'not_found'          => __( 'No News found' ),
    'not_found_in_trash' => __( 'No News found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'News'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Add your News',
    'public'        => true,
    'menu_position' => 3,
    // 'taxonomies'    => array( 'category' ), //This adds default category to CPT
    'show_in_rest'  => true,
    'menu_icon'     => 'dashicons-admin-site',
    'supports'      => array( 'title', 'thumbnail','editor', 'page-attributes','excerpt','comments', 'custom-fields'),
    'has_archive'   => true,
  );
  register_post_type( 'News', $args );
}
add_action( 'init', 'post_type_news' );

//First taxonomy for News
function register_taxonomy_for_news()
{
  $labels = [
    'name'              => _x('News categories', 'taxonomy general name'),
    'singular_name'     => _x('News category', 'taxonomy singular name'),
    'search_items'      => __('Search News category'),
    'all_items'         => __('All News categories'),
    'parent_item'       => __('Parent News category'),
    'parent_item_colon' => __('Parent News category:'),
    'edit_item'         => __('Edit News category'),
    'update_item'       => __('Update News category'),
    'add_new_item'      => __('Add New News category'),
    'new_item_name'     => __('New News category Name'),
    'menu_name'         => __('News categories'),
  ];
  $args = [
    'hierarchical'      => true, // make it hierarchical (like categories)
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => ['slug' => 'news_category'],
  ];
  register_taxonomy('news_category', ['news'], $args);
}
add_action('init', 'register_taxonomy_for_news');



  function placeholder_author_email_url_form_fields($fields) {
    $replace_author = __('Name *', 'yourdomain');
    $replace_email = __('Email *', 'yourdomain');
    $replace_url = __('Your Website', 'yourdomain');
    $replace_comment = __('Your Comment', 'yourdomain');

    $fields['author'] = '<p class="comment-form-author"><label for="author">' . _x( 'Name', 'yourdomain' ) .
    '</label><input type="text" id="author" name="author" placeholder="'.$replace_author.'" size="20" required/></input></p>';
    
    $fields['email'] = '<p class="comment-form-email"><label for="email">' . _x( 'Email', 'yourdomain' ) .
    '</label><input type="email" id="email" name="email" placeholder="'.$replace_email.'" size="30" required/></input></p>';

    $fields['url'] = '<p class="comment-form-url"><label for="url">' . _x( 'Website', 'yourdomain' ) .
    '</label><input type="url" id="url" name="url" placeholder="'.$replace_url.'" size="30" required/></input></p>';
    
    return $fields;
  }
  add_filter('comment_form_default_fields','placeholder_author_email_url_form_fields');

?>