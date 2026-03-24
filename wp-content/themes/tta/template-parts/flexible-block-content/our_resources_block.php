<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
	 
		<section class="resource-main d-md-block d-none">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
						 
								<?php  $catslug='webinars'; ?>
							<ul class="nav nav-tabs tab-listings" id="myTab" role="tablist">
								
							<li class="nav-item" role="presentation">
									<a class="nav-link nav-link-main active " id="insights-tab" data-bs-toggle="tab" href="#insights" role="tab" aria-controls="insights" aria-selected="false">Resources</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link nav-link-main " id="<?php echo $catslug;?>-tab" data-bs-toggle="tab" href="#<?php echo $catslug;?>" role="tab" aria-controls="<?php echo $catslug;?>" aria-selected="false">Webinars</a>
								</li>
							 <li class="nav-item" role="presentation">
									<a class="nav-link "  href="<?php echo site_url(); ?>/success-story/"  target="_blank" >Case Studies</a>
								</li>
									<li class="nav-item" role="presentation">
									<a class="nav-link "  href="<?php echo site_url(); ?>/podcast-bring-out-the-talent/" target="_blank" >Podcasts</a>
									<!--<a class="nav-link nav-link-main" id="podcastsnew-tab" data-bs-toggle="tab" href="#podcastsnew" role="tab" aria-controls="podcastsnew" aria-selected="false">Podcasts</a>-->
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link nav-link-main" id="news-tab" data-bs-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="false">News</a>
								</li>
						  </ul>
						 
					</div>
					<div class="col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
						<div class="tab-content " id="myTabContent">
				
								<div class="tab-pane fade <?php   /*if (!$count) { ?> active <?php }*/ ?> show" id="<?php echo esc_html($catslug); ?>" role="tabpanel" aria-labelledby="<?php echo esc_html( $catslug ); ?>-tab" >
								
								
								
						 
											
									<div class="row" id="flt_webinars_result">
									
									</div>
								</div>
							 
							<div class="tab-pane fade show active" id="insights" role="tabpanel" aria-labelledby="insights-tab">
							 
											<div class="row" id="flt_insights_results">
											
											 
											</div>
											

								
							 
							</div>

							<div class="tab-pane fade show" id="podcastsnew" role="tabpanel" aria-labelledby="podcastsnew-tab">
							 
											
											<div id="flt_podcast_results">
											
											
											
											</div>

								
							 
							</div>

							<div class="tab-pane fade show" id="news" role="tabpanel" aria-labelledby="news-tab">


 
								

								
								<div class="resource_news_listing" id="flt_news_results">
								
								</div>
							</div>
						</div>



						


					</div>
				 
				</div>
			</div>
		</section>

		<section class="mobile-resource-main d-md-none d-block">
			<div class="container">
			 <?php
				$args = array(
					'post_type'              => array( 'resource' ),
					'post_status'            => array( 'Publish' ),
					'posts_per_page'         => '-1'
				);
				$conditinalarr=array('relation' => 'AND');
				 $conditinalarr[]= array(
					'taxonomy' => 'resource-category',
					'field' => 'slug',
					'terms' => array("ebooks","infographics","videos","white-papers")
				 );
				 if(count($conditinalarr)>1){
						$args['tax_query'] =$conditinalarr;
					}
				$query = new WP_Query( $args );
				$trecord= $query->post_count;
				$tpage= $query->max_num_pages;
				?>
			  
			  	<div class="our-resource-block">
					<div class="our-resource-block-label">
						<h3>Resources</h3>
						<span><?php echo $trecord;?></span>
					</div>
					<div class="our-resource-block-popup">
						<div class="container">
							<div class="back-link">Back</div>
							<h2>Resources</h2>
						 
							<div class="our-resource-list-block-main"  id="mobile_insights">
							<?php
							
								// The Loop
								if ( $query->have_posts() ) {
								 
									while ( $query->have_posts() ) {
										$query->the_post();
										?>
											<div class="our-resource-list-block">
												<h4><?php the_title(); ?></h4>
												<div class="date-and-link">
													<div class="date"><?php echo get_the_date('M j, Y'); ?> </div>
													<a target="_blank" href="<?php echo get_the_permalink();?>" class="read-more">Read More</a>
													 
												</div>
											</div>
										
										<?php
										
									}
									
								}
							
							?>
							 
								 
							</div>
							 <?php /*<div class="show-more-link-block">
								<a class="show-more-link">Show More</a>
							</div>*/ ?>
						</div>
					</div>
				</div>
				 

			  <?php
						$args = array(
							'post_type' => 'resource',
						);
						$conditinalarr=array('relation' => 'AND');
						 $conditinalarr[]= array(
							'taxonomy' => 'resource-category',
							'field' => 'slug',
							'terms' => array("webinars")
						 );
						 if(count($conditinalarr)>1){
								$args['tax_query'] =$conditinalarr;
							}
						$query = new WP_Query( $args );
					?>
				<div class="our-resource-block">
					<div class="our-resource-block-label">
						<h3>Webinars</h3>
						<span><?php echo $trecord= $query->post_count; ?></span>
					</div>
					<div class="our-resource-block-popup">
						<div class="container">
							<div class="back-link">Back</div>
							<h2>Webinars</h2>
							<div class="our-resource-list-block-main" id="flt_webinars_result_mo">
									<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
										<div class="our-resource-list-block">
											<h4><?php the_title(); ?></h4>
											<div class="date-and-link">
												<div class="date"><?php echo get_the_date('M j, Y'); ?> </div>
												<a target="_blank" href="<?php echo get_the_permalink();?>" class="read-more">Read More</a>
											</div>
										</div>
										<?php  endwhile; 
										// use reset postdata to restore orginal query
										wp_reset_postdata();
										?>
							</div>
							 <?php /*<div class="show-more-link-block">
								<a class="show-more-link">Show More</a>
							</div>*/ ?>
						</div>
					</div>
				</div>
				
					<?php
				$args = array(
					'post_type'              => array( 'casestudy' ),
					'post_status'            => array( 'Publish' ),
					'posts_per_page'         => "-1",
				);
				$query = new WP_Query( $args );
				$trecord= $query->post_count;
				$tpage= $query->max_num_pages;
				?>
				<div class="our-resource-block">
					<div class="our-resource-block-label">
						<h3><a target="_blank" href="<?php echo site_url(); ?>/success-story/" >Case Studies</a></h3>
						<span><?php echo $trecord;?></span>
					</div>
					</div>
		<?php
				$args = array(
					'post_type'              => array( 'podcast' ),
					'post_status'            => array( 'Publish' ),
					'posts_per_page'         => "-1",
				);
				$query = new WP_Query( $args );
				$trecord= $query->post_count;
				$tpage= $query->max_num_pages;
				?>
					<div class="our-resource-block">
					<div class="our-resource-block-label">
						<h3><a target="_blank" href="<?php echo site_url('/podcast-bring-out-the-talent/'); ?>">Podcasts</a></h3>
						<span><?php echo $trecord;?></span>
					</div>
					
				</div>
				
				
				
				
				
				
				<?php
				$args = array(
					'post_type'              => array( 'news' ),
					'post_status'            => array( 'Publish' ),
					'posts_per_page'         => "-1",
				 
				);

				$query = new WP_Query( $args );
				$trecord= $query->post_count;
				$tpage= $query->max_num_pages;
				?>
				
				<div class="our-resource-block">
					<div class="our-resource-block-label" id="news-tab" data-rel="news-tab" aria-controls="news-tab" aria-selected="news-tab">
						<h3>News</h3>
						<span><?php echo $trecord;?></span>
					</div>
					<div class="our-resource-block-popup">
						<div class="container">
							<div class="back-link">Back</div>
							<h2>News</h2>
						 
							<div class="our-resource-list-block-main" id="mobile_news">
							<?php
							
								// The Loop
								if ( $query->have_posts() ) {
								 
									while ( $query->have_posts() ) {
										$query->the_post();
										?>
											<div class="our-resource-list-block">
												<h4><?php the_title(); ?></h4>
												<div class="date-and-link">
													<div class="date"><?php echo get_the_date('M j, Y'); ?> </div>
													<a target="_blank" href="<?php echo get_the_permalink();?>" class="read-more">Read More</a>
													 
												</div>
											</div>
										
										<?php
										
									}
									
								}
							
							?>
							 
								 
							</div>
							 <?php /*<div class="show-more-link-block">
								<a class="show-more-link">Show More</a>
							</div>*/ ?>
						</div>
					</div>
				</div>
				
				
						  
			</div>
		</section>
		
		<input type="hidden" id="re_catslug" name="re_catslug" value="<?php echo $setfistcatslug ;?>"/>
		<input type="hidden" id="re_services" name="re_search" value=""/>
		<input type="hidden" id="re_services" name="re_services" value=""/>
		<input type="hidden" id="re_industries" name="re_industries" value=""/>
		<script type="text/javascript">
