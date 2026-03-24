<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'our_talent_add_title' ) ) : ?>	
<section class="sectionCl focus-navigation">
    <div class="container">
    
        <div class="about-header">
            <ul>
				<?php $coutner=0; while ( have_rows( 'our_talent_add_title' ) ) : the_row(); $coutner++; ?>
                <li><a href="#" data-scroll-nav="<?php echo $coutner; ?>"><?php the_sub_field( 'our_talent_add_ttitle' ); ?></a></li>
              <?php endwhile; ?>
            </ul>
        </div>

    </div>
</section>
<?php endif; ?>