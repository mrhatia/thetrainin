<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	

<?php if ( have_rows( 'block_settings_control_hire_setp' ) ) : 
		while ( have_rows( 'block_settings_control_hire_setp' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_hire_setp' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'hire_setp_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="next-hire" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="text-block">
			<div class="section-title <?php echo $class_fontstyle; ?>">
				<span><?php the_sub_field( 'hire_setp_heading' ); ?></span>
				<h2><?php the_sub_field( 'hire_setp_sub_title' ); ?></h2>
			</div>
			<p><?php the_sub_field( 'hire_setp_short_text' ); ?></p>
		</div>

		<div class="process-timeline">
			<?php if ( have_rows( 'add_hire_step' ) ) : ?>
				<?php while ( have_rows( 'add_hire_step' ) ) : the_row(); ?>
					<div class="step-block">
						<div class="step-dot"></div>
						<span>	<?php the_sub_field( 'hire_step_label' ); ?></span>
			
							<h5><?php the_sub_field( 'hire_step_title' ); ?></h5>
						<p><?php the_sub_field( 'hire_step_cotnent' ); ?></p>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="process-btn">
			<?php $hire_setp_button = get_sub_field( 'hire_setp_button' ); ?>
			<?php if ( $hire_setp_button ) { ?>
				<a  class="btn btn-primary" href="<?php echo $hire_setp_button['url']; ?>" target="<?php echo $hire_setp_button['target']; ?>"><?php echo $hire_setp_button['title']; ?></a>
			<?php } ?>
		</div>

	</div>
</section>
