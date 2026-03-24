<?php
/**
 * The template for displaying all single training-topics
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TTA
 */
get_header();
while ( have_posts() ) :
the_post();
 ?>


<div class="single__middle">
    <div class="container">
        
        <div class="main-banner">
            <!--div class="back_btn">
                <a href="<?php /* echo site_url(); */ ?>/soft-skills-training-topics/">Back</a>
            </div-->
            <div class="top-label">Course Description</div>
            <div class="main-title"><h1><?php the_title(); ?></h1></div>
        </div>

        <div class="mid_single_content default_formate">
            <?php the_content(); ?>
        </div>

    </div>
</div>
<?php if ( have_rows( 'trainingtopics_callout_block' ) ) : ?>
	<?php while ( have_rows( 'trainingtopics_callout_block' ) ) : the_row(); ?>
		<?php //the_sub_field( 'trainingtopics_callout_shortcode' ); ?>
<section class="signup">
        <div class="container">
            <div class="section-title">
                <span>	<?php the_sub_field( 'trainingtopics_callout_heading' ); ?></span>
                <h2><?php the_sub_field( 'trainingtopics_callout_title' ); ?></h2>
            </div>
		<?php $trainingtopics_callout_link = get_sub_field( 'trainingtopics_callout_link' ); ?>
		<?php if ( $trainingtopics_callout_link ) { ?>
            <div class="sign-form">
			<a  class="btn btn-primary btn-large" href="<?php echo $trainingtopics_callout_link['url']; ?>" target="<?php echo $trainingtopics_callout_link['target']; ?>"><?php echo $trainingtopics_callout_link['title']; ?></a>
            </div>
			<?php } ?>
        </div>
    </section>
<?php endwhile; ?>
<?php endif; ?>




	
 <?php
endwhile; // End of the loop.
get_footer();