<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php $highlight_content_layout = get_sub_field( 'highlight_content_layout' ); 
if($highlight_content_layout=="fullcontentlight") { ?>
<section class="text-block-highlight">
	<div class="container">				
		<div class="row">
			<div class="col-sm-12 col-md-3 col-lg-4">
				<div class="highlight-bg">
					
				</div>
			</div>
			<div class="col-sm-12 col-md-9 col-lg-8">
				<div class="highlight-text">
					<?php the_sub_field( 'highlights_heading_content' ); ?>
					<div class="right-pattern d-md-block d-none">
						<img src="<?php echo get_template_directory_uri(); ?>/images/menu-pattern.png" alt="menu-pattern" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php }else{ ?>
<section class="text-block-highlight2">
	<div class="container">				
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-12 col-lg-8">
				<div class="highlight-text">
					<div class="highlight-bg">							
					</div>
					<?php the_sub_field( 'highlights_heading_content' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>