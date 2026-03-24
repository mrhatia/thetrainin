<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<section class="main-banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-6">
				<div class="banner-detail">
					<?php if(get_sub_field('banner_header_gradient_heading')) { ?>
					<div class="top-label">
						<?php the_sub_field( 'banner_header_gradient_heading' ); ?>
					</div>
					<?php } ?>
					<?php if(get_sub_field('banner_header_title')) { ?>
					<div class="main-title">
						<h1><?php the_sub_field( 'banner_header_title' ); ?></h1>
					</div>
					<?php } ?>
					<?php if(get_sub_field('banner_header_content')) { ?>
					<?php the_sub_field( 'banner_header_content' ); ?>
					<?php } ?>
					<div class="banner-btn">
					<?php $banner_primary_button_type = get_sub_field( 'banner_primary_button_type' ); ?>
					<?php if ( $banner_primary_button_type ) { ?>
						<a class="btn btn-primary" href="<?php echo $banner_primary_button_type['url']; ?>" target="<?php echo $banner_primary_button_type['target']; ?>"><?php echo $banner_primary_button_type['title']; ?></a>
					<?php } ?>
					
					<?php $banner_secondary_button_type = get_sub_field( 'banner_secondary_button_type' ); ?>
					<?php if ( $banner_secondary_button_type ) { ?>
						<a class="btn btn-primary btn-secondary" href="<?php echo $banner_secondary_button_type['url']; ?>" target="<?php echo $banner_secondary_button_type['target']; ?>"><?php echo $banner_secondary_button_type['title']; ?></a>
					<?php } ?>
					</div>
					<?php $banner_select_video_link= get_sub_field( 'banner_select_video_link' );
						if($banner_select_video_link=="banner_video"){ ?>
	
						<div class="play-btn" style="display:none;" >
							<a href="#" class="video-btn" data-bs-toggle="modal"
								data-src="<?php the_sub_field( 'banner_video_link' ); ?>" data-bs-target="#myModal">
								<svg width="30" height="30" viewBox="0 0 30 30" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<ellipse cx="15" cy="15" rx="8.5" ry="8.5" fill="white" />
									<path
										d="M15 0C6.7285 0 0 6.72914 0 15C0 23.2709 6.7285 30 15 30C23.2715 30 30 23.2709 30 15C30 6.72914 23.2715 0 15 0ZM20.9631 15.5255L12.2132 21.1505C12.1106 21.217 11.9922 21.25 11.875 21.25C11.7725 21.25 11.6687 21.2244 11.576 21.1737C11.3745 21.0639 11.25 20.8539 11.25 20.625V9.375C11.25 9.14613 11.3745 8.93613 11.576 8.82627C11.7737 8.71764 12.0215 8.72432 12.2132 8.84947L20.9631 14.4745C21.1414 14.5892 21.25 14.7876 21.25 15C21.25 15.2124 21.1414 15.4107 20.9631 15.5255Z"
										fill="url(#paint0_linear)" />
									<defs>
										<linearGradient id="paint0_linear" x1="0" y1="0" x2="30.0284" y2="0.0284286"
											gradientUnits="userSpaceOnUse">
											<stop stop-color="#50ACEF" />
											<stop offset="1" stop-color="#3BE3A7" />
										</linearGradient>
									</defs>
								</svg>
							<?php the_sub_field( 'banner_video_text' ); ?>
							</a>
						</div>
					<?php }else{ ?>
						<?php $banner_extra_link = get_sub_field( 'banner_extra_link' ); ?>
						<?php if ( $banner_extra_link ) { ?>
							<a class="link" href="<?php echo $banner_extra_link['url']; ?>" target="<?php echo $banner_extra_link['target']; ?>"><?php echo $banner_extra_link['title']; ?></a>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
			<?php $banner_header_image = get_sub_field( 'banner_header_image' ); ?>
			<?php if (!empty($banner_header_image)) { ?>
			<div class="col-sm-12 col-md-12 col-lg-6">
				<div class="banner-img">
					<div class="image">
						<img src="<?php echo $banner_header_image['url']; ?>" alt="banner" class="img-fluid">
					</div>
				</div>
			</div>
			<?php }else{ ?>
				<div class="col-sm-12 col-md-12 col-lg-6">
				<div class="banner-img">
					<div class="image">
						<iframe width="360" height="360" src="<?php the_sub_field( 'banner_video_link' ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
	</div>
</section>