<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */

get_header();
?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PR9WXLK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php if ( have_rows( 'tta_content_layout' ) ): ?>
	<?php while ( have_rows( 'tta_content_layout' ) ) : the_row(); ?>
   
        <?php get_template_part( 'template-parts/flexible-block-content/'.get_row_layout()); ?>
		
	<?php endwhile; ?>
<?php endif; ?>


<?php
get_footer();
