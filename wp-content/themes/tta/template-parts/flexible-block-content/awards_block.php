<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_awards' ) ) : 
		while ( have_rows( 'block_settings_control_awards' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_awards' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'awards_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<section class="award-sec" id="call-to-section <?php echo $gradient_color_banner_section_id; ?>">
			<div class="container">
			<?php if( get_sub_field( 'awards_heading' )) { ?>
				<div class="section-title <?php echo $class_fontstyle; ?>">
					<?php if( get_sub_field( 'awards_heading' )) { ?>
					<span><?php the_sub_field( 'awards_heading' ); ?></span>
						<?php } ?>
						<?php if( get_sub_field( 'awards_title' )) { ?>
					<h2><?php the_sub_field( 'awards_title' ); ?></h2>
					<?php } ?>
				</div>
				<?php } ?>
					<?php $layout_cols_award= get_sub_field( 'layout_cols_award' );
						if($layout_cols_award=="towcolsaward"){
							$clos_calss= "col-sm-12 col-md-6";
							$award= "award-list";
							$award_block= "award-block";
						}elseif($layout_cols_award=="threecolsaward"){
							$clos_calss= "col-sm-12 col-md-6 col-lg-4";
							$award= "brandon-list";
							$award_block= "award-brandon";
						}elseif($layout_cols_award=="fourcolsaward"){
							$clos_calss= "col-sm-12 col-md-6 col-lg-3";
							$award= "brandon-list";
							$award_block= "award-brandon";
						}?>
				
				<div class="<?php echo $award; ?>">
					<div class="row justify-content-center">
				
						<?php $post_objects = get_sub_field( 'awards_select_awards' ); ?>
						<?php if ( $post_objects ): ?>
							<?php foreach ( $post_objects as $post ):  ?>
						<div class="<?php echo $clos_calss; ?>">
							
							<div class="<?php echo $award_block; ?>">
							 <?php
									$disp_img_box ='';
									if ( has_post_thumbnail()) {
										$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
										 $disp_img_box = $large_image_url[0];
									}else{ 
										$disp_img_box = get_template_directory_uri().'/images/award.png';
										} 
									
								  ?>
								<div class="a-img">
									<img src="<?php echo $disp_img_box; ?>" alt="award" class="img-fluid">
								</div>
								<div class="detail"> 
									<div class="match" data-mh="story-block-text"><h4><?php the_title(); ?></h4>
									<span><?php the_field( 'award_contet_title' ); ?></span>
									<span><?php the_field( 'award_contet_years' ); ?></span></div>
								</div>
								<?php $award_cont_image = get_field( 'award_cont_image' ); ?>
									<?php if ( $award_cont_image ) { ?>
										<div class="awards_select_awards_logo"><img src="<?php echo $award_cont_image['url']; ?>" alt="<?php echo $award_cont_image['alt']; ?>" /></div>
									<?php } ?>

								<a href="javascript:void(0)" class="btn btn-border-blue award-btn" >See Details</a>
								<?php if ( have_rows( 'award_contet_hover_content' ) ) : ?>
								<?php while ( have_rows( 'award_contet_hover_content' ) ) : the_row(); ?>
								<div class="hover-block">
									<div class="award-scroll">
										<div class="detail">
											<h4><?php the_sub_field( 'award_contet_hover_heading' ); ?></h4>
											<span><?php the_sub_field( 'award_contet_hover_title' ); ?></span>
										</div>
										<?php the_sub_field( 'award_contet_hover_short_content' ); ?>
									</div>
									<div class="award-great-btn">
										<a href="javascript:void(0)" class="btn btn-border-blue award-hover-btn">Done</a>
									</div>
								</div>
									<?php endwhile; ?>
							<?php endif; ?>
							</div>

						</div>
						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
					</div>
				</div>
				
				<div class="slider awards_slider_mobile" id="<?php echo $gradient_color_banner_section_id; ?>">
				
						<?php $post_objects = get_sub_field( 'awards_select_awards' ); ?>
						<?php if ( $post_objects ): ?>
							<?php foreach ( $post_objects as $post ):  ?>
					<div>
					<div class="award-block">
						 <?php
									$disp_img_box ='';
									if ( has_post_thumbnail()) {
										$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
										 $disp_img_box = $large_image_url[0];
									}else{ 
										$disp_img_box = get_template_directory_uri().'/images/award.png';
										} 
									
								  ?>
							<div class="a-img">
								<img src="<?php echo $disp_img_box; ?>" alt="award" class="img-fluid">
							</div>
							<div class="detail">
									<h4><?php the_title(); ?></h4>
									<span><?php the_field( 'award_contet_title' ); ?></span>
									<span><?php the_field( 'award_contet_years' ); ?></span>
							</div>
							<a href="javascript:void(0)" class="btn btn-border-blue award-btn">See Details</a>
							<?php if ( have_rows( 'award_contet_hover_content' ) ) : ?>
								<?php while ( have_rows( 'award_contet_hover_content' ) ) : the_row(); ?>
							<div class="hover-block">
								<div class="award-scroll mCustomScrollbar _mCS_1 mCS_no_scrollbar">
									<div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
										<div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
										<div class="detail">
										<h4><?php the_sub_field( 'award_contet_hover_heading' ); ?></h4>
											<span><?php the_sub_field( 'award_contet_hover_title' ); ?></span>
										</div>
											<?php the_sub_field( 'award_contet_hover_short_content' ); ?>
										</div>
										<div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;">
										<div class="mCSB_draggerContainer">
											<div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 21px; height: 0px; top: 0px;">
												<div class="mCSB_dragger_bar" style="line-height: 21px;"></div>
												<div class="mCSB_draggerRail"></div>
											</div>
										</div>
										</div>
									</div>
								</div>
								<div class="award-great-btn">
									<a href="javascript:void(0)" class="btn btn-border-blue award-hover-btn">Done</a>
								</div>
							</div>
									<?php endwhile; ?>
							<?php endif; ?>
							</div>
					</div>
				
				<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
			
				</div>


			</div>
		</section>
