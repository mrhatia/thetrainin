<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_core_values' ) ) : 
		while ( have_rows( 'block_settings_control_core_values' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_core_values' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'core_values_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="learning-strategy core-values test1" id="work-section <?php echo $gradient_color_banner_section_id; ?>">
			<div class="container">

				<div class="section-title <?php echo $class_fontstyle; ?>">
					 <span><?php the_sub_field( 'core_values_career_label' ); ?></span>
                    <h2><?php the_sub_field( 'core_values_career_title' ); ?></h2>
				</div>
				
				<div class="d-md-block d-none">
					<div class="row justify-content-center">
						<?php if ( have_rows( 'add_core_values_career' ) ) : ?>
						<?php while ( have_rows( 'add_core_values_career' ) ) : the_row(); ?>
							<?php $icon = get_sub_field( 'icon' ); ?>
							<div class="col-sm-12 col-md-12 col-lg-4">
								<div class="icon-box">
								<?php if ( $icon ) { ?>
									<div class="icon">
										<img  class="img-fluid" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />																									
									</div>
									<?php } ?>
										<h5><?php the_sub_field( 'add_core_expertise_title' ); ?></h5>
									<?php the_sub_field( 'add_core_expertise_content' ); ?>
								</div>
							</div>
						<?php endwhile; ?>
						<?php else : ?>
							<?php // no rows found ?>
						<?php endif; ?>
					</div>
				</div>


				<div class="d-md-none d-block"  id="<?php echo $gradient_color_banner_section_id; ?>">
				<?php if ( have_rows( 'add_core_values_career' ) ) : ?>
				<?php $counter=0; while ( have_rows( 'add_core_values_career' ) ) : the_row(); $counter++; ?>
				<?php $icon = get_sub_field( 'icon' ); ?>
				<div class="accordion" id="accordionExample">
					<div class="accordion-item accordion_with_icon">
						<button class="accordion-button <?php if (!$counter) { ?><?php } else { ?> collapsed <?php } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $counter; ?>" aria-expanded="true" aria-controls="collapse<?php echo $counter; ?>">
							<?php if ( $icon ) { ?>
							<span><img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" /></span>
							<?php } ?>
							
							<label>	<?php the_sub_field( 'add_core_expertise_title' ); ?></label>
						</button>
						<div id="collapse<?php echo $counter; ?>" class="accordion-collapse collapse <?php if( $counter == 0 ) { ?> show<?php } ?>" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<?php the_sub_field( 'add_core_expertise_content' ); ?>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
			

			</div>



			</div>
		</section>
		





