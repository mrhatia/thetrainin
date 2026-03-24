<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
get_header();

?>


<?php $full_service_banner_choose_layout= get_field( 'blogdefault_choose_layout', 'option'  ); 
if( $full_service_banner_choose_layout=='fullbannerdefault') { ?>
<section class="sectionCl new_banner_section">
    <div class="container">

			<?php $blogdefault_banner_image = get_field( 'blogdefault_banner_image', 'option'  ); ?>
			<?php if ( $blogdefault_banner_image ) { ?>
				<div class="new_banner_image" style="background:url(<?php echo $blogdefault_banner_image['url']; ?>) center center no-repeat;"></div>
			<?php } ?>
			
        <div class="new_banner_label">
            <div class="top-label"><?php the_field( 'blogdefault_heading', 'option' ); ?></div>
        </div>

        <div class="new_banner_content ">
            
            <div class="main-title"><h1><?php the_field( 'blogdefault_title' , 'option' ); ?></h1></div>

          <?php the_field( 'blogdefault_content' , 'option' ); ?>
		  
		  <?php $blogdefault_button = get_field( 'blogdefault_button' , 'option' ); ?>
			<?php if ( $blogdefault_button ) { ?>
				<a class="btn btn-primary" href="<?php echo $blogdefault_button['url']; ?>" target="<?php echo $blogdefault_button['target']; ?>"><?php echo $blogdefault_button['title']; ?></a>
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

<?php $blogdefault_banner_image = get_field( 'blogdefault_banner_image' , 'option' ); ?>
	<?php if ( $blogdefault_banner_image ) { ?>
    <div class="full_width-bannerimg">
        <img src="<?php echo $blogdefault_banner_image['url']; ?>" alt="<?php echo $blogdefault_banner_image['alt']; ?>" >
    </div>
<?php } ?>
    <div class="overlap_banner_content">
        <div class="container">
          <div class="banner-detail">
               <div class="banner-detail__flex">
                   <div class="top-label">
                     <?php the_field( 'blogdefault_heading' , 'option' ); ?>            
                   </div>
                   <div class="main-title">
                      <h1><?php the_field( 'blogdefault_title' , 'option' ); ?></h1>
                   </div>
                   <?php the_field( 'blogdefault_content' , 'option' ); ?>
				   
                   <?php $blogdefault_button = get_field( 'blogdefault_button' , 'option' ); ?>
                 
					<?php if ( $blogdefault_button ) { ?>
                   <div class="banner-btn">
						<a class="btn btn-primary" href="<?php echo $blogdefault_button['url']; ?>" target="<?php echo $blogdefault_button['target']; ?>"><?php echo $blogdefault_button['title']; ?></a>
						
                   </div>
				   <?php } ?>
               </div>
            </div>
       </div>
    </div>

</section>


<?php }elseif($full_service_banner_choose_layout=='fullbannertwo') { ?>


<section class="main-banner new_banner_style banner_v2">
<?php $blogdefault_banner_image = get_field( 'blogdefault_banner_image' , 'option' ); ?>
	<?php if ( $blogdefault_banner_image ) { ?>
    <div class="full_width-bannerimg">
        <img src="<?php echo $blogdefault_banner_image['url']; ?>" alt="<?php echo $blogdefault_banner_image['alt']; ?>" >
    </div>
<?php } ?>
    <div class="overlap_banner_content">
        <div class="container">
          <div class="banner-detail">
               <div class="banner-detail__flex">
                   <div class="top-label">
                     <?php the_field( 'blogdefault_heading' , 'option' ); ?>       
                   </div>
                   <div class="main-title">
                      <h1><?php the_field( 'blogdefault_title', 'option'  ); ?></h1>
                   </div>
                    <?php the_field( 'blogdefault_content' , 'option' ); ?>
                   
                   <?php $blogdefault_button = get_field( 'blogdefault_button', 'option'  ); ?>
					<?php if ( $blogdefault_button ) { ?>
                   <div class="banner-btn">
						<a class="btn btn-primary" href="<?php echo $blogdefault_button['url']; ?>" target="<?php echo $blogdefault_button['target']; ?>"><?php echo $blogdefault_button['title']; ?></a>
						
			

                   </div>
				   <?php } ?>
               </div>
            </div>
       </div>
    </div>

</section>


<?php }elseif($full_service_banner_choose_layout=='fullbannerthreee') { ?>


<section class="main-banner new_banner_style banner_v3">
<?php $blogdefault_banner_image = get_field( 'blogdefault_banner_image' , 'option' ); ?>
	<?php if ( $blogdefault_banner_image ) { ?>
    <div class="full_width-bannerimg">
        <img src="<?php echo $blogdefault_banner_image['url']; ?>" alt="<?php echo $blogdefault_banner_image['alt']; ?>" >
    </div>
<?php } ?>
    <div class="overlap_banner_content">
        <div class="container">
          <div class="banner-detail">
               <div class="banner-detail__flex">
                   <div class="top-label">
                    <?php the_field( 'blogdefault_heading', 'option'  ); ?>           
                   </div>
                   <div class="main-title">
                      <h1><?php the_field( 'blogdefault_title', 'option'  ); ?></h1>
                   </div>
                    <?php the_field( 'blogdefault_content', 'option' ); ?>
               </div>
			   
			      <?php $blogdefault_button = get_field( 'blogdefault_button', 'option'  ); ?>
			<?php if ( $blogdefault_button ) { ?>
		   <div class="banner-btn">
				<a class="btn btn-primary" href="<?php echo $blogdefault_button['url']; ?>" target="<?php echo $blogdefault_button['target']; ?>"><?php echo $blogdefault_button['title']; ?></a>
				
			<?php $blogdefault_button_two = get_field( 'blogdefault_button_two' , 'option' ); ?>
				<?php if ( $blogdefault_button_two ) { ?>
				<a class="btn btn-primary" href="<?php echo $blogdefault_button_two['url']; ?>" target="<?php echo $blogdefault_button_two['target']; ?>"><?php echo $blogdefault_button_two['title']; ?></a>
				 <?php } ?>

		   </div>
		   <?php } ?>
          </div>
       
       </div>
    </div>

</section>

<?php }elseif($full_service_banner_choose_layout=='fullbannerfure') { ?>

<section class="main-banner new_banner_style banner_v5">
<?php $blogdefault_banner_image = get_field( 'blogdefault_banner_image' , 'option' ); ?>
	<?php if ( $blogdefault_banner_image ) { ?>
    <div class="full_width-bannerimg">
        <img src="<?php echo $blogdefault_banner_image['url']; ?>" alt="<?php echo $blogdefault_banner_image['alt']; ?>" >
    </div>
<?php } ?>
    <div class="overlap_banner_content">
        <div class="container">
          <div class="banner-detail">
               <div class="banner-detail__flex">
                   <div class="top-label">
                     <?php the_field( 'blogdefault_heading' , 'option' ); ?>              
                   </div>
                   <div class="main-title">
                      <h1><?php the_field( 'blogdefault_title', 'option'  ); ?></h1>
                   </div>
                 <?php the_field( 'blogdefault_content', 'option' ); ?>
				  
				   <?php $blogdefault_button = get_field( 'blogdefault_button' , 'option' ); ?>
			<?php if ( $blogdefault_button ) { ?>
		   <div class="banner-btn">
				<a class="btn btn-primary" href="<?php echo $blogdefault_button['url']; ?>" target="<?php echo $blogdefault_button['target']; ?>"><?php echo $blogdefault_button['title']; ?></a>
				
				
		   </div>
		   <?php } ?>
               </div>
          </div>
        
       </div>
    </div>

</section>
<?php }elseif($full_service_banner_choose_layout=='fullbannerfive') { ?>


<section class="main-banner new_banner_style banner_v6">
<?php $blogdefault_banner_image = get_field( 'blogdefault_banner_image' , 'option' ); ?>
	<?php if ( $blogdefault_banner_image ) { ?>
    <div class="full_width-bannerimg">
         <img src="<?php echo $blogdefault_banner_image['url']; ?>" alt="<?php echo $blogdefault_banner_image['alt']; ?>" >
    </div>
<?php } ?>
    <div class="overlap_banner_content">
        <div class="container">
          <div class="banner-detail">
               <div class="banner-detail__flex">
                   <div class="top-label">
                     <?php the_field( 'blogdefault_heading', 'option'  ); ?>             
                   </div>
                   <div class="main-title">
                      <h1><?php the_field( 'blogdefault_title', 'option'  ); ?></h1>
                   </div>
                <?php the_field( 'blogdefault_content', 'option' ); ?>
			<?php $blogdefault_button = get_field( 'blogdefault_button', 'option' ); ?>
			<?php if ( $blogdefault_button ) { ?>
		   <div class="banner-btn">
				<a class="btn btn-primary" href="<?php echo $blogdefault_button['url']; ?>" target="<?php echo $blogdefault_button['target']; ?>"><?php echo $blogdefault_button['title']; ?></a>
				
				
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
                <div class="top-label"><?php the_field( 'blogdefault_heading' , 'option' ); ?></div>
                <div class="main-title"><h1><?php the_field( 'blogdefault_title' , 'option' ); ?></h1></div>
                <?php $blogdefault_button = get_field( 'blogdefault_button' , 'option' ); ?>
					<?php if ( $blogdefault_button ) { ?>
						<a class="btn btn-primary" href="<?php echo $blogdefault_button['url']; ?>" target="<?php echo $blogdefault_button['target']; ?>"><?php echo $blogdefault_button['title']; ?></a>
				   <?php } ?>
				   
				   	<?php $blogdefault_button_two = get_field( 'blogdefault_button_two' , 'option' ); ?>
				<?php if ( $blogdefault_button_two ) { ?>
				<a class="btn btn-primary" href="<?php echo $blogdefault_button_two['url']; ?>" target="<?php echo $blogdefault_button_two['target']; ?>"><?php echo $blogdefault_button_two['title']; ?></a>
				 <?php } ?>
            </div>
			<?php $blogdefault_banner_image = get_field( 'blogdefault_banner_image' , 'option' ); ?>
			<?php if ( $blogdefault_banner_image ) { ?>
            <div class="banner-component__rpart">
                <img src="<?php echo $blogdefault_banner_image['url']; ?>" alt="<?php echo $blogdefault_banner_image['alt']; ?>" >
            </div>
			<?php } ?>
        </div>

        <div class="banner-component__text">
            <div class="banner-component__text-flex">
               <?php the_field( 'blogdefault_content', 'option'  ); ?>
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
							<?php the_field( 'blogdefault_heading', 'option' ); ?>
						</div>
						<div class="main-title">
							<h1><?php the_field( 'blogdefault_title', 'option' ); ?></h1>
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/images/pattern-bottom.png" alt="pattern-bottom" class="img-fluid">
					</div>
				</div>
				<?php $blogdefault_image = get_field( 'blogdefault_image', 'option' ); ?>
				<?php if ( $blogdefault_image ) { ?>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="banner-img">
						<div class="image">
						<img src="<?php echo $blogdefault_image['url']; ?>" alt="<?php echo $blogdefault_image['alt']; ?>" class="img-fluid" />
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<?php } ?>
	<!-- content start -->
	<div class="content clearfix">
		<div class="blog-list-main">
			<div class="container">
				<div class="blog-header">
					<div class="row">
						<?php /*<div class="col-sm-12 col-md-6 col-lg-4">
							<div class="b-left">
								
								
								$taxonomies = get_terms( array(
									'taxonomy' => 'category',
									'hide_empty' => false
								) );
								 
								if ( !empty($taxonomies) ) :
									$output = '<select name="blog_cat" class="form-control form-select" id="blog_cat">';
									$output .= '<option value="">All Topic/Service</option>';
									foreach( $taxonomies as $category ) {
										 
											 
											$output.= '<option value="'. esc_attr( $category->slug ) .'">
													'. esc_html( $category->name ) .'</option>';
											 
										 
									}
									$output.='</select>';
									echo $output;
								endif;
								
							 
							</div>
						</div>*/ ?>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<div class="b-search">
								<button class="btn">
									<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="8" cy="8" r="7.5" stroke="#AAB4D6"/>
										<line x1="12.7071" y1="14" x2="17" y2="18.2929" stroke="#AAB4D6" stroke-linecap="round"/>
										</svg>
								</button>
								<input type="text" name="blog_search" id="blog_search" class="form-control" placeholder="Search for your favorite topic">
							</div>
						</div>
					</div>
				</div>
				<div class="blog-list" id="first_ajax">
				</div>
			</div>
		</div>
	</div>
	<!-- content end -->
<script type="text/javascript">
$(window).on('load', function(){ 
 $( "#blog_cat" ).change(function() {
  blog_flt(1);
});
$('#blog_search').on('input keyup keypress', function() {
    var str=$(this).val().length;
  /*if(str>=3){
	  blog_flt(); 
  }*/
  
  blog_flt(); 
});
 

   blog_flt();  
})
 function blog_flt(){
	 jQuery("#first_ajax").fadeIn(400).html('<div class="ajax_loader"><img src="<?php echo get_template_directory_uri().'/images/loader.gif'; ?>" align="absmiddle" alt="Loading..." ></div>');
 var blog_cat=$('#blog_cat').val();
 var blog_search=$('#blog_search').val();
	 $.ajax({
		url:'<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
		type: "post",
		data: {
			action: 'firstcall_ajax',
			blog_cat: blog_cat,
			blog_search: blog_search,
		},
		success: function(data){
			$("#first_ajax").html(data);
			 //$('html, body').animate({  scrollTop: $("#blog_cat").offset().top  }, 1000);
		 },
		error:function(){
			 console.log('failure!');
		}                
	 }); 
	 
 }
</script>
<?php
get_footer();