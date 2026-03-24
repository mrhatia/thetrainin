<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php if ( have_rows( 'block_settings_control_find_talent' ) ) : 
		while ( have_rows( 'block_settings_control_find_talent' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_find_talent' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'find_talent_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
		
	<?php $find_talent_block= get_sub_field( 'find_talent_choose_layout' );
if($find_talent_block=='find_talent_simple'){	?>
<!-- way-sec -->
<section class="way-sec" id="<?php echo $gradient_color_banner_section_id; ?>">
	<div class="container">
		<div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'find_talent_heading' ); ?></span>
			<h2><?php the_sub_field( 'find_talent_title' ); ?></h2>
		</div>
		<div class="row justify-content-center">
		<?php if ( have_rows( 'find_talent_left_block' ) ) : ?>
			<?php while ( have_rows( 'find_talent_left_block' ) ) : the_row(); ?>
			<div class="col-sm-12 col-md-6 col-lg-5 d-md-block d-none">
				<div class="talent-block">
					<h2><?php the_sub_field( 'find_talent_left_title' ); ?></h2>
					<p><?php the_sub_field( 'find_talent_left_sub_title' ); ?></p>
					<?php if ( have_rows( 'find_talent_left_button' ) ) : ?>
					<?php while ( have_rows( 'find_talent_left_button' ) ) : the_row(); ?>
							<?php $find_talent_left_link = get_sub_field( 'find_talent_left_link' ); ?>
							<?php if ( $find_talent_left_link ) { ?>
								<a class="btn btn-capsule" href="<?php echo $find_talent_left_link['url']; ?>" target="<?php echo $find_talent_left_link['target']; ?>"><?php echo $find_talent_left_link['title']; ?></a>
							<?php } ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php if ( have_rows( 'find_talent_right_block' ) ) : ?>
			<?php while ( have_rows( 'find_talent_right_block' ) ) : the_row(); ?>
			<div class="col-sm-12 col-md-6 col-lg-5 d-md-block d-none">
				<div class="talent-block">
					<h2><?php the_sub_field( 'find_talent_right_title' ); ?></h2>
					<p><?php the_sub_field( 'find_talent_right_sub_title' ); ?></p>
					<?php if ( have_rows( 'find_talent_right_button' ) ) : ?>
						<?php while ( have_rows( 'find_talent_right_button' ) ) : the_row(); ?>
							<?php $find_talent_right_link = get_sub_field( 'find_talent_right_link' ); ?>
							<?php if ( $find_talent_right_link ) { ?>
								<a class="btn btn-capsule" href="<?php echo $find_talent_right_link['url']; ?>" target="<?php echo $find_talent_right_link['target']; ?>"><?php echo $find_talent_right_link['title']; ?></a>
							<?php } ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<div class="work-tabing d-md-none d-block" id="<?php echo $gradient_color_banner_section_id; ?>">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<a class="nav-link   active " id="lets-help-tab" data-bs-toggle="tab" href="#lets-help" role="tab" aria-controls="lets-help" aria-selected="false"><?php the_sub_field( 'find_talent_heading' ); ?></a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link  " id="started-tab" data-bs-toggle="tab" href="#started" role="tab" aria-controls="started" aria-selected="false"><?php the_sub_field( 'find_talent_title' ); ?></a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
			<?php if ( have_rows( 'find_talent_left_block' ) ) : ?>
			<?php while ( have_rows( 'find_talent_left_block' ) ) : the_row(); ?>
				<div class="tab-pane fade active  show" id="lets-help" role="tabpanel" aria-labelledby="lets-help-tab">
					<div class="talent-block">
						<h2><?php the_sub_field( 'find_talent_left_title' ); ?></h2>
						<p><?php the_sub_field( 'find_talent_left_sub_title' ); ?></p>
						<?php if ( have_rows( 'find_talent_left_button' ) ) : ?>
						<?php while ( have_rows( 'find_talent_left_button' ) ) : the_row(); ?>
								<?php $find_talent_left_link = get_sub_field( 'find_talent_left_link' ); ?>
								<?php if ( $find_talent_left_link ) { ?>
									<a class="btn btn-capsule" href="<?php echo $find_talent_left_link['url']; ?>" target="<?php echo $find_talent_left_link['target']; ?>"><?php echo $find_talent_left_link['title']; ?></a>
								<?php } ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php if ( have_rows( 'find_talent_right_block' ) ) : ?>
			<?php while ( have_rows( 'find_talent_right_block' ) ) : the_row(); ?>
				<div class="tab-pane fade" id="started" role="tabpanel" aria-labelledby="started-tab">
					<div class="talent-block">
						<h2><?php the_sub_field( 'find_talent_right_title' ); ?></h2>
						<p><?php the_sub_field( 'find_talent_left_sub_title' ); ?></p>
						<?php if ( have_rows( 'find_talent_right_button' ) ) : ?>
						<?php while ( have_rows( 'find_talent_right_button' ) ) : the_row(); ?>
								<?php $find_talent_right_link = get_sub_field( 'find_talent_right_link' ); ?>
								<?php if ( $find_talent_right_link ) { ?>
									<a class="btn btn-capsule" href="<?php echo $find_talent_right_link['url']; ?>" target="<?php echo $find_talent_right_link['target']; ?>"><?php echo $find_talent_right_link['title']; ?></a>
								<?php } ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- way-sec -->
<?php }elseif($find_talent_block=='find_talent_box_simple'){ ?>



<section class="deliver-sec speaker-need scale-rollout checklist_column" id="<?php echo $gradient_color_banner_section_id; ?>">
    <div class="container">
        <div class="section-title <?php echo $class_fontstyle; ?>">
          <span><?php the_sub_field( 'find_talent_heading' ); ?></span>
			<h2><?php the_sub_field( 'find_talent_title' ); ?></h2>
        </div>

        <div class="column3-icon-text">
            
            <div class="d-md-block d-none">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-5">
                        <div class="text-icon-box small-text">
							<?php the_sub_field( 'left_block_find_talent_content' ); ?>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <div class="text-icon-box small-text">
                           	<?php the_sub_field( 'right_block_find_talent_content' ); ?>
                        </div>
                    </div>
                </div>
            </div>

			<div class="d-md-none d-block deliver-sec-mobile">

				<div class="accordion" id="accordionExample">
					<div class="accordion-item accordion_with_icon">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
							<label>Self Service</label>
						</button>
						<div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<p>Lorem ipsum dolor sit amet, lorem ipsum sit amet. Dolor amet. </p>
								<ul>
									<li>Feature title</li>
									<li>Feature title</li>
									<li>Feature title</li>
									<li>Feature title</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="accordion" id="accordionExample">
					<div class="accordion-item accordion_with_icon">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
							<label>Full Service</label>
						</button>
						<div id="collapse2" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<p>Lorem ipsum dolor sit amet, lorem ipsum sit amet. Dolor amet. </p>
								<ul>
									<li>Feature title</li>
									<li>Feature title</li>
									<li>Feature title</li>
									<li>Feature title</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>

        </div>
    </div>
</section>



<?php }?>