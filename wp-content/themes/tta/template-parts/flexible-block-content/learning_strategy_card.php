
<?php if (get_row_layout() == 'learning_strategy_card') { ?>

    <div class="section-wrapper__card-grid learning-strategy-section">
        <div class="profile-card-outer">
            <div class="container">
                <div class="section-header">
                    <?php if (!empty(get_sub_field('heading'))) { ?>
                    <h2 class="section-titles"><?php echo get_sub_field('heading'); ?></h2>
                    <?php }; ?>
                    <?php if (!empty(get_sub_field('text'))) { ?>
                        <div class="content">
                            <p>
                                <?php echo get_sub_field('text'); ?>
                            </p>
                        </div>
                     <?php }; ?>
                </div>

                <?php if (have_rows('repeater_card')): ?>
                    <div class="card-grid">
                        <?php while (have_rows('repeater_card')) : the_row(); ?>
                            <div class="service-card">
                                
                                <?php $text = get_sub_field('text'); ?>
                                <div class="talent-text"><?php echo $text ?></div>
                            </div>
                        <?php endwhile ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
<?php }; ?>