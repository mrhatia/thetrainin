<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'map_card_box_control_tta_connect' ) ) : 
		while ( have_rows( 'map_card_box_control_tta_connect' ) ) : the_row();
					$tta_font_style= get_sub_field( 'map_card_font_style_tta_connect' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'map_card_connect_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>

<section class="sectionCl map_section" id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="container">
		<div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'map_card_box_connect_label' ); ?></span>
			<h2><?php the_sub_field( 'map_card_box_connect_heading' ); ?></h2>
		</div>
		
        <div class="map_image">
            <img src="<?php echo site_rul(); ?>/wp-content/uploads/2022/09/map.svg" alt="">
        </div>

        <div class="column3-icon-text">

            <div class="d-md-block d-none">
                <div class="row">
					<?php if ( have_rows( 'add_map_card_content' ) ) : ?>
					<?php while ( have_rows( 'add_map_card_content' ) ) : the_row(); ?>
					<div class="col-sm-12 col-md-6 col-lg-4">
							<div class="text-icon-box small-text">
							<?php $add_map_card_icon = get_sub_field( 'add_map_card_icon' ); ?>
								<?php if ( $add_map_card_icon ) { ?>
								<div class="icon">
									<img src="<?php echo $add_map_card_icon['url']; ?>" alt="<?php echo $add_map_card_icon['alt']; ?>"  class="img-fluid" />	
								</div>
								<?php } ?>
								<h4><?php the_sub_field( 'add_map_card_title' ); ?></h4>
								<p><?php the_sub_field( 'add_map_card_sub_title' ); ?></p>
							</div>
						</div>
					<?php endwhile; ?>

				<?php endif; ?>
				</div>
			</div>

			<div class="d-md-none d-block">
				<div class="accordion" id="accordionExample1">
				
					<?php if ( have_rows( 'add_map_card_content' ) ) : ?>
				<?php $iteam=0; while ( have_rows( 'add_map_card_content' ) ) : the_row(); $iteam++; ?>
					<div class="accordion-item">
					<?php $add_map_card_icon = get_sub_field( 'add_map_card_icon' ); ?>
							<?php if ( $add_map_card_icon ) { ?>
						<button class="accordion-button <?php if (!$iteam) { ?><?php } else { ?> collapsed <?php } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1<?php echo $iteam; ?>" aria-expanded="true" aria-controls="collapse1<?php echo $iteam; ?>">
                            <img src="<?php echo $add_map_card_icon['url']; ?>" alt="<?php echo $add_map_card_icon['alt']; ?>"  class="img-fluid"> <?php the_sub_field( 'add_map_card_title' ); ?>
						</button>
						<?php } ?>
						<div id="collapse1<?php echo $iteam; ?>" class="accordion-collapse collapse <?php if( $iteam ==1 ){ echo "show"; } ?>" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
							<div class="accordion-body">
								<p><?php the_sub_field( 'add_map_card_sub_title' ); ?></p>
							</div>
						</div>
					</div>
					 <?php endwhile; ?>

			<?php endif; ?>
				</div>
			</div>
		</div>

    </div>
</section>
