<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>


<section class="blog-post-card blogandbrochure" id="<?php echo $gradient_color_banner_section_id; ?>">
		<div class="container">
			<div class="section-title <?php echo $class_fontstyle; ?>">
				
				<h2><?php the_sub_field( 'blog_section_title' ); ?></h2>
			</div>
			<div class="row justify-content-center blogpostsnew">
			<?php $post_objects = get_sub_field( 'blog_posts' ); ?>
			<?php if ( $post_objects ): ?>
				<?php foreach ( $post_objects as $post ):  ?>
					<?php setup_postdata( $post ); ?>
				<div class="postitem">
					<div class="postcard">
						
						 
							<div class="postimage">
								<a href="<?php the_permalink(); ?>">
									 <?php if ( has_post_thumbnail($post->ID) ){   
									$image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
									$image = $image[0]; ?>
									 <img src="<?php echo $image; ?>" alt="home-banner" class="img-fluid"/>
								<?php }else{  ?>
								  <img src="<?php echo get_template_directory_uri(); ?>/images/postcard2.jpg" alt="home-banner" class="img-fluid">	
								<?php } ?>

								</a>
								
							</div>
							<div class="postdetails">
								<?php $terms = get_the_terms($post->ID, 'category');
				 if($terms) : ?>
                    <div class="cat"><a href="<?php echo  $term_link = get_term_link($terms[0]);?>"><?php echo esc_html($terms[0]->name); ?> </a></div>
                <?php endif; ?>
										<div class="dt_text match" data-mh="dt_text"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
									
								
							
						</div>
					</div>
				</div>
<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			</div>
			 <a href="#" class="morebtn">See More Blog Posts</a>	
		</div>


		<div class="container boroucercontainer">
			<div class="section-title <?php echo $class_fontstyle; ?>">
				
				<h2><?php the_sub_field( 'brochures_title' ); ?></h2>
			</div>
			<div class="row justify-content-center blogpostsnew broucher">
			<?php $post_objects = get_sub_field( 'brochures' ); ?>
			<?php if ( $post_objects ): ?>
				<?php foreach ( $post_objects as $post ): 
					$image = $post['image'];
					$title = $post['title'];
					$category = $post['category'];
					$link = $post['link'];
					?>
					
				<div class="postitem">
					<div class="postcard">
						 
					<?php if($image){?>
						 
							<div class="postimage">
								<a href="<?php echo $link; ?>">
									
								  <img src="<?php echo $image['url']; ?>" alt="home-banner" class="img-fluid">	
							

								</a>
								
							</div>
							<?php }?>
							<div class="postdetails">
								<?php
				 if($category) : ?>
                    <div class="cat"><span><?php echo $category; ?></span></div>
                <?php endif; ?>
										<div class="dt_text match" data-mh="dt_text"><h3><a href="<?php echo $link; ?>"><?php echo $title; ?></a></h3></div>
									
								
							
						</div>
					</div>
				</div>
<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			</div>
			<a href="#" class="morebtn">See More Brochures</a>	
		</div>

	</section>