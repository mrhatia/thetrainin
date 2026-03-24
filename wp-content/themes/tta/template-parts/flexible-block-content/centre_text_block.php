<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_centre_text' ) ) : 
		while ( have_rows( 'block_settings_control_centre_text' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_centre_text' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'centre_text_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<?php $tblcontent_layout= get_sub_field( 'tblcontent_layout' ); 
if($tblcontent_layout=="simplpaincont") { ?>
<section class="strategy-simple" id="<?php echo $gradient_color_banner_section_id; ?>">
			<div class="container">
				<div class="text-block">
					<div class="section-title <?php echo $class_fontstyle; ?>">
						<span><?php the_sub_field( 'centre_simple_heading' ); ?></span>
						<h2><?php the_sub_field( 'centre_simple_title' ); ?></h2>
					</div>
					<?php the_sub_field( 'centre_simple_content' ); ?>
					<?php $centre_simple_link = get_sub_field( 'centre_simple_link' ); ?>
					<?php if ( $centre_simple_link ) { ?>
						<a class="btn btn-primary" href="<?php echo $centre_simple_link['url']; ?>" target="<?php echo $centre_simple_link['target']; ?>"><?php echo $centre_simple_link['title']; ?></a>
					<?php } ?>
			</div>
		</div>
	</section>
<?php }elseif($tblcontent_layout=="tblepaincont"){ ?>
		<section class="table-list-sec" id="<?php echo $gradient_color_banner_section_id; ?>">
		<div class="container">
			<div class="section-title <?php echo $class_fontstyle; ?>">
				<span><?php the_sub_field( 'centre_simple_heading' ); ?></span>
				<h2><?php the_sub_field( 'centre_simple_title' ); ?></h2>
			</div>

			<div class="table-list">
			<?php the_sub_field( 'centre_simple_content' ); ?>
			<?php $centre_simple_link = get_sub_field( 'centre_simple_link' ); ?>
					<?php if ( $centre_simple_link ) { ?>		
				<div class="see-more">
						<a class="link" href="<?php echo $centre_simple_link['url']; ?>" target="<?php echo $centre_simple_link['target']; ?>"><?php echo $centre_simple_link['title']; ?></a>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
<?php }else{ ?>
<section class="random-list-sec" id="<?php echo $gradient_color_banner_section_id; ?>">
			<div class="container">
				<div class="section-title <?php echo $class_fontstyle; ?>">
					<span><?php the_sub_field( 'centre_simple_heading' ); ?></span>
					<h2><?php the_sub_field( 'centre_simple_title' ); ?></h2>
				</div>

				<div class="random-list">
					<?php the_sub_field( 'centre_simple_content' ); ?>
				</div>
			</div>
		</section>
<?php } ?>