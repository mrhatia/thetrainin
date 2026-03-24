<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TTA
 */
get_header();
while ( have_posts() ) :
the_post();
 ?>
 
 <?php if ( have_rows( 'employee_profile_content' ) ): ?>
	<?php while ( have_rows( 'employee_profile_content' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'employee_profile_banner_block' ) : ?>
		<section class="main-banner employee-banner single-team__banner" >
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6 single-banner-image">
				<?php $employee_profile_banner_image = get_sub_field( 'employee_profile_banner_image' ); ?>
					<?php if ( $employee_profile_banner_image ) { ?>
					<div class="banner-img">
						<div class="image">
						<img src="<?php echo $employee_profile_banner_image['url']; ?>" alt="<?php echo $employee_profile_banner_image['alt']; ?>" class="img-fluid" />
						</div>
					</div>
				<?php } ?>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 single-banner-content">
					<div class="banner-detail">
						<div class="main-title">
							<h1><?php the_sub_field( 'employee_profile_banner_heading' ); ?></h1>
						</div>
						<div class="top-label">
							<?php the_sub_field( 'employee_profile_banner_title' ); ?>
						</div>
						<h5><?php the_sub_field( 'employee_profile_banner_text' ); ?></h5>
						<div class="text-block-list">
							<?php the_sub_field( 'employee_profile_banner_list_strengths' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php elseif ( get_row_layout() == 'employee_profile_photo_gallery' ) : ?>
	<!-- content start -->
	<!-- content start -->
	<div class="content clearfix">
	
	
		<section class="get-know">
			<div class="container">
				<div class="section-title text-start">
					<h2><?php the_sub_field( 'employee_profile_gallery_heading' ); ?></h2>
				</div>
			</div>
			
			<?php $employee_profile_gallery_image_images = get_sub_field( 'employee_profile_gallery_image' ); ?>

			<div class="loop owl-carousel owl-theme hide_on_mobile">
				<?php if ( $employee_profile_gallery_image_images ) :  ?>
					<?php foreach ( $employee_profile_gallery_image_images as $employee_profile_gallery_image_image ): ?>
					<div class="item">
						<a href="<?php echo $employee_profile_gallery_image_image['url']; ?>" data-fancybox="gallery"><img  class="img-fluid" src="<?php echo $employee_profile_gallery_image_image['url']; ?>" alt="<?php echo $employee_profile_gallery_image_image['alt']; ?>" /></a>
					</div>
				<?php endforeach; ?>
				<?php endif; ?>
			</div>

			<div class="grid_layout">
				<?php if ( $employee_profile_gallery_image_images ) :  ?>
					<?php foreach ( $employee_profile_gallery_image_images as $employee_profile_gallery_image_image ): ?>
					<div class="grid_ip">
						<a href="<?php echo $employee_profile_gallery_image_image['url']; ?>" data-fancybox="gallery"><img  class="img-fluid" src="<?php echo $employee_profile_gallery_image_image['url']; ?>" alt="<?php echo $employee_profile_gallery_image_image['alt']; ?>" /></a>
					</div>
				<?php endforeach; ?>
				<?php endif; ?>
			</div>

			</div>
		</section>  
		
		<?php /*
		<section class="get-know">
			<div class="container">
				<div class="section-title text-start">
					<h2><?php the_sub_field( 'employee_profile_gallery_heading' ); ?></h2>
				</div>
			</div>
	<?php $employee_profile_gallery_image_images = get_sub_field( 'employee_profile_gallery_image' ); ?>

			<div class="loop owl-carousel owl-theme">
				<?php if ( $employee_profile_gallery_image_images ) :  ?>
					<?php foreach ( $employee_profile_gallery_image_images as $employee_profile_gallery_image_image ): ?>
					<div class="item">
						<a href="<?php echo $employee_profile_gallery_image_image['url']; ?>" data-fancybox="gallery"><img  class="img-fluid" src="<?php echo $employee_profile_gallery_image_image['url']; ?>" alt="<?php echo $employee_profile_gallery_image_image['alt']; ?>" /></a>
					</div>
				<?php endforeach; ?>
				<?php endif; ?>
			</div>

			</div>
		</section> */?>
<?php elseif ( get_row_layout() == 'employee_profile_content' ) : ?>
		<section class="get-content">
			<div class="container">
		<?php if ( have_rows( 'employee_profile_short_content' ) ) : ?>
				<?php while ( have_rows( 'employee_profile_short_content' ) ) : the_row(); ?>
				<div class="content-block">
						<?php the_sub_field( 'employee_profile_short_text' ); ?>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</section>
	</div>
	<!-- content end -->
<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>	

 <?php
endwhile; // End of the loop.
get_footer();