var setpage_2=1;
jQuery( document ).on( "click",".webinars_load_more", function() {
	setpage_2++
	flt_webinars(setpage_2,'append');
});
flt_webinars(setpage_2,'html');
function flt_webinars(setpage_2,type){
	jQuery(".webinars_load_more_remove").fadeIn(400).html('<div class="resource_loader"><img src="<?php echo get_template_directory_uri().'/images/loader.gif'; ?>" align="absmiddle" alt="Loading..." ></div>');
		 jQuery.ajax({
			url:'<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
			type: "post",
			data: {
				action: 'flt_webinars_fun',
				setpage: setpage_2,
			},
			success: function(data){
			 jQuery(".webinars_load_more_remove").remove();
			 if(type=='html'){
				 jQuery("#flt_webinars_result").html(data);
			 }else{
				 jQuery("#flt_webinars_result").append(data);
			 }
			 },
			error:function(){
				 console.log('failure!');
			}                
		 });
}


var setpage_2_mo=1;
jQuery( document ).on( "click",".webinars_load_more_mo", function() {
	setpage_2_mo++
	flt_webinars_mo(setpage_2_mo,'append');
});
flt_webinars_mo(setpage_2_mo,'html');
function flt_webinars_mo(setpage_2,type){
	jQuery(".webinars_load_more_remove_mo").fadeIn(400).html('<div class="resource_loader"><img src="<?php echo get_template_directory_uri().'/images/loader.gif'; ?>" align="absmiddle" alt="Loading..." ></div>');
		 jQuery.ajax({
			url:'<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
			type: "post",
			data: {
				action: 'flt_webinars_fun_mo',
				setpage: setpage_2,
			},
			success: function(data){
			 jQuery(".webinars_load_more_remove_mo").remove();
			 if(type=='html'){
				 jQuery("#flt_webinars_result_mo").html(data);
			 }else{
				 jQuery("#flt_webinars_result_mo").append(data);
			 }
			 },
			error:function(){
				 console.log('failure!');
			}                
		 });
}
var setpage_1=1;
jQuery( document ).on( "click",".insights_load_more", function() {
	setpage_1++
	flt_insights(setpage_1,'append');
});
flt_insights(setpage_1,'html');
function flt_insights(setpage_1,type){
	jQuery(".insights_load_more").fadeIn(400).html('<div class="resource_loader"><img src="<?php echo get_template_directory_uri().'/images/loader.gif'; ?>" align="absmiddle" alt="Loading..." ></div>');
		 jQuery.ajax({
			url:'<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
			type: "post",
			data: {
				action: 'flt_insights_fun',
				setpage: setpage_1,
			},
			success: function(data){
			 jQuery(".insights_load_more").remove();
			 if(type=='html'){
				 jQuery("#flt_insights_results").html(data);
			 }else{
				 jQuery("#flt_insights_results").append(data);
			 }
			 },
			error:function(){
				 console.log('failure!');
			}                
		 });
}

