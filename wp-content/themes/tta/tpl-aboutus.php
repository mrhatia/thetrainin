<?php
/**
 * Template Name: About Us Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
**/

get_header();
?>

<?php if ( have_rows( 'about_content_layout' ) ): ?>
	<?php while ( have_rows( 'about_content_layout' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'about_banner_block' ) : ?>
<section class="main-banner">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="banner-detail">
						<div class="top-label">
						<?php the_sub_field( 'about_banner_heading' ); ?>
						</div>
						<div class="main-title">
							<h1><?php the_sub_field( 'about_banner_title' ); ?></h1>
						</div>
						<p><?php the_sub_field( 'about_banner_short_content' ); ?></p>
						
					<?php $about_banner_button_one = get_sub_field( 'about_banner_button_one' ); ?>
					<?php if ( $about_banner_button_one ) { ?>
					<div class="banner-btn">
						<a class="btn btn-primary" href="<?php echo $about_banner_button_one['url']; ?>" target="<?php echo $about_banner_button_one['target']; ?>"><?php echo $about_banner_button_one['title']; ?></a>
					</div>
					<?php } ?>
					<?php $about_banner_button_two = get_sub_field( 'about_banner_button_two' ); ?>
					<?php if ( $about_banner_button_two ) { ?>
					<div class="banner-btn">
						<a class="btn btn-primary" href="<?php echo $about_banner_button_two['url']; ?>" target="<?php echo $about_banner_button_two['target']; ?>"><?php echo $about_banner_button_two['title']; ?></a>
					</div>
					<?php } ?>
					</div>
				</div>
				<?php $about_banner_image = get_sub_field( 'about_banner_image' ); ?>
			<?php if ( $about_banner_image ) { ?>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="banner-img">
						<div class="image">
								<img src="<?php echo $about_banner_image['url']; ?>" alt="<?php echo $about_banner_image['alt']; ?>"  class="img-fluid" />
						</div>
					</div>
				</div>
				<?php } ?>
			</div>

			<div class="down-arrow">
				<a href="#call-to-section">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M6 13L12 18L18 13" stroke="#323A45" stroke-width="2" stroke-linecap="round"
							stroke-linejoin="round" />
						<path opacity="0.4" d="M6 6L12 11L18 6" stroke="#323A45" stroke-width="2" stroke-linecap="round"
							stroke-linejoin="round" />
					</svg>
				</a>
			</div>
		</div>
	</section>
	<?php elseif ( get_row_layout() == 'about_scroll_heading' ) : ?>
	<!-- content start -->
	<div class="content clearfix">
		<div class="container">
			<div class="about-header">
				<ul>
					<?php if ( have_rows( 'about_add_heading' ) ) : ?>
				<?php $count=0; while ( have_rows( 'about_add_heading' ) ) : the_row(); ?>
					<li><a href="#" data-scroll-nav="<?php echo $count; ?>"><?php the_sub_field( 'about_scroll_title' ); ?></a></li>
					<?php $count++; endwhile; ?>
				<?php endif; ?>
				</ul>
			</div>
		</div>
<?php elseif ( get_row_layout() == 'about_history_block' ) : ?>
		<!-- work section start  -->
		<section class="our-history" id="call-to-section" data-scroll-index="0">
			<div class="container">
				<div class="text-block">
					<div class="section-title">
						<span><?php the_sub_field( 'about_history_heading' ); ?></span>
						<h2><?php the_sub_field( 'about_history_title' ); ?></h2>
					</div>
					<?php the_sub_field( 'about_history_content' ); ?>
				</div>
			</div>
		</section>
	<?php elseif ( get_row_layout() == 'about_mission_values_block' ) : ?>
		<section class="solution-block" data-scroll-index="1">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-6">
						<div class="section-title text-start">
							<span><?php the_sub_field( 'about_mission_values_heading' ); ?></span>
							<h2><?php the_sub_field( 'about_mission_values_title' ); ?></h2>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-6">
						<div class="text-block text-start">
							<?php the_sub_field( 'about_mission_values_content' ); ?>
						</div>
					</div>
				</div>			
			</div>
		</section>

<?php elseif ( get_row_layout() == 'about_awards_block' ) : ?>
		<section class="award-recognize" data-scroll-index="2">
			<div class="container">
				<div class="text-block">
					<div class="section-title">
						<span><?php the_sub_field( 'about_awards_heading' ); ?></span>
						<h2><?php the_sub_field( 'about_awards_title' ); ?></h2>
					</div>
					<p>	<?php the_sub_field( 'about_awards_sub_title' ); ?></p>
				</div>

				<div class="award-list d-md-block d-none">
					<div class="row">
						<?php if ( have_rows( 'about_add_awards' ) ) : ?>
						<?php while ( have_rows( 'about_add_awards' ) ) : the_row(); ?>
						<div class="col-sm-12 col-md-6 col-lg-4">
							<div class="recog-block">
							<?php $about_add_award_image = get_sub_field( 'about_add_award_image' ); ?>
							<?php if ( $about_add_award_image ) { ?>
								<div class="img">
									<img src="<?php echo $about_add_award_image['url']; ?>" alt="<?php echo $about_add_award_image['alt']; ?>"  class="img-fluid" />
								</div>
								<?php } ?>
								<h6><?php the_sub_field( 'about_add_award_title' ); ?></h6>
								<p><?php the_sub_field( 'about_add_award_short_content' ); ?></p>
							</div>
						</div>
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				<?php $about_add_award_button_link = get_sub_field( 'about_add_award_button_link' ); ?>
					<?php if ( $about_add_award_button_link ) { ?>
					<div class="see-more">
							<a class="link" href="<?php echo $about_add_award_button_link['url']; ?>" target="<?php echo $about_add_award_button_link['target']; ?>"><?php echo $about_add_award_button_link['title']; ?></a>
					</div>
					<?php } ?>
				</div>
			</div>

			<div class="mobile-award d-md-none d-block">
				<div class="mb_award-slider">
					<div class="mb_award_slide">
						<div class="recog-block">
							<div class="img">
								<img src="https://wpconfigs.com/tta/wp-content/uploads/2021/10/award11.png" alt="">
							</div>
							<h6>Training Outsourcing</h6>
							<p>For 12+ years...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget arcu euismod elit.</p>
						</div>
					</div>
					<div class="mb_award_slide">
						<div class="recog-block">
							<div class="img">
								<img src="https://wpconfigs.com/tta/wp-content/uploads/2021/10/award11.png" alt="">
							</div>
							<h6>Training Outsourcing</h6>
							<p>For 12+ years...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget arcu euismod elit.</p>
						</div>
					</div>
					<div class="mb_award_slide">
						<div class="recog-block">
							<div class="img">
								<img src="https://wpconfigs.com/tta/wp-content/uploads/2021/10/award11.png" alt="">
							</div>
							<h6>Training Outsourcing</h6>
							<p>For 12+ years...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget arcu euismod elit.</p>
						</div>
					</div>
				</div>
			</div>

		</section>
<?php elseif ( get_row_layout() == 'about_quotes_block' ) : ?>
		<section class="business-goal">
			<div class="container">
				<div class="row">
				<?php $about_quotes_image = get_sub_field( 'about_quotes_image' ); ?>
			<?php if ( $about_quotes_image ) { ?>
					<div class="col-sm-12 col-md-3">
						<div class="business-coma">
							<img src="<?php echo $about_quotes_image['url']; ?>" alt="<?php echo $about_quotes_image['alt']; ?>" class="img-fluid" />				
						</div>
					</div>
					<?php } ?>
					<div class="col-sm-12 col-md-9">
						<div class="business-detail">
							<h2><?php the_sub_field( 'about_quotes_content' ); ?></h2>
							<span><?php the_sub_field( 'about_quotes_author_name' ); ?></span>	
							<img src="<?php echo get_template_directory_uri(); ?>/images/business-pattern.png" alt="business-pattern" class="img-fluid">			
						</div>
					</div>
				</div>
			</div>
		</section>

	<?php elseif ( get_row_layout() == 'about_team_block' ) : ?>

		<div class="team-sec" data-scroll-index="3">
			<div class="container">
				<div class="section-title">
				<?php if(get_sub_field( 'about_team_heading' )){ ?>
					<span><?php the_sub_field( 'about_team_heading' ); ?></span>
					<?php } ?>
					<?php if(get_sub_field( 'about_team_title' )){ ?>
					<h2><?php the_sub_field( 'about_team_title' ); ?></h2>
					<?php } ?>
				</div>
				<?php $about_team_short_code_team =get_sub_field( 'about_team_short_code_team' ); ?>
				<?php 
				echo do_shortcode($about_team_short_code_team);
				?>
			</div>
			
		</div>

<?php elseif ( get_row_layout() == 'about_fixable_content_block' ) : ?>
<?php if ( have_rows( 'about_fixable_content' ) ) : ?>
		<?php while ( have_rows( 'about_fixable_content' ) ) : the_row(); ?>
		<?php $about_fixable_image_type = get_sub_field( 'about_fixable_image_type' ); 
			if($about_fixable_image_type=="aboutrightimage") { 
				$aboutrightimage ="";
			}else{ 
				$aboutrightimage ="left-image-sec";
				} ?>
		<section class="culture-sec <?php echo $aboutrightimage; ?>" data-scroll-index="5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6 culture-sec-col1">
						<div class="culture-detail">
							<div class="section-title text-start">
								<span><?php the_sub_field( 'about_fixable_heading' ); ?></span>
								<h2><?php the_sub_field( 'about_fixable_title' ); ?></h2>
							</div>
							<p><?php the_sub_field( 'about_fixable_short_content' ); ?></p>
							<?php $about_fixable_link = get_sub_field( 'about_fixable_link' ); ?>
							<?php if ( $about_fixable_link ) { ?>
								<a class="link" href="<?php echo $about_fixable_link['url']; ?>" target="<?php echo $about_fixable_link['target']; ?>"><?php echo $about_fixable_link['title']; ?></a>
							<?php } ?>
						</div>
					</div>
					<?php $about_fixable_image = get_sub_field( 'about_fixable_image' ); ?>
					<?php if ( $about_fixable_image ) { ?>
					<div class="col-sm-12 col-md-6  culture-sec-col2">
						<div class="culture-img text-center">
						<img src="<?php echo $about_fixable_image['url']; ?>" alt="<?php echo $about_fixable_image['alt']; ?>" class="img-fluid" />
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>

	<?php elseif ( get_row_layout() == 'about_board_director_block' ) : ?>
		<section class="director-sec" data-scroll-index="7">
			<div class="container">
				<div class="section-title">
					<span><?php the_sub_field( 'about_board_director_heading' ); ?></span>
					<h2><?php the_sub_field( 'about_board_director_title' ); ?></h2>
				</div>

				<div class="director-list">
					<div class="row">
					<?php if ( have_rows( 'add_board_of_director' ) ) : ?>
					<?php while ( have_rows( 'add_board_of_director' ) ) : the_row(); ?>
						<div class="col-6 col-md-3">
							<div class="director-block">
							<?php $add_board_of_director_image = get_sub_field( 'add_board_of_director_image' ); ?>
								<?php if ( $add_board_of_director_image ) { ?>
									<img  class="img-fluid" src="<?php echo $add_board_of_director_image['url']; ?>" alt="<?php echo $add_board_of_director_image['alt']; ?>" />
								<?php } ?>
								<h6><?php the_sub_field( 'add_board_of_director_name' ); ?></h6>
								<span><?php the_sub_field( 'add_board_of_director_designation' ); ?></span>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
<?php elseif ( get_row_layout() == 'about_client_block' ) : ?>
		<section class="trusted-by" data-scroll-index="4">
			<div class="container">
				<div class="section-title">
					<span><?php the_sub_field( 'about_client_heading' ); ?></span>
					<h2><?php the_sub_field( 'about_client_title' ); ?></h2>
				</div>

				<div class="row">
				<?php if ( have_rows( 'about_add_client' ) ) : ?>
				<?php while ( have_rows( 'about_add_client' ) ) : the_row(); ?>
					<?php $about_add_client_image = get_sub_field( 'about_add_client_image' ); ?>
					<?php $about_add_client_link = get_sub_field( 'about_add_client_link' ); ?>
					<?php if (!empty($about_add_client_image) || !empty($about_add_client_link)) { ?>
					<div class="col-sm-12 col-md-2 logo-5">
					<a class="logo-block" href="<?php echo $about_add_client_link['url']; ?>" target="<?php echo $about_add_client_link['target']; ?>">
						<img src="<?php echo $about_add_client_image['url']; ?>" alt="<?php echo $about_add_client_image['alt']; ?>" class="img-fluid" />
						</a>
					</div>
					<?php } ?>
				<?php endwhile; ?>
	
			<?php endif; ?>
				</div>
			</div>
		</section>

	</div>
	<!-- content end -->
	<?php elseif ( get_row_layout() == 'about_callout_block' ) : ?>
	<section class="signup">
		<div class="container">
			<div class="section-title">
				<span><?php the_sub_field( 'about_callout_heading' ); ?></span>
				<h2><?php the_sub_field( 'about_callout_title' ); ?></h2>
			</div>
			<p><?php the_sub_field( 'about_callout_sub_title' ); ?></p>
			<?php $about_callout_button = get_sub_field( 'about_callout_button' ); ?>
			<?php if ( $about_callout_button ) { ?>
			<div class="sign-form">
			<a class="btn btn-primary" href="<?php echo $about_callout_button['url']; ?>" target="<?php echo $about_callout_button['target']; ?>"><?php echo $about_callout_button['title']; ?></a>
			</div>
			<?php } ?>
		</div>
	</section>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>
<?php 
get_footer(); ?>
