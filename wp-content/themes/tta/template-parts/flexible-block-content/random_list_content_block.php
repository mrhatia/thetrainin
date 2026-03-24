<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_random_list' ) ) : 
		while ( have_rows( 'block_settings_control_random_list' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_random_list' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'random_list_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="sales-trainning" id="<?php echo $gradient_color_banner_section_id; ?>">
			<div class="container">
				<div class="section-title <?php echo $class_fontstyle; ?>">
					<span><?php the_sub_field( 'random_list_content_heading' ); ?></span>
					<h2><?php the_sub_field( 'random_list_content_title' ); ?></h2>
				</div>
				
				<div class="tick-mark-list">
					<div class="row">
						<?php if ( have_rows( 'random_list_content_list_content' ) ) : ?>
				<?php while ( have_rows( 'random_list_content_list_content' ) ) : the_row(); ?>
						<div class="col-sm-12 col-md-4">
							<div class="sales-block">
								<div class="icon">
									<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="14" cy="14" r="13.5" stroke="#3CB4E5"/>
										<circle cx="14" cy="14" r="10" fill="#3CB4E5"/>
									</svg>
								</div>
								<div class="detail">
									<h6><?php the_sub_field( 'random_list_add_list' ); ?></h6>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
			<?php endif; ?>
					</div>
			<?php $random_list_content_button = get_sub_field( 'random_list_content_button' ); ?>
					<?php if ( $random_list_content_button ) { ?>
						<div class="see-more">
				<a  class="link" href="<?php echo $random_list_content_button['url']; ?>" target="<?php echo $random_list_content_button['target']; ?>"><?php echo $random_list_content_button['title']; ?></a>
					</div>
					<?php } ?>
				</div>
			</div>
		</section>