<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?> 
<?php if ( have_rows( 'block_settings_control_multi_column' ) ) : 
		while ( have_rows( 'block_settings_control_multi_column' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_multi_column_box_card' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'multi_column_box_card_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="deliver-sec speaker-need scale-rollout" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'box_card_strategist_heading' ); ?></span>
			<h2><?php the_sub_field( 'box_card_strategist_title' ); ?></h2>
		</div>

		<div class="column3-icon-text">
		<div class="d-md-block d-none">
			<div class="row">
				<?php if ( have_rows( 'box_card_add_strategist' ) ) : ?>
					<?php while ( have_rows( 'box_card_add_strategist' ) ) : the_row(); ?>
					<div class="col-sm-12 col-md-6 col-lg-4"  id="<?php the_sub_field( 'multi_column_featured_section_id' ); ?>">
						<div class="text-icon-box small-text" >
							<div class="icon">
								<?php $box_card_add_icon = get_sub_field( 'box_card_add_icon' ); ?>
								<?php if ( $box_card_add_icon ) { ?>
									<img src="<?php echo $box_card_add_icon['url']; ?>" alt="<?php echo $box_card_add_icon['alt']; ?>" class="img-fluid" />
								<?php } ?>									
							</div>
							<?php if(get_sub_field( 'box_card_add_text' )) { ?>
								<div class="match" data-mh="story-block-text">
									<h4 style="color:<?php the_sub_field( 'box_card_strategist_color_box' ); ?> !important;"><?php the_sub_field( 'box_card_add_text' ); ?></h4>
								</div>
							<?php } ?>
							
							<?php $box_card_content = get_sub_field( 'box_card_content' ); ?>
							<?php if ( $box_card_content ) { ?>
								<?php echo $box_card_content; ?>
							<?php } ?>
							
							<?php $box_card_content_read_more = get_sub_field( 'box_card_content_read_more' ); ?>
							<?php if ( $box_card_content_read_more ) { ?>
								<div class="testi-content-body">
									<div class="testi-content-more">
										<?php echo $box_card_content_read_more; ?>
									</div>
									<div class="testi-content-read-more-less-cta">
									  <a href="javascript:void(0);" style="color:#000000;font-weight: bold;"><span class="testi-content-read-more-less-cta-title" style="color:#000000;font-weight: bold;">Read More</span></a>
									</div>
								</div>
							<?php } ?>
							
							<?php $box_card_content_name_company = get_sub_field( 'box_card_content_name_company' ); ?>
							<?php if ( $box_card_content_name_company ) { ?>
								<?php echo $box_card_content_name_company; ?>
							<?php } ?>
							
							<?php $box_card_content_link = get_sub_field( 'box_card_content_link' ); 
							$setLinknm = '';
							if(empty($box_card_content_link['title'])){
								$setLinknm='Learn More';
							} else {
								$setLinknm=$box_card_content_link['title'];
							}?>
							<?php if ( $box_card_content_link ) { ?>
								<div class="bottom_btn_fixed">
									<a class="btn btn-border-blue" href="<?php echo $box_card_content_link['url']; ?>" target="<?php echo $box_card_content_link['target']; ?>"><?php echo $setLinknm; ?></a>
								</div>
							<?php } ?>
						</div>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>

			<div class="d-md-none d-block"  id="<?php echo $gradient_color_banner_section_id; ?>">
				<div class="accordion" id="accordionExample1">
				<?php if ( have_rows( 'box_card_add_strategist' ) ) : ?>
					<?php $counter= 0; while ( have_rows( 'box_card_add_strategist' ) ) : the_row();  $counter++; ?>
					<div class="accordion-item"  id="<?php the_sub_field( 'multi_column_featured_section_id' ); ?>">
						<button class="accordion-button  <?php if (!$counter) { ?><?php } else { ?> collapsed <?php } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo  $counter; ?>" aria-expanded="true" aria-controls="collapse<?php echo  $counter; ?>">
							<?php $box_card_add_icon = get_sub_field( 'box_card_add_icon' ); ?>
							<?php if ( $box_card_add_icon ) { ?>
								<img src="<?php echo $box_card_add_icon['url']; ?>" alt="<?php echo $box_card_add_icon['alt']; ?>" class="img-fluid" />
							<?php } ?>
							<?php if(get_sub_field( 'box_card_add_text' )) { ?>
							<h4 style="color:<?php the_sub_field( 'box_card_strategist_color_box' ); ?> !important;"><?php the_sub_field( 'box_card_add_text' ); ?></h4>
							<?php } ?>
						</button>
						<div id="collapse<?php echo  $counter; ?>" class="accordion-collapse collapse <?php if( $counter == 0 ) { ?> show<?php } ?>" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
							<div class="accordion-body">
								<?php $box_card_content = get_sub_field( 'box_card_content' ); ?>
								<?php if ( $box_card_content ) { ?>
									<?php echo $box_card_content; ?>
								<?php } ?>

								<?php $box_card_content_read_more = get_sub_field( 'box_card_content_read_more' ); ?>
								<?php if ( $box_card_content_read_more ) { ?>
									<div class="testi-content-body">
										<div class="testi-content-more">
											<?php echo $box_card_content_read_more; ?>
										</div>
										<div class="testi-content-read-more-less-cta">
										  <a href="javascript:void(0);" style="color:#000000;font-weight: bold;"><span class="testi-content-read-more-less-cta-title" style="color:#000000;font-weight: bold;">Read More</span></a>
										</div>
									</div>
								<?php } ?>

								<?php $box_card_content_name_company = get_sub_field( 'box_card_content_name_company' ); ?>
								<?php if ( $box_card_content_name_company ) { ?>
									<?php echo $box_card_content_name_company; ?>
								<?php } ?>
								
								<?php $box_card_content_link = get_sub_field( 'box_card_content_link' ); 
								$setLinknm='';
								if(empty($box_card_content_link['title'])){
									$setLinknm='Learn More';
								}else{
									$setLinknm=$box_card_content_link['title'];
								}?>
							<?php if ( $box_card_content_link ) { ?>
							<a class="btn btn-border-blue" href="<?php echo $box_card_content_link['url']; ?>" target="<?php echo $box_card_content_link['target']; ?>"><?php echo $setLinknm; ?></a>
							<?php } ?>
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

