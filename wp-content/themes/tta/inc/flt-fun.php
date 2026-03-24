<?php

function like_fun(){ 
ob_clean();


 

global $wpdb;

if(!empty($_REQUEST['pid'])){
	
$sql_1="select * from `tbl_like` where post_id=".$_REQUEST['pid']." AND `user_ip` = '".$_SERVER['REMOTE_ADDR']."'";

$results=$wpdb->get_results($sql_1);
$add='';
if(count($results)>0){
	  $sql1="DELETE FROM `tbl_like` WHERE `post_id` = ".$_REQUEST['pid']." AND `user_ip` = '".$_SERVER['REMOTE_ADDR']."'";
	$result1 = $wpdb->query($sql1);
	$add='remove';
}else{
	  $sql1="INSERT INTO `tbl_like` (`id`, `post_id`, `user_ip`, `post_type`) VALUES (NULL, '".$_REQUEST['pid']."', '".$_SERVER['REMOTE_ADDR']."', 'blog')";
	$result1 = $wpdb->query($sql1);
	$add='add';
}

}
 
$sql_1="select * from `tbl_like` where post_id=".$_REQUEST['pid'];

$results=$wpdb->get_results($sql_1);

 $return = array(
    'classnm'  => $add,
    'pcount'       => count($results)
);
 
wp_send_json($return);

 wp_die(); 
 }
 // creating Ajax call for WordPress
add_action( 'wp_ajax_nopriv_like_fun', 'like_fun' );
add_action( 'wp_ajax_like_fun', 'like_fun' );

function fun_firstcall_ajax(){ 
ob_clean();
$perpage=9;
$setpage=1;


$args = array(
	'post_type'              => array( 'post' ),
	'post_status'            => array( 'Publish' ),
	'posts_per_page'         => $perpage,
	'paged'                  => $setpage,
);
if($_REQUEST['blog_search']!=""){
	$args['s']= $_REQUEST['blog_search'];
}
$conditinalarr=array('relation' => 'AND');
if($_REQUEST['blog_cat']!=""){
	 
		$conditinalarr[]= array(
			'taxonomy' => 'category',
			'field' => 'slug',
			'terms' => $_REQUEST['blog_cat']
		 );
	 
}
$conditinalarr[]= array(
			'taxonomy' => 'category',
			'field' => 'slug',
			 'terms'    => array( 'external-blog' ),
			'operator' => 'NOT IN',
		 );
		 
if(count($conditinalarr)>1){
	$args['tax_query'] =$conditinalarr;
}
$query = new WP_Query( $args );
$trecord= $query->post_count;
$tpage= $query->max_num_pages;
 ?>
 <?php  if ( $query->have_posts() ) { ?>
<div class="row" id="secound_flt">

<?php  while ( $query->have_posts() ) { $query->the_post(); 
$author_id = get_post_field( 'post_author', $post_id );
$display_name=get_the_author_meta('display_name', $author_id);
//$excerpt = word_count(get_the_excerpt(), '110');

$excerpt = get_the_excerpt(); 
 
$excerpt = substr( $excerpt, 0, 110 ); // Only display first 260 characters of excerpt
$result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
?>
	<div class="col-sm-12 col-md-6 col-lg-4">
		<div class="single-blog">
			<div class="b-img">
				<a href="<?php echo get_permalink( get_the_ID());?>">
					<?php
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'blog-list'); 
					?>
					<?php if(!empty($featured_img_url)){ ?>
						<img src="<?php echo $featured_img_url; ?>" alt="blog" class="img-fluid">
					<?php } else {?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/blog1.jpg" alt="blog" class="img-fluid">
					<?php } ?>
				</a>
			</div>
			<div class="b-detail">
					<a class="blog-link-cover" href="<?php echo get_permalink( get_the_ID());?>"></a>
					<div class="date"><?php echo display_read_time(); ?> | <?php echo get_the_date( 'M d Y', get_the_ID() );?>  |  By <?php echo $display_name;?></div>
					<h3><?php echo wp_trim_words( get_the_title(), 9 ); ?></h3>
					<?php the_excerpt(); ?> <p><a class="link read" href="<?php echo get_permalink( get_the_ID());?>">Read More</a></p>
				
					<!--<ul>
					<li>
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/images/comment.png" alt="cmy" class="img-fluid">
							<span><?php echo get_comments_number(get_the_ID()); ?></span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/images/like.png" alt="cmy" class="img-fluid">							
							<span>3</span>
						</a>
					</li>
				</ul>-->
			</div>
		</div>
	</div>
<?php } ?>

</div>
  <?php
$totalrecord=($trecord*$tpage);
if($perpage<$totalrecord)  {
   $pagenum=$setpage;
  $page_limit=$perpage;
  
  $cnt = $trecord;

//Calculate the last page based on total number of rows and rows per page. 
$last = $tpage; 

//this makes sure the page number isn't below one, or more than our maximum pages 
if ($pagenum < 1) { 
	$pagenum = 1; 
} elseif ($pagenum > $last)  { 
	$pagenum = $last; 
}
$lower_limit = ($pagenum - 1) * $page_limit;



 
  ?>
  <nav aria-label="Page navigation example " class="pn_1">
 <ul class="pagination">
	<?php
	/*if ( ($pagenum-1) > 0) {*/
	?>	
	  <li class="page-item">
		<a class="page-link arrow"  aria-label="Previous" href="javascript:void(0);" onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo 1; ?>');">
			<svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M21.5 24L10 12.5L21.5 1" stroke="black" stroke-width="2"/>
				<path d="M13.5 24L2 12.5L13.5 1" stroke="black" stroke-width="2"/>
				</svg>
		</a>
	  </li>
	   <li class="page-item">
		<a class="page-link arrow"  aria-label="Previous" href="javascript:void(0);" onclick="displayRecords_prev('<?php echo $page_limit;  ?>', '<?php echo $pagenum-1; ?>');">
			<svg width="15" height="25" viewBox="0 0 15 25" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M13.5 24L2 12.5L13.5 1" stroke="black" stroke-width="2"/>
				</svg>
		</a>
	  </li>
	 <?php /*<a href="javascript:void(0);" class="links" onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo 1; ?>');">First</a>
	<a href="javascript:void(0);" class="links"  onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo $pagenum-1; ?>');">Previous</a>*/ ?> 
	<?php
	/*}*/
	//Show page links
	for($i=1; $i<=$last; $i++) {
		if ($i == $pagenum ) {
?>
		<?php /*<a href="javascript:void(0);" class="selected" ><?php echo $i ?></a>*/ ?> 
		 <li class="page-item active" id="no_<?php echo $i ?>"><a class="page-link" href="#"><?php echo $i ?></a></li>
<?php
	} else {  
?>
	<?php /*<a href="javascript:void(0);" class="links"  onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo $i; ?>');" ><?php echo $i ?></a>*/ ?> 
	 <li class="page-item" id="no_<?php echo $i ?>"><a class="page-link" href="javascript:void(0);"  onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo $i; ?>');" ><?php echo $i ?></a></li>
<?php 
	}
	
	if($i==5){
		?>
		<li class="page-item"><a class="page-link" href="#">.....</a></li>
		<?php if($last>6){?>
		<li class="page-item" id="no_<?php echo $i ?>"><a class="page-link" href="javascript:void(0);"  onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo $i+6; ?>');" ><?php echo $i+6; ?></a></li>
		<?php } ?>
		<?php
		break;
	}
} 
if ( ($pagenum+1) <= $last) {
?>
	<?php /*<a href="javascript:void(0);" onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo $pagenum+1; ?>');" class="links">Next</a>*/ ?> 
	
	  <li class="page-item">
		<a class="page-link arrow"  aria-label="Previous" href="javascript:void(0);" onclick="displayRecords_next('<?php echo $page_limit;  ?>', '<?php echo $pagenum+1; ?>');">
			<svg width="14" height="25" viewBox="0 0 14 25" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M1 1L12.5 12.5L1 24" stroke="black" stroke-width="2"/>
			</svg>	
		</a>
	  </li>
<?php } if ( ($pagenum) != $last) { ?>	
	<?php /*<a href="javascript:void(0);" onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo $last; ?>');" class="links" >Last</a>*/ ?> 
	
	<li class="page-item">
		<a class="page-link arrow"   aria-label="Previous" href="javascript:void(0);" onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo $last; ?>');" >
			<svg width="22" height="25" viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M1 1L12.5 12.5L1 24" stroke="black" stroke-width="2"/>
				<path d="M9 1L20.5 12.5L9 24" stroke="black" stroke-width="2"/>
			</svg>
		</a>
	  </li>
<?php
	} 
?>
 </ul>
 </nav>
		

<script type="text/javascript">

var javapage=1;
var javapagelast=<?php echo $last; ?>;
$(window).on('load', function(){ 
 
      
})



/*$( ".page-item" ).click(function() {
	$( ".page-item" ).removeClass('active');
  $( this ).addClass('active');
});*/



function displayRecords_prev(numRecords, pageNum){
	 
	if(javapage==1){
		return;
	}
	javapage--;
	var setid=javapage;
	 
	$( ".page-item" ).removeClass('active');
	$( '#no_'+setid ).addClass('active');
	
	
	
	 sec_ajax(numRecords, javapage); 
}

function displayRecords_next(numRecords, pageNum){
	 
	if(javapage>javapagelast){
		return;
	}
	javapage++;
	var setid=javapage;
	 
	$( ".page-item" ).removeClass('active');
	$( '#no_'+setid ).addClass('active');
	
	
	
	 sec_ajax(numRecords, javapage); 
}
function displayRecords(numRecords, pageNum){
	javapage=pageNum;
	
	var setid=javapage;
	 
	$( ".page-item" ).removeClass('active');
	$( '#no_'+setid ).addClass('active');
	
	 sec_ajax(numRecords, pageNum); 
}
 
 function sec_ajax(numRecords, pageNum){
	 
	   var blog_cat=$('#blog_cat').val();
	var blog_search=$('#blog_search').val();
	 $.ajax({
		url:'<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
		type: "post",
		data: {
			action: 'secound_flt_ajax',
			setpage: pageNum,
			numRecords: numRecords,
			blog_cat: blog_cat,
			blog_search: blog_search,
		},
		success: function(data){
			$("#secound_flt").html(data);
			//$('html, body').animate({  scrollTop: $("#blog_cat").offset().top  }, 1000);
		 },
		error:function(){
			 
		}                
	 });
 }
</script>
		
 <?php } }else { echo 'No post found';} ?>
 <?php
 wp_die(); 
 }
 // creating Ajax call for WordPress
