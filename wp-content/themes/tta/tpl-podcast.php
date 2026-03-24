<?php
/**
 * Template Name: Podcast Template
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


<?php if ( have_rows( 'podcast_content_layout' ) ): ?>
	<?php while ( have_rows( 'podcast_content_layout' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'podcast_banner_block' ) : ?>
<section class="main-banner">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="banner-detail">
						<div class="top-label">
							<?php the_sub_field( 'podcast_banner_heading' ); ?>
						</div>
						<div class="main-title">
							<h1><?php the_sub_field( 'podcast_banner_title' ); ?></h1>
						</div>
						<p><?php the_sub_field( 'podcast_banner_short_content' ); ?></p>
						<?php $podcast_banner_button_one = get_sub_field( 'podcast_banner_button_one' ); ?>
						<?php if ( $podcast_banner_button_one ) { ?>
						<div class="banner-btn">
							<a class="btn btn-primary btn-large" href="<?php echo $podcast_banner_button_one['url']; ?>" target="<?php echo $podcast_banner_button_one['target']; ?>"><?php echo $podcast_banner_button_one['title']; ?></a>
						</div>
						<?php } ?>
					</div>
				</div>
				<?php $podcast_banner_image = get_sub_field( 'podcast_banner_image' ); ?>
			<?php if ( $podcast_banner_image ) { ?>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="banner-img">
						<div class="image">
							<img src="<?php echo $podcast_banner_image['url']; ?>" alt="<?php echo $podcast_banner_image['alt']; ?>" class="img-fluid">
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
	
	
	
	
	


	<!-- content start -->
	<div class="content clearfix">
		<?php elseif ( get_row_layout() == 'podcast_select_podcast_block' ) : ?>
					
						
					<?php /*
						$post_title=""; 
		$episodes_url=""; 
		// WP_Query arguments
		$args = array(
			'post_type'              => array( 'podcast' ),
			'post_status'            => array( 'publish' ),
			'posts_per_page'         => '10',
			'order'                  => 'DESC',
			'orderby'                => 'date',
		);

		// The Query
		$q_podcast = new WP_Query( $args );

		// The Loop
		if ( $q_podcast->have_posts() ) {
			while ( $q_podcast->have_posts() ) {
				$q_podcast->the_post();
				
				$episodes_id = get_post_meta( get_the_ID(), 'episodes_id', true );
				$audio_url = get_post_meta( get_the_ID(), 'audio_url', true );
				$podcast_mp3_url = get_field( 'podcast_mp3_url' );
				$podcast_image_url = get_field( 'podcast_image_url' );
				?>
				
		<section class="podcast-episode">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-5 d-md-block d-none">
					<?php
							$disp_img_box ='';
							if ( has_post_thumbnail()) {
								$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'homepage-thumb');
								 $disp_img_box = $large_image_url[0];
							}else{
								$disp_img_box = get_template_directory_uri().'/images/p1.png';
								}
						  ?>
						<div class="p-img">
							<a href="<?php echo $podcast_image_url; ?>"  target="_blank"><img src="<?php echo  $disp_img_box; ?>" alt="posdcast" class="img-fluid"></a>
						</div>
					</div>
	
					<div class="col-sm-12 col-md-7">
						<div class="podcast-detail list-dots">
							<div class="share-btn">
								<a class="share-btn_click" href="javascript:void(0);">Share <img src="<?php echo get_template_directory_uri(); ?>/images/share.svg" alt="share" class="img-fluid"></a>
								<div class="addthis_toolbox share-open">
									<div class="custom_images">
										<a class="addthis_button_facebook"></a>
										<a class="addthis_button_twitter"></a>
										<a class="addthis_button_linkedin"></a>
									</div>
								</div>
							</div>

							<div class="section-title podcast_title_main">
								<div class="podcast_title-img">
									<img src="<?php echo  $disp_img_box; ?>" alt="posdcast" class="img-fluid">
								</div>
								<div class="podcast_title">
									<span><a href="<?php echo $podcast_mp3_url; ?>"  target="_blank"><?php the_title(); ?></a></span>
									<h3><?php the_field( 'pode_sub_title' ); ?></h3>
								</div>
							</div>

							<?php the_content(); ?>
							<?php 
								if(!empty($audio_url)){
									?>
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
								<?php } ?>
							
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php }}  */ ?>
		
		<div id="podcast_result"></div>
		
		<div class="see-more podcast_result_more">
		<div class="podcast_ajax_loader" style="display:none" ><img src="<?php echo get_template_directory_uri().'/images/loader.gif'; ?>" align="absmiddle" alt="Loading..." ></div>
			<a class="link podcast_result_more_click" href="javascript:;" target=""><!--See More--></a>
		</div>
		 <input type="hidden" name="aj_status" id="aj_status" value=""/>
		<script type="text/javascript">
