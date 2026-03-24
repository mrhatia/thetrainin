<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>

<?php $full_service_banner_choose_layout= get_sub_field( 'full_service_banner_choose_layout' ); 
if( $full_service_banner_choose_layout=='fullbannerdefault') { ?>
<section class="sectionCl new_banner_section">
    <div class="container">

	<?php $full_service_banner_image = get_sub_field( 'full_service_banner_image' ); ?>
			<?php if ( $full_service_banner_image ) { ?>
				<div class="new_banner_image" style="background:url(<?php echo $full_service_banner_image['url']; ?>) center center no-repeat;"></div>
			<?php } ?>
			
        <div class="new_banner_label">
            <div class="top-label"><?php the_sub_field( 'full_service_banner_title' ); ?></div>
        </div>

        <div class="new_banner_content ">
            
            <div class="main-title"><h1><?php the_sub_field( 'full_service_banner_sub_title' ); ?></h1></div>

          <?php the_sub_field( 'full_service_banner_content' ); ?>
		  
		  <?php $full_service_banner_button = get_sub_field( 'full_service_banner_button' ); ?>
			<?php if ( $full_service_banner_button ) { ?>
				<a class="btn btn-primary" href="<?php echo $full_service_banner_button['url']; ?>" target="<?php echo $full_service_banner_button['target']; ?>"><?php echo $full_service_banner_button['title']; ?></a>
			<?php } ?>
			
			<?php $full_service_banner_button_two = get_sub_field( 'full_service_banner_button_two' ); ?>
			<?php if ( $full_service_banner_button_two ) { ?>
			<a class="btn btn-primary" href="<?php echo $full_service_banner_button_two['url']; ?>" target="<?php echo $full_service_banner_button_two['target']; ?>"><?php echo $full_service_banner_button_two['title']; ?></a>
			 <?php } ?>
        </div>

        <div class="down-arrow">
			<a href="#call-to-section">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M6 13L12 18L18 13" stroke="#323A45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
					<path opacity="0.4" d="M6 6L12 11L18 6" stroke="#323A45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
				</svg>					
			</a>
		</div>
    </div>
</section>
<?php }elseif($full_service_banner_choose_layout=='fullbannerone') { ?>

<section class="main-banner new_banner_style banner_v1">

<?php $full_service_banner_image = get_sub_field( 'full_service_banner_image' ); ?>
	<?php if ( $full_service_banner_image ) { ?>
    <div class="full_width-bannerimg">
        <img src="<?php echo $full_service_banner_image['url']; ?>" alt="<?php echo $full_service_banner_image['alt']; ?>" >
    </div>
<?php } ?>
    <div class="overlap_banner_content">
        <div class="container">
          <div class="banner-detail">
               <div class="banner-detail__flex">
                   <div class="top-label">
                     <?php the_sub_field( 'full_service_banner_title' ); ?>            
                   </div>
                   <div class="main-title">
                      <h1><?php the_sub_field( 'full_service_banner_sub_title' ); ?></h1>
                   </div>
                   <?php the_sub_field( 'full_service_banner_content' ); ?>
				   
                   <?php $full_service_banner_button = get_sub_field( 'full_service_banner_button' ); ?>
                 
					<?php if ( $full_service_banner_button ) { ?>
                   <div class="banner-btn">
						<a class="btn btn-primary" href="<?php echo $full_service_banner_button['url']; ?>" target="<?php echo $full_service_banner_button['target']; ?>"><?php echo $full_service_banner_button['title']; ?></a>
						 <?php $full_service_banner_button_two = get_sub_field( 'full_service_banner_button_two' ); ?>
						<?php if ( $full_service_banner_button_two ) { ?>
						<a class="btn btn-primary" href="<?php echo $full_service_banner_button_two['url']; ?>" target="<?php echo $full_service_banner_button_two['target']; ?>"><?php echo $full_service_banner_button_two['title']; ?></a>
						 <?php } ?>
                   </div>
				   <?php } ?>
               </div>
            </div>
       </div>
    </div>

</section>


<?php }elseif($full_service_banner_choose_layout=='fullbannertwo') { ?>


<section class="main-banner new_banner_style banner_v2">
<?php $full_service_banner_image = get_sub_field( 'full_service_banner_image' ); ?>
	<?php if ( $full_service_banner_image ) { ?>
    <div class="full_width-bannerimg">
        <img src="<?php echo $full_service_banner_image['url']; ?>" alt="<?php echo $full_service_banner_image['alt']; ?>" >
    </div>
<?php } ?>
    <div class="overlap_banner_content">
        <div class="container">
          <div class="banner-detail">
               <div class="banner-detail__flex">
                   <div class="top-label">
                     <?php the_sub_field( 'full_service_banner_title' ); ?>       
                   </div>
                   <div class="main-title">
                      <h1><?php the_sub_field( 'full_service_banner_sub_title' ); ?></h1>
                   </div>
                    <?php the_sub_field( 'full_service_banner_content' ); ?>
                   
                   <?php $full_service_banner_button = get_sub_field( 'full_service_banner_button' ); ?>
					<?php if ( $full_service_banner_button ) { ?>
                   <div class="banner-btn">
						<a class="btn btn-primary" href="<?php echo $full_service_banner_button['url']; ?>" target="<?php echo $full_service_banner_button['target']; ?>"><?php echo $full_service_banner_button['title']; ?></a>
						
				<?php $full_service_banner_button_two = get_sub_field( 'full_service_banner_button_two' ); ?>
					<?php if ( $full_service_banner_button_two ) { ?>
					<a class="btn btn-primary" href="<?php echo $full_service_banner_button_two['url']; ?>" target="<?php echo $full_service_banner_button_two['target']; ?>"><?php echo $full_service_banner_button_two['title']; ?></a>
					 <?php } ?>

                   </div>
				   <?php } ?>
               </div>
            </div>
       </div>
    </div>

</section>


<?php }elseif($full_service_banner_choose_layout=='fullbannerthreee') { ?>


<section class="main-banner new_banner_style banner_v3">
<?php $full_service_banner_image = get_sub_field( 'full_service_banner_image' ); ?>
	<?php if ( $full_service_banner_image ) { ?>
    <div class="full_width-bannerimg">
        <img src="<?php echo $full_service_banner_image['url']; ?>" alt="<?php echo $full_service_banner_image['alt']; ?>" >
    </div>
<?php } ?>
    <div class="overlap_banner_content">
        <div class="container">
          <div class="banner-detail">
               <div class="banner-detail__flex">
                   <div class="top-label">
                    <?php the_sub_field( 'full_service_banner_title' ); ?>           
                   </div>
                   <div class="main-title">
                      <h1><?php the_sub_field( 'full_service_banner_sub_title' ); ?></h1>
                   </div>
                    <?php the_sub_field( 'full_service_banner_content' ); ?>
               </div>
			   
			      <?php $full_service_banner_button = get_sub_field( 'full_service_banner_button' ); ?>
			<?php if ( $full_service_banner_button ) { ?>
		   <div class="banner-btn">
				<a class="btn btn-primary" href="<?php echo $full_service_banner_button['url']; ?>" target="<?php echo $full_service_banner_button['target']; ?>"><?php echo $full_service_banner_button['title']; ?></a>
				
			<?php $full_service_banner_button_two = get_sub_field( 'full_service_banner_button_two' ); ?>
				<?php if ( $full_service_banner_button_two ) { ?>
				<a class="btn btn-primary" href="<?php echo $full_service_banner_button_two['url']; ?>" target="<?php echo $full_service_banner_button_two['target']; ?>"><?php echo $full_service_banner_button_two['title']; ?></a>
				 <?php } ?>

		   </div>
		   <?php } ?>
          </div>
       
       </div>
    </div>

</section>

<?php }elseif($full_service_banner_choose_layout=='fullbannerfure') { ?>

<section class="main-banner new_banner_style banner_v5">
<?php $full_service_banner_image = get_sub_field( 'full_service_banner_image' ); ?>
	<?php if ( $full_service_banner_image ) { ?>
    <div class="full_width-bannerimg">
        <img src="<?php echo $full_service_banner_image['url']; ?>" alt="<?php echo $full_service_banner_image['alt']; ?>" >
    </div>
<?php } ?>
    <div class="overlap_banner_content">
        <div class="container">
          <div class="banner-detail">
               <div class="banner-detail__flex">
                   <div class="top-label">
                     <?php the_sub_field( 'full_service_banner_title' ); ?>              
                   </div>
                   <div class="main-title">
                      <h1><?php the_sub_field( 'full_service_banner_sub_title' ); ?></h1>
                   </div>
                  <?php the_sub_field( 'full_service_banner_content' ); ?>
				  
				   <?php $full_service_banner_button = get_sub_field( 'full_service_banner_button' ); ?>
			<?php if ( $full_service_banner_button ) { ?>
		   <div class="banner-btn">
				<a class="btn btn-primary" href="<?php echo $full_service_banner_button['url']; ?>" target="<?php echo $full_service_banner_button['target']; ?>"><?php echo $full_service_banner_button['title']; ?></a>
				
				<?php $full_service_banner_button_two = get_sub_field( 'full_service_banner_button_two' ); ?>
				<?php if ( $full_service_banner_button_two ) { ?>
				<a class="btn btn-primary" href="<?php echo $full_service_banner_button_two['url']; ?>" target="<?php echo $full_service_banner_button_two['target']; ?>"><?php echo $full_service_banner_button_two['title']; ?></a>
				 <?php } ?>

		   </div>
		   <?php } ?>
               </div>
          </div>
        
       </div>
    </div>

</section>
<?php }elseif($full_service_banner_choose_layout=='fullbannerfive') { ?>


<section class="main-banner new_banner_style banner_v6">
<?php $full_service_banner_image = get_sub_field( 'full_service_banner_image' ); ?>
	<?php if ( $full_service_banner_image ) { ?>
    <div class="full_width-bannerimg">
         <img src="<?php echo $full_service_banner_image['url']; ?>" alt="<?php echo $full_service_banner_image['alt']; ?>" >
    </div>
<?php } ?>
    <div class="overlap_banner_content">
        <div class="container">
          <div class="banner-detail">
               <div class="banner-detail__flex">
                   <div class="top-label">
                     <?php the_sub_field( 'full_service_banner_title' ); ?>             
                   </div>
                   <div class="main-title">
                      <h1><?php the_sub_field( 'full_service_banner_sub_title' ); ?></h1>
                   </div>
                  <?php the_sub_field( 'full_service_banner_content' ); ?>
			<?php $full_service_banner_button = get_sub_field( 'full_service_banner_button' ); ?>
			<?php if ( $full_service_banner_button ) { ?>
		   <div class="banner-btn">
				<a class="btn btn-primary" href="<?php echo $full_service_banner_button['url']; ?>" target="<?php echo $full_service_banner_button['target']; ?>"><?php echo $full_service_banner_button['title']; ?></a>
				
					<?php $full_service_banner_button_two = get_sub_field( 'full_service_banner_button_two' ); ?>
				<?php if ( $full_service_banner_button_two ) { ?>
				<a class="btn btn-primary" href="<?php echo $full_service_banner_button_two['url']; ?>" target="<?php echo $full_service_banner_button_two['target']; ?>"><?php echo $full_service_banner_button_two['title']; ?></a>
				 <?php } ?>
		   </div>
		   <?php } ?>
       </div>
               </div>
          </div>

    </div>

</section>
<?php }elseif($full_service_banner_choose_layout=='fullbannersix') { ?>


<section class="sectionCl banner-component">
    <div class="container">

        <div class="banner-component__tpart">
            <div class="banner-component__lpart">
                <div class="top-label"><?php the_sub_field( 'full_service_banner_title' ); ?></div>
                <div class="main-title"><h1><?php the_sub_field( 'full_service_banner_sub_title' ); ?></h1></div>
                <?php $full_service_banner_button = get_sub_field( 'full_service_banner_button' ); ?>
					<?php if ( $full_service_banner_button ) { ?>
						<a class="btn btn-primary" href="<?php echo $full_service_banner_button['url']; ?>" target="<?php echo $full_service_banner_button['target']; ?>"><?php echo $full_service_banner_button['title']; ?></a>
				   <?php } ?>
				   
				   	<?php $full_service_banner_button_two = get_sub_field( 'full_service_banner_button_two' ); ?>
				<?php if ( $full_service_banner_button_two ) { ?>
				<a class="btn btn-primary" href="<?php echo $full_service_banner_button_two['url']; ?>" target="<?php echo $full_service_banner_button_two['target']; ?>"><?php echo $full_service_banner_button_two['title']; ?></a>
				 <?php } ?>
            </div>
			<?php $full_service_banner_image = get_sub_field( 'full_service_banner_image' ); ?>
			<?php if ( $full_service_banner_image ) { ?>
            <div class="banner-component__rpart">
                <img src="<?php echo $full_service_banner_image['url']; ?>" alt="<?php echo $full_service_banner_image['alt']; ?>" >
            </div>
			<?php } ?>
        </div>

        <div class="banner-component__text">
            <div class="banner-component__text-flex">
               <?php the_sub_field( 'full_service_banner_content' ); ?>
            </div>
        </div>

    </div>
</section>
<?php }elseif($full_service_banner_choose_layout=='fullbannervideo') {?>
<section class="sectionCl new_banner_section">
    <div class="container">

			<?php 
				 
			$full_service_banner_image = get_sub_field( 'full_service_banner_image' );	
$video_svs_sel=get_sub_field( 'full_service_banner_video_link', false, false );			?>
				<?php if (!empty($full_service_banner_image )) : ?>
				<div class="new_banner_image video_layer" style="background:url(<?php echo $full_service_banner_image['url']; ?>) center center no-repeat;">

          <iframe width="100%" height="100%" src="<?php the_sub_field( 'full_service_banner_video_link', false, false ); ?>?autoplay=1?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            
        </div>
			<?php else:
					if(!empty($video_svs_sel)){
					$video_thumb_url = get_video_thumbnail_uri($video_svs_sel); //get THumbnail via our functions in functions.php   ?> 
					<div class="new_banner_image video_layer" style="background:url(<?php echo $video_thumb_url; ?>) center center no-repeat;">

					  <iframe width="100%" height="100%" src="<?php the_sub_field( 'full_service_banner_video_link', false, false ); ?>?autoplay=1?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						
					</div>
			<?php }	endif; ?>
			
        <div class="new_banner_label">
            <div class="top-label"><?php the_sub_field( 'full_service_banner_title' ); ?></div>
			
		
        </div>

        <div class="new_banner_content ">
            
            <div class="main-title"><h1><?php the_sub_field( 'full_service_banner_sub_title' ); ?></h1></div>
	
          <?php the_sub_field( 'full_service_banner_content' ); ?>
		  
		  <?php $full_service_banner_button = get_sub_field( 'full_service_banner_button' ); ?>
			<?php if ( $full_service_banner_button ) { ?>
				<a class="btn btn-primary" href="<?php echo $full_service_banner_button['url']; ?>" target="<?php echo $full_service_banner_button['target']; ?>"><?php echo $full_service_banner_button['title']; ?></a>
			<?php } ?>
			
			<?php $full_service_banner_button_two = get_sub_field( 'full_service_banner_button_two' ); ?>
			<?php if ( $full_service_banner_button_two ) { ?>
			<a class="btn btn-primary" href="<?php echo $full_service_banner_button_two['url']; ?>" target="<?php echo $full_service_banner_button_two['target']; ?>"><?php echo $full_service_banner_button_two['title']; ?></a>
			 <?php } ?>
        </div>

        <div class="down-arrow">
			<a href="#call-to-section">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M6 13L12 18L18 13" stroke="#323A45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
					<path opacity="0.4" d="M6 6L12 11L18 6" stroke="#323A45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
				</svg>					
			</a>
		</div>
    </div>
</section>
<?php }elseif($full_service_banner_choose_layout=='fullbannerniht') {?>
 	<section class="blog-top-banner">
		<div class="container">
						
			<div class="row">
			
				<div class="col-sm-12 col-md-2  d-md-block d-none">
					<img src="<?php echo get_template_directory_uri(); ?>/images/menu-pattern.png" alt="banner" class="img-fluid">
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="container">
						<div class="top-label"><?php the_sub_field( 'full_service_banner_title' ); ?></div>
							<h1><?php the_sub_field( 'full_service_banner_sub_title' ); ?></h1> 
					</div>

				</div>
				<div class="col-sm-12 col-md-2  d-md-block d-none">
					<img src="<?php echo get_template_directory_uri(); ?>/images/menu-pattern.png" alt="banner" class="img-fluid">
				</div>
			</div>
		</div>
	</section>
<?php } ?>