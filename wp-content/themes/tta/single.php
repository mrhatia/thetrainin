<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TTA
 */
get_header();
while ( have_posts() ) :
the_post();
$author_id = get_post_field( 'post_author', $post_id );
$display_name=get_the_author_meta('display_name', $author_id);
$excerpt = get_the_excerpt();
 ?>
 <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-629dc5e895c08808"></script>
	<div class="main-img d-md-none d-block">
		<?php
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
		?>
		<?php if(!empty($featured_img_url)){ ?>
			<img src="<?php echo $featured_img_url; ?>" alt="blog" class="img-fluid">
		<?php } else {?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/blog1.jpg" alt="blog" class="img-fluid">
		<?php } ?>
	</div>
	
 	<section class="blog-top-banner">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-2  d-md-block d-none">
					<img src="<?php echo get_template_directory_uri(); ?>/images/menu-pattern.png" alt="banner" class="img-fluid">
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="section-title">
						<h1><?php echo get_the_title();?></h1>
					</div>
					<div class="date"><?php echo display_read_time(); ?> | <?php echo get_the_date( 'M d Y', get_the_ID() );?>  |  By <?php echo $display_name;?></div>
					<!--<ul>
						<li>
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/comment.png" alt="cmy" class="img-fluid">
								<span><?php echo get_comments_number(get_the_ID()); ?></span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/like.png" alt="cmy" class="img-fluid">							
								<span>3</span>
							</a>
						</li>
					</ul> -->
				</div>
				<div class="col-sm-12 col-md-2  d-md-block d-none">
					<img src="<?php echo get_template_directory_uri(); ?>/images/menu-pattern.png" alt="banner" class="img-fluid">
				</div>
			</div>
		</div>
	</section>
	<!-- content start -->
	<div class="content clearfix">
		<div class="blog-detail-main">
			<div class="container">
				<div class="main-img blog-detail-image d-md-block d-none">
					<?php
						$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
					?>
					<?php if(!empty($featured_img_url)){ ?>
						<img src="<?php echo $featured_img_url; ?>" alt="blog" class="img-fluid">
					<?php } else {?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/blog1.jpg" alt="blog" class="img-fluid">
					<?php } ?>
				</div>
				<?php the_content(); ?>
				<div class="social">
					<div class="like">
					
					<?php
					$sql_1="select * from `tbl_like` where post_id=".get_the_ID()." AND `user_ip` = '".$_SERVER['REMOTE_ADDR']."'";

					$results=$wpdb->get_results($sql_1);
					$setcls='';
					if(count($results)>0){
						$setcls='liked';	
					}
					?>
						<span class="main_like <?php echo $setcls;?>"><img src="<?php echo get_template_directory_uri(); ?>/images/like2.png" alt="like" class="img-fluid" data-pid="<?php echo get_the_ID()?>"></span>
						<?php
						$sql_1="select * from `tbl_like` where post_id=".get_the_ID();

						$results=$wpdb->get_results($sql_1);
						?>
						<span class="likecount"><?php echo count($results);?></span>
					</div>
					<!-- Twitter -->
<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
					<ul>
						<li>
							<a class="addthis_button_facebook"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="socil" class="img-fluid"></a>
						</li>
						<li>
							<a class="addthis_button_twitter"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" alt="socil" class="img-fluid"></a>
						</li>
						<li>
							<a class="addthis_button_linkedin" ><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="socil" class="img-fluid"></a>
						</li>
					</ul>
					</div>
				</div>
				<script>
					jQuery(document).ready(function(){
						
							jQuery('.img-fluid').click(function(){
								 
								var pid=jQuery(this).attr('data-pid');
								 
								jQuery.ajax({
									url:'<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
									type: "post",
									data: {
										action: 'like_fun',
										pid: pid,
										 
									 },
									success: function(data){
									 if(data.classnm=='remove'){
										 jQuery('.main_like').removeClass('liked');
									 }else{
										  jQuery('.main_like').addClass('liked');
									 }
									  jQuery('.likecount').html(data.pcount);
										
									 },
									error:function(){
										 console.log('failure!');
									 }                
						 
								 });
							});
						
						
					});
				</script>

				<div class="wp_comments">
		
					<?php 
					// If comments are open or there is at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					} ?>
				</div>

				
				<div class="related-blog">
					<div class="arrow">
						<div class="prev">
						<?php previous_post_link( '%link', '<img src="'.get_template_directory_uri().'/images/left-page.svg" alt="page" class="img-fluid"><span>Previous</span>' ); ?>
						</div>
						<div class="next"> 
						 <?php next_post_link( '%link', '<span>Next</span><img src="'.get_template_directory_uri().'/images/right-page.svg" alt="page" class="img-fluid">' ); ?>
						</div>
					</div>
					<div class="row">
					<?php
					$prev_post = get_previous_post();
				 ?>
						<div class="col-sm-12 col-md-5">
							<div class="related-item"><a href="<?php echo get_permalink( $prev_post->ID);?>">
							<?php
							$featured_img_url = get_the_post_thumbnail_url($prev_post->ID,'blog-list'); 
							?>
							<?php if(!empty($featured_img_url)){ ?>
								<img src="<?php echo $featured_img_url; ?>" alt="blog" class="img-fluid">
							<?php } else {?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/blog1.jpg" alt="blog" class="img-fluid">
							<?php } ?>
								 
								<h4><?php echo get_the_title($prev_post->ID); ?></h4>
							</a></div>
						</div>
						
						<?php 
						$next_post = get_next_post();
						?>
						<div class="col-sm-12 col-md-2"></div>
						<div class="col-sm-12 col-md-5">
							<div class="related-item"><a href="<?php echo get_permalink($next_post->ID);?>">
							<?php
							$featured_img_url = get_the_post_thumbnail_url($next_post->ID,'blog-list'); 
							?>
							<?php if(!empty($featured_img_url)){ ?>
								<img src="<?php echo $featured_img_url; ?>" alt="blog" class="img-fluid">
							<?php } else {?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/blog1.jpg" alt="blog" class="img-fluid">
							<?php } ?>
								 
								<h4><?php echo get_the_title($next_post->ID); ?></h4>
							</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- content end -->
 <?php
endwhile; // End of the loop.
get_footer();