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
$author_id = get_post_field( 'post_author', $post_id );
$display_name=get_the_author_meta('display_name', $author_id);
 ?>

 	<section class="blog-top-banner">
		<div class="container">
						
			<div class="row">
			
				<div class="col-sm-12 col-md-2  d-md-block d-none">
					<img src="<?php echo get_template_directory_uri(); ?>/images/menu-pattern.png" alt="banner" class="img-fluid">
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="section-title">
						<h1><?php echo get_the_title();?></h1>
					</div>
				<div class="date">  <?php //echo $display_name;?><!-- | --><?php echo get_the_date( 'F j, Y', get_the_ID() );?> </div>
				</div>
				<div class="col-sm-12 col-md-2  d-md-block d-none">
					<img src="<?php echo get_template_directory_uri(); ?>/images/menu-pattern.png" alt="banner" class="img-fluid">
				</div>
			</div>
		</div>
	</section>
	<!-- content start -->
	<div class="content clearfix">
		<div class="blog-detail-main">
			<div class="container">
		
				<?php the_content(); ?>
		
			</div>
		</div>
	</div>
	<!-- content end -->
 <?php
endwhile; // End of the loop.
get_footer();