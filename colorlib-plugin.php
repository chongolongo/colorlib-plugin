<?php 
/*
Plugin Name: Colorlib Plugin
Description: Quick Custom Solution Plugin for Implementing Custom Solution.
Version: 1.0.0
Author: Movin
Author URI: http://freewptp.com/
License: GNU General Public License (Version 2 - GPLv2)
*/


function colorlib_change_translate_text( $translations, $text, $context, $domain ) {
	if (strpos($text,'Read More') !== false) {
            $text = str_replace("Read More","Leer más", $text);
        } else if (strpos($text,'Search') !== false) {
            $text = str_replace("Search","Buscar", $text);
        }

	return $text;
}
add_filter( 'gettext_with_context', 'colorlib_change_translate_text', 99, 4 );

function colorlib_change_translate_text2( $translated_text, $text, $domain ) {
	if (strpos($translated_text,'Read More') !== false) {
            $translated_text = str_replace("Read More","Leer más", $translated_text);
        } else if (strpos($translated_text,'Search') !== false) {
            $translated_text = str_replace("Search","buscar", $translated_text);
        }

	return $translated_text;
}
add_filter( 'gettext', 'colorlib_change_translate_text2', 99, 4 );
