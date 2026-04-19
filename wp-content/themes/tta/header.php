<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TTA
 */

?>
<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Add By Designer ===-->
    <link
        href="<?php echo get_template_directory_uri(); ?>/css/style.css?v=<?php echo filemtime(get_template_directory() . '/css/style.css'); ?>"
        rel="stylesheet">
    <link
        href="<?php echo get_template_directory_uri(); ?>/css/responsive.css?v=<?php echo filemtime(get_template_directory() . '/css/responsive.css'); ?>"
        rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/slick.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/fonts/fonts.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">

    <!-- Fancybox -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.css" rel="stylesheet">

    <?php $header_favicon_icon = get_field( 'header_favicon_icon', 'option' ); ?>
    <?php if ( $header_favicon_icon ) { ?>
    <link rel="icon" href="<?php echo $header_favicon_icon['url']; ?>" type="image/x-icon">
    <?php } ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.5.1.min.js"></script>
    <!--=== Windows Phone JS Code Start ===-->
    <script type="text/javascript">
    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement('style')
        msViewportStyle.appendChild(
            document.createTextNode(
                '@-ms-viewport{width:auto!important}'
            )
        )
        document.querySelector('head').appendChild(msViewportStyle)
    }
    </script>
    <!--=== Windows Phone JS Code End ===-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    <!-- Google Tag Manager - added by worcesterint on 7-31-25  -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PR9WXLK');
    </script>
    <!-- End Google Tag Manager -->


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VJRTVW7L7F"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-VJRTVW7L7F');
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1071911725"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'AW-1071911725');
    </script>
    <script type='text/javascript' data-cfasync='false'>
    window.purechatApi = {
        l: [],
        t: [],
        on: function() {
            this.l.push(arguments);
        }
    };
    (function() {
        var done = false;
        var script = document.createElement('script');
        script.async = true;
        script.type = 'text/javascript';
        script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript';
        document.getElementsByTagName('HEAD').item(0).appendChild(script);
        script.onreadystatechange = script.onload = function(e) {
            if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
                var w = new PCWidget({
                    c: '63a4291f-1d44-4700-91d8-d47ce7282ee9',
                    f: true
                });
                done = true;
            }
        };
    })();
    </script>

    <!-- Hotjar Tracking Code for www.thetrainingassociates.com -->
    <script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 659648,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>

    <!-- Lead Data Stream -->
    <script async src="https://tag.trainingassociates.distilled.untitledfirm.com"></script>
    <!-- <iframe src="https://tag.trovo-tag.com/07b42f51e091bb37ec48cd59a724655fun" width="1" height="1" style="visibility:hidden;display:none;"></iframe> -->

    <?php wp_head(); ?>
</head>

<div class="search_main ">
    <div class="search_flex">

        <div class="search_close">
            <img src="<?php echo get_template_directory_uri(); ?>/images/close-icon1.svg">
        </div>

        <div class="search_box">
            <form role="search" method="get" id="header_frm" class="search-form" action="<?php echo site_url(''); ?>">
                <label>
                    <input type="search" class="search-field" name="s" id="str_search" placeholder="Start Typing..."
                        autofocus>
                </label>
                <!--<input type="hidden"  name="category[]" value="page">-->
            </form>
        </div>

        <!--<div class="search-result">
			 
		</div>-->

        <script>
        $(document).ready(function() {

            $(".right-menu .search").click(function(event) {
                event.preventDefault();
                setTimeout(function() {
                    $('#str_search').focus();
                }, 10);
                return false;
            });

            $('#str_search').keypress(function(e) {
                if (e.which == 13) {
                    $('form#header_frm').submit();
                    return false; //<---- Add this line
                }
            });

        });

        jQuery('#str_search').on('input', function() {
            jQuery.ajax({
                url: '<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
                type: "post",
                data: {
                    action: 'str_search',
                    str: jQuery('#str_search').val(),
                },
                success: function(data) {
                    jQuery(".search-result").html(data)
                },
                error: function() {
                    console.log('failure!');
                }
            });
        });
        </script>

    </div>
