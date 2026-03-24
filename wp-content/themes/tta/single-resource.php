<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TTA
 */
get_header();
global $post; 
while ( have_posts() ) :
the_post();

 ?>

 	<section class="blog-top-banner ebook-top-title">
		 
		<div class="container">
			<div class="backlink-main text-left">
				<a href="<?php echo site_url(); ?>/our-resources" class="back-link">Back</a>
			</div>
			<div class="row">
			
				<div class="col-sm-12 col-md-2  d-md-block d-none">
					<img src="<?php echo get_template_directory_uri(); ?>/images/dots-5x6.svg" alt="banner" class="img-fluid">
				</div>
				<div class="col-sm-12 col-md-8">

					<div class="main-title text-center">
						<?php $term_obj_list = get_the_terms( $post->ID, 'resource-category' );
$terms_string = join(', ', wp_list_pluck($term_obj_list, 'name')); ?>
						<div class="top-label"><?php echo $terms_string; ?></div>
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
				
				<div class="col-sm-12 col-md-2  d-md-block d-none">
					<img src="<?php echo get_template_directory_uri(); ?>/images/dots-5x6.svg" alt="banner" class="img-fluid">
				</div>
			</div>
		</div>
	</section>
	
<?php if (  ( $post->post_type == 'resource' )  && has_term( 'videos', 'resource-category' )) { ?>
	<section class="ebook-two-col-block">
		<div class="container">
			<div class="container-1032">
				<div class="row">
					<div class="col-12 ebook-two-col-img-caps">
					
						<div class="ebook-two-col-img">
						<?php if(get_field( 'resource_video_link' )){ ?>
							<iframe src="<?php the_field( 'resource_video_link' ); ?>">
								</iframe>
								<?php } ?>
						</div>
						<?php the_content(); ?>
					</div>
					
				</div>
			</div>
		</div>
	</section>
<?php }else{ ?>
<section class="ebook-two-col-block">
		<div class="container">
			<div class="container-1032">
				<div class="row">
					<div class="col-6 ebook-two-col-img-caps">
					<?php $resource_image = get_field( 'resource_image' ); ?>
						<?php if ( $resource_image ) { ?>
							<img src="<?php echo $resource_image['url']; ?>" alt="<?php echo $resource_image['alt']; ?>" />
						<?php } ?>
						<div class="ebook-two-col-img">
							<img src="<?php echo $disp_img_box; ?>" alt="">
						</div>
						<?php the_content(); ?>
					</div>
					<div class="col-6">
						<div class="download-form-block">
							<div class="download-form">
								<h3>Download</h3>
								
								<?php the_field( 'resource_download_embed_code' ); ?>
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/bottom-dots.svg" alt="banner" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php } ?>
	<!-- content start -->
	<div class="content clearfix">
		<div class="blog-detail-main">
			<div class="container">
		
				<?php //the_content(); ?>
		
			</div>
		</div>
	</div>
	<!-- content end -->
 <?php
endwhile; // End of the loop.
get_footer();