add_action( 'wp_ajax_nopriv_firstcall_ajax', 'fun_firstcall_ajax' );
add_action( 'wp_ajax_firstcall_ajax', 'fun_firstcall_ajax' );

function secound_flt_fun(){ 
ob_clean();
  $numRecords=$_REQUEST['numRecords'];
  $setpage=$_REQUEST['setpage'];
  
 
$perpage=$numRecords;
$setpage=$setpage;
$args = array(
	'post_type'              => array( 'post' ),
	'post_status'            => array( 'Publish' ),
	'posts_per_page'         => $perpage,
	'paged'                  => $setpage,
);
if($_REQUEST['blog_search']!=""){
	$args['s']= $_REQUEST['blog_search'];
}
$conditinalarr=array('relation' => 'AND');
if($_REQUEST['blog_cat']!=""){
	 
		$conditinalarr[]= array(
			'taxonomy' => 'category',
			'field' => 'slug',
			'terms' => $_REQUEST['blog_cat']
		 );
	 
}
$conditinalarr[]= array(
			'taxonomy' => 'category',
			'field' => 'slug',
			 'terms'    => array( 'external-blog' ),
			'operator' => 'NOT IN',
		 );
if(count($conditinalarr)>1){
	$args['tax_query'] =$conditinalarr;
}
$query = new WP_Query( $args );
$trecord= $query->post_count;
  $tpage= $query->max_num_pages;
 ?>
 <?php  if ( $query->have_posts() ) { ?>
<?php  while ( $query->have_posts() ) { $query->the_post(); 
$author_id = get_post_field( 'post_author',  get_the_ID() );
$display_name=get_the_author_meta('display_name', $author_id);
$excerpt = get_the_excerpt(); 
 
$excerpt = substr( $excerpt, 0, 110 ); // Only display first 260 characters of excerpt
$result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
?>
  <div class="col-sm-12 col-md-6 col-lg-4">
		<div class="single-blog">
			<div class="b-img">
				<a href="<?php echo get_permalink( get_the_ID());?>">
				<?php
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'blog-list'); 
				?>
				<?php if(!empty($featured_img_url)){ ?>
					<img src="<?php echo $featured_img_url; ?>" alt="blog" class="img-fluid">
				<?php } else {?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/blog1.jpg" alt="blog" class="img-fluid">
				<?php } ?>
				</a>
			</div>
			<div class="b-detail">
				<a href="<?php echo get_permalink( get_the_ID());?>">
					<div class="date"><?php echo display_read_time(); ?> | <?php echo get_the_date( 'M d Y', get_the_ID() );?>  |  By <?php echo $display_name;?></div>
					<h3><?php echo wp_trim_words( get_the_title(), 9 ); ?></h3>
					<?php the_excerpt(); ?><p> <a class="link read" href="<?php echo get_permalink( get_the_ID());?>">Read More</a>
				</a>
					<!--<ul>
					<li>
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/images/comment.png" alt="cmy" class="img-fluid">
							<span><?php echo get_comments_number(get_the_ID()); ?></span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/images/like.png" alt="cmy" class="img-fluid">							
							<span>3</span>
						</a>
					</li>
				</ul>-->
			</div>
		</div>
	</div>
  <?php } ?>
  <?php } ?>
   
   
 <?php 
 $links=5;
 $list_class=7;
 $limit=9;
  $total=$trecord;
   $page=$setpage;
 //echo createLinks( $links, $list_class,$limit,$total,$page,$tpage );
 
// $trecord= $query->post_count;
//$tpage= $query->max_num_pages;

 
 $count= ceil( $tpage * $total );
   $no_of_paginations = ceil($tpage);
$cur_page=$setpage;

		 $cur_page = $page;
         $page=$setpage;
        $per_page = 9; // Number of items to display per page
        $previous_btn = true;
        $next_btn = true;
        $first_btn = true;
        $last_btn = true;
          $start = $trecord * $per_page;
		  $page_limit=$perpage;
		
        if ($cur_page >= 7) {
            $start_loop = $cur_page - 3;
            if ($no_of_paginations > $cur_page + 3)
                $end_loop = $cur_page + 3;
            else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                $start_loop = $no_of_paginations - 6;
                $end_loop = $no_of_paginations;
            } else {
                $end_loop = $no_of_paginations;
            }
        } else {
            $start_loop = 1;
            if ($no_of_paginations > 7)
                $end_loop = 7;
            else
                $end_loop = $no_of_paginations;
        }
          

        $pag_container .='<nav aria-label="Page navigation example " class="pn_2">';
        $pag_container .=' <ul class="pagination  ">';

        if ($first_btn && $cur_page > 1) {
           // $pag_container .= "<li  p='1' class='page-item active'>First</li>";
			
			$pag_container       .= '<li p="1" class="page-item active">
			<a class="page-link arrow"  aria-label="Previous" href="javascript:void(0);" onclick="displayRecords('.$page_limit.', 1);">
			<svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M21.5 24L10 12.5L21.5 1" stroke="black" stroke-width="2"/>
				<path d="M13.5 24L2 12.5L13.5 1" stroke="black" stroke-width="2"/>
				</svg>
		</a>
	  </li>';
	  
        } else if ($first_btn) {
           // $pag_container .= "<li p='1' class='page-item inactive'>First</li>";
			
			$pag_container       .= '<li p="1" class="page-item inactive">
			<a class="page-link arrow"  aria-label="Previous" href="javascript:void(0);"  >
			<svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M21.5 24L10 12.5L21.5 1" stroke="black" stroke-width="2"/>
				<path d="M13.5 24L2 12.5L13.5 1" stroke="black" stroke-width="2"/>
				</svg>
		</a>
	  </li>';
        }

        if ($previous_btn && $cur_page > 1) {
            $pre = $cur_page - 1;
           // $pag_container .= "<li p='$pre' class='page-item active'>Previous</li>";
			
				$pag_container       .= '<li class="page-item active">
					<a class="page-link arrow"  aria-label="Previous" href="javascript:void(0);" onclick="displayRecords_prev('.$page_limit.', '.$pre.');">
						<svg width="15" height="25" viewBox="0 0 15 25" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13.5 24L2 12.5L13.5 1" stroke="black" stroke-width="2"/>
							</svg>
					</a>
				  </li>';
        } else if ($previous_btn) {
           // $pag_container .= "<li class='page-item inactive'>Previous</li>";
				$pag_container       .= '<li class="page-item inactive">
					<a class="page-link arrow"  aria-label="Previous" href="javascript:void(0);"  >
						<svg width="15" height="25" viewBox="0 0 15 25" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13.5 24L2 12.5L13.5 1" stroke="black" stroke-width="2"/>
							</svg>
					</a>
				  </li>';
        }
        for ($i = $start_loop; $i <= $end_loop; $i++) {

            if ($cur_page == $i)
			{
               // $pag_container .= "<li p='$i' class = 'page-item selected' >{$i}</li>";
				$pag_container .= '<li class="page-item active" id="no_<?php echo $i ?>"><a class="page-link" href="javascript:void(0);"  onclick="displayRecords('.$page_limit.', '.$i.');" >'.$i.'</a></li>';
			}
            else
			{
               // $pag_container .= "<li p='$i' class='page-item active'>{$i}</li>";
				$pag_container .= '<li class="page-item " id="no_<?php echo $i ?>"><a class="page-link" href="javascript:void(0);"  onclick="displayRecords('.$page_limit.', '.$i.');" >'.$i.'</a></li>';
			}
        }
       
        if ($next_btn && $cur_page < $no_of_paginations) {
            $nex = $cur_page + 1;
           // $pag_container .= "<li p='$nex' class='page-item active'>Next</li>";
			
			 $pag_container .= '<li class="page-item active">
				<a class="page-link arrow"  aria-label="Previous" href="javascript:void(0);" onclick="displayRecords_next('.$page_limit.', '.$nex.');">
					<svg width="14" height="25" viewBox="0 0 14 25" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 1L12.5 12.5L1 24" stroke="black" stroke-width="2"/>
					</svg>	
				</a>
			  </li>';
        } else if ($next_btn) {
            //$pag_container .= "<li class='page-item inactive'>Next</li>";
			 $pag_container .= '<li class="page-item inactive">
				<a class="page-link arrow"  aria-label="Previous" href="javascript:void(0);">
					<svg width="14" height="25" viewBox="0 0 14 25" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 1L12.5 12.5L1 24" stroke="black" stroke-width="2"/>
					</svg>	
				</a>
			  </li>';
        }

        if ($last_btn && $cur_page < $no_of_paginations) {
           // $pag_container .= "<li p='$no_of_paginations' class='page-item active'>Last</li>";
			 $pag_container .= '<li class="page-item active">
				<a class="page-link arrow"  aria-label="Previous" href="javascript:void(0);" onclick="displayRecords('.$page_limit.', '.$no_of_paginations.');">
					<svg width="22" height="25" viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 1L12.5 12.5L1 24" stroke="black" stroke-width="2"/>
						<path d="M9 1L20.5 12.5L9 24" stroke="black" stroke-width="2"/>
					</svg>	
				</a>
			  </li>';
        } else if ($last_btn) {
           // $pag_container .= "<li p='$no_of_paginations' class='page-item inactive'>Last</li>";
			$pag_container .= '<li class="page-item inactive">
				<a class="page-link arrow"  aria-label="Previous" href="javascript:void(0);" >
					<svg width="22" height="25" viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 1L12.5 12.5L1 24" stroke="black" stroke-width="2"/>
						<path d="M9 1L20.5 12.5L9 24" stroke="black" stroke-width="2"/>
					</svg>	
				</a>
			  </li>';
        }

        $pag_container = $pag_container . "
            </ul>
        </nav>";
       
        echo $pag_container;
 ?>
 
 <script>
 
 $( '.pn_1').hide();
 $( '.pn_2').show();
 </script>
  <?php
 wp_die(); 
 }
 // creating Ajax call for WordPress
