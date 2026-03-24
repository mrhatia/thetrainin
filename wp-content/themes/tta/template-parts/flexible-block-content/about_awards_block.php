<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_according_about_awards' ) ) : 
		while ( have_rows( 'block_settings_control_according_about_awards' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_accordingabout_awards' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'according_about_client_about_awards' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="award-recognize" id="<?php echo $gradient_color_banner_section_id; ?>">
			<div class="container">
				<div class="text-block">
					<div class="section-title <?php echo $class_fontstyle; ?>">
						<span><?php the_sub_field( 'about_awards_heading' ); ?></span>
						<h2><?php the_sub_field( 'about_awards_title' ); ?></h2>
					</div>
					<p>	<?php the_sub_field( 'about_awards_sub_title' ); ?></p>
				</div>

				<div class="award-list d-md-block d-none">
					<div class="row">
						<?php if ( have_rows( 'about_add_awards' ) ) : ?>
						<?php while ( have_rows( 'about_add_awards' ) ) : the_row(); ?>
						<div class="col-sm-12 col-md-6 col-lg-4">
							<div class="recog-block">
							<?php $about_add_award_image = get_sub_field( 'about_add_award_image' ); ?>
							<?php if ( $about_add_award_image ) { ?>
								<div class="img">
									<img src="<?php echo $about_add_award_image['url']; ?>" alt="<?php echo $about_add_award_image['alt']; ?>"  class="img-fluid" />
								</div>
								<?php } ?>
								<h6><?php the_sub_field( 'about_add_award_title' ); ?></h6>
								<p><?php the_sub_field( 'about_add_award_short_content' ); ?></p>
							</div>
						</div>
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				<?php $about_add_award_button_link = get_sub_field( 'about_add_award_button_link' ); ?>
					<?php if ( $about_add_award_button_link ) { ?>
					<div class="see-more">
							<a class="link" href="<?php echo $about_add_award_button_link['url']; ?>" target="<?php echo $about_add_award_button_link['target']; ?>"><?php echo $about_add_award_button_link['title']; ?></a>
					</div>
					<?php } ?>
				</div>
			</div>

			<div class="mobile-award d-md-none d-block">
				<div class="mb_award-slider">
					<?php if ( have_rows( 'about_add_awards' ) ) : ?>
						<?php while ( have_rows( 'about_add_awards' ) ) : the_row(); ?>
					<div class="mb_award_slide">
						<div class="recog-block">
						<?php $about_add_award_image = get_sub_field( 'about_add_award_image' ); ?>
							<?php if ( $about_add_award_image ) { ?>
							<div class="img">
								<img src="<?php echo $about_add_award_image['url']; ?>" alt="<?php echo $about_add_award_image['alt']; ?>"  />
							</div>
							<?php } ?>
							<h6><?php the_sub_field( 'about_add_award_title' ); ?></h6>
							<p><?php the_sub_field( 'about_add_award_short_content' ); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
						<?php endif; ?>
				</div>
			</div>

		</section>