<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_gradient' ) ) : 
		while ( have_rows( 'block_settings_control_gradient' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_gradient' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'gradient_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<?php $gradient_title_content_layout= get_sub_field( 'gradient_title_content_layout' );
if($gradient_title_content_layout=="fullgradientcont") { ?>
<section class="title-with-text consider" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="gradiant-block">
			<?php the_sub_field( 'gradient_content_text' ); ?>
		</div>
	</div>
</section>
<?php }else{ ?>
	<div class="onboard-experience">
			<section class="title-with-text">
				<div class="container">
					<div class="gradiant-block">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-4">
								<div class="section-title text-start <?php echo $class_fontstyle; ?>">
									<h2><?php the_sub_field( 'gradient_title_left_title' ); ?></h2>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-8">
							<?php the_sub_field( 'gradient_content_text' ); ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

<?php } ?>