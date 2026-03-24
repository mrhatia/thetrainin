<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_image_with_content' ) ) : 
		while ( have_rows( 'block_settings_control_image_with_content' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_image_with_content' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'image_with_content_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="qualification text_with-image" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'canter_image_label' ); ?></span>
			<h2><?php the_sub_field( 'canter_image_title' ); ?></h2>
		</div>
		<div class="qualification_small_wrap">
		<?php $canter_image_image = get_sub_field( 'canter_image_image' ); ?>
			<?php if ( $canter_image_image ) { ?>
			<div class="simple-img text-center">
			 <img src="<?php echo $canter_image_image['url']; ?>" alt="<?php echo $canter_image_image['alt']; ?>" class="img-fluid" />
			</div>
			<?php } ?>
			<div class="text-block-right text-bg number-list">
				<?php the_sub_field( 'canter_image_content' ); ?>
			</div>
		</div>
	</div>
</section>