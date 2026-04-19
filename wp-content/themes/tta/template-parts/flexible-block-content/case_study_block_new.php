<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_case_study' ) ) : 
		while ( have_rows( 'block_settings_control_case_study' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_case_study' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'case_study_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<?php $case_study_choose_layout=" ";
$case_study_random_num= rand(10,100); 

?>
	<?php $case_study_layout_type = get_sub_field( 'case_study_layout_type' ); ?>
	<?php $case_study_slider_column = get_sub_field( 'case_study_slider_column' ); ?>
	<section class="success-story casestudy_new id="<?php echo $gradient_color_banner_section_id; ?>">
		<div class="container">
		<div class="filters">	<div class="filter-wrapper">

  <div class="filter-top">
    <div class="dropdown" id="topicsDropdown">
      <span>Industry</span>
      <span class="arrow">▾</span>
    </div>

    <div class="dropdown" id="typesDropdown">
      <span>Services</span>
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
    <?php if(isset($_REQUEST['types'])){ $types = explode(",",$_REQUEST['types']);}
    $terms = get_terms([
        'taxonomy'   => 'casestudy-industries',
        'hide_empty' => false,
    ]);

    if (!empty($terms) && !is_wp_error($terms)) :
        foreach ($terms as $term) :
			if($types){
				if(in_array($term->slug,$types)){
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
        <?php if(isset($_REQUEST['topics'])){ $topics = explode(",",$_REQUEST['topics']);}
    $terms = get_terms([
        'taxonomy'   => 'casestudy-services',
        'hide_empty' => false,
    ]);

    if (!empty($terms) && !is_wp_error($terms)) :
        foreach ($terms as $term) :
			if($topics){
				if(in_array($term->slug,$topics)){
					$class="active";
				}else{ $class="";}
			}
    ?>
        <span class="tag <?php echo $class;?> " data-slug="<?php echo esc_attr($term->slug); ?>">
            <?php echo esc_html($term->name); ?>
        </span>
    <?php
        endforeach;
    endif;
    ?>
	</div>
  </div>
</div></div>

<?php if(isset($_REQUEST['search'])){?>

		
			<div class="section-title align-left <?php echo $class_fontstyle; ?>">
				
				<h2>Results</h2>
			</div>

<?php }else{?>
		<?php if(get_sub_field( 'case_study_heading' )) { ?>
		
			<div class="section-title <?php echo $class_fontstyle; ?>">
				
				<h2><?php the_sub_field( 'case_study_heading' ); ?></h2>
			</div>
	<?php } ?>

	<?php if(get_sub_field( 'case_study_title' )) { ?>
		
			<div class="section-title align-left <?php echo $class_fontstyle; ?>">
				
				<h2><?php the_sub_field( 'case_study_title' ); ?></h2>
			</div>
	<?php } ?>

	<?php }?>
	<?php if($_REQUEST['search']!=""){?>	
<div class="row justify-content-center newcasestudies"><div class="results_container">
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
            'casestudy',
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



    $topics  = $_REQUEST['topics'];
	
    $types   = $_REQUEST['types'];
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $tax_query = array('relation' => 'AND');
if( $topics ){
	$topics=explode(",",$topics);
}

    // Custom taxonomy: topics
    if (!empty($types)) {
        $tax_query[] = array(
            'taxonomy' => 'casestudy-services', // change taxonomy name if needed
            'field'    => 'slug',
            'terms'    => $types,
            'operator' => 'IN',
        );
    }

    // Custom taxonomy: types
    if (!empty($topics)) {
        $tax_query[] = array(
            'taxonomy' => 'casestudy-industries', // change taxonomy name if needed
            'field'    => 'slug',
            'terms'    => $topics,
            'operator' => 'IN',
        );
    }

    $args = array(
        'post_type'      => 'casestudy', // change post type if needed
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
	?>

</div>

</div>
<div class="paginaton">
<?php
$paged = isset($_GET['paged']) ? max(1, intval($_GET['paged'])) : 1;
$total_pages = $query->max_num_pages;

if ($total_pages > 1) {

    $base_url = home_url('/case-studies-new/');

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
		<div class="row justify-content-center newcasestudies" id="casestudydata">
		<?php $post_objects = get_sub_field( 'select_case_study' ); ?>
			<?php if ( $post_objects ):?>
				<?php $c=0; foreach ( $post_objects as $post ): $c++; ?>
					<?php setup_postdata( $post ); ?>
                       <?php if($c==1){?>
					   <div class="featuredbox">
<div class="<?php echo $clase_lyout; ?> mainbox">
	                         <div class="casestudy_highlights">
								<?php $toptitle = get_field('top_title'); $top_sub_title = get_field('top_sub_title'); $top_text = get_field('top_text');?>
								<?php if($toptitle || $top_sub_title || $top_text){?>
								<div class="toppart">
                                 <?php if($toptitle){?><div class="toptitle"><h3><?php echo $toptitle;?></h3></div><?php }?>
								<?php if($top_sub_title){?><div class="topsubtitle"><h4><?php echo $top_sub_title;?></h4></div><?php }?>
								<?php if($top_text){?><div class="toptext"><?php echo $top_text;?></div><?php }?>
								</div>
								<?php }?>
                                
								<?php $summery_title= get_field('summery_title');  $summery_content= get_field('summery_content');?>
								<?php if($summery_title || $summery_content ){?>
                                  <div class="summery">
                                    <?php if($summery_title){?> <h4 class="summerytitle"><?php echo $summery_title;?></h4><?php }?>
									<?php if($summery_content){?> <div class="summerycontent"><?php echo $summery_content;?></div><?php }?>
								  </div>
								<?php }?>
 <a target="_blank" href="<?php the_permalink(); ?>" class="btn btn-border-blue">Learn More <svg width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 1L6 6.75L1 12.5" stroke="#132136" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</a>
			                 </div>
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
								</div>
								  <?php echo '<div class="titlebox">';
                    // Access sub fields of this block
                    $title = get_field('feature_title');
                    $description = get_field('feature_sub_title');
                    echo '<h4>' . esc_html($description) . '</h4>'; 
                    echo '<h3>' . esc_html($title) . '</h3>';
                    echo "</div>";
                    ?>
							<div class="detail">


									<div class="match" data-mh="story-block-text"><?php echo get_field('feature_description'); ?></div>
									
                           <div class="rowcontent">
							<div class="colleft">
									<?php   $title = get_field('content_first_title');
                    $description = get_field('content_first_content');
					if($title || $description){
					echo '<div class="titlebox">';
                    // Access sub fields of this block
                  
                    echo '<h4>' . esc_html($title) . '</h4>'; 
                    echo '<div class="description">' . $description. '</div>';
                    echo "</div>";
					}
                    ?>
					 <?php   $title1 = get_field('asset_title');
                    $description1 = get_field('asset_content');
					if($title1 || $description1){
					echo '<div class="titlebox assets">';
                    // Access sub fields of this block
                  
                    echo '<h4>' . esc_html($title1) . '</h4>'; 
                    echo '<div class="description">' . $description1. '</div>';
                    echo "</div>";
					}
                    ?>
					</div>
					<div class="colright">
                    <?php   $title2 = get_field('content_second_title');
                    $description2 = get_field('content_second_content');
					if($title2 || $description2){
					echo '<div class="titlebox">';
                    // Access sub fields of this block
                  
                    echo '<h4>' . esc_html($title2) . '</h4>'; 
                    echo '<div class="description">' . $description2. '</div>';
                    echo "</div>";
					}
                    ?>
					</div>
			</div>
							
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
			           </div>
					   <div class="rightsideposts ">
                       <?php }else{?>
						<div class="<?php echo $clase_lyout; ?>">
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

                      <?php }?>

				<?php endforeach; ?>
				</div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
		<?php if( get_sub_field('see_more_case_studies_link') && get_sub_field('more_button_text')){?>
		 <a href="<?php echo get_sub_field('see_more_case_studies_link');?>" class="morebtn"><?php echo get_sub_field('more_button_text');?></a>	
		 <?php }?>
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
		var url = "https://thetrainin2dev.wpenginepowered.com/case-studies-new/?search=study&keyword="+keyword+"&topics="+topics+"&types="+types;
       window.location.href=url;

	   /*
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
        });*/

    });

});
	</script>