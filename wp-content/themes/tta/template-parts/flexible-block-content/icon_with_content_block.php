<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_icon' ) ) : 
		while ( have_rows( 'block_settings_control_icon' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_icon' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'icon_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="left-icon-section" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'icon_with_content_heading' ); ?></span>
			<h2><?php the_sub_field( 'icon_with_content_title' ); ?></h2>
		</div>

		<div class="column2-icon-text">
			<div class="row">
			<?php if ( have_rows( 'add_icon_content' ) ) : ?>
			<?php while ( have_rows( 'add_icon_content' ) ) : the_row(); ?>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<div class="icon-box icon-left"> 
							<div class="icon">
								<?php $add_icon_content_icon = get_sub_field( 'add_icon_content_icon' ); ?>
								<?php if ( $add_icon_content_icon ) { ?>
									<img src="<?php echo $add_icon_content_icon['url']; ?>" alt="<?php echo $add_icon_content_icon['alt']; ?>" class="img-fluid" />
								<?php } ?>
							</div>
							<?php the_sub_field( 'add_icon_content_short_content' ); ?>
						</div>
					</div>
					<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</div>
	</div>
</section>
