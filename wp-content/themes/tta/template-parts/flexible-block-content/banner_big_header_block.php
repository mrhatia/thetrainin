<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php $banner_big_choose_image_layout =get_sub_field( 'banner_big_choose_image_layout' ); 
if($banner_big_choose_image_layout=='banner_big_right'){ ?>
			
<section class="main-banner new_banner_v2_stlye banner_image_right_align">
    <div class="row align-items-center">
        <div class="col-sm-12 col-md-12 col-lg-6 new_banner_v2_stlye_content">
            <div class="banner-detail">
                <div class="top-label"> <?php the_sub_field( 'banner_big_header_gradient_heading' ); ?> </div>
                <div class="main-title">
                    <h1><?php the_sub_field( 'banner_big_header_title' ); ?></h1>
                </div>
                
               <?php the_sub_field( 'banner_header_content' ); ?>

			<?php $banner_big_primary_button_type = get_sub_field( 'banner_big_primary_button_type' ); ?>
			<?php if ( $banner_big_primary_button_type ) { ?>
                <div class="banner-btn">
                  <a class="btn btn-primary" href="<?php echo $banner_big_primary_button_type['url']; ?>" target="<?php echo $banner_big_primary_button_type['target']; ?>"><?php echo $banner_big_primary_button_type['title']; ?></a>
                </div>
				<?php } ?>
            </div>
        </div>	
		<?php $banner_big_header_image = get_sub_field( 'banner_big_header_image' ); ?>
			<?php if ( $banner_big_header_image ) { ?>	
        <div class="col-sm-12 col-md-12 col-lg-6 new_banner_v2_stlye_image">
            <div class="banner_white_layers">
               <img src="<?php echo $banner_big_header_image['url']; ?>" alt="<?php echo $banner_big_header_image['alt']; ?>" class="img-fluid" />
            </div>
        </div>
		<?php } ?>
    </div>
</section>
<?php }elseif($banner_big_choose_image_layout=='banner_big_left') { ?>
<section class="main-banner new_banner_v2_stlye banner_image_left_align">
    <div class="row align-items-center">
        <?php $banner_big_header_image = get_sub_field( 'banner_big_header_image' ); ?>
			<?php if ( $banner_big_header_image ) { ?>	
        <div class="col-sm-12 col-md-12 col-lg-6 new_banner_v2_stlye_image">
            <div class="banner_white_layers">
                 <img src="<?php echo $banner_big_header_image['url']; ?>" alt="<?php echo $banner_big_header_image['alt']; ?>" class="img-fluid" />
            </div>
        </div>
		<?php } ?>
        <div class="col-sm-12 col-md-12 col-lg-6 new_banner_v2_stlye_content">
            <div class="banner-detail">
                <div class="top-label"><?php the_sub_field( 'banner_big_header_gradient_heading' ); ?> </div>
                <div class="main-title">
                    <h1><?php the_sub_field( 'banner_big_header_title' ); ?></h1>
                </div>
                
               <?php the_sub_field( 'banner_header_content' ); ?>

			  <?php $banner_big_primary_button_type = get_sub_field( 'banner_big_primary_button_type' ); ?>
				<?php if ( $banner_big_primary_button_type ) { ?>
                <div class="banner-btn">
                  <a class="btn btn-primary" href="<?php echo $banner_big_primary_button_type['url']; ?>" target="<?php echo $banner_big_primary_button_type['target']; ?>"><?php echo $banner_big_primary_button_type['title']; ?></a>
                </div>
				<?php } ?>
            </div>
        </div>
        
    </div>
</section>
<?php } ?>