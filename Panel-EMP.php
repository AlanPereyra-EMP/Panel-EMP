<?php
/*
Plugin Name: Panel EMP
Plugin URI: https://empralidad.com.ar/chat-emp
Description: Chat EMP es un plugin para WordPress que añade un sistema de mensajería mediante un shortcode.
Author: Empralidad
Author URI: https://empralidad.com.ar/
Text Domain: pemp
License: Attribution-NonCommercial-NoDerivatives 3.0 IGO
License URI: https://creativecommons.org/licenses/by-nc-nd/3.0/igo/legalcode
Version: 1.1.1
*/
if ( ! defined( 'ABSPATH' ) ){
	exit;
}


require_once plugin_dir_path(__FILE__).'/includes/admin-panel.php';
require_once plugin_dir_path(__FILE__).'/includes/frontend.php';
require_once plugin_dir_path(__FILE__).'/includes/roles.php';
?>
