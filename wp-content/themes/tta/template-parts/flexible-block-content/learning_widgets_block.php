<?php 
$banner_header_title = get_sub_field('banner_header_title');
$banner_header_text = get_sub_field('banner_header_text');
$banner_header_button = get_sub_field('banner_header_button');

// Widget One
$widget_one_title = get_sub_field('widget_one_title');
$widget_one_text = get_sub_field('widget_one_text');
$widget_one_sub_text = get_sub_field('widget_one_sub_text');
$widget_one_button = get_sub_field('widget_one_button');

// Widget Two
$widget_two_title = get_sub_field('widget_two_title');
$widget_two_text = get_sub_field('widget_two_text');
$widget_two_button = get_sub_field('widget_two_button');

// Widget Three
$widget_three_title = get_sub_field('widget_three_title');
$widget_three_text = get_sub_field('widget_three_text');
$widget_three_sub_text = get_sub_field('widget_three_sub_text');

// Widget Four
$widget_four_title = get_sub_field('widget_four_title');
$widget_four_heading = get_sub_field('widget_four_heading');
$widget_four_logo = get_sub_field('widget_four_logo');
$widget_four_text = get_sub_field('widget_four_text');
$widget_four_button = get_sub_field('widget_four_button');
$episode_name = get_sub_field('episode_name');
$episode_thumbnail = get_sub_field('episode_thumbnail');
$episode_description = get_sub_field('episode_description');
$episode_host = get_sub_field('episode_host');
?>

