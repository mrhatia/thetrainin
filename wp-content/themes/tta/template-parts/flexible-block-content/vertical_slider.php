<?php
$section_id       = 'sticky-features-' . wp_unique_id();
$gradient_heading = get_sub_field('gradiant_heading');
$simple_heading   = get_sub_field('simple_heading');
$rows             = get_sub_field('vertical_repeater');
?>

<style>
/* ============================================================
   STICKY FEATURES — Desktop sticky + Mobile accordion
   ============================================================ */

.slider-top-bottom {
    position: relative;
    overflow: visible;
}

.slider-top-bottom .container {
    overflow: visible;
}

/* ── DESKTOP GRID ──────────────────────────────────────────── */
.slider-top-bottom .services {
    display: grid;
    grid-template-columns: minmax(320px, 1fr) minmax(420px, 520px);
    gap: 80px;
    align-items: start;
    overflow: visible;
    padding: 0 40px;
}

/* ── LEFT COLUMN ───────────────────────────────────────────── */
.slider-top-bottom .services-left {
    position: relative;
    align-self: start;
    display: flex;
    flex-direction: column;
    gap: 45px;
    padding-top: 50vh;
    padding-bottom: 50vh;
}

.slider-top-bottom .service-step {
    display: flex;
    align-items: center;
    height: 5vh;
}

.slider-top-bottom .service-item {
    opacity: 0.3;
    transform: translateY(10px);
    transition: opacity 0.35s ease, transform 0.35s ease;
    cursor: pointer;
}

.slider-top-bottom .service-item.active {
    opacity: 1;
    transform: translateY(0);
}

