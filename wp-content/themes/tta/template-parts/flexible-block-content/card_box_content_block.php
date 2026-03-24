<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_card_box_content' ) ) : 
		while ( have_rows( 'block_settings_control_card_box_content' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_card_box_content' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'card_box_content_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="keynote-sec" id="<?php echo $gradient_color_banner_section_id; ?>">
<div class="container">
	<div class="section-title <?php echo $class_fontstyle; ?>">
		<span><?php the_sub_field( 'card_box_heading' ); ?></span>
		<h2><?php the_sub_field( 'card_box_title' ); ?></h2>
	</div>

	<div class="d-md-block d-none">
		<div class="row">
		<?php if ( have_rows( 'card_box_add_card' ) ) : ?>
					<?php while ( have_rows( 'card_box_add_card' ) ) : the_row(); ?>
			<div class="col-sm-12 col-md-6 col-lg-4">
				
				<div class="keynote-block keynote_with_content">
					<div class="keynote_title">
						<h3><?php the_sub_field( 'card_box_add_title' ); ?></h3>
						<span><?php the_sub_field( 'card_box_add_sub_title' ); ?></span>
					</div>
					<div class="keynote_content">
					<?php the_sub_field( 'card_box_list_bullets' ); ?>
						
					</div>
				</div>

				
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>

	<div class="d-md-none d-block keynote_mobile_accordion" id="<?php echo $gradient_color_banner_section_id; ?>">
		<div class="accordion" id="accordionExample1">
		<?php if ( have_rows( 'card_box_add_card' ) ) : ?>
					<?php $coutner=0; while ( have_rows( 'card_box_add_card' ) ) : the_row(); $coutner++; ?>
			<div class="accordion-item">
				<button class="accordion-button <?php if (!$coutner) { ?><?php } else { ?> collapsed <?php } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $coutner; ?>" aria-expanded="true" aria-controls="collapse<?php echo $coutner; ?>">
					<div class="keynote_accordion-button">
						<?php the_sub_field( 'card_box_add_title' ); ?>
						<span><?php the_sub_field( 'card_box_add_sub_title' ); ?></span>
					</div>
				</button>
				<div id="collapse<?php echo $coutner; ?>" class="accordion-collapse collapse <?php if( $counter == 0 ) { ?> show <?php } ?> " aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
					<div class="accordion-body">
						<?php the_sub_field( 'card_box_list_bullets' ); ?>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</div>


</div>
</section>
