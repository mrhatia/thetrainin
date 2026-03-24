<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TTA
 */
get_header();
while ( have_posts() ) :
the_post();
?>

 	<section class="blog-top-banner">
		<div class="container">
						
			<div class="row">
			
				<div class="col-sm-12 col-md-2  d-md-block d-none">
					<img src="<?php echo get_template_directory_uri(); ?>/images/menu-pattern.png" alt="banner" class="img-fluid">
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="section-title">
						<h1><?php echo get_the_title();?></h1>
					</div>
				
				</div>
				<div class="col-sm-12 col-md-2  d-md-block d-none">
					<img src="<?php echo get_template_directory_uri(); ?>/images/menu-pattern.png" alt="banner" class="img-fluid">
				</div>
			</div>
		</div>
	</section>
	<!-- content start -->
	
<section class="event_footer-section">
     <div class="container">
            <div class="reserve_icon_section-main">
                <div class="row">
					<?php if(get_field( 'evetn_speaker_name' )){ ?> 
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div class="reserve_icon_section">
						<?php $evetn_speaker_name_icon = get_field( 'evetn_speaker_name_icon' ); ?>
							<?php if ( !empty($evetn_speaker_name_icon )) { ?>
								<div class="reserve_icon"><img src="<?php echo $evetn_speaker_name_icon['url']; ?>" alt="<?php echo $evetn_speaker_name_icon['alt']; ?>" /></div>
							<?php }else{ ?>
							  <div class="reserve_icon"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/09/Trainer-Icon-1.png" alt=""></div>
							<?php } ?>
                            <h4><?php the_field( 'evetn_speaker_name' ); ?></h4>
                        </div>
                    </div>
					<?php } ?>
					<?php if(get_field( 'event_date' )){ ?> 
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div class="reserve_icon_section">
						<?php $event_date_icon = get_field( 'event_date_icon' ); ?>
							<?php if (!empty( $event_date_icon )) { ?>
								 <div class="reserve_icon"><img src="<?php echo $event_date_icon['url']; ?>" alt="<?php echo $event_date_icon['alt']; ?>" /></div>
						<?php }else{ ?>
							 <div class="reserve_icon"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/09/Calendar-Icon-1.png" alt=""></div>
							<?php } ?>
              
                            <h4><?php the_field( 'event_date' ); ?></h4>
                        </div>
                    </div>
					<?php } ?>
					<?php if(get_field( 'event_time' )){ ?> 
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div class="reserve_icon_section">
						<?php $event_time_icon = get_field( 'event_time_icon' ); ?>
							<?php if (!empty($event_time_icon )) { ?>
								<div class="reserve_icon"><img src="<?php echo $event_time_icon['url']; ?>" alt="<?php echo $event_time_icon['alt']; ?>" /></div>
							<?php }else{ ?>
							<div class="reserve_icon"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/09/Clock-Icon-1.png" alt=""></div>
							<?php } ?>
                            
                            <h4><?php the_field( 'event_time' ); ?></h4>
                        </div>
                    </div>
					<?php } ?>
					<?php if(get_field( 'event_price' )){ ?> 
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <div class="reserve_icon_section">
						<?php $event_price_icon = get_field( 'event_price_icon' ); ?>
							<?php if (!empty($event_price_icon )) { ?>
							<div class="reserve_icon">	<img src="<?php echo $event_price_icon['url']; ?>" alt="<?php echo $event_price_icon['alt']; ?>" /></div>
							<?php }else{ ?>
							<div class="reserve_icon"><img src="<?php echo site_url(); ?>//wp-content/uploads/2022/09/price-tag-icon-e1607606138839-1.png" alt=""></div>
							<?php } ?>
                         
                            <h4><?php the_field( 'event_price' ); ?></h4>
                        </div>
                    </div>
					<?php } ?>
		
                </div>
            </div>
			     </div>
</section>
	<div class="content clearfix">
		<div class="blog-detail-main evnt-dtel">
			<div class="container">
					
				<?php the_content(); ?>
		
			</div>
		</div>
		
		
	</div>
	<!-- content end -->
		
		
<section class="event_footer-section">
     <div class="container">

			<?php $event_zoom_link = get_field( 'event_zoom_link' ); 
			 $event_zoom_link_two = get_field( 'event_zoom_link_two' ); 
			  $event_zoom_link_three = get_field( 'event_zoom_link_three' ); 
			   $event_zoom_link_four = get_field( 'event_zoom_link_four' ); ?>
	
            <div class="reserve_btn">
			<?php if (!empty( $event_zoom_link)) { ?>
               	<a  class="btn btn-primary" href="<?php echo $event_zoom_link['url']; ?>" target="<?php echo $event_zoom_link['target']; ?>"><?php echo $event_zoom_link['title']; ?></a>
			<?php } ?>
			<?php if (!empty( $event_zoom_link_two)) { ?>
				<a   class="btn btn-primary" href="<?php echo $event_zoom_link_two['url']; ?>" target="<?php echo $event_zoom_link_two['target']; ?>"><?php echo $event_zoom_link_two['title']; ?></a>
				<?php } ?>
			<?php if (!empty( $event_zoom_link_three)) { ?>
				<a class="btn btn-primary" href="<?php echo $event_zoom_link_three['url']; ?>" target="<?php echo $event_zoom_link_three['target']; ?>"><?php echo $event_zoom_link_three['title']; ?></a>
				<?php } ?>
			<?php if (!empty( $event_zoom_link_four)) { ?>
				<a  class="btn btn-primary" href="<?php echo $event_zoom_link_four['url']; ?>" target="<?php echo $event_zoom_link_four['target']; ?>"><?php echo $event_zoom_link_four['title']; ?></a>
				<?php } ?>
            </div>
		
			<?php if ( have_rows( 'event_speaker_block' ) ) : ?>
			<?php while ( have_rows( 'event_speaker_block' ) ) : the_row(); ?>
            <div class="speaker-section">
			<?php if(get_sub_field( 'evn_speaker_name' )){ ?>
                <h2>Speaker: <?php the_sub_field( 'evn_speaker_name' ); ?></h2>
				<?php } ?>
                <div class="row align-items-center">
				<?php $evn_speaker_image = get_sub_field( 'evn_speaker_image' ); ?>
				<?php if ( $evn_speaker_image ) { ?>
                    <div class="col-xs-12 col-sm-3">
                        <div class="speaker-img"><img src="<?php echo $evn_speaker_image['url']; ?>" alt="<?php echo $evn_speaker_image['alt']; ?>" /></div>
                    </div>
					<?php } ?>
                    <div class="col-xs-12 col-sm-7">
                        <p><?php the_sub_field( 'evn_speaker_short_content' ); ?></p>
                    </div>
                </div>
            </div>
			<?php endwhile; ?>
		<?php endif; ?>
     </div>
</section>

 <?php
endwhile; // End of the loop.
get_footer(); ?>