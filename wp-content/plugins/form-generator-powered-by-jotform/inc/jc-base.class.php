<?php
/**
 * 
 * The plugin base class - the root of all WP goods!
 * 
 * @author nofearinc
 *
 */
class JC_Plugin_Base {
	
	public $jt;
	
	/**
	 * 
	 * Assign everything as a call from within the constructor
	 */
	function __construct() {
		// add script and style calls the WP way 
		// it's a bit confusing as styles are called with a scripts hook
		// @blamenacin - http://make.wordpress.org/core/2011/12/12/use-wp_enqueue_scripts-not-wp_print_styles-to-enqueue-scripts-and-styles-for-the-frontend/
		add_action( 'wp_enqueue_scripts', array( $this, 'jc_add_JS' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'jc_add_CSS' ) );
		
		// add scripts and styles only available in admin
		add_action( 'admin_enqueue_scripts', array( $this, 'jc_add_admin_JS' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'jc_add_admin_CSS' ) );
		
		// register admin pages for the plugin
		add_action( 'admin_menu', array( $this, 'jc_admin_pages_callback' ) );
		
		// register meta boxes for Pages (could be replicated for posts and custom post types)
		//add_action( 'add_meta_boxes', array( $this, 'jc_meta_boxes_callback' ) );
		
		// Register custom post types and taxonomies
		//add_action( 'init', array( $this, 'jc_custom_post_types_callback' ), 5 );
		//add_action( 'init', array( $this, 'jc_custom_taxonomies_callback' ), 6 );
		
		// Register activation and deactivation hooks
		register_activation_hook( __FILE__, 'jc_on_activate_callback' );
		register_deactivation_hook( __FILE__, 'jc_on_deactivate_callback' );
		
		// Translation-ready
		add_action( 'plugins_loaded', array( $this, 'jc_add_textdomain' ) );
		
		// Add earlier execution as it needs to occur before admin page display
		add_action( 'admin_init', array( $this, 'jc_register_settings' ), 5 );
		
		// Add a sample shortcode
		add_action( 'init', array( $this, 'jc_sample_shortcode' ) );
		
		// Add a sample widget
		//add_action( 'widgets_init', array( $this, 'jc_sample_widget' ) );
		
		/*
		 * TODO:
		 * 		AJAX calls
		 * 		HTTP request
		 * 		template_redirect
		 */
		
		// Add actions for storing value and fetching URL
		// use the wp_ajax_nopriv_ hook for non-logged users (handle guest actions)
 		//add_action( 'wp_ajax_store_ajax_value', array( $this, 'store_ajax_value' ) );
 		//add_action( 'wp_ajax_fetch_ajax_url_http', array( $this, 'fetch_ajax_url_http' ) );
		
		// TODO: add some filters so that this may not be edited at all but hooked instead
	
		add_shortcode( 'jotform', array($this,'jotform_init_func') );
 		
	}	
	
	
	function jotform_init_func( $atts ){
	//this function handles the output for both the widget and the shortcode

	//extract elements out of array & set defaults
	extract( shortcode_atts( array(
		'id' => '-1'
	), $atts ) );

	if($id==-1){
		return "<p style='color: red;'>JotForm Integration Error - missing form ID.</p>";
	}

	//get plugin options
	$options = get_option('jotform_options');

	//create query string
	$queryString = "";
	if(!$options['cache_form']){
		$queryString = rand();
	}

	//print script
	return "<script type='text/javascript' src='http://form.jotform.us/jsform/".$id."?".$queryString."'></script>";
}

	/**
	 * 
	 * Adding JavaScript scripts
	 * 
	 * Loading existing scripts from wp-includes or adding custom ones
	 * 
	 */
	function jc_add_JS() {
		wp_enqueue_script( 'jquery' );
		// load custom JSes and put them in footer
		wp_register_script( 'jc-script', JC_URL. '/js/jc-script.js' , array('jquery'), '1.0', true );
		wp_enqueue_script( 'jc-script' );
	}
	
	
	/**
	 *
	 * Adding JavaScript scripts for the admin pages only
	 *
	 * Loading existing scripts from wp-includes or adding custom ones
	 *
	 */
	function jc_add_admin_JS() {
		wp_enqueue_script( 'jquery' );
		// wp_enqueue_script( 'jquery.cookie.min', JC_URL.'/js/jquery.cookie.min.js' );
		wp_enqueue_script( 'jquery.cookie.min', '//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.1/jquery.cookie.min.js' );
		// wp_enqueue_script( 'JotForm.js', JC_URL.'/js/JotForm.js');
		wp_enqueue_script( 'JotForm', '//js.jotform.com/JotForm.js');

		// wp_enqueue_script( 'JotFormAnywhere', JC_URL.'/js/JotformAnywhere.js' );
		wp_enqueue_script( 'JotFormAnywhere', '//js.jotform.com/JotFormAnywhere.js' );
		
		wp_register_script( 'jc-script-admin', JC_URL.'/js/jc-script-admin.js'  );
		wp_enqueue_script( 'jc-script-admin' );

 
		
	}
	
