<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('search-r-main'); ?>>
	
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="search-r-thumb">
			<?php tta_post_thumbnail(); ?>
		</div>
	<?php endif; ?>

	<div class="search-r-list <?php if ( has_post_thumbnail() ) : ?>half-width<?php endif; ?>">
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php
				tta_posted_on();
				tta_posted_by();
				?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		
		
		<?php  if ( 'podcast' === get_post_type() ) : 
	
$episodes_id = get_post_meta( get_the_ID(), 'episodes_id', true );	
$audio_url = get_post_meta( get_the_ID(), 'audio_url', true );
$podcast_mp3_url = get_field( 'podcast_mp3_url' );
$podcast_image_url = get_field( 'podcast_image_url' );		
			if(!empty($audio_url)){ 	?>
										<div class="audio_loop" id="audio_<?php echo get_the_ID(); ?>" data-src="<?php echo $audio_url;?>">
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
									<?php }else{ ?>
									<div class="audio_loop" id="audio_<?php echo get_the_ID(); ?>" data-src="<?php echo $podcast_mp3_url;?>">
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
		<?php }  ?>
							
		<?php endif; ?>
	</div>


</article><!-- #post-<?php the_ID(); ?> -->
