<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_image_right' ) ) : 
		while ( have_rows( 'block_settings_control_image_right' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_image_right' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'image_right_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<?php $content_layout_workforce= get_sub_field( 'content_layout_workforce' ); 
if($content_layout_workforce=="workforcecotent") {?>
<section class="image-pattern" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="row align-items-center">					
			<div class="col-sm-12 col-md-6">
				<div class="text-block text-start">
					<div class="section-title text-start <?php echo $class_fontstyle; ?>">
						<span><?php the_sub_field( 'image_right_content_heading' ); ?></span>
						<h2><?php the_sub_field( 'image_right_content_title' ); ?></h2>
					</div>
					<?php the_sub_field( 'image_right_content' ); ?>
				<?php $image_right_content_button = get_sub_field( 'image_right_content_button' ); ?>
				<?php if ( $image_right_content_button ) { ?>
					<a  style="margin-top:30px;"  class="btn btn-primary" href="<?php echo $image_right_content_button['url']; ?>" target="<?php echo $image_right_content_button['target']; ?>"><?php echo $image_right_content_button['title']; ?></a>
				<?php } ?>

				</div>
			</div>
			<div class="col-sm-12 col-md-6">
			<?php $image_right_content_image = get_sub_field( 'image_right_content_image' ); ?>
			<?php if ( $image_right_content_image ) { ?>
				<div class="image-block">
					<?php $image_right_content_image_link = get_sub_field( 'image_right_content_image_link' ); ?>
					<?php if ( $image_right_content_image_link ) { 
						$image_right_content_image_link_url = $image_right_content_image_link['url']; ?>
						<a href="<?php echo esc_url( $image_right_content_image_link_url ); ?>"><img src="<?php echo $image_right_content_image['url']; ?>" alt="<?php echo $image_right_content_image['alt']; ?>"  class="img-fluid" /></a>
					<?php } else { ?>
						<img src="<?php echo $image_right_content_image['url']; ?>" alt="<?php echo $image_right_content_image['alt']; ?>"  class="img-fluid" />
					<?php } ?>				
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
</section>
<?php }elseif($content_layout_workforce=="workforcelistcontet"){ ?>
<section class="modern-workforce image-pattern workforcelistcontet" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12 col-md-6 workforcelistcontet-text">
				<div class="section-title text-start <?php echo $class_fontstyle; ?>">
					<span><?php the_sub_field( 'image_right_content_heading' ); ?></span>
					<h2><?php the_sub_field( 'image_right_content_title' ); ?></h2>
				</div>
				<div class="list-dots">
					<?php the_sub_field( 'image_right_content' ); ?>
				<?php $image_right_content_button = get_sub_field( 'image_right_content_button' ); ?>
				<?php if ( $image_right_content_button ) { ?>
					<div class="btn_workforcelistcontet"><a style="margin-top:30px;" class="btn btn-primary" href="<?php echo $image_right_content_button['url']; ?>" target="<?php echo $image_right_content_button['target']; ?>"><?php echo $image_right_content_button['title']; ?></a></div>
				<?php } ?>
				</div>
			</div>
			<div class="col-sm-12 col-md-6  workforcelistcontet-img">
		<?php $image_right_content_image = get_sub_field( 'image_right_content_image' ); ?>
			<?php if ( $image_right_content_image ) { ?>
				<div class="image-block">
					<div class="image">
						<?php $image_right_content_image_link = get_sub_field( 'image_right_content_image_link' ); ?>
						<?php if ( $image_right_content_image_link ) { 
							$image_right_content_image_link_url = $image_right_content_image_link['url']; ?>
							<a href="<?php echo esc_url( $image_right_content_image_link_url ); ?>"><img src="<?php echo $image_right_content_image['url']; ?>" alt="<?php echo $image_right_content_image['alt']; ?>"  class="img-fluid" /></a>
						<?php } else { ?>
							<img src="<?php echo $image_right_content_image['url']; ?>" alt="<?php echo $image_right_content_image['alt']; ?>"  class="img-fluid" />
						<?php } ?>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
</section>
<?php }elseif($content_layout_workforce=="workforcedotcontet"){ ?>
<section class="sectionCl modern-workforce remove-img-pattern" id="<?php echo $gradient_color_banner_section_id; ?>">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-sm-12 col-md-6">
            <div class="section-title text-start <?php echo $class_fontstyle; ?>">
				<span><?php the_sub_field( 'image_right_content_heading' ); ?></span>
				<h2><?php the_sub_field( 'image_right_content_title' ); ?></h2>
            </div>
            <div class="list-dots">
               <?php the_sub_field( 'image_right_content' ); ?>
			   	<?php $image_right_content_button = get_sub_field( 'image_right_content_button' ); ?>
				<?php if ( $image_right_content_button ) { ?>
					<div class="btn_workforcelistcontet"><a style="margin-top:30px;" class="btn btn-primary" href="<?php echo $image_right_content_button['url']; ?>" target="<?php echo $image_right_content_button['target']; ?>"><?php echo $image_right_content_button['title']; ?></a></div>
				<?php } ?>
            </div>
         </div>
		 <?php $image_right_content_image = get_sub_field( 'image_right_content_image' ); ?>
			<?php if ( $image_right_content_image ) { ?>
         <div class="col-sm-12 col-md-6">
            <div class="image-block">
               <div class="image">                  
				   <?php $image_right_content_image_link = get_sub_field( 'image_right_content_image_link' ); ?>
				   <?php if ( $image_right_content_image_link ) { 
						$image_right_content_image_link_url = $image_right_content_image_link['url']; ?>
				   		<a href="<?php echo esc_url( $image_right_content_image_link_url ); ?>"><img src="<?php echo $image_right_content_image['url']; ?>" alt="<?php echo $image_right_content_image['alt']; ?>"  class="img-fluid" /></a>
				   <?php } else { ?>
				   		<img src="<?php echo $image_right_content_image['url']; ?>" alt="<?php echo $image_right_content_image['alt']; ?>"  class="img-fluid" />
				   <?php } ?>
               </div>
            </div>
         </div>
		 <?php } ?>
      </div>
   </div>
</section>

<?php } ?>