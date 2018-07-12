<?php
/*
Plugin Name: Area de sistemas
Plugin URI: http://localhost:8080/wordpress/wp-admin/plugins.php
Description: Este es mi primer plugin
Author: Brenda y susana
Version: 1.0
Author URI: http://localhost:8080/wordpress
Licence: MIT
*/

add_filter("the_title","sis_filtroTitulo");

if(!function_exists("sis_filtroTitulo")){
	function sis_filtroTitulo($text){
		return "WIN ".$text;
	}
}




?>