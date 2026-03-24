<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_left_image_big' ) ) : 
		while ( have_rows( 'block_settings_control_left_image_big' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_left_image_big' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'left_image_big_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>

<section class="sectionCl referal-program" id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
			<?php $left_image_with_big_image = get_sub_field( 'left_image_with_big_image' ); ?>
			<?php if ( $left_image_with_big_image ) { ?>
                <div class="referal-program__image">
                 <img src="<?php echo $left_image_with_big_image['url']; ?>" alt="<?php echo $left_image_with_big_image['alt']; ?>" />
                </div>
				<?php } ?>
            </div>
            <div class="col-sm-12 col-md-6 referal-program__content">
                <div class="section-title <?php echo $class_fontstyle; ?>">
                    <span>	<?php the_sub_field( 'left_image_with_big_heading' ); ?></span>
                    <h2><?php the_sub_field( 'left_image_with_big_title' ); ?></h2>
                    <p><?php the_sub_field( 'left_image_with_bigs_hort_text' ); ?></p>
                </div>

                <div class="referal-program__text">
                   	<?php the_sub_field( 'left_image_with_big_list_content' ); ?>
<?php $left_image_with_big_button = get_sub_field( 'left_image_with_big_button' ); ?>
			<?php if ( $left_image_with_big_button ) { ?>
				<a class="btn btn-primary" href="<?php echo $left_image_with_big_button['url']; ?>" target="<?php echo $left_image_with_big_button['target']; ?>"><?php echo $left_image_with_big_button['title']; ?></a>
			<?php } ?>
                
                </div>

            </div>
        </div>

    </div>
</section>
