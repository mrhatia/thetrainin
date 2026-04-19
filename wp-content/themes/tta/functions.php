<?php
/**
 * TTA functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TTA
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'tta_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tta_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on TTA, use a find and replace
		 * to change 'tta' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tta', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'tta' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'tta_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'tta_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tta_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tta_content_width', 640 );
}
add_action( 'after_setup_theme', 'tta_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tta_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'tta' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tta' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'tta_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tta_scripts() {
	wp_enqueue_style( 'tta-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'tta-style', 'rtl', 'replace' );
	// wp_enqueue_style('tta-acf-style', get_template_directory_uri().'/css/style.css', array(), time());
	wp_enqueue_style('tta-home-style', get_template_directory_uri().'/css/new-homepage.css', array(), time());
	wp_enqueue_style('tta-strategy-style', get_template_directory_uri().'/css/strategy-section.css', array(), time());
	wp_enqueue_style('tta-faq-style', get_template_directory_uri().'/css/new-faqs.css', array(), time());
	wp_enqueue_style('tta-talent-hero-style', get_template_directory_uri().'/css/talent-hero.css', array(), time());
	wp_enqueue_style('tta-contact-style', get_template_directory_uri().'/css/new-contact-page.css', array(), time());
	wp_enqueue_style('tta-custom-style', get_template_directory_uri().'/css/custom.css?ref=2.3.0', array(), '3.0.9');
	wp_enqueue_style('tta-talent-style', get_template_directory_uri().'/css/talent.css?ref=1.0.1', array(), '1.0.1');
	// wp_enqueue_style('tta-slick-theme-style', get_template_directory_uri().'/css/new-homepage.css', array(), time());

	// wp_enqueue_script( 'jquery');
    // wp_enqueue_script( 'tta-slick-slider', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'tta-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'tta-home-slider', get_template_directory_uri() . '/js/home-slider.js', array('jquery'), time(), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tta_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
*SVG Cod
**/
function tta_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'tta_mime_types');

/**
 * CPT Programm.
**/
require get_template_directory() . '/inc/custom-post-type.php';

/**
 * Menu.
**/
require get_template_directory() . '/inc/mega_menu.php';

/**
 * filter post.
**/
require get_template_directory() . '/inc/flt-fun.php';

/**
 * filter post.
**/
require get_template_directory() . '/inc/team/team.php';

/**
 * filter post.
**/
require get_template_directory() . '/inc/search-flt.php';



/**
 * Image Crop
**/
if ( function_exists( 'add_image_size' ) ) {
 add_image_size( 'post-thumb-home', 250, 250, true ); //(cropped)
 add_image_size( 'post-blog-card', 205, 205, true );
 add_image_size( 'workshop-thumb', 387, 299, true );
 add_image_size( 'resource-thumb', 285, 295, true );
 add_image_size( 'blog-list', 355, 236, true );
 add_image_size( 'blog-single', 936, 622, true );
 add_image_size( 'team-list', 175, 175, true );
 add_image_size( 'team-mid', 368, 554, true );
}
/**
 * ACF Setting
**/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_sub_page(array(
        'page_title'   => 'Casestudy Settings',
        'menu_title'    => 'Casestudy Settings',
        'menu_slug'    => 'casestudy_settings',
        'capability'    => 'edit_posts',
        'parent_slug'  => 'edit.php?post_type=casestudy',
    ));
	
		acf_add_options_sub_page(array(
        'page_title'   => 'Training Topics Settings',
        'menu_title'    => 'Training Topics Settings',
        'menu_slug'    => 'training-topics_settings',
        'capability'    => 'edit_posts',
        'parent_slug'  => 'edit.php?post_type=training-topics',
    ));
	acf_add_options_sub_page(array(
        'page_title'   => 'Blog Settings',
        'menu_title'    => 'Blog Settings',
        'menu_slug'    => 'blogpost_settings',
        'capability'    => 'edit_posts',
        'parent_slug'  => 'edit.php',
    ));
	acf_add_options_sub_page(array(
        'page_title'   => 'Podcast Settings',
        'menu_title'    => 'Podcast Settings',
        'menu_slug'    => 'podcast_settings',
        'capability'    => 'edit_posts',
        'parent_slug'  => 'edit.php?post_type=podcast',
    ));
	
	 

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Mega Menu Settings',
		'menu_title'	=> 'Mega Menu Settings',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

 
 add_action('admin_menu', 'add_tutorial_cpt_submenu_example');

