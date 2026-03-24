<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_facts_statistics' ) ) : 
		while ( have_rows( 'block_settings_control_facts_statistics' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_salespeople_statistics' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'facts_statistics_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<!-- facts-sec -->
<section class="facts-sec"  id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-4">
				<div class="fact-left">
					<div class="section-title text-start <?php echo $class_fontstyle; ?>">
						<h2><?php the_sub_field( 'facts_statistics_heading' ); ?> <br><?php the_sub_field( 'facts_statistics_title' ); ?></h2>
					</div>
					<?php if(get_sub_field('facts_statistics_content')) { ?>
					<p><?php the_sub_field( 'facts_statistics_content' ); ?></p>
					<?php } ?>
				<?php $facts_statistics_logo = get_sub_field( 'facts_statistics_logo' ); ?>
					<?php if ( $facts_statistics_logo ) { ?>
					<div class="women-owned_logo">
						<img src="<?php echo $facts_statistics_logo['url']; ?>" alt="<?php echo $facts_statistics_logo['alt']; ?>" />
					</div>
					<?php } ?>
				</div>
			</div>
			<?php if ( have_rows( 'facts_statistics_statistics_numbers' ) ) : ?>
			<div class="col-sm-12 col-md-12 col-lg-8">
				<div class="fact-right" id="counter">
					<div class="row">
					<?php while ( have_rows( 'facts_statistics_statistics_numbers' ) ) : the_row(); ?>
						<div class="col-sm-6 col-md-4 col-6">
							<div class="count-block">
								<h2>
									<span class="counter-value" data-count="<?php the_sub_field( 'facts_statisti_number' ); ?>"><?php the_sub_field( 'facts_statisti_number' ); ?></span><?php the_sub_field( 'facts_statistic_sign' ); ?>
								</h2>

								<?php the_sub_field( 'salespeople_statisti_number' ); ?></span> 
								<?php the_sub_field( 'salespeople_statistic_sign' ); ?>
								</h2>
								
								<?php if(get_sub_field('facts_statistic_text')) { ?>
								<p><?php the_sub_field( 'facts_statistic_text' ); ?></p>
								<?php } ?>
							</div>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- facts-sec -->
