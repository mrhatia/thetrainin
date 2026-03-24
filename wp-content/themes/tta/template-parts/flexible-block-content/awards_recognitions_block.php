<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_recognitions' ) ) : 
		while ( have_rows( 'block_settings_control_recognitions' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_recognitions' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'recognitions_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="awards-sec text-center default-bottom-padding" id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="container">
        <div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'awards_recognitions_heading' ); ?></span>
			<h2><?php the_sub_field( 'awards_recognitions_title' ); ?></h2>
		</div>
        <p><?php the_sub_field( 'awards_recognitions_short_text' ); ?></p>
        
		
		<div class="awards-blocks-main d-md-block d-none">
            <div class="row">
				<?php if ( have_rows( 'add_awards_recognitions' ) ) : ?>
					<?php while ( have_rows( 'add_awards_recognitions' ) ) : the_row(); ?>
					<div class="col-lg-4 col-sm-6">
						<div class="awards-block">
							<?php $add_awards_recognitions_image = get_sub_field( 'add_awards_recognitions_image' ); ?>
							<?php if ( $add_awards_recognitions_image ) { ?>
							<span class="awards-block-img">
								<img src="<?php echo $add_awards_recognitions_image['url']; ?>" alt="<?php echo $add_awards_recognitions_image['alt']; ?>" />
								</span>
							<?php } ?>
							<h5><?php the_sub_field( 'add_awards_recognitions_title' ); ?></h5>
							<p><?php the_sub_field( 'add_awards_recognitions_short_text' ); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>
				<?php $add_awards_recognitions_read_more_link = get_sub_field( 'add_awards_recognitions_read_more_link' ); ?>
				<?php if ( $add_awards_recognitions_read_more_link ) { ?>
					<div class="col-12">
					<a class="see-more" href="<?php echo $add_awards_recognitions_read_more_link['url']; ?>" target="<?php echo $add_awards_recognitions_read_more_link['target']; ?>"><?php echo $add_awards_recognitions_read_more_link['title']; ?></a>
					</div>
				<?php } ?>
            </div>
        </div>
    </div>

	<div class="awards-blocks-main-mobile d-md-none d-block">
			<div class="awards-mobile-slider">
			<?php if ( have_rows( 'add_awards_recognitions' ) ) : ?>
					<?php while ( have_rows( 'add_awards_recognitions' ) ) : the_row(); ?>
				<div class="awards-items">
					<div class="awards-block">
					<?php $add_awards_recognitions_image = get_sub_field( 'add_awards_recognitions_image' ); ?>
							<?php if ( $add_awards_recognitions_image ) { ?>
									<span class="awards-block-img">
										<img src="<?php echo $add_awards_recognitions_image['url']; ?>" alt="<?php echo $add_awards_recognitions_image['alt']; ?>" />
									</span>
						<?php } ?>
							<h5><?php the_sub_field( 'add_awards_recognitions_title' ); ?></h5>
							<p><?php the_sub_field( 'add_awards_recognitions_short_text' ); ?></p>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>

</section>