add_action( 'wp_ajax_nopriv_secound_flt_ajax', 'secound_flt_fun' );
add_action( 'wp_ajax_secound_flt_ajax', 'secound_flt_fun' );


 function createLinks( $links, $list_class,$limit,$total,$page,$tpage  ) {
      $total= ceil( $tpage * $total );
 $page_limit=$limit;
    $last       = ceil( $total / $limit );
 
    $start      = ( ( $page - $links ) > 0 ) ? $page - $links : 1;
    $end        = ( ( $page + $links ) < $last ) ? $page + $links : $last;
 
    $html       = '<nav aria-label="Page navigation example " class="pn_2">';
    $html       = '<ul class="pagination">';
 
    $class      = ( $page == 1 ) ? "disabled" : "";
   /* $html       .= '<li class="page-item"><a data-page="' . ( $page - 1 ) . '" href="?limit=' . $limit . '&page=' . ( $page - 1 ) . '">&laquo;</a></li>';*/
   
     $html       .= '<li class="page-item">
		<a class="page-link arrow"  aria-label="Previous" href="javascript:void(0);" onclick="displayRecords_prev('.$page_limit.', '.( $page - 1 ).');">
			<svg width="15" height="25" viewBox="0 0 15 25" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M13.5 24L2 12.5L13.5 1" stroke="black" stroke-width="2"/>
				</svg>
		</a>
	  </li>';
 
    if ( $start > 1 ) {
       // $html   .= '<li><a data-page="1" href="?limit=' . $limit . '&page=1">1</a></li>';
		  $html   .= '<li class="page-item '. $class .'"> <a class="page-link" href="javascript:void(0);"  onclick="displayRecords('.$page_limit.', ' . 1 . ');" >' . 1 . '</a></li>';
        $html   .= '<li class="disabled"><a class="page-link" href="#">.....</a> </li>';
    }
 
    for ( $i = $start ; $i <= $end; $i++ ) {
        $class  = ( $page == $i ) ? "active" : "";
        //$html   .= '<li class="page-item"><a  data-page="' . $i . '" href="?limit=' . $limit . '&page=' . $i . '">' . $i . '</a></li>';
        //$html   .= '<li class="page-item"><a  data-page="' . $i . '" href="?limit=' . $limit . '&page=' . $i . '">' . $i . '</a></li>';
		
		  $html   .= '<li class="page-item '. $class .'"> <a class="page-link" href="javascript:void(0);"  onclick="displayRecords('.$page_limit.', ' . $i . ');" >' . $i . '</a></li>';
		  
		 
    }
 
    if ( $end < $last ) {
        $html   .= '<li class="page-item disabled"><a class="page-link" href="#">.....</a> </li>';
      //  $html   .= '<li class="page-item"><a data-page="' . $last . '"href="?limit=' . $limit . '&page=' . $last . '">' . $last . '</a></li>';
		
		  $html   .= '<li class="page-item '. $class .'"> <a class="page-link" href="javascript:void(0);"  onclick="displayRecords('.$page_limit.', ' . $last . ');" >' . $last . '</a></li>';
    }
 
    $class      = ( $page == $last ) ? "disabled" : "";
    /*$html       .= '<li class="page-item"><a data-page="' . ( $page + 1 ) . '" href="?limit=' . $limit . '&page=' . ( $page + 1 ) . '">&raquo;</a></li>';*/
	
	/*$html       .= '<li class="page-item"><a data-page="' . ( $page + 1 ) . '" href="?limit=' . $limit . '&page=' . ( $page + 1 ) . '">&raquo;</a></li>';*/
 
 
 $html       .= '<li class="page-item">
		<a class="page-link arrow"  aria-label="Previous" href="javascript:void(0);" onclick="displayRecords_next('.$page_limit.', '.( $page + 1 ).');">
			<svg width="14" height="25" viewBox="0 0 14 25" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M1 1L12.5 12.5L1 24" stroke="black" stroke-width="2"/>
			</svg>	
		</a>
	  </li>';
	  
    $html       .= '</ul>';
    $html       .= '</nav>';
 
    return $html;
}

// function that runs when shortcode is called
function fun_teamlist() { 
 
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
		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'team-list'); 
	
	
			$setimg=get_template_directory_uri()."/images/team1.png";
			if(!empty($featured_img_url)){
				$setimg=$featured_img_url;
			}
			
			
			$featured_img_url_big = get_the_post_thumbnail_url(get_the_ID(),'team-mid'); 
	
	
			$bigimg=get_template_directory_uri()."/images/team1.png";
			if(!empty($featured_img_url_big)){
				$bigimg=$featured_img_url_big;
			}
			
		if($c<=10){
		 
			$leftside .='<div class="col-sm-12 col-md-6">
										<div class="team-block">
											<a href="javascript:;" data-nm="'.$nm.'" data-deg="'.$des.'" data-bigimg="'.$bigimg.'" class="hoverteammember">
												<img src="'.$setimg.'" alt="team" class="img-fluid">
											</a>
											 
										</div>
									</div>';
		}
		
		 
		if($c>10 && $c<=16){
			
			
			$center_top .='<div class="col-sm-12 col-md-6">
										<div class="team-block">
											<a href="javascript:;" data-nm="'.$nm.'" data-deg="'.$des.'" data-bigimg="'.$bigimg.'" class="hoverteammember" >
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
												<h6 id="bignm" >'.get_the_title().'</h6>
												<span id="bigdes">'.get_field( 'team_designation' ).'</span>
											
											</div>
										</div>
									</div>';

				}					
									
									
		}
		
		if($c>16 && $c<=26){
		$righside .='<div class="col-sm-12 col-md-6">
										<div class="team-block">
											<a href="javascript:;" data-nm="'.$nm.'" data-deg="'.$des.'" data-bigimg="'.$bigimg.'" class="hoverteammember">
												<img src="'.$setimg.'" alt="team" class="img-fluid">
											</a>
	 
										</div>
									</div>';
		
		
		}
	 
		
		
		
		
		
		
		
	}
	wp_reset_postdata();
}

