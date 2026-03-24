<?php
?>
<?php if (get_row_layout() == 'source_talent_card') { ?>

    <div class="section-wrapper__card-grid">
        <div class="container">
            <div class="section-header">
                <?php if (!empty(get_sub_field('heading'))) { ?>
                    <h2 class="section-titles"><?php get_sub_field('heading') ?> Your One Source for Every L&D Talent</h2>
                <?php }; ?>
                <?php if (!empty(get_sub_field('text'))) { ?>
                    <p class="section-subtitle"><?php get_sub_field('text') ?>Find Your Next Expert</p>
                <?php }; ?>
            </div>

            <?php if (have_rows('repeater_card')): ?>
                <div class="card-grid">
                    <?php while (have_rows('repeater_card')) : the_row(); ?>
                        <div class="talent-card">
                            <?php
                            $link = get_sub_field('card_link');
                            if ($link): ?>
                                <a class="talent-cad-link" href="<?php echo esc_url($link); ?>"></a>
                            <?php endif; ?>
                            <div class="talent-icon">
                                <?php
                                $image = get_sub_field('image');
                                if (!empty($image)): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <?php $title = get_sub_field('title'); ?>
                            <div class="talent-title"><?php echo $title ?></div>
                        </div>
                    <?php endwhile ?>
                </div>
            <?php endif ?>
        </div>
    </div>
<?php }; ?>