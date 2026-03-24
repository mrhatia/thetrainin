<?php if (get_row_layout() == 'easy_step_section') { ?>
<section class="staff-section">
    <div class="flex-step-section">
        <div class="container">
            <?php if (!empty(get_sub_field('heading'))) { ?>
            <div class="step-section-heading">
                <h2><span><?php the_sub_field('heading') ?></span></h2>
            </div>
            <?php } ?>

            <?php if (have_rows('step_repeater')) : ?>
            <div class="steps">
                <?php while (have_rows('step_repeater')) : the_row(); ?>
                <div class="step">
                    <?php
                                $step_number = get_sub_field('step_number');
                                if ($step_number) {
                                ?>
                    <h3><?php echo $step_number ?></h3>
                    <?php } ?>
                    <?php
                                $step_title = get_sub_field('step_title');
                                if ($step_title) {
                                ?>
                    <h4><?php echo $step_title ?></h4>
                    <?php } ?>

                    <?php
                                $step_text = get_sub_field('step_text');
                                if ($step_text) {
                                ?>
                    <p><?php echo $step_text ?></p>
                    <?php } ?>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>

            <div class="bottom-item">
                <?php
                    $link = get_sub_field('button_link');
                    if ($link):
                        $url = $link['url'];
                        $title = $link['title'];
                        $target = $link['target'] ? $link['target'] : '_self';
                    ?>
                <a class="button staff-button" href="<?php echo esc_url($url); ?>"
                    target="<?php echo esc_attr($target); ?>"><?php echo esc_html($title); ?><img
                        src="<?php echo get_template_directory_uri(); ?>/images/new-home-images/icon-img.svg"
                        alt="Button Icon"></a>
                <?php endif; ?>
                <?php if (!empty(get_sub_field('button_bottom_text'))) { ?>
                <div class="staff-footer">
                    <?php the_sub_field('button_bottom_text') ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php }; ?>