?>

	<!-- content start -->
	<div class="content clearfix">

		<div class="team-main d-md-block d-none">
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
		 
		
	});
	
	</script> <?php
	
} 
// register shortcode
add_shortcode('teamlist', 'fun_teamlist'); 


function award_winning_projects_fun(){ 
ob_clean();
$perpage=50;
$args = array(
			'post_type'              => array( 'casestudy' ),
			'post_status'            => array( 'publish' ),
			'posts_per_page'         => $perpage,
			'paged'                  => $_REQUEST['ajpage']
		);
		
 
		
	 	if($_REQUEST['flt_search']!=""){
			 
				$args['s']= $_REQUEST['flt_search'];
			 
		} 
		
	 
				$args['meta_query']= array(
	array(
		'key'     => 'case_study_award_winning',
		'value'   => '1',
		'compare' => '=',
	),
);
	 


$conditinalarr=array('relation' => 'AND');
if($_REQUEST['flt_service']!=""){
			 
				$conditinalarr[]= array(
					'taxonomy' => 'casestudy-services',
					'field' => 'slug',
					'terms' => $_REQUEST['flt_service']
				 );
			 
		}
		if($_REQUEST['flt_industry']!=""){
			 
				$conditinalarr[]= array(
					'taxonomy' => 'casestudy-industries',
					'field' => 'slug',
					'terms' => $_REQUEST['flt_industry']
				 );
			 
		}
		
if(count($conditinalarr)>1){
	$args['tax_query'] =$conditinalarr;
}
//echo '<pre>';
//print_r($args);
$query = new WP_Query( $args );
  $trecord= $query->post_count;
 $tpage= $query->max_num_pages;
// The Loop
if ( $query->have_posts() ) {


 

while ( $query->have_posts() ) {
$query->the_post();


?>
<div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="story-block">
                                    <div class="s-img">
										<?php 
											$setim='';
											
											$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' ); 
											if(!empty($image[0])){
												$setim=$image[0];
											}
										?>
										<img src="<?php echo $setim; ?>" alt="logo" class="img-fluid">
									 
                                    </div>
                                    <div class="detail">
										<div class="match" data-mh="story-block-text"><p><?php echo get_the_excerpt(); ?></p></div>
										<?php $casestudy_single_read_more_text = get_field( 'casestudy_single_read_more_text' ); ?>
										<?php if ( $casestudy_single_read_more_text ) { ?>
											<a class="btn btn-border-blue" href="<?php echo $casestudy_single_read_more_text['url']; ?>" target="<?php echo $casestudy_single_read_more_text['target']; ?>"><?php echo $casestudy_single_read_more_text['title']; ?></a>
										<?php }else{ ?>
                                       <a href="<?php echo get_the_permalink(); ?>" target="_blank" class="btn btn-border-blue">Read More</a>
										<?php } ?>
                                    </div>
									<?php if ( have_rows( 'case_study_award_winning_detail' ) ) : ?>
									<?php while ( have_rows( 'case_study_award_winning_detail' ) ) : the_row(); ?>
                                    <div class="story-award">
                                        <div class="left">
                                            <p><?php the_sub_field( 'casestudy_award_winning_text' ); ?></p>
                                        </div>
										<?php $casestudy_award_winning_logo = get_sub_field( 'casestudy_award_winning_logo' ); ?>
										<?php if ( $casestudy_award_winning_logo ) { ?>
                                        <div class="right">
                                           	<img src="<?php echo $casestudy_award_winning_logo['url']; ?>" class="img-fluid" alt="<?php echo $casestudy_award_winning_logo['alt']; ?>" />
                                        </div>
										<?php } ?>
                                    </div>
									<?php endwhile; ?>
								<?php endif; ?>
                                </div>
                            </div>
							
							
<?php }

}else {
	
	echo '<div class="noitemcls">No posts found!</div>';
}

wp_reset_postdata(); 
?>

<?php if( $_REQUEST['ajpage'] < $tpage ){ ?>
<script>
	jQuery('.awp_result_more').show();
	 
</script>
<?php }else{?>
<script>
	jQuery('.awp_result_more').hide();
	 
</script>
<?php } ?>

<?php if( $trecord >0 ){ ?>
<script> 
	jQuery('#awp_result_main').show();
</script>
<?php }else{?>
<script>
	 
	jQuery('#awp_result_main').hide();
</script>
<?php } ?>
<?php
 wp_die(); 
 }
 // creating Ajax call for WordPress
add_action( 'wp_ajax_nopriv_award_winning_projects_fun', 'award_winning_projects_fun' );
add_action( 'wp_ajax_award_winning_projects_fun', 'award_winning_projects_fun' );


function case_studies_projects_fun(){ 
ob_clean();

$perpage=9;
$args = array(
			'post_type'              => array( 'casestudy' ),
			'post_status'            => array( 'Publish' ),
			'posts_per_page'         => $perpage,
			'paged'                  => $_REQUEST['ajpage']
		);
		
 
		
		if($_REQUEST['flt_search']!=""){
			 
				$args['s']= $_REQUEST['flt_search'];
			 
		}
		
		$args['meta_query']= array(
	array(
		'key'     => 'case_study_award_winning',
		'value'   => '1',
		'compare' => '!=',
	),
);

$conditinalarr=array('relation' => 'AND');
if($_REQUEST['flt_service']!=""){
			 
				$conditinalarr[]= array(
					'taxonomy' => 'casestudy-services',
					'field' => 'id',
					'terms' => $_REQUEST['flt_service']
				 );
			 
		}
		if($_REQUEST['flt_industry']!=""){
			 
				$conditinalarr[]= array(
					'taxonomy' => 'casestudy-industries',
					'field' => 'slug',
					'terms' => $_REQUEST['flt_industry']
				 );
			 
		}
		
if(count($conditinalarr)>1){
	$args['tax_query'] =$conditinalarr;
}
//echo '<pre>';
//print_r($args);
$query = new WP_Query( $args );
$trecord= $query->post_count;
$tpage= $query->max_num_pages;
// The Loop
if ( $query->have_posts() ) {


 

while ( $query->have_posts() ) {
$query->the_post();
?>


<div class="col-sm-12 col-md-6 col-lg-4">
	<div class="story-block">
		<div class="s-img">
		<?php 
			$setim='';
			
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' ); 
			if(!empty($image[0])){
				$setim=$image[0];
			}
		?>
		<img src="<?php echo $setim; ?>" alt="logo" class="img-fluid">
			 
		</div>
		<div class="detail">
				<div class="match" data-mh="story-block-text"><p><?php echo get_the_excerpt(); ?></p></div>
				<?php $casestudy_single_read_more_text = get_field( 'casestudy_single_read_more_text' ); ?>
				<?php if ( $casestudy_single_read_more_text ) { ?>
					<a class="btn btn-border-blue" href="<?php echo $casestudy_single_read_more_text['url']; ?>" target="<?php echo $casestudy_single_read_more_text['target']; ?>"><?php echo $casestudy_single_read_more_text['title']; ?></a>
				<?php }else{ ?>
			   <a href="<?php echo get_the_permalink(); ?>" target="_blank" class="btn btn-border-blue">Read More</a>
				<?php } ?>
		</div>
	</div>
</div>

<?php
}
}else {
	
	echo '<div class="noitemcls">No posts found!</div>';
}
?>


<?php if( $_REQUEST['ajpage'] < $tpage ){ ?>
<script>
	jQuery('.cs_result_more').show();
	 
</script>
<?php }else{?>
<script>
	jQuery('.cs_result_more').hide();
 
</script>
<?php } ?>
<?php if( $trecord >0 ){ ?>
<script> 
	jQuery('#acs_result_main').show();
</script>
<?php }else{?>
<script>
	 
		jQuery('#acs_result_main').hide();
</script>
<?php } ?>
<?php
 wp_die(); 
 }
 // creating Ajax call for WordPress
add_action( 'wp_ajax_nopriv_case_studies_projects_fun', 'case_studies_projects_fun' );
add_action( 'wp_ajax_case_studies_projects_fun', 'case_studies_projects_fun' );


