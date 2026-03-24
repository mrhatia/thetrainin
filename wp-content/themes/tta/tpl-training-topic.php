<?php
/**
 * Template Name: Training Topics Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
**/

get_header();
?>
<?php if ( have_rows( 'trainingtopics_banner_block', 'option' ) ) : ?>
	<?php while ( have_rows( 'trainingtopics_banner_block', 'option' ) ) : the_row(); ?>
<section class="main-banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-6">
				<div class="banner-detail">
					<?php if(get_sub_field('trainingtopics_heading')) { ?>
					<div class="top-label">
						<?php the_sub_field( 'trainingtopics_heading' ); ?>
					</div>
					<?php } ?>
					<?php if(get_sub_field('trainingtopics_title')) { ?>
					<div class="main-title">
						<h1><?php the_sub_field( 'trainingtopics_title' ); ?></h1>
					</div>
					<?php } ?>
					<?php if(get_sub_field('trainingtopics_content')) { ?>
					<p><?php the_sub_field( 'trainingtopics_content' ); ?></p>
					<?php } ?>
					<div class="banner-btn">
					<?php $banner_primary_button_type = get_sub_field( 'trainingtopics_button' ); ?>
					<?php if ( $banner_primary_button_type ) { ?>
						<a class="btn btn-primary" href="<?php echo $banner_primary_button_type['url']; ?>" target="<?php echo $banner_primary_button_type['target']; ?>"><?php echo $banner_primary_button_type['title']; ?></a>
					<?php } ?>
			
					</div>
				
				</div>
			</div>
			<?php $banner_header_image = get_sub_field( 'trainingtopics_image' ); ?>
			<?php if ( $banner_header_image ) { ?>
			<div class="col-sm-12 col-md-12 col-lg-6">
				<div class="banner-img">
					<div class="image">
						<img src="<?php echo $banner_header_image['url']; ?>" alt="banner" class="img-fluid">
					</div>
				</div>
			</div>
			<?php } ?>
		</div>

		<div class="down-arrow">
			<a href="#call-to-section">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M6 13L12 18L18 13" stroke="#323A45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<path opacity="0.4" d="M6 6L12 11L18 6" stroke="#323A45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>					
			</a>
		</div>
	</div>
