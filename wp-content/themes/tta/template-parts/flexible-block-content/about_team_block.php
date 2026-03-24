<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>

<?php if ( have_rows( 'block_settings_control_according_about_team' ) ) : 
		while ( have_rows( 'block_settings_control_according_about_team' ) ) : the_row();
					$tta_font_style= get_sub_field( 'tta_font_style_according__about_team' );
						$class_fontstyle="";
						if($tta_font_style=="font_style_version_one"){
						 $class_fontstyle ="option1";
						}elseif($tta_font_style=="font_style_version_two") { 
						 $class_fontstyle ="option2"; 
					 } 
					$gradient_color_banner_section_id= get_sub_field( 'according_about_client_about_team' );  ?>
	<?php  endwhile; 
		endif; ?>
		<div class="team-sec" id="<?php echo $gradient_color_banner_section_id; ?>">
			<div class="container">
				<div class="section-title <?php echo $class_fontstyle; ?>">
				<?php if(get_sub_field( 'about_team_heading' )){ ?>
					<span><?php the_sub_field( 'about_team_heading' ); ?></span>
					<?php } ?>
					<?php if(get_sub_field( 'about_team_title' )){ ?>
					<h2><?php the_sub_field( 'about_team_title' ); ?></h2>
					<?php } ?>
				</div>
				<?php $about_team_short_code_team =get_sub_field( 'about_team_short_code_team' ); ?>
				<?php 
				echo do_shortcode($about_team_short_code_team);
				?>
			</div>
			<!--<div class="team-main d-md-none d-block">
						<div class="team-mobile-slider">

							<div class="team-mobile-repeat">
								<div class="team_mobile-col">
									<img src="https://wpconfigs.com/tta/wp-content/uploads/2021/10/testi.jpg" alt="" >
									<h4>Person’s name</h4>
									<p>Designation</p>
								</div>
								<div class="team_mobile-col">
									<img src="https://wpconfigs.com/tta/wp-content/uploads/2021/10/employee.png" alt="" >
									<h4>Person’s name</h4>
									<p>Designation</p>
								</div>
								<div class="team_mobile-col">
									<img src="https://wpconfigs.com/tta/wp-content/uploads/2021/10/team-3.png" alt="" >
									<h4>Person’s name</h4>
									<p>Designation</p>
								</div>
								<div class="team_mobile-col">
									<img src="https://wpconfigs.com/tta/wp-content/uploads/2021/10/team-4.png" alt="" >
									<h4>Person’s name</h4>
									<p>Designation</p>
								</div>
							</div>	

							<div class="team-mobile-repeat">
								<div class="team_mobile-col">
									<img src="https://wpconfigs.com/tta/wp-content/uploads/2021/10/testi.jpg" alt="" >
									<h4>Person’s name</h4>
									<p>Designation</p>
								</div>
								<div class="team_mobile-col">
									<img src="https://wpconfigs.com/tta/wp-content/uploads/2021/10/employee.png" alt="" >
									<h4>Person’s name</h4>
									<p>Designation</p>
								</div>
								<div class="team_mobile-col">
									<img src="https://wpconfigs.com/tta/wp-content/uploads/2021/10/team-3.png" alt="" >
									<h4>Person’s name</h4>
									<p>Designation</p>
								</div>
								<div class="team_mobile-col">
									<img src="https://wpconfigs.com/tta/wp-content/uploads/2021/10/team-4.png" alt="" >
									<h4>Person’s name</h4>
									<p>Designation</p>
								</div>
							</div>

							<div class="team-mobile-repeat">
								<div class="team_mobile-col">
									<img src="https://wpconfigs.com/tta/wp-content/uploads/2021/10/testi.jpg" alt="" >
									<h4>Person’s name</h4>
									<p>Designation</p>
								</div>
								<div class="team_mobile-col">
									<img src="https://wpconfigs.com/tta/wp-content/uploads/2021/10/employee.png" alt="" >
									<h4>Person’s name</h4>
									<p>Designation</p>
								</div>
								<div class="team_mobile-col">
									<img src="https://wpconfigs.com/tta/wp-content/uploads/2021/10/team-3.png" alt="" >
									<h4>Person’s name</h4>
									<p>Designation</p>
								</div>
								<div class="team_mobile-col">
									<img src="https://wpconfigs.com/tta/wp-content/uploads/2021/10/team-4.png" alt="" >
									<h4>Person’s name</h4>
									<p>Designation</p>
								</div>
							</div>

						</div>
					</div>-->
		</div>
