<?php
if (!defined('ABSPATH')) exit;

$sectionTitle = get_sub_field('section_title');
$sectionTitleSufix = get_sub_field('section_title_sufix');
$description = get_sub_field('section_description');
$button = get_sub_field('button');
if ($button) {
    $button_url = $button['url'];
    $button_title = $button['title'];
    $button_target = $button['target'] ? $button['target'] : '_self';
}
?>
<section class="staff-section">
    <div class="profile-card-outer">
        <div class="container">
            <?php if ($sectionTitleSufix || $sectionTitle || $description) : ?>
            <div class="card-heading">
                <?php if ($sectionTitleSufix || $sectionTitle) : ?>
                <h2><?php echo ($sectionTitle) ?>
                    <?php if ($sectionTitleSufix) : ?><span><?php echo ($sectionTitleSufix) ?></span><?php endif; ?>
                </h2>
                <?php endif; ?>
                <?php if ($description) : ?>
                <p><?php echo ($description) ?></p>
                <?php endif; ?>
            </div>
            <?php endif; ?>
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

                        <h3><?php echo esc_html($display_name); ?></h3>
                        <?php if ($primary_role) : ?>
                        <h4><?php echo esc_html($primary_role); ?></h4>
                        <?php endif; ?>

                        <?php if ($truncated) : ?>
                        <p><?php echo esc_html($truncated); ?></p>
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
            <?php if ($button) : ?>
            <div class="bottom-button-wrapper">
                <a class="view-btn-bottom" href="<?php echo esc_url($button_url); ?>"
                    target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?> <img
                        src="<?php echo get_template_directory_uri(); ?>/images/new-home-images/icon-img.svg"
                        alt=""></a>
            </div>
            <?php endif; ?>
        </div>
        <?php /*
        <div class="slick-slider-wrapper">
            <div class="container">
                <div class="heading-wrapper">
                    <h2><span>Our </span> Brandon Hall <span>Award Winning Case Studies</span> </h2>
                </div>

                <div class="tech-slider-section">
                    <div class="tech-slider-wrapper">

                        <div class="tech-slider">
                            <div class="tech-card dark">
                                <div class="tech-card-inner">
                                    <div class="tech-card-header">
                                        <img src="assets/images/slick-slider-logo-3.png" alt="">
                                    </div>
                                    <div class="tech-card-body">
                                        <span>Fortune 500 Technology Company</span>
                                        <h3>Global Tech Transformation</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam quis nostrud exercitation.</p>
                                        <div class="button-plus-logo">
                                            <a href="#" class="tech-btn">Read More <img src="assets/images/Icon.svg" alt=""></a>
                                            <img class="logo-b" src="assets/images/slider-3.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="popup-content-card" style="display:none;">
                                    <div class="popup-inner">
                                        <div class="popup-text">
                                            <h3>Driving <span> CRM Adoption Through </span>Structured Change Management </h3>
                                            <p><b>Consumers Credit Union</b> partnered with TTA to support the rollout of a
                                                new CRM system across 15 branches serving 220,000+ members. TTA designed and
                                                delivered a comprehensive change management and training strategy aligned to
                                                business goals and built sustainable change practices across the organization.
                                                The program drove 100% CRM adoption in member support departments, increased employee
                                                confidence, strengthened leadership support, and established a repeatable framework for
                                                future change initiatives, earning a Gold
                                                Brandon Hall Group Excellence in Learning Award.</p>
                                            <p class="list-style-heaindg">Key Deliverables:</p>
                                            <ul>
                                                <li>Comprehensive change management strategy aligned to CCU’s CRM rollout</li>
                                                <li>Customized training curriculum, including eLearning, videos, and job aids</li>
                                                <li>LMS-enabled training delivery for organization-wide adoption</li>
                                                <li>Manager-led pilot program to refine training and build ownership</li>
                                                <li>Communication and engagement plan with ongoing updates and feedback loops</li>
                                                <li>Instructor-led and virtual training sessions for managers and employees</li>
                                                <li>Standardized change management tools and practices for enterprise use</li>
                                                <li>Measurement and reporting on adoption, readiness, and learning impact</li>
                                            </ul>



                                        </div>
                                        <div class="popup-image">
                                            <img src="assets/images/popup-logo.png" alt="">
                                            <img src="assets/images/slider-text.png" alt="">
                                            <a href="" class="card-popup-btn">See more Case Studies <img
                                                    src="assets/images/card-popup-btn-errow.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tech-card light">
                                <div class="tech-card-inner">
                                    <div class="tech-card-header">
                                        <img src="assets/images/slick-slider-logo-2.png" alt="">
                                    </div>
                                    <div class="tech-card-body">
                                        <span>Fortune 500 Technology Company</span>
                                        <h3>Global Tech Transformation</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <div class="button-plus-logo">
                                            <a href="#" class="tech-btn">Read More <img src="assets/images/Icon.svg" alt=""></a>
                                            <img class="logo-b" src="assets/images/slider-3.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="popup-content-card" style="display:none;">
                                    <div class="popup-inner">
                                        <div class="popup-text">
                                            <h3>Driving <span> CRM Adoption Through </span>Structured Change Management </h3>
                                            <p><b>Consumers Credit Union</b> partnered with TTA to support the rollout of a
                                                new CRM system across 15 branches serving 220,000+ members. TTA designed and
                                                delivered a comprehensive change management and training strategy aligned to
                                                business goals and built sustainable change practices across the organization.
                                                The program drove 100% CRM adoption in member support departments, increased employee
                                                confidence, strengthened leadership support, and established a repeatable framework for
                                                future change initiatives, earning a Gold
                                                Brandon Hall Group Excellence in Learning Award.</p>
                                            <p class="list-style-heaindg">Key Deliverables:</p>
                                            <ul>
                                                <li>Comprehensive change management strategy aligned to CCU’s CRM rollout</li>
                                                <li>Customized training curriculum, including eLearning, videos, and job aids</li>
                                                <li>LMS-enabled training delivery for organization-wide adoption</li>
                                                <li>Manager-led pilot program to refine training and build ownership</li>
                                                <li>Communication and engagement plan with ongoing updates and feedback loops</li>
                                                <li>Instructor-led and virtual training sessions for managers and employees</li>
                                                <li>Standardized change management tools and practices for enterprise use</li>
                                                <li>Measurement and reporting on adoption, readiness, and learning impact</li>
                                            </ul>



                                        </div>
                                        <div class="popup-image">
                                            <img src="assets/images/popup-logo.png" alt="">
                                            <img src="assets/images/slider-text.png" alt="">
                                            <a href="" class="card-popup-btn">See more Case Studies <img
                                                    src="assets/images/card-popup-btn-errow.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tech-card dark">
                                <div class="tech-card-inner">
                                    <div class="tech-card-header">
                                        <img src="assets/images/slick-slider-logo-3.png" alt="">
                                    </div>
                                    <div class="tech-card-body">
                                        <span>Fortune 500 Technology Company</span>
                                        <h3>Global Tech Transformation</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam quis nostrud exercitation.</p>
                                        <div class="button-plus-logo">
                                            <a href="#" class="tech-btn">Read More <img src="assets/images/Icon.svg" alt=""></a>
                                            <img class="logo-b" src="assets/images/slider-3.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="popup-content-card" style="display:none;">
                                    <div class="popup-inner">
                                        <div class="popup-text">
                                            <h3>Driving <span> CRM Adoption Through </span>Structured Change Management </h3>
                                            <p><b>Consumers Credit Union</b> partnered with TTA to support the rollout of a
                                                new CRM system across 15 branches serving 220,000+ members. TTA designed and
                                                delivered a comprehensive change management and training strategy aligned to
                                                business goals and built sustainable change practices across the organization.
                                                The program drove 100% CRM adoption in member support departments, increased employee
                                                confidence, strengthened leadership support, and established a repeatable framework for
                                                future change initiatives, earning a Gold
                                                Brandon Hall Group Excellence in Learning Award.</p>
                                            <p class="list-style-heaindg">Key Deliverables:</p>
                                            <ul>
                                                <li>Comprehensive change management strategy aligned to CCU’s CRM rollout</li>
                                                <li>Customized training curriculum, including eLearning, videos, and job aids</li>
                                                <li>LMS-enabled training delivery for organization-wide adoption</li>
                                                <li>Manager-led pilot program to refine training and build ownership</li>
                                                <li>Communication and engagement plan with ongoing updates and feedback loops</li>
                                                <li>Instructor-led and virtual training sessions for managers and employees</li>
                                                <li>Standardized change management tools and practices for enterprise use</li>
                                                <li>Measurement and reporting on adoption, readiness, and learning impact</li>
                                            </ul>



                                        </div>
                                        <div class="popup-image">
                                            <img src="assets/images/popup-logo.png" alt="">
                                            <img src="assets/images/slider-text.png" alt="">
                                            <a href="" class="card-popup-btn">See more Case Studies <img
                                                    src="assets/images/card-popup-btn-errow.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tech-card light">
                                <div class="tech-card-inner">
                                    <div class="tech-card-header">
                                        <img src="assets/images/slick-slider-logo-2.png" alt="">
                                    </div>
                                    <div class="tech-card-body">
                                        <span>Fortune 500 Technology Company</span>
                                        <h3>Global Tech Transformation</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <div class="button-plus-logo">
                                            <a href="#" class="tech-btn">Read More <img src="assets/images/Icon.svg" alt=""></a>
                                            <img class="logo-b" src="assets/images/slider-3.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="popup-content-card" style="display:none;">
                                    <div class="popup-inner">
                                        <div class="popup-text">
                                            <h3>Driving <span> CRM Adoption Through </span>Structured Change Management </h3>
                                            <p><b>Consumers Credit Union</b> partnered with TTA to support the rollout of a
                                                new CRM system across 15 branches serving 220,000+ members. TTA designed and
                                                delivered a comprehensive change management and training strategy aligned to
                                                business goals and built sustainable change practices across the organization.
                                                The program drove 100% CRM adoption in member support departments, increased employee
                                                confidence, strengthened leadership support, and established a repeatable framework for
                                                future change initiatives, earning a Gold
                                                Brandon Hall Group Excellence in Learning Award.</p>
                                            <p class="list-style-heaindg">Key Deliverables:</p>
                                            <ul>
                                                <li>Comprehensive change management strategy aligned to CCU’s CRM rollout</li>
                                                <li>Customized training curriculum, including eLearning, videos, and job aids</li>
                                                <li>LMS-enabled training delivery for organization-wide adoption</li>
                                                <li>Manager-led pilot program to refine training and build ownership</li>
                                                <li>Communication and engagement plan with ongoing updates and feedback loops</li>
                                                <li>Instructor-led and virtual training sessions for managers and employees</li>
                                                <li>Standardized change management tools and practices for enterprise use</li>
                                                <li>Measurement and reporting on adoption, readiness, and learning impact</li>
                                            </ul>



                                        </div>
                                        <div class="popup-image">
                                            <img src="assets/images/popup-logo.png" alt="">
                                            <img src="assets/images/slider-text.png" alt="">
                                            <a href="" class="card-popup-btn">See more Case Studies <img
                                                    src="assets/images/card-popup-btn-errow.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tech-card dark">
                                <div class="tech-card-inner">
                                    <div class="tech-card-header">
                                        <img src="assets/images/slick-slider-logo-3.png" alt="">
                                    </div>
                                    <div class="tech-card-body">
                                        <span>Fortune 500 Technology Company</span>
                                        <h3>Global Tech Transformation</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam quis nostrud exercitation.</p>
                                        <div class="button-plus-logo">
                                            <a href="#" class="tech-btn">Read More <img src="assets/images/Icon.svg" alt=""></a>
                                            <img class="logo-b" src="assets/images/slider-3.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="popup-content-card" style="display:none;">
                                    <div class="popup-inner">
                                        <div class="popup-text">
                                            <h3>Driving <span> CRM Adoption Through </span>Structured Change Management </h3>
                                            <p><b>Consumers Credit Union</b> partnered with TTA to support the rollout of a
                                                new CRM system across 15 branches serving 220,000+ members. TTA designed and
                                                delivered a comprehensive change management and training strategy aligned to
                                                business goals and built sustainable change practices across the organization.
                                                The program drove 100% CRM adoption in member support departments, increased employee
                                                confidence, strengthened leadership support, and established a repeatable framework for
                                                future change initiatives, earning a Gold
                                                Brandon Hall Group Excellence in Learning Award.</p>
                                            <p class="list-style-heaindg">Key Deliverables:</p>
                                            <ul>
                                                <li>Comprehensive change management strategy aligned to CCU’s CRM rollout</li>
                                                <li>Customized training curriculum, including eLearning, videos, and job aids</li>
                                                <li>LMS-enabled training delivery for organization-wide adoption</li>
                                                <li>Manager-led pilot program to refine training and build ownership</li>
                                                <li>Communication and engagement plan with ongoing updates and feedback loops</li>
                                                <li>Instructor-led and virtual training sessions for managers and employees</li>
                                                <li>Standardized change management tools and practices for enterprise use</li>
                                                <li>Measurement and reporting on adoption, readiness, and learning impact</li>
                                            </ul>



                                        </div>
                                        <div class="popup-image">
                                            <img src="assets/images/popup-logo.png" alt="">
                                            <img src="assets/images/slider-text.png" alt="">
                                            <a href="" class="card-popup-btn">See more Case Studies <img
                                                    src="assets/images/card-popup-btn-errow.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tech-card light">
                                <div class="tech-card-inner">
                                    <div class="tech-card-header">
                                        <img src="assets/images/slick-slider-logo-2.png" alt="">
                                    </div>
                                    <div class="tech-card-body">
                                        <span>Fortune 500 Technology Company</span>
                                        <h3>Global Tech Transformation</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <div class="button-plus-logo">
                                            <a href="#" class="tech-btn">Read More <img src="assets/images/Icon.svg" alt=""></a>
                                            <img class="logo-b" src="assets/images/slider-3.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="popup-content-card" style="display:none;">
                                    <div class="popup-inner">
                                        <div class="popup-text">
                                            <h3>Driving <span> CRM Adoption Through </span>Structured Change Management </h3>
                                            <p><b>Consumers Credit Union</b> partnered with TTA to support the rollout of a
                                                new CRM system across 15 branches serving 220,000+ members. TTA designed and
                                                delivered a comprehensive change management and training strategy aligned to
                                                business goals and built sustainable change practices across the organization.
                                                The program drove 100% CRM adoption in member support departments, increased employee
                                                confidence, strengthened leadership support, and established a repeatable framework for
                                                future change initiatives, earning a Gold
                                                Brandon Hall Group Excellence in Learning Award.</p>
                                            <p class="list-style-heaindg">Key Deliverables:</p>
                                            <ul>
                                                <li>Comprehensive change management strategy aligned to CCU’s CRM rollout</li>
                                                <li>Customized training curriculum, including eLearning, videos, and job aids</li>
                                                <li>LMS-enabled training delivery for organization-wide adoption</li>
                                                <li>Manager-led pilot program to refine training and build ownership</li>
                                                <li>Communication and engagement plan with ongoing updates and feedback loops</li>
                                                <li>Instructor-led and virtual training sessions for managers and employees</li>
                                                <li>Standardized change management tools and practices for enterprise use</li>
                                                <li>Measurement and reporting on adoption, readiness, and learning impact</li>
                                            </ul>



                                        </div>
                                        <div class="popup-image">
                                            <img src="assets/images/popup-logo.png" alt="">
                                            <img src="assets/images/slider-text.png" alt="">
                                            <a href="" class="card-popup-btn">See more Case Studies <img
                                                    src="assets/images/card-popup-btn-errow.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tech-card dark">
                                <div class="tech-card-inner">
                                    <div class="tech-card-header">
                                        <img src="assets/images/slick-slider-logo-3.png" alt="">
                                    </div>
                                    <div class="tech-card-body">
                                        <span>Fortune 500 Technology Company</span>
                                        <h3>Global Tech Transformation</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam quis nostrud exercitation.</p>
                                        <div class="button-plus-logo">
                                            <a href="#" class="tech-btn">Read More <img src="assets/images/Icon.svg" alt=""></a>
                                            <img class="logo-b" src="assets/images/slider-3.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="popup-content-card" style="display:none;">
                                    <div class="popup-inner">
                                        <div class="popup-text">
                                            <h3>Driving <span> CRM Adoption Through </span>Structured Change Management </h3>
                                            <p><b>Consumers Credit Union</b> partnered with TTA to support the rollout of a
                                                new CRM system across 15 branches serving 220,000+ members. TTA designed and
                                                delivered a comprehensive change management and training strategy aligned to
                                                business goals and built sustainable change practices across the organization.
                                                The program drove 100% CRM adoption in member support departments, increased employee
                                                confidence, strengthened leadership support, and established a repeatable framework for
                                                future change initiatives, earning a Gold
                                                Brandon Hall Group Excellence in Learning Award.</p>
                                            <p class="list-style-heaindg">Key Deliverables:</p>
                                            <ul>
                                                <li>Comprehensive change management strategy aligned to CCU’s CRM rollout</li>
                                                <li>Customized training curriculum, including eLearning, videos, and job aids</li>
                                                <li>LMS-enabled training delivery for organization-wide adoption</li>
                                                <li>Manager-led pilot program to refine training and build ownership</li>
                                                <li>Communication and engagement plan with ongoing updates and feedback loops</li>
                                                <li>Instructor-led and virtual training sessions for managers and employees</li>
                                                <li>Standardized change management tools and practices for enterprise use</li>
                                                <li>Measurement and reporting on adoption, readiness, and learning impact</li>
                                            </ul>



                                        </div>
                                        <div class="popup-image">
                                            <img src="assets/images/popup-logo.png" alt="">
                                            <img src="assets/images/slider-text.png" alt="">
                                            <a href="" class="card-popup-btn">See more Case Studies <img
                                                    src="assets/images/card-popup-btn-errow.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tech-card light">
                                <div class="tech-card-inner">
                                    <div class="tech-card-header">
                                        <img src="assets/images/slick-slider-logo-2.png" alt="">
                                    </div>
                                    <div class="tech-card-body">
                                        <span>Fortune 500 Technology Company</span>
                                        <h3>Global Tech Transformation</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <div class="button-plus-logo">
                                            <a href="#" class="tech-btn">Read More <img src="assets/images/Icon.svg" alt=""></a>
                                            <img class="logo-b" src="assets/images/slider-3.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="popup-content-card" style="display:none;">
                                    <div class="popup-inner">
                                        <div class="popup-text">
                                            <h3>Driving <span> CRM Adoption Through </span>Structured Change Management </h3>
                                            <p><b>Consumers Credit Union</b> partnered with TTA to support the rollout of a
                                                new CRM system across 15 branches serving 220,000+ members. TTA designed and
                                                delivered a comprehensive change management and training strategy aligned to
                                                business goals and built sustainable change practices across the organization.
                                                The program drove 100% CRM adoption in member support departments, increased employee
                                                confidence, strengthened leadership support, and established a repeatable framework for
                                                future change initiatives, earning a Gold
                                                Brandon Hall Group Excellence in Learning Award.</p>
                                            <p class="list-style-heaindg">Key Deliverables:</p>
                                            <ul>
                                                <li>Comprehensive change management strategy aligned to CCU’s CRM rollout</li>
                                                <li>Customized training curriculum, including eLearning, videos, and job aids</li>
                                                <li>LMS-enabled training delivery for organization-wide adoption</li>
                                                <li>Manager-led pilot program to refine training and build ownership</li>
                                                <li>Communication and engagement plan with ongoing updates and feedback loops</li>
                                                <li>Instructor-led and virtual training sessions for managers and employees</li>
                                                <li>Standardized change management tools and practices for enterprise use</li>
                                                <li>Measurement and reporting on adoption, readiness, and learning impact</li>
                                            </ul>



                                        </div>
                                        <div class="popup-image">
                                            <img src="assets/images/popup-logo.png" alt="">
                                            <img src="assets/images/slider-text.png" alt="">
                                            <a href="" class="card-popup-btn">See more Case Studies <img
                                                    src="assets/images/card-popup-btn-errow.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
            </div>
        </div>
        */ ?>
    </div>
</section>

<h1>atest asdasd </h1>