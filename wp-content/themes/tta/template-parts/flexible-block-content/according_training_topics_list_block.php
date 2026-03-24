<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>

<?php if ( have_rows( 'block_settings_control_according_training' ) ) : 
		while ( have_rows( 'block_settings_control_according_training' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_according_training' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'according_training_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="popular-accordion" id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="container">
        <div class="popular-accordion-inner">
            <div class="section-title <?php echo $class_fontstyle; ?>">
                <span><?php the_sub_field( 'according_training_heading' ); ?></span>
                <h2><?php the_sub_field( 'according_training_heading_title' ); ?></h2>
            </div>
	<?php if ( have_rows( 'add_training_topics_list' ) ) : ?>
				<?php  $i = 0;  while ( have_rows( 'add_training_topics_list' ) ) : the_row(); $i++; ?>
            <div class="popular-accordion-block">
                <div class="popular-accordion-tit accordion-title <?php if( $i ==1 ){ echo "active"; } ?>">
                    <span></span>
                    <?php the_sub_field( 'add_training_topics_list_title' ); ?>
                </div>
                <div class="popular-accordion-caps accordion-caps <?php if( $i ==1 ){ echo "active"; } ?>">
                    <div class="popular-accordion-table">
					<?php if ( have_rows( 'training_topics_list' ) ) : ?>
						<?php while ( have_rows( 'training_topics_list' ) ) : the_row(); ?>
						 <div class="popular-accordion-cell">
							<?php the_sub_field( 'topics_name' ); ?>
							</div>
						<?php endwhile; ?>
						 <?php endif; ?>
                       
                    </div>
                </div>
            </div>
         <?php endwhile; ?>
   <?php endif; ?>
        </div>
    </div>
</section>