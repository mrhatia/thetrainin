<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_custom_flip' ) ) : 
	while ( have_rows( 'block_settings_control_custom_flip' ) ) : the_row();
		$tta_font_style= get_sub_field( 'tta_font_style_custom_flip' );
		$class_fontstyle="";
		if($tta_font_style=="font_style_version_one"){
			$class_fontstyle ="option1";
		}elseif($tta_font_style=="font_style_version_two") { 
			$class_fontstyle ="option2"; 
		} 
		$gradient_color_banner_section_id= get_sub_field( 'custom_flip_section_id' ); ?>
	<?php endwhile; 
endif; ?>

<?php $custom_flip_layout_type = get_sub_field( 'custom_flip_layout_type' ); ?>
<section class="award-sec" id="call-to-section <?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">

		<?php if( get_sub_field( 'custom_flip_heading' )) { ?>
			<div class="section-title <?php echo $class_fontstyle; ?>">
				<?php if( get_sub_field( 'custom_flip_heading' )) { ?>
				<span><?php the_sub_field( 'custom_flip_heading' ); ?></span>
					<?php } ?>
					<?php if( get_sub_field( 'custom_flip_title' )) { ?>
				<h2><?php the_sub_field( 'custom_flip_title' ); ?></h2>
				<?php } ?>
			</div>
		<?php } ?>

		<?php $layout_cols_award= get_sub_field( 'layout_cols_custom_flip' );
		if($layout_cols_award=="towcolsaward"){
			$clos_calss= "col-sm-12 col-md-6";
			$award= "award-list";
			$award_block= "award-block";
			$award_slider_col = '2';
		}elseif($layout_cols_award=="threecolsaward"){
			$clos_calss= "col-sm-12 col-md-6 col-lg-4";
			$award= "brandon-list";
			$award_block= "award-brandon";
			$award_slider_col = '3';
		}elseif($layout_cols_award=="fourcolsaward"){
			$clos_calss= "col-sm-12 col-md-6 col-lg-3";
			$award= "brandon-list";
			$award_block= "award-brandon";
			$award_slider_col = '4';
		}?>
				
		<div class="<?php echo $award; ?> <?php if( $custom_flip_layout_type == 'slider' ) { ?>custom-flip-slider-section<?php } ?>">
			<div class="row justify-content-center <?php if( $custom_flip_layout_type == 'slider' ) { ?>custom-flip-slider<?php } ?>">		
				<!-- Repeater Start -->
				<?php if( have_rows('custom_flip_list') ) { ?>
					<?php while( have_rows('custom_flip_list') ) { the_row(); ?>
						<div class="<?php echo $clos_calss; ?>">							
							<div class="<?php echo $award_block; ?>">	

								<div class="a-img">
									<img src="<?php the_sub_field( 'front_image' ); ?>" alt="award" class="img-fluid">
								</div>
								<div class="detail"> 
									<div class="match" data-mh="story-block-text"><?php the_sub_field( 'front_title' ); ?>
									<?php the_sub_field( 'front_description' ); ?></div>
								</div>
								<a href="javascript:void(0)" class="btn btn-border-blue award-btn" ><?php the_sub_field( 'front_cta_text' ); ?></a>

								<div class="hover-block">
									<div class="award-scroll">
										<div class="detail">
											<?php the_sub_field( 'back_title' ); ?>
											<?php the_sub_field( 'back_subtitle' ); ?>
										</div>
										<?php the_sub_field( 'back_description' ); ?>
									</div>
									<div class="award-great-btn">
										<a href="javascript:void(0)" class="btn btn-border-blue award-hover-btn"><?php the_sub_field( 'back_cta_text' ); ?></a>
									</div>
								</div>

							</div>
						</div>
					<?php } ?>
				<?php } ?>
				<!-- Repeater End -->
			</div>
		</div>
				
		<div class="slider awards_slider_mobile" id="<?php echo $gradient_color_banner_section_id; ?>">
		
			<!-- Repeater Start -->
			<?php if( have_rows('custom_flip_list') ) { ?>
				<?php while( have_rows('custom_flip_list') ) { the_row(); ?>
					<div>
						<div class="award-block">
							<div class="a-img">
								<img src="<?php the_sub_field( 'front_image' ); ?>" alt="award" class="img-fluid">
							</div>
							<div class="detail">
								<?php the_sub_field( 'front_title' ); ?>
								<?php the_sub_field( 'front_description' ); ?>
							</div>
							<a href="javascript:void(0)" class="btn btn-border-blue award-btn"><?php the_sub_field( 'front_cta_text' ); ?></a>
							
							<div class="hover-block">
								<div class="award-scroll mCustomScrollbar _mCS_1 mCS_no_scrollbar">
									<div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
										<div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
											<div class="detail">
												<?php the_sub_field( 'back_title' ); ?>
												<?php the_sub_field( 'back_subtitle' ); ?>
											</div>
											<?php the_sub_field( 'back_description' ); ?>
										</div>
										<div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;">
											<div class="mCSB_draggerContainer">
												<div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 21px; height: 0px; top: 0px;">
													<div class="mCSB_dragger_bar" style="line-height: 21px;"></div>
													<div class="mCSB_draggerRail"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="award-great-btn">
									<a href="javascript:void(0)" class="btn btn-border-blue award-hover-btn"><?php the_sub_field( 'back_cta_text' ); ?></a>
								</div>
							</div>

						</div>
					</div>
				<?php } ?>
			<?php } ?>
			<!-- Repeater End -->
	
		</div>

	</div>
</section>

<script>
	$( document ).ready(function() {
		$('.custom-flip-slider').slick({
			dots: true,
			infinite: true,
			speed: 300,
			slidesToShow: <?php echo $award_slider_col; ?>,
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
	.custom-flip-slider-section .slick-slide {
		padding: 0 12px 30px;
	}
	.custom-flip-slider-section .slick-slider .slick-arrownp {
		position: relative;
		margin: 0 5px;
	}
	.custom-flip-slider-section .slick-arrow {
		top: auto;
		bottom: -25px;
		font-size: 0;
		border: 0;
		margin: 10px 8px 0;		
	}
	.custom-flip-slider-section .slick-slider .slick-arrow::before {
		content: "";
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		background: url(/wp-content/themes/tta/images/slider-small-arrow.svg) no-repeat center center / 14px;
	}
	.custom-flip-slider-section .slick-slider .slick-prev {
		right: 60px;
	}
	.custom-flip-slider-section .slick-slider .slick-next {
		order: 4;
		transform: rotate(180deg);
	}
	.custom-flip-slider-section .slick-dots {
		left: 10px;
		z-index: 1;
		right: 0;
		bottom: auto;
	}
	.custom-flip-slider-section .slick-track {
		display: flex !important;
	}
	.custom-flip-slider-section .slick-slide {
		height: inherit !important;
	}
	
	@media (max-width: 1299px) {
		
	}
	@media (max-width: 1199px) {
		
	}
	@media (max-width: 980px) {
		
	}
	@media (max-width: 767px) {
		
	}
</style>