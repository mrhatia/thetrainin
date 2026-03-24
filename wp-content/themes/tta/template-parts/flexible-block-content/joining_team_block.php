<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_joining_team' ) ) : 
		while ( have_rows( 'block_settings_control_joining_team' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_joining_team' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'joining_team_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
	<section class="join-team" id="<?php echo $gradient_color_banner_section_id; ?>">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-sm-12 col-md-6">
						<div class="section-title text-start <?php echo $class_fontstyle; ?>">
							<span><?php the_sub_field( 'joining_team_heading' ); ?></span>
							<h3><?php the_sub_field( 'joining_team_title' ); ?></h3>
						</div>
						<p><?php the_sub_field( 'joining_team_text' ); ?></p>
						
					</div>
					<div class="col-sm-12 col-md-6">
						<div class="inquiry-form">
						<?php if(get_sub_field( 'joining_team_heading_from' )){  ?>
							<div class="sub-title">
								<h2><?php the_sub_field( 'joining_team_heading_from' ); ?></h2>
							</div>
						<?php } ?>
							<?php $joining_team_button_link = get_sub_field( 'joining_team_button_link' ); ?>
					<?php if ( $joining_team_button_link ) { ?>
						<a  class="btn btn-primary" href="<?php echo $joining_team_button_link['url']; ?>" target="<?php echo $joining_team_button_link['target']; ?>"><?php echo $joining_team_button_link['title']; ?></a>
					<?php } ?>
						
							<?php //echo do_shortcode('[contact-form-7 id="6175" title="Joining The Team - Inquire Now"]'); ?>
						</div>
						
					</div>
				</div>
			</div>
		</section>