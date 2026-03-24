<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>

<!-- work section start  -->
<?php if ( have_rows( 'block_settings_control_learning_strategists' ) ) : 
		while ( have_rows( 'block_settings_control_learning_strategists' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_learning_strategists' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'learning_strategists_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>

<section class="learning-strategy call-to-section <?php if ( get_sub_field( 'stack_on_mobile' ) == 1 ) { ?>stack_on_mobile<?php } else { ?><?php } ?>" id="call-to-section <?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'learning_strategist_heading' ); ?></span>
			<h2><?php the_sub_field( 'learning_strategist_title' ); ?></h2>
		</div>
		
		<div class="strategy_icon-layout">
			<div class="row justify-content-center">
			<?php if ( have_rows( 'learning_add_strategist' ) ) : ?>
					<?php while ( have_rows( 'learning_add_strategist' ) ) : the_row(); ?>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="icon-box">
						<div class="icon">
						<?php $learning_add_icon = get_sub_field( 'learning_add_icon' ); ?>
						<?php if ( $learning_add_icon ) { ?>
							<img src="<?php echo $learning_add_icon['url']; ?>" alt="<?php echo $learning_add_icon['alt']; ?>"  class="img-fluid" />
						<?php } ?>							
						</div>
						<?php $learning_add_link = get_sub_field( 'learning_add_link' ); ?>
						<?php if (!empty($learning_add_link )) { ?>
							<a href="<?php echo $learning_add_link['url']; ?>" target="<?php echo $learning_add_link['target']; ?>"><?php the_sub_field( 'learning_add_text' ); ?></a>
						<?php }else{ ?>
							<?php the_sub_field( 'learning_add_text' ); ?>
						<?php } ?>
					</div>
				</div>
			<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>

	</div>
</section>
<!-- work section end  -->