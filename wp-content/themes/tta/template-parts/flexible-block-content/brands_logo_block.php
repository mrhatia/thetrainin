<?php if ( have_rows( 'block_settings_control_brands_logo' ) ) : 
		while ( have_rows( 'block_settings_control_brands_logo' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_brands_logo' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'brands_logo_section_id' );  ?>
<?php  endwhile; 
		endif; ?>
<section class="trusted-by" id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="container">
        <div class="trusted-by-inner">
            <?php if(get_sub_field('brands_logo_heading') || get_sub_field('brands_logo_title')) { ?>
            <div class="section-title <?php echo $class_fontstyle; ?>">

                <h2><?php the_sub_field( 'brands_logo_heading_before' ); ?>
                    <span><?php the_sub_field( 'brands_logo_heading' ); ?></span>
                    <?php the_sub_field( 'brands_logo_title' ); ?>
                </h2>
            </div>
            <?php } ?>

            <?php $brands_select_clos_layout = get_sub_field( 'brands_select_clos_layout' );
            if($brands_select_clos_layout=='6'){
                $logo_cols ="col-sm-12 col-md-2 logo-6";
            }elseif($brands_select_clos_layout=='5'){
                $logo_cols ="col-sm-12 col-md-2 logo-5";
            }elseif($brands_select_clos_layout=='4'){
                $logo_cols ="col-sm-12 col-md-3 logo-4";
            }elseif($brands_select_clos_layout=='3'){
                $logo_cols ="col-sm-12 col-md-4 logo-3";
            }?>
            <?php if ( have_rows( 'add_brands_logo' ) ) : ?>
            <!-- <div class="container" style="max-width: 950px;"> -->
            <div class="row">
                <?php while ( have_rows( 'add_brands_logo' ) ) : the_row(); ?>
                <div class="<?php echo $logo_cols; ?>">
                    <?php $brands_logo_image = get_sub_field( 'brands_logo_image' ); ?>
                    <?php $brands_logo_link = get_sub_field( 'brands_logo_link' ); ?>
                    <?php if (!empty($brands_logo_link )) { ?>
                    <a class="logo-block" href="<?php echo $brands_logo_link['url']; ?>"
                        target="<?php echo $brands_logo_link['target']; ?>">
                        <img src="<?php echo $brands_logo_image['url']; ?>"
                            alt="<?php echo $brands_logo_image['alt']; ?>" class="img-fluid">
                    </a>
                    <?php }else{ ?>
                    <a class="logo-block"><img src="<?php echo $brands_logo_image['url']; ?>"
                            alt="<?php echo $brands_logo_image['alt']; ?>" class="img-fluid"></a>
                    <?php } ?>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php while ( have_rows( 'show_more_add_brands_logo' ) ) : the_row(); ?>
                <div class="<?php echo $logo_cols; ?>">
                    <?php $show_more_brands_logo_image = get_sub_field( 'show_more_brands_logo_image' ); ?>
                    <?php $show_more_brands_logo_link = get_sub_field( 'show_more_brands_logo_link' ); ?>
                    <?php if (!empty($show_more_brands_logo_link )) { ?>
                    <a class="logo-block" href="<?php echo $show_more_brands_logo_link['url']; ?>"
                        target="<?php echo $show_more_brands_logo_link['target']; ?>">
                        <img src="<?php echo $show_more_brands_logo_image['url']; ?>"
                            alt="<?php echo $show_more_brands_logo_image['alt']; ?>" class="img-fluid">
                    </a>
                    <?php }else{ ?>
                    <a class="logo-block"><img src="<?php echo $show_more_brands_logo_image['url']; ?>"
                            alt="<?php echo $show_more_brands_logo_image['alt']; ?>" class="img-fluid"></a>
                    <?php } ?>
                </div>
                <?php endwhile; ?>
            </div>
            <!-- </div> -->
        </div>
    </div>

    </div>
</section>
</div>
<!-- content end -->