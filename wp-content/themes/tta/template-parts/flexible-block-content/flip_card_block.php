<?php
?>
<?php if( get_row_layout() == 'flip_card_block' ){ ?>
<div class="awards-section" aria-label="Awards and Recognitions">
    <div class="container">
        <div class="awards-section__heading">
            <?php if(!empty(get_sub_field('heading'))) {?>
            <h2><?php the_sub_field('heading') ?></h2>
            <?php }; ?>
        </div>

        <?php if( have_rows('card_reprater') ): ?>
        <div class="slider-wrapper" role="region" aria-label="Top 20 Company Awards Slider">
            <button class="slider-btn" id="s1-prev" aria-label="Previous awards"><img src="<?php echo get_template_directory_uri(); ?>/images/new-home-images/left.svg"
                    alt="" srcset=""></button>
            <div class="slider-track-outer">
                <div class="slider-track" id="slider1" style="transform: translateX(0px);">
                    <?php  while( have_rows('card_reprater') ) : the_row(); ?>
                    <div class="award-card" aria-label="Top 20 IT and Technical Training Company">
                        <div class="award-card_col"
                            ontouchstart="this.querySelector('.container-slider').classList.toggle('hover');">
                            <div class="container-slider">
                                <div class="award-card_front">
                                    <div class="award-card__logo">
                                        <div class="top20-badge-logo">
                                            <?php 
                                             $card_front_img = get_sub_field('card_front_img');
                                              if( !empty( $card_front_img ) ): ?>
                                            <img src="<?php echo esc_url($card_front_img['url']); ?>"
                                                alt="<?php echo esc_attr($card_front_img['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="logo-content">
                                            <?php $front_text = get_sub_field('front_text'); ?>
                                            <p class="award-card__label lable-bg"><?php echo $front_text?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="award-card_back award-card_year-card">
                                    <div class="award-card_inner">
                                        <div class="top-logo">
                                             <?php 
                                             $card_back_img = get_sub_field('card_back_img');
                                              if( !empty( $card_back_img ) ): ?>
                                            <img src="<?php echo esc_url($card_back_img['url']); ?>"
                                                alt="<?php echo esc_attr($card_back_img['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="logo-content">
                                            <?php $card_back_text = get_sub_field('card_back_text'); ?>
                                            <p class="award-card__label lable-bg"><?php echo $card_back_text ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile ?>

                </div>
            </div>
            <button class="slider-btn" id="s1-next" aria-label="Next awards">
                <img src="<?php echo get_template_directory_uri(); ?>/images/new-home-images/right.svg" alt="" srcset="">
            </button>
        </div>
        <?php endif ?>


         <?php if( have_rows('second_card_repeater') ): ?>
        <div class="slider-wrapper_1" role="region" aria-label="Brandon Hall Group Excellence Awards Slider">
            <button class="slider-btn" id="s2-prev" aria-label="Previous Brandon Hall awards">
                <img src="<?php echo get_template_directory_uri(); ?>/images/new-home-images/left.svg" alt="left-btn">
            </button>
            <div class="slider-track-outer">
                <div class="slider-track" id="slider2" style="transform: translateX(0px);">
                    <?php  while( have_rows('second_card_repeater') ) : the_row(); ?>
                    <div class="award-card" aria-label="Top 20 IT and Technical Training Company">
                        <div class="award-card_col"
                            ontouchstart="this.querySelector('.container-slider').classList.toggle('hover');">
                            <div class="container-slider">
                                <div class="award-card_front">
                                    <div class="award-card__logo">
                                        <div class="top20-badge-logo">
                                             <?php 
                                             $front_image = get_sub_field('front_image');
                                              if( !empty( $front_image ) ): ?>
                                            <img src="<?php echo esc_url($front_image['url']); ?>"
                                                alt="<?php echo esc_attr($front_image['alt']); ?>" />
                                            <?php endif; ?>
                                            
                                        </div>
                                        <div class="logo-content">
                                            <?php $front_text = get_sub_field('front_text'); ?>
                                            <p class="award-card__label lable-bg"><?php echo $front_text ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="award-card_back award-card_year-card">
                                    <div class="award-card_inner">
                                        <div class="top-logo">
                                             <?php 
                                             $back_image = get_sub_field('back_image');
                                              if( !empty( $back_image ) ): ?>
                                            <img src="<?php echo esc_url($back_image['url']); ?>"
                                                alt="<?php echo esc_attr($back_image['alt']); ?>" />
                                            <?php endif; ?>
                                            
                                        </div>
                                        <div class="logo-content">
                                            <?php $back_text = get_sub_field('back_text'); ?>
                                            <p class="award-card__label lable-bg"><?php echo $back_text ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile ?>

                </div>
            </div>
            <button class="slider-btn" id="s2-next" aria-label="Next Brandon Hall awards">
                <img src="<?php echo get_template_directory_uri(); ?>/images/new-home-images/right.svg" alt="right-btn" srcset="">
            </button>
        </div>
        <?php endif ?>
    </div>
</div>

<?php }; ?>