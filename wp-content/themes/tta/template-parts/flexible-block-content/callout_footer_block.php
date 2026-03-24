<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php $select_callout_layout = get_sub_field( 'select_callout_layout' );
if($select_callout_layout == 'footer_newsletter'){ ?>
<section class="signup">
	<div class="container">
		<div class="section-title">
			<span><?php the_sub_field( 'callout_footer_heading' ); ?></span>
			<h2><?php the_sub_field( 'callout_footer_title' ); ?></h2>
		</div>
		
		<div class="sign-form">
		
			<!--<input type="email" class="form-control" placeholder="Your Email Address">
			<button class="btn btn-primary">Sign Up</button>-->
		</div>
	</div>
</section>
<?php }else{ ?>
	<section class="signup">
		<div class="container">
			<div class="section-title">
			<span><?php the_sub_field( 'callout_footer_heading' ); ?></span>
			<h2><?php the_sub_field( 'callout_footer_title' ); ?></h2>
			</div>
			<p><?php the_sub_field( 'callout_footer_sub_title' ); ?></p>
			<?php $callout_footer_link = get_sub_field( 'callout_footer_link' ); ?>
			<?php if ( $callout_footer_link ) { ?>
			<div class="sign-form">
				<a class="btn btn-primary" href="<?php echo $callout_footer_link['url']; ?>" target="<?php echo $callout_footer_link['target']; ?>"><?php echo $callout_footer_link['title']; ?></a>
			</div>
			<?php } ?>
		</div>
	</section>
 <?php } ?>