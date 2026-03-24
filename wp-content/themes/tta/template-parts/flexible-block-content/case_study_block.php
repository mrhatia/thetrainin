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
$case_study_choose_layout= get_sub_field( 'case_study_choose_layout' ); 
if($case_study_choose_layout=="casestudyawardwinning") { ?> 
	<?php $case_study_layout_type = get_sub_field( 'case_study_layout_type' ); ?>
	<?php $case_study_slider_column = get_sub_field( 'case_study_slider_column' ); ?>
	<section class="success-story <?php if( $case_study_layout_type == 'slider' ) { ?>case-study-slider-section<?php } ?>" id="<?php echo $gradient_color_banner_section_id; ?>">
		<div class="container">
		<?php if(get_sub_field( 'case_study_heading' )) { ?>
			<div class="section-title <?php echo $class_fontstyle; ?>">
				<span><?php the_sub_field( 'case_study_heading' ); ?></span>
				<h2><?php the_sub_field( 'case_study_title' ); ?></h2>
			</div>
	<?php } ?>
<?php $select_case_study_layout= get_sub_field( 'select_case_study_layout' ); 
		if($select_case_study_layout==1){
			$clase_lyout= "col-sm-12 col-md-6 col-lg-6";
		}elseif($select_case_study_layout==2){
			$clase_lyout= "col-sm-12 col-md-6 col-lg-6";	
		}elseif($select_case_study_layout==3){
			$clase_lyout= "col-sm-12 col-md-6 col-lg-4";
		}elseif($select_case_study_layout==4){
			$clase_lyout= "col-sm-12 col-md-6 col-lg-3";
		}?>
		<div class="row justify-content-center <?php if($select_case_study_layout==4){?>success_four<?php } else {} ?> <?php if( $case_study_layout_type == 'slider' ) { ?>case-study-slider case-study-slider-<?php echo $case_study_random_num; ?><?php } ?> <?php if( $case_study_slider_column == 4 ) { ?>case-study-slider-col-4<?php } ?>">
		<?php $post_objects = get_sub_field( 'select_case_study' ); ?>
			<?php if ( $post_objects ): ?>
				<?php foreach ( $post_objects as $post ):  ?>
					<?php setup_postdata( $post ); ?>
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
								</div>
							<div class="detail">
									<div class="match" data-mh="story-block-text"><?php the_excerpt(); ?></div>
									<a target="_blank" href="<?php the_permalink(); ?>" class="btn btn-border-blue">See Details</a>
									
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
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php }else{ ?>
<?php $case_study_layout_type = get_sub_field( 'case_study_layout_type' ); ?>
<?php $case_study_slider_column = get_sub_field( 'case_study_slider_column' ); ?>
<section class="success-story <?php if( $case_study_layout_type == 'slider' ) { ?>case-study-slider-section<?php } ?>" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
	<?php if(get_sub_field( 'case_study_heading' )) { ?>
		<div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'case_study_heading' ); ?></span>
			<h2><?php the_sub_field( 'case_study_title' ); ?></h2>
		</div>
<?php } ?>
<?php $select_case_study_layout= get_sub_field( 'select_case_study_layout' ); 
		if($select_case_study_layout==1){
			$clase_lyout= "col-sm-12 col-md-6 col-lg-6";
		}elseif($select_case_study_layout==2){
			$clase_lyout= "col-sm-12 col-md-6 col-lg-6";	
		}elseif($select_case_study_layout==3){
			$clase_lyout= "col-sm-12 col-md-6 col-lg-4";
		}elseif($select_case_study_layout==4){
			$clase_lyout= "col-sm-12 col-md-6 col-lg-3";
		}?>
		<div class="row justify-content-center <?php if($select_case_study_layout==4){?>success_four<?php } else {} ?> <?php if( $case_study_layout_type == 'slider' ) { ?>case-study-slider case-study-slider-<?php echo $case_study_random_num; ?><?php } ?> <?php if( $case_study_slider_column == 4 ) { ?>case-study-slider-col-4<?php } ?>">
		<?php $post_objects = get_sub_field( 'select_case_study' ); ?>
			<?php if ( $post_objects ): ?>
				<?php foreach ( $post_objects as $post ):  ?>
					<?php setup_postdata( $post ); ?>
						<div class="<?php echo $clase_lyout; ?>">
							<div class="story-block">
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
								<div class="detail">
								<div class="match" data-mh="story-block-text"><?php the_excerpt(); ?></div>
									<a target="_blank" href="<?php the_permalink(); ?>" class="btn btn-border-blue">See Details</a>
								</div>
							</div>
						</div>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php } ?>

<script>
	$( document ).ready(function() {
		$('.case-study-slider-<?php echo $case_study_random_num; ?>').slick({
			dots: true,
			infinite: false,
			speed: 300,
			slidesToShow: <?php the_sub_field( 'case_study_slider_column' ); ?>,
			slidesToScroll: 1,
			arrow: true,
			responsive: [
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 1024,
				 settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
			]
		});
	});
</script>


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