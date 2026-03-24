<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
  global $post, $cpts;
?>
<?php if ( have_rows( 'block_settings_control_blog_hme' ) ) : 
		while ( have_rows( 'block_settings_control_blog_hme' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_blog_hme' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'blog_hme_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<?php $blog_slider_layout= get_sub_field( 'blog_slider_layout' ); 
if( $blog_slider_layout=="simpleblog"){ ?>
<!-- help you -->
<section class="help-you" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="section-title <?php echo $class_fontstyle; ?>">
		<?php if(get_sub_field('blog_hme_heading')) { ?>
			<span><?php the_sub_field( 'blog_hme_heading' ); ?></span>
			<?php } ?>
			<?php if(get_sub_field('blog_hme_title')) { ?>
			<h2><?php the_sub_field( 'blog_hme_title' ); ?></h2>
			<?php } ?>
		</div>
		<?php if(get_sub_field('blog_hme_title')) { ?>
			<p><?php the_sub_field( 'blog_hme_sub_text' ); ?></p>
		<?php } ?>
		<?php 
			$post_objects = get_sub_field( 'blog_hme_select_blog' ); ?>
		<?php if ( $post_objects ): ?>
		<div class="help-slider">
		<?php foreach ( $post_objects as $post ):  ?>
				<?php setup_postdata( $post ); ?>
			<div class="help-item">
			<?php $term_obj_list = wp_get_post_terms( get_the_ID(), array( 'category', 'resource-category' ) );
				//$term_obj_list = get_the_terms( $post->ID, 'category' );
						$terms_string = join(', ', wp_list_pluck($term_obj_list, 'name')); ?>
			  <?php if ( has_post_thumbnail($post->ID) ){   
					$image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumb-home');
					$image = $image[0]; ?>
					<div class="how-can-help_image"><a target="_blank" href="<?php the_permalink(); ?>"> <img src="<?php echo $image; ?>" alt="home-banner" class="img-fluid"/><label><?php echo $terms_string; ?></label></a></div>
				<?php }else{  ?>
				 <div class="how-can-help_image">
					 <a target="_blank" href="<?php the_permalink(); ?>">
					 	<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/09/placeholder-250x250.jpg" alt="home-banner" class="img-fluid">
						 <label><?php echo $terms_string; ?></label>
					 </a>
				 </div>
				<?php } ?>

				<h6><a target="_blank" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
			</div>
		<?php endforeach; ?>
		</div>
		<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		<?php $blog_hme_link = get_sub_field( 'blog_hme_link' ); ?>
		<?php if ( $blog_hme_link ) { ?>
		<div class="see-more">
			<a class="link" href="<?php echo $blog_hme_link['url']; ?>" target="<?php echo $blog_hme_link['target']; ?>"><?php echo $blog_hme_link['title']; ?></a>
		</div>
		<?php } ?>
	</div>	
</section>
<!-- help you -->
<?php }else{ ?>
	<!-- help you -->
		<section class="help-you devlop-content" id="<?php echo $gradient_color_banner_section_id; ?>">
			<div class="container">
				<div class="section-title <?php echo $class_fontstyle; ?>">
				<?php if(get_sub_field('blog_hme_heading')) { ?>
					<span><?php the_sub_field( 'blog_hme_heading' ); ?></span>
					<?php } ?>
					<?php if(get_sub_field('blog_hme_title')) { ?>
					<h2><?php the_sub_field( 'blog_hme_title' ); ?></h2>
					<?php } ?>
				</div>
			</div>
		<?php if(get_sub_field('blog_hme_title')) { ?>
			<p><?php the_sub_field( 'blog_hme_sub_text' ); ?></p>
		<?php } ?>


				<?php $post_objects = get_sub_field( 'blog_hme_select_blog' ); ?>
				<?php if ( $post_objects ): ?>
					<div class="devlop-slider">
				<?php foreach ( $post_objects as $post ):  ?>
						<?php setup_postdata( $post ); ?>
					<div class="help-item">
					  <?php if ( has_post_thumbnail($post->ID) ){   
							$image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumb-home');
							$image = $image[0]; ?>
						<a target="_blank" href="<?php the_permalink(); ?>"> <img src="<?php echo $image; ?>" alt="home-banner" class="img-fluid"/><label><?php echo $terms_string; ?></label>
						<h6><?php the_title(); ?></h6>
						</a>
						<?php }else{  ?>
						 <a target="_blank" href="<?php the_permalink(); ?>">  <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/09/placeholder-250x250.jpg" alt="home-banner" class="img-fluid">	<label><?php echo $terms_string; ?></label>
						  <h6><?php the_title(); ?></h6></a>
						<?php } ?>

						
					</div>
				<?php endforeach; ?>
				</div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</section>
		<!-- help you -->
<?php } ?>