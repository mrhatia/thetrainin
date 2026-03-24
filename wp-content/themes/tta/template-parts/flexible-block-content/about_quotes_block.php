<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
		<section class="business-goal">
			<div class="container">
				<div class="row">
				<?php $about_quotes_image = get_sub_field( 'about_quotes_image' ); ?>
			<?php if ( $about_quotes_image ) { ?>
					<div class="col-sm-12 col-md-3">
						<div class="business-coma">
							<img src="<?php echo $about_quotes_image['url']; ?>" alt="<?php echo $about_quotes_image['alt']; ?>" class="img-fluid" />				
						</div>
					</div>
					<?php } ?>
					<div class="col-sm-12 col-md-9">
						<div class="business-detail">
							<h2><?php the_sub_field( 'about_quotes_content' ); ?></h2>
							<span><?php the_sub_field( 'about_quotes_author_name' ); ?></span>	
							<img src="<?php echo get_template_directory_uri(); ?>/images/business-pattern.png" alt="business-pattern" class="img-fluid">			
						</div>
					</div>
				</div>
			</div>
		</section>