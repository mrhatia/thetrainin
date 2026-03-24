<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_according_about_mission' ) ) : 
		while ( have_rows( 'block_settings_control_according_about_mission' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_according_about_mission' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'according_about_client_about_mission' );  ?>
	<?php  endwhile; 
		endif; ?>
		<section class="solution-block" id="<?php echo $gradient_color_banner_section_id; ?>">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-6">
						<div class="section-title <?php echo $class_fontstyle; ?> text-start">
							<span><?php the_sub_field( 'about_mission_values_heading' ); ?></span>
							<h2><?php the_sub_field( 'about_mission_values_title' ); ?></h2>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-6">
						<div class="text-block text-start">
							<?php the_sub_field( 'about_mission_values_content' ); ?>
						</div>
					</div>
				</div>			
			</div>
		</section>
