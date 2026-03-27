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

					$tta_designvariation= get_sub_field( 'design_variation' );
						$class_designvariation ="";
						if($tta_designvariation=="design_one"){
						 $class_designvariation  ="design_one";
						} elseif($tta_designvariation=="design_two") { 
							$class_designvariation  ="design_two"; 
						} else {
							$class_designvariation  ="design_three"; 
						}
					$gradient_color_banner_section_id= get_sub_field( 'faqs_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>

<?php if($class_designvariation === 'design_two'){ ?>
	<section class="faq-section faq-section-design-two" id="<?php echo $gradient_color_banner_section_id; ?>">
		<div class="container">
			<div class="faq-section-title <?php echo $class_fontstyle; ?>">
				<h2><?php the_sub_field( 'faqs_heading' ); ?></h2>
			</div>
			<div class="faq-inner-section">
				<div class="faq-left-heading">
					<h3><?php the_sub_field( 'left_heading' ); ?></h3>
				</div>
				<div class="faq-accordion-blocks faq-right-section">
					<?php if ( have_rows( 'add_faqs_block' ) ) : ?>
							<?php  $counter = 0; while ( have_rows( 'add_faqs_block' ) ) : the_row(); $counter++; ?>
							<div class="faq-accordion-block <?php if( $counter == 1 ) { ?>open<?php } ?>">
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
			<script>
				// FAQ Accordion Start
				jQuery('.faq-accordion-title').click(function(e) {
					jQuery('.faq-accordion-caps').slideUp();
					jQuery('.faq-accordion-block').removeClass('open');
					jQuery('.active').not(this).removeClass('active');
					if (jQuery(this).hasClass('active')) {
						jQuery(this).removeClass('active');
						jQuery(this).next('.faq-accordion-caps').slideUp();

					}else{
						jQuery(this).addClass('active');
						jQuery(this).next('.faq-accordion-caps').slideDown();
						jQuery(this).parent('.faq-accordion-block').addClass('open');
					}
				});
			</script>
		</div>
	</section>
<?php } else if($class_designvariation === 'design_three'){ ?>
	<section class="faq-section faq-section-design-three" id="<?php echo $gradient_color_banner_section_id; ?>">
		<div class="container">
			<div class="faq-section-title <?php echo $class_fontstyle; ?>">
			</div>
			<div class="faq-inner-section">
				<div class="faq-left-heading-d3">
					<h2><?php the_sub_field( 'left_heading' ); ?></h2>
				</div>
				<div class="faq-right-section-d3">
					<h3><?php the_sub_field( 'faqs_heading' ); ?></h3>
					<div class="faq-accordion-blocks">
						<?php if ( have_rows( 'add_faqs_block' ) ) : ?>
								<?php  $counter = 0; while ( have_rows( 'add_faqs_block' ) ) : the_row(); $counter++; ?>
								<div class="faq-accordion-block <?php if( $counter == 1 ) { ?>open<?php } ?>">
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
			</div>
			<script>
			jQuery('.faq-accordion-title').off('click').on('click', function (e) {

    e.preventDefault();
    e.stopPropagation();

    const head = jQuery(this);
    const parentWrapper = head.closest('.faq-section');
    const block = head.closest('.faq-accordion-block');
    const content = block.find('.faq-accordion-caps'); // 🔥 FIXED

    if (block.hasClass('open')) {
        // close current
        block.removeClass('open');
        head.removeClass('active');
        content.stop(true, true).slideUp(400);
    } else {
        // close others ONLY in same section
        parentWrapper.find('.faq-accordion-block.open')
            .removeClass('open')
            .find('.faq-accordion-caps')
            .stop(true, true).slideUp(400);

        parentWrapper.find('.faq-accordion-title.active').removeClass('active');

        // open current
        block.addClass('open');
        head.addClass('active');
        content.stop(true, true).slideDown(400);
    }

});
			</script>
		</div>
	</section>
<?php } else { ?>
	<section class="faq-section faq-design-one" id="<?php echo $gradient_color_banner_section_id; ?>">
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
		<script>
	// FAQ Accordion Start
	jQuery('.faq-accordion-title').click(function(e) {
		jQuery('.faq-accordion-caps').slideUp();
		jQuery('.faq-accordion-block').removeClass('open');
		jQuery('.active').not(this).removeClass('active');
		if (jQuery(this).hasClass('active')) {
			jQuery(this).removeClass('active');
			jQuery(this).next('.faq-accordion-caps').slideUp();

		}else{
			jQuery(this).addClass('active');
			jQuery(this).next('.faq-accordion-caps').slideDown();
			jQuery(this).parent('.faq-accordion-block').addClass('open');
		}
	});
</script>
	</section>
<?php }  ?>


