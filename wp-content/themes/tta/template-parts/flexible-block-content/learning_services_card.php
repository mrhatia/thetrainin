<?php

$explore_services_button = get_sub_field('explore_services_button');

if ($explore_services_button) {
    $button_url = $explore_services_button['url'];
    $button_title = $explore_services_button['title'];
    $button_target = $explore_services_button['target'] ? $explore_services_button['target'] : '_self';
}
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
             <?php if ($explore_services_button) : ?>
                <div class="bottom-button-wrapper">
                    <a class="view-btn-bottom" href="<?php echo esc_url($button_url); ?>"
                        target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?> <img
                            src="<?php echo get_template_directory_uri(); ?>/images/new-home-images/icon-img.svg"
                            alt=""></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php }; ?>