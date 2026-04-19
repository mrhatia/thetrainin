<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php $name_font_size = get_sub_field( 'name_font_size' ); ?>
<?php $designation_font_size = get_sub_field( 'designation_font_size' ); ?>
<?php $company_font_size = get_sub_field( 'company_font_size' ); ?>

<style>
	.t-detail .name,
	.testimonials-client-name .name {
		font-size: <?php echo $name_font_size; ?>px !important;
		color: #3CB4E5 !important;
		font-weight: 700 !important;
		line-height: 120% !important;
	}
	.t-detail .designation,
	.testimonials-client-name .designation {
		font-size: <?php echo $designation_font_size; ?>px !important;
		color: #3CB4E5 !important;
		font-weight: 700 !important;
		margin-bottom: 0 !important;
		line-height: 120% !important;
	}
	.t-detail .company,
	.testimonials-client-name .company {
		font-size: <?php echo $company_font_size; ?>px !important;
		color: #3CB4E5 !important;
		font-weight: 700 !important;
		line-height: 120% !important;
	}
</style>

<section class="snapshots">

<div class="container">
	<div class="section-title">
		
		<h2><?php the_sub_field( 'block_title' ); ?></h2>
	</div>
</div>

<?php $snapshots = get_sub_field( 'snapshots' ); ?>

<?php if($snapshots ) { ?>

<div class="container">
       <div class="snaprow">
         <?php foreach($snapshots  as $snap){
			$simage = $snap['image'];
			$title = $snap['title'];
			$category = $snap['category'];
			$category_link = $snap['category_link'];
			$description = $snap['description'];
			$readmore = $snap['read_more_link'];
               if($category_link==""){ $category_link ="#";}
			   $casepost = $snap['case_study'];
			   if($casepost){ 	  

			   	$disp_img_box ='';
								if ( has_post_thumbnail($casepost)) {
									$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($casepost), 'full'); 
									 $disp_img_box = $large_image_url[0];
								}else{ 
									$disp_img_box = get_template_directory_uri().'/images/akami-logo 1.png';
									} 
                   

               ?>
			    <div class="snamitem">
				<?php if($disp_img_box){?><div class="snap_pimage"><img src="<?php echo $disp_img_box; ?>" alt="logo" class="img-fluid"> </div><?php }?>
			 
			  <div class="snapdetails">
				<?php $terms = get_the_terms($post->ID, 'casestudy-industries');
				 if($terms) : ?>
                    <div class="cat"><a href="<?php echo  $term_link = get_term_link($terms[0]);?>"><?php echo esc_html($terms[0]->name); ?> </a></div>
                <?php endif; ?>

			        <div class="cat"><a href="<?php echo $category_link;?>"><?php echo $category;?></a></div>
					<div class="snaptitle"><h3><?php echo get_the_title($casepost);?></h3></div>
					<div class="snapdesc><?php echo get_the_excerpt($casepost);?></div>
					 <a href="<?php echo $sname['readmore'];?>" class="readmore">Read more <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.75 1.75L7 7.75L1.75 13.75" stroke="url(#paint0_linear_5164_505)" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
<defs>
<linearGradient id="paint0_linear_5164_505" x1="4.375" y1="1.75" x2="4.375" y2="13.75" gradientUnits="userSpaceOnUse">
<stop stop-color="#6BCAF7"/>
<stop offset="1" stop-color="#3BE2A8"/>
</linearGradient>
</defs>
</svg>
</a>
				</div>  
			   <?php
			   }else{
			?>
              <div class="snamitem">
				<?php if($simage){?><div class="snap_pimage"><img src="<?php echo $simage['url'];?>" alt=""></div><?php }?>
			
			  <div class="snapdetails">
			        <div class="cat"><a href="<?php echo $category_link;?>"><?php echo $category;?></a></div>
					<div class="snaptitle"><h3><?php echo $title;?></h3></div>
					<div class="snapdesc"><?php echo $description;?></div>
					 <a href="<?php echo $sname['readmore'];?>" class="readmore">Read more <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.75 1.75L7 7.75L1.75 13.75" stroke="url(#paint0_linear_5164_505)" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
<defs>
<linearGradient id="paint0_linear_5164_505" x1="4.375" y1="1.75" x2="4.375" y2="13.75" gradientUnits="userSpaceOnUse">
<stop stop-color="#6BCAF7"/>
<stop offset="1" stop-color="#3BE2A8"/>
</linearGradient>
</defs>
</svg>
</a>
				</div>
				</div>
			<?php }
		 }  
		 ?>
		
		</div>
		 <a href="#" class="morebtn">See More Client Success Snapshots</a>	
</div>

<?php } ?>
</section>