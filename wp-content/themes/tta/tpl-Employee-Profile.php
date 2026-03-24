<?php
/**
 * Template Name: Employee Profile Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
**/

get_header();
?>
<?php if ( have_rows( 'employee_profile_content' ) ): ?>
	<?php while ( have_rows( 'employee_profile_content' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'employee_profile_banner_block' ) : ?>
	<section class="main-banner employee-banner">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6">
				<?php $employee_profile_banner_image = get_sub_field( 'employee_profile_banner_image' ); ?>
					<?php if ( $employee_profile_banner_image ) { ?>
					<div class="banner-img">
						<div class="image">
						<img src="<?php echo $employee_profile_banner_image['url']; ?>" alt="<?php echo $employee_profile_banner_image['alt']; ?>" class="img-fluid" />
						</div>
					</div>
				<?php } ?>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
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

			<div class="down-arrow">
				<a href="#call-to-section">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M6 13L12 18L18 13" stroke="#323A45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path opacity="0.4" d="M6 6L12 11L18 6" stroke="#323A45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>					
				</a>
			</div>
		</div>
	</section>
<?php elseif ( get_row_layout() == 'employee_profile_photo_gallery' ) : ?>
	<!-- content start -->
	<div class="content clearfix">
		<section class="get-know">
			<div class="container">
				<div class="section-title text-start">
					<h2><?php the_sub_field( 'employee_profile_gallery_heading' ); ?></h2>
				</div>
			</div>
	<?php $employee_profile_gallery_image_images = get_sub_field( 'employee_profile_gallery_image' ); ?>
			<div class="get-slider">
			<?php if ( $employee_profile_gallery_image_images ) :  ?>
				<?php foreach ( $employee_profile_gallery_image_images as $employee_profile_gallery_image_image ): ?>
				<div class="get-item">
					<a href="<?php echo $employee_profile_gallery_image_image['url']; ?>" data-fancybox="gallery" ><img class="img-fluid" src="<?php echo $employee_profile_gallery_image_image['url']; ?>" alt="<?php echo $employee_profile_gallery_image_image['alt']; ?>" /></a>
				</div>
		<?php endforeach; ?>
			<?php endif; ?>
			</div>
		</section>
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
get_footer(); ?>
