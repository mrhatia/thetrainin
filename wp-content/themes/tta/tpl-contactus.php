<?php
/**
 * Template Name: Contact us Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
**/

get_header();
?>

<?php $contact_us_layout =get_field( 'contact_us_layout' );
if($contact_us_layout=="bgimagecontact") { ?>


<?php $img = get_field('contact_us_layout_image'); ?>
<section class="tta-contact-v1" style="background-image: url('<?php echo $img['url']; ?>');">

    <div class="tta-contact-v1__container">
        <div class="eyebrow mb-3">
               <h1 class="tta-contact-v1__title">
                   <?php the_field('contact_us_layout_title'); ?>
               </h1>
           </div>
        <div class="tta-contact-v1__content">


            <!-- LEFT SIDE -->
            <div class="tta-contact-v1__left">
                <div class="eyebrow mb-3">
                

                    <h2 class="tta-contact-v1__subtitle text-white">
                        <?php the_field('sub_contact_us_layout_title'); ?>
                    </h2>
                </div>
                <div class="seperator tta-seperator"></div>

                <p class="tta-contact-v1__desc">
                    <?php the_field('sub_contact_us_layout_description'); ?>
                </p>

                <div class="tta-contact-v1__cta">
                    <a href="#" class="button staff-button tta-contact-v1__btn"><img src="<?php echo get_template_directory_uri(); ?>/images/TTA-Connect-Black.svg" alt=""></a>
                </div>
            </div>

            <!-- RIGHT SIDE FORM -->
          <div class="tta-contact-v1__form">
            <div class="form-title">
                <h4 class="text-white">
                    <?php the_field('contact_us_layout_form_title'); ?>
                </h4>
            </div>
            <?php echo do_shortcode( get_field('contact_us_layout_frm_code') ); ?>
        </div>

        </div>
    </div>
    <section class="ctn-800">
        <div class="wrapper">

            <div class="social-icons-section">

                <div class="seperator tta-seperator"></div>
                <h5 class="social_link_title">Follow Us</h5>

                <?php if ( have_rows( 'footer_social_link', 'option' ) ) : ?>
                    <ul class="social">
                        <?php while ( have_rows( 'footer_social_link', 'option' ) ) : the_row(); ?>
                        <?php $footer_social_icon = get_sub_field( 'footer_social_icon' ); ?>
                        <?php $footer_social_hover_icon = get_sub_field( 'footer_social_hover_icon' ); ?>
                        <?php $footer_social_share_link = get_sub_field( 'footer_social_share_link' ); ?>
                        <?php if (!empty($footer_social_icon) || !empty($footer_social_share_link)) { ?>
                        <li>
                            <a href="<?php echo $footer_social_share_link['url']; ?>"
                                target="<?php echo $footer_social_share_link['target']; ?>">
                                <img src="<?php echo $footer_social_icon['url']; ?>"
                                    alt="<?php echo $footer_social_icon['alt']; ?>" class="social_normal_icon" />
                                <!-- <img src="<?php //echo $footer_social_hover_icon['url']; ?>" alt="<?php //echo $footer_social_hover_icon['alt']; ?>" class="social_hover_icon" /> -->
                            </a>
                        </li>
                        <?php } ?>
                        <?php endwhile; ?>
                    </ul>

                <?php endif; ?>
            </div>
        </div>
    </section>
</section>

<?php }elseif($contact_us_layout=="bgnoneimgcontact") { ?>

<section class="main-banner new_banner_style banner_v3 contact_section-version2">
    
    <div class="overlap_banner_content">
        <div class="container">
            <div class="main-title">
                <h1><?php the_field( 'contact_us_layout_title_two' ); ?></h1>
            </div>
          <div class="banner-detail">
               <div class="banner-detail__flex">
                    <p><?php the_field( 'sub_contact_us_layout_title_two' ); ?></p>
                    <div class="banner_contact-section">
					<?php the_field( 'contact_us_layout_frm_code_two' ); ?></div>
               </div>
          </div>
        </div>
    </div>
</section>
<?php } ?>

<?php 
get_footer(); ?>