.slider-top-bottom .service-item span {
    display: block;
    font-size: 30px;
    line-height: 1.05;
    font-weight: 600;
    background: linear-gradient(90deg, #3EB3E3, #3BE2A8);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 0 0 12px rgba(59, 226, 168, .4);
}

/* ── RIGHT COLUMN ──────────────────────────────────────────── */
.slider-top-bottom .services-right {
    position: relative;
    overflow: visible;
}

.slider-top-bottom .sticky-stage {
    position: sticky;
    top: 10vh;
    height: 80vh;
    display: flex;
    align-items: center;
    overflow: visible;
}

.slider-top-bottom .sticky-stage-inner {
    position: relative;
    width: 100%;
    max-width: 520px;
    min-height: 520px;
    margin-left: auto;
    border-radius: 24px;
    overflow: hidden;
}

/* ── DESKTOP CARDS ─────────────────────────────────────────── */
.slider-top-bottom .service-card {
    position: absolute;
    inset: 0;
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    /* transition: opacity 0.35s ease; */
}

.slider-top-bottom .service-card.active {
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
    z-index: 2;
    display: flex;
    align-items: flex-end;
}

.slider-top-bottom .service-card-inner {
    padding: 40px;
    border-radius: 20px;
    border: 1px solid #3EB3E3;
    background: linear-gradient(232deg, #3EB3E3 -10%, #fff 45%);
}

.slider-top-bottom .btn-card {
    margin-top: 24px;
}

.service-card p {
    font-size: 18px;
    line-height: 1.6;
    padding: 0 0 20px;
    color: #071020;
}

.btn-card {
    text-align: right;
}

.btn-card a {
    font-size: 18px;
    font-weight: 700;
    text-decoration: none;
    color: #3EB3E3;
}

/* ============================================================
   MOBILE ACCORDION (≤ 1024px)
   ============================================================ */
/* Extra large 1536px–1920px */
@media (min-width: 1700px) and (max-width: 1920px) {
    .slider-top-bottom .services-left {
        padding-top: 28vh;
        padding-bottom: 28vh;
    }
}

/* Ultra wide 1920px+ */
@media (min-width: 1920px) {
    .slider-top-bottom .services-left {
        padding-top: 22vh;
        padding-bottom: 22vh;
    }

    .btn-card a,
    .service-card p {
        font-size: 20px;
    }
}

@media (min-width: 1025px) {
    .accordion-body {
        display: none !important;
    }
}

@media (max-width: 1024px) {

    /* Stack into single column */
    .slider-top-bottom .services {
        grid-template-columns: 1fr;
        gap: 0;
        padding: 80px 16px 0;
    }

    /* Hide the desktop right sticky panel entirely */
    .slider-top-bottom .services-right {
        display: none !important;
    }

    /* Reset left column */
    .slider-top-bottom .services-left {
        padding-top: 0;
        padding-bottom: 0;
        gap: 0;
    }

    /* Each step becomes an accordion item */
    .slider-top-bottom .service-step {
        height: auto;
        flex-direction: column;
        align-items: stretch;
        border-bottom: 1px solid rgba(62, 179, 227, 0.25);
    }

    .slider-top-bottom .service-step:first-child {
        border-top: 1px solid rgba(62, 179, 227, 0.25);
    }

    /* Accordion trigger — the title row */
    .slider-top-bottom .service-item {
        opacity: 1;
        transform: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 0;
        user-select: none;
        -webkit-tap-highlight-color: transparent;
    }

    .slider-top-bottom .service-item span {
        font-size: 24px;
        flex: 1;
    }

    /* Chevron icon */
    .slider-top-bottom .service-item::after {
        content: '';
        display: inline-block;
        width: 20px;
        height: 20px;
        flex-shrink: 0;
        margin-left: 12px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%233EB3E3' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-size: contain;
        transition: transform 0.3s ease;
    }

    /* Rotate chevron when open */
    .slider-top-bottom .service-item.active::after {
        transform: rotate(180deg);
    }

    /* Accordion body — hidden by default */
    .slider-top-bottom .accordion-body {
        display: grid;
        grid-template-rows: 0fr;
        transition: grid-template-rows 0.35s ease;
        overflow: hidden;
        padding: 0;
    }

    .slider-top-bottom .accordion-body.open {
        grid-template-rows: 1fr;
    }

    .slider-top-bottom .accordion-body-inner {
        overflow: hidden;
        padding-bottom: 0;
        transition: padding-bottom 0.35s ease;
    }

    .slider-top-bottom .accordion-body.open .accordion-body-inner {
        padding-bottom: 24px;
    }

    /* Card inside accordion */
    .slider-top-bottom .accordion-body .service-card-inner {
        padding: 24px;
        border-radius: 16px;
        border: 1px solid #3EB3E3;
        background: linear-gradient(232deg, #3EB3E3 -10%, #fff 45%);
    }

    .slider-top-bottom .accordion-body .btn-card {
        margin-top: 16px;
    }
}
</style>

<?php if (!empty($rows) && is_array($rows)) : ?>
<div class="slider-top-bottom" id="<?php echo esc_attr($section_id); ?>">
    <div class="container">

        <?php if (!empty($gradient_heading) || !empty($simple_heading)) : ?>
        <h2 class="section-titles">
            <?php if (!empty($gradient_heading)) : ?>
            <span><?php echo esc_html($gradient_heading); ?></span>
            <?php endif; ?>
            <?php echo esc_html($simple_heading); ?>
        </h2>
        <?php endif; ?>

        <div class="services js-sticky-features">

            <!-- LEFT: desktop titles / mobile accordion triggers -->
            <div class="services-left">
                <?php foreach ($rows as $index => $row) :
                    $left_title    = !empty($row['left_title'])    ? $row['left_title']    : '';
                    $right_content = !empty($row['right_content']) ? $row['right_content'] : '';
                    $right_button  = !empty($row['right_button'])  ? $row['right_button']  : '';
                    $right_button_url    = !empty($right_button['url'])    ? $right_button['url']    : '#';
                    $right_button_title  = !empty($right_button['title'])  ? $right_button['title']  : 'Learn More';
                    $right_button_target = !empty($right_button['target']) ? $right_button['target'] : '_self';
                ?>
                <div class="service-step" data-index="<?php echo esc_attr($index); ?>">

                    <!-- Title / accordion trigger -->
                    <div class="service-item <?php echo $index === 0 ? 'active' : ''; ?>"
                        data-index="<?php echo esc_attr($index); ?>">
                        <span><?php echo esc_html($left_title); ?></span>
                    </div>

                    <!-- Accordion body (mobile only, hidden on desktop via JS) -->
                    <div class="accordion-body <?php echo $index === 0 ? 'open' : ''; ?>">
                        <div class="accordion-body-inner">
                            <div class="service-card-inner">
                                <?php echo wp_kses_post($right_content); ?>

                                <?php if (!empty($right_button) && is_array($right_button)) : ?>
                                <div class="btn-card">
                                    <a class="button" href="<?php echo esc_url($right_button_url); ?>"
                                        target="<?php echo esc_attr($right_button_target); ?>">
                                        <?php echo esc_html($right_button_title); ?>
                                    </a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                </div>
                <?php endforeach; ?>
            </div>

            <!-- RIGHT: sticky panel (desktop only) -->
            <div class="services-right">
                <div class="sticky-stage">
                    <div class="sticky-stage-inner">
                        <?php foreach ($rows as $index => $row) :
                            $right_content = !empty($row['right_content']) ? $row['right_content'] : '';
                            $right_button  = !empty($row['right_button'])  ? $row['right_button']  : '';
                            $right_button_url    = !empty($right_button['url'])    ? $right_button['url']    : '#';
                            $right_button_title  = !empty($right_button['title'])  ? $right_button['title']  : 'Learn More';
                            $right_button_target = !empty($right_button['target']) ? $right_button['target'] : '_self';
                        ?>
                        <div class="service-card <?php echo $index === 0 ? 'active' : ''; ?>"
                            data-index="<?php echo esc_attr($index); ?>">
                            <div class="service-card-inner">
                                <?php echo wp_kses_post($right_content); ?>

                                <?php if (!empty($right_button) && is_array($right_button)) : ?>
                                <div class="btn-card">
                                    <a class="button" href="<?php echo esc_url($right_button_url); ?>"
                                        target="<?php echo esc_attr($right_button_target); ?>">
                                        <?php echo esc_html($right_button_title); ?>
                                    </a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php endif; ?>

<script>
document.addEventListener("DOMContentLoaded", function() {

    var MOBILE_BP = 1024;

    var sections = document.querySelectorAll(".js-sticky-features");

    sections.forEach(function(section) {

        var leftCol = section.querySelector(".services-left");
        var steps = Array.from(section.querySelectorAll(".service-step"));
        var items = Array.from(section.querySelectorAll(".service-item"));
        var cards = Array.from(section.querySelectorAll(".service-card")); // desktop
        var bodies = Array.from(section.querySelectorAll(".accordion-body")); // mobile
        var rightCol = section.querySelector(".services-right");
        var stageInner = section.querySelector(".sticky-stage-inner");

        if (!steps.length || !items.length) return;

        var currentIndex = 0;
        var observer = null;
        var isMobile = window.innerWidth <= MOBILE_BP;

        /* ── setActive ─────────────────────────────────────────
           Desktop: toggle .active on titles + cards
           Mobile:  toggle .active on titles + open on bodies
        ──────────────────────────────────────────────────────── */
        function setActive(index) {
            index = Math.max(0, Math.min(index, steps.length - 1));
            currentIndex = index;

            items.forEach(function(item, i) {
                item.classList.toggle("active", i === index);
            });

            if (isMobile) {
                // Accordion: open clicked, close others
                bodies.forEach(function(body, i) {
                    body.classList.toggle("open", i === index);
                });
            } else {
                // Desktop sticky cards
                cards.forEach(function(card, i) {
                    card.classList.toggle("active", i === index);
                });
            }
        }

        /* ── Desktop IntersectionObserver ──────────────────── */
        function initDesktop() {
            if (!rightCol || !stageInner) return;

            if (observer) {
                observer.disconnect();
                observer = null;
            }

            // Size stageInner to tallest card
            var maxH = 0;
            cards.forEach(function(card) {
                card.style.display = "block";
                card.style.visibility = "hidden";
                card.style.opacity = "0";
                maxH = Math.max(maxH, card.offsetHeight);
                card.style.display = "";
                card.style.visibility = "";
                card.style.opacity = "";
            });
            stageInner.style.minHeight = Math.max(520, maxH) + "px";

            // Mirror left col height onto right col
            rightCol.style.height = leftCol.offsetHeight + "px";

            // Observer — trigger at viewport midpoint
            observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (!entry.isIntersecting) return;
                    var index = parseInt(entry.target.getAttribute("data-index"), 10);
                    if (!isNaN(index)) setActive(index);
                });
            }, {
                root: null,
                rootMargin: "-50% 0px -50% 0px",
                threshold: 0
            });

            steps.forEach(function(step) {
                observer.observe(step);
            });
        }

        /* ── Mobile accordion click ────────────────────────── */
        function initMobile() {
            // Disconnect desktop observer if it exists
            if (observer) {
                observer.disconnect();
                observer = null;
            }

            // Reset right col height (not needed on mobile)
            if (rightCol) rightCol.style.height = "";
        }

        /* ── Item click handler ────────────────────────────── */
        items.forEach(function(item, i) {
            item.addEventListener("click", function() {

                if (isMobile) {
                    // Accordion toggle — clicking open item closes it
                    if (i === currentIndex && bodies[i].classList.contains("open")) {
                        bodies[i].classList.remove("open");
                        item.classList.remove("active");
                        currentIndex = -1;
                    } else {
                        setActive(i);
                    }
                    return;
                }

                // Desktop: scroll so step aligns with card centre
                var cardCenter = stageInner.getBoundingClientRect().top +
                    stageInner.getBoundingClientRect().height / 2;
                var stepCenter = steps[i].getBoundingClientRect().top +
                    steps[i].getBoundingClientRect().height / 2;
                window.scrollTo({
                    top: window.scrollY + (stepCenter - cardCenter),
                    behavior: "smooth"
                });
            });
        });

        /* ── Init / resize ─────────────────────────────────── */
        function init() {
            isMobile = window.innerWidth <= MOBILE_BP;

            if (isMobile) {
                initMobile();
            } else {
                initDesktop();
            }

            setActive(0);
        }

        init();

        var resizeTimer;
        window.addEventListener("resize", function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(init, 150); // debounce
        });
    });
});
</script>