function podcast_fun(){ 

 
						$post_title=""; 
		$episodes_url=""; 
		// WP_Query arguments
		$args = array(
			'post_type'              => array( 'podcast' ),
			'post_status'            => array( 'publish' ),
			'posts_per_page'         => 10,
			'paged'                  => $_REQUEST['ajpage'],
			'order'                  => 'DESC',
			'orderby'                => 'date',
		);
  
		// The Query
	 
		$q_podcast = new WP_Query( $args );
		  $trecord= $q_podcast->post_count;
		  $tpage= $q_podcast->max_num_pages;
		// The Loop
		if ( $q_podcast->have_posts() ) {
			while ( $q_podcast->have_posts() ) {
				$q_podcast->the_post();
				
				$episodes_id = get_post_meta( get_the_ID(), 'episodes_id', true );
				$audio_url = get_post_meta( get_the_ID(), 'audio_url', true );
				$podcast_mp3_url = get_field( 'podcast_mp3_url' );
				$podcast_image_url = get_field( 'podcast_image_url' );
				?>
				
		<section class="podcast-episode">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-5 d-md-block d-none">
					<?php
							$disp_img_box ='';
							if ( has_post_thumbnail()) {
								$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'homepage-thumb');
								 $disp_img_box = $large_image_url[0];
							}else{
								$disp_img_box = get_template_directory_uri().'/images/p1.png';
								}
						  ?>
						<div class="p-img">
							<a href="<?php echo $podcast_image_url; ?>"  target="_blank"><img src="<?php echo  $disp_img_box; ?>" alt="posdcast" class="img-fluid"></a>
						</div>
					</div>
	
					<div class="col-sm-12 col-md-7">
						<div class="podcast-detail list-dots">
							<?php /*<div class="share-btn">
								<a class="share-btn_click" href="javascript:void(0);">Share <img src="<?php echo get_template_directory_uri(); ?>/images/share.svg" alt="share" class="img-fluid"></a>
								<div class="addthis_toolbox share-open">
								<?php echo do_shortcode('[addthis tool="addthis_inline_share_toolbox"]'); ?>
								</div>
							</div> */ ?>

							<div class="section-title podcast_title_main">
								<div class="podcast_title-img">
									<a href="<?php echo $podcast_image_url; ?>"  target="_blank"><img src="<?php echo  $disp_img_box; ?>" alt="posdcast" class="img-fluid"></a>
								</div>
								<div class="podcast_title">
									<a href="<?php echo $podcast_image_url; ?>"  target="_blank"><span><?php the_title(); ?></span></a>
									<h3><?php the_field( 'pode_sub_title' ); ?></h3>
								</div>
							</div>

							<?php the_content();
							      $audio_url = '';
							?>
							<?php 
								if(!empty($audio_url)){
									?>
										<div class="audio_loop test-class" id="audio_<?php echo get_the_ID(); ?>" data-src="<?php echo $audio_url;?>">
											<div class="audio-player">
												<div class="play-container">
													<div class="toggle-play">
													</div>
												</div>
												<div class="time">
													<div class="current">0:00</div>
													<div class="divider">/</div>
													<div class="length"></div>
												</div>
												<div class="timeline">
													<div class="progress"></div>
												</div>

												<div class="controls">

													
													<div class="name">Music Song</div>
													<div class="volume-container">
														<div class="volume-button">
															<div class="volume icono-volumeMedium"></div>
														</div>
														<div class="volume-slider">
															<div class="volume-percentage"></div>
														</div>
													</div>
												
												</div>
											</div>
										</div>
									<?php }else{ ?>
									<div class="audio_loop" id="audio_<?php echo get_the_ID(); ?>" data-src="<?php echo $podcast_mp3_url;?>">
											<div class="audio-player">
												<div class="play-container">
													<div class="toggle-play">
													</div>
												</div>
												<div class="time">
													<div class="current">0:00</div>
													<div class="divider">/</div>
													<div class="length"></div>
												</div>
												<div class="timeline">
													<div class="progress"></div>
												</div>

												<div class="controls">

													
													<div class="name">Music Song</div>
													<div class="volume-container">
														<div class="volume-button">
															<div class="volume icono-volumeMedium"></div>
														</div>
														<div class="volume-slider">
															<div class="volume-percentage"></div>
														</div>
													</div>
												
												</div>
											</div>
										</div>
								<?php } ?>
							
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php }}  ?>
<?php if( $_REQUEST['ajpage'] < $tpage ){ ?>
<script>
	jQuery('.podcast_result_more').show();
	 
</script>
<?php }else{?>
<script>
	jQuery('.podcast_result_more').hide();
 
</script>
<?php } ?>

<?php
 wp_die(); 
 }
 // creating Ajax call for WordPress
add_action( 'wp_ajax_nopriv_podcast_fun', 'podcast_fun' );
add_action( 'wp_ajax_podcast_fun', 'podcast_fun' );


function title_podcast_fun(){ 

 
						$post_title=""; 
		$episodes_url=""; 
		// WP_Query arguments
		$args = array(
			'post_type'              => array( 'podcast' ),
			'post_status'            => array( 'publish' ),
			'posts_per_page'         => 5,
			'paged'                  => $_REQUEST['ajpage2'],
			'order'                  => 'DESC',
			'orderby'                => 'date',
		);
  
		// The Query
	 
		$q_podcast = new WP_Query( $args );
		  $trecord= $q_podcast->post_count;
		  $tpage= $q_podcast->max_num_pages;
		// The Loop
		if ( $q_podcast->have_posts() ) {
			while ( $q_podcast->have_posts() ) {
				$q_podcast->the_post();
				
				$episodes_id = get_post_meta( get_the_ID(), 'episodes_id', true );
				$audio_url = get_post_meta( get_the_ID(), 'audio_url', true );
				$podcast_mp3_url = get_field( 'podcast_mp3_url' );
				$podcast_image_url = get_field( 'podcast_image_url' );
				?>
					<div class="pd_list">
						<div class="pd_list_title"><a href="<?php echo $podcast_image_url; ?>"><?php echo get_the_title(); ?></a></div>
						<div class="pd_list_content"><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?><a href="<?php echo podcast_image_url; ?>">Read More</a></div>
					</div> 
	 
		<?php }}  ?>
<?php if( $_REQUEST['ajpage'] < $tpage ){ ?>
<script>
	jQuery('.title_podcast_result_more').show();
	 
</script>
<?php }else{?>
<script>
	jQuery('.title_podcast_result_more').hide();
 
</script>
<?php } ?>


<?php
 wp_die(); 
 }
 // creating Ajax call for WordPress
add_action( 'wp_ajax_nopriv_title_podcast_fun', 'title_podcast_fun' );
add_action( 'wp_ajax_title_podcast_fun', 'title_podcast_fun' );



function flt_news(){ 
ob_clean();

//$_REQUEST['flt_search']
$setpage=$_REQUEST['setpage'];

if($setpage==1){
		$img_1=1;
		$img_2=2;	
	}else{
		$img_1=$setpage+1;
		$img_2=$setpage+2;	
	}
$perpage=15;
// WP_Query arguments
$args = array(
	'post_type'              => array( 'news' ),
	'post_status'            => array( 'Publish' ),
	'posts_per_page'         => $perpage,
	'paged'                  => $_REQUEST['setpage']
);
if($_REQUEST['flt_search']!=""){
	$args['s']= $_REQUEST['flt_search'];
}
$conditinalarr=array('relation' => 'AND');
if($_REQUEST['flt_service']!=""){
	 
		$conditinalarr[]= array(
			'taxonomy' => 'news-services',
			'field' => 'slug',
			'terms' => $_REQUEST['flt_service']
		 );
	 
}
if($_REQUEST['flt_industry']!=""){
	 
		$conditinalarr[]= array(
			'taxonomy' => 'news-industries',
			'field' => 'slug',
			'terms' => $_REQUEST['flt_industry']
		 );
	 
}
if(count($conditinalarr)>1){
	$args['tax_query'] =$conditinalarr;
}
$query = new WP_Query( $args );

 $trecord= $query->post_count.'<br>';
 $tpage= $query->max_num_pages;
// The Loop
if ( $query->have_posts() ) {
 $i=0;
	while ( $query->have_posts() ) {
		$query->the_post();
	
   $i++;

if($i%9==0){

 
 if ( have_rows( 'news_ads_repeater', 'option' ) ) : 
		$wi=0; 
	   while ( have_rows( 'news_ads_repeater', 'option' ) ) : the_row(); 
		$wi++;
		 
		if( $wi==$img_1)
		{
			 $news_ads_image = get_sub_field( 'news_ads_image' );  
			$news_ads_link = get_sub_field( 'news_ads_link' );
			  if ( $news_ads_image ) {  
				$block9='<div class="resource_news_box rn_single_img_cl">
					<a href="'.$news_ads_link['url'].'" target="'.$news_ads_link['target'].'"><img src="'.$news_ads_image['url'].'" alt="'.$wi.'" ></a>
				</div>';
				/*<img src="<?php echo $news_ads_image['url']; ?>" alt="<?php echo $news_ads_image['alt']; ?>" />*/
			  } 
			 $i++;	 
		}
		  
	  endwhile;  
 
  endif; 
	
									
									echo $block9;
}
if($i%10==0){
	   
	 
	  if ( have_rows( 'news_ads_repeater', 'option' ) ) : 
		$wi_odd=0; 
	   while ( have_rows( 'news_ads_repeater', 'option' ) ) : the_row(); 
		  $wi_odd++;
		//echo '('.$wi_odd.'=='.$img_2.')';
		if( $wi_odd==$img_2)
		{
			 $news_ads_image = get_sub_field( 'news_ads_image' );  
			 $news_ads_link = get_sub_field( 'news_ads_link' );
			  if ( $news_ads_image ) {  
				$block10='<div class="resource_news_box rn_single_img_cl" >
				<a href="'.$news_ads_link['url'].'" target="'.$news_ads_link['target'].'"><img src="'.$news_ads_image['url'].'" alt="'.$wi.'" ></a>
				</div>';
				/*<img src="<?php echo $news_ads_image['url']; ?>" alt="<?php echo $news_ads_image['alt']; ?>" />*/
			  } 
			   $i++;
		}
		  
	  endwhile;  
 
  endif; 
 
		 							
									echo $block10;

}
if($i%15==0){	
$block15='<div class="resource_news_box rn_readmore">
										<div class="resource_news_flex">
											<h5>Read more stories on our Blog</h5>
											<a href="'.site_url().'/blog/" target="_blank" >Go to Blog</a>
										</div>
									</div>';	
									
										echo $block15;

}
	
?>
 
<div class="resource_news_box">
	<div class="resource_news_flex">
		<h5 class="match" data-mh="resource-news-title"><a href="<?php echo get_the_permalink();?>" target="_blank" ><?php echo get_the_title();?></a></h5>
		<div class="resource_news_date">
			<span><?php echo get_the_date('M j, Y'); ?></span> 
			<a target="_blank"  href="<?php echo get_the_permalink();?>">Read More</a>
		</div>
	</div>
</div>
<?php

}
wp_reset_query();	
}

if($tpage>$_REQUEST['setpage']){
	echo '<div class="see-more load_more_remove">
		<a class="link load_more" href="javascript:;" target="">See More</a>
	</div>';
}

wp_die(); 
 }
 // creating Ajax call for WordPress