</div>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php $show_custom_menu = get_field( 'show_custom_menu', 'option' ); ?>

    <?php if ($show_custom_menu) { ?>
    <!-- Start Custom Header -->
    <header class="tta-header-section">
        <nav>
          
            <?php $header_site_logo = get_field( 'header_site_logo', 'option' ); ?>
            <?php if ( $header_site_logo ) { ?>
            <a class="navbar-brand" href="<?php echo site_url(); ?>">
                <img src="<?php echo $header_site_logo['url']; ?>" alt="<?php echo $header_site_logo['alt']; ?>"
                    class="img-fluid" />
            </a>
            <?php } ?>
   
            <!-- Start Desktop Menu -->
            <div class="tta-header-desktop-menu-box">
                <div class="tta-header-menu">

                    <!-- Start Main Menu List -->
                    <?php if( have_rows('menu_list_group', 'option') ) { ?>
                    <ul class="tta-header-menu-lists">
                        <?php  $extra_class =""; while( have_rows('menu_list_group', 'option') ) { the_row(); ?>

                        <?php $main_menu_item_type = get_sub_field('main_menu_item_type', 'option');
                        
                        $extra_class = get_sub_field('extra_class', 'option');
                        ?>

                        <?php if ($main_menu_item_type == 'simple') { ?>

                        <!-- Start Simple Menu -->
                        <li class="tta-header-menu-list-item item-has-no-children">
                            <a
                                href="<?php the_sub_field('main_menu_item_link', 'option'); ?>"><?php the_sub_field('main_menu_item_text', 'option'); ?></a>
                        </li>
                        <!-- End Simple Menu -->

                        <?php } elseif ($main_menu_item_type == 'megamenu') { ?>

                        <!-- Start Mega Menu -->
                        <li class="tta-header-menu-list-item item-has-children <?php echo $extra_class;?>">
                            <a
                                href="<?php the_sub_field('main_menu_item_link', 'option'); ?>"><?php the_sub_field('main_menu_item_text', 'option'); ?></a>
                            <ul class="tta-header-megamenu-list">
                                <div class="tta-header-megamenu-container">

                                    <!-- Start Mega Menu Row -->
                                    <?php if( have_rows('sub_menu_row_list', 'option') ) { ?>
                                    <?php while( have_rows('sub_menu_row_list', 'option') ) { the_row(); ?>

                                    <div
                                        class="tta-header-megamenu-row tta-header-megamenu-row-<?php the_sub_field('sub_menu_row_layout', 'option'); ?> <?php the_sub_field('sub_menu_row_extra_class', 'option'); ?>">

                                        <!-- Start Mega Menu Column -->
                                        <?php if( have_rows('sub_menu_column_list', 'option') ) { ?>
                                        <?php while( have_rows('sub_menu_column_list', 'option') ) { the_row(); ?>
                                        <li class="tta-header-megamenu-column">
                                            <?php if( have_rows('sub_menu_column_item_list', 'option') ) { ?>
                                            <?php while( have_rows('sub_menu_column_item_list', 'option') ) { the_row(); ?>
                                            <div
                                                class="tta-header-menu-desktop-col-item tta-header-content-open-type-<?php the_sub_field('open_type_on_mobile', 'option'); ?> <?php the_sub_field('extra_class', 'option'); ?>">
                                                <!-- Start Mega Menu Content Heading -->
                                                <?php $content_title = get_sub_field('title', 'option'); ?>
                                                <?php if ($content_title != '') { ?>
                                                <div class="tta-header-megamenu-content-head">
                                                    <h5><?php the_sub_field('title', 'option'); ?></h5>
                                                </div>
                                                <?php } ?>
                                                <!-- End Mega Menu Content Heading -->

                                                <?php $content_type = get_sub_field('content_type', 'option'); ?>

                                                <?php if ($content_type == 'content') { ?>

                                                <!-- Start Mega Menu Content -->
                                                <div
                                                    class="tta-header-megamenu-content tta-header-content-open-type-<?php the_sub_field('open_type_on_mobile', 'option'); ?>">
                                                    <?php the_sub_field('content', 'option'); ?>
                                                </div>
                                                <!-- End Mega Menu Content -->

                                                <?php } elseif ($content_type == 'button') { ?>

                                                <!-- Start Mega Menu Button -->
                                                <div
                                                    class="tta-header-megamenu-btn tta-header-megamenu-btn-<?php the_sub_field('button_alignment', 'option'); ?> tta-header-content-open-type-<?php the_sub_field('open_type_on_mobile', 'option'); ?>">
                                                    <?php if( have_rows('button_list', 'option') ) { ?>
                                                    <?php while( have_rows('button_list', 'option') ) { the_row(); ?>
                                                    <a
                                                        href="<?php the_sub_field('button_link', 'option'); ?>"><?php the_sub_field('button_text', 'option'); ?></a>
                                                    <?php } ?>
                                                    <?php } ?>
                                                </div>
                                                <!-- End Mega Menu Button -->

                                                <?php } elseif ($content_type == 'image') { ?>

                                                <!-- Start Mega Menu Image -->
                                                <?php $image_link = get_sub_field('image_link', 'option'); ?>
                                                <div
                                                    class="tta-header-megamenu-img tta-header-content-open-type-<?php the_sub_field('open_type_on_mobile', 'option'); ?>">
                                                    <?php if ($image_link == '') { ?>
                                                    <img src="<?php the_sub_field('image', 'option'); ?>"
                                                        class="img-fluid" alt="image">
                                                    <?php } else { ?>
                                                    <a href="<?php the_sub_field('image_link', 'option'); ?>">
                                                        <img src="<?php the_sub_field('image', 'option'); ?>"
                                                            class="img-fluid" alt="image">
                                                    </a>
                                                    <?php } ?>
                                                </div>
                                                <!-- End Mega Menu Image -->

                                                <?php } elseif ($content_type == 'menu') { ?>

                                                <!-- Start Mega Menu Menu -->
                                                <div
                                                    class="tta-header-megamenu-menu tta-header-megamenu-menu-<?php the_sub_field('menu_column', 'option'); ?> tta-header-content-open-type-<?php the_sub_field('open_type_on_mobile', 'option'); ?>">
                                                    <?php if( have_rows('menu_list', 'option') ) { ?>
                                                    <ul>
                                                        <?php while( have_rows('menu_list', 'option') ) { the_row(); ?>
                                                        <li><a
                                                                href="<?php the_sub_field('menu_link', 'option'); ?>"><?php the_sub_field('menu_text', 'option'); ?></a>
                                                        </li>
                                                        <?php } ?>
                                                    </ul>
                                                    <?php } ?>
                                                </div>
                                                <!-- End Mega Menu Menu -->

                                                <?php } elseif ($content_type == 'tab') { ?>

                                                <!-- Start Mega Menu Tab -->
                                                <div
                                                    class="tta-header-megamenu-tab tta-header-content-open-type-<?php the_sub_field('open_type_on_mobile', 'option'); ?>">
                                                    <div class="tta-header-megamenu-tab-section">
                                                        <div class="tta-header-megamenu-tab-section-row">
                                                            <!-- Start Mega Menu Tab Nav -->
                                                            <div class="tta-header-megamenu-tab-nav">
                                                                <div class="tta-header-megamenu-tab-nav-wrapper">
                                                                    <?php if( have_rows('tab_item_group', 'option') ) { ?>
                                                                    <ul>
                                                                        <?php while( have_rows('tab_item_group', 'option') ) { the_row(); ?>

                                                                        <li class="tta-header-megamenu-tab-nav-item menu_tabs-items <?php if (get_row_index() == '1') { echo 'menu_tabs-items-active'; } ?>"
                                                                            data-tab-id="menu_tabs<?php echo get_row_index(); ?>">
                                                                            <a
                                                                                href="#"><?php the_sub_field('tab_title', 'option'); ?></a>
                                                                        </li>
                                                                        <?php } ?>
                                                                    </ul>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                            <!-- End Mega Menu Tab Nav -->
                                                            <!-- Start Mega Menu Tab Content -->
                                                            <div class="tta-header-megamenu-tab-content">
                                                                <?php if( have_rows('tab_item_group', 'option') ) { ?>
                                                                <?php while( have_rows('tab_item_group', 'option') ) { the_row(); ?>
                                                                <div class="tta-header-megamenu-tab-content-item tab_links <?php if (get_row_index() == '1') { echo 'menu_tab_links_active'; } ?>"
                                                                    id="menu_tabs<?php echo get_row_index(); ?>">
                                                                    <?php the_sub_field('tab_content', 'option'); ?>
                                                                </div>
                                                                <?php } ?>
                                                                <?php } ?>

                                                            </div>
                                                            <!-- End Mega Menu Tab Content -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Mega Menu Tab -->

                                                <?php } elseif ($content_type == 'blog') { ?>

                                                <!-- Start Mega Menu Blog -->
                                                <?php
																					$featured_posts = get_sub_field('select_blog');
																					if( $featured_posts ): ?>
                                                <div
                                                    class="tta-header-megamenu-blog tta-header-content-open-type-<?php the_sub_field('open_type_on_mobile', 'option'); ?>">
                                                    <?php foreach( $featured_posts as $post ):
																							setup_postdata($post); ?>
                                                    <div class="tta-header-megamenu-blog-item">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                                                            <div class="tta-header-megamenu-blog-item-img">
                                                                <img src="<?php echo $featured_img_url; ?>"
                                                                    alt="featured-image">
                                                            </div>
                                                            <?php $categories = get_the_category();
																										if ( ! empty( $categories ) ) {
																											echo '<span>';
																											echo esc_html( $categories[0]->name );
																											echo '</span>';
																										} ?>
                                                            <h6><?php the_title(); ?></h6>
                                                        </a>
                                                    </div>
                                                    <?php endforeach; ?>
                                                </div>
                                                <?php wp_reset_postdata(); ?>
                                                <?php endif; ?>
                                                <!-- End Mega Menu Blog -->

                                                <?php } ?>

                                                <?php } ?>
                                                <?php } ?>
                                            </div>
                                            <?php } ?>
                                            <?php } ?>
                                            <!-- End Mega Menu Column -->

                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                    <!-- End Mega Menu Row -->

                                </div>
                            </ul>
                        </li>
                        <!-- End Mega Menu -->
                        <?php } ?>


                        <?php } ?>
                    </ul>
                    <?php } ?>
                    <!-- End Main Menu List -->

                </div>
                <div class="header_right">
            

                <!-- Start Main Menu Login -->
                <?php $header_login_button = get_field( 'header_login_button', 'option' ); ?>
                <?php $header_signup_button = get_field( 'header_signup_button', 'option' ); ?>
                <?php if ( $header_login_button || $header_signup_button ) { ?>
                <div class="account-btns">
                    <a class="trans_link" href="<?php echo $header_login_button['url']; ?>"
                        target="<?php echo $header_login_button['target']; ?>">

                        <!-- 								<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/10/tta-connect-logo-darksvg.svg" alt="tta" class="img-fluid">
								<span>connect</span> -->
                        <span><?php echo $header_login_button['title']; ?></span>
                    </a>
                    <a class="solid_link" href="<?php echo $header_signup_button['url']; ?>"
                        target="<?php echo $header_signup_button['target']; ?>">
                        <span><?php echo $header_signup_button['title']; ?></span>
                    </a>
                </div>
                <?php } ?>
                <!-- End Main Menu Login -->
    <!-- Start Main Menu Search -->
                <div class="tta-search-btn">
                    <button class="search">
                       <svg width="19" height="23" viewBox="0 0 19 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="1" y="1" width="16.3455" height="16.3455" rx="8.17277" stroke="url(#paint0_linear_2889_2343)" stroke-width="2"/>
<path d="M4.84961 16.7158L1.33789 22" stroke="#3BE2A8" stroke-width="2"/>
<defs>
<linearGradient id="paint0_linear_2889_2343" x1="0.632605" y1="1.26521" x2="18.3455" y2="17.3966" gradientUnits="userSpaceOnUse">
<stop stop-color="#3EB3E3"/>
<stop offset="1" stop-color="#3BE2A8"/>
</linearGradient>
</defs>
</svg>
                    </button>
                </div>
                <!-- End Main Menu Search -->
                <!-- Start Main Menu Hamburger -->
               
                <!-- End Main Menu Hamburger -->
<a href="Javascript:void(0);" class="hamburger">
                    <span class="navbar-toggler-icon">
                        <span class="toggle-bar"></span>
                        <span class="toggle-bar"></span>
                        <span class="toggle-bar"></span>
                    </span>
                </a>
            </div>
                                                    </div>
            <!-- End Desktop Menu -->

            <!-- Start Mobile Menu -->
            <div class="nav-menu tta-header-mobile-menu-box">
                <div id="mySidenav" class="drawer">

                    <div class="tta-header-menu">
                        <?php if( have_rows('menu_list_group', 'option') ) { ?>
                        <ul class="menu">
                            <?php while( have_rows('menu_list_group', 'option') ) { the_row(); ?>
                            <?php $main_menu_item_type = get_sub_field('main_menu_item_type', 'option'); ?>

                            <?php if ($main_menu_item_type == 'simple') { ?>

                            <!-- Start Simple Menu -->
                            <li class="item-has-no-children">
                                <a
                                    href="<?php the_sub_field('main_menu_item_link', 'option'); ?>"><?php the_sub_field('main_menu_item_text', 'option'); ?></a>
                            </li>
                            <!-- End Simple Menu -->

                            <?php } elseif ($main_menu_item_type == 'megamenu') { ?>

                            <!-- Start Mega Menu -->
                            <li class="item-has-children">
                                <a
                                    href="<?php the_sub_field('main_menu_item_link', 'option'); ?>"><?php the_sub_field('main_menu_item_text', 'option'); ?></a>

                                <!-- Start Mega Menu Row -->
                                <?php if( have_rows('sub_menu_row_list', 'option') ) { ?>
                                <ul class="sub-menu">
                                    <?php while( have_rows('sub_menu_row_list', 'option') ) { the_row(); ?>

                                    <!-- Start Mega Menu Column -->
                                    <?php if( have_rows('sub_menu_column_list', 'option') ) { ?>
                                    <?php while( have_rows('sub_menu_column_list', 'option') ) { the_row(); ?>
                                    <li class="tta-header-menu-mobile-col">

                                        <!-- Start Mega Menu Column Item -->
                                        <?php if( have_rows('sub_menu_column_item_list', 'option') ) { ?>
                                        <?php while( have_rows('sub_menu_column_item_list', 'option') ) { the_row(); ?>

                                        <?php $open_type_on_mobile = get_sub_field('open_type_on_mobile', 'option'); ?>
                                        <div
                                            class="tta-header-menu-mobile-col-item tta-header-content-open-type-<?php echo $open_type_on_mobile; ?> <?php the_sub_field('extra_class', 'option'); ?>">

                                            <!-- Start Mega Menu Content Heading -->
                                            <?php $content_title = get_sub_field('title', 'option'); ?>
                                            <?php if ($content_title != '') { ?>
                                            <div class="tta-header-megamenu-content-head">
                                                <h5><?php the_sub_field('title', 'option'); ?></h5>
                                            </div>
                                            <?php } ?>
                                            <!-- End Mega Menu Content Heading -->

                                            <?php $content_type = get_sub_field('content_type', 'option'); ?>

                                            <?php if ($content_type == 'content') { ?>

                                            <!-- Start Mega Menu Content -->
                                            <div
                                                class="tta-header-menu-mobile-col-item-data tta-header-megamenu-content">
                                                <?php if ($open_type_on_mobile == 'tab') { ?>
                                                <div class="tta-back-link"><a
                                                        href="javascript:void(0);"><?php the_sub_field('title', 'option'); ?></a>
                                                </div>
                                                <?php } ?>
                                                <?php the_sub_field('content', 'option'); ?>
                                            </div>
                                            <!-- End Mega Menu Content -->

                                            <?php } elseif ($content_type == 'button') { ?>

                                            <!-- Start Mega Menu Button -->
                                            <div
                                                class="tta-header-menu-mobile-col-item-data tta-header-megamenu-btn tta-header-megamenu-btn-<?php the_sub_field('button_alignment', 'option'); ?>">
                                                <?php if ($open_type_on_mobile == 'tab') { ?>
                                                <div class="tta-back-link"><a
                                                        href="javascript:void(0);"><?php the_sub_field('title', 'option'); ?></a>
                                                </div>
                                                <?php } ?>
                                                <?php if( have_rows('button_list', 'option') ) { ?>
                                                <?php while( have_rows('button_list', 'option') ) { the_row(); ?>
                                                <a
                                                    href="<?php the_sub_field('button_link', 'option'); ?>"><?php the_sub_field('button_text', 'option'); ?></a>
                                                <?php } ?>
                                                <?php } ?>
                                            </div>
                                            <!-- End Mega Menu Button -->

                                            <?php } elseif ($content_type == 'image') { ?>

                                            <!-- Start Mega Menu Image -->
                                            <?php $image_link = get_sub_field('image_link', 'option'); ?>
                                            <div class="tta-header-menu-mobile-col-item-data tta-header-megamenu-img">
                                                <?php if ($open_type_on_mobile == 'tab') { ?>
                                                <div class="tta-back-link"><a
                                                        href="javascript:void(0);"><?php the_sub_field('title', 'option'); ?></a>
                                                </div>
                                                <?php } ?>
                                                <?php if ($image_link == '') { ?>
                                                <img src="<?php the_sub_field('image', 'option'); ?>" class="img-fluid"
                                                    alt="image">
                                                <?php } else { ?>
                                                <a href="<?php the_sub_field('image_link', 'option'); ?>">
                                                    <img src="<?php the_sub_field('image', 'option'); ?>"
                                                        class="img-fluid" alt="image">
                                                </a>
                                                <?php } ?>
                                            </div>
                                            <!-- End Mega Menu Image -->

                                            <?php } elseif ($content_type == 'menu') { ?>

                                            <!-- Start Mega Menu Menu -->
                                            <div
                                                class="tta-header-menu-mobile-col-item-data tta-header-megamenu-menu tta-header-megamenu-menu-<?php the_sub_field('menu_column', 'option'); ?>">
                                                <?php if ($open_type_on_mobile == 'tab') { ?>
                                                <div class="tta-back-link"><a
                                                        href="javascript:void(0);"><?php the_sub_field('title', 'option'); ?></a>
                                                </div>
                                                <?php } ?>
                                                <?php if( have_rows('menu_list', 'option') ) { ?>
                                                <ul>
                                                    <?php while( have_rows('menu_list', 'option') ) { the_row(); ?>
                                                    <li><a
                                                            href="<?php the_sub_field('menu_link', 'option'); ?>"><?php the_sub_field('menu_text', 'option'); ?></a>
                                                    </li>
                                                    <?php } ?>
                                                </ul>
                                                <?php } ?>
                                            </div>
                                            <!-- End Mega Menu Menu -->

                                            <?php } elseif ($content_type == 'blog') { ?>

                                            <!-- Start Mega Menu Blog -->
                                            <?php
																				$featured_posts = get_sub_field('select_blog');
																				if( $featured_posts ): ?>
                                            <div class="tta-header-menu-mobile-col-item-data tta-header-megamenu-blog">
                                                <?php if ($open_type_on_mobile == 'tab') { ?>
                                                <div class="tta-back-link"><a
                                                        href="javascript:void(0);"><?php the_sub_field('title', 'option'); ?></a>
                                                </div>
                                                <?php } ?>
                                                <?php foreach( $featured_posts as $post ):
																					setup_postdata($post); ?>
                                                <div class="tta-header-megamenu-blog-item">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                                                        <div class="tta-header-megamenu-blog-item-img">
                                                            <img src="<?php echo $featured_img_url; ?>"
                                                                alt="featured-image">
                                                        </div>
                                                        <?php $categories = get_the_category();
																								if ( ! empty( $categories ) ) {
																									echo '<span>';
																									echo esc_html( $categories[0]->name );
																									echo '</span>';
																								} ?>
                                                        <h6><?php the_title(); ?></h6>
                                                    </a>
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <?php wp_reset_postdata(); ?>
                                            <?php endif; ?>
                                            <!-- End Mega Menu Blog -->

                                            <?php } ?>
                                        </div>
                                        <!-- Start Mega Menu Tab -->
                                        <?php if ($content_type == 'tab') { ?>
                                        <?php if( have_rows('tab_item_group', 'option') ) { ?>
                                        <?php while( have_rows('tab_item_group', 'option') ) { the_row(); ?>
                                        <div
                                            class="tta-header-menu-mobile-col-item tta-header-content-open-type-<?php echo $open_type_on_mobile; ?>">

                                            <!-- Start Mega Menu Content Heading -->
                                            <div class="tta-header-megamenu-content-head">
                                                <h5><?php the_sub_field('tab_title', 'option'); ?></h5>
                                            </div>
                                            <!-- End Mega Menu Content Heading -->

                                            <div class="tta-header-menu-mobile-col-item-data tta-header-megamenu-tab">
                                                <?php if ($open_type_on_mobile == 'tab') { ?>
                                                <div class="tta-back-link"><a
                                                        href="javascript:void(0);"><?php the_sub_field('tab_title', 'option'); ?></a>
                                                </div>
                                                <?php } ?>
                                                <?php the_sub_field('tab_content', 'option'); ?>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php } ?>
                                        <?php } ?>
                                        <!-- End Mega Menu Tab -->

                                        <?php } ?>
                                        <?php } ?>
                                        <!-- End Mega Menu Column Item -->

                                    </li>
                                    <?php } ?>

                                    <?php } ?>
                                    <!-- End Mega Menu Column -->

                                    <?php } ?>
                                </ul>
                                <?php } ?>
                                <!-- End Mega Menu Row -->

                            </li>
                            <!-- End Mega Menu -->
                            <?php } ?>

                            <?php } ?>
                            <?php $header_login_button = get_field( 'header_login_button', 'option' ); ?>
                            <?php if ( $header_login_button ) { ?>
                            <li class="tta-connect-login-mobile">
                                <a href="<?php echo $header_login_button['url']; ?>"
                                    target="<?php echo $header_login_button['target']; ?>">
                                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/11/Group-5635.png"
                                        alt="M_logo" class="img-fluid">
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <!-- End Mobile Menu -->

        </nav>
    </header>
    <!-- End Custom Header -->

    <?php } else { ?>

    <header class="header">
        <nav class="yamm navbar navbar-expand-lg">
            <?php $header_site_logo = get_field( 'header_site_logo', 'option' ); ?>
            <?php if ( $header_site_logo ) { ?>
            <a class="navbar-brand" href="<?php echo site_url(); ?>">
                <img src="<?php echo $header_site_logo['url']; ?>" alt="<?php echo $header_site_logo['alt']; ?>"
                    class="img-fluid" />
            </a>
            <?php } ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <span class="toggle-bar"></span>
                    <span class="toggle-bar"></span>
                    <span class="toggle-bar"></span>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php include('inc/mega_menu_html.php');?>

                <ul class="right-menu">
                    <li>
                        <button class="search">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                    stroke="#494949" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M20.9984 20.9999L16.6484 16.6499" stroke="#494949" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </li>
                    <?php $header_login_button = get_field( 'header_login_button', 'option' ); ?>
                    <?php if ( $header_login_button ) { ?>
                    <li class="log-in">
                        <a href="<?php echo $header_login_button['url']; ?>"
                            target="<?php echo $header_login_button['target']; ?>">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/10/tta-connect-logo-darksvg.svg"
                                alt="tta" class="img-fluid">
                            <!--<span>connect</span>
								<span>login</span>		-->
                        </a>
                    </li>
                    <?php } ?>

                </ul>
            </div>
        </nav>

        <?php
			 /*
			$post_title=""; 
			$episodes_url=""; 
			// WP_Query arguments
			$args = array(
				'post_type'              => array( 'podcast' ),
				'post_status'            => array( 'publish' ),
				'posts_per_page'         => '1',
				'order'                  => 'DESC',
				'orderby'                => 'date',
			);

			// The Query
			$q_podcast = new WP_Query( $args );

			// The Loop
			if ( $q_podcast->have_posts() ) {
				while ( $q_podcast->have_posts() ) {
					$q_podcast->the_post();
					// do something
					 $post_title=get_the_title();
						$podcast_mp3_url = get_field( 'podcast_mp3_url' );
						$podcast_image_url = get_field( 'podcast_image_url' );

					 $episodes_url=$desired_post_slug = get_post_meta( get_the_ID(), 'episodes_url', true );
				}
			} else {
				// no posts found
			}

			// Restore original Post Data
			wp_reset_postdata();
			?>

        <?php $podcast_version=get_field( 'podcast_version', 'option' );  ?>
        <?php if($podcast_version=='podcast-version1'){ ?>

        <div class="new-podcast-available podcast-version1">
            <?php if(!empty($episodes_url)) { ?>
            <a class="podcast-link" href="<?php echo $episodes_url; ?>" target="_blank"></a>
            <?php }else{ ?>
            <a class="podcast-link" href="<?php echo $podcast_image_url; ?>" target="_blank"></a>
            <?php } ?>
            <div class="new-podcast-title"><?php the_field( 'podcast_label_text', 'option' ); ?></div>
            <div class="new-podcast-name"><?php echo  $post_title; ?></div>
            <a class="podcast-close" href="javascript:void(0)"></a>
        </div>
        <?php }else{ ?>

        <div class="new-podcast-available podcast-version2">
            <?php if(!empty($episodes_url)) { ?>
            <a class="podcast-link" href="<?php echo $episodes_url; ?>" target="_blank"></a>
            <?php }else{ ?>
            <a class="podcast-link" href="<?php echo $podcast_image_url; ?>" target="_blank"></a>
            <?php } ?>
            <div class="podcast_bg">
                <div class="new-podcastv2-title"><?php the_field( 'podcast_label_text', 'option' ); ?></div>
                <div class="new-podcastv2-name"><?php echo  $post_title; ?></div>
            </div>
            <a class="podcast-close" href="javascript:void(0)"></a>
        </div>
        <?php } */ ?>
    </header>
    <?php } ?>