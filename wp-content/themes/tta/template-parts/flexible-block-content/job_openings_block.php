<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_job' ) ) : 
		while ( have_rows( 'block_settings_control_job' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_job' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'job_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="job-openings-sec " id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="container">
        <div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'job_opening_label' ); ?></span>
			<h2><?php the_sub_field( 'job_opening_title' ); ?></h2>
		</div>
		<?php if ( have_rows( 'add_job_openings' ) ) : ?>
        <div class="job-openings-slider-main">
            <div class="job-openings-slider">
				<?php while ( have_rows( 'add_job_openings' ) ) : the_row(); ?>
                <div class="item">
                    <div class="job-openings-block">
                        <h4><?php the_sub_field( 'add_job_opening_title' ); ?></h4>
                        <label><?php the_sub_field( 'add_job_opening_sub_title' ); ?></label>
                        <p><?php the_sub_field( 'add_job_opening_text' ); ?></p>
						<?php $add_brand_attributes_link = get_sub_field( 'add_job_opening_block' ); ?>
					<?php if ( $add_brand_attributes_link ) { ?>
					<a  href="<?php echo $add_brand_attributes_link['url']; ?>" target="<?php echo $add_brand_attributes_link['target']; ?>" class="btn btn-border-blue"><?php echo $add_brand_attributes_link['title']; ?></a>
					<?php } ?>
						
                    </div>
                </div>
              <?php endwhile; ?>
            </div>
        </div>
		<?php endif; ?>
    </div>
	
</section>