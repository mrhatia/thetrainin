<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_left_title' ) ) : 
		while ( have_rows( 'block_settings_control_left_title' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_left_title' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'left_title_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<?php  $left_title_content_type= get_sub_field( 'left_title_content_type' ); 
if($left_title_content_type=="simplecontent") { ?>
	<?php $select_gradient_bot="";
		$select_gradient_bot= get_sub_field( 'select_gradient_bot' ); 
		if($select_gradient_bot=="gradient_bot"){ ?>
		<div class="perfect-talent" id="<?php echo $gradient_color_banner_section_id; ?>">
			<section class="text-block-bg" id="call-to-section">
				<div class="container">
					<div class="section-title text-start <?php echo $class_fontstyle; ?>">
						<span><?php the_sub_field( 'left_title_content_heading' ); ?></span>
						<h2><?php the_sub_field( 'left_title_content_title' ); ?></h2>
					</div>
	
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-4">
							<div class="text-block-left">
								<img src="<?php echo get_template_directory_uri(); ?>/images/pattern-bottom.png" alt="pattern-bottom" class="img-fluid">
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-8">
							<div class="text-block text-start">
								<?php the_sub_field( 'left_title_content' ); ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	<?php }else{ ?>
	<!-- work section start  -->
	<section class="solution-block" id="call-to-section <?php echo $gradient_color_banner_section_id; ?>">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="section-title text-start <?php echo $class_fontstyle; ?>">
						<span><?php the_sub_field( 'left_title_content_heading' ); ?></span>
						<h2><?php the_sub_field( 'left_title_content_title' ); ?></h2>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="text-block text-start">
						<?php the_sub_field( 'left_title_content' ); ?>
					</div>
				</div>
			</div>			
		</div>
	</section>
	 <?php } ?>
<!-- work section end  -->
<?php }elseif($left_title_content_type=="listcontent"){ ?>
<section class="text-block-bg cus-container" id="<?php echo $gradient_color_banner_section_id; ?>">
		<div class="container">
			<div class="text-block-center">
				<div class="section-title text-center <?php echo $class_fontstyle; ?>">
					<span><?php the_sub_field( 'left_title_content_heading' ); ?></span>
					<h2><?php the_sub_field( 'left_title_content_title' ); ?></h2>
				</div>
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/pattern-bottom.png" alt="pattern-bottom" class="img-fluid"> -->
			</div>
			<div class="row justify-content-center">
				<?php if(get_sub_field( 'left_title_content' )){ ?>
				<div class="col-sm-12 col-md-12 col-lg-4">
					<div class="list-dots-big">
						<?php the_sub_field( 'left_title_content' ); ?>
					</div>
				</div>
				<?php } ?>
				<?php if(get_sub_field( 'right_title_content_two' )){ ?>
				<div class="col-sm-12 col-md-12 col-lg-4">
					<div class="list-dots-big">
						<?php the_sub_field( 'right_title_content_two' ); ?>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section> 
<?php }elseif($left_title_content_type=="listnumbercontent"){ ?>
<section class="text-block-bg number-list-main" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">				
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-6">
				<div class="text-block-left">
					<div class="section-title text-start <?php echo $class_fontstyle; ?>">
						<span><?php the_sub_field( 'left_title_content_heading' ); ?></span>
						<h2><?php the_sub_field( 'left_title_content_title' ); ?></h2>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/pattern-bottom.png" alt="pattern-bottom" class="img-fluid d-md-block d-none">
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6">
				<div class="text-block-right text-bg number-list">
					<?php the_sub_field( 'left_title_content' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>	
<?php }elseif($left_title_content_type=="listcontentthreecol"){ ?>
<section class="popular_columns-main" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="text-block-center">
			<div class="section-title text-center <?php echo $class_fontstyle; ?>">
				<span><?php the_sub_field( 'left_title_content_heading' ); ?></span>
				<h2><?php the_sub_field( 'left_title_content_title' ); ?></h2>
			</div>
		</div>
		<div class="sub_text"><p><?php the_sub_field( 'left_title_threecol_subtile_text' ); ?> </p></div>
		<div class="popular_columns">
			<div class="popular_columns_text list-dots-big">
			<?php the_sub_field( 'left_title_content_threecol' ); ?>
			
			</div>
			
			<h6 style="text-align: center;"><?php the_sub_field( 'left_title_threecol_text' ); ?></h6>
			<?php $left_title_threecol_button_see_more = get_sub_field( 'left_title_threecol_button_see_more' ); ?>
			<?php if ( $left_title_threecol_button_see_more ) { ?>
				<div class="see-more">
					
				<a class="link" href="<?php echo $left_title_threecol_button_see_more['url']; ?>" target="<?php echo $left_title_threecol_button_see_more['target']; ?>"><?php echo $left_title_threecol_button_see_more['title']; ?></a>
				</div>
			<?php } ?>
			<?php $left_title_threecol_button_contact_us_link = get_sub_field( 'left_title_threecol_button_contact_us_link' ); ?>
			<?php if ( $left_title_threecol_button_contact_us_link ) { ?>
				<div class="sign-form"><a class="btn btn-primary"  href="<?php echo $left_title_threecol_button_contact_us_link['url']; ?>" target="<?php echo $left_title_threecol_button_contact_us_link['target']; ?>"><?php echo $left_title_threecol_button_contact_us_link['title']; ?></a></div>
			<?php } ?>
	
		</div>
	</div>
</section>	
<?php } ?>