var setpage_1_mo=1;
jQuery( document ).on( "click",".insights_load_more_mo", function() {
	setpage_1_mo++
	flt_insights_mo(setpage_1_mo,'append');
});
flt_insights_mo(setpage_1_mo,'html');
function flt_insights_mo(setpage_1_mo,type){
	jQuery(".insights_load_more_remove_mo").fadeIn(400).html('<div class="resource_loader"><img src="<?php echo get_template_directory_uri().'/images/loader.gif'; ?>" align="absmiddle" alt="Loading..." ></div>');
		 jQuery.ajax({
			url:'<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
			type: "post",
			data: {
				action: 'flt_insights_fun_mo',
				setpage: setpage_1_mo,
			},
			success: function(data){
			 jQuery(".insights_load_more_remove_mo").remove();
			 if(type=='html'){
				 jQuery("#mobile_insights").html(data);
			 }else{
				 jQuery("#mobile_insights").append(data);
			 }
			 },
			error:function(){
				 console.log('failure!');
			}                
		 });
}
/* resource*/
var setpage_resource=1;
var setpage_insight=1;
jQuery( ".nav-link-main" ).click(function() {
		var catval=jQuery(this ).attr('aria-controls');
		jQuery('#re_catslug').val(catval);
		 var re_catslug = jQuery( "#re_catslug" ).val(); 
		jQuery( '.flt_search_resource_'+re_catslug).val(''); 
		jQuery( '.flt_service_resource_'+re_catslug+' option').prop("selected", false);; 
		jQuery( '.flt_industry_resource_'+re_catslug+' option' ).prop("selected", false);; 
		setpage_resource=1;
		if(re_catslug=='insights'){
			setpage_1=1;
			flt_insights(setpage_1,'html');
		}
		if(re_catslug=='webinars'){
			setpage_2=1;
			flt_webinars(setpage_2,'html');
		}
		//flt_resource(setpage_resource,'html');
		jQuery( '#flt_search_podcast').val(''); 
		jQuery( '#flt_service_podcast option').prop("selected", false);; 
		jQuery( '#flt_industry_podcast option' ).prop("selected", false);; 
		setpage_podcast=1;
		flt_podcast(setpage_podcast,'html');
		jQuery( '#flt_search').val(''); 
		jQuery( '#flt_service option').prop("selected", false);; 
		jQuery( '#flt_industry option' ).prop("selected", false);; 
		setpage=1;
		vn_work_pagination(setpage,'html');
	});
 jQuery( ".flt_service_resource" ).change(function() {
	setpage_resource=1;
	flt_resource(setpage_resource,'html');
});
jQuery( ".flt_industry_resource" ).change(function() {
	setpage_resource=1;
	flt_resource(setpage_resource,'html');
});
	jQuery('.flt_search_resource').on('keyup keypress', function(e) {
		if ($(this).val().length < 1 ){ $( ".flt_reset_resource" ).hide(); }
				if ($(this).val().length >= 1 ){ $( ".flt_reset_resource" ).show(); }
		setpage_resource=1;
		flt_resource(setpage_resource,'html');
	});
