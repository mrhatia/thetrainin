<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_left_title_list' ) ) : 
		while ( have_rows( 'block_settings_control_left_title_list' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_left_title_list' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'left_title_list_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="text-block-bg list-block-dash"  id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">				
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-6">
				<div class="text-block-left text-block">
					<div class="section-title text-start <?php echo $class_fontstyle; ?>">
						<span><?php the_sub_field( 'left_title_list_gradient_content_heading' ); ?></span>
						<h2><?php the_sub_field( 'left_title_list_gradient_content_title' ); ?></h2>
						<p><?php the_sub_field( 'left_title_list_gradient_content_sub_text' ); ?></p>
					</div>
				</div>
			</div>
			<?php $left_title_list_content_layout = get_sub_field( 'left_title_list_content_layout' ); 
			if($left_title_list_content_layout=='listcontent'){ ?>
			<div class="col-sm-12 col-md-12 col-lg-6">
				<div class="list-dash">
						<?php the_sub_field( 'left_title_list_gradient_content' ); ?>
				</div>
			</div>
			<?php }elseif($left_title_list_content_layout=='listcontentpopup'){ ?>
				<?php if ( have_rows( 'left_title_add_popup_content' ) ) : ?>			
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="list-dash">
						<ul>
						<?php $counter=0; while ( have_rows( 'left_title_add_popup_content' ) ) : the_row(); $counter++; ?>
							<li><a href="#" data-fancybox="" data-src="#popular_<?php echo $counter; ?>"><?php the_sub_field( 'list_name_popup_content' ); ?></a></li>
						<?php endwhile; ?>
						</ul>
					</div>
				</div>	
				<?php endif; ?>
			<?php } ?>
		
		</div>
	</div>
</section>

<?php if ( have_rows( 'left_title_add_popup_content' ) ) : ?>
	<?php $cout=0; while ( have_rows( 'left_title_add_popup_content' ) ) : the_row(); $cout++; ?>
<!-- Popup -->
<div style="display: none;" id="popular_<?php echo  $cout; ?> <?php echo $gradient_color_banner_section_id; ?>">
	<div class="popular-popup">
		<h2><?php the_sub_field( 'list_name_popup_content' ); ?></h2>
		<p><?php the_sub_field( 'short_content_popup_content' ); ?></p>
		
		<div class="popular_buttons">
			<?php $popup_content_button = get_sub_field( 'popup_content_button' ); ?>
		<?php if ( $popup_content_button ) { ?>
			<a class="btn btn-primary" href="<?php echo $popup_content_button['url']; ?>" target="<?php echo $popup_content_button['target']; ?>"><?php echo $popup_content_button['title']; ?></a>
		<?php } ?>
		<?php $popup_content_button_two = get_sub_field( 'popup_content_button_two' ); ?>
		<?php if ( $popup_content_button_two ) { ?>
			<a class="btn btn-primary" href="<?php echo $popup_content_button_two['url']; ?>" target="<?php echo $popup_content_button_two['target']; ?>"><?php echo $popup_content_button_two['title']; ?></a>
		<?php } ?>

		</div>
	</div>
</div>

	<?php endwhile; ?>
<?php endif; ?>