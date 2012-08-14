<?php
/**
 * Awesome Password Change
 *
 * LICENSE: This work is licensed under:
 * Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License.
 * Link: http://creativecommons.org/licenses/by-nc-sa/3.0/
 *
 * @author     Niklas Heer <niklas.heer@me.com>
 * @copyright  2012 - http://niklas-heer.de
 * @license    http://creativecommons.org/licenses/by-nc-sa/3.0/  CC BY-NC-SA
 * @link       http://niklas-heer.de
 * @version	   1.0
 */
 // JQuery Valid8 is part of this script and was developed by jan.jarfalk(jan.jarfalk@unwrongest.com) see jquery.valid8.source.js for further information
 
 	include("config.php");
 	
 	if ($production) {
	 	ini_set('display_errors', 'Off');  			
	 	ini_set('display_startup_errors', 'Off');	
	 	error_reporting(0);					
 	}
 	else {
	 	ini_set('display_errors', 'On');  			
	 	ini_set('display_startup_errors', 'On');	
	 	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);	
 	}

 	

?>