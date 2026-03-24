<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>

<?php if ( have_rows( 'block_settings_control_blog_post_card' ) ) : 
		while ( have_rows( 'block_settings_control_blog_post_card' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_blog_post_card' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'blog_post_card_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="blog-post-card" id="<?php echo $gradient_color_banner_section_id; ?>">
		<div class="container">
			<div class="section-title <?php echo $class_fontstyle; ?>">
				<span><?php the_sub_field( 'blog_post_card_heading' ); ?></span>
				<h2><?php the_sub_field( 'blog_post_card_title' ); ?></h2>
			</div>
			<div class="row justify-content-center">
			<?php $post_objects = get_sub_field( 'blog_post_card_select_blog' ); ?>
			<?php if ( $post_objects ): ?>
				<?php foreach ( $post_objects as $post ):  ?>
					<?php setup_postdata( $post ); ?>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="postcard">
						<div class="row">
						 
							<div class="col-sm-12 col-md-4">
								<div class="img">
									 <?php if ( has_post_thumbnail($post->ID) ){   
									$image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-blog-card');
									$image = $image[0]; ?>
									 <img src="<?php echo $image; ?>" alt="home-banner" class="img-fluid"/>
								<?php }else{  ?>
								  <img src="<?php echo get_template_directory_uri(); ?>/images/postcard2.jpg" alt="home-banner" class="img-fluid">	
								<?php } ?>

								</div>
								
							</div>
							<div class="col-sm-12 col-md-8">
								<div class="detail">
										<div class="dt_text match" data-mh="dt_text"><?php the_excerpt(); ?></div>
									<a href="<?php the_permalink(); ?>">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			</div>
		</div>
	</section>