function flt_resource(setpage,type){
	  var re_catslug = jQuery( "#re_catslug" ).val(); 
	var flt_search = jQuery( '.flt_search_resource_'+re_catslug).val(); 
	var flt_service = jQuery( '.flt_service_resource_'+re_catslug+' option:selected').val(); 
	var flt_industry = jQuery( '.flt_industry_resource_'+re_catslug+' option:selected' ).val(); 
	jQuery(".tab-pane.active #re_result").fadeIn(400).html('<div class="resource_loader"><img src="<?php echo get_template_directory_uri().'/images/loader.gif'; ?>" align="absmiddle" alt="Loading..." ></div>');
		 jQuery.ajax({
			url:'<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
			type: "post",
			data: {
				action: 'flt_resource',
				setpage: setpage,
				re_catslug: re_catslug,
				flt_search: '',
				flt_service: '',
				flt_industry: '',
			 },
			success: function(data){
				if(re_catslug=='insights'){
					jQuery("#flt_insights_results").html(data);
				}else{
					jQuery(".tab-pane.active #re_result").html(data);
				}
			 },
			error:function(){
				 console.log('failure!');
			}                
		 });
}
var setpage=1;
 jQuery( "#flt_service" ).change(function() {
	setpage=1;
	vn_work_pagination(setpage,'html');
});
jQuery( "#flt_industry" ).change(function() {
	setpage=1;
	vn_work_pagination(setpage,'html');
});
jQuery( ".flt_reset" ).click(function() {
		var flt_search = jQuery( "#flt_search" ).val("");
		var flt_service = $("#flt_service option:selected").val(""); 
		var flt_industry = $("#flt_industry option:selected").val("");
		setpage=1;
		vn_work_pagination(setpage,'html');
		$( ".flt_reset" ).hide();
	});
	jQuery('#flt_search').on('keyup keypress', function(e) {
		if ($(this).val().length < 1 ){ $( ".flt_reset" ).hide(); }
				if ($(this).val().length >= 1 ){ $( ".flt_reset" ).show(); }
		setpage=1;
		vn_work_pagination(setpage,'html');
	});
