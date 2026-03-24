<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TTA
 */

?>

<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <svg height="329pt" viewBox="0 0 329.26933 329" width="329pt" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0" />
                    </svg>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="f-top">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="f-block f-link img">
                        <p><?php the_field( 'footer_contact_text', 'option' ); ?></p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-3">
                    <div class="f-block f-link footer-menu">
                        <h5 class="f-title">
                            <?php the_field( 'footer_company_heading_text', 'option' ); ?>
                        </h5>
                        <?php the_field( 'footer_company_menu', 'option' ); ?>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="f-block f-link">
                        <h5 class="f-title">
                            <?php the_field( 'footer_connect_heading_text', 'option' ); ?>
                        </h5>

                        <ul>
                            <li><a href="tel:<?php the_field( 'footer_connect_phone_number', 'option' ); ?>">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.62 10.79C8.06 13.62 10.38 15.93 13.21 17.38L15.41 15.18C15.68 14.91 16.08 14.82 16.43 14.94C17.55 15.31 18.76 15.51 20 15.51C20.55 15.51 21 15.96 21 16.51V20C21 20.55 20.55 21 20 21C10.61 21 3 13.39 3 4C3 3.45 3.45 3 4 3H7.5C8.05 3 8.5 3.45 8.5 4C8.5 5.25 8.7 6.45 9.07 7.57C9.18 7.92 9.1 8.31 8.82 8.59L6.62 10.79Z"
                                            fill="#323A45" />
                                    </svg>
                                    <?php the_field( 'footer_connect_phone_number', 'option' ); ?></a></li>
                            <li><a href="mailto:<?php the_field( 'footer_connect_emai_id', 'option' ); ?>">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM19.6 8.25L12.53 12.67C12.21 12.87 11.79 12.87 11.47 12.67L4.4 8.25C4.15 8.09 4 7.82 4 7.53C4 6.86 4.73 6.46 5.3 6.81L12 11L18.7 6.81C19.27 6.46 20 6.86 20 7.53C20 7.82 19.85 8.09 19.6 8.25Z"
                                            fill="#323A45" />
                                    </svg>
                                    <?php the_field( 'footer_connect_emai_id', 'option' ); ?></a></li>
                            <?php $footer_connect_podcast_link = get_field( 'footer_connect_podcast_link', 'option' ); ?>
                            <?php if ( $footer_connect_podcast_link ) { ?>
                            <li> <a href="<?php echo $footer_connect_podcast_link['url']; ?>"
                                    target="<?php echo $footer_connect_podcast_link['target']; ?>">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 14C12.7956 14 13.5587 13.6434 14.1213 13.0087C14.6839 12.3739 15 11.513 15 10.6154V6.38462C15 5.48696 14.6839 4.62607 14.1213 3.99133C13.5587 3.35659 12.7956 3 12 3C11.2044 3 10.4413 3.35659 9.87868 3.99133C9.31607 4.62607 9 5.48696 9 6.38462V10.6154C9 11.513 9.31607 12.3739 9.87868 13.0087C10.4413 13.6434 11.2044 14 12 14Z"
                                            fill="#323A45" />
                                        <path
                                            d="M19 11C19 10.7348 18.8946 10.4804 18.7071 10.2929C18.5196 10.1054 18.2652 10 18 10C17.7348 10 17.4804 10.1054 17.2929 10.2929C17.1054 10.4804 17 10.7348 17 11C17 12.3261 16.4732 13.5979 15.5355 14.5355C14.5979 15.4732 13.3261 16 12 16C10.6739 16 9.40215 15.4732 8.46447 14.5355C7.52678 13.5979 7 12.3261 7 11C7 10.7348 6.89464 10.4804 6.70711 10.2929C6.51957 10.1054 6.26522 10 6 10C5.73478 10 5.48043 10.1054 5.29289 10.2929C5.10536 10.4804 5 10.7348 5 11C5.00197 12.6818 5.60941 14.3068 6.71118 15.5775C7.81295 16.8482 9.3354 17.6797 11 17.92V20H8.89C8.65396 20 8.42758 20.0938 8.26068 20.2607C8.09377 20.4276 8 20.654 8 20.89V21.11C8 21.346 8.09377 21.5724 8.26068 21.7393C8.42758 21.9062 8.65396 22 8.89 22H15.11C15.346 22 15.5724 21.9062 15.7393 21.7393C15.9062 21.5724 16 21.346 16 21.11V20.89C16 20.654 15.9062 20.4276 15.7393 20.2607C15.5724 20.0938 15.346 20 15.11 20H13V17.92C14.6646 17.6797 16.187 16.8482 17.2888 15.5775C18.3906 14.3068 18.998 12.6818 19 11Z"
                                            fill="#323A45" />
                                    </svg>
                                    <?php echo $footer_connect_podcast_link['title']; ?></a></li>
                            <?php } ?>
                        </ul>
                        <p class="foteraddres"><?php the_field( 'footer_connect_addrees', 'option' ); ?></p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="f-block f-logo">
                        <?php $footer_logo = get_field( 'footer_logo', 'option' ); ?>
                        <?php if ( $footer_logo ) { ?>
                        <a href="<?php echo site_url(); ?>">
                            <img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>"
                                class="img-fluid" />
                        </a>
                        <?php } ?>
                        <p><?php the_field( 'about_company_text', 'option' ); ?></p>
                        <?php $social_link_heading = get_field( 'social_link_heading', 'option' );
						 if ( $social_link_heading ) { ?>
                        <h5 class="social_link_title"><?php echo $social_link_heading; ?></h5>
                        <?php } ?>
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


            </div>
        </div>

    </div>
    <div class="f-bottom">
        <div class="container">
            <div class="f-inner">
                <div class="left">
                    <p>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.9013 6.61675C9.96797 6.66675 10.243 7.57508 10.2596 8.00008H11.7513C11.6846 6.35008 10.5096 5.34175 8.8763 5.34175C7.03464 5.34175 5.66797 6.50008 5.66797 9.11675C5.66797 10.7334 6.44297 12.6501 8.86797 12.6501C10.718 12.6501 11.7096 11.2751 11.7346 10.1917H10.243C10.218 10.6834 9.86797 11.3417 8.88464 11.3917C7.79297 11.3584 7.33464 10.5084 7.33464 9.11675C7.33464 6.70842 8.4013 6.63342 8.9013 6.61675ZM9.0013 0.666748C4.4013 0.666748 0.667969 4.40008 0.667969 9.00008C0.667969 13.6001 4.4013 17.3334 9.0013 17.3334C13.6013 17.3334 17.3346 13.6001 17.3346 9.00008C17.3346 4.40008 13.6013 0.666748 9.0013 0.666748ZM9.0013 15.6667C5.3263 15.6667 2.33464 12.6751 2.33464 9.00008C2.33464 5.32508 5.3263 2.33341 9.0013 2.33341C12.6763 2.33341 15.668 5.32508 15.668 9.00008C15.668 12.6751 12.6763 15.6667 9.0013 15.6667Z"
                                fill="#5F5F5F" />
                        </svg>
                        <?php the_field( 'footer_copyright_text', 'option' ); ?>
                    </p>
                </div>
                <div class="right">
                    <p>
                        <?php $link_privacy_policy = get_field( 'link_privacy_policy', 'option' ); ?>
                        <?php if ( $link_privacy_policy ) { ?>
                        <a href="<?php echo $link_privacy_policy['url']; ?>"
                            target="<?php echo $link_privacy_policy['target']; ?>"><?php echo $link_privacy_policy['title']; ?></a>
                        <?php } ?><?php $link_terms_condition = get_field( 'link_terms_condition', 'option' ); ?>
                        <?php if ( $link_terms_condition ) { ?>
                        <a href="<?php echo $link_terms_condition['url']; ?>"
                            target="<?php echo $link_terms_condition['target']; ?>"><?php echo $link_terms_condition['title']; ?></a>
                        <?php } ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.5.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scrollIt.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mCustomScrollbar.js"></script>
