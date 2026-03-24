<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_canter_content' ) ) : 
		while ( have_rows( 'block_settings_control_canter_content' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_canter_content' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'canter_content_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>

<section class="qualification text_with-image"  id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'canter_content_heading' ); ?></span>
			<h2><?php the_sub_field( 'canter_content_title' ); ?></h2>
		</div>
		<div class="qualification_small_wrap">
		<?php $canter_content_image = get_sub_field( 'canter_content_image' ); ?>
			<?php if ( $canter_content_image ) { ?>
            <div class="simple-img text-center">
			 <img src="<?php echo $canter_content_image['url']; ?>" alt="<?php echo $canter_content_image['alt']; ?>" class="img-fluid" />
			</div>
			<?php } ?>
            <div class="text-block-right text-bg number-list">
				<?php the_sub_field( 'canter_content_content' ); ?>
				<?php $canter_content_link = get_sub_field( 'canter_content_link' ); ?>
			<?php if ( $canter_content_link ) { ?>
				<a class="btn btn-primary" href="<?php echo $canter_content_link['url']; ?>" target="<?php echo $canter_content_link['target']; ?>"><?php echo $canter_content_link['title']; ?></a>
			<?php } ?>
              
			</div>
		</div>
	</div>
</section>
