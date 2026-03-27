<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */

$button_one = get_sub_field('button_one');
if ($button_one) {
	$button_one_url = $button_one['url'];
	$button_one_title = $button_one['title'];
	$button_one_target = $button_one['target'] ? $button_one['target'] : '_self';
}

$button_two = get_sub_field('button_two');
if ($button_two) {
    $button_two_url = $button_two['url'];
    $button_two_title = $button_two['title'];
    $button_two_target = $button_two['target'] ? $button_two['target'] : '_self';
}
?>	


<section class="section-footer-cta">
	<div class="footer-cta-outer" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/cta-bg.png');">
		<div class="cta-inner">
		
			<?php if(get_sub_field('title')) { ?>
				<div class="cta-title">
					<h1><?php the_sub_field( 'title' ); ?></h1>
				</div>
			<?php } ?>
			<?php if(get_sub_field('text')) { ?>
				<div class="cta-text">
					<p><?php the_sub_field( 'text' ); ?></p>
				</div>
			<?php } ?>
			<div class="cta-buttons-section">
				<!-- button two -->
				<?php if($button_one) { ?>
					<div class="button-one">
						<a class="view-btn-bottom" href="<?php echo esc_url($button_one_url); ?>"
							target="<?php echo esc_attr($button_one_target); ?>"><?php echo esc_html($button_one_title); ?> <img
								src="<?php echo get_template_directory_uri(); ?>/images/new-home-images/icon-img.svg"
								alt=""></a>
					</div>
				<?php } ?>
				<?php if($button_two) { ?>
					<div class="button-two">
						<a class="view-btn-bottom" href="<?php echo esc_url($button_two_url); ?>"
							target="<?php echo esc_attr($button_two_target); ?>"><?php echo esc_html($button_two_title); ?> <img
								src="<?php echo get_template_directory_uri(); ?>/images/new-home-images/icon-img.svg"
								alt=""></a>
					</div>
				<?php } ?>
				<!-- putout button end -->
			</div>
		</div>
	</div>
</section>