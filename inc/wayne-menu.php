<?php

function register_my_menus() {
	register_nav_menus(
	  array(
		'header-menu' => __( 'Header Menu', 'wayne-blog-news' ),
		'mobile-menu' => __( 'Mobile Menu', 'wayne-blog-news' )
	  )
	);
  }
  add_action( 'init', 'register_my_menus' );


function wayne_header_menu() {
	$menu_name = 'header-menu';
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);
		$menu_list = '<div class="row" id="wayne-desktop-menu">
		<div class="col-md">
		<hr>
		</div>';
		$color_i = 0;
		$wayne_parent_menu = 0;
		$first_item = true;
		$menu_color_check = false;
		$menu_color = get_option('wayne_menu_color');
		$colorful_list = ['primary', 'danger', 'warning', 'success', 'primary', 'danger', 'warning', 'success', 'primary', 'danger', 'warning', 'success'];
		$color_list = ['secondary', 'info', 'light', 'dark'];
		if(in_array($menu_color, $colorful_list) || in_array($menu_color, $color_list)){
			$menu_color_check = true;
		}
		foreach ((array) $menu_items as $key => $menu_item) {
			if($menu_color_check){
				$color = $menu_color;
			}
			else{
				$color = $colorful_list[$color_i];
			}
			$title = $menu_item->title;
			$url = $menu_item->url;
			$target = $menu_item->target;
			$menu_item_parent = $menu_item->menu_item_parent;
			$db_id = $menu_item->db_id;
			if($menu_item_parent == 0){
				if($wayne_parent_menu == 1){
					$menu_list .= '</ul>';
					$menu_list .= '</div>';
				}
				elseif($first_item){
					
				}
				else{
					$menu_list .= '</div>';
				}
				if($first_item){
					$menu_list .= '<div class="dropdown py-1 py-md-0">';
					$first_item = false;
				}
				else{
					$menu_list .= '<div class="dropdown pl-3 py-1 py-md-0 pl-md-0">';
				}
				if($url == '#'){
					$menu_list .= "<button db_id='$db_id' type='button' data-toggle='dropdown' class='btn btn-outline-$color header-menu-item'>$title</button>";
				}
				else{
					if($target){
						$menu_list .= "<button db_id='$db_id' type='button' data-toggle='dropdown' class='btn btn-outline-$color header-menu-item' onClick=\"window.open('$url','$title')\" url=\"$url\">$title</button>";
					}
					else{
						$menu_list .= "<button db_id='$db_id' type='button' data-toggle='dropdown' class='btn btn-outline-$color header-menu-item' onclick='window.location.href = \"$url\";' url=\"$url\">$title</button>";
					}
				}
				$color_i += 1;
				$wayne_parent_menu = 0;
			}
			else{
				if($wayne_parent_menu == 0){
					$menu_list .= "<ul id='$menu_item_parent' class='dropdown-menu $menu_item_parent menu-dropdown'>";
				}
				else{
					$menu_list .= "<br>";
				}
				$wayne_parent_menu = 1;
				$menu_list .= "<a class ='menu-dropdown-item' href=$url>$title</a>";
			}
			
		}
		if (get_option('wayne_search_box') != 'disable'){ 
			$menu_list .= '</ul><a href="#" id="arama-yap" class="arama-yap ml-3 pl-md-0"><i class="fas fa-search text-danger"></i></a>';
		  } 
		  $menu_list .= '</div>
		  <div class="col-md">
			<hr>
		  </div>
		  </div>';
	 } else {

	}
	
	echo $menu_list;
}


function wayne_mobile_menu() {
	$menu_name = 'mobile-menu';
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);
		$menu_list = '<div class="pos-f-t">
		<nav class="navbar navbar-light bg-light mb-3">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#wayne-menu" aria-controls="wayne-menu" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>';
		if (get_option('wayne_search_box') != 'disable'){ 
			$menu_list .= '<a href="#" id="arama-yap" class="arama-yap ml-3 pl-md-0"><i class="fas fa-search text-danger"></i></a>';
		  } 
		$menu_list .= '</nav>
		<div class="collapse" id="wayne-menu">
		<div class="bg-light p-4">
		<ul class="navbar-nav mr-auto">';
		$color_i = 0;
		$wayne_parent_menu = 0;
		$first_item = true;
		$menu_color = get_option('wayne_menu_color');
		$colorful_list = ['primary', 'danger', 'warning', 'success', 'primary', 'danger', 'warning', 'success', 'primary', 'danger', 'warning', 'success'];
		$color_list = ['secondary', 'info', 'light', 'dark'];
		if(in_array($menu_color, $colorful_list) || in_array($menu_color, $color_list)){
			$menu_color_check = true;
		}
		else{
			$menu_color_check = false;
		}
		foreach ((array) $menu_items as $key => $menu_item) {
			if($menu_color_check){
				$color = $menu_color;
			}
			else{
				$color = $colorful_list[$color_i];
			}
			$title = $menu_item->title;
			$url = $menu_item->url;
			$target = $menu_item->target;
			$menu_item_parent = $menu_item->menu_item_parent;
			$db_id = $menu_item->db_id;
			if($menu_item_parent == 0){
				if($wayne_parent_menu == 1){
					$menu_list .= '</ul>';
					$menu_list .= '</div>';
				}
				elseif($first_item){
					
				}
				else{
					$menu_list .= '</div>';
				}
				if($first_item){
					$menu_list .= '<div class="dropdown py-1 py-md-0">';
					$first_item = false;
				}
				else{
					$menu_list .= '<div class="dropdown py-1 py-md-0">';
				}
				if($url == '#'){
					$menu_list .= "<button db_id='$db_id' type='button' data-toggle='dropdown' class='btn btn-outline-$color header-menu-item w-100'>$title</button>";
				}
				else{
					if($target){
						$menu_list .= "<button db_id='$db_id' type='button' data-toggle='dropdown' class='btn btn-outline-$color header-menu-item w-100' onClick=\"window.open('$url','$title')\" url=\"$url\">$title</button>";
					}
					else{
						$menu_list .= "<button db_id='$db_id' type='button' data-toggle='dropdown' class='btn btn-outline-$color header-menu-item w-100' onclick='window.location.href = \"$url\";' url=\"$url\">$title</button>";
					}
				}
				$color_i += 1;
				$wayne_parent_menu = 0;
			}
			else{
				if($wayne_parent_menu == 0){
					$menu_list .= '<div class="dropdown py-1 py-md-0">';
					if($target){
						$menu_list .= "<button style='width: 80% !important; float: right; margin-right: 0px;' db_id='$db_id' type='button' data-toggle='dropdown' class='pl-5 btn btn-outline-$color header-menu-item w-100' onClick=\"window.open('$url','$title')\" url=\"$url\">$title</button>";
					}
					else{
						$menu_list .= "<button style='width: 80% !important; float: right; margin-right: 0px;' db_id='$db_id' type='button' data-toggle='dropdown' class='pl-5 btn btn-outline-$color header-menu-item w-100' onclick='window.location.href = \"$url\";' url=\"$url\">$title</button>";
					}
					$menu_list .= '</div>';
				}
				else{
					$menu_list .= "<br>";
				}
				$wayne_parent_menu = 1;
			}
			
		}
		$menu_list .= '</div></div></div>';
	 } else {

	}
	echo $menu_list;
}
?>