<script src='<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.min.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/js/jquery.matchHeight-min.js'></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.js"></script>


<!-- Owl Slider -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
<script type="text/javascript" language="javascript">
jQuery(document).ready(function() {
    jQuery(".posts-navigation").html(jQuery(".posts-navigation").html().replace("Older posts", "Next"));
    jQuery(".posts-navigation").html(jQuery(".posts-navigation").html().replace("Newer posts", "Back"));
});
</script>

<script>
jQuery(window).on('load', function() {

    jQuery('.loop').owlCarousel({
        center: false,
        autoWidth: false,
        items: 1,
        nav: true,
        loop: false,
        autoplay: true,
        autoplayTimeout: 5000,
        margin: 10,
        responsive: {
            639: {
                items: 1,
                autoWidth: true
            }
        }
    });

});
</script>

<!-- // Owl Slider -->

<script type="text/javascript">
jQuery('.msrItems').isotope({
    itemSelector: '.msrItem',
    percentPosition: true,
});

function MatchHeight() {
    jQuery('.match').matchHeight({});
}
</script>

<!-- Object Fit -->
<script src="<?php echo get_template_directory_uri(); ?>/js/ofi.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js?v=27012040"></script>

<!-- Desktop Main Menu Tab -->
<script type="text/javascript">
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
const bodyOverflow = document.querySelector("body");
hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    bodyOverflow.classList.toggle("overflow-body");
});
document.querySelectorAll(".nav-link").forEach((link) =>
    link.addEventListener("click", () => {
        hamburger.classList.remove("active");
        navMenu.classList.remove("active");
    })
);
</script>
<!-- Mobile Main Menu Tab -->
<script type="text/javascript">
$(".tta-header-mobile-menu-box .menu li.item-has-children").each(function() {
    $(this).append('<div id="id" class="sparkLines"></div>');
    $(this).find('.sparkLines').click(function() {
        if ($(this).prev('.sub-menu').hasClass("slideToggle")) {
            $(this).removeClass('open-menu');
            $(this).prev('.sub-menu').removeClass('slideToggle');
        } else {
            $(this).addClass('open-menu');
            $(this).prev('.sub-menu').addClass('slideToggle');
        }
    });
});
</script>
<!-- Mobile Sub Menu Tab-->
<script type="text/javascript">
$(".tta-header-mobile-menu-box .menu li.item-has-children .tta-header-content-open-type-tab").each(function() {
    $(this).find('.tta-header-megamenu-content-head h5').click(function() {
        $(this).closest('.tta-header-content-open-type-tab').addClass('sub-menu-open');
    });
});
$(".tta-back-link").click(function(e) {
    $(this).closest('.tta-header-content-open-type-tab').removeClass('sub-menu-open');
});
</script>

<?php wp_footer(); ?>
<script>
(function(d, u, ac) {
    var s = d.createElement('script');
    s.type = 'text/javascript';
    s.src = 'https://a.omappapi.com/app/js/api.min.js';
    s.async = true;
    s.dataset.user = u;
    s.dataset.account = ac;
    d.getElementsByTagName('head')[0].appendChild(s);
})(document, 376681, 399392);
</script>
</body>

</html>