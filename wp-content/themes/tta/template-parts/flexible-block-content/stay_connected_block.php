<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_joining_team' ) ) : 
		while ( have_rows( 'block_settings_control_joining_team' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_joining_team' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'joining_team_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
		<?php $iconimage = get_sub_field( 'icon_image' );?>
	<section class="tts-stay-section" id="<?php echo $gradient_color_banner_section_id; ?>">
			<div class="container">
				<div class="stayfomrrow">
                   <div class="stayformleft">
					<?php if($iconimage){?> <div class="ficon"><img src="<?php echo $iconimage['url'];?> ?>" alt=""></div><?php }?>
					 <div class="fdetail">
					 <div class="ftitle"><h3><?php echo get_sub_field( 'title' );?></h3></div>
					  <div class="fdesc"><?php echo get_sub_field( 'sub_title' );?></div>
					</div>
				   </div>
				   <div class="staylformright">
                        <?php if(get_sub_field('form_shortcode')){ echo do_shortcode(get_sub_field('form_shortcode'));}?>
				   </div>
				</div>
			</div>
		</section>