<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */

?>

<?php 
$banner_header_title = get_sub_field('banner_header_title');
$banner_header_text = get_sub_field('banner_header_text');
$banner_header_button = get_sub_field('banner_header_button');
$banner_header_label = get_sub_field('banner_header_label');

?>

<section class="talent-banner-section"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/industry-banner.png');">

    <div class="container">
        <div class="banner-wrapper">

            <!-- LEFT CONTENT -->
            <div class="banner-detail-content">

                <?php if (!empty($banner_header_title)) { ?>
                <h1>
                    <?php echo $banner_header_title; ?>
                </h1>
                <?php } ?>

                <?php if (!empty($banner_header_text)) { ?>
                <p>
                    <?php echo $banner_header_text; ?>
                </p>
                <?php } ?>

                <?php if (!empty($banner_header_button)) { 
                    $btn_url = $banner_header_button['url'];
                    $btn_title = $banner_header_button['title'];
                    $btn_target = $banner_header_button['target'] ? $banner_header_button['target'] : '_self';
                ?>
                <a class="view-btn-bottom" href="<?php echo esc_url($btn_url); ?>"
                    target="<?php echo esc_attr($btn_target); ?>">
                    <?php echo esc_html($btn_title); ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/new-home-images/icon-img.svg" alt="">
                </a>
                <?php } ?>

            </div>

            <!-- RIGHT CARDS -->
            <div class="banner-cards" id="talentSlider">

                <?php if (have_rows('banner_header_cards')): ?>
                <?php while (have_rows('banner_header_cards')): the_row(); 
                        
                        $image = get_sub_field('image');
                        $icon = get_sub_field('icon');
                        // $icon_label = get_sub_field('icon_label');
                        $name = get_sub_field('name');
                        $designation = get_sub_field('designation');
                    ?>

                <div class="card">
                    <div class="card-inner">

                        <div class="card-inner-image">

                            <?php if (!empty($image)) { ?>
                            <img src="<?php echo esc_url($image); ?>">
                            <?php } ?>

                            <?php if (!empty($icon)) { ?>
                            <div class="card-inner-logo">
                                <img src="<?php echo esc_url($icon); ?>">
                            </div>
                            <?php } ?>

                        </div>

                        <?php if (!empty($name)) { ?>
                        <h4>
                            <?php echo $name; ?>
                        </h4>
                        <?php } ?>

                        <?php if (!empty($designation)) { ?>
                        <span>
                            <?php echo $designation; ?>
                        </span>
                        <?php } ?>



                        <p>Previously worked with:</p>
                        <?php if (have_rows('logos')): ?>
                        <div class="logos">
                            <?php while (have_rows('logos')): the_row(); 
                                            $car_logo = get_sub_field('logo');
                                        ?>
                            <?php if (!empty($car_logo)) { ?>
                            <img src="<?php echo esc_url($car_logo); ?>">
                            <?php } ?>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>

                <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>

        <!-- LOGOS -->
        <div class="trusted-logos">

            <?php if (!empty($banner_header_label)) { ?>
            <span>
                <?php echo $banner_header_label; ?>
            </span>
            <?php } ?>

            <?php if (have_rows('banner_header_logos')): ?>
            <div class="logos-row">
                <?php while (have_rows('banner_header_logos')): the_row(); 
                        $banner_logo = get_sub_field('logo');
                    ?>
                <?php if (!empty($banner_logo)) { ?>
                <img src="<?php echo esc_url($banner_logo); ?>">
                <?php } ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>

        </div>

    </div>
</section>


<script>
    const cards = document.querySelectorAll("#talentSlider .card");

    let currentIndex = 0;

    function updateCards() {
        const total = cards.length;

        cards.forEach((card, i) => {
            card.className = "card";

            // circular distance from center
            let diff = (i - currentIndex + total) % total;

            if (diff === 0) {
                card.classList.add("center");
            } else if (diff === 1) {
                card.classList.add("right");
            } else if (diff === total - 1) {
                card.classList.add("left");
            } else {
                card.classList.add("hidden");
            }
        });
    }

    function rotate() {
        currentIndex = (currentIndex + 1) % cards.length;
        updateCards();
    }

    updateCards();
    setInterval(rotate, 4000);
</script>