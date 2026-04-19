<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TTA
 */

get_header(); ?>

<?php if ( have_rows( 'casestudy_single_content_layout' ) ): ?>
<?php while ( have_rows( 'casestudy_single_content_layout' ) ) : the_row(); ?>

<?php if ( get_row_layout() == 'casestudy_single_banner_block' ) : ?>
		<section class="main-banner">
			<div class="container">
				<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-3">
										<div class="top-label">
								<?php the_sub_field( 'casestudy_single_heading' ); ?>
							</div>
								<?php 	$casestudy_single_image = get_sub_field( 'casestudy_single_image' );   ?>
					<?php if ( $casestudy_single_image ) { ?>
					<div class="banner-img ">
					<img src="<?php echo $casestudy_single_image['url']; ?>" alt="<?php echo $casestudy_single_image['alt']; ?>" class="img-fluid" />
					</div>	
					<?php }?>
</div>	
<div class="col-sm-12 col-md-12 col-lg-9">
	<div class="main-title">
								<h1><?php the_sub_field( 'casestudy_single_title' ); ?></h1>
							</div>
							<div class="sub-title">
								<h2><?php the_field( 'sub_title' ); ?></h2>
							</div>
</div>
</div>
			<!--	<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-6">
						<div class="banner-detail">
							<div class="top-label">
								<?php the_sub_field( 'casestudy_single_heading' ); ?>
							</div>
							<div class="main-title">
								<h1><?php the_sub_field( 'casestudy_single_title' ); ?></h1>
							</div>
							<p><?php the_sub_field( 'casestudy_single_content' ); ?></p>  
						</div>
					</div>
				<?php $casestudy_single_image = get_sub_field( 'casestudy_single_image' ); ?>
					<?php if ( $casestudy_single_image ) { ?>
						<div class="col-sm-12 col-md-12 col-lg-6">
							<div class="banner-img ">
								<div class="image award_flow_active">
									<div class="gradient_block_cl">
										<img src="<?php echo $casestudy_single_image['url']; ?>" alt="<?php echo $casestudy_single_image['alt']; ?>" class="img-fluid" />
										<?php if ( get_field( 'case_study_award_winning' ) == 1 ) { ?>
										<?php if ( have_rows( 'case_study_award_winning_detail' ) ) : ?>
										<?php while ( have_rows( 'case_study_award_winning_detail' ) ) : the_row(); ?>
										<div class="award_flow">
											<div class="award_flow_text"><p><?php the_sub_field( 'casestudy_award_winning_text' ); ?></p></div>
											<?php $casestudy_award_winning_logo = get_sub_field( 'casestudy_award_winning_logo' ); ?>
											<?php if ( $casestudy_award_winning_logo ) { ?>
													<div class="award_flow_image"><img src="<?php echo $casestudy_award_winning_logo['url']; ?>" alt="<?php echo $casestudy_award_winning_logo['alt']; ?>" /></div>
											<?php } ?>
										</div>

											<?php endwhile; ?>
										<?php endif; ?>
											<?php } ?>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>

					<div class="down-arrow">
						<a href="#call-to-section">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6 13L12 18L18 13" stroke="#323A45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path opacity="0.4" d="M6 6L12 11L18 6" stroke="#323A45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>					
						</a>
					</div>
				</div>-->
		</section>
<section class="numbersection">
<div class="container">	
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-8">
			<?php echo get_field('description');?>
										</div>
						<div class="col-sm-12 col-md-12 col-lg-4">
<div class="image award_flow_active">
									<div class="gradient_block_cl">
										
										<?php if ( get_field( 'case_study_award_winning' ) == 1 ) { ?>
										<?php if ( have_rows( 'case_study_award_winning_detail' ) ) : ?>
										<?php while ( have_rows( 'case_study_award_winning_detail' ) ) : the_row(); ?>
										<div class="award_flow">
											<div class="award_flow_text"><p><?php the_sub_field( 'casestudy_award_winning_text' ); ?></p></div>
											<?php $casestudy_award_winning_logo = get_sub_field( 'casestudy_award_winning_logo' ); ?>
											<?php if ( $casestudy_award_winning_logo ) { ?>
													<div class="award_flow_image"><img src="<?php echo $casestudy_award_winning_logo['url']; ?>" alt="<?php echo $casestudy_award_winning_logo['alt']; ?>" /></div>
											<?php } ?>
										</div>

											<?php endwhile; ?>
										<?php endif; ?>
											<?php } ?>
									</div>
								</div>
										</div>					

										</div>	
									

       <?php $numbers = get_field('numbers');  if($numbers){?>
	   <div class="row nitemsection">
	    <div class="col-sm-12 col-md-12 col-lg-5">
			<div class="main-title">
								<h2><?php echo get_field( 'number_section_title' ); ?></h2>
							</div>
		</div>
			<div class="col-sm-12 col-md-12 col-lg-7">
              <div class="row">
				<?php foreach($numbers as $num){?>
				<div class="col-sm-12 col-md-12 col-lg-6 nitems">
					<div class="ntitle"><?php echo $num['number_title'];?></div>
					<div class="nstitle"><?php echo $num['number_sub_title'];?></div>
										</div>
										<?php }?>
			</div>	
			</div> 
			</div>		
	<?php }?>
	</div>	
</section>
<?php $talents = get_field('talents'); if($talents){?>
<section class="talentprovide section-wrapper__card-grid">
<div class="container">	
	<div class="main-title">
								<h2><?php echo get_field( 'talent_section_title' ); ?></h2>
							</div>
      		<div class="card-grid">
				<?php foreach($talents as $talent){?>
				    <div class="talent-card">
                              <div class="talent-icon"><img src="<?php echo $talent['icon']['url'];?>" alt=""></div>
							  <div class="talent-title"><h4><?php echo $talent['talent_title'];?></h4></div>
										</div>
										<?php }?>
										</div>				
</div>	
</div>
</section>

<section class="ttaservices">
	<?php $tta_services = get_field('tta_services');?>
	<?php if($tta_services){?>
 <div class="container">
	<div class="main-title">
								<h2><?php echo get_field( 'tta_service_section_title' ); ?></h2>
							</div>
							
							<div class="ttaservicesrow">
								
								<div class="ttanav">
									<?php $c=0; foreach($tta_services as $tts){ $c++;?>
								      <h4 data-id="n<?php echo $c;?>" class="<?php if($c==1){?>active<?php }?>" ><?php echo $tts;?><?php echo $tts['tta_title'];?></h4>
								<?php }?>
										</div>
										<div class="ttacont">
											<?php $c=0; foreach($tta_services as $tts){ $c++;?>
										<div id="n<?php echo $c;?>" class="ncontent <?php if($c==1){?>show<?php }?>">
											<?php echo $tts['tta_description'];?>
										</div>
											<?php }?>
										</div>
										</div>
</div>	
<?php }?>
<?php $businessimp = get_field('business_impacts');?>
<?php if($businessimp){?>
 <div class="container businesssection">
		<div class="main-title">
								<h2><?php echo get_field( 'business_section_title' ); ?></h2>
							</div>
							<div class="businessimpacts">
							<?php foreach($businessimp as $busin){
								?>
								<div class="impactitem">
                                   <div class="impicon"><img src="<?php echo $busin['business_icon']['url'];?>" alt=""></div>
								   <div class="impdetails">
                                     <h3><?php echo $busin['bnumbers'];?></h3>
									 <h5><?php echo $busin['impact_title'];?></h5>
								    
								   </div>
								   <div class="impdesc"><?php echo $busin['impact_description'];?>
										</div>
								</div>	
								<?php
							}	?>
										</div>	
</div>	
<?php }?>
</section>

<?php $bottomtitle = get_field('bottom_title');
$bottom_content = get_field('bottom_content');
$bottom_sub_title = get_field('bottom_sub_title');
if($bottomtitle || $bottom_content){
?>
<section class="bottomsection">
	<div class="container">
		<div class="main-title">
								<h2><?php echo $bottomtitle; ?> <?php if($bottom_sub_title){?><span><?php echo $bottom_sub_title;?></span><?php }?></h2>
							</div>
                          <div class="botomcontent">
							<?php echo $bottom_content;?>
										</div>
										</div>
										</section>	
<?php
}
?>
<?php }?>
<?php elseif ( get_row_layout() == 'single_content_list_service_block' ) : /*?>

	<section class="text-block-bg casestudy_three_cl" id="call-to-section">
		<div class="container">					
			<div class="row">
			<?php if ( have_rows( 'casestudy_single_left_content' ) ) : ?>
					<?php while ( have_rows( 'casestudy_single_left_content' ) ) : the_row(); ?>
						<div class="col-sm-12 col-md-12 col-lg-4">
							<div class="section-title text-start">
								<span><?php the_sub_field( 'casestudy_single_left_heading' ); ?></span>
								<h2><?php the_sub_field( 'casestudy_single_left_title' ); ?></h2>
							</div>
							<div class="list-dots">
							<?php the_sub_field( 'casestudy_single_left_content' ); ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if ( have_rows( 'casestudy_single_right_content' ) ) : ?>
				<?php while ( have_rows( 'casestudy_single_right_content' ) ) : the_row(); ?>
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="section-title text-start">
							<span><?php the_sub_field( 'casestudy_single_right_heading' ); ?></span>
							<h2><?php the_sub_field( 'casestudy_single_right_title' ); ?></h2>
						</div>
						<div class="list-dots">
						<?php the_sub_field( 'casestudy_single_right_content' ); ?>
						</div>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
			<?php elseif ( get_row_layout() == 'single_left_title_content_block' ) : ?>
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="section-title text-start">
							<span><?php the_sub_field( 'single_left_title_heading' ); ?></span>
							<h2><?php the_sub_field( 'single_left_title_content' ); ?></h2>
						</div>
						<div class="list-dots">
						 <?php the_sub_field( 'casestudy_single_left_title_content' ); ?>
						</div>
					</div>
			</div>
			<div class="casestudy_three_cl_bg_image"><img src="<?php echo site_url(); ?>/wp-content/themes/tta/images/casestudy_three_cl_bg.svg"></div>
		</div>
	</section>

<?php */ elseif ( get_row_layout() == 'casestudy_single_callout_block' ) : /*?>

	<section class="signup">
		<div class="container">
			<div class="section-title">
				<span><?php the_sub_field( 'single_callout_heading' ); ?></span>
				<h2><?php the_sub_field( 'single_callout_title' ); ?></h2>
			</div>
			<?php $single_callout_link = get_sub_field( 'single_callout_link' ); ?>
				<?php if ( $single_callout_link ) { ?>
			<div class="sign-form">
					<a  class="btn btn-primary btn-large" href="<?php echo $single_callout_link['url']; ?>" target="<?php echo $single_callout_link['target']; ?>"><?php echo $single_callout_link['title']; ?></a>	
			</div>
			<?php } ?>
		</div>
	</section>

<?php */ elseif ( get_row_layout() == 'casestudy_single_testimonial_slider_block' ) : ?>

	<?php $name_font_size = get_sub_field( 'name_font_size' ); ?>
	<?php $designation_font_size = get_sub_field( 'designation_font_size' ); ?>
	<?php $company_font_size = get_sub_field( 'company_font_size' ); ?>

	<style>
		.t-detail .name,
		.testimonials-client-name .name {
			font-size: <?php echo $name_font_size; ?>px !important;
			color: #3CB4E5 !important;
			font-weight: 700 !important;
			line-height: 120% !important;
		}
		.t-detail .designation,
		.testimonials-client-name .designation {
			font-size: <?php echo $designation_font_size; ?>px !important;
			color: #3CB4E5 !important;
			font-weight: 700 !important;
			margin-bottom: 0 !important;
			line-height: 120% !important;
		}
		.t-detail .company,
		.testimonials-client-name .company {
			font-size: <?php echo $company_font_size; ?>px !important;
			color: #3CB4E5 !important;
			font-weight: 700 !important;
			line-height: 120% !important;
		}
	</style>
	
	<?php if ( have_rows( 'block_settings_control_testimonial' ) ) : 
		while ( have_rows( 'block_settings_control_testimonial' ) ) : the_row();
		$tta_font_style= get_sub_field( 'tta_font_style_case_study' );
		$class_fontstyle="";
		if ($tta_font_style=="font_style_version_one") {
			$class_fontstyle ="option1";
		} elseif ($tta_font_style=="font_style_version_two") { 
			$class_fontstyle ="option2"; 
		} 
		$gradient_color_banner_section_id= get_sub_field( 'case_study_section_id' );  ?>
	<?php endwhile; ?>
	<?php endif; ?>

	<div class="container">
		<div class="section-title">
			<span><?php the_sub_field( 'testimonial_heading' ); ?></span>
			<h2><?php the_sub_field( 'testimonial_title_section' ); ?></h2>
		</div>
	</div>

	<?php $testimonial_choose_layout = get_sub_field( 'testimonial_choose_layout' ); ?>

	<?php if($testimonial_choose_layout == 'testimonial_blue') { ?>
		
		<section class="testimonial" id="<?php echo $gradient_color_banner_section_id; ?>">
			<div class="container">		
				<div class="testi-slider">
				<?php $post_objects = get_sub_field( 'select_testimonial_slider' ); ?>
						<?php if ( $post_objects ): ?>
							<?php foreach ( $post_objects as $post ):  ?>
								<?php setup_postdata( $post ); ?>
								<div class="testi-item">
									 <?php
										$disp_img_box ='';
										if ( has_post_thumbnail()) {
											$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), ''); 
											 $disp_img_box = $large_image_url[0];
										} 
										 if(!empty( $disp_img_box)) { ?>
											<div class="t-img">
											<img src="<?php echo $disp_img_box; ?>" alt="testimonial" class="img-fluid">
											</div>
										 <?php }else{ ?> 
											<div class="t-img no-img">				
											</div>
										 <?php } ?>
									<div class="t-detail">
										<?php the_content(); ?>
										<span class="name"><?php the_title(); ?></span>
										<p class="designation"><?php the_field( 'testim_designation' ); ?></p>
										<p class="company"><?php the_field( 'testim_company' ); ?></p>
									</div>
								</div>
							<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
			</div>
		</section>
	
	<?php } elseif ($testimonial_choose_layout == 'testimonial_skyeblue') { ?>

		<section class="testimonials-slider-sec" id="<?php echo $gradient_color_banner_section_id; ?>">
			<div class="container">

				<div class="testimonials-slider">
					<?php $post_objects2 = get_sub_field( 'select_testimonial_slider' ); ?>
					<?php if ( $post_objects2 ): ?>
						<?php foreach ( $post_objects2 as $post ):  ?>
						<?php setup_postdata( $post ); ?>
					<div class="item">
					<?php
						$disp_img_box ='';
						if ( has_post_thumbnail()) {
							$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), ''); 
							 $disp_img_box = $large_image_url[0];
						}				  
						if(!empty( $disp_img_box)) { ?>			
							<div class="testimonials-slider-oth-img" style="background-image:url(<?php echo $disp_img_box; ?>)">
							</div>
						<?php }else { ?>
							<div class="testimonials-slider-oth-img no-img" style="background-image:url(<?php echo $disp_img_box; ?>)">
							</div>
						<?php  } ?>
						<div class="testimonials-caps">
							<?php the_content(); ?>
						</div>
						<div class="testimonials-client-name">
							<h6 class="name"><?php the_title(); ?></h6>
							<p class="designation"><?php the_field( 'testim_designation' ); ?></p>
							<p class="company"><?php the_field( 'testim_company' ); ?></p>
						</div>
					</div>
				  <?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
				</div>
			</div>
		</section>
	
	<?php } elseif ($testimonial_choose_layout == 'testimonial_particular') { ?>

		<section class="testimonial testimonial-particular" id="<?php echo $gradient_color_banner_section_id; ?>">
			<div class="container">			
				<div class="testi-slider">
					<?php if ( have_rows( 'add_testimonial' ) ) : ?>
						<?php while ( have_rows( 'add_testimonial' ) ) : the_row(); ?>
							<div class="testi-item">
								<?php $add_testimonial_image = get_sub_field( 'add_testimonial_image' ); ?>
										<?php if ( $add_testimonial_image ) { ?>
											<div class="t-img">
											<img src="<?php echo $add_testimonial_image['url']; ?>" alt="<?php echo $add_testimonial_image['alt']; ?>"  class="img-fluid">
											</div>				
										<?php }else{ ?> 
											<div class="t-img no-img">				
											</div>
										<?php } ?>
								<div class="t-detail">
									<?php the_sub_field( 'add_testimonial_content' ); ?>				
									<span class="name"><?php the_sub_field( 'add_testimonial_title' ); ?></span>				
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

<?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>
<script>
	jQuery(document).ready(function($){

    $('.ttanav h4').on('click', function(e){
        $('.ttanav h4').removeClass('active');
		$(this).addClass('active');
		var nid = $(this).data('id');
		
		$('.ncontent').removeClass('show')
         $('#'+nid).addClass('show')


					})
	})
	</script>
