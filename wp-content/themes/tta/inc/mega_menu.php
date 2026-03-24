<?php
class TTA_Menu_Walker extends Walker_Nav_Menu
{
	function start_lvl(&$output, $depth = 0, $args = null)
	{
	}
	function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
	{

		//nav-item dropdown
		if ($depth == 0) {

			//nav-item dropdown
			//print_r($item->classes);
			if (in_array('nav-item dropdown', $item->classes)) {
			}
			//print_r($item->ID);
			$output .= "<li class='nav-item dropdown'>";
			$output .= '<a class="nav-link dropdown-toggle" href="' . $item->url . '" id="navbarDropdown'.$item->ID.'" role="button" data-bs-toggle="dropdown" aria-expanded="false" >';

			$output .= $item->title;
			
			
			$output .= '</a>';
			$setimg="";
			 if ( get_field( 'header_sub_menu_img_dotes',$item->ID  ) == 1) { 
				$setimg=get_template_directory_uri()."/images/menu-pattern.png";
				$setimg='background: url("'.$setimg.'");';
			 }
			$output .='<div class="dropdown-menu" aria-labelledby="navbarDropdown'.$item->ID.'">
							<div class="yamm-content"  style="'.$setimg.'" >
								<div class="row">
									<div class="col-sm-12 col-md-7">
										<div class="menu-left">
											<div class="row">';
											  if ( have_rows( 'header_product_menu',$item->ID ) ) :  
												 while ( have_rows( 'header_product_menu',$item->ID ) ) : the_row();  
													 $link=get_sub_field( 'header_product_link' );
													  $header_product_image = get_sub_field( 'header_product_image' ); 
													  $setimg='';
													 if ( $header_product_image ) {  
														 $setimg='<img class="img-fluid" src="'.$header_product_image['url'].'" alt="'.$header_product_image['alt'].'" />';
													 }  
													 $setlink='#';
												 if(!empty($link)){
													 $setlink=$link; 
												 }
													
													$output .='<div class="col-sm-12 col-md-4">
													<a href="'.$setlink.'" class="menu-block">'.$setimg.'														 
														<h6>'. get_sub_field( 'header_product_title' ) .'</h6>
														<p>'.get_sub_field( 'header_product_short_content' ).'</p>
													</a>
												</div>';
													
												  endwhile;  
											 else :  
											 endif;  
												  $submenunm .=get_field( 'header_select_child_menu',$item->ID );
											$output .='</div>
										</div>
									</div>
									<div class="col-sm-12 col-md-5">
										<div class="menu-right">
											<h4 class="m-title">'.get_field( 'header_child_menu_title' ,$item->ID).'</h4>
											<div class="row">
												<div class="col-sm-12 col-md-6">';
									
												$menu_name = $submenunm;
if ( !empty($menu_name) ) {
    $menu = wp_get_nav_menu_object( $menu_name );
  
    $menu_items = wp_get_nav_menu_items($menu->term_id);
	
    $menu_list = '';
    $count = 0;
    $submenu = false;$cpi=get_the_id();
    foreach( $menu_items as $current ) {
        if($cpi == $current->object_id ){if ( !$current->menu_item_parent ) {$cpi=$current->ID;}else{$cpi=$current->menu_item_parent;}$cai=$current->ID;break;}
    }
	 $menu_list .= '<ul>';
	 $im1=1;
    foreach( $menu_items as $menu_item ) {
		if( $im1<=7){
        $link = $menu_item->url;
        $title = $menu_item->title;
        $menu_item->ID==$cai ? $ac2=' current_menu22' : $ac2='';
        if ( !$menu_item->menu_item_parent ) {
            $parent_id = $menu_item->ID;$parent_id==$cpi ? $ac=' current_item22' : $ac='';
            if(!empty($menu_items[$count + 1]) && $menu_items[ $count + 1 ]->menu_item_parent == $parent_id ){//Checking has child
                $menu_list .= '<li class="sub-menu" ><a href="'.$link.'"   >'.$title.'</a>';
				$im1++;
            }else{
				$im1++;
                $menu_list .= '<li >' ."\n";
				$menu_list .= '<a href="'.$link.'"  >'.$title.'</a>' ."\n";
            }
             
        }
        if ( $parent_id == $menu_item->menu_item_parent ) {
            if ( !$submenu ) {
                $submenu = true;
                $menu_list .= '<ul class="sub-dropdown" >' ."\n";
            }
            $menu_list .= '<li  >' ."\n";
            $menu_list .= '<a href="'.$link.'"  >'.$title.'</a>' ."\n";
            $menu_list .= '</li>' ."\n";
            if(empty($menu_items[$count + 1]) || $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu){
                $menu_list .= '</ul>' ."\n";
                $submenu = false;
            }
        }
        if (empty($menu_items[$count + 1]) || $menu_items[ $count + 1 ]->menu_item_parent != $parent_id ) { 
            $menu_list .= '</li>' ."\n";      
            $submenu = false;
        }
        $count++;
		}
    }
	 $menu_list .= '</ul>';
}  				 
													$output .= ''.$menu_list .' 
												</div>';
												if($im1>7){
												$output .= '<div class="col-sm-12 col-md-6">';
									
												$menu_name = $submenunm;
if ( !empty($menu_name) ) {
    $menu = wp_get_nav_menu_object( $menu_name );
  
    $menu_items = wp_get_nav_menu_items($menu->term_id);
	
    $menu_list1 = '';
    $count = 0;
    $submenu = false;$cpi=get_the_id();
    foreach( $menu_items as $current ) {
        if($cpi == $current->object_id ){if ( !$current->menu_item_parent ) {$cpi=$current->ID;}else{$cpi=$current->menu_item_parent;}$cai=$current->ID;break;}
    }
	 $menu_list1 .= '<ul>';
	 $im=1;
    foreach( $menu_items as $menu_item ) {
	 
        $link = $menu_item->url;
        $title = $menu_item->title;
        $menu_item->ID==$cai ? $ac2=' current_menu22' : $ac2='';
        if ( !$menu_item->menu_item_parent ) {
            $parent_id = $menu_item->ID;$parent_id==$cpi ? $ac=' current_item22' : $ac='';
            if(!empty($menu_items[$count + 1]) && $menu_items[ $count + 1 ]->menu_item_parent == $parent_id ){//Checking has child
              if($im>7){
			  $menu_list1 .= '<li class="sub-menu" ><a href="'.$link.'"   >'.$title.'</a>';
			  }
				 $im++;
            }else{
				  if($im>7){
                $menu_list1 .= '<li >' ."\n";
				$menu_list1 .= '<a href="'.$link.'"  >'.$title.'</a>' ."\n";
				 }
				 $im++;
            }
             
        }
        if ( $parent_id == $menu_item->menu_item_parent ) {
            if ( !$submenu ) {
                $submenu = true;
				 if($im>7){
                $menu_list1 .= '<ul class="sub-dropdown" >' ."\n";
				 }
            }
			 if($im>7){
            $menu_list1 .= '<li  >' ."\n";
            $menu_list1 .= '<a href="'.$link.'"  >'.$title.'</a>' ."\n";
            $menu_list1 .= '</li>' ."\n";
			 }
            if(empty($menu_items[$count + 1]) || $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu){
				 if($im>7){
                $menu_list1 .= '</ul>' ."\n";
				 }
                $submenu = false;
            }
        }
        if (empty($menu_items[$count + 1]) || $menu_items[ $count + 1 ]->menu_item_parent != $parent_id ) { 
		 if($im>7){
            $menu_list1 .= '</li>' ."\n";  
		 }			
            $submenu = false;
        }
        $count++;
		 
		 
    }
	 $menu_list1 .= '</ul>';
} 				 
	$im=0;												$output .= ''.$menu_list1 .' 
												</div> ';
												}
											$output .= '</div>
										</div>
									</div>
								</div>
							</div>
						</div>';
		}
	}

	function end_el(&$output, $item, $depth = 0, $args = null)
	{
	}

	function end_lvl(&$output, $depth = 0, $args = null)
	{
	}
}
