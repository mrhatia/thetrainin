<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_core_expertise' ) ) : 
		while ( have_rows( 'block_settings_control_core_expertise' ) ) : the_row();
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
<?php $core_expertise_choose_layout= get_sub_field( 'core_expertise_choose_layout' ); 
if($core_expertise_choose_layout=='core_expertise_imge'){ ?>

<section class="core-expertise-sec"  id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="container">
        <div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'core_expertise_label' ); ?></span>
			<h2><?php the_sub_field( 'core_expertise_title' ); ?></h2>
		</div>
        <div class="core-expertise-cover">
		<?php $core_expertise_background_image = get_sub_field( 'core_expertise_background_image' ); ?>
			<?php if ( $core_expertise_background_image ) { ?>
            <div class="core-expertise-cover-bg" style="background-image: url(<?php echo $core_expertise_background_image['url']; ?>)"></div>
			<?php } ?>
			<?php if ( have_rows( 'add_core_expertise' ) ) : ?>
            <div class="core-expertise-cover-inner">
                <div class="row">
				<?php while ( have_rows( 'add_core_expertise' ) ) : the_row(); ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="core-card">
                            <h4 class="match" data-mh="core-card-title"><?php the_sub_field( 'add_core_expertise_title' ); ?></h4>
							<?php the_sub_field( 'add_core_expertise_content' ); ?>
						<?php $add_core_expertise_icno = get_sub_field( 'add_core_expertise_icno' ); ?>
								<?php if ( $add_core_expertise_icno ) { ?>
                            <div class="women-owned_logo">
                               <img src="<?php echo $add_core_expertise_icno['url']; ?>" alt="<?php echo $add_core_expertise_icno['alt']; ?>"  class="img-fluid" />
                            </div>
						<?php } ?>
                        </div>
                    </div>
					<?php endwhile; ?>
                </div>
            </div>
			<?php endif; ?>
        </div>
    </div>
</section>
<?php }elseif($core_expertise_choose_layout=='core_expertise_popup'){ ?>


<section class="round-ring-icons-with-label default-bottom-padding round-ring-icons-for-desktop"  id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="container">
        <div class="round-ring-icons-with-label-inner">
            <div class="round-ring-icons-with-label-block">
                <div class="section-title <?php echo $class_fontstyle; ?>">
                    <span><?php the_sub_field( 'core_expertise_popup_title' ); ?></span>
                    <h2><?php the_sub_field( 'core_expertise_popup_sub_title' ); ?></h2>
                </div>
				<?php if ( have_rows( 'add_core_expertise_popup' ) ) : ?>
				<?php $coutner=0; while ( have_rows( 'add_core_expertise_popup' ) ) : the_row();  $coutner++; ?>
                <div class="box-label-block box-label-block-<?php echo  $coutner;  ?>">
                    <div class="label"><?php the_sub_field( 'add_core_expertise_popup_title' ); ?></div>
                    <div class="box-label-tooltip">
                        <?php the_sub_field( 'add_core_expertise_popup_short_content' ); ?>
                    </div>
                </div>
              	<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="round-ring-icons-for-mobile default-bottom-padding"  id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="container">
        <div class="section-title <?php echo $class_fontstyle; ?>">
           <span><?php the_sub_field( 'core_expertise_popup_title' ); ?></span>
            <h2><?php the_sub_field( 'core_expertise_popup_sub_title' ); ?></h2>
        </div>
        <div class="round-ring-icon-slider">
		<?php if ( have_rows( 'add_core_expertise_popup' ) ) : ?>
				<?php while ( have_rows( 'add_core_expertise_popup' ) ) : the_row(); ?>
            <div class="item">
                <div class="round-ring-mobile-block">
                    <h6><?php the_sub_field( 'add_core_expertise_popup_title' ); ?></h6>
                     <?php the_sub_field( 'add_core_expertise_popup_short_content' ); ?>
                </div>
            </div>
               	<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>           
        </div>
    </div>
</section>

<?php } ?>