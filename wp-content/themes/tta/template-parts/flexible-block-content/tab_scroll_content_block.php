<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>	
<?php if ( have_rows( 'block_settings_control_tab_scroll' ) ) : 
		while ( have_rows( 'block_settings_control_tab_scroll' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_tab_scroll' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'tab_scroll_section_id' );  ?>
	<?php  endwhile; 
		endif; ?>
<?php $tab_content_layout= get_sub_field( 'tab_content_layout' );
 if($tab_content_layout=="tab_scroll_contet") { ?>
<section class="shedule-sec" id="<?php echo $gradient_color_banner_section_id; ?>">
<div class="container">
	<?php if(get_sub_field( 'tab_scroll_content_heading' )){  ?>
		<div class="section-title <?php echo $class_fontstyle; ?>">
			<span><?php the_sub_field( 'tab_scroll_content_heading' ); ?></span>
		<?php if(get_sub_field( 'tab_scroll_title' )){  ?>
			<h2><?php the_sub_field( 'tab_scroll_title' ); ?></h2>
		<?php  } ?>	
		</div>
	<?php  } ?>
	<div class="d-md-block d-none shedule_top-spacer">
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-6">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				<?php if ( have_rows( 'tab_scroll_content_add' ) ) : ?>
					<?php   $count = 0; while ( have_rows( 'tab_scroll_content_add' ) ) : the_row(); 
					$tab_scroll_content_tab_title= get_sub_field( 'tab_scroll_content_tab_title' );
					$str = str_ireplace (' ', '', $tab_scroll_content_tab_title);  ?>
					<li class="nav-item" role="presentation">
					<a class="nav-link <?php   if (!$count) { ?> active <?php } ?>" id="<?php echo $str; ?>-tab" data-bs-toggle="tab" href="#<?php echo $str; ?>" role="tab" aria-controls="<?php echo $str; ?>" aria-selected="false"><?php the_sub_field( 'tab_scroll_content_tab_title' ); ?></a>
					</li>
				<?php $count++; endwhile; ?>
				<?php endif; ?>
				</ul>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
				<div class="tab-content" id="myTabContent">
					<?php if ( have_rows( 'tab_scroll_content_add' ) ) : ?>
					<?php   $countn = 0; while ( have_rows( 'tab_scroll_content_add' ) ) : the_row(); 
					$tab_scroll_content= get_sub_field( 'tab_scroll_content_tab_title' );
					$strtwo = str_ireplace (' ', '', $tab_scroll_content);?>
					<div class="tab-pane fade <?php   if (!$countn) { ?> active <?php } ?> show" id="<?php echo $strtwo; ?>" role="tabpanel" aria-labelledby="<?php echo $strtwo; ?>-tab">
						<div class="shedule-box">
							<?php the_sub_field( 'tab_scroll_short_content' ); ?>							
						</div>
					</div>
					<?php $countn++; endwhile; ?>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="d-md-none d-block" id="<?php echo $gradient_color_banner_section_id; ?>">
		<div class="accordion" id="accordionExample">
			<?php if ( have_rows( 'tab_scroll_content_add' ) ) : ?>
					<?php   $countn = 0; while ( have_rows( 'tab_scroll_content_add' ) ) : the_row(); 
					$tab_scroll_content= get_sub_field( 'tab_scroll_content_tab_title' );
					$strtwo = str_ireplace (' ', '', $tab_scroll_content);?>
						<div class="accordion-item">
							<button class="accordion-button <?php if (!$countn) { ?><?php } else { ?> collapsed <?php } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $countn; ?>" aria-expanded="true" aria-controls="collapse<?php echo $countn; ?>">
							<?php the_sub_field( 'tab_scroll_content_tab_title' ); ?>
							</button>
							<div id="collapse<?php echo $countn; ?>" class="accordion-collapse collapse <?php   if (!$countn) { ?> show <?php } ?>  " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<div class="shedule-box">
										<?php the_sub_field( 'tab_scroll_short_content' ); ?>				
									</div>
								</div>
							</div>
						</div>
			<?php $countn++; endwhile; ?>
				<?php endif; ?>
		
			</div>
	
		</div>
	</div>
</div>
</section>
 <?php }elseif($tab_content_layout=="tab_scroll_tableleconte") { ?>
 <section class="shedule-sec help-sec">
			<div class="container">
				<?php if(get_sub_field( 'tab_scroll_content_heading' )){  ?>
					<div class="section-title">
						<span><?php the_sub_field( 'tab_scroll_content_heading' ); ?></span>
					<?php if(get_sub_field( 'tab_scroll_title' )){  ?>
						<h2><?php the_sub_field( 'tab_scroll_title' ); ?></h2>
					<?php  } ?>	
					</div>
				<?php  } ?>
				<div class="d-md-block d-none shedule_top-spacer">
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-6">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
							<?php if ( have_rows( 'tab_scroll_content_add' ) ) : ?>
								<?php   $count = 0; while ( have_rows( 'tab_scroll_content_add' ) ) : the_row(); 
								$tab_scroll_content_tab_title= get_sub_field( 'tab_scroll_content_tab_title' );
								$str = str_ireplace (' ', '', $tab_scroll_content_tab_title);  ?>
								<li class="nav-item" role="presentation">
								<a class="nav-link  <?php   if (!$count) { ?> active <?php } ?>" id="<?php echo $str; ?>-tab" data-bs-toggle="tab" href="#<?php echo $str; ?>" role="tab" aria-controls="<?php echo $str; ?>" aria-selected="false"><?php the_sub_field( 'tab_scroll_content_tab_title' ); ?></a>
								</li>
							<?php $count++; endwhile; ?>
						<?php endif; ?>
							</ul>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
							<div class="tab-content" id="myTabContent">
							<?php if ( have_rows( 'tab_scroll_content_add' ) ) : ?>
								<?php   $countn = 0; while ( have_rows( 'tab_scroll_content_add' ) ) : the_row(); 
								$tab_scroll_content= get_sub_field( 'tab_scroll_content_tab_title' );
								$strtwo = str_ireplace (' ', '', $tab_scroll_content);?>
								<div class="tab-pane fade  <?php   if (!$countn) { ?> active <?php } ?> show" id="<?php echo $strtwo; ?>" role="tabpanel" aria-labelledby="<?php echo $strtwo; ?>-tab">
									<div class="shedule-box">
										<h5><?php the_sub_field( 'tab_scroll_content_tab_title' ); ?></h5>
										<div class="table-list">
											<?php the_sub_field( 'tab_scroll_short_content' ); ?>	
									<?php $tab_scroll_read_more_link = get_sub_field( 'tab_scroll_read_more_link' ); ?>
										<?php if ( $tab_scroll_read_more_link ) { ?>
											<div class="see-more text-start">
											<a  class="link" href="<?php echo $tab_scroll_read_more_link['url']; ?>" target="<?php echo $tab_scroll_read_more_link['target']; ?>"><?php echo $tab_scroll_read_more_link['title']; ?></a>
										</div>
										<?php } ?>										
										
										</div>							
									</div>
								</div>
								<?php $countn++; endwhile; ?>
						<?php endif; ?>
							</div>
						</div>
					</div>
				</div>

				
	<div class="d-md-none d-block" id="<?php echo $gradient_color_banner_section_id; ?>">
		<div class="accordion" id="accordionExample">
			<?php if ( have_rows( 'tab_scroll_content_add' ) ) : ?>
					<?php   $countn = 0; while ( have_rows( 'tab_scroll_content_add' ) ) : the_row(); 
					$tab_scroll_content= get_sub_field( 'tab_scroll_content_tab_title' );
					$strtwo = str_ireplace (' ', '', $tab_scroll_content);?>
						<div class="accordion-item">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $countn; ?>" aria-expanded="true" aria-controls="collapse<?php echo $countn; ?>">
							<?php the_sub_field( 'tab_scroll_content_tab_title' ); ?>
							</button>
							<div id="collapse<?php echo $countn; ?>" class="accordion-collapse collapse <?php   if (!$countn) { ?> show <?php } ?>  " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<div class="shedule-box">
										<?php the_sub_field( 'tab_scroll_short_content' ); ?>				
									</div>
								</div>
							</div>
						</div>
			<?php $countn++; endwhile; ?>
				<?php endif; ?>
		
			</div>
	
		</div>
				</div>

			</div>
	</section>

<?php }else{?>  
		<section class="our-skill">
			<div class="container">
				<?php if(get_sub_field( 'tab_scroll_content_heading' )){  ?>
					<div class="section-title">
						<span><?php the_sub_field( 'tab_scroll_content_heading' ); ?></span>
					<?php if(get_sub_field( 'tab_scroll_title' )){  ?>
						<h2><?php the_sub_field( 'tab_scroll_title' ); ?></h2>
					<?php  } ?>	
					</div>
				<?php  } ?>
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-4">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
					<?php if ( have_rows( 'tab_scroll_content_add' ) ) : ?>
						<?php   $countnew = 0; while ( have_rows( 'tab_scroll_content_add' ) ) : the_row(); 
						$tab_scroll_skill_tab_title= get_sub_field( 'tab_scroll_content_tab_title' );
						$str_skill = str_ireplace (' ', '', $tab_scroll_skill_tab_title);  ?>
							<li class="nav-item" role="presentation">
								<a class="nav-link <?php   if (!$countnew) { ?> active <?php } ?>" id="<?php echo $str_skill; ?>-tab" data-bs-toggle="tab" href="#<?php echo $str_skill; ?>"
									role="tab" aria-controls="<?php echo $str_skill; ?>" aria-selected="false"><?php the_sub_field( 'tab_scroll_content_tab_title' ); ?></a>
							</li>
							<?php $countnew++; endwhile; ?>
						<?php endif; ?>
						</ul>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-8 col-xl-8 col-xxl-8">
						<div class="tab-content" id="myTabContent">
						<?php if ( have_rows( 'tab_scroll_content_add' ) ) : ?>
							<?php   $countnneww = 0; while ( have_rows( 'tab_scroll_content_add' ) ) : the_row(); 
							$tab_scroll_tabcontent= get_sub_field( 'tab_scroll_content_tab_title' );
							$strtwo_skill = str_ireplace (' ', '', $tab_scroll_tabcontent);?>
							<div class="tab-pane fade <?php   if (!$countnneww) { ?> active <?php } ?> show" id="<?php echo $strtwo_skill; ?>" role="tabpanel"
								aria-labelledby="<?php echo $strtwo_skill; ?>-tab">
								<h3><?php echo $tab_scroll_tabcontent; ?></h3>
								<div class="table-list">
									<?php the_sub_field( 'tab_scroll_short_content' ); ?>
								</div>
							</div>
						<?php $countnneww++; endwhile; ?>
						<?php endif; ?>	
						</div>
					</div>
				</div>
			</div>
		</section>
<?php } ?>
