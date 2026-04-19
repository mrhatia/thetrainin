<?php if (get_row_layout() == 'ttas_testimonial_section') { ?>
    <section class="tts-testimonial-section">
        <div class="container">
				<div class="tta-head0">
						<?php
                                        $ttahead = get_sub_field('ttas_testimonial_heading');
                                        if ($ttahead) {
                                        ?>
                                            <h2 class="tta-head"><?php echo $ttahead ?></h2>
                        <?php } ?>
				</div>
            <div class="tts-testimonial-wrapper">
				
                <div class="tts-quote">
                    <?php
                    $image = get_sub_field('tta_image');
                    if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <?php if (have_rows('tta_repeater')) : ?>
                    <div class="tts-slider">
                        <div class="tts-track">
                            <?php while (have_rows('tta_repeater')) : the_row(); ?>
                                <div class="tts-slide">

                                    <?php
                                    $tta_description = get_sub_field('tta_description');
                                    if ($tta_description) {
                                    ?>

                                        <p class="tts-text"><?php echo $tta_description ?></p>
                                    <?php } ?>

                                    <div class="tts-author-text">
                                        <?php
                                        $tta_title = get_sub_field('tta_title');
                                        if ($tta_title) {
                                        ?>
                                            <h4 class="tts-author"><?php echo $tta_title ?></h4>
                                        <?php } ?>
                                        <?php
                                        $tta_designation = get_sub_field('tta_designation');
                                        if ($tta_designation) {
                                        ?>
                                            <span class="tts-company"><?php echo $tta_designation ?></span>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="tts-dots">
                            <span class="tts-dot active"></span>
                            <span class="tts-dot"></span>
                            <span class="tts-dot"></span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php 
    $logo_image = get_sub_field('logo_image');
    $logo_title = get_sub_field('logo_title');
    $sub_title = get_sub_field('sub_title');
    ?>
    <?php if($logo_title || $sub_title || $logo_image){ ?>
        <section class="tt_lago" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/new-home-images/bg-tt.png');">
            <div class="container">
                <div class="tt-wrapper">
                    <div class="tt-lago">
                        <?php
                        if (!empty($logo_image)): ?>
                            <img src="<?php echo esc_url($logo_image['url']); ?>" alt="<?php echo esc_attr($logo_image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="tt_content">
                        <?php if (!empty(get_sub_field('logo_title')) || !empty(get_sub_field('sub_title'))) { ?>
                            <p><?php the_sub_field('logo_title') ?> <span><?php the_sub_field('sub_title') ?></span></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
<?php } ?>