<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>

<?php if ( have_rows( 'block_settings_control_talentevent' ) ) : 
		while ( have_rows( 'block_settings_control_talentevent' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_talentevent' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'talentevent_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="sectionCl event_main-section" id="<?php echo $gradient_color_banner_section_id; ?>">
		<div class="container">
		<div class="row">
			<div class="section-title <?php echo $class_fontstyle; ?>">
				<span><?php the_sub_field( 'talentevent_heading' ); ?></span>
				<h2><?php the_sub_field( 'talentevent_title' ); ?></h2>
			</div>
			<div class="row justify-content-center">
			<?php $post_objects = get_sub_field( 'talentevent_select_blog' ); ?>
			<?php if ( $post_objects ): ?>
				<?php foreach ( $post_objects as $post ):  ?>
					<?php setup_postdata( $post ); ?>
	
					
			
 <div class="col-xs-12 col-sm-12 col-lg-12 evetnspac">
		   <div class="newteam_box">
			<a href="<?php echo get_permalink(); ?>" class="newteam_link" target="_blank"></a>
			<?php
				$disp_img_box ='';
				if ( has_post_thumbnail()) {
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
					 $disp_img_box = $large_image_url[0];
				}else{
					$disp_img_box = site_url().'/wp-content/uploads/2017/07/Header-7.jpg';
					}
			  ?>
			<div class="event_main_image">
				<img src="<?php echo $disp_img_box; ?>" alt="">
			</div>
			<div class="event_main_info">
			<h5 class="match" data-mh="resource-news-title" style="height: 50.3906px;"><a href="<?php echo get_permalink(); ?>"  target="_blank"><?php echo get_the_title();?></a></h5>
			<?php if(get_field( 'tel_evetn_speaker_listing_short_text' )){ ?>
			<p><?php the_field( 'tel_evetn_speaker_listing_short_text' ); ?></p>
			<?php } ?>
			<div class="resource_news_date">
			
				<span><?php the_field( 'event_date' ); ?></span> 
				<p><?php the_field( 'event_time' ); ?></p> 
				<a target="_blank" class="btn btn-primary evnt-btn"	href="<?php echo get_permalink();?>">Read More</a>
			</div>
			
				</div>
		</div>
	 
</div>
  
				
<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			</div>
			</div>
		</div>
	</section>
	
	
	
