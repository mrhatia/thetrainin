<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>

<section class="reality-sec">
	<div class="container">
		<div class="row g-0 align-items-center">
			<div class="col-sm-12 col-md-3">
				<div class="title-box d-none d-md-block" style="    padding: 40px 40px;">
					<?php the_sub_field( 'gradt_head_content_heading' ); ?>
				</div>
				
			<div class="title-box d-block d-md-none">
					<div class="t-block">
						<?php the_sub_field( 'gradt_head_content_heading' ); ?>
					</div>
					<div class="t-block">
						<?php the_sub_field( 'gradt_head_content' ); ?>
					</div>
				</div>

			</div>
			<div class="col-sm-12 col-md-9">
				<div class="title-text d-md-block d-none">
					<?php the_sub_field( 'gradt_head_content' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!--<div class="title-box d-block d-md-none">
					<div class="t-block">
						<h2>Myth</h2>
						<h6>A learning strategist is a budget drain.</h6>
					</div>
					<div class="t-block">
						<h2>Reality</h2>
						<h6>TTA clients that invest in learning strategy confidently report that it is worth the upfront investment to be prepared and have a defined plan</h6>
					</div>
				</div>-->