add_action( 'wp_ajax_nopriv_flt_news', 'flt_news' );
add_action( 'wp_ajax_flt_news', 'flt_news' );



function flt_industries(){ 
 
 
  $_REQUEST['casestudy_industries'];
 $term = get_term_by('slug', $_REQUEST['casestudy_industries'], 'casestudy-industries'); 
 //print_r($term);
     $name = $term->name; 
    $id = $term->term_id;
 
$return = array();
$catarr = array();
$catarr['category_name'] = $name ;
$catarr['category_description'] =  $term->description;
$return['cat_block'] =$catarr;

$args = array(
	'post_type'              => array( 'casestudy' ),
	'post_status'            => array( 'Publish' ),
	'posts_per_page'         => $perpage,
	'paged'                  => '-1'
);




$conditinalarr=array('relation' => 'AND');

if($_REQUEST['casestudy_industries']!=""){
	 
		$conditinalarr[]= array(
			'taxonomy' => 'casestudy-industries',
			'field' => 'slug',
			'terms' => $_REQUEST['casestudy_industries']
		 );
	 
}
if(count($conditinalarr)>1){
	$args['tax_query'] =$conditinalarr;
}
$query = new WP_Query( $args );
$trecord= $query->post_count;
$tpage= $query->max_num_pages;
// The Loop
$postarr=array();
if ( $query->have_posts() ) {
 
	while ( $query->have_posts() ) {
		$query->the_post();
		$post_sub_arr['ID']=get_the_ID();
		$post_sub_arr['title']=get_the_title();
		$post_sub_arr['permalink']=get_the_permalink();
		 $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
		$post_sub_arr['image']=$image[0];
		$post_sub_arr['content']=get_the_excerpt();
		
		
		$postarr[]=$post_sub_arr;
	}
	
}
$return['post_block'] = $postarr;
 
wp_send_json($return);
  wp_die();  
 }
 // creating Ajax call for WordPress
add_action( 'wp_ajax_nopriv_flt_industries', 'flt_industries' );
add_action( 'wp_ajax_flt_industries', 'flt_industries' );



function flt_podcast(){ 
ob_clean();
 
$perpage=15;
// WP_Query arguments
$args = array(
	'post_type'              => array( 'podcast' ),
	'post_status'            => array( 'Publish' ),
	'posts_per_page'         => '-1'
 
);
if($_REQUEST['flt_search']!=""){
	$args['s']= $_REQUEST['flt_search'];
}
$conditinalarr=array('relation' => 'AND');
if($_REQUEST['flt_service']!=""){
	 
		$conditinalarr[]= array(
			'taxonomy' => 'podcast-services',
			'field' => 'slug',
			'terms' => $_REQUEST['flt_service']
		 );
	 
}
if($_REQUEST['flt_industry']!=""){
	 
		$conditinalarr[]= array(
			'taxonomy' => 'podcast-industries',
			'field' => 'slug',
			'terms' => $_REQUEST['flt_industry']
		 );
	 
}
if(count($conditinalarr)>1){
	$args['tax_query'] =$conditinalarr;
}
$query = new WP_Query( $args );

 $trecord= $query->post_count.'<br>';
 $tpage= $query->max_num_pages;
// The Loop
if ( $query->have_posts() ) {
 
	while ( $query->have_posts() ) {
		$query->the_post();
	
 

				$episodes_id = get_post_meta( get_the_ID(), 'episodes_id', true );
				$audio_url = get_post_meta( get_the_ID(), 'audio_url', true );
				$podcast_mp3_url = get_field( 'podcast_mp3_url' );
 
?>

<section class="podcast-episode">
	<div class="row">
		<div class="col-sm-12 col-md-5 d-md-block d-none">
								<div class="p-img">
									<?php
							$disp_img_box ='';
							if ( has_post_thumbnail()) {
								$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'homepage-thumb');
								 $disp_img_box = $large_image_url[0];
							}else{
								$disp_img_box = get_template_directory_uri().'/images/p1.png';
								}
						  ?>
				<img src="<?php echo  $disp_img_box; ?>" alt="posdcast" class="img-fluid">
			</div>
		</div>

		<div class="col-sm-12 col-md-7">
			<div class="podcast-detail list-dots">
					<?php /*<div class="share-btn">
								<a class="share-btn_click" href="javascript:void(0);">Share <img src="<?php echo get_template_directory_uri(); ?>/images/share.svg" alt="share" class="img-fluid"></a>
								<div class="addthis_toolbox share-open">
								<?php echo do_shortcode('[addthis tool="addthis_inline_share_toolbox"]'); ?>
								</div>
							</div> */ ?>

				<div class="section-title podcast_title_main">
					<div class="podcast_title-img">
						<img src="<?php echo  $disp_img_box; ?>" alt="posdcast" class="img-fluid">
					</div>
					<div class="podcast_title">
						<span><?php echo get_the_title();?></span>
						<h3><?php the_field( 'pode_sub_title' ); ?></h3>
					</div>
				</div>
				<?php  the_content(); ?>
				
				<?php 
								if(!empty($audio_url)){
									?>
										<div class="audio_loop" id="audio_<?php echo get_the_ID(); ?>" data-src="<?php echo $audio_url;?>">
											<div class="audio-player">
												<div class="play-container">
													<div class="toggle-play">
													</div>
												</div>
												<div class="time">
													<div class="current">0:00</div>
													<div class="divider">/</div>
													<div class="length"></div>
												</div>
												<div class="timeline">
													<div class="progress"></div>
												</div>

												<div class="controls">

													
													<div class="name">Music Song</div>
													<div class="volume-container">
														<div class="volume-button">
															<div class="volume icono-volumeMedium"></div>
														</div>
														<div class="volume-slider">
															<div class="volume-percentage"></div>
														</div>
													</div>
												
												</div>
											</div>
										</div>
									<?php }else{ ?>
									<div class="audio_loop" id="audio_<?php echo get_the_ID(); ?>" data-src="<?php echo $podcast_mp3_url;?>">
											<div class="audio-player">
												<div class="play-container">
													<div class="toggle-play">
													</div>
												</div>
												<div class="time">
													<div class="current">0:00</div>
													<div class="divider">/</div>
													<div class="length"></div>
												</div>
												<div class="timeline">
													<div class="progress"></div>
												</div>

												<div class="controls">

													
													<div class="name">Music Song</div>
													<div class="volume-container">
														<div class="volume-button">
															<div class="volume icono-volumeMedium"></div>
														</div>
														<div class="volume-slider">
															<div class="volume-percentage"></div>
														</div>
													</div>
												
												</div>
											</div>
										</div>
								<?php } ?>
				
			</div>
		</div>
	</div>
</section>
 
 
<?php

}
wp_reset_query();	
}

if($tpage>$_REQUEST['setpage']){
	echo '<div class="see-more load_more_remove">
		<a class="link load_more" href="javascript:;" target="">See More</a>
	</div>';
}

