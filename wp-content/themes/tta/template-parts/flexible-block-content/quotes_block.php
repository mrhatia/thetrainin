<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TTA
 */
?>
<?php $start_quotes= get_sub_field( 'start_quotes' ); 
if($start_quotes=='startquote'){ ?>
<section class="business-goal star_section" style="background:url(<?php echo get_template_directory_uri(); ?>/images/Stars-2-appear.gif);">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="business-detail nn">
					
					<!--<div class="star-image"><img src="<?php //echo site_url(); ?>/wp-content/uploads/2022/08/star.png" alt="Star"></div>-->
					
					<?php the_sub_field( 'quotes_content',false ); ?>
					<?php if(get_sub_field( 'quotes_author_name' )){ ?>
					<div class="star-author">
					<?php the_sub_field( 'quotes_author_name' ); ?>
					</div>
					<?php } ?>			
				</div>
			</div>
		</div>
	</div>
</section>
<?php }else{ ?>
<section class="business-goal">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-3">
				<div class="business-coma">
					<svg width="133" height="129" viewBox="0 0 133 129" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M16.0712 129C9.12687 118.138 4.433 106.893 1.98961 95.2645C-0.453771 83.5081 -0.64667 72.0074 1.41092 60.7623C3.5971 49.3893 7.90518 38.5275 14.3351 28.1768C20.8937 17.8262 29.7027 8.43387 40.7623 0L59.6663 11.1174C61.3381 12.1397 62.4955 13.2897 63.1385 14.5676C63.7815 15.8455 64.0387 17.1872 63.9101 18.5929C63.9101 19.8707 63.5886 21.1486 62.9456 22.4264C62.4312 23.5765 61.7239 24.5988 60.8237 25.4933C58.6375 27.7935 56.2585 31.3715 53.6865 36.2273C51.2431 40.9554 49.4427 46.5141 48.2853 52.9034C47.1279 59.2927 47.0636 66.3209 48.0924 73.9881C49.2498 81.5275 52.4005 89.3224 57.5444 97.3729C60.3736 101.845 61.0809 105.679 59.6663 108.874C58.3803 112.068 55.8084 114.368 51.9504 115.774L16.0712 129ZM85.129 129C78.1846 118.138 73.4907 106.893 71.0473 95.2645C68.604 83.5081 68.4111 72.0074 70.4687 60.7623C72.6548 49.3893 76.9629 38.5275 83.3929 28.1768C89.9514 17.8262 98.7605 8.43387 109.82 0L128.724 11.1174C130.396 12.1397 131.553 13.2897 132.196 14.5676C132.839 15.8455 133.096 17.1872 132.968 18.5929C132.968 19.8707 132.646 21.1486 132.003 22.4264C131.489 23.5765 130.782 24.5988 129.881 25.4933C127.695 27.7935 125.316 31.3715 122.744 36.2273C120.301 40.9554 118.5 46.5141 117.343 52.9034C116.186 59.2927 116.121 66.3209 117.15 73.9881C118.308 81.5275 121.458 89.3224 126.602 97.3729C129.431 101.845 130.139 105.679 128.724 108.874C127.438 112.068 124.866 114.368 121.008 115.774L85.129 129Z" fill="white" fill-opacity="0.07"/>
					</svg>								
				</div>
			</div>
			<div class="col-sm-12 col-md-9">
				<div class="business-detail">
					<?php the_sub_field( 'quotes_content',false ); ?>
					<?php if(get_sub_field( 'quotes_author_name' )){ ?>
					<span>– <?php the_sub_field( 'quotes_author_name' ); ?></span>	
					<?php } ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/business-pattern.png" alt="business-pattern" class="img-fluid">				
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>