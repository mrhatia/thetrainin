<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>

<section class="sectionCl try-demo">
    <div class="container">
        
        <div class="row">
            <div class="col-md-6 try-demo-box">
                <div class="try-demo-shedow-box">
					<?php the_sub_field( 'try_demo_content' ); ?>
                    <div class="try-demo_form">
						<?php //the_sub_field( 'try_demo_from_short_code' ); ?>
                        <div class="try-demo_form-input"><input type="email" placeholder="Email Address *"></div>
                        <input type="submit" value="Schedule Demo" >
                    </div>
                </div>
            </div>
			<?php $try_demo_image = get_sub_field( 'try_demo_image' ); ?>
			<?php if ( $try_demo_image ) { ?>
            <div class="col-md-6 try-demo-image">
                <img src="<?php echo $try_demo_image['url']; ?>" alt="<?php echo $try_demo_image['alt']; ?>" />
            </div>
			<?php } ?>
        </div>

    </div>
</section>