wp_die(); 
 }
 // creating Ajax call for WordPress
add_action( 'wp_ajax_nopriv_flt_podcast', 'flt_podcast' );
add_action( 'wp_ajax_flt_podcast', 'flt_podcast' );



function flt_resource(){ 
ob_clean();
 
$perpage=15;
// WP_Query arguments
$args = array(
	'post_type'              => array( 'resource' ),
	'post_status'            => array( 'Publish' ),
	'posts_per_page'         => '-1',
	'orderby' => 'date', 
	'order' => 'DESC'	
 
);
if($_REQUEST['flt_search']!=""){
	$args['s']= $_REQUEST['flt_search'];
}
$conditinalarr=array('relation' => 'AND');


if($_REQUEST['re_catslug']!=""){
	 if($_REQUEST['re_catslug']=='insights'){
		 $conditinalarr[]= array(
			'taxonomy' => 'resource-category',
			'field' => 'slug',
			'terms' => array("ebooks","infographics","videos","white-papers")
		 );
	 }else{
		$conditinalarr[]= array(
			'taxonomy' => 'resource-category',
			'field' => 'slug',
			'terms' => $_REQUEST['re_catslug']
		 );
	 }
	 
}

if($_REQUEST['flt_service']!=""){
	 
		$conditinalarr[]= array(
			'taxonomy' => 'resource-services',
			'field' => 'slug',
			'terms' => $_REQUEST['flt_service']
		 );
	 
}
if($_REQUEST['flt_industry']!=""){
	 
		$conditinalarr[]= array(
			'taxonomy' => 'resource-industries',
			'field' => 'slug',
			'terms' => $_REQUEST['flt_industry']
		 );
	 
}
if(count($conditinalarr)>1){
	$args['tax_query'] =$conditinalarr;
}
$query = new WP_Query( $args );

 $trecord= $query->post_count.'<br>';
 $tpage= $query->max_num_pages;
// The Loop
if ( $query->have_posts() ) {
 
	while ( $query->have_posts() ) {
		$query->the_post();
	
 $disp_img_box ='';
	if ( has_post_thumbnail()) {
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'resource-thumb'); 
		$disp_img_box = $large_image_url[0];
	}else{ 
		$disp_img_box = get_template_directory_uri().'/images/re1.jpg';
		}  ?>
<div class="col-sm-12 col-md-4">
	<div class="resc-block">
		<a target="_blank" href="<?php the_permalink(); ?>">
			<img src="<?php echo $disp_img_box; ?>" alt="resource" class="img-fluid">
			<span><?php echo esc_html( $term->name ); ?></span>
			<h6><?php the_title(); ?></h6>
		</a>
	</div>
</div>
<?php

}
wp_reset_query();	
}

if($tpage>$_REQUEST['setpage']){
	echo '<div class="see-more load_more_remove">
		<a class="link load_more" href="javascript:;" target="">See More</a>
	</div>';
}

wp_die(); 
 }
 // creating Ajax call for WordPress
add_action( 'wp_ajax_nopriv_flt_resource', 'flt_resource' );
add_action( 'wp_ajax_flt_resource', 'flt_resource' );



function flt_insights_fun(){ 
ob_clean();
 
$conditinalarr=array('relation' => 'AND');
$perpage=6;
$setpage=$_REQUEST['setpage'];
	$args = array(
			'post_type'              => array( 'resource' ),
				'post_status'            => array( 'Publish' ),				 
				'posts_per_page'         => $perpage,
				'paged'                  => $setpage,
				'orderby' => 'date', 
				'order' => 'DESC'				
		 
	);
	$conditinalarr[]= array(
				'taxonomy' => 'resource-category',
				'field' => 'slug',
				'terms' => array("ebooks","infographics","videos","white-papers")
			 );
			 if(count($conditinalarr)>1){
				$args['tax_query'] =$conditinalarr;
			}
	$query = new WP_Query( $args );
	 $trecord= $query->post_count;
	$tpage= $query->max_num_pages;
?>
<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
<?php $disp_img_box ='';
		if ( has_post_thumbnail()) {
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'resource-thumb'); 
			$disp_img_box = $large_image_url[0];
		}else{ 
			$disp_img_box = get_template_directory_uri().'/images/re1.jpg';
			}  ?>
	<div class="col-sm-12 col-md-4">
		<div class="resc-block">
			<a href="<?php echo get_the_permalink(); ?>"  target="_blank" >
				<div class="resc-block-image">
					<img src="<?php echo $disp_img_box; ?>" alt="resource" class="img-fluid">
					<?php if(get_field( 'resource_video_link' )){ ?>
					<a  class="resc_play" data-width="1200" data-height="768" data-fancybox href="<?php the_field( 'resource_video_link' ); ?>"></a>
					<?php } ?>
					<?php if(get_field( 'resource_video_link_external' )){ ?>
					<a class="resc_play" href="<?php the_field( 'resource_video_link_external' ); ?>" target="_blank"></a>
					<?php } ?>
				</div>
				<span><?php //$term_obj_list = get_the_terms( get_the_ID(), 'resource-category' );
				//echo	$terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));  ?></span>
				<?php if(get_field( 'resource_video_link_external' )){ ?>
					<h6><a class="aa" target="_blank" href="<?php the_field( 'resource_video_link_external' ); ?>"><?php the_title(); ?></a></h6>

				<?php }else{ ?>
					<h6><a class="bb" target="_blank" href="<?php echo  get_the_permalink(); ?>"><?php the_title(); ?></a></h6>
				
				<?php } ?>
			</a>
		</div>
	</div>
	<?php $count++; endwhile; 
	// use reset postdata to restore orginal query
	wp_reset_postdata();
												 

if($tpage>$_REQUEST['setpage']){
	echo '<div class="see-more insights_load_more_remove">
		<a class="link insights_load_more" href="javascript:;" target="">See More</a>
	</div>';
}
wp_die(); 
}

add_action( 'wp_ajax_nopriv_flt_insights_fun', 'flt_insights_fun' );
add_action( 'wp_ajax_flt_insights_fun', 'flt_insights_fun' );




function flt_webinars_fun(){ 
ob_clean();
 
$conditinalarr=array('relation' => 'AND');
$perpage=6;
$setpage=$_REQUEST['setpage'];
 
	$args = array(
		'post_type' => 'resource',
		'resource-category' => 'webinars',
		'posts_per_page'         => $perpage,
		'paged'                  => $setpage,
	);
	$query = new WP_Query( $args );
	 $trecord= $query->post_count;
	$tpage= $query->max_num_pages;
?>
<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
<?php $disp_img_box ='';
		if ( has_post_thumbnail()) {
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'resource-thumb'); 
			$disp_img_box = $large_image_url[0];
		}else{ 
			$disp_img_box = get_template_directory_uri().'/images/re1.jpg';
			}  ?>
	<div class="col-sm-12 col-md-4">
		<div class="resc-block">
			<a href="<?php echo get_the_permalink(); ?>" >
				<div class="resc-block-image">
					<img src="<?php echo $disp_img_box; ?>" alt="resource" class="img-fluid">
					<?php if(get_field( 'resource_video_link' )){ ?>
					<a class="resc_play" data-width="1200" data-height="768" data-fancybox href="<?php the_field( 'resource_video_link' ); ?>"></a>
					<?php } ?>

				</div>
				<span><?php echo esc_html( $term->name ); ?></span>
				<h6><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h6>
			</a>
		</div>
	</div>
	<?php $count++; endwhile; 
	// use reset postdata to restore orginal query
	wp_reset_postdata();

 
												 

if($tpage>$_REQUEST['setpage']){
	echo '<div class="see-more webinars_load_more_remove">
		<a class="link webinars_load_more" href="javascript:;" target="">See More</a>
	</div>';
}
wp_die(); 
}

add_action( 'wp_ajax_nopriv_flt_webinars_fun', 'flt_webinars_fun' );
add_action( 'wp_ajax_flt_webinars_fun', 'flt_webinars_fun' );



add_action( 'wp_ajax_nopriv_flt_insights_fun', 'flt_insights_fun' );
add_action( 'wp_ajax_flt_insights_fun', 'flt_insights_fun' );


