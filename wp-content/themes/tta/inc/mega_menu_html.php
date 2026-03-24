<ul class="navbar-nav ms-auto desktop-menu">	

	<?php /*
		wp_nav_menu([
		'menu'  => 'Main Menu',
		'container' => false,
		'items_wrap'      => '%3$s',
		'walker' => new TTA_Menu_Walker()
		]);
	*/ ?>	

	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">How We Can Help</a>
		<ul class="sub-menu">
			<div class="menu-wrapper">
				<div class="menu_tab_section">
					<div class="row">
						<div class="col-md-3">
							<div class="menu_tabs">
								<ul>
									<!--li class="menu_tabs-items menu_tabs-items-active" data-tab-id="menu_tabs1"><a href="#"><?php the_field( 'mg_hwch_menu_3_title', 'option' ); ?></a></li-->
									<li class="menu_tabs-items menu_tabs-items-active" data-tab-id="menu_tabs2"><a href="#"><?php the_field( 'mg_hwch_menu_1_title', 'option' ); ?></a></li>
									<li class="menu_tabs-items" data-tab-id="menu_tabs3"><a href="#"><?php the_field( 'mg_hwch_menu_2_title', 'option' ); ?></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-9">
							
							<!--div class="tab_links menu_tab_links_active" id="menu_tabs1">
							
							

								<ul>
									<?php 
									$mg_hwch_menu_3_name=get_field( 'mg_hwch_menu_3_name', 'option' );
										wp_nav_menu([
										'menu'  => $mg_hwch_menu_3_name,
										'container' => false,
										'items_wrap'      => '%3$s',
										]);
								?>
								
										
								</ul>
							</div-->
							<div class="tab_links menu_tab_links_active" id="menu_tabs2">
								<ul>
									<?php 
									$mg_menu_1_name=get_field( 'mg_hwch_menu_1_name', 'option' );
										wp_nav_menu([
										'menu'  => $mg_menu_1_name,
										'container' => false,
										'items_wrap'      => '%3$s',
										]);
										?>
							
									
								</ul>
							</div>
							<div class="tab_links" id="menu_tabs3">
								<ul>
									<?php 
									$mg_hwch_menu_2_name=get_field( 'mg_hwch_menu_2_name', 'option' );
										wp_nav_menu([
										'menu'  => $mg_hwch_menu_2_name,
										'container' => false,
										'items_wrap'      => '%3$s',
										]);
								?>
									
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
		</ul>
	</li>
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Find Talent</a>
		<ul class="sub-menu">
			<div class="menu-wrapper">

				<div class="menu_find_talent">
					<h5><?php the_field( 'mg_ft_menu_1_title', 'option' ); ?></h5>
					<ul> 
					<?php 
							$mg_ft_menu_1_name=get_field( 'mg_ft_menu_1_name', 'option' );
								wp_nav_menu([
								'menu'  => $mg_ft_menu_1_name,
								'container' => false,
								'items_wrap'      => '%3$s',
								]);
						?>
							
					</ul>
				</div>

				<div class="menu_find_talent">
					<h5><?php the_field( 'mg_ft_menu_2_title', 'option' ); ?></h5>
					<ul>
					<?php 
							$mg_ft_menu_2_name=get_field( 'mg_ft_menu_2_name', 'option' );
								wp_nav_menu([
								'menu'  => $mg_ft_menu_2_name,
								'container' => false,
								'items_wrap'      => '%3$s',
								]);
						?>
							
					</ul>
				</div>

			</div>
		</ul>
	</li>
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Find Work</a>
		<ul class="sub-menu">
			<div class="menu-wrapper">
				
				<div class="menu-find_work">
					<div class="row">
						<div class="col-md-3">
							<div class="menu-find_sublinks">
								<h5><?php the_field( 'mg_fw_menu_1_title', 'option' ); ?></h5>
								<ul>
									<?php 
										$mg_fw_menu_1_name=get_field( 'mg_fw_menu_1_name', 'option' );
											wp_nav_menu([
											'menu'  => $mg_fw_menu_1_name,
											'container' => false,
											'items_wrap'      => '%3$s',
											]);
									?>
								</ul>
							</div>
						</div>
						<div class="col-md-9">
							<div class="menu_callout_cta">
							<?php $mg_fw_image = get_field( 'mg_fw_image', 'option' ); ?>
								<?php if ( $mg_fw_image ) { ?>
									<p><img src="<?php echo $mg_fw_image['url']; ?>" alt="<?php echo $mg_fw_image['alt']; ?>" /></p>
								<?php } ?>
								
								
								<p><?php the_field( 'mg_fw_content', 'option' ); ?></p>
								<?php $mg_fw_button_1 = get_field( 'mg_fw_button_1', 'option' ); ?>
								<?php if ( $mg_fw_button_1 ) { ?>
									<a class="btn btn-secondary" href="<?php echo $mg_fw_button_1['url']; ?>" target="<?php echo $mg_fw_button_1['target']; ?>"><?php echo $mg_fw_button_1['title']; ?></a>
								<?php } ?>
									<?php $mg_fw_button_2 = get_field( 'mg_fw_button_2', 'option' ); ?>
								<?php if ( $mg_fw_button_2 ) { ?>
									<a  class="btn btn-secondary" href="<?php echo $mg_fw_button_2['url']; ?>" target="<?php echo $mg_fw_button_2['target']; ?>"><?php echo $mg_fw_button_2['title']; ?></a>
								<?php } ?>
									
							</div>
						</div>
					</div>
				</div>

			</div>
		</ul>
	</li>
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Resources & Events</a>
		<ul class="sub-menu">
			<div class="menu-wrapper">
				
				<div class="menu-insights_events">
					<div class="row">
						<div class="col-md-5">
							<div class="menu-insights_links">
								<h5><?php the_field( 'mg_ie_menu_1_title', 'option' ); ?></h5>
								<ul>
									<?php 
										$mg_ie_menu_1_name=get_field( 'mg_ie_menu_1_name', 'option' );
											wp_nav_menu([
											'menu'  => $mg_ie_menu_1_name,
											'container' => false,
											'items_wrap'      => '%3$s',
											]);
									?>
								</ul>
							</div>
							<div class="menu-insights_links">
								<h5><?php the_field( 'mg_ie_menu_1_title_evetn', 'option' ); ?></h5>
								<ul>
									<?php 
										$mg_ie_menu_1_name_event=get_field( 'mg_ie_menu_1_name_event', 'option' );
											wp_nav_menu([
											'menu'  => $mg_ie_menu_1_name_event,
											'container' => false,
											'items_wrap'      => '%3$s',
											]);
									?>
								</ul>
							</div>
						</div>
						<div class="col-md-7">
							
							<!-- Version 1 -->
							<div class="menu_featured_list">
								<h5>Featured</h5>
								<div class="row">
								
								<?php $post_objects = get_field( 'mg_ie_featured_post', 'option' ); ?>
								<?php if ( $post_objects ): ?>
									<?php $ic=0; foreach ( $post_objects as $post ):  ?>
										<?php setup_postdata( $post ); 
											$postname = $post->post_type;
											if($postname=="post"){
												$showpostname = "Blog";
											}elseif($postname=="event"){
												$showpostname = "Talent Eevnt";
											}elseif($postname=="client-event"){
												$showpostname = "Client Eevnt";
											} ?>
										
									
										
										<div class="col-md-4">
											<div class="menu_featured_box">
												<a class="menu_overlay_link" href="<?php the_permalink(); ?>"></a>
													<?php 
												
													$postname = $post->post_type;
											 if($postname=="post"){ ?>
												<?php if (has_post_thumbnail( get_the_ID() ) ): ?>
													<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
														<div class="menu_featured_img"><img src="<?php echo $image[0]; ?>" alt=""></div>
													<?php endif; ?>
												
											<?php }elseif($postname=="event"){ ?>
												<?php $hed_featured_event_image = get_field( 'hed_featured_event_image', $post->ID); ?>
												<?php if ( $hed_featured_event_image ) { ?>
													<div class="menu_featured_img"><img src="<?php echo $hed_featured_event_image['url']; ?>" alt="<?php echo $hed_featured_event_image['alt']; ?>" /></div>
												<?php } ?>   
											<?php }elseif($postname=="client-event"){ ?>
												<?php $hed_featured_event_image_client = get_field( 'hed_featured_event_image_client', $post->ID); ?>
												<?php if ( $hed_featured_event_image_client ) { ?>
													<div class="menu_featured_img"><img src="<?php echo $hed_featured_event_image_client['url']; ?>" alt="<?php echo $hed_featured_event_image_client['alt']; ?>" /></div>
												<?php } ?>   
											<?php  } ?>
													
												
												
												<span class="menu_featured_cat"><?php echo $showpostname; ?></span>
												<h6 class="menu_featured_title"><?php the_title(); ?></h6>
											</div>
										</div>
									<?php $ic++; if($ic==3){  break; } endforeach; ?>
									<?php wp_reset_postdata(); ?>
								<?php endif; ?>
									
										
										
								</div>
							</div>
								

						</div>
					</div>
				</div>

			</div>
		</ul>
	</li>
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">About TTA</a>
		<ul class="sub-menu">
			<div class="menu-wrapper">

				<div class="menu-insights_events">
					<div class="row">
						<div class="col-md-5">
							<div class="menu-insights_links">
								<h5><?php the_field( 'mg_at_menu_1_title', 'option' ); ?></h5>
								<ul>
								<?php 
										$mg_at_menu_1_name=get_field( 'mg_at_menu_1_name', 'option' );
											wp_nav_menu([
											'menu'  => $mg_at_menu_1_name,
											'container' => false,
											'items_wrap'      => '%3$s',
											]);
									?>
										
								</ul>
							</div>
						</div>
						<div class="col-md-7">
							<div class="menu_callout_cta">
							<?php $mg_at_image = get_field( 'mg_at_image', 'option' ); ?>
							<?php if ( $mg_at_image ) { ?>
								<p><img src="<?php echo $mg_at_image['url']; ?>" alt="<?php echo $mg_at_image['alt']; ?>" ></p>
							<?php } ?>
							
								
								
								
								<p><?php the_field( 'mg_at_content', 'option' ); ?></p>
								<?php $mg_at_button_1 = get_field( 'mg_at_button_1', 'option' ); ?>
								<?php if ( $mg_at_button_1 ) { ?>
									<a class="btn btn-secondary" href="<?php echo $mg_at_button_1['url']; ?>" target="<?php echo $mg_at_button_1['target']; ?>"><?php echo $mg_at_button_1['title']; ?></a>
								<?php } ?>
								
							</div>
						</div>
					</div>
				</div>

			</div>
		</ul>
	</li>
	<li class="nav-item ">
		<a class="nav-link" href="<?php echo site_url(); ?>/contact-us/" role="button" aria-expanded="false">Contact Us</a>

	</li>
