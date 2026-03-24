<?php
/**
 * Template Name: Event Page 
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

<?php $full_service_banner_choose_layout= get_field( 'eventdefault_choose_layout', 'option'  ); 
if( $full_service_banner_choose_layout=='fullbannerdefault') { ?>
<section class="sectionCl new_banner_section">
    <div class="container">

			<?php $eventdefault_banner_image = get_field( 'eventdefault_banner_image', 'option'  ); ?>
			<?php if ( $eventdefault_banner_image ) { ?>
				<div class="new_banner_image" style="background:url(<?php echo $eventdefault_banner_image['url']; ?>) center center no-repeat;"></div>
			<?php } ?>
			
        <div class="new_banner_label">
            <div class="top-label"><?php the_field( 'eventdefault_blog_title', 'option' ); ?></div>
        </div>

        <div class="new_banner_content ">
            
            <div class="main-title"><h1><?php the_field( 'eventdefault_sub_title' , 'option' ); ?></h1></div>

          <?php the_field( 'eventdefault_content' , 'option' ); ?>
		  
		  <?php $eventdefault_button = get_field( 'eventdefault_button' , 'option' ); ?>
			<?php if ( $eventdefault_button ) { ?>
				<a class="btn btn-primary" href="<?php echo $eventdefault_button['url']; ?>" target="<?php echo $eventdefault_button['target']; ?>"><?php echo $eventdefault_button['title']; ?></a>
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

<?php $eventdefault_banner_image = get_field( 'eventdefault_banner_image' , 'option' ); ?>
	<?php if ( $eventdefault_banner_image ) { ?>
    <div class="full_width-bannerimg">
        <img src="<?php echo $eventdefault_banner_image['url']; ?>" alt="<?php echo $eventdefault_banner_image['alt']; ?>" >
    </div>
<?php } ?>
    <div class="overlap_banner_content">
        <div class="container">
          <div class="banner-detail">
               <div class="banner-detail__flex">
                   <div class="top-label">
                     <?php the_field( 'eventdefault_blog_title' , 'option' ); ?>            
                   </div>
                   <div class="main-title">
                      <h1><?php the_field( 'eventdefault_sub_title' , 'option' ); ?></h1>
                   </div>
                   <?php the_field( 'eventdefault_content' , 'option' ); ?>
				   
                   <?php $eventdefault_button = get_field( 'eventdefault_button' , 'option' ); ?>
                 
					<?php if ( $eventdefault_button ) { ?>
                   <div class="banner-btn">
						<a class="btn btn-primary" href="<?php echo $eventdefault_button['url']; ?>" target="<?php echo $eventdefault_button['target']; ?>"><?php echo $eventdefault_button['title']; ?></a>
						
                   </div>
				   <?php } ?>
               </div>
            </div>
       </div>
    </div>

</section>


<?php }elseif($full_service_banner_choose_layout=='fullbannertwo') { ?>


<section class="main-banner new_banner_style banner_v2">
<?php $eventdefault_banner_image = get_field( 'eventdefault_banner_image' , 'option' ); ?>
	<?php if ( $eventdefault_banner_image ) { ?>
    <div class="full_width-bannerimg">
        <img src="<?php echo $eventdefault_banner_image['url']; ?>" alt="<?php echo $eventdefault_banner_image['alt']; ?>" >
    </div>
<?php } ?>
    <div class="overlap_banner_content">
        <div class="container">
          <div class="banner-detail">
               <div class="banner-detail__flex">
                   <div class="top-label">
                     <?php the_field( 'eventdefault_blog_title' , 'option' ); ?>       
                   </div>
                   <div class="main-title">
                      <h1><?php the_field( 'eventdefault_sub_title', 'option'  ); ?></h1>
                   </div>
                    <?php the_field( 'eventdefault_content' , 'option' ); ?>
                   
                   <?php $eventdefault_button = get_field( 'eventdefault_button', 'option'  ); ?>
					<?php if ( $eventdefault_button ) { ?>
                   <div class="banner-btn">
						<a class="btn btn-primary" href="<?php echo $eventdefault_button['url']; ?>" target="<?php echo $eventdefault_button['target']; ?>"><?php echo $eventdefault_button['title']; ?></a>
						
			

                   </div>
				   <?php } ?>
               </div>
            </div>
       </div>
    </div>

</section>


<?php }elseif($full_service_banner_choose_layout=='fullbannerthreee') { ?>


<section class="main-banner new_banner_style banner_v3">
<?php $eventdefault_banner_image = get_field( 'eventdefault_banner_image' , 'option' ); ?>
	<?php if ( $eventdefault_banner_image ) { ?>
    <div class="full_width-bannerimg">
        <img src="<?php echo $eventdefault_banner_image['url']; ?>" alt="<?php echo $eventdefault_banner_image['alt']; ?>" >
    </div>
<?php } ?>
    <div class="overlap_banner_content">
        <div class="container">
          <div class="banner-detail">
               <div class="banner-detail__flex">
                   <div class="top-label">
                    <?php the_field( 'eventdefault_blog_title', 'option'  ); ?>           
                   </div>
                   <div class="main-title">
                      <h1><?php the_field( 'eventdefault_sub_title', 'option'  ); ?></h1>
                   </div>
                    <?php the_field( 'eventdefault_content', 'option' ); ?>
               </div>
			   
			      <?php $eventdefault_button = get_field( 'eventdefault_button', 'option'  ); ?>
			<?php if ( $eventdefault_button ) { ?>
		   <div class="banner-btn">
				<a class="btn btn-primary" href="<?php echo $eventdefault_button['url']; ?>" target="<?php echo $eventdefault_button['target']; ?>"><?php echo $eventdefault_button['title']; ?></a>
				
			<?php $eventdefault_button_two = get_field( 'eventdefault_button_two' , 'option' ); ?>
				<?php if ( $eventdefault_button_two ) { ?>
				<a class="btn btn-primary" href="<?php echo $eventdefault_button_two['url']; ?>" target="<?php echo $eventdefault_button_two['target']; ?>"><?php echo $eventdefault_button_two['title']; ?></a>
				 <?php } ?>

		   </div>
		   <?php } ?>
          </div>
       
       </div>
    </div>

</section>

<?php }elseif($full_service_banner_choose_layout=='fullbannerfure') { ?>

<section class="main-banner new_banner_style banner_v5">
<?php $eventdefault_banner_image = get_field( 'eventdefault_banner_image' , 'option' ); ?>
	<?php if ( $eventdefault_banner_image ) { ?>
    <div class="full_width-bannerimg">
        <img src="<?php echo $eventdefault_banner_image['url']; ?>" alt="<?php echo $eventdefault_banner_image['alt']; ?>" >
    </div>
<?php } ?>
    <div class="overlap_banner_content">
        <div class="container">
          <div class="banner-detail">
               <div class="banner-detail__flex">
                   <div class="top-label">
                     <?php the_field( 'eventdefault_blog_title' , 'option' ); ?>              
                   </div>
                   <div class="main-title">
                      <h1><?php the_field( 'eventdefault_sub_title', 'option'  ); ?></h1>
                   </div>
                 <?php the_field( 'eventdefault_content', 'option' ); ?>
				  
				   <?php $eventdefault_button = get_field( 'eventdefault_button' , 'option' ); ?>
			<?php if ( $eventdefault_button ) { ?>
		   <div class="banner-btn">
				<a class="btn btn-primary" href="<?php echo $eventdefault_button['url']; ?>" target="<?php echo $eventdefault_button['target']; ?>"><?php echo $eventdefault_button['title']; ?></a>
				
				
		   </div>
		   <?php } ?>
               </div>
          </div>
        
       </div>
    </div>

</section>
<?php }elseif($full_service_banner_choose_layout=='fullbannerfive') { ?>


<section class="main-banner new_banner_style banner_v6">
<?php $eventdefault_banner_image = get_field( 'eventdefault_banner_image' , 'option' ); ?>
	<?php if ( $eventdefault_banner_image ) { ?>
    <div class="full_width-bannerimg">
         <img src="<?php echo $eventdefault_banner_image['url']; ?>" alt="<?php echo $eventdefault_banner_image['alt']; ?>" >
    </div>
<?php } ?>
    <div class="overlap_banner_content">
        <div class="container">
          <div class="banner-detail">
               <div class="banner-detail__flex">
                   <div class="top-label">
                     <?php the_field( 'eventdefault_blog_title', 'option'  ); ?>             
                   </div>
                   <div class="main-title">
                      <h1><?php the_field( 'eventdefault_sub_title', 'option'  ); ?></h1>
                   </div>
                <?php the_field( 'eventdefault_content', 'option' ); ?>
			<?php $eventdefault_button = get_field( 'eventdefault_button', 'option' ); ?>
			<?php if ( $eventdefault_button ) { ?>
		   <div class="banner-btn">
				<a class="btn btn-primary" href="<?php echo $eventdefault_button['url']; ?>" target="<?php echo $eventdefault_button['target']; ?>"><?php echo $eventdefault_button['title']; ?></a>
				
				
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
              <div class="top-label"><?php the_field( 'eventdefault_blog_title' , 'option' ); ?></div>
                <div class="main-title"><h1><?php the_field( 'eventdefault_sub_title' , 'option' ); ?></h1></div>
                 <?php $eventdefault_button = get_field( 'eventdefault_button' , 'option' ); ?>
					<?php if ( $eventdefault_button ) { ?>
						<a class="btn btn-primary" href="<?php echo $eventdefault_button['url']; ?>" target="<?php echo $eventdefault_button['target']; ?>"><?php echo $eventdefault_button['title']; ?></a>
				   <?php } ?>
				   
            </div>
            <?php $eventdefault_banner_image = get_field( 'eventdefault_banner_image' , 'option' ); ?>
			<?php if ( $eventdefault_banner_image ) { ?>
            <div class="banner-component__rpart">
                <img src="<?php echo $eventdefault_banner_image['url']; ?>" alt="<?php echo $eventdefault_banner_image['alt']; ?>" >
            </div>
			<?php } ?>
	

        </div>
		  <div class="banner-component__text">
            <div class="banner-component__text-flex">
               <?php the_field( 'eventdefault_content', 'option'  ); ?>
            </div>
        </div>
      
    </div>
</section>

<?php }elseif($full_service_banner_choose_layout=='rightbannersave') { ?>

 	<section class="main-banner">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="banner-detail">
						<div class="top-label">
							<?php the_field( 'eventdefault_heading', 'option' ); ?>
						</div>
						<div class="main-title">
							<h1><?php the_field( 'eventdefault_title', 'option' ); ?></h1>
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/images/pattern-bottom.png" alt="pattern-bottom" class="img-fluid">
					</div>
				</div>
				<?php $eventdefault_image = get_field( 'eventdefault_image', 'option' ); ?>
				<?php if ( $eventdefault_image ) { ?>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="banner-img">
						<div class="image">
						<img src="<?php echo $eventdefault_image['url']; ?>" alt="<?php echo $eventdefault_image['alt']; ?>" class="img-fluid" />
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<?php } ?>
<section class="sectionCl event_main-section">
		<div class="container">
		<div class="row" id="event_result">
		 
		</div>
		</div>
		</section>
			
<?php if ( have_rows( 'flexible_layout_talent_event_page' ) ): ?>
	<?php while ( have_rows( 'flexible_layout_talent_event_page' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'telnt_center_content_block' ) : ?>
	<section class="strategy-simple">
			<div class="container">
				<div class="text-block">
					<div class="section-title">
						<span><?php the_sub_field( 'talent_event_detail_title_secon' ); ?></span>
						<h2><?php the_sub_field( 'talent_event_detail_sub_title_secon' ); ?></h2>
					</div>
					<?php the_sub_field( 'talent_event_detail_content_secon' ); ?>
					<?php $centre_simple_link = get_sub_field( 'talent_event_detail_button_link_secon' ); ?>
					<?php if ( $centre_simple_link ) { ?>
						<a class="btn btn-primary" href="<?php echo $centre_simple_link['url']; ?>" target="<?php echo $centre_simple_link['target']; ?>"><?php echo $centre_simple_link['title']; ?></a>
					<?php } ?>
			</div>
		</div>
	</section>	 
	<?php elseif ( get_row_layout() == 'telnt_event_right_image_content_block' ) : ?>
	<?php $telnt_event_content_layout =get_sub_field( 'telnt_event_content_layout' ); 
	if( $telnt_event_content_layout=='leftimage'){ ?>
<section class="image-pattern">
			<div class="container">
					<div class="row align-items-center">
					<div class="col-sm-12 col-md-6">
						<?php $image_right_content_image = get_sub_field( 'telnt_event_right_image' ); ?>
						<?php if ( $image_right_content_image ) { ?>
							<div class="image-block">
								<div class="image">
								<img src="<?php echo $image_right_content_image['url']; ?>" alt="<?php echo $image_right_content_image['alt']; ?>"  class="img-fluid" />
							</div>	</div>
						<?php } ?>
						</div>
						
						<div class="col-sm-12 col-md-6">
							<div class="text-block text-start" style=" margin-left: 106px;">
								<div class="section-title text-start ">
									<span><?php the_sub_field( 'telnt_event_right_heading' ); ?></span>
									<h2><?php the_sub_field( 'telnt_event_right_title' ); ?></h2>
								</div>
								<?php the_sub_field( 'telnt_event_right_content' ); ?>
							<?php $image_right_content_button = get_sub_field( 'telnt_event_right_button' ); ?>
							<?php if ( $image_right_content_button ) { ?>
								<a  style="margin-top:30px;"  class="btn btn-primary" href="<?php echo $image_right_content_button['url']; ?>" target="<?php echo $image_right_content_button['target']; ?>"><?php echo $image_right_content_button['title']; ?></a>
							<?php } ?>

							</div>
						</div>
					
					</div>
			</div>
		</section>
	<?php }elseif( $telnt_event_content_layout=='rightimage') { ?>
<section class="image-pattern" >
	<div class="container">
		<div class="row align-items-center">					
			<div class="col-sm-12 col-md-6">
				<div class="text-block text-start">
					<div class="section-title text-start ">
						<span><?php the_sub_field( 'telnt_event_right_heading' ); ?></span>
						<h2><?php the_sub_field( 'telnt_event_right_title' ); ?></h2>
					</div>
					<?php the_sub_field( 'telnt_event_right_content' ); ?>
				<?php $image_right_content_button = get_sub_field( 'telnt_event_right_button' ); ?>
				<?php if ( $image_right_content_button ) { ?>
					<a  style="margin-top:30px;"  class="btn btn-primary" href="<?php echo $image_right_content_button['url']; ?>" target="<?php echo $image_right_content_button['target']; ?>"><?php echo $image_right_content_button['title']; ?></a>
				<?php } ?>

				</div>
			</div>
			<div class="col-sm-12 col-md-6">
			<?php $image_right_content_image = get_sub_field( 'telnt_event_right_image' ); ?>
			<?php if ( $image_right_content_image ) { ?>
				<div class="image-block">
				<div class="image">
					<img src="<?php echo $image_right_content_image['url']; ?>" alt="<?php echo $image_right_content_image['alt']; ?>"  class="img-fluid" />
				</div> </div>
			<?php } ?>
			</div>
		</div>
	</div>
</section>
	<?php } endif; ?>
	<?php endwhile; ?>
<?php endif; ?>
<script type="text/javascript">
var awp_ajpage=1;
var ajpage=0;
var htmltype='html';
jQuery( document ).ready(function() {
    flt_event('html'); 
});
function flt_event(htmltype){
	
	 jQuery( "#aj_status" ).val('prosessing');
	 ajpage++;
	 jQuery( ".podcast_ajax_loader" ).show();
	 jQuery(".event_load_more_remove_mo").fadeIn(400).html('<div class="resource_loader"><img src="<?php echo get_template_directory_uri().'/images/loader.gif'; ?>" align="absmiddle" alt="Loading..." ></div>');
	 
	jQuery.ajax({
		url:'<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
		type: "post",
		data: {
			action: 'event_fun',
			setpage: ajpage,
			 
			 
		},
		success: function(data){
		
				 jQuery(".event_load_more_remove_mo").remove();
			if(htmltype=='append'){
			jQuery("#event_result").append(data);
				 
			}else{
				jQuery("#event_result").html(data);
			 
				
			}
			  	
		},
		error:function(){
			 console.log('failure!');
		}                
		
	 });
}
</script>
<?php if ( have_rows( 'eventdefault_callout_button', 'option' ) ) : ?>
	<?php while ( have_rows( 'eventdefault_callout_button', 'option' ) ) : the_row(); ?>
<section class="signup">
	<div class="container">
		<div class="section-title">
			<span><?php the_sub_field( 'eventdefault_title_btn' ); ?></span>
			<h2><?php the_sub_field( 'eventdefault_subtitle_btn' ); ?></h2>
		</div>
		<?php //the_sub_field( 'casestudy_call_out_short_code' ); ?>
		<div class="sign-form">
			<?php $casestudy_call_out_short_code = get_sub_field( 'eventdefault_callout_button' ); ?>
		<?php if ( $casestudy_call_out_short_code ) { ?>
			<a class="btn btn-primary" href="<?php echo $casestudy_call_out_short_code['url']; ?>" target="<?php echo $casestudy_call_out_short_code['target']; ?>"><?php echo $casestudy_call_out_short_code['title']; ?></a>
		<?php } ?>
		</div>
	</div>
</section>
	<?php endwhile; ?>
<?php endif; ?>
<?php 
get_footer(); ?>
