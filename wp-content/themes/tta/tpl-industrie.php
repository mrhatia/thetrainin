<?php
/**
 * Template Name: Industries Template
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

<section class="main-banner text-center gradient-color-banner real_estate-main">
   <div class="container">

		<div class="top-label">Industries</div>
		<div class="main-title"><h1>Some heading realted to Industries</h1></div>
        <div class="real_estate-select">
		<?php 
			$taxonomies = get_terms( array(
				'taxonomy' => 'casestudy-industries',
				'hide_empty' => false
			) );
			 
			if ( !empty($taxonomies) ) :
				$output = '<select name="casestudy_industries" class="casestudy_industries" id="casestudy_industries">';
				$output .= '<option value="">All</option>';
				foreach( $taxonomies as $category ) {
					 
						 
						$output.= '<option value="'. esc_attr( $category->slug ) .'">
								'. esc_html( $category->name ) .'</option>';
						 
					 
				}
				$output.='</select>';
				echo $output;
			endif;
		?>
            
        </div>

		<div id="catagory_content">
       
		</div>

   </div>
</section>

<section class="success-story">
	<div class="container">
	<div class="section-title">


	<span>	Our</span>
	<h2>Success Stories</h2>
	</div>

	<div class="row" id="industries_result">

	 

	</div>


	</div>

	</section>
	
	<script type="text/javascript">

$( ".casestudy_industries" ).change(function() {
  flt_industries(1);
});


var setpage=1;
flt_industries(setpage);
function flt_industries(setpage){
	 	var selectedVal = $("#casestudy_industries option:selected").val();
jQuery("#industries_result").fadeIn(400).html('<img src="<?php echo get_template_directory_uri().'/images/ripple.gif'; ?>" align="absmiddle" alt="Loading..." >');
 jQuery.ajax({
	url:'<?php echo site_url(); ?>/wp-admin/admin-ajax.php',
	type: "post",
	data: {
		action: 'flt_industries',
		setpage: setpage,
		casestudy_industries: selectedVal,
		 
	 },
	success: function(data){
		
		
		
		if(data.cat_block.category_name!=null){
			var catcontent=' <div class="real_estate--data" ><div class="real_estate-tab"> <div class="real_estate-title"><h1 >'+data.cat_block.category_name+'</h1></div><div class="real_estate-content"> <p>'+data.cat_block.category_description+'</p></div></div></div>';
			jQuery("#catagory_content").html(catcontent);
			
		}else{
			jQuery("#catagory_content").html("");
		}			
		console.log(data.post_block.length);
		if ( data.post_block.length != 0 ) {
			var catcontent='';
					$.each(data.post_block, function(idx, obj) {
				//alert(obj.ID);
				 
				var setimg="";
				if(obj.image){
					setimg='<img src="'+obj.image+'" alt="logo" class="img-fluid">';
				}
				
				  catcontent +='<div class="col-sm-12 col-md-6 col-lg-4"><div class="story-block"><div class="s-img">'+setimg+'</div><div class="detail"><p>'+obj.content+'</p><a href="'+obj.permalink+'" class="btn btn-border-blue">Read More</a></div></div></div>';
				
				});
			jQuery("#industries_result").html(catcontent);
		}
		//jQuery("#industries_result").html(data);
		 
		//jQuery("#flash").hide();
		
	 },
	error:function(){
		 console.log('failure!');
		//$("#result").html('There is error while submit'); 
	}                
	//Your code for AJAX Ends
 });   
}
</script>
<?php 
get_footer(); ?>
