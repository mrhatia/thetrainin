<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'add_content_slider' ) ) : ?>
<section class="image-text-slider-section default-bottom-padding">
    <div class="container">
        <div class="image-text-slider-sec-inner">
            <div class="image-text-slider">
				<?php while ( have_rows( 'add_content_slider' ) ) : the_row(); ?>
                <div class="item">
					<?php $content_with_image_slider_image = get_sub_field( 'content_with_image_slider_image' ); ?>
					<?php if ( $content_with_image_slider_image ) { ?>
                    <div class="image-text-slider-img" style="background-image: url(<?php echo $content_with_image_slider_image['url']; ?>)">

                    </div>
					<?php } ?>
                    <div class="image-text-nav">
                        <button class="image-text-slider-next slick-arrownp">Next ></button>
                        <button class="image-text-slider-prev slick-arrownp">Prev ></button>
                    </div>
                    <div class="image-text-slider-caps">
                        <?php the_sub_field( 'content_with_image_slider_content' ); ?>
                    </div>
                </div>
				<?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>