//admin_menu callback function

function add_tutorial_cpt_submenu_example(){

     add_submenu_page(
                     'edit.php?post_type=podcast', //$parent_slug
                     'Import data',  //$page_title
                     'Import data',        //$menu_title
                     'manage_options',           //$capability
                     'podcast_import_data',//$menu_slug
                     'fun_import_data'//$function
     );

}

 function fun_import_data(){
	 if (isset($_POST['submit'])) {
	 
		
		
		// Initiate curl session in a variable (resource)
		$curl_handle = curl_init();

		// $url = "https://www.buzzsprout.com/api/1788200/episodes.json?api_token=1536393a49b0c589988b914b81069288";
		$url = "https://www.buzzsprout.com/api/1991656/episodes.json?api_token=1a552b8c0b86b7e7732dcb4907bfd2a5";

		// Set the curl URL option
		curl_setopt($curl_handle, CURLOPT_URL, $url);

		// This option will return data as a string instead of direct output
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

		// Execute curl & store data in a variable
		$curl_data = curl_exec($curl_handle);

		curl_close($curl_handle);

		// Decode JSON into PHP array
		$response_data = json_decode($curl_data);

		 
	 
		// Traverse array and print employee data
		foreach ($response_data as $data_val) {
		 
			 $post_title = $data_val->title;
				if (!post_exists($post_title)) { // Determine if a post exists based on title, content, and date
				echo $post_title;
				echo '<br>';
				
				
				 
				$postdate = date("Y-m-d H:i:s", strtotime($data_val->published_at)); ;
					$post_id = wp_insert_post(array(
						'post_status' => 'publish',
						'post_type' => 'podcast',
						'post_title' => $post_title,
						'post_content' => $data_val->description,
						'post_date'     =>   $postdate,
							));
							
							update_post_meta ( $post_id, 'episodes_id', $data_val->id );
							update_post_meta ( $post_id, 'episodes_url', 'https://www.buzzsprout.com/1991656/episodes/'.$data_val->id );
							update_post_meta ( $post_id, 'audio_url', $data_val->audio_url );
							update_post_meta ( $post_id, 'artwork_url', $data_val->artwork_url );
							
							
							// Add Featured Image to Post
							$image_url        = $data_val->artwork_url; // Define the image URL here
							$image_name       = $data_val->id.'.jpg';
							$upload_dir       = wp_upload_dir(); // Set upload folder
							$image_data       = file_get_contents($image_url); // Get image data
							$unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
							$filename         = basename( $unique_file_name ); // Create image file name

							// Check folder permission and define file location
							if( wp_mkdir_p( $upload_dir['path'] ) ) {
								$file = $upload_dir['path'] . '/' . $filename;
							} else {
								$file = $upload_dir['basedir'] . '/' . $filename;
							}

							// Create the image  file on the server
							file_put_contents( $file, $image_data );

							// Check image file type
							$wp_filetype = wp_check_filetype( $filename, null );

							// Set attachment data
							$attachment = array(
								'post_mime_type' => $wp_filetype['type'],
								'post_title'     => sanitize_file_name( $filename ),
								'post_content'   => '',
								'post_status'    => 'inherit'
							);

							// Create the attachment
							$attach_id = wp_insert_attachment( $attachment, $file, $post_id );

							// Include image.php
							require_once(ABSPATH . 'wp-admin/includes/image.php');

							// Define attachment metadata
							$attach_data = wp_generate_attachment_metadata( $attach_id, $file );

							// Assign metadata to attachment
							wp_update_attachment_metadata( $attach_id, $attach_data );

							// And finally assign featured image to post
							set_post_thumbnail( $post_id, $attach_id );
							
							
				} 
				
		
				
		} 

	}
	 ?>


<h1 class="wp-heading-inline">Import data</h1>

<form action="" method="post">
    <input type="submit" name="submit" value="Import">
</form>
<?php
	 
	  
 }

