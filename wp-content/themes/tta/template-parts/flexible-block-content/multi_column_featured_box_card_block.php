<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_multi_column' ) ) : 
		while ( have_rows( 'block_settings_control_multi_column' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_multi_column' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'multi_columr_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="learning-strategy core-values work-section" id="work-section <?php echo $gradient_color_banner_section_id; ?>">
		<div class="container">
			<div class="section-title <?php echo $class_fontstyle; ?>">
				<span><?php the_sub_field( 'multi_column_featured_heading' ); ?></span>
				<h2><?php the_sub_field( 'multi_column_featured_title' ); ?></h2>
			</div>
			
			<div class="d-md-block d-none">
				<div class="row justify-content-center">
					<?php if ( have_rows( 'multi_column_featured_box' ) ) : ?>
					<?php while ( have_rows( 'multi_column_featured_box' ) ) : the_row(); ?>
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="icon-box">
						<?php $multi_column_featured_icon = get_sub_field( 'multi_column_featured_icon' ); ?>
						<?php if ( $multi_column_featured_icon ) { ?>
							<div class="icon">
								<img src="<?php echo $multi_column_featured_icon['url']; ?>" alt="<?php echo $multi_column_featured_icon['alt']; ?>" class="img-fluid" />
							</div>
						<?php } ?>
							<h6><?php the_sub_field( 'multi_column_featured_text' ); ?></h6>
								<?php the_sub_field( 'multi_column_featured_content' ); ?>
						</div>
					</div>
						<?php endwhile; ?>
				<?php endif; ?>
				</div>
			</div>

			<div class="d-md-none d-block" id="<?php echo $gradient_color_banner_section_id; ?>">
<?php if ( have_rows( 'multi_column_featured_box' ) ) : ?>
					<?php $counter=0; while ( have_rows( 'multi_column_featured_box' ) ) : the_row();  $counter++; ?>
				<div class="accordion" id="accordionExample">
					<div class="accordion-item accordion_with_icon">
						<button class="accordion-button <?php if (!$counter) { ?><?php } else { ?> collapsed <?php } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo  $counter;  ?>" aria-expanded="true" aria-controls="collapse<?php echo  $counter;  ?>">
						<?php $multi_column_featured_icon = get_sub_field( 'multi_column_featured_icon' ); ?>
						<?php if ( $multi_column_featured_icon ) { ?>
							<span><img src="<?php echo $multi_column_featured_icon['url']; ?>" alt="<?php echo $multi_column_featured_icon['alt']; ?>" /></span>
							<?php } ?>
							<?php if(get_sub_field( 'multi_column_featured_text' )){ ?>
							<label><?php the_sub_field( 'multi_column_featured_text' ); ?></label>
							<?php } ?>
						</button>
						<div id="collapse<?php echo  $counter;  ?>" class="accordion-collapse collapse <?php if( $counter == 0 ) { ?> show<?php } ?>" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<?php the_sub_field( 'multi_column_featured_content' ); ?>
							</div>
						</div>
					</div>
				</div>
					<?php endwhile; ?>
				<?php endif; ?>

			</div>
			


		</div>
	</section>