function flt_insights_fun_mo(){ 
ob_clean();
 
$conditinalarr=array('relation' => 'AND');
$perpage=6;
$setpage=$_REQUEST['setpage'];
	$args = array(
			'post_type'              => array( 'resource' ),
				'post_status'            => array( 'Publish' ),				 
				'posts_per_page'         => $perpage,
				'paged'                  => $setpage,
				'orderby' => 'date', 
				'order' => 'DESC'				
		 
	);
	$conditinalarr[]= array(
				'taxonomy' => 'resource-category',
				'field' => 'slug',
				'terms' => array("ebooks","infographics","videos","white-papers")
			 );
			 if(count($conditinalarr)>1){
				$args['tax_query'] =$conditinalarr;
			}
	$query = new WP_Query( $args );
	 $trecord= $query->post_count;
	$tpage= $query->max_num_pages;
?>
<?php  while ( $query->have_posts() ) : $query->the_post(); ?>	
	<div class="our-resource-list-block">
		<h4><?php the_title(); ?></h4>
		<div class="date-and-link">
			<div class="date"><?php echo get_the_date('M j, Y'); ?> </div>
			<a target="_blank"  href="<?php echo get_the_permalink();?>" class="read-more">Read More</a>
		</div>
	</div>											
	<?php $count++; endwhile; 
	// use reset postdata to restore orginal query
	wp_reset_postdata();
												 

if($tpage>$_REQUEST['setpage']){
	echo '<div class="see-more insights_load_more_remove_mo">
		<a class="link insights_load_more_mo" href="javascript:;" target="">See More</a>
	</div>';
}
wp_die(); 
}

add_action( 'wp_ajax_nopriv_flt_insights_fun_mo', 'flt_insights_fun_mo' );
add_action( 'wp_ajax_flt_insights_fun_mo', 'flt_insights_fun_mo' );



function flt_webinars_fun_mo(){ 
ob_clean();
 
$conditinalarr=array('relation' => 'AND');
$perpage=6;
$setpage=$_REQUEST['setpage'];
 
	$args = array(
		'post_type' => 'resource',
		'resource-category' => 'webinars',
		'posts_per_page'         => $perpage,
		'paged'                  => $setpage,
	);
	$query = new WP_Query( $args );
	 $trecord= $query->post_count;
	$tpage= $query->max_num_pages;
?>
<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
 
	<div class="our-resource-list-block">
		<h4><?php the_title(); ?></h4>
		<div class="date-and-link">
			<div class="date"><?php echo get_the_date('M j, Y'); ?> </div>
			<a  target="_blank"  href="<?php echo get_the_permalink();?>" class="read-more">Read More</a>
		</div>
	</div>
	<?php $count++; endwhile; 
	// use reset postdata to restore orginal query
	wp_reset_postdata();

 
												 

if($tpage>$_REQUEST['setpage']){
	echo '<div class="see-more webinars_load_more_remove_mo">
		<a class="link webinars_load_more_mo" href="javascript:;" target="">See More</a>
	</div>';
}
wp_die(); 
}

add_action( 'wp_ajax_nopriv_flt_webinars_fun_mo', 'flt_webinars_fun_mo' );
add_action( 'wp_ajax_flt_webinars_fun_mo', 'flt_webinars_fun_mo' );


function flt_news_fun_mo(){ 
ob_clean();
 
$conditinalarr=array('relation' => 'AND');
$perpage=6;
$setpage=$_REQUEST['setpage'];
 
	$args = array(
		'post_type' => 'news',
 
		'posts_per_page'         => $perpage,
		'paged'                  => $setpage,
	);
	$query = new WP_Query( $args );
	 $trecord= $query->post_count;
	$tpage= $query->max_num_pages;
?>
<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
 
	<div class="our-resource-list-block">
	<h4><?php the_title(); ?></h4>
	<div class="date-and-link">
		<div class="date"><?php echo get_the_date('M j, Y'); ?> </div>
		<a  target="_blank"  href="<?php echo get_the_permalink();?>" class="read-more">Read More</a>
	</div>
</div>
	<?php $count++; endwhile; 
	// use reset postdata to restore orginal query
	wp_reset_postdata();

 
												 

if($tpage>$_REQUEST['setpage']){
	echo '<div class="see-more news_load_more_remove_mo">
		<a class="link news_load_more_mo" href="javascript:;" target="">See More</a>
	</div>';
}
wp_die(); 
}

add_action( 'wp_ajax_nopriv_flt_news_fun_mo', 'flt_news_fun_mo' );
add_action( 'wp_ajax_flt_news_fun_mo', 'flt_news_fun_mo' );




function event_fun(){ 
ob_clean();
 
$perpage=12;
$setpage=$_REQUEST['setpage'];
// WP_Query arguments
$args = array(
	'post_type'              => array( 'event' ),
	'post_status'            => array( 'publish' ),
	'posts_per_page'         => $perpage,
	'paged'                  => $setpage,
 
);

$query = new WP_Query( $args );

 $trecord= $query->post_count ;
 $tpage= $query->max_num_pages;
// The Loop
if ( $query->have_posts() ) {
 
	while ( $query->have_posts() ) {
	$query->the_post();
 
?>
 

 <div class="col-xs-12 col-sm-12 col-lg-12 evetnspac">
		   <div class="newteam_box">
			<a href="<?php echo get_permalink(); ?>" class="newteam_link" target="_blank"></a>
			<?php
				$disp_img_box ='';
				if ( has_post_thumbnail()) {
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
					 $disp_img_box = $large_image_url[0];
				}else{
					$disp_img_box = site_url().'/wp-content/uploads/2017/07/Header-7.jpg';
					}
			  ?>
			<div class="event_main_image">
				<img src="<?php echo $disp_img_box; ?>" alt="">
			</div>
			<div class="event_main_info">
			<h5 class="match" data-mh="resource-news-title"><a href="<?php echo get_permalink(); ?>"  target="_blank"><?php echo get_the_title();?></a></h5>
			<?php if(get_field( 'tel_evetn_speaker_listing_short_text' )){ ?>
			<p><?php the_field( 'tel_evetn_speaker_listing_short_text' ); ?></p>
			<?php } ?>
			<div class="resource_news_date">
			
				<span><?php the_field( 'event_date' ); ?></span> 
				<p><?php the_field( 'event_time' ); ?></p> 
				<a target="_blank" class="btn btn-primary evnt-btn"	href="<?php echo get_permalink();?>">Learn More</a>
			</div>
			
				</div>
		</div>
	 
</div>
  
  
<?php
	
}

 
wp_reset_query();	
}

if($tpage>$_REQUEST['setpage']){
	echo '<div class="see-more event_load_more_remove_mo">
		<a class="link event_result_more_click" href="javascript:;" onclick="flt_event(\'append\')" target="">See More</a>
	</div>';
}

wp_die(); 
 }
 // creating Ajax call for WordPress
add_action( 'wp_ajax_nopriv_event_fun', 'event_fun' );
add_action( 'wp_ajax_event_fun', 'event_fun' );




function client_event_fun(){ 
ob_clean();
 
$perpage=12;
$setpage=$_REQUEST['setpage'];
// WP_Query arguments
$args = array(
	'post_type'              => array( 'client-event' ),
	'post_status'            => array( 'publish' ),
	'posts_per_page'         => $perpage,
	'paged'                  => $setpage,
 
);

$query = new WP_Query( $args );

 $trecord= $query->post_count ;
 $tpage= $query->max_num_pages;
// The Loop
if ( $query->have_posts() ) {
 
	while ( $query->have_posts() ) {
	$query->the_post();
 
?>
 
<div class="col-xs-12 col-sm-12 col-lg-12 evetnspac">
		   <div class="newteam_box">
			<a href="<?php echo get_permalink(); ?>" class="newteam_link" target="_blank"></a>
			<?php
				$disp_img_box ='';
				if ( has_post_thumbnail()) {
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
					 $disp_img_box = $large_image_url[0];
				}else{
					$disp_img_box = site_url().'/wp-content/uploads/2017/07/Header-7.jpg';
					}
			  ?>
			<div class="event_main_image">
				<img src="<?php echo $disp_img_box; ?>" alt="">
			</div>
			<div class="event_main_info">
			<h5 class="match" data-mh="resource-news-title" ><a href="<?php echo get_permalink(); ?>"  target="_blank"><?php echo get_the_title();?></a></h5>
			<?php if(get_field( 'client_event_listing_short_text' )){ ?>
			<p><?php the_field( 'client_event_listing_short_text' ); ?></p>
			<?php } ?>
			<div class="resource_news_date">
				
				<span><?php the_field( 'client_event_date' ); ?></span> 
				<p><?php the_field( 'client_event_time' ); ?></p> 
				<a class="btn btn-primary evnt-btn" target="_blank"  href="<?php echo get_permalink();?>">Learn More</a>	
			</div>
		
			</div>
		</div>
	 
</div>
  
<?php
	
}

 
wp_reset_query();	
}

if($tpage>$_REQUEST['setpage']){
	echo '<div class="see-more client_event_load_more_remove_mo">
		<a class="link client_event_result_more_click" href="javascript:;" onclick="flt_clinet_event(\'append\')" target="">See More</a>
	</div>';
}

wp_die(); 
 }
 // creating Ajax call for WordPress
add_action( 'wp_ajax_nopriv_client_event_fun', 'client_event_fun' );
add_action( 'wp_ajax_client_event_fun', 'client_event_fun' );
?>