function display_read_time() {
	global $post;
    $content = get_post_field( 'post_content', $post->ID );
    $count_words = str_word_count( strip_tags( $content ) );
	
    $read_time = ceil($count_words / 250);
	
	$prefix = '<span class="rt-prefix">🕑 </span>';
    
	 if ($read_time == 1) { $suffix = '<span class="rt-suffix"> minute read</span>';  }
	 else { $suffix = '<span class="rt-suffix"> minutes read</span>';  }
	
    $read_time_output = $prefix . $read_time . $suffix;

    return $read_time_output;
}


/*ACF oembed get preview image ###START###*/
function get_video_thumbnail_uri( $video_uri ) {
	
		$thumbnail_uri = '';
		
	
		
		// determine the type of video and the video id
		$video = parse_video_uri( $video_uri );
		
		
		
		// get youtube thumbnail
		if ( $video['type'] == 'youtube' )
			$thumbnail_uri = 'http://img.youtube.com/vi/' . $video['id'] . '/hqdefault.jpg';
		
		// get vimeo thumbnail
		if( $video['type'] == 'vimeo' )
			$thumbnail_uri = get_vimeo_thumbnail_uri( $video['id'] );
		// get wistia thumbnail
		if( $video['type'] == 'wistia' )
			$thumbnail_uri = get_wistia_thumbnail_uri( $video_uri );
		// get default/placeholder thumbnail
		if( empty( $thumbnail_uri ) || is_wp_error( $thumbnail_uri ) )
			$thumbnail_uri = ''; 
		
		//return thumbnail uri
		return $thumbnail_uri;
		
	}
	
	
	/**
	 * Parse the video uri/url to determine the video type/source and the video id
	 */
	function parse_video_uri( $url ) {
		
		// Parse the url 
		$parse = parse_url( $url );
		
		// Set blank variables
		$video_type = '';
		$video_id = '';
		
		// Url is http://youtu.be/xxxx
		if ( $parse['host'] == 'youtu.be' ) {
		
			$video_type = 'youtube';
			
			$video_id = ltrim( $parse['path'],'/' );	
			
		}
		
		// Url is http://www.youtube.com/watch?v=xxxx 
		// or http://www.youtube.com/watch?feature=player_embedded&v=xxx
		// or http://www.youtube.com/embed/xxxx
		if ( ( $parse['host'] == 'youtube.com' ) || ( $parse['host'] == 'www.youtube.com' ) ) {
		
			$video_type = 'youtube';
			
			parse_str( $parse['query'] );
			
			$video_id = $v;	
			
			if ( !empty( $feature ) )
				$video_id = end( explode( 'v=', $parse['query'] ) );
				
			if ( strpos( $parse['path'], 'embed' ) == 1 )
				$video_id = end( explode( '/', $parse['path'] ) );
			
		}
		
		// Url is http://www.vimeo.com
		if ( ( $parse['host'] == 'vimeo.com' ) || ( $parse['host'] == 'www.vimeo.com' ) ) {
		
			$video_type = 'vimeo';
			
			$video_id = ltrim( $parse['path'],'/' );	
						
		}
		$host_names = explode(".", $parse['host'] );
		$rebuild = ( ! empty( $host_names[1] ) ? $host_names[1] : '') . '.' . ( ! empty($host_names[2] ) ? $host_names[2] : '');
		// Url is an oembed url wistia.com
		if ( ( $rebuild == 'wistia.com' ) || ( $rebuild == 'wi.st.com' ) ) {
		
			$video_type = 'wistia';
				
			if ( strpos( $parse['path'], 'medias' ) == 1 )
					$video_id = end( explode( '/', $parse['path'] ) );
		
		}
		
		// If recognised type return video array
		if ( !empty( $video_type ) ) {
		
			$video_array = array(
				'type' => $video_type,
				'id' => $video_id
			);
		
			return $video_array;
			
		} else {
		
			return false;
			
		}
		
	}
	
	
	 /* Takes a Vimeo video/clip ID and calls the Vimeo API v2 to get the large thumbnail URL.
	 */
	function get_vimeo_thumbnail_uri( $clip_id ) {
		$vimeo_api_uri = 'http://vimeo.com/api/v2/video/' . $clip_id . '.php';
		$vimeo_response = wp_remote_get( $vimeo_api_uri );
		if( is_wp_error( $vimeo_response ) ) {
			return $vimeo_response;
		} else {
			$vimeo_response = unserialize( $vimeo_response['body'] );
			return $vimeo_response[0]['thumbnail_large'];
		}
		
	}
	/**
	 * Takes a wistia oembed url and gets the video thumbnail url.
	 */
	function get_wistia_thumbnail_uri( $video_uri ) {
		if ( empty($video_uri) )
			return false;
		$wistia_api_uri = 'http://fast.wistia.com/oembed?url=' . $video_uri;
		$wistia_response = wp_remote_get( $wistia_api_uri );
		if( is_wp_error( $wistia_response ) ) {
			return $wistia_response;
		} else {
			$wistia_response = json_decode( $wistia_response['body'], true );
			return $wistia_response['thumbnail_url'];
		}
		
	}

