<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_core_expertise_six' ) ) : 
		while ( have_rows( 'block_settings_control_core_expertise_six' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_core_expertise' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'core_expertise_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<?php $core_expertise_background_image = get_sub_field( 'core_expertise_background_image_six' ); ?>
			<?php if ( $core_expertise_background_image ) { 
			$core_background_image =$core_expertise_background_image['url'];
            } ?>
<section class="core-expertise-sec new_expertise_section" style="background-image: url(<?php echo $core_background_image; ?>)"  id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="container">
        <div class="section-title <?php echo $class_fontstyle; ?>">
           	<span><?php the_sub_field( 'core_expertise_label_six' ); ?></span>
			<h2><?php the_sub_field( 'core_expertise_title_six' ); ?></h2>
        </div>
        <div class="core-expertise-cover">
            <?php if ( have_rows( 'add_core_expertise_six' ) ) : ?>
            <div class="core-expertise-cover-inner">
                <div class="row">
                    <?php while ( have_rows( 'add_core_expertise_six' ) ) : the_row(); ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="core-card">
                           
                           
						<?php $add_core_expertise_icno = get_sub_field( 'add_core_expertise_icno_six' ); ?>
								<?php if ( $add_core_expertise_icno ) { ?>
                            <div class="women-owned_logo">
                               <img src="<?php echo $add_core_expertise_icno['url']; ?>" alt="<?php echo $add_core_expertise_icno['alt']; ?>"  class="img-fluid" />
                            </div>
								<?php } ?>
								 <h4 class="match" data-mh="core-card-title"><?php the_sub_field( 'add_core_expertise_title_six' ); ?></h4>
								 	<?php the_sub_field( 'add_core_expertise_content_six' ); ?>
                        </div>
                    </div>
				<?php endwhile; ?>
                  
                </div>
            </div>   
		<?php endif; ?>
        </div>
    </div>
</section>
<!-- // New Block -->