	/**
	 * 
	 * Add CSS styles
	 * 
	 */
	function jc_add_CSS() {
		wp_register_style( 'jc-style', JC_URL.'/css/jc-style.css', array(), '1.0', 'screen' );
		wp_enqueue_style( 'jc-style' );
	}
	
	/**
	 *
	 * Add admin CSS styles - available only on admin
	 *
	 */
	function jc_add_admin_CSS() {
		wp_register_style( 'jc-style-admin', JC_URL. '/css/jc-style-admin.css', array(), '1.0', 'screen' );
		wp_enqueue_style( 'jc-style-admin' );
	}
	
	/**
	 * 
	 * Callback for registering pages
	 * 
	 *  
	 */
	function jc_admin_pages_callback() {
		add_menu_page(__( "Forms ", 'dxbase' ), __( "Forms", 'dxbase' ), 'edit_themes', 'jc-base', array( $this, 'jc_plugin_base' ),JC_URL.'/jotform-icon.png', 58.15345342313445);
		add_submenu_page( 'jc-base', __( "Forms", 'dxbase' ), __( "All Forms", 'dxbase' ), 'edit_themes', 'jc-base', array( $this, 'jc_plugin_base' ) );
		add_submenu_page( 'jc-base', __( "Submissions", 'dxbase' ), __( "Submissions", 'dxbase' ), 'edit_themes', 'jc-submissions', array( $this, 'jc_submissions' ) );
		add_submenu_page( 'jc-base', __( "Settings", 'dxbase' ), __( "Settings", 'dxbase' ), 'edit_themes', 'jc-settings-page', array( $this, 'jc_plugin_subpage' ) );
		
	}
	
	/**
	 * 
	 * The content of the base page
	 * 
	 */
	function jc_plugin_base() {
		
		include_once( JC_PATH_INCLUDES . '/base-page-template.php' );
	}
	
	function jc_submissions(){
		include_once( JC_PATH_INCLUDES . '/submissions-template.php' );	
	}
	
	function jc_plugin_side_access_page() {
		include_once( JC_PATH_INCLUDES . '/remote-page-template.php' );
	}
	
	/**
	 * 
	 * The content of the subpage 
	 * 
	 * Use some default UI from WordPress guidelines echoed here (the sample above is with a template)
	 * 
	 * @see http://www.onextrapixel.com/2009/07/01/how-to-design-and-style-your-wordpress-plugin-admin-panel/
	 *
	 */
	function jc_plugin_subpage() {
		include_once( JC_PATH_INCLUDES . '/jc-settings-page.php' );
	}
	
	/**
	 * 
	 *  Adding right and bottom meta boxes to Pages
	 *   
	 */
	function jc_meta_boxes_callback() {
		// register side box
		add_meta_box( 
		        'jc_side_meta_box',
		        __( "DX Side Box", 'dxbase' ),
		        array( $this, 'jc_side_meta_box' ),
		        'page', // leave empty quotes as '' if you want it on all custom post add/edit screens
		        'side',
		        'high'
		    );
		    
		// register bottom box
		add_meta_box(
		    	'jc_bottom_meta_box',
		    	__( "DX Bottom Box", 'dxbase' ), 
		    	array( $this, 'jc_bottom_meta_box' ),
		    	'' // leave empty quotes as '' if you want it on all custom post add/edit screens or add a post type slug
		    );
	}
	
	/**
	 * 
	 * Init right side meta box here 
	 * @param post $post the post object of the given page 
	 * @param metabox $metabox metabox data
	 */
	function jc_side_meta_box($post, $metabox) {
		_e("<p>Side meta content here</p>", 'dxbase');
	}
	
	/**
	 * 
	 * Init bottom meta box here 
	 * @param post $post the post object of the given page 
	 * @param metabox $metabox metabox data
	 */
	function jc_bottom_meta_box($post, $metabox) {
		_e( "<p>Bottom meta content here</p>", 'dxbase' );
	}
	
