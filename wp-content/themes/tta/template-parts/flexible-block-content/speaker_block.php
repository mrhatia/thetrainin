<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_speaker' ) ) : 
		while ( have_rows( 'block_settings_control_speaker' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_speaker' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'speaker_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<?php $speaker_choose_layout= get_sub_field( 'speaker_choose_layout' ); 
if($speaker_choose_layout=='speaker_addrepite'){ ?>
<section class="speaker-sec" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'speaker_heading' ); ?></span>
			<h2><?php the_sub_field( 'speaker_title' ); ?></h2>
		</div>

		<div class="d-md-block d-none">
			<div class="row">
			<?php if ( have_rows( 'add_speaker' ) ) : ?>
				<?php while ( have_rows( 'add_speaker' ) ) : the_row(); ?>
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="speaker-block">
					<?php $add_speaker_image = get_sub_field( 'add_speaker_image' ); ?>
						<?php if ( $add_speaker_image ) { ?>
							<img src="<?php echo $add_speaker_image['url']; ?>" alt="<?php echo $add_speaker_image['alt']; ?>"  class="img-fluid" />
						<?php } ?>
						<?php the_sub_field( 'add_speaker_content' ); ?>
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
			</div>			
		</div>

		<div class="d-md-none d-block">
			<div class="speaker-slider">
				<?php if ( have_rows( 'add_speaker' ) ) : ?>
					<?php while ( have_rows( 'add_speaker' ) ) : the_row(); ?>
					<div class="speaker-item">
						<div class="speaker-block">
						<?php $add_speaker_image = get_sub_field( 'add_speaker_image' ); ?>
							<?php if ( $add_speaker_image ) { ?>
								<img src="<?php echo $add_speaker_image['url']; ?>" alt="<?php echo $add_speaker_image['alt']; ?>"  class="img-fluid" />
							<?php } ?>
							<?php the_sub_field( 'add_speaker_content' ); ?>
						</div>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php }elseif($speaker_choose_layout='speaker_choose'){ ?>

<section class="sectionCl keynote-speaker-section" id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="container">

        <div class="section-title <?php echo $class_fontstyle; ?>">
           <span><?php the_sub_field( 'speaker_heading' ); ?></span>
			<h2><?php the_sub_field( 'speaker_title' ); ?></h2>
        </div>

        <div class="keynote-speaker__grid">


			<div class="d-md-block d-none">
				<div class="msrItems">
				<?php $post_objects = get_sub_field( 'add_select_speaker' ); ?>
				<?php if ( $post_objects ): ?>
					<?php $counter=0; foreach ( $post_objects as $post ):  ?>
						<?php setup_postdata( $post ); ?>
					<div class="itm<?php $counter; ?> msrItem">
						<div class="team_loop">
						<?php
								$disp_img_box ='';
								if ( has_post_thumbnail()) {
									$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
									$disp_img_box = $large_image_url[0];
								}else{
									$disp_img_box = site_url().'/wp-content/uploads/2021/10/mid-logo.png';
									}
							?>
							<div class="tema_photo">
								<img src="<?php echo $disp_img_box; ?>" alt="">
							</div>
							<div class="team_loop--text">
							<?php the_content(); ?>
							</div>
						</div>
					</div>
				<?php $counter++; endforeach; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
				</div>
			</div>

        </div>
    </div>

	<!-- Mobile Slider -->
	<div class="d-md-none d-block" id="<?php echo $gradient_color_banner_section_id; ?>">

		<div class="team_loop_slider_mobile">
			<div class="team_loop_item">
				<div class="team_loop">
					<div class="tema_photo">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/02/team2.jpg" alt="">
					</div>
					<div class="team_loop--text">
						<h3>Speaker name 1</h3>
						<p>Byline/topic</p>
					</div>
				</div>
			</div>
			<div class="team_loop_item">
				<div class="team_loop">
					<div class="tema_photo">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/02/team3.jpg" alt="">
					</div>
					<div class="team_loop--text">
						<h3>Speaker name 1</h3>
						<p>Byline/topic</p>
					</div>
				</div>
			</div>
			<div class="team_loop_item">
				<div class="team_loop">
					<div class="tema_photo">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/02/team5.jpg" alt="">
					</div>
					<div class="team_loop--text">
						<h3>Speaker name 1</h3>
						<p>Byline/topic</p>
					</div>
				</div>
			</div>
			<div class="team_loop_item">
				<div class="team_loop">
					<div class="tema_photo">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/02/team6.jpg" alt="">
					</div>
					<div class="team_loop--text">
						<h3>Speaker name 1</h3>
						<p>Byline/topic</p>
					</div>
				</div>
			</div>
		</div>

	</div>

</section>
<?php }?>