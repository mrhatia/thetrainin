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


<section class="main-banner new_banner_style banner_v3 contact_section-version1">
<?php $contact_us_layout_image = get_field( 'contact_us_layout_image' ); ?>
<?php if ( $contact_us_layout_image ) { ?>
    <div class="full_width-bannerimg">
        <img src="<?php echo $contact_us_layout_image['url']; ?>" alt="<?php echo $contact_us_layout_image['alt']; ?>" />
    </div>
	<?php } ?>
    <div class="overlap_banner_content">
        <div class="container">
          <div class="banner-detail contact-banner-detail">
               <div class="banner-detail__flex">
                    <div class="main-title">
                        <h1><?php the_field( 'contact_us_layout_title' ); ?></h1>
                    </div>
                    <p><?php the_field( 'sub_contact_us_layout_title' ); ?></p>
                    <p><?php the_field( 'sub_contact_us_layout_description' ); ?></p>    
                </div>
    
                <div class="banner_contact-section tta-contact-from">
                    <?php the_field( 'contact_us_layout_frm_code' ); ?>
                </div>
        </div>
    </div>
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