	/**
	 * Register custom post types
     *
	 */
	function jc_custom_post_types_callback() {
		register_post_type( 'pluginbase', array(
			'labels' => array(
				'name' => __("Base Items", 'dxbase'),
				'singular_name' => __("Base Item", 'dxbase'),
				'add_new' => _x("Add New", 'pluginbase', 'dxbase' ),
				'add_new_item' => __("Add New Base Item", 'dxbase' ),
				'edit_item' => __("Edit Base Item", 'dxbase' ),
				'new_item' => __("New Base Item", 'dxbase' ),
				'view_item' => __("View Base Item", 'dxbase' ),
				'search_items' => __("Search Base Items", 'dxbase' ),
				'not_found' =>  __("No base items found", 'dxbase' ),
				'not_found_in_trash' => __("No base items found in Trash", 'dxbase' ),
			),
			'description' => __("Base Items for the demo", 'dxbase'),
			'public' => true,
			'publicly_queryable' => true,
			'query_var' => true,
			'rewrite' => true,
			'exclude_from_search' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 40, // probably have to change, many plugins use this
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'custom-fields',
				'page-attributes',
			),
			'taxonomies' => array( 'post_tag' )
		));	
	}
	
	
	/**
	 * Register custom taxonomies
     *
	 */
	function jc_custom_taxonomies_callback() {
		register_taxonomy( 'pluginbase_taxonomy', 'pluginbase', array(
			'hierarchical' => true,
			'labels' => array(
				'name' => _x( "Base Item Taxonomies", 'taxonomy general name', 'dxbase' ),
				'singular_name' => _x( "Base Item Taxonomy", 'taxonomy singular name', 'dxbase' ),
				'search_items' =>  __( "Search Taxonomies", 'dxbase' ),
				'popular_items' => __( "Popular Taxonomies", 'dxbase' ),
				'all_items' => __( "All Taxonomies", 'dxbase' ),
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => __( "Edit Base Item Taxonomy", 'dxbase' ), 
				'update_item' => __( "Update Base Item Taxonomy", 'dxbase' ),
				'add_new_item' => __( "Add New Base Item Taxonomy", 'dxbase' ),
				'new_item_name' => __( "New Base Item Taxonomy Name", 'dxbase' ),
				'separate_items_with_commas' => __( "Separate Base Item taxonomies with commas", 'dxbase' ),
				'add_or_remove_items' => __( "Add or remove Base Item taxonomy", 'dxbase' ),
				'choose_from_most_used' => __( "Choose from the most used Base Item taxonomies", 'dxbase' )
			),
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
		));
		
		register_taxonomy_for_object_type( 'pluginbase_taxonomy', 'pluginbase' );
	}
	
	/**
	 * Initialize the Settings class
	 * 
	 * Register a settings section with a field for a secure WordPress admin option creation.
	 * 
	 */
	function jc_register_settings() {
		require_once(JC_PATH_INCLUDES . '/jc-plugin-settings.class.php' );
		new JC_Plugin_Settings();
	}
	
	/**
	 * Register a sample shortcode to be used
	 * 
	 * First parameter is the shortcode name, would be used like: [dxsampcode]
	 * 
	 */
	function jc_sample_shortcode() {
		add_shortcode( 'dxsampcode', array( $this, 'jc_sample_shortcode_body' ) );
	}
	
	/**
	 * Returns the content of the sample shortcode, like [dxsamplcode]
	 * @param array $attr arguments passed to array, like [dxsamcode attr1="one" attr2="two"]
	 * @param string $content optional, could be used for a content to be wrapped, such as [dxsamcode]somecontnet[/dxsamcode]
	 */
	function jc_sample_shortcode_body( $attr, $content = null ) {
		/*
		 * Manage the attributes and the content as per your request and return the result
		 */
		return __( 'Sample Output', 'dxbase');
	}
	
	/**
	 * Hook for including a sample widget with options
	 */
	function jc_sample_widget() {
		include_once JC_PATH_INCLUDES . '/dx-sample-widget.class.php';
	}
	
	/**
	 * Add textdomain for plugin
	 */
	function jc_add_textdomain() {
		load_plugin_textdomain( 'dxbase', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
	}
	
	/**
	 * Callback for saving a simple AJAX option with no page reload
	 */
	function store_ajax_value() {
		if( isset( $_POST['data'] ) && isset( $_POST['data']['jc_option_from_ajax'] ) ) {
			update_option( 'jc_option_from_ajax' , $_POST['data']['jc_option_from_ajax'] );
		}	
		die();
	}
	
	/**
	 * Callback for getting a URL and fetching it's content in the admin page
	 */
	function fetch_ajax_url_http() {
		if( isset( $_POST['data'] ) && isset( $_POST['data']['jc_url_for_ajax'] ) ) {
			$ajax_url = $_POST['data']['jc_url_for_ajax'];
			
			$response = wp_remote_get( $ajax_url );
			
			if( is_wp_error( $response ) ) {
				echo json_encode( __( 'Invalid HTTP resource', 'dxbase' ) );
				die();
			}
			
			if( isset( $response['body'] ) ) {
				if( preg_match( '/<title>(.*)<\/title>/', $response['body'], $matches ) ) {
					echo json_encode( $matches[1] );
					die();
				}
			}
		}
		echo json_encode( __( 'No title found or site was not fetched properly', 'dxbase' ) );
		die();
	}
	
}


/**
 * Register activation hook
 *
 */
function jc_on_activate_callback() {
	// do something on activation
}

/**
 * Register deactivation hook
 *
 */
function jc_on_deactivate_callback() {
	// do something when deactivated
}