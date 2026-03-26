<?php
/**
 * Template Name: Industry Template
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
<?php if ( have_rows( 'casestudy_banner_section', 'option' ) ) : ?>
<?php while ( have_rows( 'casestudy_banner_section', 'option' ) ) : the_row(); ?>

<?php $full_service_banner_choose_layout=  get_sub_field( 'casestudy_banner_choose_layout' ); 
if( $full_service_banner_choose_layout=='fullbannerdefault') { ?>
<section class="sectionCl new_banner_section">
    <div class="container">

			<?php $blogdefault_banner_image =  get_sub_field( 'full_casestudy_banner_image' ); ?>
			<?php if ( $blogdefault_banner_image ) { ?>
				<div class="new_banner_image" style="background:url(<?php echo $blogdefault_banner_image['url']; ?>) center center no-repeat;"></div>
			<?php } ?>
			
        <div class="new_banner_label">
            <div class="top-label"><?php the_sub_field( 'full_casestudy_banner_title' ); ?></div>
        </div>

        <div class="new_banner_content ">
            
            <div class="main-title"><h1><?php the_sub_field( 'full_casestudy_banner_title_sub' ); ?></h1></div>

         <?php the_sub_field( 'full_casestudy_banner_text_content' ); ?>
		  
		<?php $blogdefault_button = get_sub_field( 'full_casestudy_default_button' ); ?>
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

<?php $blogdefault_banner_image =  get_sub_field( 'full_casestudy_banner_image' ); ?>
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
                    <?php the_sub_field( 'full_casestudy_banner_title' ); ?>     
                   </div>
                   <div class="main-title">
                      <h1><?php the_sub_field( 'full_casestudy_banner_title_sub' ); ?></h1>
                   </div>
                 <?php the_sub_field( 'full_casestudy_banner_text_content' ); ?>
				   
                  <?php $blogdefault_button = get_sub_field( 'full_casestudy_default_button' ); ?>
                 
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
<?php $blogdefault_banner_image =  get_sub_field( 'full_casestudy_banner_image' ); ?>
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
                    <?php the_sub_field( 'full_casestudy_banner_title' ); ?>
                   </div>
                   <div class="main-title">
                       <h1><?php the_sub_field( 'full_casestudy_banner_title_sub' ); ?></h1>
                   </div>
                    <?php the_sub_field( 'full_casestudy_banner_text_content' ); ?>
                   
                 <?php $blogdefault_button = get_sub_field( 'full_casestudy_default_button' ); ?>
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
<?php $blogdefault_banner_image = get_sub_field( 'full_casestudy_banner_image' ); ?>
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
                   <?php the_sub_field( 'full_casestudy_banner_title' ); ?>
                   </div>
                   <div class="main-title">
                       <h1><?php the_sub_field( 'full_casestudy_banner_title_sub' ); ?></h1>
                   </div>
                    <?php the_sub_field( 'full_casestudy_banner_text_content' ); ?>
               </div>
			   
			     <?php $blogdefault_button = get_sub_field( 'full_casestudy_default_button' ); ?>
			<?php if ( $blogdefault_button ) { ?>
		   <div class="banner-btn">
				<a class="btn btn-primary" href="<?php echo $blogdefault_button['url']; ?>" target="<?php echo $blogdefault_button['target']; ?>"><?php echo $blogdefault_button['title']; ?></a>
	

		   </div>
		   <?php } ?>
          </div>
       
       </div>
    </div>

</section>

<?php }elseif($full_service_banner_choose_layout=='fullbannerfure') { ?>

<section class="main-banner new_banner_style banner_v5">
<?php $blogdefault_banner_image = get_sub_field( 'full_casestudy_banner_image' ); ?>
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
                    <?php the_sub_field( 'full_casestudy_banner_title' ); ?>  
                   </div>
                   <div class="main-title">
                        <h1><?php the_sub_field( 'full_casestudy_banner_title_sub' ); ?></h1>
                   </div>
                <?php the_sub_field( 'full_casestudy_banner_text_content' ); ?>
				  
				<?php $blogdefault_button = get_sub_field( 'full_casestudy_default_button' ); ?>
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
<?php $blogdefault_banner_image = get_sub_field( 'full_casestudy_banner_image' ); ?>
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
                     <?php the_sub_field( 'full_casestudy_banner_title' ); ?>
                   </div>
                   <div class="main-title">
                        <h1><?php the_sub_field( 'full_casestudy_banner_title_sub' ); ?></h1>
                   </div>
               <?php the_sub_field( 'full_casestudy_banner_text_content' ); ?>
			<?php $blogdefault_button = get_sub_field( 'full_casestudy_default_button' ); ?>
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
                <div class="top-label"><?php the_sub_field( 'full_casestudy_banner_title' ); ?></div>
                <div class="main-title">  <h1><?php the_sub_field( 'full_casestudy_banner_title_sub' ); ?></h1></div>
                <?php $blogdefault_button = get_sub_field( 'full_casestudy_default_button' ); ?>
					<?php if ( $blogdefault_button ) { ?>
						<a class="btn btn-primary" href="<?php echo $blogdefault_button['url']; ?>" target="<?php echo $blogdefault_button['target']; ?>"><?php echo $blogdefault_button['title']; ?></a>
				   <?php } ?>
		
            </div>
			<?php $blogdefault_banner_image = get_sub_field( 'full_casestudy_banner_image'); ?>
			<?php if ( $blogdefault_banner_image ) { ?>
            <div class="banner-component__rpart">
                <img src="<?php echo $blogdefault_banner_image['url']; ?>" alt="<?php echo $blogdefault_banner_image['alt']; ?>" >
            </div>
			<?php } ?>
        </div>

        <div class="banner-component__text">
            <div class="banner-component__text-flex">
              <?php the_sub_field( 'full_casestudy_banner_text_content' ); ?>
            </div>
        </div>

    </div>
</section>

	<?php } ?>
		<?php endwhile; ?>
<?php endif; ?>
	

    <div class="case-study-filter">
        <div class="container">
            <div class="case-study-tabing">
               <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link   active " id="all-tab" data-bs-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="false"> All</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="service-tab" data-bs-toggle="tab" href="#service" role="tab" aria-controls="service" aria-selected="false"> Services</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="industry-tab" data-bs-toggle="tab" href="#industry" role="tab" aria-controls="industry" aria-selected="false"> Industry</a>
                    </li>
                </ul>-->
    
    
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="all" role="tabpanel" aria-labelledby="all-tab">
                        <div class="study-tab">
                            <div class="blog-header">
								<div class="fliter-dropdowns">
									<div class="filter-dropdown">
										<label for="">By Service</label>
										
										<?php 
										 $taxonomies = get_terms( array(
											'taxonomy' => 'casestudy-services',
											'hide_empty' => false
										) );
										 
										if ( !empty($taxonomies) ) :
											$output = '<select   id="flt_service" name="flt_service">';
											$output .= '<option value="">All Services</option>';
											foreach( $taxonomies as $category ) {
												 
													 
													$output.= '<option value="'. esc_attr( $category->slug ) .'">
															'. esc_html( $category->name ) .'</option>';
													 
												 
											}
											$output.='</select>';
											echo $output;
										endif;
										 ?>
										 
									</div>
									<div class="filter-dropdown">
										<label for="">By Industry</label>
										<?php 
											 $taxonomies = get_terms( array(
												'taxonomy' => 'casestudy-industries',
												'hide_empty' => false
											) );
											 
											if ( !empty($taxonomies) ) :
												$output = '<select   id="flt_industry" name="flt_industry" >';
												$output .= '<option value="">All Industries</option>';
												foreach( $taxonomies as $category ) {
													 
														 
														$output.= '<option value="'. esc_attr( $category->slug ) .'">
																'. esc_html( $category->name ) .'</option>';
														 
													 
												}
												$output.='</select>';
												echo $output;
											endif;
											 ?>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
    
                
                </div>
            </div>
<script type="text/javascript">
var awp_ajpage=1;
var ajpage=1;
var htmltype='html';
$( document ).ready(function() {
	

	MatchHeight();

    $( "#flt_service" ).change(function() {
		awp_ajpage=1;
		ajpage=1;
		flt_award_winning_projects(htmltype);
		flt_case_studies_projects(htmltype);
	 
		$( ".flt_reset" ).show();
		MatchHeight();
	});
	$( "#flt_industry" ).change(function() {
		awp_ajpage=1;
		ajpage=1;
		flt_award_winning_projects(htmltype);
		flt_case_studies_projects(htmltype);
		$( ".flt_reset" ).show();
		MatchHeight();
	});
	
	
	$( ".flt_reset" ).click(function() {
		var flt_search = jQuery( "#flt_search" ).val("");
		var flt_service = $("#flt_service option:selected").val(""); 
 
		var flt_industry = $("#flt_industry option:selected").val("");
		awp_ajpage=1;
		ajpage=1;
		flt_case_studies_projects(htmltype);
		flt_award_winning_projects(htmltype);
		$( ".flt_reset" ).hide();
		MatchHeight();
	});
	$('#flt_search').on('keyup keypress', function(e) {
		if ($(this).val().length < 1 ){ $( ".flt_reset" ).hide(); }
				if ($(this).val().length >= 1 ){ $( ".flt_reset" ).show(); }
		awp_ajpage=1;
		ajpage=1;
		flt_case_studies_projects(htmltype);
		flt_award_winning_projects(htmltype);
		MatchHeight();
	});
	  
	 
	$( ".searcflt" ).click(function() {
		
		awp_ajpage=1;
		ajpage=1;
		flt_case_studies_projects(htmltype);
		flt_award_winning_projects(htmltype);
		$( ".flt_reset" ).show();
		MatchHeight();
	});
	$( ".awp_result_more_click" ).click(function(event) {
		 event.preventDefault();
	  flt_award_winning_projects('append');
	  MatchHeight();
	});
	$( ".cs_result_more_click" ).click(function(event) {
		  event.preventDefault();
	  flt_case_studies_projects('append');
	  MatchHeight();
	});
	
	flt_award_winning_projects(htmltype);
	flt_case_studies_projects(htmltype);

});



function flt_award_winning_projects(htmltype){
	MatchHeight();
	jQuery( ".awp_ajax_loader" ).show();
	var flt_search = jQuery( "#flt_search" ).val();
	var flt_service = $("#flt_service option:selected").val(); 
 
	var flt_industry = $("#flt_industry option:selected").val();   
	 
	jQuery.ajax({
		url:'<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
		type: "post",
		data: {
			action: 'award_winning_projects_fun',
			ajpage: awp_ajpage,
			flt_search: flt_search,
			flt_service: flt_service,
			flt_industry: flt_industry,
			 
		},
		success: function(data){
			jQuery( ".awp_ajax_loader" ).hide();
			awp_ajpage++;
			 
			if(htmltype=='append'){
			jQuery("#awp_result").append(data);
			}else{
			jQuery("#awp_result").html(data);	
				
			}
			MatchHeight();
		},
		error:function(){
			 console.log('failure!');
		}                
		
	 });
}

function flt_case_studies_projects(htmltype){
	MatchHeight();
	 
	 jQuery( ".acs_ajax_loader" ).show();
	var flt_search = jQuery( "#flt_search" ).val();
	var flt_service = $("#flt_service option:selected").val(); 
 
	var flt_industry = $("#flt_industry option:selected").val();   
	 
	jQuery.ajax({
		url:'<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
		type: "post",
		data: {
			action: 'case_studies_projects_fun',
			ajpage: ajpage,
			flt_search: flt_search,
			flt_service: flt_service,
			flt_industry: flt_industry,
			 
		},
		success: function(data){
			ajpage++;
			jQuery( ".acs_ajax_loader" ).hide();
			if(htmltype=='append'){
			jQuery("#acs_result").append(data);
			}else{
			jQuery("#acs_result").html(data)	
				
			}
			MatchHeight();
		},
		error:function(){
			 console.log('failure!');
		}                
		
	 });
}

</script>

            <div class="award-wining-list">
                <section class="success-story award-project" id="awp_result_main">
                    <div class="container">
                        <div class="section-title">
						
						


                            <span><?php the_field( 'services_settings_heading', 'option' ); ?></span>
                            <h2><?php the_field( 'services__settings_title', 'option' ); ?></h2>
                        </div>

                        <div class="row justify-content-center" id="awp_result">
                            
                        </div>
						
						 <div class="see-more awp_result_more">
						 <div class="awp_ajax_loader" style="display:none"><img src="<?php echo get_template_directory_uri().'/images/loader.gif'; ?>" align="absmiddle" alt="Loading..." ></div>
						  
                            <a class="link awp_result_more_click" href="javascript:;">See More</a>
                        </div
                    </div>
                    
                </section>

                <section class="success-story" id="acs_result_main">
                    <div class="container">
                       <?php /* <div class="section-title" style="display:done;">
					

                            <span style="display:done;">	<?php the_field( 'industries__settings_title', 'option' ); ?></span>
                            <h2 style="display:done;"><?php the_field( 'industries_settings_heading', 'option' ); ?></h2>
                        </div> */?>

                        <div class="row" id="acs_result">
                        </div>

                        <div class="see-more cs_result_more">
						<div class="acs_ajax_loader" style="display:none" ><img src="<?php echo get_template_directory_uri().'/images/loader.gif'; ?>" align="absmiddle" alt="Loading..." ></div>
                            <a class="link cs_result_more_click" href="javascript:;" target="">See More</a>
                        </div>
                    </div>
                    
                </section>
            </div>


           <!-- <div class="view-resource">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-3">
                            <div class="r-img">
                                <img src="<?php //echo get_template_directory_uri(); ?>/images/dots-top.png" alt="logo" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-primary btn-large">View Our Resources</a>
                        </div>
                        <div class="col-sm-3">
                            <div class="r-img">
                                <img src="<?php //echo get_template_directory_uri(); ?>/images/dots-top.png" alt="logo" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
<?php if ( have_rows( 'casestudy_call_out_block', 'option' ) ) : ?>
	<?php while ( have_rows( 'casestudy_call_out_block', 'option' ) ) : the_row(); ?>
<section class="signup">
	<div class="container">
		<div class="section-title">
			<span><?php the_sub_field( 'casestudy_call_out_heading' ); ?></span>
			<h2><?php the_sub_field( 'casestudy_call_out_title' ); ?></h2>
		</div>
		<?php //the_sub_field( 'casestudy_call_out_short_code' ); ?>
		<div class="sign-form">
			<?php $casestudy_call_out_short_code = get_sub_field( 'casestudy_call_out_short_code' ); ?>
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
