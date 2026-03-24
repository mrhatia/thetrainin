<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_qualification' ) ) : 
		while ( have_rows( 'block_settings_control_qualification' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_qualification' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'qualification_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<?php $qualification_choose_layout= get_sub_field( 'qualification_choose_layout' );
if($qualification_choose_layout=='qualification_simple'){ ?>

<section class="qualification" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'qualification_heading' ); ?></span>
			<h2><?php the_sub_field( 'qualification_title' ); ?></h2>
		</div>
		<div class="qualification_small_wrap">
			<?php $qualification_banner_image = get_sub_field( 'qualification_banner_image' ); ?>
			<?php if ( $qualification_banner_image ) { ?>
				<div class="simple-img text-center">
					<img src="<?php echo $qualification_banner_image['url']; ?>" alt="<?php echo $qualification_banner_image['alt']; ?>" class="img-fluid" />
				</div>
			<?php } ?>

			<div class="text-block-right text-bg number-list">
				<?php the_sub_field( 'qualification_content' ); ?>
			</div>
		</div>
	</div>
</section>

<?php }elseif($qualification_choose_layout=='qualification_ordersimple'){ ?>

<section class="sectionCl qualification_section" id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="container">

    <div class="section-title <?php echo $class_fontstyle; ?>">
        <span><?php the_sub_field( 'qualification_orderlist_heading' ); ?></span>
        <h2><?php the_sub_field( 'qualification_orderlist_title' ); ?></h2>
    </div>

    <div class="intro_text">
        <p><?php the_sub_field( 'qualification_orderlist_short_content' ); ?></p>
    </div>

    <div class="qualification_flex">
        <div class="row">
            <div class="col-md-6">
                <div class="text-block-list">
                   <?php the_sub_field( 'qualification_orderlist_content' ); ?>
                </div>
            </div>

			<?php $qualification_orderlist_image = get_sub_field( 'qualification_orderlist_image' ); ?>
			<?php if ( $qualification_orderlist_image ) { ?>
            <div class="col-md-6">
                <img src="<?php echo $qualification_orderlist_image['url']; ?>" alt="<?php echo $qualification_orderlist_image['alt']; ?>" />
            </div>
			<?php } ?>
        </div>
    </div>
    
    </div>
</section>
<?php } ?>