<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_logo' ) ) : 
		while ( have_rows( 'block_settings_control_logo' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_logo' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'logo_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="sectionCl tta-clients" id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="container">
    
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="section-title <?php echo $class_fontstyle; ?>">
                    <h2><?php the_sub_field( 'logo_with_content_heading' ); ?></h2>
                </div>

                <?php the_sub_field( 'logo_with_content_content' ); ?>

            </div>
<?php $logo_with_content_logo_images = get_sub_field( 'logo_with_content_logo' ); ?>
			<?php if ( $logo_with_content_logo_images ) :  ?>
				
            <div class="col-sm-12 col-md-6">
                <div class="client-logo_grid">
				<?php foreach ( $logo_with_content_logo_images as $logo_with_content_logo_image ): ?>
                    <span><img src="<?php echo $logo_with_content_logo_image['url']; ?>" alt="<?php echo $logo_with_content_logo_image['alt']; ?>" /></span>
                   	<?php endforeach; ?>
			<?php endif; ?>
                </div>
            </div>

        </div>

    </div>
</section>
