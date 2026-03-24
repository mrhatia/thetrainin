<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_featured_talent' ) ) : 
		while ( have_rows( 'block_settings_control_featured_talent' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_featured_talent' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'featured_talent_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="featured-talent-section" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'featured_talent_label' ); ?></span>
			<h2><?php the_sub_field( 'featured_talent_title' ); ?></h2>
		</div>
		<div class="featured-talent-slider">
			<?php if ( have_rows( 'add_featured_talent' ) ) : ?>
				<?php while ( have_rows( 'add_featured_talent' ) ) : the_row(); ?>
			<div class="talent-slide-block-slide">
				<div class="talent-slide-block">
				<?php $add_featured_talent_image = get_sub_field( 'add_featured_talent_image' ); ?>
					<?php if ( $add_featured_talent_image ) { ?>
					<div class="talent-slide-block-img" style="background-image: url(<?php echo $add_featured_talent_image['url']; ?>);">

					</div>
					<?php } ?>
					<div class="talent-slide-caps">
						<h6><?php the_sub_field( 'add_featured_talent_title' ); ?></h6>
						<label><?php the_sub_field( 'add_featured_talent_sub_title' ); ?></label>
						<?php the_sub_field( 'add_featured_talent_text' ); ?>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<?php $add_featured_talent_button_link = get_sub_field( 'add_featured_talent_button_link' ); ?>
		<?php if ( $add_featured_talent_button_link ) { ?>
		<div class="see-more">
			<a class="btn btn-primary btn-big" href="<?php echo $add_featured_talent_button_link['url']; ?>" target="<?php echo $add_featured_talent_button_link['target']; ?>"><?php echo $add_featured_talent_button_link['title']; ?></a>
		</div>
		<?php } ?>
	</div>	
</section>