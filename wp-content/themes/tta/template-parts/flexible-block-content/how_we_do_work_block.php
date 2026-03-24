<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>

<?php if ( have_rows( 'block_settings_control' ) ) : 
		while ( have_rows( 'block_settings_control' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'gradient_color_banner_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<!-- work section start  -->
<?php $how_we_do_content_layout =get_sub_field( 'how_we_do_content_layout' );
	$class_dot=" ";
	if($how_we_do_content_layout=='leftalignversion'){
		$class_dot= "left-align-version";
	}?>
<section class="work-with-you <?php echo $class_dot; ?>" id="call-to-section <?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="section-title <?php echo $class_fontstyle; ?>">
			<?php if(get_sub_field('how_we_do_heading')) { ?>
			<span><?php the_sub_field( 'how_we_do_heading' ); ?></span>
			<?php } ?>
			<?php if(get_sub_field('how_we_do_title')) { ?>
			<h2><?php the_sub_field( 'how_we_do_title' ); ?></h2>
			<?php } ?>
		</div>
		<?php if ( have_rows( 'how_we_do_left_content' ) ) : ?>	
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-12 col-lg-3 d-lg-block d-none">
				<div class="work-column">
					<?php while ( have_rows( 'how_we_do_left_content' ) ) : the_row(); ?>
					<div class="sub-title">
						<h3><?php the_sub_field( 'left_content_heading' ); ?></h3>
					</div>
					<?php the_sub_field( 'content_left_side' ); ?>
					<?php endwhile; ?>
				</div>
			</div>
		<?php endif; ?>	

		<?php $how_we_do_image = get_sub_field( 'how_we_do_image' ); ?>
			<?php if ( $how_we_do_image ) { ?>
			<div class="col-sm-12 col-md-12 col-lg-5">
				<div class="work-column work-image">
					<img src="<?php echo $how_we_do_image['url']; ?>" alt="<?php echo $how_we_do_image['alt']; ?>" class="img-fluid" />
				</div>
			</div>
			<?php } ?>
		<?php if ( have_rows( 'how_we_do_right_content' ) ) : ?>		
			<div class="col-sm-12 col-md-12 col-lg-3 d-lg-block d-none">
				<div class="work-column">
					<?php while ( have_rows( 'how_we_do_right_content' ) ) : the_row(); ?>
					<div class="sub-title">
						<h3><?php the_sub_field( 'right_content_heading' ); ?></h3>
					</div>
					<?php the_sub_field( 'content_right__side' ); ?>
					<?php endwhile; ?>
				</div>
			</div>
			<?php endif; ?>
		</div>

		<div class="work-tabing d-lg-none d-block" id="<?php echo $gradient_color_banner_section_id; ?>">
		<?php $group_field = get_sub_field( "how_we_do_left_content", $post->ID );
				$left_content_heading= $group_field['left_content_heading']; 
				 if(!empty( $left_content_heading)) { ?>

				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<?php if ( have_rows( 'how_we_do_left_content' ) ) : ?>		
						<?php while ( have_rows( 'how_we_do_left_content' ) ) : the_row(); ?>					
				<li class="nav-item" role="presentation">
					<a class="nav-link   active " id="full-tab" data-bs-toggle="tab" href="#full" role="tab" aria-controls="full" aria-selected="false"><?php the_sub_field( 'left_content_heading' ); ?></a>
				</li>
				<?php endwhile; ?>	<?php endif; ?>
				<?php if ( have_rows( 'how_we_do_right_content' ) ) : ?>		
						<?php while ( have_rows( 'how_we_do_right_content' ) ) : the_row(); ?>				
				<li class="nav-item" role="presentation">
					<a class="nav-link  " id="self-tab" data-bs-toggle="tab" href="#self" role="tab" aria-controls="self" aria-selected="false"><?php the_sub_field( 'right_content_heading' ); ?></a>
				</li>
					<?php endwhile; ?>	<?php endif; ?>
			</ul>
				 <?php } ?>
				<div class="tab-content" id="myTabContent">
				<?php if ( have_rows( 'how_we_do_left_content' ) ) : ?>		
					<div class="tab-pane fade active  show" id="full" role="tabpanel" aria-labelledby="full-tab">
						<div class="work-column">
							<?php while ( have_rows( 'how_we_do_left_content' ) ) : the_row(); ?>
							<?php the_sub_field( 'content_left_side' ); ?>
							<?php endwhile; ?>
						</div>
					</div>
					<?php endif; ?>
						<?php if ( have_rows( 'how_we_do_right_content' ) ) : ?>		
					<div class="tab-pane fade" id="self" role="tabpanel" aria-labelledby="self-tab">
						<div class="work-column">
							<?php while ( have_rows( 'how_we_do_right_content' ) ) : the_row(); ?>
							<?php the_sub_field( 'content_right__side' ); ?>
							<?php endwhile; ?>
						</div>
					</div>
					<?php endif; ?>
				</div>
		</div>
	</div>
</section>
<!-- work section end  -->
	