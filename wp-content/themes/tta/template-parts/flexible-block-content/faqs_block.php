<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_faqs' ) ) : 
		while ( have_rows( 'block_settings_control_faqs' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_faqs' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'faqs_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="faq-section" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'faqs_label' ); ?></span>
			<h2><?php the_sub_field( 'faqs_heading' ); ?></h2>
		</div>
		<div class="faq-accordion-blocks">
		<?php if ( have_rows( 'add_faqs_block' ) ) : ?>
				<?php  $counter = 0; while ( have_rows( 'add_faqs_block' ) ) : the_row(); $counter++; ?>
			<div class="faq-accordion-block">
				<div class="faq-accordion-title <?php if( $counter == 1 ) { ?>active<?php } ?>">
					<h5><?php the_sub_field( 'add_faqs_title' ); ?></h5>
				</div>
				<div class="faq-accordion-caps"   <?php if( $counter == 1 ) { ?>style="display: block;"<?php } ?>>
					<?php the_sub_field( 'add_faqs_text' ); ?>
				</div>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</section>