<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_tta_connect' ) ) : 
		while ( have_rows( 'block_settings_control_tta_connect' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_tta_connect' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'tta_connect_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="how-it-work-sec" id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="container">
        <div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'tta_connect_label' ); ?></span>
			<h2><?php the_sub_field( 'tta_connect_heading' ); ?></h2>
		</div>
		<?php if ( have_rows( 'add_tta_connect' ) ) : ?>
				<?php while ( have_rows( 'add_tta_connect' ) ) : the_row(); ?>
        <div class="how-it-work-block">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="main-title">
                        <h1><?php the_sub_field( 'add_tta_connect_title' ); ?></h1>
                    </div>
                    <p><?php the_sub_field( 'add_tta_connect_text' ); ?></p>
                </div>
				<?php $add_tta_connect_image = get_sub_field( 'add_tta_connect_image' ); ?>
					<?php if ( $add_tta_connect_image ) { ?>
                <div class="col-sm-12 col-md-6">
                    <div class="how-it-work-img" style="background-image:url(<?php echo $add_tta_connect_image['url']; ?>)"></div>
                </div>
				<?php } ?>
            </div>
        </div>
       <?php endwhile; ?>
	<?php endif; ?>
        <div class="how-it-work-btns">
		<?php $add_tta_connect_button_1 = get_sub_field( 'add_tta_connect_button_1' ); ?>
			<?php if ( $add_tta_connect_button_1 ) { ?>
				<a class="btn btn-primary btn-big" href="<?php echo $add_tta_connect_button_1['url']; ?>" target="<?php echo $add_tta_connect_button_1['target']; ?>"><?php echo $add_tta_connect_button_1['title']; ?></a>
			<?php } ?>
			<?php $add_tta_connect_button_2 = get_sub_field( 'add_tta_connect_button_2' ); ?>
			<?php if ( $add_tta_connect_button_2 ) { ?>
				<a class="btn btn-primary btn-big" href="<?php echo $add_tta_connect_button_2['url']; ?>" target="<?php echo $add_tta_connect_button_2['target']; ?>"><?php echo $add_tta_connect_button_2['title']; ?></a>
			<?php } ?>
        </div>
    </div>
</section>