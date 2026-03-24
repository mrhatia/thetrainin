<?php
  

function str_search(){ 
ob_clean();
 
 
// WP_Query arguments
$args = array(
	'post_type'              => array( 'page','casestudy','podcast','post','resource','event','client-event','team'),
	'post_status'            => array( 'Publish' ),
	'posts_per_page'         => '3',
 	// 's' => get_query_var('s'),
 
);

if($_REQUEST['str']!=""){
	$args['s']= $_REQUEST['str'];
}
 
$query = new WP_Query( $args );

 $trecord= $query->post_count.'<br>';
 $tpage= $query->max_num_pages;
// The Loop
if ( $query->have_posts() ) {
 
	while ( $query->have_posts() ) {
		$query->the_post();
	
 $disp_img_box ='';
	if ( has_post_thumbnail()) {
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'resource-thumb'); 
		$disp_img_box = $large_image_url[0];
	}else{ 
		$disp_img_box = get_template_directory_uri().'/images/re1.jpg';
		}  
		
		$pt=get_post_type(get_the_ID());
	 
		?>
 

<div class="search-result-list">
				<a href="<?php the_permalink(); ?>" class="overlay_link"></a>
				<?php if(!empty($disp_img_box)){ ?>
				<div class="search-result_image">
					<img src="<?php echo $disp_img_box; ?>" alt="">
				</div>
				<?php } ?>
				<div class="search-result_text">
					<h4><?php the_title(); ?></h4>
					<span><?php echo $pt;?></span>
				</div>
			</div>
<?php

}
wp_reset_query();	
}

 

wp_die(); 
 }
 // creating Ajax call for WordPress
add_action( 'wp_ajax_nopriv_str_search', 'str_search' );
add_action( 'wp_ajax_str_search', 'str_search' );



function searchfilter($query) {
if ($query->is_main_query() && $query->is_search()  && ! is_admin() ) {

        // Check we're on an archive page.
        
  $postarray=array();
  if(!empty($_REQUEST['category'])){
   $postarray=$_REQUEST['category'];
   
	
	$query->set('post_type',$postarray);
	
  }else{
	 $query->set('post_type',array('page','casestudy','podcast','post','resource','event','client-event','team'));
	

	
  }
	
}
   
return $query;
}

add_filter('pre_get_posts','searchfilter');

// Filter posts older than today
function rc_filter_where( $where = '' ) {

    $today = date( 'Y-m-d' );
    $where .= " AND post_date >= '$today'";
    
    return $where;
}
// Make the search to index custom
/**
 * Extend WordPress search to include custom fields
 * http://adambalee.com
 *
 * Join posts and postmeta tables
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join( $join ) {
    global $wpdb;
    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }
    return $join;
}
//add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;
    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }
    return $where;
}
//add_filter( 'posts_where', 'cf_search_where' );

/**
 * Prevent duplicates
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;
    if ( is_search() ) {
        return "DISTINCT";
    }
    return $where;
}
//add_filter( 'posts_distinct', 'cf_search_distinct' );