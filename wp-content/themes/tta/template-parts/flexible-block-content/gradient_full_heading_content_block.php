<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_gradient_full' ) ) : 
		while ( have_rows( 'block_settings_control_gradient_full' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_gradient_full' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'gradient_full_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="text-block-bg" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="section-title text-start <?php echo $class_fontstyle; ?>">
			<?php if(get_sub_field('gradt_full_head_content_title')) { ?>
			<span>	<?php the_sub_field( 'gradt_full_head_content_title' ); ?></span>
			<?php  } ?>
			<h2><?php the_sub_field( 'gradt_full_head_content_heading' ); ?></h2>
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-3 col-lg-3">
				<div class="text-block-left">
					<img src="<?php echo get_template_directory_uri(); ?>/images/pattern-bottom.png" alt="pattern-bottom" class="img-fluid">
				</div>
			</div>
			<div class="col-sm-12 col-md-9 col-lg-9">
				<div class="text-block-right text-bg">
				<?php the_sub_field( 'gradt_full_head_content' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>
