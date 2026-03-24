<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
	 <section class="award-by-img" >
	<div class="container">
			<div class="section-title ">
				<span><?php the_sub_field( 'award_desktop_heading' ); ?></span>
				<h2><?php the_sub_field( 'award_desktop_sub_title' ); ?></h2>
			</div>
				<div class="row">
					<div class="col-sm-12 col-md-12">
					<?php $award_desktop_image = get_sub_field( 'award_desktop_image' ); ?>
			<?php if ( $award_desktop_image ) { ?>
				<img src="<?php echo $award_desktop_image['url']; ?>" alt="<?php echo $award_desktop_image['alt']; ?>"  class="img-fluid d-none d-sm-block" />
			<?php } ?>
		<?php $award_mobile_image = get_sub_field( 'award_mobile_image' ); ?>
			<?php if ( $award_mobile_image ) { ?>
				<img src="<?php echo $award_mobile_image['url']; ?>" alt="<?php echo $award_mobile_image['alt']; ?>"  class="img-flui d-balck d-sm-none" />
			<?php } ?>

							</div>
					
								</div>
					</div>
</section>	
