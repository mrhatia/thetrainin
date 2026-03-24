<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_culture' ) ) : 
		while ( have_rows( 'block_settings_control_culture' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_culture' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'culture_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<!--<section class="btn-with-dots default-bottom-padding" id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="container">
        <div class="btn-with-dots-inner">
            <div class="dots">
                <img src="<?php echo get_template_directory_uri(); ?>/images/dots.svg" alt="">
            </div>
            <div class="btn-block">
                <a href="#" class="btn btn-primary">Join Our Team</a>
            </div>
            <div class="dots">
                <img src="<?php echo get_template_directory_uri(); ?>/images/dots.svg" alt="">
            </div>
        </div>
    </div>
</section> -->
<section class="round-ring-icons-with-label default-bottom-padding">
    <div class="container">
        <div class="round-ring-icons-with-label-inner">
            <div class="round-ring-icons-with-label-block">
                <div class="section-title <?php echo $class_fontstyle; ?>">
                    <span><?php the_sub_field( 'culture_core_values_career_label' ); ?></span>
                    <h2><?php the_sub_field( 'culture_core_values_career_title' ); ?></h2>
                </div>
				<?php if ( have_rows( 'add_culture_core_values_career' ) ) : ?>
				<?php $count=0; while ( have_rows( 'add_culture_core_values_career' ) ) : the_row(); $count++; ?>
                <div class="round-icon-label-block round-icon-label-block-<?php echo $count; ?>">
				 <?php $culture_icon = get_sub_field( 'culture_icon' ); ?>
				 	<?php if ( $culture_icon ) { ?>
                    <div class="round-icon">
                      	<img src="<?php echo $culture_icon['url']; ?>" alt="<?php echo $culture_icon['alt']; ?>" />
                    </div>
					<?php } ?>
                    <div class="round-label"><?php the_sub_field( 'add_culture_core_expertise_title' ); ?></div>
                </div>
              <?php endwhile; ?>
			<?php endif; ?>
            </div>
        </div>
    </div>
</section>