<?php
if (!defined('ABSPATH')) exit;

$titlePrefix = get_sub_field('title_prefix');
$title = get_sub_field('title');
$titleSufix = get_sub_field('title_sufix');
$sub_title = get_sub_field('sub_title');
$design_variation = get_sub_field('design_variation');
?>

<?php if($design_variation === 'design-two'){ ?>
    <section class="case_studies_section case-studies-design-two">
        <div class="">
            <div class="slick-slider-wrapper">
                <div class="container">
                    <?php if ($titlePrefix || $title || $titleSufix) : ?>
                    <div class="heading-wrapper">
                        <h2>
                            <?php if ($titlePrefix) : ?>
                            <span><?php echo ($titlePrefix); ?></span>
                            <?php endif; ?>
                                <span><?php echo ($title); ?></span>
                            <?php if ($titleSufix) : ?>
                                <?php echo ($titleSufix); ?>
                            <?php endif; ?>
                        </h2>
                    </div>
                    <?php if($sub_title){ ?>
                        <div class="tta-sub-title">
                            <?php echo ($sub_title); ?>
                        </div>
                    <?php } ?>
                    <?php endif; ?>
                    <?php if (have_rows('case_studies')): ?>
                    <div class="tech-slider-section">
                        <div class="tech-slider-wrapper">
                            <div class="tech-slider">
                                <?php while (have_rows('case_studies')) : the_row();
                                        $cardStyle = get_sub_field('card_style');
                                        $cardImage = get_sub_field('case_study_image');
                                        $cardSubHeading = get_sub_field('sub_title');
                                        $cardHeading = get_sub_field('heading');
                                        $cardDescription = get_sub_field('card_short_description');
                                        $cardLogo = get_sub_field('card_logo');
                                        $cardReadMoreContent = get_sub_field('read_more_content');
                                        $seeMoreButton = get_sub_field('see_more_case_studies_button');
                                        if ($seeMoreButton) {
                                            $button_url = $seeMoreButton['url'];
                                            $button_title = $seeMoreButton['title'];
                                            $button_target = $seeMoreButton['target'] ? $seeMoreButton['target'] : '_self';
                                        }
                                    ?>
                                <div class="tech-card <?php echo esc_html($cardStyle); ?>">
                                    <div class="tech-card-inner">
                                      
                                        <div class="tech-card-body">
                                            <div class="card-right-section">

                                                <?php if ($cardSubHeading) : ?>
                                                    <span><span><?php echo ($cardSubHeading); ?></span></span>
                                                <?php endif; ?>
                                                <?php if ($cardHeading) : ?>
                                                    <h3><?php echo ($cardHeading); ?></h3>
                                                <?php endif; ?>
                                                <?php if ($cardReadMoreContent) : ?>
                                                    <?php echo ($cardReadMoreContent); ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="card-left-section">
                                                <?php if ($cardImage) : ?>
                                                <img src="<?php echo esc_url($cardImage['url']); ?>"
                                                    alt="<?php echo esc_attr($cardImage['alt']); ?>" />
                                                <?php endif; ?>
                                                <?php if ($cardLogo) : ?>
                                                <img src="<?php echo esc_url($cardLogo['url']); ?>"
                                                    alt="<?php echo esc_attr($cardLogo['alt']); ?>" />
                                                <?php endif; ?>
                                                <?php if ($seeMoreButton) : ?>
                                                <a class="tech-btn" href="<?php echo esc_url($button_url); ?>"
                                                    target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/new-home-images/card-popup-btn-errow.svg"
                                                        alt="Button Icon"></a>
                                                <?php endif; ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php } else { ?>

    <section class="staff-section case_studies_section case-studies-design-one">
        <div class="profile-card-outer">
            <div class="slick-slider-wrapper">
                <div class="container">
                    <?php if ($titlePrefix || $title || $titleSufix) : ?>
                    <div class="heading-wrapper">
                        <h2>
                            <?php if ($titlePrefix) : ?>
                            <span><?php echo ($titlePrefix); ?></span>
                            <?php endif; ?>
                            <?php echo ($title); ?>
                            <?php if ($titleSufix) : ?>
                            <span><?php echo ($titleSufix); ?></span>
                            <?php endif; ?>
                        </h2>
                    </div>
                    <?php endif; ?>
                    <?php if (have_rows('case_studies')): ?>
                    <div class="tech-slider-section">
                        <div class="tech-slider-wrapper">
                            <div class="tech-slider">
                                <?php while (have_rows('case_studies')) : the_row();
                                        $cardStyle = get_sub_field('card_style');
                                        $cardImage = get_sub_field('case_study_image');
                                        $cardSubHeading = get_sub_field('sub_title');
                                        $cardHeading = get_sub_field('heading');
                                        $cardDescription = get_sub_field('card_short_description');
                                        $cardLogo = get_sub_field('card_logo');
                                        $cardReadMoreContent = get_sub_field('read_more_content');
                                        $seeMoreButton = get_sub_field('see_more_case_studies_button');
                                        if ($seeMoreButton) {
                                            $button_url = $seeMoreButton['url'];
                                            $button_title = $seeMoreButton['title'];
                                            $button_target = $seeMoreButton['target'] ? $seeMoreButton['target'] : '_self';
                                        }
                                    ?>
                                <div class="tech-card <?php echo esc_html($cardStyle); ?>">
                                    <div class="tech-card-inner">
                                        <?php if ($cardImage) : ?>
                                        <div class="tech-card-header">
                                            <img src="<?php echo esc_url($cardImage['url']); ?>"
                                                alt="<?php echo esc_attr($cardImage['alt']); ?>" />
                                        </div>
                                        <?php endif; ?>
                                        <div class="tech-card-body">
                                            <?php if ($cardSubHeading) : ?>
                                            <span><span><?php echo ($cardSubHeading); ?></span></span>
                                            <?php endif; ?>
                                            <?php if ($cardHeading) : ?>
                                            <h3><?php echo ($cardHeading); ?></h3>
                                            <?php endif; ?>
                                            <?php if ($cardDescription) : ?>
                                            <p><?php echo ($cardDescription); ?></p>
                                            <?php endif; ?>
                                            <?php if ($cardReadMoreContent || $cardLogo) : ?>
                                            <div class="button-plus-logo">
                                                <?php if ($cardReadMoreContent) : ?>
                                                <a href="#" class="tech-btn">Read More <img
                                                        src="<?php echo get_template_directory_uri(); ?>/images/new-home-images/Icon.svg"
                                                        alt="Button Icon"></a>
                                                <?php endif; ?>
                                                <?php if ($cardLogo) : ?>
                                                <img class="logo-b" src="<?php echo esc_url($cardLogo['url']); ?>"
                                                    alt="<?php echo esc_attr($cardLogo['alt']); ?>">
                                                <?php endif; ?>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php if ($cardReadMoreContent) : ?>
                                    <div class="popup-content-card" style="display:none;">
                                        <div class="popup-inner">
                                            <div class="popup-text">
                                                <?php echo ($cardReadMoreContent); ?>
                                            </div>
                                            <div class="popup-image">
                                                <?php if ($cardImage) : ?>
                                                <img src="<?php echo esc_url($cardImage['url']); ?>"
                                                    alt="<?php echo esc_attr($cardImage['alt']); ?>" />
                                                <?php endif; ?>
                                                <?php if ($cardLogo) : ?>
                                                <img src="<?php echo esc_url($cardLogo['url']); ?>"
                                                    alt="<?php echo esc_attr($cardLogo['alt']); ?>" />
                                                <?php endif; ?>
                                                <?php if ($seeMoreButton) : ?>
                                                <a class="card-popup-btn" href="<?php echo esc_url($button_url); ?>"
                                                    target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/new-home-images/card-popup-btn-errow.svg"
                                                        alt="Button Icon"></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <?php endwhile; ?>
                            </div>
                            <div class="popup-overlay">
                                <div class="popup-box">
                                    <!-- X Close Button Add Kiya -->
                                    <button type="button" class="popup-close">&times;</button>
                                    <div class="popup-content"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