var awp_ajpage=1;
var ajpage=0;
var htmltype='html';
$( document ).ready(function() {
    flt_podcast('append');
	  $( ".podcast_result_more_click" ).click(function() {
		 flt_podcast('append');
	}); 

	$(window).on('scroll', function () {
		
		 if ($(window).scrollTop() >= $('.podcast_result_more_click').offset().top + $('.podcast_result_more_click').outerHeight() - window.innerHeight) {
                
               if(jQuery('.podcast_result_more').is(':visible')) {
				if(jQuery( "#aj_status" ).val()=='done'){ 
					jQuery( ".podcast_result_more_click" ).click(); 
					 
				}		
			}	
            }
 
		 
	});
 
  
	 
	 
	 

});

 function isScrolledIntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

function flt_podcast(htmltype){
	
	 jQuery( "#aj_status" ).val('prosessing');
	 ajpage++;
	 jQuery( ".podcast_ajax_loader" ).show();
	 
	 
	jQuery.ajax({
		url:'<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
		type: "post",
		data: {
			action: 'podcast_fun',
			ajpage: ajpage,
			 
			 
		},
		success: function(data){
		
			jQuery( ".podcast_ajax_loader" ).hide();
			if(htmltype=='append'){
			jQuery("#podcast_result").append(data);
				rebind_share();
				rebind_audio_players();
				jQuery( "#aj_status" ).val('done');
			}else{
			jQuery("#podcast_result").html(data)	
				
			}
			  	
		},
		error:function(){
			 console.log('failure!');
		}                
		
	 });
}

function isScrolledIntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

</script>

		<div class="more-episode-sec">
			<div class="container">
				<div class="section-title text-start">
					<h3>More Episodes</h3>
				</div>

				<div class="more-episode">
				
					<?php
						$post_title=""; 
		$episodes_url=""; 
		// WP_Query arguments
		$args = array(
			'post_type'              => array( 'podcast' ),
			'post_status'            => array( 'publish' ),
			'posts_per_page'         => '5',
			'order'                  => 'DESC',
			'orderby'                => 'date',
		);

		// The Query
		$q_podcast = new WP_Query( $args );

		// The Loop
		if ( $q_podcast->have_posts() ) {
			while ( $q_podcast->have_posts() ) {
				$q_podcast->the_post();
 
				?>
				
						<div class="pd_list">
						<div class="pd_list_title"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></div>
						<div class="pd_list_content"><?php echo wp_trim_words( get_the_content(), 25, '...' ); ?><a href="<?php echo get_permalink(); ?>">Read More</a></div>
					</div> 
						 
					
			<?php } ?>
		<?php wp_reset_postdata(); ?>
		<?php } ?>
		
				<div id="title_podcast_result"></div>
				
				<div class="see-more title_podcast_result_more">
				<div class="title_podcast_ajax_loader" style="display:none" ><img src="<?php echo get_template_directory_uri().'/images/loader.gif'; ?>" align="absmiddle" alt="Loading..." ></div>
					<a class="title_podcast_result_more_click btn btn-primary" href="javascript:;" target="">See More</a>
				</div>
					<!--<a href="#" class="btn btn-primary">View all Podcasts</a>-->
					
					
					<script type="text/javascript">
 
var ajpage2=1;
var htmltype2='html';
$( document ).ready(function() {
    
	$( ".title_podcast_result_more_click" ).click(function() {
		 flt_podcast_title('append');
	});
	
	 
	 
	 

});

 

