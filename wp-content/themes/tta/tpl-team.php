<?php
/**
 * Template Name: Team 
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

while ( have_posts() ) :
			the_post();
 

 
$args = array(
	'post_type'              => array( 'team' ),
	'post_status'            => array( 'Publish' ),
	'posts_per_page'         =>'-1',
 
);

$query = new WP_Query( $args );
$trecord= $query->post_count;
$tpage= $query->max_num_pages;

$leftside ='';

$center_top ='';
$righside ='';
if ( $query->have_posts() ) {
	$c=0;
	while ( $query->have_posts() ) { $query->the_post(); 
	$c++;
	  $nm=get_the_title();
	  $des=get_field( 'team_designation',get_the_ID() );
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
			$setimg=get_template_directory_uri()."/images/team1.png";
			if(!empty($featured_img_url)){
				$setimg=$featured_img_url;
			}
			
		if($c<=10){
		 
			$leftside .='<div class="col-sm-12 col-md-6">
										<div class="team-block">
											<a href="javascript:;" data-nm="'.$nm.'" data-deg="'.$des.'" data-bigimg="'.$setimg.'" class="hoverteammember">
												<img src="'.$setimg.'" alt="team" class="img-fluid">
											</a>
											 
										</div>
									</div>';
		}
		
		 
		if($c>10 && $c<=16){
			
			
			$center_top .='<div class="col-sm-12 col-md-6">
										<div class="team-block">
											<a href="javascript:;" data-nm="'.$nm.'" data-deg="'.$des.'" data-bigimg="'.$setimg.'" class="hoverteammember" >
												<img src="'.$setimg.'" alt="team" class="img-fluid">
											</a>
										</div>
									</div>';
									
				if($c==12){
					 
					$center_top .='<div class="col-sm-12 col-md-12">
										<div class="team-block">
											<a href="javascript:;">
												<img id="bigimg" src="'.get_template_directory_uri().'/images/mid-logo.png" data-ordimg="'.get_template_directory_uri().'/images/mid-logo.png" alt="team" class="img-fluid">
											</a>
											<div class="t-detail" id="detailnmdes" style="display:none">
												<h6 id="bignm" >Name of Person</h6>
												<span id="bigdes">Designation</span>
											</div>
										</div>
									</div>';

				}					
									
									
		}
		
		if($c>16 && $c<=26){
		$righside .='<div class="col-sm-12 col-md-6">
										<div class="team-block">
											<a href="javascript:;" data-nm="'.$nm.'" data-deg="'.$des.'" data-bigimg="'.$setimg.'" class="hoverteammember">
												<img src="'.$setimg.'" alt="team" class="img-fluid">
											</a>
	 
										</div>
									</div>';
		
		
		}
	 
		
		
		
		
		
		
		
	}
	
}

?>

	<!-- content start -->
	<div class="content clearfix">
		<div class="team-main">
			<div class="team-sec">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-4">
							<div class="team-column">
								<div class="row">
									<?php echo $leftside; ?>
								
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="team-column">
								<div class="row">
									<?php echo $center_top;?>
								 </div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="team-column">
								<div class="row">
								 <?php echo $righside; ?>
								 </div>
							</div>
						</div>
					</div>
				</div>
			</div>

		 
		</div>
	</div>
	<!-- content end -->
	
	<script>
	
	jQuery(document).ready(function(){
		
		jQuery( ".hoverteammember" ).hover(
		function() {
		$( this ).addClass( "hover" );
		
			var img=jQuery(this).attr('data-bigimg');
		 jQuery("#bigimg").attr('src',img);			
					
			var nm=jQuery(this).attr('data-nm');
		 jQuery("#bignm").html(nm);		

		var deg=jQuery(this).attr('data-deg');
		 jQuery("#bigdes").html(deg);
		 jQuery("#detailnmdes").show();
		 
		 
		 
		 
		 
		}, function() {
		$( this ).removeClass( "hover" );
		var imm='<?php echo get_template_directory_uri();?>/images/mid-logo.png';
		 jQuery("#bigimg").attr('src',imm);	
		 jQuery("#bignm").html('');
		  jQuery("#bigdes").html('');
		  	 jQuery("#detailnmdes").hide();
		}
		);
		/*jQuery(".hoverteammember").click(function(){

		
		var img=jQuery(".hoverteammember").attr('data-bigimg');
		 jQuery("#bigimg").attr('src',img);			
					
			var nm=jQuery(".hoverteammember").attr('data-nm');
		 jQuery("#bignm").html(nm);		

		var deg=jQuery(".hoverteammember").attr('data-deg');
		 jQuery("#bigdes").html(deg);			 
					
		});*/
		
	});
	
	</script>
<?php 
endwhile;
get_footer(); ?>
