<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<div class="content clearfix">
	<div class="container">
		<div class="about-header">
			<ul>
				<?php if ( have_rows( 'sticky_add_sub_header' ) ) : ?>
			<?php  while ( have_rows( 'sticky_add_sub_header' ) ) : the_row(); ?>
				<li><a href="#<?php the_sub_field( 'sticky_add_sub_header_title_id' ); ?>" ><?php the_sub_field( 'sticky_add_sub_header_title' ); ?></a></li>
				<?php endwhile; ?>
			<?php endif; ?>
			</ul>
		</div>
	</div>
</div>