function flt_podcast_title(htmltype2){
	
	 	ajpage2++;
	 jQuery( ".title_podcast_ajax_loader" ).show();
	 
	 
	jQuery.ajax({
		url:'<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
		type: "post",
		data: {
			action: 'title_podcast_fun',
			ajpage2: ajpage2,
			 
			 
		},
		success: function(data){
		
			jQuery( ".title_podcast_ajax_loader" ).hide();
			if(htmltype2=='append'){
			jQuery("#title_podcast_result").append(data);
				rebind_share();
				rebind_audio_players();
				
			}else{
			jQuery("#title_podcast_result").html(data)	
				
			}
			  
		},
		error:function(){
			 console.log('failure!');
		}                
		
	 });
}

</script>


				</div>
			</div>
		</div>
<?php elseif ( get_row_layout() == 'podcast_favorite_apps_block' ) : ?>
		<!-- section class="favourite-app">
			<div class="container">
				<div class="section-title">
					<span><?php /* the_sub_field( 'podcast_favorite_heading' ); ?></span>
					<h2><?php the_sub_field( 'podcast_favorite_title' ); ?></h2>
				</div>
				<div class="row">
				<?php if ( have_rows( 'podcast_add_favorite_app' ) ) : ?>
				<?php while ( have_rows( 'podcast_add_favorite_app' ) ) : the_row(); ?>
				<?php $podcast_add_favorite_image = get_sub_field( 'podcast_add_favorite_image' ); ?>
				<?php $podcast_add_favorite_link = get_sub_field( 'podcast_add_favorite_link' ); ?>
					<div class="col-sm-12 col-md-2">
						<a href="<?php echo $podcast_add_favorite_link['url']; ?>" target="<?php echo $podcast_add_favorite_link['target']; ?>" class="logo-block">
						<img src="<?php echo $podcast_add_favorite_image['url']; ?>" alt="<?php echo $podcast_add_favorite_image['alt']; ?>" class="img-fluid" />
						</a>
					</div>
				<?php endwhile; ?>
			<?php endif; */ ?>
				</div>
			</div>
		</section -->
	<?php elseif ( get_row_layout() == 'muddhouse_media_block' ) : ?>
		<section class="about-media">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-5">
					<?php $muddhouse_media_image = get_sub_field( 'muddhouse_media_image' ); ?>
						<?php if ( $muddhouse_media_image ) { ?>
						<div class="p-img">
								<img src="<?php echo $muddhouse_media_image['url']; ?>" alt="<?php echo $muddhouse_media_image['alt']; ?>" class="img-fluid" />
						</div>
						<?php } ?>
					</div>
	
					<div class="col-sm-12 col-md-7">
						<div class="podcast-detail list-dots">
						<?php $muddhouse_media_logo = get_sub_field( 'muddhouse_media_logo' ); ?>
						<?php if ( $muddhouse_media_logo ) { ?>
							<div class="icon">
								<img src="<?php echo $muddhouse_media_logo['url']; ?>" alt="<?php echo $muddhouse_media_logo['alt']; ?>" class="img-fluid" />
							</div>
							<?php } ?>
							<div class="section-title">
								<span><?php the_sub_field( 'muddhouse_media_heading' ); ?></span>
								<h3><?php the_sub_field( 'muddhouse_media_title' ); ?></h3>
							</div>
							<?php the_sub_field( 'muddhouse_media_content' ); ?>
						</div>
					</div>
				</div>
			</div>
		</section>


	</div>
	<!-- content end -->
<?php elseif ( get_row_layout() == 'podcast_callout_block' ) : ?>
	<section class="signup">
		<div class="container">
			<div class="section-title">
				<span><?php the_sub_field( 'podcast_callout_heading' ); ?></span>
				<h2><?php the_sub_field( 'podcast_callout_title' ); ?></h2>
			</div>
			<p><?php the_sub_field( 'podcast_callout_sub_title' ); ?> </p>
				<?php $podcast_callout_button = get_sub_field( 'podcast_callout_button' ); ?>
			<?php if ( $podcast_callout_button ) { ?>
			<div class="sign-form">
				<a class="btn btn-primary" href="<?php echo $podcast_callout_button['url']; ?>" target="<?php echo $podcast_callout_button['target']; ?>"><?php echo $podcast_callout_button['title']; ?></a>
			</div>
			<?php } ?>
		</div>
	</section>
	
	<?php endif; ?>
	<?php endwhile; ?>

<?php endif; ?>

<script>
	
rebind_share();
	function rebind_share(){	
		$(".share-btn_click").click(function (e) {
			$(this).next().toggleClass('show-share'); 
		});
	}
</script>

<?php 
get_footer(); ?>
