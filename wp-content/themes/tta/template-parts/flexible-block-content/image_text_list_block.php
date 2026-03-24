<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<section class="clear-framework image-pattern">
<div class="container">
	<div class="row">
	<?php $image_text_list_image = get_sub_field( 'image_text_list_image' ); ?>
	<?php if ( $image_text_list_image ) { ?>
		<div class="col-sm-12 col-md-6">
			<div class="image-block">
				<div class="image">
					<img src="<?php echo $image_text_list_image['url']; ?>" alt="<?php echo $image_text_list_image['alt']; ?>" class="img-fluid" />
				</div>
			</div>
		</div>
		<?php } ?>
		<?php if ( have_rows( 'image_text_list_text' ) ) : ?>
	<?php while ( have_rows( 'image_text_list_text' ) ) : the_row(); ?>
		<div class="col-sm-12 col-md-6">
			<div class="text-block-list">
				<div class="section-title text-start">
					<span><?php the_sub_field( 'image_text_list_heading' ); ?></span>
					<h2><?php the_sub_field( 'image_text_list_title' ); ?></h2>
				</div>
				<?php $image_text_choose_layout = get_sub_field( 'image_text_choose_layout' ); 
				if($image_text_choose_layout=='image_textgradientdotline'){ ?>
					<ul>	<?php  the_sub_field( 'image_text_list_content' ); ?> </ul>
				<?php }elseif($image_text_choose_layout=='image_textchecklist'){ ?>
				<ul class="checklist">
					<?php	the_sub_field( 'image_text_list_content' ); ?>
				</ul>
				<?php } ?>
	
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</div>
</section>
