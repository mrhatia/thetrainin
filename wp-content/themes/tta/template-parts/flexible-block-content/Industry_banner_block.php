<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	

<section class="industry-banner-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/industry-banner.png');">
	<div class="container">
		<div class="banner-detail">
		
			<?php if(get_sub_field('banner_header_title')) { ?>
				<div class="main-title">
					<h1><?php the_sub_field( 'banner_header_title' ); ?></h1>
				</div>
			<?php } ?>
			<?php if(get_sub_field('banner_header_sub_title')) { ?>
				<div class="sub-title">
					<h2><?php the_sub_field( 'banner_header_sub_title' ); ?></h2>
				</div>
			<?php } ?>
			<?php if(get_sub_field('banner_header_content')) { ?>
				<div class="content">
					<?php the_sub_field( 'banner_header_content' ); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</section>