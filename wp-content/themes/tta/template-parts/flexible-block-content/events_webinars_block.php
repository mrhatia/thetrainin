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
<section class="webinar-sec eventwebinar" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<?php $heading = get_sub_field( 'section_title' ); ?>
		<div class="section-title align-right <?php echo $class_fontstyle; ?>">
				
				<h2><?php echo $heading; ?></h2>
			</div>
		<div class="webevnrow">
		
			
           		<div class="leftweb">
					<div class="webinar-detail webinar_b_main <?php echo $class_fontstyle; ?>">
						<span class="stag">Summary</span>
						<div class="webinar-min">
							<h2><?php the_sub_field( 'webinar_card_title' ); ?></h2>
							<div class="webinar_short_text"><?php the_sub_field( 'content' ); ?></div>
						</div>
												
					</div>
				</div>
				
             <div class="rightweb">
				
			<?php $webinar_card_image = get_sub_field( 'event_image' ); ?>
			<?php if ( $webinar_card_image ) { ?>
				
					<div class="webinar-img">
						<div class="webicontent">
							<?php if (get_sub_field( 'webinar_button_text' )) { ?>
							<a class="webbtn" href="<?php echo get_sub_field( 'webinar_button_link' );?>"><?php echo get_sub_field( 'webinar_button_text' );?></a>
							<?php } ?>
							<?php if (get_sub_field( 'sub_title' )) { ?>
							<div class="subtitle"><h3><?php echo get_sub_field( 'sub_title' );?></h3></div>
							<?php }?>
	</div>
					<img src="<?php echo $webinar_card_image['url']; ?>" alt="<?php echo $webinar_card_image['alt']; ?>" class="img-fluid" />
					</div>
				
				<?php } ?>
				</div>
			
		</div>
		<div class="webinarfoot">
			<div class="downlink">
              <?php $webinar_card_link = get_sub_field( 'button_text' ); ?>
					<?php if ( $webinar_card_link ) { ?>
								<a class="btn btn-animated" href="<?php echo get_sub_field('url'); ?>" "><?php echo get_sub_field('button_text'); ?>
					 <svg width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.75 1.75L9.25 10.5L1.75 19.25" stroke="white" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></a>
<?php } ?>	
	</div>
	<div class="morelink"><?php if( get_sub_field('see_more_events_&_webinars')){?>
		 <a href="<?php echo get_sub_field('see_more_events_&_webinars');?>" class="morebtn">See More Events & Webinars</a>

		 <?php } ?>	
		</div>
	</div>
</section>