add_action( 'init', 'tta_add_page_cats' );
function tta_add_page_cats(){
    register_taxonomy_for_object_type('post_tag', 'page');

}


function search_casestudy_ajax_handler() {

    $keyword = isset($_POST['keyword']) ? sanitize_text_field($_POST['keyword']) : '';
    $topics  = isset($_POST['topics']) ? array_map('sanitize_text_field', (array) $_POST['topics']) : array();
    $types   = isset($_POST['types']) ? array_map('sanitize_text_field', (array) $_POST['types']) : array();

    $tax_query = array('relation' => 'AND');

    // Custom taxonomy: topics
    if (!empty($topics)) {
        $tax_query[] = array(
            'taxonomy' => 'casestudy-services', // change taxonomy name if needed
            'field'    => 'slug',
            'terms'    => $topics,
            'operator' => 'IN',
        );
    }

    // Custom taxonomy: types
    if (!empty($types)) {
        $tax_query[] = array(
            'taxonomy' => 'casestudy-industries', // change taxonomy name if needed
            'field'    => 'slug',
            'terms'    => $types,
            'operator' => 'IN',
        );
    }

    $args = array(
        'post_type'      => 'casestudy', // change post type if needed
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        's'              => $keyword,
    );

    if (count($tax_query) > 1) {
        $args['tax_query'] = $tax_query;
    }
  
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        ob_start();

        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="<?php echo $clase_lyout; ?> studyitem">
							<div class="story-block award-win">
							 <?php
								$disp_img_box ='';
								if ( has_post_thumbnail()) {
									$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
									 $disp_img_box = $large_image_url[0];
								}else{ 
									$disp_img_box = get_template_directory_uri().'/images/akami-logo 1.png';
									} 
								  ?>
								 
								<div class="s-img">
									<img src="<?php echo $disp_img_box; ?>" alt="logo" class="img-fluid">
									 <a target="_blank" href="<?php the_permalink(); ?>" class="btn btn-border-blue">Learn More <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.999442 1.00002L5.03516 5.70835L0.999442 10.4167" stroke="url(#paint0_linear_5093_620)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<defs>
<linearGradient id="paint0_linear_5093_620" x1="3.0173" y1="1.00002" x2="3.0173" y2="10.4167" gradientUnits="userSpaceOnUse">
<stop stop-color="#3EB3E3"/>
<stop offset="1" stop-color="#3BE2A8"/>
</linearGradient>
</defs>
</svg>
</a>
								</div>

							 <?php    if (have_rows('casestudy_single_content_layout', $post->ID)): 
            
             while (have_rows('casestudy_single_content_layout', $post->ID)): the_row();  if (get_row_layout() == 'casestudy_single_award_block'): ?>

                    <?php echo '<div class="titlebox">';
                    // Access sub fields of this block
                    $title = get_sub_field('single_award_title');
                    $description = get_sub_field('single_award_content');
                    echo '<h4>' . esc_html($description) . '</h4>'; 
                    echo '<h3>' . esc_html($title) . '</h3>';
                    echo "</div>";
                    ?>

                <?php endif; endwhile; endif;?>


							<div class="detail">
									<!--<div class="match" data-mh="story-block-text"><?php the_excerpt(); ?></div>-->
									
									
							<?php if ( get_field( 'case_study_award_winning' ) == 1 ) {
								if ( have_rows( 'case_study_award_winning_detail' ) ) : ?>
								<?php while ( have_rows( 'case_study_award_winning_detail' ) ) : the_row(); ?>
									<div class="story-award" class="match" data-mh="story-block-ss">
                                        <div class="left">
                                            <p><?php the_sub_field( 'casestudy_award_winning_text' ); ?></p>
                                        </div>
										<?php $casestudy_award_winning_logo = get_sub_field( 'casestudy_award_winning_logo' ); ?>
										<?php if ( $casestudy_award_winning_logo ) { ?>
										<div class="right">
                                      	<img src="<?php echo $casestudy_award_winning_logo['url']; ?>" alt="<?php echo $casestudy_award_winning_logo['alt']; ?>" class="img-fluid" />
                                        </div>
										<?php } ?>
									  </div>
									  	<?php endwhile; ?>
								<?php endif; } ?>
								</div>
							</div>
						</div>

            <?php
        }

        wp_reset_postdata();
        echo ob_get_clean();
    } else {
        echo '<p>No case studies found.</p>';
    }

    wp_die();
}

