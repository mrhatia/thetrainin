


<?php 
$heading = get_sub_field('heading');
$text = get_sub_field('text');
$repeater_card = get_sub_field('repeater_card');
$bottom_line_text = get_sub_field('bottom_line_text');
$bg_image = get_sub_field('background_image'); // optional if you add
?>

<section class="vetted-section"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/industry-banner.png');">
    
    <div class="wrapper">
        <div class="vetted-section-main">
            
            <div class="vetted-content">
                <div class="vetted-content-inner">

                    <?php if (!empty($heading)) { ?>
                        <h2><?php echo $heading; ?></h2>
                    <?php } ?>

                    <?php if (!empty($text)) { ?>
                        <p><?php echo $text; ?></p>
                    <?php } ?>

                </div>
            </div>

            <div class="vetted-slider">
                <div class="slider-shell" id="peekSlider">

                    <div class="slider">
                        <div class="slider-inner">
                            <div class="slider-track">

                                <?php if (have_rows('repeater_card')): ?>
                                    <?php while (have_rows('repeater_card')): the_row(); 
                                        
                                        $card_title = get_sub_field('card_title');
                                        $sub_title = get_sub_field('sub_title');
                                        $card_text = get_sub_field('text'); // description
                                    ?>

                                        <div class="vetted-item">
                                            <div class="vetted-item-head">
                                                <?php if (!empty($card_title)) { ?>
                                                    <h3><?php echo $card_title; ?></h3>
                                                <?php } ?>

                                                <?php if (!empty($sub_title)) { ?>
                                                    <h4><?php echo $sub_title; ?></h4>
                                                <?php } ?>
                                            </div>

                                            <?php if (!empty($card_text)) { ?>
                                                <div class="vetted-item-content">
                                                    <?php echo $card_text; ?>
                                                 </div>
                                            <?php } ?>
                                        </div>

                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>

                    <div class="slider-header">
                        <div class="slider-header-controls">
                            <button class="arrow-btn" data-dir="prev" aria-label="Previous slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/slider-arrow-left.svg" alt="">
                            </button>
                            <button class="arrow-btn" data-dir="next" aria-label="Next slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/slider-arrow-right.svg" alt="">
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="vetted-bottom-text">
            <?php if (!empty($bottom_line_text)) { ?>
                <p><?php echo $bottom_line_text; ?></p>
            <?php } ?>
        </div>

    </div>
</section>


<script>
    (function () {
        const shell = document.getElementById("peekSlider");
        const track = shell.querySelector(".slider-track");
        const btnPrev = shell.querySelector('[data-dir="prev"]');
        const btnNext = shell.querySelector('[data-dir="next"]');

        let slides = Array.from(track.children); // originals
        const slideCount = slides.length;

        // Clone first and last for infinite effect
        const firstClone = slides[0].cloneNode(true);
        const lastClone = slides[slides.length - 1].cloneNode(true);
        firstClone.classList.add("clone");
        lastClone.classList.add("clone");
        track.insertBefore(lastClone, slides[0]);
        track.appendChild(firstClone);

        slides = Array.from(track.children); // now includes clones

        let currentIndex = 1; // start at first real slide
        let slideWidth = getSlideWidth();
        let isAnimating = false;

        function getSlideWidth() {
            const slide = slides[0];
            const styles = window.getComputedStyle(slide);
            const width = slide.offsetWidth;
            const marginRight = parseFloat(styles.marginRight || 0);
            return width + marginRight;
        }

        function updateTrackPosition(animate = true) {
            if (!animate) {
                track.style.transition = "none";
            } else {
                track.style.transition = `transform var(--transition-speed) ease`;
            }
            const offset = -currentIndex * slideWidth;
            track.style.transform = `translateX(${offset}px)`;
        }

        function goTo(index) {
            if (isAnimating) return;
            isAnimating = true;
            currentIndex = index;
            updateTrackPosition(true);
        }

        btnNext.addEventListener("click", () => {
            goTo(currentIndex + 1);
        });

        btnPrev.addEventListener("click", () => {
            goTo(currentIndex - 1);
        });

        track.addEventListener("transitionend", () => {
            // handle looping when we hit a clone
            if (slides[currentIndex].classList.contains("clone")) {
                if (currentIndex === slides.length - 1) {
                    currentIndex = 1;           // cloned first -> real first
                } else if (currentIndex === 0) {
                    currentIndex = slideCount;  // cloned last -> real last
                }
                updateTrackPosition(false);
            }
            isAnimating = false;
        });

        // keep widths correct on resize
        window.addEventListener("resize", () => {
            slideWidth = getSlideWidth();
            updateTrackPosition(false);
        });

        // Simple swipe support
        let startX = 0;
        let isDragging = false;

        track.addEventListener("touchstart", (e) => {
            startX = e.touches[0].clientX;
            isDragging = true;
        }, { passive: true });

        track.addEventListener("touchend", (e) => {
            if (!isDragging) return;
            isDragging = false;
            const endX = e.changedTouches[0].clientX;
            const delta = endX - startX;
            const threshold = 40;
            if (delta > threshold) {
                goTo(currentIndex - 1);
            } else if (delta < -threshold) {
                goTo(currentIndex + 1);
            }
        });

        // Initial position
        updateTrackPosition(false);
    })();
</script>