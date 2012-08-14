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
 
	// Special setting
	$md5_prefix = "{PLAIN-MD5}";			// You want to change this, if your password has a diffrent or not a prefix at all (just leave blank)
	
	// set status
	$production = true; 					// Change this to false if you want to debug
	$lang_by_user = true;					// Let user choose language, if set to false define $lang!
	$language = "de";						// Language of site when user cannot choose
	
			
	// Set up Database varibales.
	// Edit to your needs
	$db_adress 		= "localhost"; 			// enter ip adress
	$db_user 		= "myuser"; 			// enter username for connection to database
	$db_pw 			= "mypassword";			// enter usernames password for database
	$db_name 		= "mydbname";			// enter database name in which the information are stored
	$db_table 		= "mytablename";		// enter the name of the table where the account data is stored
	$db_user_row 	= "username";			// enter name of row in which the username/id or everything the user will enter to identify himself/herself
	$db_user_pw_row = "password";			// enter the name of the row in which the password is stored
	
	// Site Setup
	// Edit to your needs
	$page_title 		= "WeDevelop Mail Passwort ändern";								// Page Title
	$meta_keywords	 	= "password, reset, we-develop, mail";							// Keywords for the site
	$meta_description 	= "Ändern Sie ihr Mail-Passwort von We-Develop.de";				// short discription for the site
	$meta_author 		= "Niklas Heer";												// Author of the site
	$meta_contact 		= "niklas.heer@me.com";											// Contact mail for the site	

?>