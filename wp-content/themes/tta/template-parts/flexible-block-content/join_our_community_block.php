<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_community' ) ) : 
		while ( have_rows( 'block_settings_control_community' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_community' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'community_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>

<section class="way-sec community_main_column" id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="container">
        <div class="section-title <?php echo $class_fontstyle; ?>">
            <span><?php the_sub_field( 'join_our_community_heading' ); ?></span>
            <h2><?php the_sub_field( 'join_our_community_title' ); ?></h2>
        </div>
        <div class="row justify-content-center">
		<?php if ( have_rows( 'add_our_community' ) ) : ?>
				<?php while ( have_rows( 'add_our_community' ) ) : the_row(); ?>
            <div class="col-sm-12 col-md-6 col-lg-4 justify_our_community">
                <div class="talent-block">
                    <div class="join_comm_main">
                        <h2><?php the_sub_field( 'add_our_community_title' ); ?></h2>
                        <p><?php the_sub_field( 'add_our_community_sub_title' ); ?></p>
						<?php $add_our_community_image_logo = get_sub_field( 'add_our_community_image_logo' ); ?>
					<?php if ( $add_our_community_image_logo ) { ?>
						 <p><img src="<?php echo $add_our_community_image_logo['url']; ?>" alt="<?php echo $add_our_community_image_logo['alt']; ?>" /></p>
					<?php } ?>

                    </div>
					<?php $add_our_community_link = get_sub_field( 'add_our_community_link' ); ?>
					<?php if ( $add_our_community_link ) { ?>
						<a  class="btn btn-capsule" href="<?php echo $add_our_community_link['url']; ?>" target="<?php echo $add_our_community_link['target']; ?>"><?php echo $add_our_community_link['title']; ?></a>
					<?php } ?>
                </div>
            </div>
       <?php endwhile; ?>
			
			<?php endif; ?>
        </div>

    </div>
</section>