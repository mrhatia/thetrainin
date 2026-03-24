<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php $podcast_layout= get_sub_field( 'podcast_layout' );
if($podcast_layout=="featuredposdcast"){ ?>
<div class="workshop-main">

			<div class="our-podcast">
				<section class="about-media">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-6 our-podcast-img">
								<?php $eatured_podcast_image = get_sub_field( 'eatured_podcast_image' ); ?>
								<?php if ( $eatured_podcast_image ) { ?>
								<div class="p-img">
									<img src="<?php echo $eatured_podcast_image['url']; ?>" alt="<?php echo $eatured_podcast_image['alt']; ?>" class="img-fluid" />
								</div>
								<?php } ?>
							</div>
			
							<div class="col-sm-12 col-md-6 our-podcast-content">
								<div class="podcast-detail list-dots">
		
									<div class="section-title">
										<span><?php the_sub_field( 'featured_podcast_heading' ); ?></span>
										<h3><?php the_sub_field( 'featured_podcast_title' ); ?></h3>
									</div>
									<p><?php the_sub_field( 'featured_podcast_short_content' ); ?></p>
									<?php $featured_podcast_button = get_sub_field( 'featured_podcast_button' ); ?>
									<?php if ( $featured_podcast_button ) { ?>
										<a class="btn btn-primary" href="<?php echo $featured_podcast_button['url']; ?>" target="<?php echo $featured_podcast_button['target']; ?>"><?php echo $featured_podcast_button['title']; ?></a>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
	
</div>
<?php }elseif($podcast_layout=="singleposdcast"){ ?>

<div class="sales-podcast podcast-episode">
			<div class="container">
				<div class="podcast-inner">
					<div class="row">
						<div class="col-sm-12 col-md-3 featured_podcast_image">
							<?php $eatured_podcast_image = get_sub_field( 'eatured_podcast_image' ); ?>
							<?php if ( $eatured_podcast_image ) { ?>
							<div class="p-img">
								<img src="<?php echo $eatured_podcast_image['url']; ?>" alt="<?php echo $eatured_podcast_image['alt']; ?>" class="img-fluid" />
							</div>
							<?php } ?>	
						</div>
		
						<div class="col-sm-12 col-md-9">
							<div class="podcast-detail">
								<div class="section-title podcast_title_main">
									<div class="podcast_title-img">
										<?php if ( $eatured_podcast_image ) { ?>
											<img src="<?php echo $eatured_podcast_image['url']; ?>" alt="<?php echo $eatured_podcast_image['alt']; ?>" class="img-fluid" />
										<?php } ?>	
									</div>
									<div class="podcast_title">
										<span><?php the_sub_field( 'featured_podcast_heading' ); ?></span>
										<h3><?php the_sub_field( 'featured_podcast_title' ); ?></h3>
									</div>
								</div>
								<p><?php the_sub_field( 'featured_podcast_short_content' ); ?></p>
								
								<div class="audio_loop" id="audio_<?php echo get_the_ID(); ?>" data-src="<?php echo site_url(); ?>/wp-content/uploads/2022/05/sample.mp3">
									<div class="audio-player">
										<div class="play-container">
											<div class="toggle-play">
											</div>
										</div>
										<div class="time">
											<div class="current">0:00</div>
											<div class="divider">/</div>
											<div class="length"></div>
										</div>
										<div class="timeline">
											<div class="progress"></div>
										</div>
										<div class="controls">
											<div class="name">Music Song</div>
											<div class="volume-container">
												<div class="volume-button">
													<div class="volume icono-volumeMedium"></div>
												</div>
												<div class="volume-slider">
													<div class="volume-percentage"></div>
												</div>
											</div>
										</div>
									</div>
								</div>



							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php }elseif($podcast_layout=="highlightposdcast") { ?>
<section class="podcast-sec default-bottom-padding">
    <div class="container">
        <div class="podcast-block">
            <div class="podcast-block-inner">
                <div class="podcast-block-top podcast-block-row">
                    <div class="podcast-img-label">
						<?php $eatured_podcast_image = get_sub_field( 'eatured_podcast_image' ); ?>
						<?php if ( $eatured_podcast_image ) { ?>
                        <div class="podcast-img" style="background-image:url(<?php echo $eatured_podcast_image['url']; ?>)">

                        </div>
						<?php } ?>
						
                        <?php /* <div class="podcast-label for-mobile">
                            <label><?php the_sub_field( 'featured_podcast_heading' ); ?></label>
                            <h6><?php the_sub_field( 'featured_podcast_title' ); ?></h6>
                        </div> */?>
                    </div>
                    <div class="podcast-caps">
					<div class="podcast-label">
                            <label><?php the_sub_field( 'featured_podcast_heading' ); ?></label>
                            <h6><?php the_sub_field( 'featured_podcast_title' ); ?></h6>
                        </div>
                      <p> <?php the_sub_field( 'featured_podcast_short_content' ); ?></p>
					  <?php $featured_podcast_button = get_sub_field( 'featured_podcast_button' ); ?>
				<?php if ( $featured_podcast_button ) { ?>
					<a class="btn btn-primary" href="<?php echo $featured_podcast_button['url']; ?>" target="<?php echo $featured_podcast_button['target']; ?>"><?php echo $featured_podcast_button['title']; ?></a>
				<?php } ?>
                    </div>
                </div>
                
                 <!-- <div class="podcast-block-bottom podcast-block-row">
				  <div class="podcast-img-label">
                        <div class="podcast-label for-desktop">
                            <label>Podcast</label>
                            <h6>Culture Podcast from Maria</h6>
                        </div>
                    </div>
                    <div class="podcast-caps">
                        <div class="podcast-player">
                            <img src="<?php //echo get_template_directory_uri(); ?>/images/mp3-player.jpg" alt="">
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>