</ul>



<div class="mobile-menu-cover">
	<ul class="menu">
		<li class="menu-item-has-children">
			<a href="#">How We Can Help</a>
			<ul class="sub-menu">
				<!--li class="menu-item-has-children">
					<a href="#"><?php the_field( 'mg_hwch_menu_3_title_mo', 'option' );?></a>
					<ul class="sub-menu">
						<li class="back-link"><a href="javascript:void(0);"><?php the_field( 'mg_hwch_menu_3_title_mo', 'option' );?></a></li>
						<?php 
									$mg_hwch_menu_3_name_mo=get_field( 'mg_hwch_menu_3_name_mo', 'option' );
										wp_nav_menu([
										'menu'  => $mg_hwch_menu_3_name_mo,
										'container' => false,
										'items_wrap'      => '%3$s',
										]);
								?> 
								
								 
					</ul>
				</li-->
				<li class="menu-item-has-children">
					<a href="#"><?php the_field( 'mg_hwch_menu_1_title_mo', 'option' ); ?></a>
					<ul class="sub-menu">
						<li class="back-link"><a href="javascript:void(0);"><?php the_field( 'mg_hwch_menu_1_title_mo', 'option' ); ?></a></li>
					<?php 
						$mg_hwch_menu_1_name_mo=get_field( 'mg_hwch_menu_1_name_mo', 'option' );
							wp_nav_menu([
							'menu'  => $mg_hwch_menu_1_name_mo,
							'container' => false,
							'items_wrap' => '%3$s',
							]);
							?>
								
					</ul>
				</li> 
				<li class="menu-item-has-children">
					<a href="#"><?php the_field( 'mg_hwch_menu_2_title_mo', 'option' ); ?></a>
					<ul class="sub-menu">
						<li class="back-link"><a href="javascript:void(0);"><?php the_field( 'mg_hwch_menu_2_title_mo', 'option' ); ?></a></li>
							<?php 
						$mg_hwch_menu_2_name_mo=get_field( 'mg_hwch_menu_2_name_mo', 'option' );
							wp_nav_menu([
							'menu'  => $mg_hwch_menu_2_name_mo,
							'container' => false,
							'items_wrap' => '%3$s',
							]);
							?>
					</ul>
				</li>
			</ul>
		</li>
		<li class="menu-item-has-children">
			<a href="#">Find Talent</a>
			<ul class="sub-menu">
				<li class="menu-item-has-children">
					<a href="#"><?php the_field( 'mg_ft_menu_1_title_mo', 'option' ); ?></a>
					<ul class="sub-menu">
						<li class="back-link"><a href="javascript:void(0);"><?php the_field( 'mg_ft_menu_1_title_mo', 'option' ); ?></a></li>
						<?php 
						$mg_ft_menu_1_name_mo=get_field( 'mg_ft_menu_1_name_mo', 'option' );
							wp_nav_menu([
							'menu'  => $mg_ft_menu_1_name_mo,
							'container' => false,
							'items_wrap'      => '%3$s',
							]);
						?>
					</ul>
				</li>
				<li class="menu-item-has-children">
					<a href="#"><?php the_field( 'mg_ft_menu_2_title_mo', 'option' ); ?></a>
					<ul class="sub-menu">
						<li class="back-link"><a href="javascript:void(0);"><?php the_field( 'mg_ft_menu_2_title_mo', 'option' ); ?></a></li>
						<?php 
						$mg_ft_menu_2_name_mo=get_field( 'mg_ft_menu_2_name_mo', 'option' );
							wp_nav_menu([
							'menu'  => $mg_ft_menu_2_name_mo,
							'container' => false,
							'items_wrap'      => '%3$s',
							]);
						?>
					</ul>
				</li>
			</ul>
		</li>
		<li class="menu-item-has-children menu-item-has-children-last">
			<a href="#">Find Work</a>
			<ul class="sub-menu">
				<?php 
				$mg_fw_menu_1_name_mo=get_field( 'mg_fw_menu_1_name_mo', 'option' );
					wp_nav_menu([
					'menu'  => $mg_fw_menu_1_name_mo,
					'container' => false,
					'items_wrap'      => '%3$s',
					]);
				?>
				
				

				<li class="connect-content-li text-center">
					<div class="connect-logo">
					<?php $mg_fw_image_mo = get_field( 'mg_fw_image_mo', 'option' ); ?>
					<?php if ( $mg_fw_image_mo ) { ?>
						<img src="<?php echo $mg_fw_image_mo['url']; ?>" alt="<?php echo $mg_fw_image_mo['alt']; ?>" />
					<?php } ?>
					</div>
					<div class="connect-btns">
					<?php $mg_fw_button_1_mo = get_field( 'mg_fw_button_1_mo', 'option' ); ?>
					<?php if ( $mg_fw_button_1_mo ) { ?>
						<a  class="btn btn-secondary" href="<?php echo $mg_fw_button_1_mo['url']; ?>" target="<?php echo $mg_fw_button_1_mo['target']; ?>"><?php echo $mg_fw_button_1_mo['title']; ?></a>
					<?php } ?>
						 <?php $mg_fw_button_2_mo = get_field( 'mg_fw_button_2_mo', 'option' ); ?>
						<?php if ( $mg_fw_button_2_mo ) { ?>
							<a class="btn btn-secondary" href="<?php echo $mg_fw_button_2_mo['url']; ?>" target="<?php echo $mg_fw_button_2_mo['target']; ?>"><?php echo $mg_fw_button_2_mo['title']; ?></a>
						<?php } ?>
						 
					</div>
				</li>
			</ul>
		</li>

		<li class="menu-item-has-children">
			<a href="#">Resources & Events</a>


			<ul class="sub-menu">
				<li class="menu-item-has-children">
					<a href="#">Resources <?php //the_field( 'mg_hwch_menu_1_title_mo', 'option' );?></a>
					<ul class="sub-menu">
						<li class="back-link"><a href="javascript:void(0);">Resources</a></li>
						<?php 
							$mg_ie_menu_1_name_mo=get_field( 'mg_ie_menu_1_name_mo', 'option' );
								wp_nav_menu([
								'menu'  => $mg_ie_menu_1_name_mo,
								'container' => false,
								'items_wrap'      => '%3$s',
								]);
							?>
										
								 
					</ul>
				</li>
				<li class="menu-item-has-children">
					<a href="#">Events <?php //the_field( 'mg_hwch_menu_2_title_mo', 'option' ); ?></a>
					<ul class="sub-menu">
						<li class="back-link"><a href="javascript:void(0);">Events</a></li>
						<?php 
							$mg_ie_menu_1_name_mo_event=get_field( 'mg_ie_menu_1_name_mo_event', 'option' );
								wp_nav_menu([
								'menu'  => $mg_ie_menu_1_name_mo_event,
								'container' => false,
								'items_wrap'      => '%3$s',
								]);
							?>
					</ul>
				</li> 
			</ul>


		</li>
	<?php /*
		<li class="menu-item-has-children menu-item-has-children-last">
			<a href="#">Resources & Events</a>
			<ul class="sub-menu">
				<?php 
				$mg_ie_menu_1_name_mo=get_field( 'mg_ie_menu_1_name_mo', 'option' );
					wp_nav_menu([
					'menu'  => $mg_ie_menu_1_name_mo,
					'container' => false,
					'items_wrap'      => '%3$s',
					]);
				?>
				
			</ul>
		
		</li>
		
	<li class="menu-item-has-children menu-item-has-children-last">
			<a href="#">Events</a>
			<ul class="sub-menu">
				<?php 
				$mg_ie_menu_1_name_mo_event=get_field( 'mg_ie_menu_1_name_mo_event', 'option' );
					wp_nav_menu([
					'menu'  => $mg_ie_menu_1_name_mo_event,
					'container' => false,
					'items_wrap'      => '%3$s',
					]);
				?>
				
			</ul>
		
		</li> */ ?>
		<li class="menu-item-has-children menu-item-has-children-last">
			<a href="#">About TTA</a>
			<ul class="sub-menu">
				<?php 
				$mg_at_menu_1_name_mo=get_field( 'mg_at_menu_1_name_mo', 'option' );
					wp_nav_menu([
					'menu'  => $mg_at_menu_1_name_mo,
					'container' => false,
					'items_wrap'      => '%3$s',
					]);
				?>
				<li class="connect-content-li about-tta-caps">
					<div class="tta-logo">
					<?php $mg_at_image_mo = get_field( 'mg_at_image_mo', 'option' ); ?>
					<?php if ( $mg_at_image_mo ) { ?>
						<img src="<?php echo $mg_at_image_mo['url']; ?>" alt="<?php echo $mg_at_image_mo['alt']; ?>" />
					<?php } ?> 
					</div>
					<p><?php the_field( 'mg_at_content_mo', 'option' ); ?></p>
					
					<?php $mg_at_button_1_mo = get_field( 'mg_at_button_1_mo', 'option' ); ?>
					<?php if ( $mg_at_button_1_mo ) { ?>
						<a class="btn btn-secondary" href="<?php echo $mg_at_button_1_mo['url']; ?>" target="<?php echo $mg_at_button_1_mo['target']; ?>"><?php echo $mg_at_button_1_mo['title']; ?></a>
					<?php } ?>
					 
				</li>
			</ul>
		</li>
		<li class="nav-item ">
		<a class="nav-link" href="<?php echo site_url(); ?>/contact-us/" role="button" aria-expanded="false">Contact Us</a>
		</li>
		<?php $header_login_button = get_field( 'header_login_button', 'option' ); ?>
		<?php if ( $header_login_button ) { ?>
		<li class="connect-login-mobile">
			<a href="<?php echo $header_login_button['url']; ?>" target="<?php echo $header_login_button['target']; ?>" ><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/11/Group-5635.png" alt="M_logo"></a>
		</li>
		<?php } ?>
	</ul>
</div>