vn_work_pagination(setpage,'html');
jQuery( document ).on( "click",".load_more", function() {
 setpage++
vn_work_pagination(setpage,'append');
});
function vn_work_pagination(setpage,type){
	var flt_search = jQuery( "#flt_search" ).val();
	var flt_service = $("#flt_service option:selected").val(); 
	var flt_industry = $("#flt_industry option:selected").val();  
 if(type=='append'){
 jQuery(".load_more_remove").fadeIn(400).html('<div class="resource_loader"><img src="<?php echo get_template_directory_uri().'/images/loader.gif'; ?>" align="absmiddle" alt="Loading..." ></div>');
	 jQuery.ajax({
		url:'<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
		type: "post",
		data: {
			action: 'flt_news',
			setpage: setpage,
			flt_search: flt_search,
			flt_service: flt_service,
			flt_industry: flt_industry,
		 },
		success: function(data){
			  jQuery(".load_more_remove").remove();
				jQuery("#flt_news_results").append(data);
		 },
		error:function(){
			 console.log('failure!');
		}                
	 }); 
 }else{
	jQuery("#flt_news_results").fadeIn(400).html('<div class="resource_loader"><img src="<?php echo get_template_directory_uri().'/images/loader.gif'; ?>" align="absmiddle" alt="Loading..." ></div>');
	 jQuery.ajax({
		url:'<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
		type: "post",
		data: {
			action: 'flt_news',
			setpage: setpage,
			flt_search: flt_search,
			flt_service: flt_service,
			flt_industry: flt_industry,
		 },
		success: function(data){
				jQuery("#flt_news_results").html(data);
		 },
		error:function(){
			 console.log('failure!');
		}                
	 });
 }	 
}


var setpage_2_mo=1;
jQuery( document ).on( "click",".news_load_more_mo", function() {
	setpage_2_mo++
	flt_news_mo(setpage_2_mo,'append');
});
flt_news_mo(setpage_2_mo,'html');
function flt_news_mo(setpage_2_mo,type){
	jQuery(".news_load_more_remove_mo").fadeIn(400).html('<div class="resource_loader"><img src="<?php echo get_template_directory_uri().'/images/loader.gif'; ?>" align="absmiddle" alt="Loading..." ></div>');
		 jQuery.ajax({
			url:'<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
			type: "post",
			data: {
				action: 'flt_news_fun_mo',
				setpage: setpage_2_mo,
			},
			success: function(data){
			 jQuery(".news_load_more_remove_mo").remove();
			 if(type=='html'){
				 jQuery("#mobile_news").html(data);
			 }else{
				 jQuery("#mobile_news").append(data);
			 }
			 },
			error:function(){
				 console.log('failure!');
			}                
		 });
}


/* podcast*/
var setpage_podcast=1;
 jQuery( "#flt_service_podcast" ).change(function() {
	setpage_podcast=1;
	flt_podcast(setpage_podcast,'html');
});
jQuery( "#flt_industry_podcast" ).change(function() {
	setpage_podcast=1;
	flt_podcast(setpage_podcast,'html');
});
jQuery( ".flt_reset_podcast" ).click(function() {
		var flt_search = jQuery( "#flt_search" ).val("");
		var flt_service = $("#flt_service_podcast option:selected").val(""); 
		var flt_industry = $("#flt_industry_podcast option:selected").val("");
		setpage_podcast=1;
		flt_podcast(setpage_podcast,'html');
		$( ".flt_reset" ).hide();
	});
	jQuery('#flt_search_podcast').on('keyup keypress', function(e) {
		if ($(this).val().length < 1 ){ $( ".flt_reset_podcast" ).hide(); }
				if ($(this).val().length >= 1 ){ $( ".flt_reset_podcast" ).show(); }
		setpage_podcast=1;
		flt_podcast(setpage_podcast,'html');
	});
flt_podcast(setpage_podcast,'html');
function flt_podcast(setpage,type){
	var flt_search = jQuery( "#flt_search_podcast" ).val();
	var flt_service = $("#flt_service_podcast option:selected").val(); 
	var flt_industry = $("#flt_industry_podcast option:selected").val();  
	jQuery("#flt_podcast_results").fadeIn(400).html('<div class="resource_loader"><img src="<?php echo get_template_directory_uri().'/images/loader.gif'; ?>" align="absmiddle" alt="Loading..." ></div>');
		 jQuery.ajax({
			url:'<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
			type: "post",
			data: {
				action: 'flt_podcast',
				setpage: setpage,
				flt_search: flt_search,
				flt_service: flt_service,
				flt_industry: flt_industry,
			 },
			success: function(data){
					jQuery("#flt_podcast_results").html(data);
			 },
			error:function(){
				 console.log('failure!');
			}                
		 });
}
</script>