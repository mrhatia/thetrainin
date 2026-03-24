<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<div class="workshop-main">
<div class="container">
	<div class="section-title">
		<span><?php the_sub_field( 'our_workshops_heading' ); ?></span>
		<h2><?php the_sub_field( 'our_workshops_title' ); ?></h2>
	</div>

	<div class="workshop-list">
		<div class="row">
		<?php $post_objects = get_sub_field( 'select_workshop' ); ?>
			<?php if ( $post_objects ): ?>
			<?php foreach ( $post_objects as $post ):  ?>
			<div class="col-sm-12 col-md-12">
				
				<div class="workshop-item">
				 <?php
						$disp_img_box ='';
						if ( has_post_thumbnail()) {
							$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'workshop-thumb'); 
							 $disp_img_box = $large_image_url[0];
						}else{ 
							$disp_img_box = get_template_directory_uri().'/images/workshop-item.png';
							} 
						
					  ?>
					<div class="img">
						<img src="<?php echo $disp_img_box; ?>" alt="workshop" class="img-fluid">
					</div>
					<div class="w-detail">
						
						<div class="work_tl">
							<h3><?php the_title(); ?></h3>
							<div class="date"><?php the_field( 'workshop_date' ); ?></div>
						</div>
						
						<div class="work_bl">
							<div class="dr_name">
								<span><?php the_field( 'workshop_author' ); ?></span>
								<h6><?php the_field( 'workshop_organization_name' ); ?></h6>
							</div>
							<div class="price">
								<h2><?php the_field( 'workshop_price' ); ?></h2>
								<?php $workshop_link = get_field( 'workshop_link' ); ?>
								<?php if ( $workshop_link ) { ?>
									<a  class="btn btn-primary" href="<?php echo $workshop_link['url']; ?>" target="<?php echo $workshop_link['target']; ?>"><?php echo $workshop_link['title']; ?></a>
								<?php } ?>
							</div>
						</div>

					</div>
				</div>

			</div>
		<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
		<?php endif; ?>	
		</div>
		<?php $workshop_view_more_link = get_sub_field( 'workshop_view_more_link' ); ?>
			<?php if ( $workshop_view_more_link ) { ?>
		<div class="see-more">
			<a  class="link" href="<?php echo $workshop_view_more_link['url']; ?>" target="<?php echo $workshop_view_more_link['target']; ?>"><?php echo $workshop_view_more_link['title']; ?></a>
		</div>
		<?php } ?>
	</div>
</div>
</div>