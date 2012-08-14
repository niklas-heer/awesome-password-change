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
 
	session_start();
	header('Cache-control: private'); // IE 6 FIX
	
	include('config/config.php');
	
	if (!$lang_by_user) {
 		
	 	$_SESSION['lang'] = $language;
	 	setcookie("lang", $language, time() + (3600 * 24 * 30));				
 	}
	
	
	if(isSet($_GET['lang']))
	{
		$lang = $_GET['lang'];
	
		// register the session and set the cookie
		$_SESSION['lang'] = $lang;
	
		setcookie("lang", $lang, time() + (3600 * 24 * 30));
	}
	else if(isSet($_SESSION['lang']))
	{
		$lang = $_SESSION['lang'];
	}
	else if(isSet($_COOKIE['lang']))
	{
		$lang = $_COOKIE['lang'];
	}
	else
	{
		$lang = 'de';
	}
	
	switch ($lang) {
	  case 'en':
	  $lang_file = 'lang.en.php';
	  break;
	
	  case 'de':
	  $lang_file = 'lang.de.php';
	  break;
	
	  default:
	  $lang_file = 'lang.de.php';
	
	}

	include_once 'lang/'.$lang_file;
?>