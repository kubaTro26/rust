<?php

function rust_scripts()
{
  wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
  wp_enqueue_style('rust_style', get_stylesheet_uri());
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', false, null);
}

add_action('wp_enqueue_scripts', 'rust_scripts');

add_theme_support('custom-logo', array(
  'height'      => 35,
  'width'       => 273,
  'flex-height' => false,
  'flex-width'  => true,
));

function register_navwalker()
{
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

function prefix_modify_nav_menu_args($args)
{
  return array_merge($args, array(
    'walker' => new WP_Bootstrap_Navwalker(),
  ));
}
add_filter('wp_nav_menu_args', 'prefix_modify_nav_menu_args');

add_filter('nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3);
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute($atts, $item, $args)
{
  if (is_a($args->walker, 'WP_Bootstrap_Navwalker')) {
    if (array_key_exists('data-toggle', $atts)) {
      unset($atts['data-toggle']);
      $atts['data-bs-toggle'] = 'dropdown';
    }
  }
  return $atts;
}

function slug_provide_walker_instance($args)
{
  if (isset($args['walker']) && is_string($args['walker']) && class_exists($args['walker'])) {
    $args['walker'] = new $args['walker'];
  }
  return $args;
}
add_filter('wp_nav_menu_args', 'slug_provide_walker_instance', 1001);


register_nav_menus(array(
  'primary' => __('Primary', 'main-menu'),
  'footer' => __('Secondary', 'footer-menu'),
  'footer2' => __('Secondary2', 'footer-menu-2'),
  'footer3' => __('Secondary3', 'footer-menu-3')
));

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{

  // Check function exists.
  if (function_exists('acf_add_options_page')) {

    // Register options page.
    $option_page = acf_add_options_page(array(
      'page_title'    => __('Footer'),
      'menu_title'    => __('Footer'),
      'menu_slug'     => 'footer',
      'capability'    => 'edit_posts',
      'redirect'      => false
    ));
  }
}
function cptui_register_my_cpts() {

	/**
	 * Post Type: Realizacje.
	 */

	$labels = [
		"name" => esc_html__( "Realizacje", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "realizacje", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Realizacje", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "realizacje", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 3,
		"taxonomies" => [ "category" ],
		"show_in_graphql" => false,
	];

	register_post_type( "realizacje", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


