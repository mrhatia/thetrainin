<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */ 
?>

 <?php $full_image_image_position= get_sub_field( 'full_image_image_position' );
if($full_image_image_position=='image_position_right'){ ?>
<section class="our_eLearning-sec-cl image_position_right">
    
        <?php $full_image_with_eLearning_image = get_sub_field( 'full_image_with_eLearning_image' ); ?>
        <div class="our_eLearning-flex">
            <div class="our_eLearning-sec-bg" style="background:url(<?php echo $full_image_with_eLearning_image['url']; ?>);"></div>
            <?php if ( $full_image_with_eLearning_image ) { ?>
                <div class="our_eLearning-sec-image">
                    <img src="<?php echo $full_image_with_eLearning_image['url']; ?>" alt="<?php echo $full_image_with_eLearning_image['alt']; ?>" />
                    </div>
			<?php } ?>
            <div class="our_eLearning-sec-text">
                <?php the_sub_field( 'full_image_with_eLearning_content' ); ?>
            </div>
        </div>

  
</section>
<?php }elseif($full_image_image_position=='image_position_left'){ ?> 
<section class="our_eLearning-sec-cl_left-img image_position_left">
    
        <?php $full_image_with_eLearning_image = get_sub_field( 'full_image_with_eLearning_image' ); ?>
        <div class="our_eLearning-flex">
            <div class="our_eLearning-sec-bg" style="background:url(<?php echo $full_image_with_eLearning_image['url']; ?>);"></div>
			<?php if ( $full_image_with_eLearning_image ) { ?>
            <div class="our_eLearning-sec-image">
              <img src="<?php echo $full_image_with_eLearning_image['url']; ?>" alt="<?php echo $full_image_with_eLearning_image['alt']; ?>" />
            </div>
			<?php } ?>
            <div class="our_eLearning-sec-text">
                <?php the_sub_field( 'full_image_with_eLearning_content' ); ?>
            </div>
        </div>
        
</section>
<?php }elseif($full_image_image_position=='image_position_canter'){ ?> 
<!-- Center Version -->
<section class="our_eLearning-sec-cl_left-img image_position_center">
    
        <?php $full_image_with_eLearning_image = get_sub_field( 'full_image_with_eLearning_image' ); ?>
        <div class="our_eLearning-flex">
            <div class="our_eLearning-sec-text">
                <?php the_sub_field( 'full_image_with_eLearning_content' ); ?>
            </div>
			<?php if ( $full_image_with_eLearning_image ) { ?>
            <div class="our_eLearning-sec-bg" style="background:url(<?php echo $full_image_with_eLearning_image['url']; ?>);"></div>
				<?php } ?>
        </div>
        
</section>
<!-- // Center Version -->
<?php } ?>  