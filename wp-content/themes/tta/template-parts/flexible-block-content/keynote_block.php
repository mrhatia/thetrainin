<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<section class="leaders">
	<div class="container">
		<div class="row">
		<?php if ( have_rows( 'add_keynote_heading' ) ) : ?>
				<?php while ( have_rows( 'add_keynote_heading' ) ) : the_row(); ?>
			<div class="col-sm-12 col-md-4 col-lg-4">
				<div class="leader-block">
					<h2>
						<?php the_sub_field( 'add_keynote_title' ); ?>
					</h2>
				</div>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</section>