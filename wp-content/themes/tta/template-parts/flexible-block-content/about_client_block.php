<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_according_about_client' ) ) : 
		while ( have_rows( 'block_settings_control_according_about_client' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_according_about_client' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'according_about_client_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="director-sec" id="<?php echo $gradient_color_banner_section_id; ?>">
			<div class="container">
				<div class="section-title <?php echo $class_fontstyle; ?>">
					<span><?php the_sub_field( 'about_board_director_heading' ); ?></span>
					<h2><?php the_sub_field( 'about_board_director_title' ); ?></h2>
				</div>

				<div class="director-list">
					<div class="row">
					<?php if ( have_rows( 'add_board_of_director' ) ) : ?>
					<?php while ( have_rows( 'add_board_of_director' ) ) : the_row(); ?>
						<div class="col-6 col-md-3">
							<div class="director-block">
							<?php $add_board_of_director_image = get_sub_field( 'add_board_of_director_image' ); ?>
								<?php if ( $add_board_of_director_image ) { ?>
									<img  class="img-fluid" src="<?php echo $add_board_of_director_image['url']; ?>" alt="<?php echo $add_board_of_director_image['alt']; ?>" />
								<?php } ?>
								<h6><?php the_sub_field( 'add_board_of_director_name' ); ?></h6>
								<span><?php the_sub_field( 'add_board_of_director_designation' ); ?></span>
								<?php the_sub_field('add_board_of_director_short_bio'); ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
					</div>
				</div>
			</div>
		</section>