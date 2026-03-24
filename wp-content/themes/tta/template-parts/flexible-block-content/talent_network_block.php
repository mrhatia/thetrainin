<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_talent_network' ) ) : 
		while ( have_rows( 'block_settings_control_talent_network' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_talent_network' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'talent_network_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<div class="upskill upskill-fullwidth"  id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-5">
				<div class="skill-left">
					<div class="section-title text-start <?php echo $class_fontstyle; ?>">
						<span><?php the_sub_field( 'talent_network_label' ); ?></span>
						<h2><?php the_sub_field( 'talent_network_title' ); ?></h2>
					</div>
				</div>
			</div>
			<?php if ( have_rows( 'add_talent_network' ) ) : ?>
			<div class="col-sm-12 col-md-12 col-lg-7">
				<div class="skill-right">
					<ul>
					<?php while ( have_rows( 'add_talent_network' ) ) : the_row(); ?>
					<?php $talent_network_link_name = get_sub_field( 'talent_network_link_name' ); ?>
					<?php if ( $talent_network_link_name ) { ?>
						<li><a href="<?php echo $talent_network_link_name['url']; ?>" target="<?php echo $talent_network_link_name['target']; ?>"><?php echo $talent_network_link_name['title']; ?></a></li>
					<?php } ?>
					<?php endwhile; ?>
					</ul>
				</div>
			</div>
				<?php endif; ?>
		</div>
	</div>
</div>