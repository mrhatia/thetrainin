<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php $name_font_size = get_sub_field( 'name_font_size' ); ?>
<?php $designation_font_size = get_sub_field( 'designation_font_size' ); ?>
<?php $company_font_size = get_sub_field( 'company_font_size' ); ?>

<style>
	.t-detail .name,
	.testimonials-client-name .name {
		font-size: <?php echo $name_font_size; ?>px !important;
		color: #3CB4E5 !important;
		font-weight: 700 !important;
		line-height: 120% !important;
	}
	.t-detail .designation,
	.testimonials-client-name .designation {
		font-size: <?php echo $designation_font_size; ?>px !important;
		color: #3CB4E5 !important;
		font-weight: 700 !important;
		margin-bottom: 0 !important;
		line-height: 120% !important;
	}
	.t-detail .company,
	.testimonials-client-name .company {
		font-size: <?php echo $company_font_size; ?>px !important;
		color: #3CB4E5 !important;
		font-weight: 700 !important;
		line-height: 120% !important;
	}
</style>

<?php if ( have_rows( 'block_settings_control_testimonial' ) ) : 
	while ( have_rows( 'block_settings_control_testimonial' ) ) : the_row();
	$tta_font_style= get_sub_field( 'tta_font_style_case_study' );
	$class_fontstyle="";
	if ($tta_font_style=="font_style_version_one") {
		$class_fontstyle ="option1";
	} elseif ($tta_font_style=="font_style_version_two") { 
		$class_fontstyle ="option2"; 
	} 
	$gradient_color_banner_section_id= get_sub_field( 'case_study_section_id' );  ?>
<?php endwhile; 
endif; ?>

<div class="container">
	<div class="section-title">
		<span><?php the_sub_field( 'testimonial_heading' ); ?></span>
		<h2><?php the_sub_field( 'testimonial_title_section' ); ?></h2>
	</div>
</div>

<?php $testimonial_choose_layout = get_sub_field( 'testimonial_choose_layout' ); ?>

<?php if($testimonial_choose_layout == 'testimonial_blue') { ?>

	<section class="testimonial" id="<?php echo $gradient_color_banner_section_id; ?>">
		<div class="container">		
			<div class="testi-slider">
			<?php $post_objects = get_sub_field( 'select_testimonial_slider' ); ?>
					<?php if ( $post_objects ): ?>
						<?php foreach ( $post_objects as $post ):  ?>
							<?php setup_postdata( $post ); ?>
							<div class="testi-item">
								 <?php
									$disp_img_box ='';
									if ( has_post_thumbnail()) {
										$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), ''); 
										 $disp_img_box = $large_image_url[0];
									} 
									 if(!empty( $disp_img_box)) { ?>
										<div class="t-img">
										<img src="<?php echo $disp_img_box; ?>" alt="testimonial" class="img-fluid">
										</div>
									 <?php }else{ ?> 
										<div class="t-img no-img">				
										</div>
									 <?php } ?>
								<div class="t-detail">
									<?php the_content(); ?>
									<span class="name"><?php the_title(); ?></span>
									<p class="designation"><?php the_field( 'testim_designation' ); ?></p>
									<p class="company"><?php the_field( 'testim_company' ); ?></p>
								</div>
							</div>
						<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

<?php } elseif ($testimonial_choose_layout == 'testimonial_skyeblue') { ?>

	<section class="testimonials-slider-sec" id="<?php echo $gradient_color_banner_section_id; ?>">
		<div class="container">

			<div class="testimonials-slider">
				<?php $post_objects2 = get_sub_field( 'select_testimonial_slider' ); ?>
				<?php if ( $post_objects2 ): ?>
					<?php foreach ( $post_objects2 as $post ):  ?>
					<?php setup_postdata( $post ); ?>
				<div class="item">
				<?php
					$disp_img_box ='';
					if ( has_post_thumbnail()) {
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), ''); 
						 $disp_img_box = $large_image_url[0];
					}				  
					if(!empty( $disp_img_box)) { ?>			
						<div class="testimonials-slider-oth-img" style="background-image:url(<?php echo $disp_img_box; ?>)">
						</div>
					<?php }else { ?>
						<div class="testimonials-slider-oth-img no-img" style="background-image:url(<?php echo $disp_img_box; ?>)">
						</div>
					<?php  } ?>
					<div class="testimonials-caps">
						<?php the_content(); ?>
					</div>
					<div class="testimonials-client-name">
						<h6 class="name"><?php the_title(); ?></h6>
						<p class="designation"><?php the_field( 'testim_designation' ); ?></p>
						<p class="company"><?php the_field( 'testim_company' ); ?></p>
					</div>
				</div>
			  <?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			</div>
		</div>
	</section>

<?php } elseif ($testimonial_choose_layout == 'testimonial_particular') { ?>

<section class="testimonial testimonial-particular" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">			
		<div class="testi-slider">
			<?php if ( have_rows( 'add_testimonial' ) ) : ?>
				<?php while ( have_rows( 'add_testimonial' ) ) : the_row(); ?>
					<div class="testi-item">
						<?php $add_testimonial_image = get_sub_field( 'add_testimonial_image' ); ?>
								<?php if ( $add_testimonial_image ) { ?>
									<div class="t-img">
									<img src="<?php echo $add_testimonial_image['url']; ?>" alt="<?php echo $add_testimonial_image['alt']; ?>"  class="img-fluid">
									</div>				
								<?php }else{ ?> 
									<div class="t-img no-img">				
									</div>
								<?php } ?>
						<div class="t-detail">
							<?php the_sub_field( 'add_testimonial_content' ); ?>				
							<span class="name"><?php the_sub_field( 'add_testimonial_title' ); ?></span>				
						</div>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php } ?>