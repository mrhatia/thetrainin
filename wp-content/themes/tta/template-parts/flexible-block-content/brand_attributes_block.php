<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_brand' ) ) : 
		while ( have_rows( 'block_settings_control_brand' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_brand' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'brand_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="tab-slider-sec  default-bottom-padding" id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="tab-slider-inner">
        <div class="container">
            <div class="section-title <?php echo $class_fontstyle; ?>">
                <span><?php the_sub_field( 'brand_attributes_heading' ); ?></span>
                <h2><?php the_sub_field( 'brand_attributes_title' ); ?></h2>
            </div>
            <div class="slider slider-nav">
			<?php if ( have_rows( 'add_brand_attributes' ) ) : ?>
				<?php while ( have_rows( 'add_brand_attributes' ) ) : the_row(); ?>
                <div class="item item-nav-slide"><span><?php the_sub_field( 'add_brand_attributes_title' ); ?></span></div>
               <?php endwhile; ?>
			<?php endif; ?>
            </div>
            <div class="action">
                <div class="action-inner">
			<?php if ( have_rows( 'add_brand_attributes' ) ) : ?>
				<?php $counter=0; while ( have_rows( 'add_brand_attributes' ) ) : the_row(); $counter++; ?>
                    <a href="javascript:void(0)" data-slide="<?php echo $counter; ?>" class="item-nav-slide <?php if( $counter ==1 ){ echo "active"; } ?>"><span><?php the_sub_field( 'add_brand_attributes_title' ); ?></span></a>
                   <?php endwhile; ?>
			<?php endif; ?>
                </div>
            </div>
        </div> 
        <div class="slider slider-for">
		<?php if ( have_rows( 'add_brand_attributes' ) ) : ?>
				<?php while ( have_rows( 'add_brand_attributes' ) ) : the_row(); ?>
            <div class="item item-main-slide">
			<?php $add_brand_attributes_image = get_sub_field( 'add_brand_attributes_image' ); ?>
				<?php if ( $add_brand_attributes_image ) { ?>
                <div class="item-main-slide-img">
                    <img src="<?php echo $add_brand_attributes_image['url']; ?>" alt="<?php echo $add_brand_attributes_image['alt']; ?>" />
                </div>
				<?php } ?>
                <div class="item-main-slide-caps">
                    <div class="container">
                        <div class="item-main-slide-caps-inner">
                            <h6 style="color:<?php the_sub_field( 'add_brand_attributes_color' ); ?>;"><?php the_sub_field( 'add_brand_attributes_title' ); ?></h6>
                            <p><?php the_sub_field( 'add_brand_attributes_short_text' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
              <?php endwhile; ?>
			<?php endif; ?>
        </div>
    </div>
</section> 