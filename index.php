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
 
 
	include('config/config.php');
	include('common.php');
	include('config/helper.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>		
		<title><?php echo($page_title); ?></title>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<meta name="keywords" content="<?php echo($meta_keywords); ?>" />
		<meta name="description" content="<?php echo($meta_description); ?>" />
		<meta name="author" content="<?php echo($meta_author); ?>" />
		<meta name="contact" content="<?php echo($meta_contact); ?>" />
		<meta name="copyright" content="copyright© 2012 by Niklas Heer" />

		<link href="dependencies/screen.css" type="text/css" rel="stylesheet" />
		
	</head>
		
	<body>
		<div class="warp-title">
		<span class="label"><?php echo $lang['LABEL_TITLE']; ?></span>
		</div>
		
		<?php if ($lang_by_user) { ?>
		<div id="languages">
			<a href="index.php?lang=en"><img src="images/en.png" /></a>
			<a href="index.php?lang=de"><img src="images/de.png" /></a>
		</div>
		<?php } ?>
		
		<div class="form">
			<form id="form1"  name="form1" method="post" action="index.php">
			<p>
				<label><?php echo $lang['LABEL_USERNAME']; ?></label>
				<span class="w">
					<input tabindex="1" class="input" id="inputEmail" type="text" name="username"/>
				</span>
			</p>
			<p>
				<label><?php echo $lang['LABEL_OLD_PW']; ?></label>
				<span class="w">
					<input tabindex="2" class="input" id="oldPassword" type="password" name="password"/>

				</span>
			</p>
						
			<p>
				<label><?php echo $lang['LABEL_NEW_PW']; ?></label>
				<span class="w">
					<input tabindex="3" class="input" id="inputPassword" type="password" name="newpassword" />

				</span>
			</p>
			<p>
				<label><?php echo $lang['LABEL_CONFIRM_PW']; ?></label>
				<span class="w">
					<input tabindex="4" class="input" id="inputConfirmPassword" type="password" name="confirmnewpassword" />
				</span>
			</p>

			
			<p>
				<input type="submit" value="<?php echo $lang['BTN_TEXT']; ?>">				
			</p>
			</form>
		</div>
		
		<script src="dependencies/jquery-1.3.2.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery.valid8.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			// <![CDATA[	
			$(document).ready(function(){				
				
				// Set focus to first input
				$('#inputUsername').focus();
				
				// Custom validator (checks if password == confirm password)
				function confirmPassword(args){
					if(args.password == args.check)
						return {valid:true}
					else
						return {valid:false, message:'<?php echo $lang['ERROR_PW_NOT_MATCH']; ?>'}
				}
				
				// Username is required
				$('#inputPassword, #inputUsername').valid8();
				
				// Confirm password must match Password
				$('#inputConfirmPassword').valid8({
					regularExpressions: [
						{expression: /^.+$/, errormessage: '<?php echo $lang['NEEDED']; ?>'}
					],
					jsFunctions:[
						{ 'function': confirmPassword, 'values': function(){
							return {password: $('#inputPassword').val(), check: $('#inputConfirmPassword').val()}
						}}
					]
				});
				
				$('#oldPassword').valid8({
					regularExpressions: [
						{expression: /^.+$/, errormessage: '<?php echo $lang['NEEDED']; ?>'}
					]
				});
				$('#inputPassword').valid8({
					regularExpressions: [
						{expression: /^.+$/, errormessage: '<?php echo $lang['NEEDED']; ?>'}
					]
				});
				
				$('#inputPolicy').valid8();
				
				$('#inputEmail').valid8({
					regularExpressions: [
						{expression: /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+(aero|asia|biz|cat|com|coop|edu|gov|info|int|jobs|mil|mobi|museum|name|net|org|pro|tel|travel.ac|ad|ae|af|ag|ai|al|am|an|ao|aq|ar|as|at|au|aw|ax|az|ba|bb|bd|be|bf|bg|bh|bi|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|cr|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|ee|eg|er|es|et|eu|fi|fj|fk|fm|.fo|fr|ga|gb|gd|ge|gf|gg|gh|gi|gl|gm|gn|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|.il|im|in|io|iq|ir|is|it|je|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|mv|mw|mx|my|mz|na|nc|ne|nf|ng|ni|nl|no|np|nr|nu|nz|om|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|ps|pt|pw|py|qa|re|ro|rs|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tl|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)\b$/, errormessage: '<?php echo $lang['MAIL_NOT_VAILD']; ?>'}
					]
				});				
			});	
			// ]]>
		</script>
		
	</body>
</html>

<?php	
	echo "<br>";
	// Only execute script when a post action was performed
 	if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['newpassword']) && isset($_POST['confirmnewpassword'])){
 		// Only execute script when there is enough data
		if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['newpassword']) && !empty($_POST['confirmnewpassword'])) {
			
			// Connect to Database
			$con = mysql_connect($db_adress,$db_user,$db_pw);
			if (!$con)
			  {
			  	// Show error if connection failed
			    echo '<div class="result-wrap-bad">';
			  	echo ('<div class="result-bad">' . $lang['ERROR_DB_CON'] . mysql_error() . '</div></div>');
			  	break;
			  }
			
			// Select Database  
			$db_selected = mysql_select_db($db_name, $con);
			if (!$db_selected) {
				// Show error if selection failed
				echo '<div class="result-wrap-bad">';
				echo ('<div class="result-bad">' . $lang['ERROR_DB_SEL'] . mysql_error() . '</div></div>');
				break;
			}			
			
			// Function to convert a string into an md5 one
			// You may want to change this to your encryption
			function md5_string ($str, $prefix) {
				return ($prefix. md5($str));
			}
			
			// Get the needed data from post action
			$username = $_POST['username'];  
			$password = md5_string($_POST['password'], $md5_prefix);
			$newpassword = md5_string($_POST['newpassword'], $md5_prefix);
			$confirmnewpassword = md5_string($_POST['confirmnewpassword'], $md5_prefix);
			
			
						
			// Select the user which will preform the edit
			$db_select_cmd = "SELECT " . $db_user_pw_row . " FROM " . $db_table . " WHERE " . $db_user_row . '="' . $username .'"';
			$result = mysql_query($db_select_cmd, $con);
			
			try  
			{ 
            	$user_vaild = mysql_result($result, 0);
            } 
            catch (Exception $e) 
            { 
	            	$user_vaild = false;   
	        } 
			
				
			// If user is not found return an error
			if(!$user_vaild || !$result){
			    echo '<div class="result-wrap-bad">';
				echo '<div class="result-bad">' . $lang['ERROR_WRONG_USER'] . '</div></div>';
				goto a;
			}
			else {
				// If the password was entered wrong show error
				if($password != mysql_result($result, 0)){
					echo '<div class="result-wrap-bad">';
					echo '<div class="result-bad">' . $lang['ERROR_WRONG_PW'] . '</div></div>';
					goto a;
				}
				else {
					// If the new password and confirmpassword don't match, return error
					if($newpassword == $confirmnewpassword){					    
					    $db_execute_cmd = "UPDATE " . $db_table . " SET " . $db_user_pw_row . '="' . $newpassword . '" WHERE ' . $db_user_row . '="' . $username . '"';
						$sql = mysql_query($db_execute_cmd);
						if ($sql) {
							echo '<div class="result-wrap-good">';
							echo '<div class="result-good">' . $lang['SUCCESS'] . '</div></div>';
						}
						else {
							echo '<div class="result-wrap-bad">';
							echo '<div class="result-bad">' . $lang['ERROR_DB_UPDATE'] . '</div></div>';
							goto a;
						}	
					}
					// Else return success!
					else {
						echo '<div class="result-wrap-bad">';
						echo '<div class="result-bad">' . $lang['ERROR_PW_NOT_MATCH'] . '</div></div>';
						goto a;
					}
				}
			}	
		}
	}
	a:
	include 'config/copyright.php';
 ?>