<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>


<section class="sectionCl light-color-box_main">
    <div class="container">

            <div class="light-color-box">
                <div class="row">
                    <div class="col-sm-12 col-md-6 light_lp_box">
                        <h2><?php the_sub_field( 'learning_strategies_cta_title_one' ); ?></h2>
                        <p><?php the_sub_field( 'learning_strategies_cta_sub_text_one' ); ?></p>
						<?php $learning_strategies_cta_button_link_one = get_sub_field( 'learning_strategies_cta_button_link_one' ); ?>
							<?php if ( $learning_strategies_cta_button_link_one ) { ?>
								<a class="btn btn-primary" href="<?php echo $learning_strategies_cta_button_link_one['url']; ?>" target="<?php echo $learning_strategies_cta_button_link_one['target']; ?>"><?php echo $learning_strategies_cta_button_link_one['title']; ?></a>
							<?php } ?>
                    </div>
                    <div class="col-sm-12 col-md-6 light_rp_box">
                        <h2><?php the_sub_field( 'learning_strategies_cta_title_two' ); ?></h2>
                        <p><?php the_sub_field( 'learning_strategies_cta_sub_text_two' ); ?></p>
						<?php $learning_strategies_cta_button_link_two = get_sub_field( 'learning_strategies_cta_button_link_two' ); ?>
						<?php if ( $learning_strategies_cta_button_link_two ) { ?>
							<a class="btn btn-primary" href="<?php echo $learning_strategies_cta_button_link_two['url']; ?>" target="<?php echo $learning_strategies_cta_button_link_two['target']; ?>"><?php echo $learning_strategies_cta_button_link_two['title']; ?></a>
						<?php } ?>
   
                    </div>
                </div>
            </div>

    </div>
</section>