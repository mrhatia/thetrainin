<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>

<section class="video-sec text-block">
	<div class="container">
		<h2><?php the_sub_field( 'video_hme_heading' ); ?></h2>
		<?php  if(get_sub_field( 'video_hme_content' )) { ?>
		<p><?php the_sub_field( 'video_hme_content' ); ?></p>
		<?php } ?>
		
		<?php $video_hme_type = get_sub_field( 'video_hme_type' ); 
		if( $video_hme_type=="vimeovidoe") { 
		$video_hme_video_image = get_sub_field( 'video_hme_video_image' ); 
		$video_svs_sel=get_sub_field( 'video_hme_video_link', false, false ); ?>
		<div class="videobox">
				<a href="<?php the_sub_field( 'video_hme_video_link', false, false ); ?>" id="video_url"></a>
				<?php if (!empty($video_hme_video_image )) : ?>
					<div class="image" style="background-image: url(<?php echo $video_hme_video_image['url']; ?>);">
						<a href="#" class="play"><img src="<?php echo get_template_directory_uri(); ?>/images/play2.svg" alt="" /></a>
					</div>
				 <?php 
					else:
					if(!empty($video_svs_sel)){
					$video_thumb_url = get_video_thumbnail_uri($video_svs_sel); //get THumbnail via our functions in functions.php ?>
				<div class="image" style="background-image: url(<?php echo esc_url($video_thumb_url ); ?>);">
						<a href="#" class="play"><img src="<?php echo get_template_directory_uri(); ?>/images/play2.svg" alt="" /></a>
					</div>
				<?php }	endif; ?>
	
			<?php if(!empty($video_svs_sel)){ ?>
			<div class="video">
				<iframe src="<?php the_sub_field( 'video_hme_video_link', false, false ); ?>" id="video" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen=""></iframe>
			</div>
			<?php } ?>
		</div>
	<?php  if(get_sub_field( 'video_hme_content_buttom' )) { ?>
		<div class="video_hme_content_buttom"><p><?php the_sub_field( 'video_hme_content_buttom' ); ?></p>
			</div>
		</div>
		<?php } ?>
		<?php }elseif( $video_hme_type=="extranlvidoe"){ ?> 
		<div class="videobox">
		<?php $video_hme_video_image = get_sub_field( 'video_hme_video_image' ); ?>
		<?php $external_video_link = get_sub_field( 'external_video_link' ); ?>
			<?php if ( $video_hme_video_image ) { ?>
			<div class="image" style="background-image: url(<?php echo $video_hme_video_image['url']; ?>);">
				<a href="#" class="play"></a>
			</div>
			<?php }else{ ?> 
			<div class="image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/video-poster.png);">
				<a href="#" class="play"></a>
			</div>
			<?php } ?>
			<div class="video external-video">
				<a href="<?php echo $external_video_link['url']; ?>" target="<?php echo $external_video_link['target']; ?>"></a>
			</div>
			
		</div>
		<?php  if(get_sub_field( 'video_hme_content_buttom' )) { ?>
		<p><?php the_sub_field( 'video_hme_content_buttom' ); ?></p>
		<?php } ?>
		<?php  }elseif( $video_hme_type=="articulatevidoe"){ ?>
		
		
		<?php  $video_hme_video_image = get_sub_field( 'video_hme_video_image' ); 
				$articulate_video_link=get_sub_field( 'articulate_video_link' ) ?>
		<div class="videobox">
				<a href="<?php echo $articulate_video_link; ?>" id="video_url"></a>
				<?php if (!empty($video_hme_video_image )) { ?>
					<div class="image" style="background-image: url(<?php echo $video_hme_video_image['url']; ?>);">
						<a href="#" class="play"><img src="<?php echo get_template_directory_uri(); ?>/images/play2.svg" alt="" /></a>
					</div>
				 <?php }else{ ?>
				<div class="image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/video-poster.png);">
						<a href="#" class="play"><img src="<?php echo get_template_directory_uri(); ?>/images/play2.svg" alt="" /></a>
					</div>
				<?php }	 ?>
	
			<?php if(!empty($articulate_video_link)){ ?>
			<div class="video">
				<iframe src="<?php echo $articulate_video_link; ?>" id="video" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen=""></iframe>
			</div>
			<?php } ?>
		
		<?php  if(get_sub_field( 'video_hme_content_buttom' )) { ?>
		<p><?php the_sub_field( 'video_hme_content_buttom' ); ?></p>
		<?php } ?>
				<?php } ?>
	</div>
</section>
