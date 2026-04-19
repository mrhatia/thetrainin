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
		<div class="banner-inner">
		<div class="container">
			<div class="row">
				
				<div class="">
					<?php $categories = get_the_category();
					if($categories){?>
					<div class="cattag">
                          <?php  

    foreach ($categories as $category) {
        $cat_link = get_category_link($category->term_id);

       
        echo '<a href="' . esc_url($cat_link) . '">';
        echo esc_html($category->name);
        echo '</a>';
       
    }
?>
					</div>
					<?php }?>
					<div class="section-title">
						<h1><?php echo get_the_title();?></h1>
					</div>
					<div class="date"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="1" y="1" width="23" height="23" rx="11.5" stroke="#3EB3E3" stroke-width="2"/>
<path d="M12.5 4V14" stroke="#3EB3E3" stroke-width="2" stroke-linecap="round"/>
<path d="M12.5008 14.0002L18 17.5" stroke="#3EB3E3" stroke-width="2" stroke-linecap="round"/>
</svg><div class="metad">
 <?php echo display_read_time(); ?> | <?php echo get_the_date( 'M d Y', get_the_ID() );?> <br>  By <?php echo $display_name;?></div></div>
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
			
				<div class="main-img blog-detail-image d-md-block d-none">
					<?php
						$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
					?>
					<?php if(!empty($featured_img_url)){ ?>
						<img src="<?php echo $featured_img_url; ?>" alt="blog" class="">
					<?php } else {?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/blog1.jpg" alt="blog" class="">
					<?php } ?>
				</div>
			</div>
		</div></div>
	</section>
	<!-- content start -->
	<div class="content clearfix">
		<div class="blog-detail-main">
			<div class="container">
				<div class="summery">
					<h4>Summary</h4>
					<?php echo get_field('summery');?>
					<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
						<span>Share Article</span>
					<ul>
						<li>
							<a class="addthis_button_linkedin"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedinicon.svg" alt="socil" class="img-fluid"></a>
						</li>
						<li>
							<a class="addthis_button_facebook"><img src="<?php echo get_template_directory_uri(); ?>/images/facebookicon.svg" alt="socil" class="img-fluid"></a>
						</li>
						<li>
							<a class="addthis_button_twitter"><img src="<?php echo get_template_directory_uri(); ?>/images/twittericon.svg" alt="socil" class="img-fluid"></a>
						</li>
						<li>
							<a class="addthis_button_linkedin" ><img src="<?php echo get_template_directory_uri(); ?>/images/instagramicon.svg" alt="socil" class="img-fluid"></a>
						</li>
					</ul>
					</div>
