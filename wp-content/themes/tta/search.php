<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package TTA
 */

get_header();
 $getpostarray=array();
  if(!empty($_REQUEST['category'])){
   $getpostarray=$_REQUEST['category'];
 }
	 Global $wp_query ;
?>
 

	<main id="primary" class="site-main middle-spacer">
	<?php if ( have_posts() ) : ?>

	<div class="page-header-search">
		<div class="container">
			<h1 class="page-title">
				<?php //echo $wp_query->post_count;
				 // echo 'aa--'.$count = $wp_query->post_count;
				 echo $wp_query->found_posts; ?> <?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'tta' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h1>
		</div>
	</div><!-- .page-header -->

	<div class="container">
		
		
	
	 
		<div class="search-list-cl-main">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-4">
					<div class="search-list__filter">
						<h3>Search by category</h3>
						<form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
							<input type="hidden" name="s" placeholder="" value="<?php echo $_REQUEST['s']; ?>"/>
							
							<div class="search_rp_lt">
								<input <?php if(in_array('page',$getpostarray)){ echo 'checked'; }?>   type="checkbox" id="edit-category-1" name="category[]" value="page" class="filepost form-checkbox">
								<label for="edit-category-1" class="option">pages</label>
							</div>
							
							<div class="search_rp_lt">
								<input <?php if(in_array('casestudy',$getpostarray)){ echo 'checked'; }?>   type="checkbox" id="edit-category-2" name="category[]" value="casestudy" class="filepost form-checkbox">
								<label for="edit-category-2" class="option">case studies</label>
							</div>
							
							 <div class="search_rp_lt">
								<input <?php if(in_array('podcast',$getpostarray)){ echo 'checked'; }?>   type="checkbox" id="edit-category-5" name="category[]" value="podcast" class="filepost form-checkbox">
								<label for="edit-category-5" class="option">podcasts</label>
							</div>
							
							<div class="search_rp_lt">
								<input <?php if(in_array('post',$getpostarray)){ echo 'checked'; }?> type="checkbox" id="edit-category-3" name="category[]" value="post" class="filepost form-checkbox">
								<label for="edit-category-3" class="option">blogs</label>
							</div>
							
							<div class="search_rp_lt">
								<input <?php if(in_array('resource',$getpostarray)){ echo 'checked'; }?>  type="checkbox" id="edit-category-4" name="category[]" value="resource" class="filepost form-checkbox">
								<label for="edit-category-4" class="option">resources </label>
							</div>
							
					

							<script>
							jQuery( document ).on( "click",".filepost", function() {
								jQuery( "#searchform" ).submit();
							});
							</script>
						</form>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-8">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
				</div>
			</div>
		</div>

	</div>
	</main><!-- #main -->

<?php

get_footer();