</section>
<?php endwhile; ?>
<?php endif; ?>



	<section class="our-skill">
			<div class="container">
			
				<div class="d-md-block d-none">
					<div class="row">
						<div class="col-sm-12 col-lg-4">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
							
							<?php 
								//start by fetching the terms for the animal_cat taxonomy
								$countnew = 0;  $terms = get_terms( 'training-category', array(
									'orderby' => 'name',
									'hide_empty' => 0,
									'orderby'=>'title',
									'order'=>'ASC'
									
								) );

								// now run a query for each animal family
								foreach( $terms as $term ) {  ?>
						
								<li class="nav-item" role="presentation">
									<a class="nav-link <?php   if (!$countnew) { ?> active <?php } ?>" id="<?php echo $term->slug; ?>-tab" data-bs-toggle="tab" href="#<?php echo $term->slug; ?>"
										role="tab" aria-controls="<?php echo $term->slug; ?>" aria-selected="false"><?php echo $term->name; ?></a>
								</li>
								<?php $countnew ++; ?> 
							<?php  } ?>
							</ul>
						</div>
						
						
						<div class="col-sm-12 col-lg-8 col-xl-8 col-xxl-8">
							<div class="tab-content" id="myTabContent">
							<?php 
								//start by fetching the terms for the animal_cat taxonomy
								$countnneww = 0;  $terms = get_terms( 'training-category', array(
									'orderby' => 'name',
									'hide_empty' => 0,
									'orderby'=>'title',
									'order'=>'ASC'
									
								) );

								// now run a query for each animal family
								foreach( $terms as $term ) { 
								$options = array(
										'post_type' => 'training-topics',
										'posts_per_page' => 99,
										'tax_query' => array(
											array(
												'taxonomy' => 'training-category', // Here I have set dummy taxonomy name like "taxonomy_cat" but you must be set current taxonomy name of annoucements post type. 
												'field' => 'name',
												'terms' => $term->name
											)
										),
										'orderby'=>'title',
										'order'=>'ASC'
									);
									$query = new WP_Query( $options );
									
									if ( $query->have_posts() ) :	?>
								<div class="tab-pane fade <?php   if (!$countnneww) { ?> active <?php } ?> show" id="<?php echo $term->slug; ?>" role="tabpanel"
									aria-labelledby="<?php echo $term->slug; ?>-tab">
									<h3><?php echo $term->name; ?></h3>
									<div class="table-list">
										<ul>
										<?php  $coutn=0;  while($query->have_posts()) : $query->the_post(); $coutn++;  ?>
										
										<?php if(get_field( 'trainingtopics_popup_content' )){ ?>
										<li><a data-fancybox="" data-src="#soft-skill_<?php echo $coutn; ?>"><?php the_title(); ?></a></li>
										<?php }else{ ?> 
										<li><a  data-src="#soft-skill_<?php echo $coutn; ?>"><?php the_title(); ?></a></li>
										
										<?php } ?>
											
											<?php   endwhile; wp_reset_query(); ?> 
										</ul>
									</div>
								</div>
								<?php  $countnneww++;  endif; } ?>
							</div>
						</div>
					</div>
				</div>


				<div class="d-md-none d-block">
					
					<div class="accordion" id="accordionExample1">
					
					<?php 
								//start by fetching the terms for the animal_cat taxonomy
								$countnneww = 0;  $terms = get_terms( 'training-category', array(
									'orderby' => 'name',
									'hide_empty' => 0,
									'orderby'=>'title',
									'order'=>'ASC'
									
								) );

								// now run a query for each animal family
								foreach( $terms as $term ) { 
								$options = array(
										'post_type' => 'training-topics',
										'posts_per_page' => 99,
										'tax_query' => array(
											array(
												'taxonomy' => 'training-category', // Here I have set dummy taxonomy name like "taxonomy_cat" but you must be set current taxonomy name of annoucements post type. 
												'field' => 'name',
												'terms' => $term->name
											)
										),
										'orderby'=>'title',
										'order'=>'ASC'
									);
									$query = new WP_Query( $options );
									
									if ( $query->have_posts() ) :	?>
									
						<div class="accordion-item">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $countnneww; ?>" aria-expanded="true" aria-controls="collapse<?php echo $countnneww; ?>">
								<?php echo $term->name; ?>
							</button>
							<div id="collapse<?php echo $countnneww; ?>" class="accordion-collapse collapse <?php   if (!$countnneww) { ?> show <?php } ?>" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
								<div class="accordion-body">
									<div class="shedule-box">
										<div class="table-list">
											<ul>
											<?php  $coutn=0;  while($query->have_posts()) : $query->the_post(); $coutn++;  ?>
										
												<?php if(get_field( 'trainingtopics_popup_content' )){ ?>
												<li><a data-fancybox="" data-src="#soft-skill_<?php echo $coutn; ?>"><?php the_title(); ?></a></li>
													
												<?php } ?>
											
												<?php   endwhile; wp_reset_query(); ?> 
											</ul>
											</div>
										</div>
								</div>
							</div>
						</div>
					
						<?php  $countnneww++;  endif; } ?>
					</div>

				</div>
			</div>
		</section>

		<?php 
			//start by fetching the terms for the animal_cat taxonomy
			  $terms = get_terms( 'training-category', array(
				'orderby' => 'name',
				'hide_empty' => 0,
				'orderby'=>'title',
				'order'=>'ASC'
				
			) );

			// now run a query for each animal family
			foreach( $terms as $term ) { 
			  $options = array(
					'post_type' => 'training-topics',
					'posts_per_page' => 99,
					'tax_query' => array(
						array(
							'taxonomy' => 'training-category', // Here I have set dummy taxonomy name like "taxonomy_cat" but you must be set current taxonomy name of annoucements post type. 
							'field' => 'name',
							'terms' => $term->name
						)
					),
					'orderby'=>'title',
					'order'=>'ASC'
				);
				$query = new WP_Query( $options );
				
				if ( $query->have_posts() ) :	?>
			<?php  $countnnepop=0;  while($query->have_posts()) : $query->the_post(); $countnnepop++;  ?>
			<div style="display: none;" id="soft-skill_<?php echo $countnnepop; ?>">
				<div class="soft-skill-popup">
					<h2><?php the_title(); ?></h2>
					<div class="course-content">
						<?php the_field( 'trainingtopics_popup_content' ); ?>
					</div>
					<div class="soft-skill_buttons">
						<a href="<?php the_permalink(); ?>" class="btn btn-primary">More Details</a>
						<a href="#" class="btn btn-primary">Contact US</a>
					</div>
				</div>
			</div>
			<?php   endwhile; wp_reset_query(); ?> 
			<?php  $countnneww++;  endif; } ?>

<?php if ( have_rows( 'trainingtopics_callout_block', 'option' ) ) : ?>
	<?php while ( have_rows( 'trainingtopics_callout_block', 'option' ) ) : the_row(); ?>
<section class="signup">
	<div class="container">
		<div class="section-title">
			<span><?php the_sub_field( 'trainingtopics_callout_heading' ); ?></span>
			<h2><?php the_sub_field( 'trainingtopics_callout_title' ); ?></h2>
		</div>
		<?php //the_sub_field( 'trainingtopics_callout_shortcode' ); ?>
		<div class="sign-form">
			<input type="email" class="form-control" placeholder="Your Email Address">
			<button class="btn btn-primary">Sign Up</button>
		</div>
	</div>
</section>
	<?php endwhile; ?>
<?php endif; ?>
<?php 
get_footer(); ?>
