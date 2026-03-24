<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */

get_header();
?>


		


			
<section class="main-banner">
		<div class="container">
		<?php if ( have_posts() ) : ?>

				<?php
				$category = get_queried_object();
				$curentcat=$category->slug;
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			 <?php
			 
			while ( have_posts() ) :
				the_post();

			
			endwhile;

			the_posts_navigation();
			?>
			
			<?php endif; ?>
		</div>
	</section>
	<!-- content start -->
	<div class="content clearfix">
		<div class="blog-list-main">
			<div class="container">
				<div class="blog-header">
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-4">
							<div class="b-left">
								<?php
								
								$taxonomies = get_terms( array(
									'taxonomy' => 'category',
									'hide_empty' => false
								) );
								 
								if ( !empty($taxonomies) ) :
									$output = '<select name="blog_cat" class="form-control form-select" id="blog_cat" style="display:none">';
									$output .= '<option value="">All Topic/Service</option>';
									foreach( $taxonomies as $category ) {
										 
											 $issel="";
											 if($curentcat==$category->slug){
												 $issel='selected'; 
											 }
											$output.= '<option '.$issel.' value="'. esc_attr( $category->slug ) .'">
													'. esc_html( $category->name ) .'</option>';
											 
										 
									}
									$output.='</select>';
									echo $output;
								endif;
								?>
							 
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4">
							<div class="b-search">
								<button class="btn">
									<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="8" cy="8" r="7.5" stroke="#AAB4D6"/>
										<line x1="12.7071" y1="14" x2="17" y2="18.2929" stroke="#AAB4D6" stroke-linecap="round"/>
										</svg>
								</button>
								<input type="text" name="blog_search" id="blog_search" class="form-control" placeholder="Search">
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
$('#blog_search').on('input', function() {
    var str=$(this).val().length;
  if(str>=3){
	  blog_flt(); 
  }
});
 

   blog_flt();  
})
 function blog_flt(){
	 jQuery("#first_ajax").fadeIn(400).html('<img src="<?php echo get_template_directory_uri().'/images/loader.png'; ?>" align="absmiddle" alt="Loading..." >');
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
		 },
		error:function(){
			 console.log('failure!');
		}                
	 }); 
	 
 }
</script>

<?php
get_footer();