</div>	
				<div class="blogcontent">
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
						<span class="main_like <?php echo $setcls;?>"><img src="<?php echo get_template_directory_uri(); ?>/images/likeicon.svg" alt="like" class="img-fluid" data-pid="<?php echo get_the_ID()?>"></span>
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
							<a class="addthis_button_linkedin"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedinicon.svg" alt="socil" class="img-fluid"></a>
						</li>
						<li>
							<a class="addthis_button_facebook"><img src="<?php echo get_template_directory_uri(); ?>/images/facebookicon.svg" alt="socil" class="img-fluid"></a>
						</li>
						<li>
							<a class="addthis_button_twitter"><img src="<?php echo get_template_directory_uri(); ?>/images/twittericon.svg" alt="socil" class="img-fluid"></a>
						</li>
						<li>
							<a class="addthis_button_linkedin" ><img src="<?php echo get_template_directory_uri(); ?>/images/linkedinicon.svg" alt="socil" class="img-fluid"></a>
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
</div></div>
<?php $btitle = get_field('sblock_title','option');
$sblock_content = get_field('sblock_content','option');
$sblock_button_text = get_field('sblock_button_text','option');
$sblock_button_link = get_field('sblock_button_link','option');?>
<?php if($btitle){?>
<div class="bottomblock">
   <div class="bblockleft"><h3><?php echo $btitle;?></h3></div>
   <div class="bblockright"><div class="bdesc"><?php echo $sblock_content;?></div>
          <?php if($sblock_button_text){?>
		<div class="downlink" bis_skin_checked="1">
              													<a class="btn btn-primary" href=" <?php echo $sblock_button_link;?>"> <?php echo $sblock_button_text;?>					 <svg width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.75 1.75L9.25 10.5L1.75 19.25" stroke="white" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"></path>
</svg></a>
	
	</div>
		  <?php }?>
</div>
</div>
<?php }?>
<div class="postfooter">
			<div class="container">	
			
				<div class="related-blog">
						<div class="arrow">
						<div class="prev">
						<?php previous_post_link( '%link', '<svg width="16" height="33" viewBox="0 0 16 33" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.0848 30.5312L1.75 16.1406L14.0848 1.75" stroke="#6DD6EC" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<span>Prev</span>' ); ?>
						</div>
						<div class="next"> 
						 <?php next_post_link( '%link', '<span>Next</span><svg width="16" height="33" viewBox="0 0 16 33" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.7511 1.75001L14.0859 16.1406L1.7511 30.5312" stroke="#6DD6EC" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
' ); ?>
						</div>
					</div>
					<div class="row">
					<?php
					$prev_post = get_previous_post();
				 ?>
						<div class="col-sm-12 col-md-6">
							<div class="related-item"><a href="<?php echo get_permalink( $prev_post->ID);?>">
							<?php
							$featured_img_url = get_the_post_thumbnail_url($prev_post->ID,'blog-list'); 
							?>
							<?php if(!empty($featured_img_url)){ ?>
								<img src="<?php echo $featured_img_url; ?>" alt="blog" class="img-fluid">
							<?php } else {?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/blog1.jpg" alt="blog" class="img-fluid">
							<?php } ?>
							<div class="postdetails">
								 <div class="date"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="1" y="1" width="23" height="23" rx="11.5" stroke="#3EB3E3" stroke-width="2"/>
<path d="M12.5 4V14" stroke="#3EB3E3" stroke-width="2" stroke-linecap="round"/>
<path d="M12.5008 14.0002L18 17.5" stroke="#3EB3E3" stroke-width="2" stroke-linecap="round"/>
</svg><div class="metad">
 <?php echo display_read_time(); ?> | <?php echo get_the_date( 'M d Y', get_the_ID() );?> <br>  By <?php echo $display_name;?></div></div>
								<h4><?php echo get_the_title($prev_post->ID); ?></h4>
						</a>
							<div class="excerpt"><?php echo get_the_excerpt($next_post->ID); ?></div>
							<a href="<?php echo get_permalink($next_post->ID);?>" class="preadmore">Read More</a>
						</div>
							
						</div>
						</div>
						<?php 
						$next_post = get_next_post();
						?>
						
						<div class="col-sm-12 col-md-6">
							<div class="related-item"><a href="<?php echo get_permalink($next_post->ID);?>">
							<?php
							$featured_img_url = get_the_post_thumbnail_url($next_post->ID,'blog-list'); 
							?>
							<?php if(!empty($featured_img_url)){ ?>
								<img src="<?php echo $featured_img_url; ?>" alt="blog" class="img-fluid">
							<?php } else {?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/blog1.jpg" alt="blog" class="img-fluid">
							<?php } ?>
							<div class="postdetails">
								 <div class="date"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="1" y="1" width="23" height="23" rx="11.5" stroke="#3EB3E3" stroke-width="2"/>
<path d="M12.5 4V14" stroke="#3EB3E3" stroke-width="2" stroke-linecap="round"/>
<path d="M12.5008 14.0002L18 17.5" stroke="#3EB3E3" stroke-width="2" stroke-linecap="round"/>
</svg><div class="metad">
 <?php echo display_read_time(); ?> | <?php echo get_the_date( 'M d Y', get_the_ID() );?> <br>  By <?php echo $display_name;?></div></div>
 
								<h4><?php echo get_the_title($next_post->ID); ?></h4></a>
								<div class="excerpt"><?php echo get_the_excerpt($next_post->ID); ?></div>
								<a href="<?php echo get_permalink($next_post->ID);?>" class="preadmore">Read More</a>
</div>                      
							</div>
						</div>
					</div>
				</div></div>
			</div>
		</div>
	</div>
	<!-- content end -->
 <?php
endwhile; // End of the loop.
get_footer();