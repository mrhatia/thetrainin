<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_three_card' ) ) : 
		while ( have_rows( 'block_settings_control_three_card' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_three_card' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'three_card_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<?php $card_choose_layout= get_sub_field( 'card_choose_layout' ); 
if($card_choose_layout=='threecardbox') { ?>
<section class="up-down-card-sec" id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="container">
		<?php if(get_sub_field( 'card_choose_heading' )) { ?>
			<div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'card_choose_heading' ); ?> </span>
			<?php } ?>
			<?php if(get_sub_field( 'card_choose_title' )) { ?>
			<h2><?php the_sub_field( 'card_choose_title' ); ?> </h2>
		</div>
		<?php } ?>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="up-down-card-block">
				<?php if ( have_rows( 'three_card_box_one' ) ) : ?>
				<?php while ( have_rows( 'three_card_box_one' ) ) : the_row(); ?>
                    <div class="up-down-card-list-block">
                        <div class="main-title">
                            <h1><?php the_sub_field( 'three_card_one_title' ); ?></h1>
                        </div>
                        <div class="list-dots-medium">
                            <?php the_sub_field( 'three_card_one_content' ); ?>
                        </div>
                    </div>
					<?php endwhile; ?>
					<?php endif; ?>
					<?php if ( have_rows( 'three_card_box_two' ) ) : ?>
					<?php while ( have_rows( 'three_card_box_two' ) ) : the_row(); ?>
                    <div class="up-down-card-list-block">
                        <div class="main-title">
                            <h1><?php the_sub_field( 'three_card_two_title' ); ?></h1>
                        </div>
                        <div class="list-dots-medium">
                           <?php the_sub_field( 'three_card_two_content' ); ?>
                        </div>
                    </div>
					<?php endwhile; ?>
			<?php endif; ?>
                </div>
            </div>
			<?php if ( have_rows( 'three_card_box_three' ) ) : ?>
				<?php while ( have_rows( 'three_card_box_three' ) ) : the_row(); ?>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="up-down-card-block down-block">
                    <div class="up-down-card-list-block">
                        <div class="main-title">
                            <h1><?php the_sub_field( 'three_card_three_title' ); ?></h1>
                        </div>
                        <div class="list-dots-medium">
                            <?php the_sub_field( 'three_card_three_content' ); ?>
                        </div>
                    </div>
                </div>
            </div>
			<?php endwhile; ?>
			<?php endif; ?>
        </div>
    </div>
</section>
<?php }elseif($card_choose_layout=='twocardbox'){ ?>

<section class="sectionCl tow_column_overlap_boxes" id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="container">
	<?php if(get_sub_field( 'card_choose_heading' )) { ?>
			<div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'card_choose_heading' ); ?> </span>
			<?php } ?>
			<?php if(get_sub_field( 'card_choose_title' )) { ?>
			<h2><?php the_sub_field( 'card_choose_title' ); ?> </h2>
		</div>
		<?php } ?>
        <div class="tow_column_overlap_flex">
            <div class="overlap_white_box">
               <?php the_sub_field( 'two_content_box_one' ); ?> 
			   <?php $two_content_box_button = get_sub_field( 'two_content_box_button' ); ?>
			<?php if ( $two_content_box_button ) { ?>
				<a class="btn btn-primary"  href="<?php echo $two_content_box_button['url']; ?>" target="<?php echo $two_content_box_button['target']; ?>"><?php echo $two_content_box_button['title']; ?></a>
			<?php } ?>
   
            </div>
            <div class="overlap_gradient_box">
                <?php the_sub_field( 'two_content_box_two' ); ?>
				<?php $two_content_box_button_two = get_sub_field( 'two_content_box_button_two' ); ?>
			<?php if ( $two_content_box_button_two ) { ?>
				<a class="btn btn-primary" href="<?php echo $two_content_box_button_two['url']; ?>" target="<?php echo $two_content_box_button_two['target']; ?>"><?php echo $two_content_box_button_two['title']; ?></a>
			<?php } ?>

            </div>
        </div>


    </div>
</section>
			
<?php } ?>