<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<style>

</style>
<section class="tta-home-banner">
    <div class="container">
        <div class="cta-wrap">

            <!-- Headline -->
            <div class="hero-pad">
                <div class="eyebrow mb-3">
                    <?php if (get_sub_field('heading')) : ?>
                    <h1>
                        <?php the_sub_field('heading'); ?>
                    </h1>
                    <?php if (get_sub_field('white_heading')) : ?>
                    <h4 class="text-white"><?php the_sub_field('white_heading'); ?></h4>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>

                <?php if (get_sub_field('text')) : ?>
                <p class="lead text-white"><?php the_sub_field('text'); ?></p>
                <?php endif; ?>
            </div>

            <!-- Cards -->
            <div class="section-pad pt-0">
                <div class="row g-4">

                    <!-- Card 1 -->
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="card feature-card h-100">
                            <?php if ($left_img = get_sub_field('left_card_image')) : ?>
                            <div class="feature-media">
                                <img src="<?php echo esc_url($left_img); ?>"
                                    alt="<?php echo esc_attr(get_sub_field('left_card_title')); ?>" />
                            </div>
                            <?php endif; ?>

                            <div class="card-body text-center">
                                <?php if (get_sub_field('left_card_title')) : ?>
                                <h4 class="card-title mb-0"><?php the_sub_field('left_card_title'); ?></h4>
                                <?php endif; ?>

                                <?php if (get_sub_field('left_card_text')) : ?>
                                <p><?php the_sub_field('left_card_text'); ?></p>
                                <?php endif; ?>
                                <?php
								$left_btn = get_sub_field('left_card_button');

								if (!empty($left_btn) && !empty($left_btn['url'])) : ?>
                                <a href="<?php echo esc_url($left_btn['url']); ?>"
                                    target="<?php echo esc_attr($left_btn['target'] ?: '_self'); ?>"
                                    class="btn btn-white btn-pill btn-animated">
                                    <?php echo esc_html($left_btn['title']); ?>
                                    <svg width="30" height="35" viewBox="0 0 30 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.25 8.75L18.75 17.5L11.25 26.25" stroke="white" stroke-width="3.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="card feature-card h-100">
                            <?php if ($right_img = get_sub_field('right_card_image')) : ?>
                            <div class="feature-media">
                                <img src="<?php echo esc_url($right_img); ?>"
                                    alt="<?php echo esc_attr(get_sub_field('right_card_title')); ?>" />
                            </div>
                            <?php endif; ?>

                            <div class="card-body text-center">
                                <?php if (get_sub_field('right_card_title')) : ?>
                                <h4 class="card-title mb-0"><?php the_sub_field('right_card_title'); ?>
                                </h4>
                                <?php endif; ?>

                                <?php if (get_sub_field('right_card_text')) : ?>
                                <p><?php the_sub_field('right_card_text'); ?></p>
                                <?php endif; ?>
                                <?php
								$right_btn = get_sub_field('right_card_button');

								if (!empty($right_btn) && !empty($right_btn['url'])) : ?>
                                <a href="<?php echo esc_url($right_btn['url']); ?>"
                                    target="<?php echo esc_attr($right_btn['target'] ?: '_self'); ?>"
                                    class="btn btn-pill btn-white btn-animated right-btn">
                                    <?php echo esc_html($right_btn['title']); ?>
                                    <svg width="30" height="35" viewBox="0 0 30 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.25 8.75L18.75 17.5L11.25 26.25" stroke="white" stroke-width="3.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- /cards -->
        </div>
    </div>
</section>