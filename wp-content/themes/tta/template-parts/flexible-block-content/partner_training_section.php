<?php if (get_row_layout() == 'partner_training_section') { ?>
    <section class="training-solutions"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/new-home-images/training.png');">
        <div class="training-solutions-wrapper">
            <div class="container">
                <div class="solutions-flex-wrapper">
                    <div class="heading-col">
                        <?php if (!empty(get_sub_field('text_gradient_color')) && !empty(get_sub_field('text'))) { ?>
                            <h2><span><?php the_sub_field('text_gradient_color') ?> </span><?php the_sub_field('text') ?></h2>
                        <?php } ?>
                    </div>
                    <div class="paragraph-col">
                        <?php if (have_rows('content_repeater')): ?>
                            <?php while (have_rows('content_repeater')) : the_row(); ?>
                                <?php $paragraph = get_sub_field('paragraph'); ?>
                                <p><?php echo $paragraph ?></p>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="fast-facts">
            <div class="container">
                <div class="fast-wrapper">
                    <div class="fast-left">
                        <?php if (!empty(get_sub_field('heading'))) { ?>
                            <h2><?php the_sub_field('heading') ?></h2>
                        <?php }; ?>
                        <div class="badge">
                            <?php
                            $counter_image = get_sub_field('counter_image');
                            if (!empty($counter_image)): ?>
                                <img src="<?php echo esc_url($counter_image['url']); ?>"
                                    alt="<?php echo esc_attr($counter_image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php if (have_rows('counter_repeater')): ?>
                        <div class="fast-right">
                            <?php while (have_rows('counter_repeater')) : the_row(); ?>
                                <div class="fact-item">
                                    <div class="fact-number">
                                        <?php $counter_number = get_sub_field('counter_number'); ?>
                                        <span class="counter" data-target="<?php echo $counter_number ?>">0</span><?php the_sub_field('sufix_sign') ?>
                                    </div>
                                    <div class="fact-text">
                                        <?php $counter_text = get_sub_field('counter_text'); ?>
                                        <span><?php echo $counter_text ?></span>
                                    </div>
                                </div>
                            <?php endwhile ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>


        <!-- <div class="awards-section" aria-label="Awards and Recognitions">
        <div class="container">
            <div class="awards-section__heading">
                <h2>Awards &amp; Recognitions</h2>
            </div>
            <div class="slider-wrapper" role="region" aria-label="Top 20 Company Awards Slider">
                <button class="slider-btn" id="s1-prev" aria-label="Previous awards"><img src="assets/images/left.svg"
                        alt="" srcset=""></button>
                <div class="slider-track-outer">
                    <div class="slider-track" id="slider1" style="transform: translateX(0px);">
                        <div class="award-card" aria-label="Top 20 IT and Technical Training Company">
                            <div class="award-card_col"
                                ontouchstart="this.querySelector('.container-slider').classList.toggle('hover');">
                                <div class="container-slider">
                                    <div class="award-card_front">
                                        <div class="award-card__logo">
                                            <div class="top20-badge-logo">
                                                <img src="assets/images/slider-logo.png" alt="top20-badge-logo">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">14 Consecutive Years</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="award-card_back award-card_year-card">
                                        <div class="award-card_inner">
                                            <div class="top-logo">
                                                <img src="assets/images/years.png" alt="">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">14 Consecutive Years</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="award-card" aria-label="Top 20 IT and Technical Training Company">
                            <div class="award-card_col"
                                ontouchstart="this.querySelector('.container-slider').classList.toggle('hover');">
                                <div class="container-slider">
                                    <div class="award-card_front">
                                        <div class="award-card__logo">
                                            <div class="top20-badge-logo">
                                                <img src="assets/images/slider-logo.png" alt="top20-badge-logo">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">2 Consecutive Years</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="award-card_back award-card_year-card">
                                        <div class="award-card_inner">
                                            <div class="top-logo">
                                                <img src="assets/images/years.png" alt="">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">2 Consecutive Years</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="award-card" aria-label="Top 20 IT and Technical Training Company">
                            <div class="award-card_col"
                                ontouchstart="this.querySelector('.container-slider').classList.toggle('hover');">
                                <div class="container-slider">
                                    <div class="award-card_front">
                                        <div class="award-card__logo">
                                            <div class="top20-badge-logo">
                                                <img src="assets/images/slider-logo.png" alt="top20-badge-logo">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">4 Consecutive Years</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="award-card_back award-card_year-card">
                                        <div class="award-card_inner">
                                            <div class="top-logo">
                                                <img src="assets/images/years.png" alt="">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">4 Consecutive Years</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="award-card" aria-label="Top 20 IT and Technical Training Company">
                            <div class="award-card_col"
                                ontouchstart="this.querySelector('.container-slider').classList.toggle('hover');">
                                <div class="container-slider">
                                    <div class="award-card_front">
                                        <div class="award-card__logo">
                                            <div class="top20-badge-logo">
                                                <img src="assets/images/slider-logo.png" alt="top20-badge-logo">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">Training Outsourcing</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="award-card_back award-card_year-card">
                                        <div class="award-card_inner">
                                            <div class="top-logo">
                                                <img src="assets/images/years.png" alt="">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">Training Outsourcing</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="award-card" aria-label="Top 20 IT and Technical Training Company">
                            <div class="award-card_col"
                                ontouchstart="this.querySelector('.container-slider').classList.toggle('hover');">
                                <div class="container-slider">
                                    <div class="award-card_front">
                                        <div class="award-card__logo">
                                            <div class="top20-badge-logo">
                                                <img src="assets/images/slider-logo.png" alt="top20-badge-logo">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">2 Consecutive Years</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="award-card_back award-card_year-card">
                                        <div class="award-card_inner">
                                            <div class="top-logo">
                                                <img src="assets/images/years.png" alt="">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">2 Consecutive Years</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="award-card" aria-label="Top 20 IT and Technical Training Company">
                            <div class="award-card_col"
                                ontouchstart="this.querySelector('.container-slider').classList.toggle('hover');">
                                <div class="container-slider">
                                    <div class="award-card_front">
                                        <div class="award-card__logo">
                                            <div class="top20-badge-logo">
                                                <img src="assets/images/slider-logo.png" alt="top20-badge-logo">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">4 Consecutive Years</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="award-card_back award-card_year-card">
                                        <div class="award-card_inner">
                                            <div class="top-logo">
                                                <img src="assets/images/years.png" alt="">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">4 Consecutive Years</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="award-card" aria-label="Top 20 IT and Technical Training Company">
                            <div class="award-card_col"
                                ontouchstart="this.querySelector('.container-slider').classList.toggle('hover');">
                                <div class="container-slider">
                                    <div class="award-card_front">
                                        <div class="award-card__logo">
                                            <div class="top20-badge-logo">
                                                <img src="assets/images/slider-logo.png" alt="top20-badge-logo">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">Training Outsourcing</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="award-card_back award-card_year-card">
                                        <div class="award-card_inner">
                                            <div class="top-logo">
                                                <img src="assets/images/years.png" alt="">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">Training Outsourcing</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <button class="slider-btn" id="s1-next" aria-label="Next awards">
                    <img src="assets/images/right.svg" alt="" srcset="">
                </button>
            </div>
            <div class="slider-wrapper_1" role="region" aria-label="Brandon Hall Group Excellence Awards Slider">
                <button class="slider-btn" id="s2-prev" aria-label="Previous Brandon Hall awards">
                    <img src="assets/images/left.svg" alt="left-btn">
                </button>
                <div class="slider-track-outer">
                    <div class="slider-track" id="slider2" style="transform: translateX(0px);">
                        <div class="award-card" aria-label="Top 20 IT and Technical Training Company">
                            <div class="award-card_col"
                                ontouchstart="this.querySelector('.container-slider').classList.toggle('hover');">
                                <div class="container-slider">
                                    <div class="award-card_front">
                                        <div class="award-card__logo">
                                            <div class="top20-badge-logo">
                                                <img src="assets/images/slider-text.png" alt="top20-badge-logo">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">Excellence in Leadership
                                                    Development</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="award-card_back award-card_year-card">
                                        <div class="award-card_inner">
                                            <div class="top-logo">
                                                <img src="assets/images/slider-2.png" alt="">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">Excellence in Leadership
                                                    Development Prolacta Bioscience
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="award-card" aria-label="Top 20 IT and Technical Training Company">
                            <div class="award-card_col"
                                ontouchstart="this.querySelector('.container-slider').classList.toggle('hover');">
                                <div class="container-slider">
                                    <div class="award-card_front">
                                        <div class="award-card__logo">
                                            <div class="top20-badge-logo">
                                                <img src="assets/images/slider-3.png" alt="top20-badge-logo">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">Excellence in Leadership
                                                    Development</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="award-card_back award-card_year-card">
                                        <div class="award-card_inner">
                                            <div class="top-logo">
                                                <img src="assets/images/slider-2.png" alt="">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">Excellence in Leadership
                                                    Development Prolacta Bioscience
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="award-card" aria-label="Top 20 IT and Technical Training Company">
                            <div class="award-card_col"
                                ontouchstart="this.querySelector('.container-slider').classList.toggle('hover');">
                                <div class="container-slider">
                                    <div class="award-card_front">
                                        <div class="award-card__logo">
                                            <div class="top20-badge-logo">
                                                <img src="assets/images/slider-3.png" alt="top20-badge-logo">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">Excellence in Leadership
                                                    Development</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="award-card_back award-card_year-card">
                                        <div class="award-card_inner">
                                            <div class="top-logo">
                                                <img src="assets/images/slider-2.png" alt="">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">Excellence in Leadership
                                                    Development Prolacta Bioscience
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="award-card" aria-label="Top 20 IT and Technical Training Company">
                            <div class="award-card_col"
                                ontouchstart="this.querySelector('.container-slider').classList.toggle('hover');">
                                <div class="container-slider">
                                    <div class="award-card_front">
                                        <div class="award-card__logo">
                                            <div class="top20-badge-logo">
                                                <img src="assets/images/slider-text.png" alt="top20-badge-logo">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">Excellence in Leadership
                                                    Development</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="award-card_back award-card_year-card">
                                        <div class="award-card_inner">
                                            <div class="top-logo">
                                                <img src="assets/images/slider-2.png" alt="">
                                            </div>
                                            <div class="logo-content">
                                                <p class="award-card__label lable-bg">Excellence in Leadership
                                                    Development Prolacta Bioscience
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="slider-btn" id="s2-next" aria-label="Next Brandon Hall awards">
                    <img src="assets/images/right.svg" alt="right-btn" srcset="">
                </button>
            </div>
        </div>
    </div>
    <div class="section-wrapper__card-grid">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Your One Source for Every L&D Talent</h2>
                <p class="section-subtitle">Find Your Next Expert</p>
            </div>

            <div class="card-grid">
                <a href="#" class="talent-card">
                    <div class="talent-icon">
                        <img src="assets/images/card-icon.svg" alt="">
                    </div>
                    <div class="talent-title">Technical Writer</div>
                </a>
                <a href="#" class="talent-card">
                    <div class="talent-icon">
                        <img src="assets/images/card2.svg" alt="">
                    </div>
                    <div class="talent-title">Soft Skills
                        Facilitator</div>
                </a>
                <a href="#" class="talent-card">
                    <div class="talent-icon">
                        <img src="assets/images/card2.svg" alt="">
                    </div>
                    <div class="talent-title">Leadership
                        Facilitator</div>
                </a>
                <a href="#" class="talent-card">
                    <div class="talent-icon">
                        <img src="assets/images/card4.svg" alt="">
                    </div>
                    <div class="talent-title">Instructional
                        Designer</div>
                </a>
                <a href="#" class="talent-card">
                    <div class="talent-icon">
                        <img src="assets/images/card5.svg" alt="">
                    </div>
                    <div class="talent-title">Content Developer</div>
                </a>
                <a href="#" class="talent-card">
                    <div class="talent-icon">
                        <img src="assets/images/card6.svg" alt="">
                    </div>
                    <div class="talent-title">Learning Strategist</div>
                </a>
                <a href="#" class="talent-card">
                    <div class="talent-icon">
                        <img src="assets/images/card7.svg" alt="">
                    </div>
                    <div class="talent-title">eLearning Developer</div>
                </a>
                <a href="#" class="talent-card">
                    <div class="talent-icon">
                        <img src="assets/images/card2.svg" alt="">
                    </div>
                    <div class="talent-title">Fractional L&D
                        Talent </div>
                </a>
                <a href="#" class="talent-card">
                    <div class="talent-icon">
                        <img src="assets/images/card9.svg" alt="">
                    </div>
                    <div class="talent-title">Keynote Speaker</div>
                </a>
                <a href="#" class="talent-card">
                    <div class="talent-icon">
                        <img src="assets/images/card2.svg" alt="">
                    </div>
                    <div class="talent-title">Virtual Training
                        Producer</div>
                </a>
                <a href="#" class="talent-card">
                    <div class="talent-icon">
                        <img src="assets/images/card6.svg" alt="">
                    </div>
                    <div class="talent-title">Corporate
                        Coach </div>
                </a>
                <a href="#" class="talent-card">
                    <div class="talent-icon">
                        <img src="assets/images/card12.svg" alt="">
                    </div>
                    <div class="talent-title">LMS Administrator</div>
                </a>
                <a href="#" class="talent-card">
                    <div class="talent-icon">
                        <img src="assets/images/card13.svg" alt="">
                    </div>
                    <div class="talent-title">Training Coordinator</div>
                </a>
                <a href="#" class="talent-card">
                    <div class="talent-icon">
                        <img src="assets/images/card14.svg" alt="">
                    </div>
                    <div class="talent-title">Project Manager</div>
                </a>
                <a href="#" class="talent-card">
                    <div class="talent-icon">
                        <img src="assets/images/card15.svg" alt="">
                    </div>
                    <div class="talent-title">Technical Writer</div>
                </a>
            </div>
        </div>
    </div>

    <div class="slider-top-bottom">
        <div class="container">
            <h2 class="section-title">
                <span>From Strategy to Delivery</span>
                We Have What You Need
            </h2>

            <div class="services">

                <!-- LEFT -->
        <!-- <div class="services-left" id="services-left">
                    <div class="service-item"><span>Staff Augmentation</span></div>
                    <div class="service-item"><span>Leadership &amp; Professional Skills</span></div>
                    <div class="service-item"><span>Instructional Design Services</span></div>
                    <div class="service-item"><span>Learning Strategy</span></div>
                    <div class="service-item"><span>Simple Implementation Training</span></div>
                    <div class="service-item"><span>Technical &amp; IT Training</span></div>
                    <div class="service-item"><span>Managed Learning Services</span></div>
                    <div class="service-item"><span>Fractional L&amp;D Professionals</span></div>
                </div> -->

        <!-- RIGHT -->
        <!-- <div class="services-right">
                    <div class="card-wrapper">

                        <div class="service-card">
                            <p>Whether you're supplementing your existing team, filling critical skill gaps, or managing
                                a defined
                                initiative, our staff augmentation services provide flexible access to top L&D
                                professionals without
                                the time or cost of full-time hiring.</p>
                            <p>Our vetted experts support every stage of the learning lifecycle, bringing proven best
                                practices,
                                onboarding quickly, and helping you achieve results faster.</p>
                            <div class="btn-card"><a href="#">Read More</a></div>
                        </div>

                        <div class="service-card">
                            <p>TTA offers leadership and professional development programs that strengthen core soft
                                skills and
                                prepare leaders to succeed at every stage.</p>
                            <p>We tailor learning to your culture, goals, and scale, helping leaders communicate
                                effectively, manage
                                teams confidently, and deliver meaningful, lasting business results.</p>
                            <div class="btn-card"><a href="#">Read More</a></div>
                        </div>

                        <div class="service-card">
                            <p>Whether you need to supplement your team or support a full solution, our expert
                                instructional
                                designers align closely with your goals. They apply current tools and proven best
                                practices across all
                                learning modalities.</p>
                            <p>With flexible engagement models and deep expertise, we help design effective learning
                                experiences
                                that scale with your organization.</p>
                            <div class="btn-card"><a href="#">Read More</a></div>
                        </div>

                        <div class="service-card">
                            <p>Our award-winning learning strategists bring clarity and direction to every initiative,
                                helping
                                organizations succeed in both complex learning transformations and newly charted areas.
                            </p>
                            <p>They know how to align strategy with business goals, anticipate challenges, and provide
                                the insight
                                and support needed to drive lasting success.</p>
                            <div class="btn-card"><a href="#">Read More</a></div>
                        </div>

                        <div class="service-card">
                            <p>Trusted by leading organizations around the world, TTA has deep experience supporting
                                complex system
                                implementation rollouts. We identify and deploy industry experts and manage all moving
                                parts of
                                large-scale initiatives.</p>
                            <p>This enables organizations to scale quickly, reduce risk, and execute successful
                                implementations.</p>
                            <div class="btn-card"><a href="#">Read More</a></div>
                        </div>

                        <div class="service-card">
                            <p>Our network includes thousands of expert trainers certified across hundreds of technical
                                subjects and
                                today's most in-demand technologies, including globally recognized, role-based AI
                                certifications
                                through our Authorized AI CERTs partnership.</p>
                            <p>From IT systems and software to cybersecurity and business analytics, our trainers equip
                                organizations with the knowledge needed to stay current and competitive.</p>
                            <div class="btn-card"><a href="#">Read More</a></div>
                        </div>

                        <div class="service-card">
                            <p>TTA's Managed Learning Services provide full or partial scope oversight of your learning
                                organization, spanning design, development, and delivery. We manage the people,
                                services, and
                                logistics required to run effective programs.</p>
                            <p>This approach streamlines operations, optimizes spend, and frees internal teams to focus
                                on
                                high-impact initiatives.</p>
                            <div class="btn-card"><a href="#">Read More</a></div>
                        </div>

                        <div class="service-card">
                            <p>TTA's Fractional L&D Talent model gives your organization ongoing engagement with senior
                                learning and
                                development professionals who work as an integrated extension of your team.</p>
                            <p>You gain consistent, strategic support that evolves with your priorities and allows you
                                to select the
                                level of monthly involvement that aligns with your budget.</p>
                            <div class="btn-card"><a href="#">Read More</a></div>
                        </div>

                    </div>
                </div> -->

        <!-- </div>
        </div> -->
        </div>
    </section>

<?php }; ?>