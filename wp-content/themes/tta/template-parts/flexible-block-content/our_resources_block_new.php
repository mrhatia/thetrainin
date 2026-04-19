<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_resources' ) ) : 
		while ( have_rows( 'block_settings_control_resources' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_resources' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'resources_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<?php $case_study_choose_layout=" ";
$case_study_random_num= rand(10,100); 

?>
	<?php $case_study_layout_type = get_sub_field( 'resources_layout_type' ); ?>
	<?php $case_study_slider_column = get_sub_field( 'resources_slider_column' ); ?>
	<section class="success-story casestudy_new id="<?php echo $gradient_color_banner_section_id; ?>">
		<div class="container">
		<div class="filters">	<div class="filter-wrapper">

  <div class="filter-top">
    <div class="dropdown" id="topicsDropdown">
      <span>Topics</span>
      <span class="arrow">▾</span>
    </div>

    <div class="dropdown" id="typesDropdown">
      <span>Types</span>
      <span class="arrow">▾</span>
    </div>

    <div class="search-box">
      <input type="text" placeholder="Search resources" name="keyword">
    </div>
	<button class="search_casestudy"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.5518 3.9531C8.72934 2.13065 5.77457 2.13065 3.95212 3.9531C2.12967 5.77554 2.12967 8.73031 3.95212 10.5528C5.77457 12.3752 8.72934 12.3752 10.5518 10.5528C12.3742 8.73031 12.3742 5.77554 10.5518 3.9531ZM3.00931 3.01029C5.35246 0.667143 9.15145 0.667143 11.4946 3.01029C13.6784 5.1941 13.8269 8.64248 11.9401 10.9983L14.323 13.3812L13.3802 14.324L10.9973 11.9411C8.6415 13.8279 5.19312 13.6794 3.00931 11.4956C0.666167 9.15242 0.666167 5.35343 3.00931 3.01029Z" fill="url(#paint0_linear_130406_1303)"/>
<defs>
<linearGradient id="paint0_linear_130406_1303" x1="7.78749" y1="1.25293" x2="7.78749" y2="14.324" gradientUnits="userSpaceOnUse">
<stop stop-color="#3EB3E3"/>
<stop offset="1" stop-color="#3BE2A8"/>
</linearGradient>
</defs>
</svg>
</button>

<div class="loading"><img src="<?php echo get_bloginfo('template_url');?>/images/loading.gif" alt="Loading"></div>
  </div>

  <!-- Dropdown Content -->
  <div class="dropdown-content" id="topicsContent">
	<div class="dropdown-content-inner">
      <?php  if(isset($_REQUEST['services'])){ $services = explode(",",$_REQUEST['services']);}
    $terms = get_terms([
        'taxonomy'   => 'resource-topic',
        'hide_empty' => false,
    ]);

    if (!empty($terms) && !is_wp_error($terms)) :
        foreach ($terms as $term) :
			if($services){
				if(in_array($term->slug,$services)){
					$class="active";
				}else{ $class="";}
			}
    ?>
        <span class="tag <?php echo $class;?>" data-slug="<?php echo esc_attr($term->slug); ?>">
            <?php echo esc_html($term->name); ?>
        </span>
    <?php
        endforeach;
    endif;
    ?>
	</div>
  </div>
  <!-- Dropdown Content -->
  <div class="dropdown-content" id="typesContent">
	<div class="dropdown-content-inner">
    <?php if(isset($_REQUEST['types'])){ $industries = explode(",",$_REQUEST['types']);}
    $terms = get_terms([
        'taxonomy'   => 'resource-types',
        'hide_empty' => false,
    ]);

    if (!empty($terms) && !is_wp_error($terms)) :
        foreach ($terms as $term) :
			if($industries){
				if(in_array($term->slug,$industries)){
					$class="active";
				}else{ $class="";}
			}
    ?>
        <span class="tag <?php echo $class;?>" data-slug="<?php echo esc_attr($term->slug); ?>">
            <?php echo esc_html($term->name); ?>
        </span>
    <?php
        endforeach;
    endif;
    ?>
	</div>
  </div>
</div></div>	
		<?php if(get_sub_field( 'resources_heading' )) { ?>
		
			
				
				<?php $heading = get_sub_field( 'resources_heading' ); ?>
			
	<?php } ?>
	<?php if(get_sub_field( 'resources_title' )) { ?>
		
		
				
				<?php $title= get_sub_field( 'resources_title' ); ?>
			
	<?php } ?>


	<?php if(isset($_REQUEST['search'])){
		
		?>
<div class="row justify-content-center resourcesgrid">
	<div class="section-title align-left <?php echo $class_fontstyle; ?>">
				
				<h2>Resutls</h2>
			</div>

		
         <div class="resourcesresults">
         <?php  



$keyword = isset($_REQUEST['keyword']) ? sanitize_text_field($_REQUEST['keyword']) : '';

$post_ids = array();

if (!empty($keyword)) {
    $results = $wpdb->get_results(
        $wpdb->prepare(
            "SELECT ID
             FROM {$wpdb->posts}
             WHERE post_type = %s
             AND post_status = %s
             AND post_title LIKE %s",
            'resource',
            'publish',
            '%' . $wpdb->esc_like($keyword) . '%'
        )
    );

    if (!empty($results)) {
        $post_ids = wp_list_pluck($results, 'ID');
    } else {
        $post_ids = array(0); // no keyword matches
    }
}



    $topics  = $_REQUEST['services'];
	
    $types   = $_REQUEST['industries'];
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $tax_query = array('relation' => 'AND');
if( $topics ){
	$topics=explode(",",$topics);
}

    // Custom taxonomy: topics
    if (!empty($topics)) {
        $tax_query[] = array(
            'taxonomy' => 'resource-topic', // change taxonomy name if needed
            'field'    => 'slug',
            'terms'    => $topics,
            'operator' => 'IN',
        );
    }

    // Custom taxonomy: types
    if (!empty($types)) {
        $tax_query[] = array(
            'taxonomy' => 'resource-types', // change taxonomy name if needed
            'field'    => 'slug',
            'terms'    => $types,
            'operator' => 'IN',
        );
    }

    $args = array(
        'post_type'      => 'resource', // change post type if needed
        'post_status'    => 'publish',
        'posts_per_page' => 12, // ✅ important
    'paged'          => $paged, // ✅ pagination
       
    );

    if (count($tax_query) > 1) {
        $args['tax_query'] = $tax_query;
    }
  if (!empty($keyword)) {
    $args['post__in'] = $post_ids;
    $args['orderby']  = 'post__in';
}

    $query = new WP_Query($args);

    if ($query->have_posts()) {
   

        while ($query->have_posts()) {
            $query->the_post();
            ?>
<div class="<?php echo $clase_lyout; ?> resourceitem">
							
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
									<a href="<?php the_permalink(); ?>"><img src="<?php echo $disp_img_box; ?>" alt="<?php echo get_the_title();?>" class="img-fluid"></a>
									
								</div>

						       


							<div class="detail">
								<?php  $terms = get_the_terms($post->ID, 'resource-topic');
							if($terms){?>
							<div class="cattag">  <?php foreach ($terms as $term) : ?>
                    <span><?php echo esc_html($term->name); ?></span>
                <?php endforeach; ?></div>
							<?php }?>
							<?php  $types = get_the_terms($post->ID, 'resource-types');
							if($types){?>
							<div class="cattag">  <?php foreach ($types as $type) : ?>
                    <span><?php echo esc_html($type->name); ?></span>
                <?php endforeach; ?></div>
							<?php }?>
								<div class="rtitle"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
									
									
						
								
							</div>
						</div>

<?php }      wp_reset_postdata();}?>
		

	</div>
</div>
<div class="paginaton">
<?php
$paged = isset($_GET['paged']) ? max(1, intval($_GET['paged'])) : 1;
$total_pages = $query->max_num_pages;

if ($total_pages > 1) {

    $base_url = home_url('/resources/');

    $query_args = array();

    if (isset($_GET['search']) && $_GET['search'] !== '') {
        $query_args['search'] = sanitize_text_field($_GET['search']);
    }

    if (isset($_GET['keyword'])) {
        $query_args['keyword'] = sanitize_text_field($_GET['keyword']);
    }

    if (isset($_GET['topics']) && $_GET['topics'] !== '') {
        $query_args['topics'] = sanitize_text_field($_GET['topics']);
    }

    if (isset($_GET['types']) && $_GET['types'] !== '') {
        $query_args['types'] = sanitize_text_field($_GET['types']);
    }

    $query_args['paged'] = '%#%';
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    echo paginate_links(array(
        'base'      => add_query_arg($query_args, $base_url),
        'format'    => '',
        'current'   => $paged,
        'total'     => $total_pages,
        'prev_text' => '<svg width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.03572 18.75L1.75 10.25L9.03572 1.75" stroke="#3EB3E3" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
',
        'next_text' => '<svg width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.74943 1.75L9.03516 10.25L1.74943 18.75" stroke="#3BE2A8" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
',
        'type'      => 'plain',
    ));
}
?>
								</div>
<?php }else{?>
		<div class="row justify-content-center  resourcesgrid" id="casestudydata">
			
		<?php $post_objects = get_sub_field( 'select_resources' ); ?>
			<?php if ( $post_objects ):?>

               <div class="resourceleft">
<div class="section-title align-left <?php echo $class_fontstyle; ?>">
				
				<h2><?php echo $heading; ?></h2>
			</div>
			

		


				<?php $c=0; foreach ( $post_objects as $post ): $c++; ?>
					<?php setup_postdata( $post ); ?>
                       <?php if($c==1){?>
					   <div class="featuredbox">
						
<div class="<?php echo $clase_lyout; ?> mainbox">
	                        
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
									<a href="<?php the_permalink(); ?>"><img src="<?php echo $disp_img_box; ?>" alt="<?php echo get_the_title();?>" class="img-fluid"></a>
									
							</div>	
							<?php  $terms = get_the_terms($post->ID, 'resource-topic');
							if($terms){?>
							<div class="cattag">  <?php foreach ($terms as $term) : ?>
                    <span><?php echo esc_html($term->name); ?></span>
                <?php endforeach; ?></div>
							<?php }?>
							<div class="pdetails">
								<div class="rtitle"><h3><a href="<?php the_permalink(); ?>"><?php echo get_the_title();?></a></h3></div>
								<div class="rdesc"><?php the_excerpt(); ?></div>
			                </div>	
						</div>
			           </div>
					   
                       <?php break;  } endforeach; endif;?>
					   </div> 
					   <?php if ( $post_objects ):?>  <div class="resourceright">
<div class="section-title align-left <?php echo $class_fontstyle; ?>">
				
				<h2><?php echo $title;?></h2>
			</div>
			         <div class="resourcesitems">
				<?php $c=0; foreach ( $post_objects as $post ): $c++; ?>
					   
					 <?php  if($c > 1){?> 	
						<div class="<?php echo $clase_lyout; ?> resourceitem">
							
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
									<a href="<?php the_permalink(); ?>"><img src="<?php echo $disp_img_box; ?>" alt="<?php echo get_the_title();?>" class="img-fluid"></a>
									
								</div>

						       


							<div class="detail newtest">
								<?php  $terms = get_the_terms($post->ID, 'resource-topic');
							if($terms){?>
							<div class="cattag">  <?php foreach ($terms as $term) : ?>
                    <span><?php echo esc_html($term->name); ?></span>
                <?php endforeach; ?></div>
							<?php }?>
							
							
								<div class="rtitle"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
									
									
						
								
							</div>
						</div>

                      <?php }?>

				<?php endforeach; ?></div>
				</div></div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div>
	<?php }?>
</section>




<style>
	.success-story.case-study-slider-section {
		padding: 0 0 120px;
	}
	.success-story .case-study-slider .col-lg-3  {
		padding: 0 12px 30px;
	}
	.success-story .case-study-slider .col-lg-4  {
		padding: 0 12px 30px;
	}
	.success-story .case-study-slider .col-lg-6  {
		padding: 0 12px 30px;
	}
	.success-story .case-study-slider .col-lg-12  {
		padding: 0 12px 30px;
	}
	.success-story .case-study-slider .story-block {
		padding: 52px 27px 40px 30px;
		max-width: 100%;
		margin: 0 auto;		
	}
	/* .success-story .case-study-slider .story-block.award-win {
		min-height:704px;
	} */
	.success-story .case-study-slider.case-study-slider-col-4 .story-block img {
		max-width: 150px;
		max-height: 150px;
	}
	.success-story .case-study-slider.case-study-slider-col-4 .story-block .s-img {
		margin-bottom: 40px;
	}	
	.success-story .story-award .right img {
		max-width: 100px !important;
		max-height: 100px !important;
		margin-left: 10px;
	}
	.success-story .slick-slider .slick-arrownp {
		position: relative;
		margin: 0 5px;
	}
	.success-story .slick-arrow {
		top: auto;
		bottom: -25px;
		font-size: 0;
		border: 0;
		margin: 10px 8px 0;		
	}
	.success-story .slick-slider .slick-arrow::before {
		content: "";
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		background: url(/wp-content/themes/tta/images/slider-small-arrow.svg) no-repeat center center / 14px;
	}
	.success-story .slick-slider .slick-prev {
		right: 60px;
	}
	.success-story .slick-slider .slick-next {
		order: 4;
		transform: rotate(180deg);
	}
	.success-story .slick-dots {
		left: 10px;
		z-index: 1;
		right: 0;
		bottom: auto;
	}
	.success-story .slick-track {
		display: flex !important;
	}
	.success-story .slick-slide {
		height: inherit !important;
	}
	
	@media (max-width: 1299px) {
		/* .success-story .case-study-slider .story-block.award-win {
			min-height:745px;
		} */
	}
	@media (max-width: 1199px) {
		.success-story.case-study-slider-section {
			padding: 0 0 100px;
		}
		/* .success-story .case-study-slider .story-block.award-win {
			min-height:704px;
		} */
	}
	@media (max-width: 980px) {
		/* .success-story .case-study-slider .story-block.award-win {
			min-height:595px;
		} */
	}
	@media (max-width: 767px) {
		/* .success-story .case-study-slider .story-block.award-win {
			min-height:670px;
		} */
	}
</style>

<script>
jQuery(document).ready(function($){

    $('.dropdown').on('click', function(e){
        e.stopPropagation();

        let target = $(this).attr('id') === 'topicsDropdown' 
            ? '#topicsContent' 
            : '#typesContent';

        // Close all first
        $('.dropdown-content').not(target).slideUp(200);
        $('.dropdown').not(this).removeClass('active');

        // Toggle current
        $(target).slideToggle(200);
        $(this).toggleClass('active');
    });

    // Close when clicking outside
    $(document).on('click', function(){
        $('.dropdown-content').slideUp(200);
        $('.dropdown').removeClass('active');
    });

    // Prevent closing when clicking inside
    $('.dropdown-content').on('click', function(e){
        e.stopPropagation();
    });

$('.tag').on('click', function(){
    $(this).toggleClass('active');
});


 $('.search_casestudy').on('click', function (e) {
        e.preventDefault();
       $('.loading').show()
        let topics = [];
        let types = [];

        // Get selected topics
        $('#topicsContent .tag.active').each(function () {
            topics.push($(this).data('slug')); // better to use slug
        });

        $('#typesContent .tag.active').each(function () {
            types.push($(this).data('slug')); // better to use slug
        });

        // Get keyword
        let keyword = $('input[name="keyword"]').val().trim();

        console.log('Topics:', topics);
        console.log('Types:', types);
        console.log('Keyword:', keyword);
var url = "https://thetrainin2dev.wpenginepowered.com/resources/?search=study&keyword="+keyword+"&services="+topics+"&industries="+types;
       window.location.href=url;
        // Example AJAX call
        $.ajax({
            url:  '<?php echo admin_url("admin-ajax.php"); ?>', // or your custom URL
            type: 'POST',
            data: {
                action: 'search_casestudy',
                topics: topics,
                types: types,
                keyword: keyword
            },
            success: function (response) {
                console.log(response);
                // update result HTML here
				$('#casestudydata').hide();
				 $('html, body').animate({
            scrollTop:  $('.section-title').offset().top
        }, 2000);
                $('.results_container').html(response);
				$('.loading').hide()
				
				
            }
        });

    });

});
	</script>