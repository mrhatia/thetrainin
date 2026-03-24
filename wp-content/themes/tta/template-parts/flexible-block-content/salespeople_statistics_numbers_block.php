<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_salespeople_statistics' ) ) : 
		while ( have_rows( 'block_settings_control_salespeople_statistics' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_salespeople_statistics' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'salespeople_statistics_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="facts-sec hire-process" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-12">
				<div class="fact-left text-center">
					<div class="section-title <?php echo $class_fontstyle; ?>">
						<span><?php the_sub_field( 'salespeople_statistics_heading' ); ?></span>
						<h2><?php the_sub_field( 'salespeople_statistics_title' ); ?></h2>
					</div>
				</div>
				<div class="row" id="counter">
				<?php if ( have_rows( 'salespeople_statistics_numbers' ) ) : ?>
				<?php while ( have_rows( 'salespeople_statistics_numbers' ) ) : the_row(); ?>
					<div class="col-sm-12 col-md-4">
						<div class="count-block">
							<h2><span class="counter-value" data-count="<?php the_sub_field( 'salespeople_statisti_number' ); ?>"><?php the_sub_field( 'salespeople_statisti_number' ); ?></span> <?php the_sub_field( 'salespeople_statistic_sign' ); ?></h2>
							<p><?php the_sub_field( 'salespeople_statistic_text' ); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