add_action('wp_ajax_search_casestudy', 'search_casestudy_ajax_handler');
add_action('wp_ajax_nopriv_search_casestudy', 'search_casestudy_ajax_handler');
function talent_list(){
ob_start();
?>
<div class="talentsgrid">
<div class="talent-card">
  <div class="talent-left">
    <div class="talent-image-wrap">
      <img src="<?php echo get_bloginfo('template_url');?>/images/talent2.png" alt="Ava T" class="talent-image">
      <div class="qualified-badge">
       <img src="<?php echo get_bloginfo('template_url');?>/images/Certified Badge.png" alt="Ava T" class="talent-image">
      </div>
    </div>
   <div class="downlink">
    <a href="#" class=" ">
      View Profile
    <svg width="30" height="35" viewBox="0 0 30 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.25 8.75L18.75 17.5L11.25 26.25" stroke="white" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
    </a>
								</div>
  </div>

  <div class="talent-right">
    <h2>Ava T</h2>
    <h3>Learning Strategist</h3>
    <h4>Certified Expert in Learning Strategy</h4>

    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in...
    </p>

    <div class="worked-with">
      <span class="worked-label">Previously worked with:</span>

      <div class="logos">
        <span class="logo tta-logo">tta</span>
        <span class="logo jetblue">jetBlue</span>
        <span class="logo volvo">VOLVO</span>
        <span class="logo accenture">accenture</span>
      </div>
    </div>

    <div class="skills">
      <span>Learning Strategist</span>
      <span>Instructional Skills</span>
      <span>Strategic Planning</span>
      <span>Data Analysis</span>
      <span>Strategic Planning</span>
      <span>Data Analysis</span>
      <span>Instructional Skills</span>
      <span>+ 8 More</span>
    </div>
  </div>
</div>
<div class="talent-card">
  <div class="talent-left">
    <div class="talent-image-wrap">
      <img src="<?php echo get_bloginfo('template_url');?>/images/talent1.png" alt="Ava T" class="talent-image">
      <div class="qualified-badge">
       <img src="<?php echo get_bloginfo('template_url');?>/images/Qualified Badge.png" alt="Ava T" class="talent-image">
      </div>
    </div>

     <div class="downlink">
    <a href="#" class=" ">
      View Profile
    <svg width="30" height="35" viewBox="0 0 30 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.25 8.75L18.75 17.5L11.25 26.25" stroke="white" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
    </a>
								</div>
  </div>

  <div class="talent-right">
    <h2>Ava T</h2>
    <h3>Learning Strategist</h3>
    <h4>Certified Expert in Learning Strategy</h4>

    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in...
    </p>

    <div class="worked-with">
      <span class="worked-label">Previously worked with:</span>

      <div class="logos">
        <span class="logo tta-logo">tta</span>
        <span class="logo jetblue">jetBlue</span>
        <span class="logo volvo">VOLVO</span>
        <span class="logo accenture">accenture</span>
      </div>
    </div>

    <div class="skills">
      <span>Learning Strategist</span>
      <span>Instructional Skills</span>
      <span>Strategic Planning</span>
      <span>Data Analysis</span>
      <span>Strategic Planning</span>
      <span>Data Analysis</span>
      <span>Instructional Skills</span>
      <span>+ 8 More</span>
    </div>
  </div>
</div>
</div>
<?php 
 return ob_get_clean();
}
add_shortcode('talentlist','talent_list');
?>