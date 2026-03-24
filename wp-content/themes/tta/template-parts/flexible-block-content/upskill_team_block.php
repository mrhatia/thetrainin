<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_upskill' ) ) : 
		while ( have_rows( 'block_settings_control_upskill' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_upskill' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'upskill_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<!-- skill sec  -->
<div class="upskill" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-5">
				<div class="skill-left">
					<div class="section-title text-start <?php echo $class_fontstyle; ?>">
						<span><?php the_sub_field( 'upskill_team_heading' ); ?></span>
						<h2><?php the_sub_field( 'upskill_team_title' ); ?></h2>
					     
					</div>
					 <?php the_sub_field( 'upskill_team_content' ); ?>
					<?php $upskill_team_primary_button = get_sub_field( 'upskill_team_primary_button' ); ?>
					<?php if ( $upskill_team_primary_button ) { ?>
						<a class="btn btn-primary" href="<?php echo $upskill_team_primary_button['url']; ?>" target="<?php echo $upskill_team_primary_button['target']; ?>"><?php echo $upskill_team_primary_button['title']; ?></a>
					<?php } ?>

				</div>
			</div>
			<?php if ( have_rows( 'upskill_team_add_your_upskill' ) ) : ?>
			<div class="col-sm-12 col-md-12 col-lg-7">
				<div class="skill-right">
					<ul>
					<?php while ( have_rows( 'upskill_team_add_your_upskill' ) ) : the_row(); ?>
					<?php $upskill_team_link = get_sub_field( 'upskill_team_link' ); ?>
					<?php if ( $upskill_team_link ) { ?>
						<li><a href="<?php echo $upskill_team_link['url']; ?>" target="<?php echo $upskill_team_link['target']; ?>"><?php echo $upskill_team_link['title']; ?></a></li>
						<?php } ?>
					<?php endwhile; ?>
					</ul>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- skill sec  -->