<section class="strategists-section">
    <div class="s-64"></div>
    <div class="wrapper">

        <!-- SECTION TITLE -->
        <div class="strategists-section-title">
            <?php if (!empty($banner_header_title)) { ?>
                <h2><?php echo $banner_header_title; ?></h2>
            <?php } ?>
        </div>

        <div class="strategists-cards-main">

            <div class="strategists-cards">

                 <?php
                // ── Server-side render: fetch talent from plugin's cached API ──
                $tta_talent = [];
                $tta_per_page = 6;
                $tta_fallback_img = get_template_directory_uri() . '/images/avatar.png';
                $tta_badge_img = get_template_directory_uri() . '/images/new-home-images/verified-badge.png';
                $tta_arrow_icon = get_template_directory_uri() . '/images/new-home-images/icon-img.svg';

                // Use the plugin's cached_get if available (reads from transient first)
                if (class_exists('TTA_Connect_Featured_Talent')) {
                    $api_url = TTA_Connect_Featured_Talent::api_base_url() . '/SplashPage/GetFeaturedTalent';
                    $result = get_transient('tta_featured_talent_all');
                    if ($result === false) {
                        $response = wp_remote_get($api_url, [
                            'timeout'   => 15,
                            'sslverify' => !defined('WP_LOCAL_DEV'),
                            'headers'   => ['Accept' => 'application/json'],
                        ]);
                        if (!is_wp_error($response)) {
                            $body = wp_remote_retrieve_body($response);
                            $json = json_decode($body, true);
                            $code = (int) wp_remote_retrieve_response_code($response);
                            if ($json !== null && $code >= 200 && $code < 300) {
                                $result = ['success' => true, 'data' => $json];
                                set_transient('tta_featured_talent_all', $result, 600);
                            }
                        }
                    }
                    if (!empty($result['success']) && !empty($result['data'])) {
                        $data = $result['data'];
                        // Normalize: could be array or object map
                        if (is_array($data) && !isset($data[0]) && !empty($data)) {
                            $tta_talent = array_values($data);
                        } else {
                            $tta_talent = is_array($data) ? $data : [];
                        }
                    }
                }

                // Helper: badge label from instrStatus
                if (!function_exists('tta_get_badge_label')) :
                function tta_get_badge_label($status) {
                    if (empty($status)) return '';
                    $status = strtoupper($status);
                    if (in_array($status, ['CT', 'CID', 'CTCID'])) return 'CERTIFIED';
                    if ($status === 'V') return 'VERIFIED';
                    if ($status === 'Q') return 'QUALIFIED';
                    return '';
                }
                endif;
                ?>

                <div class="profile-card-wrapper-inner" id="ttaExpertsGrid">
                    <?php if (empty($tta_talent)) : ?>
                    <p style="text-align:center;padding:20px;">No experts available at this time.</p>
                    <?php else :
                        foreach ($tta_talent as $idx => $t) :
                            $first = !empty($t['fname']) ? $t['fname'] : '';
                            $last = !empty($t['lname']) ? $t['lname'] : '';
                            $display_name = ($first && $last) ? $first . ' ' . substr($last, 0, 1) . '.' : ($first ?: ($last ?: 'Expert'));

                            $roles = [];
                            if (!empty($t['roles']) && is_array($t['roles'])) {
                                foreach ($t['roles'] as $r) {
                                    if (!empty($r['roleName'])) $roles[] = $r['roleName'];
                                }
                            }
                            $primary_role = !empty($roles[0]) ? $roles[0] : '';

                            $badge_label = tta_get_badge_label(!empty($t['instrStatus']) ? $t['instrStatus'] : '');

                            $img_url = !empty($t['profileImageUrl']) ? $t['profileImageUrl'] : $tta_fallback_img;

                            $about = !empty($t['aboutMe']) ? $t['aboutMe'] : '';
                            $truncated = (mb_strlen($about) > 120) ? mb_substr($about, 0, 120) . '...' : $about;

                            // Skills - collect and deduplicate
                            $all_skills = [];
                            $seen_skills = [];
                            if (!empty($t['skills']) && is_array($t['skills'])) {
                                foreach ($t['skills'] as $role_skills) {
                                    if (!is_array($role_skills)) continue;
                                    foreach ($role_skills as $skill) {
                                        $key = strtolower($skill);
                                        if (!isset($seen_skills[$key])) {
                                            $seen_skills[$key] = true;
                                            $all_skills[] = $skill;
                                        }
                                    }
                                }
                            }
                            $visible_skills = array_slice($all_skills, 0, 4);

                            // Brand logos
                            $logos = [];
                            if (!empty($t['brandLogos']) && is_array($t['brandLogos'])) {
                                foreach ($t['brandLogos'] as $b) {
                                    if (!empty($b['logoUrl'])) $logos[] = $b;
                                }
                            }
                            $logos = array_slice($logos, 0, 6);

                            $profile_url = !empty($t['publicProfileUrl']) ? $t['publicProfileUrl'] : '#';

                            // Hide cards beyond first page with CSS, toggled by JS
                            $hidden = ($idx >= $tta_per_page) ? ' style="display:none;"' : '';
                    ?>
                    <div class="profile-card" data-tta-card="<?php echo $idx; ?>" <?php echo $hidden; ?>>
                        <div class="main-profile-card">
                            <div class="profile-img-left">
                                <div class="profile-img">
                                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($display_name); ?>"
                                        loading="lazy" onerror="this.src='<?php echo esc_url($tta_fallback_img); ?>'">
                                    <?php if ($badge_label) : ?>
                                    <div class="profile-logo">
                                        <span class="certified"><?php echo esc_html($badge_label); ?></span>
                                        <img src="<?php echo esc_url($tta_badge_img); ?>" alt="Badge">
                                    </div>
                                    <?php endif; ?>
                                </div>
                                 <div class="main-profile-card-button">
                                    <div class="card-button">
                                        <a href="<?php echo esc_url($profile_url); ?>" class="view-btn" target="_blank"
                                            rel="noopener">
                                            View Profile
                                            <img src="<?php echo esc_url($tta_arrow_icon); ?>" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-profile-card-content">

                                <h3><?php echo esc_html($display_name); ?></h3>
                                <?php if ($primary_role) : ?>
                                    <h4><?php echo esc_html($primary_role); ?></h4>
                                <?php endif; ?>

                                <?php if ($truncated) : ?>
                                <p><?php echo esc_html($truncated); ?></p>
                                <?php endif; ?>

                                 <?php if (!empty($logos)) : ?>
                                    <div class="worked-with">
                                        <div class="text-item">
                                            <p>Worked with:</p>
                                        </div>
                                        <div class="logos-slider">
                                            <div class="logo-track">
                                                <?php foreach ($logos as $logo) : ?>
                                                <div class="logo-item"><img src="<?php echo esc_url($logo['logoUrl']); ?>"
                                                        alt="<?php echo esc_attr(!empty($logo['name']) ? $logo['name'] : ''); ?>">
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($visible_skills)) : ?>
                                <div class="tags">
                                    <?php foreach ($visible_skills as $skill) : ?>
                                    <span><?php echo esc_html($skill); ?></span>
                                    <?php endforeach; ?>
                                </div>
                                <?php elseif (!empty($roles)) : ?>
                                <div class="tags">
                                    <?php foreach (array_slice($roles, 0, 4) as $role) : ?>
                                    <span><?php echo esc_html($role); ?></span>
                                    <?php endforeach; ?>
                                </div>
                                <?php endif; ?>

                               
                            </div>
                        </div>
                       
                    </div>
                    <?php endforeach; endif; ?>
                </div>

                <?php if (count($tta_talent) > $tta_per_page) : ?>
                <div class="bottom-link-text">
                    <a href="#" id="ttaSeeMoreBtn">See More Featured Talent</a>
                </div>
                <script>
                (function() {
                    var btn = document.getElementById('ttaSeeMoreBtn');
                    var perPage = <?php echo $tta_per_page; ?>;
                    var shown = perPage;
                    var cards = document.querySelectorAll('#ttaExpertsGrid .profile-card[data-tta-card]');
                    var total = cards.length;

                    btn.addEventListener('click', function(e) {
                        e.preventDefault();
                        shown += perPage;
                        for (var i = 0; i < Math.min(shown, total); i++) {
                            cards[i].style.display = '';
                        }
                        if (shown >= total) btn.style.display = 'none';
                    });
                })();
                </script>
                <?php else : ?>
                <div class="bottom-link-text">
                    <a href="#">See More Featured Talent</a>
                </div>
                <?php endif; ?>

                <div class="strategists-bottom-content">
                    <div class="content">
                        <?php if (!empty($banner_header_text)) { ?>
                            <p><?php echo $banner_header_text; ?></p>
                        <?php } ?>
                    </div>

                    <?php if (!empty($banner_header_button)) { 
                        $btn = $banner_header_button;
                    ?>
                        <a class="view-btn-bottom" href="<?php echo esc_url($btn['url']); ?>" target="<?php echo esc_attr($btn['target'] ?: '_self'); ?>">
                            <?php echo esc_html($btn['title']); ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/new-home-images/icon-img.svg" alt="">
                        </a>
                    <?php } ?>

                </div>
            </div>

            <div class="strategists-right">
                
                <!-- Widget One -->
                <div class="tta-connect-card widget-card">
                    <div class="content-main">
                        
                        <?php if (!empty($widget_one_title)) { ?>
                            <h3><?php echo $widget_one_title; ?></h3>
                        <?php } ?>

                        <div class="content-box">

                            <?php if (!empty($widget_one_text)) { ?>
                                <?php echo $widget_one_text; ?>
                            <?php } ?>

                            <?php if (!empty($widget_one_button)) { ?>
                                <div class="content-box-button">
                                     <?php if (!empty($widget_one_sub_text)) { ?>
                                        <p><?php echo $widget_one_sub_text; ?></p>
                                    <?php } ?>
                                    <a class="view-btn-bottom" href="<?php echo esc_url($widget_one_button['url']); ?>" target="<?php echo esc_attr($widget_one_button['target'] ?: '_self'); ?>">
                                        <?php echo esc_html($widget_one_button['title']); ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/new-home-images/icon-img.svg" alt="">
                                    </a>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>

                <!-- Widget Two -->
                <div class="tta-talent-capabilities-card widget-card blue-box">
                    <div class="content-main">

                        <?php if (!empty($widget_two_title)) { ?>
                            <h3><?php echo $widget_two_title; ?></h3>
                        <?php } ?>

                        <div class="content-box">

                            <?php if (!empty($widget_two_text)) { ?>
                                <?php echo $widget_two_text; ?>
                            <?php } ?>


                            <?php if (!empty($widget_two_button)) { ?>
                                <div class="content-box-button">
                                    <a class="link-button download-brochure" href="<?php echo esc_url($widget_two_button['url']); ?>" target="<?php echo esc_attr($widget_two_button['target'] ?: '_self'); ?>">
                                        <?php echo esc_html($widget_two_button['title']); ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/new-home-images/icon-img.svg" alt="">
                                    </a>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>

                <!-- Widget Three -->
                <div class="tta-testimonials-card widget-card">
                    <div class="content-main">

                        <?php if (!empty($widget_three_title)) { ?>
                            <h3><?php echo $widget_three_title; ?></h3>
                        <?php } ?>

                        <div class="content-box">
                            <div class="tst-content main-title">
                                <?php if (!empty($widget_three_text)) { ?>
                                   <?php echo $widget_three_text; ?>
                                <?php } ?>

                            </div>
                             <div class="tst-bottom-cotnent">
                                <?php if (!empty($widget_three_sub_text)) { ?>
                                    <p><?php echo $widget_three_sub_text; ?></p>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Widget Four -->
                <div class="tta-podcast-card widget-card blue-box">
                    <div class="content-main">

                        <?php if (!empty($widget_four_title)) { ?>
                            <h3><?php echo $widget_four_title; ?></h3>
                        <?php } ?>

                        <div class="content-box">
                            <div class="podcast-box">

                                <div class="podcast-top">

                                    <?php if (!empty($widget_four_logo)) { ?>
                                        <div class="podcast-logo">
                                            <div class="logo-inner">
                                                    <img src="<?php echo esc_url($widget_four_logo); ?>" alt="">
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <div class="podcast-content">
                                        <h3><?php echo $widget_four_heading; ?></h3>
                                    </div>

                                </div>
                                <?php if (!empty($widget_four_text)) { ?>
                                    <?php echo $widget_four_text; ?>
                                <?php } ?>

                                <!-- Episode -->
                                <div class="episode-card">
                                    
                                    <div class="episode-left">
                                        <span class="episode-number"><?php echo $episode_name; ?></span>
                                        <h4><?php echo $episode_description; ?></h4>
                                    </div>

                                    <div class="episode-right">
                                        <?php if (!empty($episode_thumbnail)) { ?>
                                            <img src="<?php echo esc_url($episode_thumbnail); ?>" alt="">
                                        <?php } ?>
                                        <span class="guest-name"><?php echo $episode_host; ?></span>
                                    </div>

                                </div>

                                <!-- CTA -->
                                <?php if (!empty($widget_four_button)) { ?>
                                    <div class="content-box-button">
                                        <a class="link-button download-brochure" href="<?php echo esc_url($widget_four_button['url']); ?>" target="<?php echo esc_attr($widget_four_button['target'] ?: '_self'); ?>">
                                            <?php echo esc_html($widget_four_button['title']); ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/new-home-images/icon-img.svg" alt="">
                                        </a>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>