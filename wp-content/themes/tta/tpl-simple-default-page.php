<?php
/**
 * Template Name: Default simple Template
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
while ( have_posts() ) :
the_post();
 ?>


<div class="single__middle">
    <div class="container">
        
        <div class="main-banner">
            <div class="back_btn">
                <a href="<?php echo site_url(); ?>">Back</a>
            </div>
            <!--<div class="top-label">Course Description</div>-->
            <div class="main-title"><h1><?php the_title(); ?></h1></div>
        </div>

        <div class="mid_single_content default_formate">
            <?php the_content(); ?>

		</div>
	 </div>	
	 </div>

	 <?php $select_callout_layout = get_field( 'page_default_cta_select_callout_layout' );
			if($select_callout_layout == 'page_default_cta_footer_newsletter'){ ?>
			<section class="signup">
				<div class="container">
				<?php if(get_field( 'page_default_cta_heading')){  ?>
					<div class="section-title">
						<span><?php the_field( 'page_default_cta_heading' );  ?></span>
						<h2><?php the_field( 'page_default_cta_title' );  ?></h2>
					</div>
				<?php } ?>
					<div class="sign-form">
						<input type="email" class="form-control" placeholder="Your Email Address">
						<button class="btn btn-primary">Sign Up</button>
					</div>
				</div> 
			</section>
			<?php }else{ ?>
				<section class="signup">
					<div class="container">
					<?php if(get_field( 'page_default_cta_heading')){  ?>
						<div class="section-title">
						<span><?php the_field( 'page_default_cta_heading');  ?></span>
						<h2><?php the_field( 'page_default_cta_title');  ?></h2>
						</div>	<?php } ?>
						<p><?php  the_field( 'page_sub_title');?></p>
						<?php $callout_footer_link = get_field( 'page_default_cta_link'); ?>
						<?php if ( $callout_footer_link ) { ?>
						<div class="sign-form">
							<a class="btn btn-primary" href="<?php echo $callout_footer_link['url']; ?>" target="<?php echo $callout_footer_link['target']; ?>"><?php echo $callout_footer_link['title']; ?></a>
						</div>
						<?php } ?>
					</div>
				</section>
			 <?php } ?>

 <?php
endwhile; // End of the loop.
get_footer();