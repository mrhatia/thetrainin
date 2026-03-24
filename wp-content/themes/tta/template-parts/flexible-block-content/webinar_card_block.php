<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_webinar_card' ) ) : 
		while ( have_rows( 'block_settings_control_webinar_card' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_webinar_card' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'webinar_card_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="webinar-sec" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="webinar-card">
			<div class="row">
			<?php $webinar_card_image = get_sub_field( 'webinar_card_image' ); ?>
			<?php if ( $webinar_card_image ) { ?>
				<div class="col-sm-12 col-md-5">
					<div class="webinar-img">
					<img src="<?php echo $webinar_card_image['url']; ?>" alt="<?php echo $webinar_card_image['alt']; ?>" class="img-fluid" />
					</div>
				</div>
				<?php } ?>
				<div class="col-sm-12 col-md-7">
					<div class="webinar-detail webinar_b_main <?php echo $class_fontstyle; ?>">
						<span>	<?php the_sub_field( 'webinar_card_heading' ); ?></span>
						<div class="webinar-min">
							<h2><?php the_sub_field( 'webinar_card_title' ); ?></h2>
							<div class="webinar_short_text"><?php the_sub_field( 'webinar_card_short_text' ); ?></div>
						</div>
							<?php $webinar_card_link = get_sub_field( 'webinar_card_link' ); ?>
					<?php if ( $webinar_card_link ) { ?>
								<a class="btn btn-primary" href="<?php echo $webinar_card_link['url']; ?>" target="<?php echo $webinar_card_link['target']; ?>"><?php echo $webinar_card_link['title']; ?></a>
					<?php } ?>						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>