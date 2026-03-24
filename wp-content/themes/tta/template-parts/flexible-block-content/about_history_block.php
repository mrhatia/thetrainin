<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_according_about_history' ) ) : 
		while ( have_rows( 'block_settings_control_according_about_history' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_according_about_history' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'according_about_client_about_history' );  ?>
	<?php  endwhile; 
		endif; ?>
	<!-- work section start  -->
		<section class="our-history" id="<?php echo $gradient_color_banner_section_id; ?>">
			<div class="container">
				<div class="text-block">
					<div class="section-title <?php echo $class_fontstyle; ?>">
						<span><?php the_sub_field( 'about_history_heading' ); ?></span>
						<h2><?php the_sub_field( 'about_history_title' ); ?></h2>
					</div>
					<?php the_sub_field( 'about_history_content' ); ?>
				</div>
			</div>
		</section>