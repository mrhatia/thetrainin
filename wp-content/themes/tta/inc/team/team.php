<?php
function team_profile_fun($atts, $content = null) {
     global $wpdb;
	 // WP_Query arguments
	$args = array(
		'post_type'              => array( 'team' ),
		'post_status'            => array( 'publish' ),
		'posts_per_page'         => '-1',
	);
	// The Query
	$query = new WP_Query( $args );
	// The Loop
	if ( $query->have_posts() ) {
	
	if ( have_rows( 'team_ads_repeater', 'option' ) ){
		while ( have_rows( 'team_ads_repeater', 'option' ) ){ the_row(); 
			 
		}
	}
		?>
		<section class="sectionCl newteam_main-section">
		<div class="container">
		<div class="row">
		<?php
		
		while ( $query->have_posts() ) {
			$query->the_post();
			// do something
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
			?>
            <div class="col-xs-12 col-sm-6 col-lg-3">
                <div class="newteam_box">
                    <a target="_blank" href="<?php echo get_permalink(); ?>" class="newteam_link"></a>
								
			<?php if ( have_rows( 'employee_profile_content' ) ): ?>
				<?php while ( have_rows( 'employee_profile_content' ) ) : the_row(); ?>
					<?php if ( get_row_layout() == 'employee_profile_banner_block' ) : ?>
					
						<?php $employee_profile_banner_image = get_sub_field( 'employee_profile_banner_image' ); ?>
						<?php if ( $employee_profile_banner_image ) { ?>
							<div class="newteam_photo"><img src="<?php echo $employee_profile_banner_image['url']; ?>" alt="<?php echo $employee_profile_banner_image['alt']; ?>" />      </div>
						<?php }else{?> 
						<div class="newteam_photo">
							<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/10/sim-img.png">
						</div>
						<?php } ?> 
						
							<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
				
                    <div class="newteam_text">
                        <h3><?php echo get_the_title();?></h3>
						<p><?php the_field( 'team_designation' ); ?></p>
                    </div>
                </div>
            </div>
			  
			<?php
			
		}
		?>
		</div>
		</div>
		</section>
		<?php
	}  
	
	wp_reset_postdata();
}
add_shortcode('team_profile', 'team_profile_fun');