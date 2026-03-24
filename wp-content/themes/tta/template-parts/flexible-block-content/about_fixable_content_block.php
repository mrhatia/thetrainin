<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'about_fixable_content' ) ) : ?>
		<?php while ( have_rows( 'about_fixable_content' ) ) : the_row(); ?>
		<?php $about_fixable_image_type = get_sub_field( 'about_fixable_image_type' ); 
			if($about_fixable_image_type=="aboutrightimage") { 
				$aboutrightimage ="";
			}else{ 
				$aboutrightimage ="left-image-sec";
				} ?>
		<section class="culture-sec <?php echo $aboutrightimage; ?>" data-scroll-index="5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6 culture-sec-col1">
						<div class="culture-detail">
							<div class="section-title text-start">
								<span><?php the_sub_field( 'about_fixable_heading' ); ?></span>
								<h2><?php the_sub_field( 'about_fixable_title' ); ?></h2>
							</div>
							<p><?php the_sub_field( 'about_fixable_short_content' ); ?></p>
							<?php $about_fixable_link = get_sub_field( 'about_fixable_link' ); ?>
							<?php if ( $about_fixable_link ) { ?>
								<a class="link" href="<?php echo $about_fixable_link['url']; ?>" target="<?php echo $about_fixable_link['target']; ?>"><?php echo $about_fixable_link['title']; ?></a>
							<?php } ?>
						</div>
					</div>
					<?php $about_fixable_image = get_sub_field( 'about_fixable_image' ); ?>
					<?php if ( $about_fixable_image ) { ?>
					<div class="col-sm-12 col-md-6  culture-sec-col2">
						<div class="culture-img text-center">
						<img src="<?php echo $about_fixable_image['url']; ?>" alt="<?php echo $about_fixable_image['alt']; ?>" class="img-fluid" />
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>