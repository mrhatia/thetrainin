<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_image_left' ) ) : 
		while ( have_rows( 'block_settings_control_image_left' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_image_left' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'image_left_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<?php $image_left_content_layout= get_sub_field( 'image_left_content_layout' );
if($image_left_content_layout=="checklistcontent"){ ?>
<section class="modern-workforce image-pattern" id="<?php echo $gradient_color_banner_section_id; ?>">
			<div class="container">
				<div class="section-title <?php echo $class_fontstyle; ?>">
					<span><?php the_sub_field( 'image_left_content_heading' ); ?></span>
					<h2><?php the_sub_field( 'image_left_content_title' ); ?></h2>
				</div>

							<div class="row align-items-center">
								<?php $image_left_content_image = get_sub_field( 'image_left_content_image' ); ?>
								<?php if ( $image_left_content_image ) { ?>
								<div class="col-sm-12 col-md-6">
										<div class="image-block">
											<div class="image">
												<img src="<?php echo $image_left_content_image['url']; ?>" alt="<?php echo $image_left_content_image['alt']; ?>" class="img-fluid" />
											</div>
										</div>
									</div>
									<?php } ?>
									<div class="col-sm-12 col-md-6">
									<div class="text-block-list2">
									<?php the_sub_field( 'image_left_content_content' ); ?>
										<?php $image_left_content_link = get_sub_field( 'image_left_content_link' ); ?>
										<?php if ( $image_left_content_link ) { ?>
											<a  style="margin-top: 30px;" class="btn btn-primary" href="<?php echo $image_left_content_link['url']; ?>" target="<?php echo $image_left_content_link['target']; ?>"><?php echo $image_left_content_link['title']; ?></a>
										<?php } ?>
									</div>
								</div>
							
							</div>

			</div>
		</section>
<?php }elseif($image_left_content_layout=="simpcontent"){ ?> 
<section class="image-text2 image-pattern intruction-design" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'image_left_content_heading' ); ?></span>
			<h2><?php the_sub_field( 'image_left_content_title' ); ?></h2>
		</div>


					<div class="image-top_spacer">
						<div class="row">
						<?php $image_left_content_image = get_sub_field( 'image_left_content_image' ); ?>
								<?php if ( $image_left_content_image ) { ?>
							<div class="col-sm-12 col-md-7">
								<div class="image-block">
									<div class="image">
											<img src="<?php echo $image_left_content_image['url']; ?>" alt="<?php echo $image_left_content_image['alt']; ?>" class="img-fluid" />
									</div>
								</div>
							</div>
						<?php } ?>
							<div class="col-sm-12 col-md-5">
								<div class="text-block-title">
								<?php the_sub_field( 'image_left_content_content' ); ?>
									<?php $image_left_content_link = get_sub_field( 'image_left_content_link' ); ?>
										<?php if ( $image_left_content_link ) { ?>
											<a style="margin-top: 30px;" class="btn btn-primary" href="<?php echo $image_left_content_link['url']; ?>" target="<?php echo $image_left_content_link['target']; ?>"><?php echo $image_left_content_link['title']; ?></a>
										<?php } ?>
								</div>
							</div>
							
						
						</div>
					</div>
			


	</div>
	</section>
<?php }elseif($image_left_content_layout=="bgcolorcontet"){  ?>
	<section class="text-block-image" id="<?php echo $gradient_color_banner_section_id; ?>">
			<div class="container">
				
	
						<div class="row align-items-center">
						<?php $image_left_content_image = get_sub_field( 'image_left_content_image' ); ?>
						<?php if ( $image_left_content_image ) { ?>
							<div class="col-sm-12 col-md-6 text_bl_image">
								<div class="p-img">
									<img src="<?php echo $image_left_content_image['url']; ?>" alt="<?php echo $image_left_content_image['alt']; ?>" class="img-fluid" />
								</div>
							</div>
						<?php } ?>
							<div class="col-sm-12 col-md-6">
								<div class="text-block text-start text_bl_content image_left_content-col">
								<?php if(get_sub_field( 'image_left_content_heading' )){ ?>
									<div class="section-title text-start <?php echo $class_fontstyle; ?>">
										<span><?php the_sub_field( 'image_left_content_heading' ); ?></span>
										<h2><?php the_sub_field( 'image_left_content_title' ); ?></h2>
									</div>
								<?php } ?>
									<?php the_sub_field( 'image_left_content_content' ); ?>
									<?php $image_left_content_link = get_sub_field( 'image_left_content_link' ); ?>
									<?php if ( $image_left_content_link ) { ?>
										<a style="margin-top: 30px;" class="btn btn-primary" href="<?php echo $image_left_content_link['url']; ?>" target="<?php echo $image_left_content_link['target']; ?>"><?php echo $image_left_content_link['title']; ?></a>
									<?php } ?>
								</div>
							</div>
					
						</div>
				
			</div>
		</section>
<?php }elseif($image_left_content_layout=="sliderpodcatcontent"){ ?> 		
	<section class="modern-workforce image-pattern" id="<?php echo $gradient_color_banner_section_id; ?>">
			<div class="container">
				<div class="section-title <?php echo $class_fontstyle; ?>">
					<span><?php the_sub_field( 'image_left_content_heading' ); ?></span>
					<h2><?php the_sub_field( 'image_left_content_title' ); ?></h2>
				</div>

				
				<div class="image-text-slider-sec-inner ">
					<div class="image-text-slider">
			<?php if ( have_rows( 'image_left_content_add_podcast' ) ) : ?>
							<?php while ( have_rows( 'image_left_content_add_podcast' ) ) : the_row(); ?>
						<!-- Repear Item For Slider -->
						<div class="item">
						<div class="image-block__main">
							<div class="row align-items-center">
								<?php $image_left_content_image = get_sub_field( 'left_content_add_podcast_image' ); ?>
								<?php if ( $image_left_content_image ) { ?>
									<div class="col-sm-12 col-md-6">
											<div class="image-block">
												<div class="image">
													<img src="<?php echo $image_left_content_image['url']; ?>" alt="<?php echo $image_left_content_image['alt']; ?>" class="img-fluid" />
												</div>
											</div>
										</div>
										<?php } ?>
									<div class="col-sm-12 col-md-6">
										<div class="text-block-list2">
												<h3><?php the_sub_field( 'left_content_add_podcast_title' ); ?></h3> 
										<?php the_sub_field( 'left_content_add_podcast_content' ); ?>
											<?php $image_left_content_link = get_sub_field( 'left_content_add_podcast_link' ); ?>
											<?php if ( $image_left_content_link ) { ?>
												<a  style="margin-top: 30px;" class="btn btn-primary" href="<?php echo $image_left_content_link['url']; ?>" target="<?php echo $image_left_content_link['target']; ?>"><?php echo $image_left_content_link['title']; ?></a>
											<?php } ?>
										</div>
									</div>
							</div>
							</div>
							<div class="col-sm-12">
								<div class="image-text-nav">
									<button class="image-text-slider-next slick-arrownp">Next ></button>
									<button class="image-text-slider-prev slick-arrownp">Prev ></button>
								</div>
							</div>
						</div>
				<?php endwhile; ?>
			<?php endif; ?>
						
					</div>
				</div>

			</div>
		</section>	
		
<?php } ?>