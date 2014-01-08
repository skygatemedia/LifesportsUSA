<?php
/*
Plugin Name: Lightbox Pop
Plugin URI: http://xyzscripts.com/wordpress-plugins/lightbox-pop/
Description: This plugin allows you to create a lightbox popup with custom contents. You can customize the popup display by configuring various settings such as  position settings (height, width, top,left), display logic settings (time delay after page load, number of pages to browse, lightbox repeat interval) and style settings(z-index, overlay opacity, color, border etc). The plugin supports automatic and manual (shortcode) lightbox display.
Version: 2.1
Author: xyzscripts.com
Author URI: http://xyzscripts.com/
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

if ( !function_exists( 'add_action' ) ) 
{
	echo "Hi there!  I'm just a plugin, not much I can do when called directly.";
	exit;
}

ob_start();
error_reporting(0);
define('XYZ_LBX_PLUGIN_FILE',__FILE__);

require( dirname( __FILE__ ) . '/xyz-functions.php' );

require( dirname( __FILE__ ) . '/admin/install.php' );



require( dirname( __FILE__ ) . '/admin/menu.php' );

require( dirname( __FILE__ ) . '/create-lightbox.php' );

require( dirname( __FILE__ ) . '/shortcode-handler.php' );

require( dirname( __FILE__ ) . '/admin/destruction.php' );

if(get_option('xyz_credit_link')=="lbx"){

	add_action('wp_footer', 'xyz_lbx_credit');

}
function xyz_lbx_credit() {
	$content = '<div style="clear:both;width:100%;text-align:center; font-size:11px; "><a target="_blank" href="http://xyzscripts.com/wordpress-plugins/lightbox-pop/details">Popups</a> Powered By : <a target="_blank" title="PHP Scripts & Programs" href="http://www.xyzscripts.com" >XYZScripts.com</a></div>';
	echo $content;
}

?>