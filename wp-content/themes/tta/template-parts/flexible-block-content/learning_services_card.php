<?php

$explore_services_button = get_sub_field('explore_services_button');

?>
<?php if (get_row_layout() == 'learning_services_card') { ?>

    <div class="section-wrapper__card-grid learning-services-section">
        <div class="profile-card-outer">
            <div class="container">
                <div class="section-header">
                    <?php if (!empty(get_sub_field('heading'))) { ?>
                        <h2 class="section-titles"><?php echo get_sub_field('heading'); ?></h2>
                    <?php }; ?>
                </div>

                <?php if (have_rows('repeater_card')): ?>
                    <div class="card-grid">
                        <?php while (have_rows('repeater_card')) : the_row(); ?>
                            <div class="service-card">

                                <?php $title = get_sub_field('title'); ?>
                                <div class="talent-title"><?php echo $title ?></div>
                                <?php
                                    $link = get_sub_field('card_link');
                                    if ($link): ?>
                                        <a class="service-cad-link" href="<?php echo esc_url($link); ?>">Read More</a>
                                <?php endif; ?>
                            </div>
                        <?php endwhile ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
<?php }; ?>