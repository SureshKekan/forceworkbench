<?php
session_start();

require_once('shared.php');

if(extension_loaded('curl')){
	$ch = curl_init();
	curl_setopt ($ch, CURLOPT_URL, 'http://forceworkbench.sourceforge.net/latestVersionAvailable.txt');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$latestVersionAvailable = trim(curl_exec($ch));
	curl_close($ch);
	
	if (isset($latestVersionAvailable)){
		if($latestVersionAvailable != $version){
			print "<span style='font-size: 8pt;'><a href='http://sourceforge.net/projects/forceworkbench/'>A newer version of the Workbench is available for download</a></span><br/>";
		}
	}
}

if($_GET['serverUrl'] && $_GET['sid']){		//simulate adv login from url query params for web tab use
	$_POST['serverUrl'] = $_GET['serverUrl'];
	$_POST['sessionId'] = $_GET['sid'];
	$_POST[login_type] = "adv";
	$_POST[actionJumpAdv] = "select.php";
} 

if ($_POST[login_type]=='std'){
	process_login($_POST['usernameStd'], $_POST['passwordStd'], null, null, $_POST['actionJumpStd']);
} elseif ($_POST[login_type]=='adv'){
	process_login($_POST['usernameAdv'], $_POST['passwordAdv'], $_POST['serverUrl'], $_POST['sessionId'], $_POST['actionJumpAdv']);
} else {
	display_login(null);
}

function display_login($errors){
require_once ('header.php');

//Displays errors if there are any
if (isset($errors)) {
	show_error($errors);
}

if ($_COOKIE[user]){
	$user = $_COOKIE[user];
	$isRemembered = "checked='checked'";
	print "<body onLoad='givePassFocus();' />";
} else {
	$user = $_POST[user];
	$isRemembered = NULL;
	print "<body onLoad='giveUserFocus();' />";
}


//Display main login form body
print <<<LOGIN_FORM

<script type='text/javascript' language='JavaScript'>

function toggleUsernamePasswordSessionDisabled(){
	if(document.getElementById('sessionId').value){
		document.getElementById('usernameAdv').disabled = true;
		document.getElementById('passwordAdv').disabled = true;
	} else {
		document.getElementById('usernameAdv').disabled = false;
		document.getElementById('passwordAdv').disabled = false;
	}
	
	if(document.getElementById('usernameAdv').value || document.getElementById('passwordAdv').value){
		document.getElementById('sessionId').disabled = true;
	} else {
		document.getElementById('sessionId').disabled = false;
	}

}


function form_become_adv() {
	document.getElementById('login_std').style.display='none';
//	document.getElementById('apexLogo').style.display='none';
	document.getElementById('login_adv').style.display='inline';
}

function form_become_std() {
	document.getElementById('login_std').style.display='inline';
//	document.getElementById('apexLogo').style.display='inline'
	document.getElementById('login_adv').style.display='none';
}

function build_location(){
	var inst = document.getElementById('inst').value;
	var endp = document.getElementById('endp').value;
	document.getElementById('serverUrl').value = 'https://' + inst + '.salesforce.com/services/Soap/u/' + endp;
}

function giveUserFocus(){
	document.getElementById('username').focus();
}

function givePassFocus(){
	document.getElementById('password').focus();
}

</script>

<div id='intro_text'>
	<p>$workbenchIntroText</p>
	<p>Use the standard login to login with just your salesforce.com username and password or use the advanced
	   login to login with a valid salesforce.com session ID or to a specific API version. Jump To is an optional field
	   to jump directly to the desired action:</p>
</div>

<div id='logo_block'>
	<img id='apexLogo' src='images/appex_x_rgb.png' width='200' height='171' border='0' alt='Apex X Logo' />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>

<div id='login_block'>
	<form id='login_form' action='$_SERVER[PHP_SELF]' method='post'>
		<div id='login_become_select' style='text-align: right;'>
			<input type='radio' id='login_become_std' name='login_type' value='std' onClick='form_become_std();' checked='true' /><label for='login_become_std'>Standard</label>
			<input type='radio' id='login_become_adv' name='login_type' value='adv' onClick='form_become_adv();' /><label for='login_become_adv'>Advanced</label>
		</div>

		<div id='login_std'>
			<p><strong>Username: </strong><input type='text' name='usernameStd' id='username' size='45' value='$user' /></p>
			<p><strong>Password: </strong><input type='password' name='passwordStd'  id='password' size='45' /></p>
			<p><strong>Jump to: </strong>
			<select name='actionJumpStd' style='width: 22em;'>
				<option value='select.php'></option>
				<option value='describe.php'>Describe</option>
				<option value='insert.php'>Insert</option>
				<option value='upsert.php'>Upsert</option>
				<option value='update.php'>Update</option>
				<option value='delete.php'>Delete</option>
				<option value='undelete.php'>Undelete</option>
				<option value='purge.php'>Purge</option>
				<option value='export.php'>Export</option>
			</select></p>
			<p  style='text-align: right;'><label><input type='checkbox' name='rememberUser' $isRemembered />Remember username</label></p>
		</div>

		<div id='login_adv' style='display: none;'>
			<p><strong>Username: </strong><input type='text' name='usernameAdv' id='usernameAdv' size='45' value='$user' onkeyup='toggleUsernamePasswordSessionDisabled();' /></p>
			<p><strong>Password: </strong><input type='password' name='passwordAdv' id='passwordAdv' size='45' onkeyup='toggleUsernamePasswordSessionDisabled();' /></p>
			<p>-OR-</p>
			<p><strong>Session ID: </strong><input type='text' name='sessionId' id='sessionId' size='45' onkeyup='toggleUsernamePasswordSessionDisabled();' /></p>
			<p>&nbsp;</p>
			<p><strong>Server URL: </strong><input type='text' name='serverUrl' id='serverUrl' size='45' value='https://www.salesforce.com/services/Soap/u/12.0' /></p>
			<p><strong>QuickSelect: </strong>
			<select name='inst' id='inst' onChange='build_location();'>
				<option value='www'>www</option>
				<option value='na0-api'>NA0 (SSL)</option>
				<option value='na1-api'>NA1</option>
				<option value='na2-api'>NA2</option>
				<option value='na3-api'>NA3</option>
				<option value='na4-api'>NA4</option>
				<option value='na5-api'>NA5</option>
				<option value='ap0'>AP</option>
				<option value='emea'>EMEA</option>
				<option value='tapp0-api'>Sandbox CS0</option>
				<option value='cs1-api'>Sandbox CS1</option>
			</select>

			<select name='endp' id='endp' onChange='build_location();'>
				<option value='12.0'>12.0</option>
				<option value='11.1'>11.1</option>
				<option value='11.0'>11.0</option>
				<option value='10.0'>10.0</option>
				<option value='9.0'>9.0</option>
				<option value='8.0'>8.0</option>
				<option value='7.0'>7.0</option>
				<option value='6.0'>6.0</option>
			</select></p>

			<p><strong>Jump to: </strong>
			<select name='actionJumpAdv' style='width: 15em;'>
				<option value='select.php'></option>
				<option value='describe.php'>Describe</option>
				<option value='insert.php'>Insert</option>
				<option value='upsert.php'>Upsert</option>
				<option value='update.php'>Update</option>
				<option value='delete.php'>Delete</option>
				<option value='undelete.php'>Undelete</option>
				<option value='purge.php'>Purge</option>
				<option value='export.php'>Export</option>
			</select></p>
		</div>

		<div id='login_submit' style='text-align: right;'>
			<input type='submit' name='loginClick' value='Login'>
		</div>

	</form>
</div>

LOGIN_FORM;

include_once ('footer.php');



} //end display_form()


//connects to Apex API and validates login
function process_login_old($username, $password, $actionJump){
	if($_POST[rememberUser] !== 'on') setcookie(user,NULL,time()-3600);

	try{
		require_once ('soapclient/SforcePartnerClient.php');
		require_once ('soapclient/SforceHeaderOptions.php');

		$username = htmlentities(trim($username));
		$password = htmlentities(trim($password));
		$wsdl = 'soapclient/sforce.120.partner.wsdl';

		$mySforceConnection = new SforcePartnerClient();
	    $mySforceConnection->createConnection($wsdl);
	    $mySforceConnection->login($username, $password);

		session_unset();
		session_destroy();
		session_start();
		    $_SESSION['location'] = $mySforceConnection->getLocation();
		    $_SESSION['sessionId'] = $mySforceConnection->getSessionId();
		    $_SESSION['wsdl'] = $wsdl;
			if($_POST[rememberUser] == 'on'){
				 setcookie(user,$username,time()+60*60*24*7,'','','',TRUE);
			} else {
				setcookie(user,NULL,time()-3600);
			}
		session_write_close();



		header("Location: $actionJump");

	} catch (Exception $e) {
		$errors = null;
		$errors = $e->getMessage();
		display_login($errors);
		exit;
	}
} //end process_login

function process_Login($username, $password, $serverUrl, $sessionId, $actionJump){
	$username = htmlentities(trim($username));
	$password = htmlentities(trim($password));
	$serverUrl = htmlentities(trim($serverUrl));
	$sessionId = htmlentities(trim($sessionId));
	$actionJump = htmlentities(trim($actionJump));
	
	if($_POST[rememberUser] !== 'on') setcookie(user,NULL,time()-3600);
	
	if ($username && $password && $sessionId){
		$errors = null;
		$errors = 'Provide only username and password OR session id, but not all three.';
		display_login($errors);
		exit;
	} 
	

	try{
		require_once ('soapclient/SforcePartnerClient.php');
		require_once ('soapclient/SforceHeaderOptions.php');
		$wsdl = 'soapclient/sforce.120.partner.wsdl';
		$mySforceConnection = new SforcePartnerClient();
	    $mySforceConnection->createConnection($wsdl);
	    
	    if($username && $password && !$sessionId){
	    	if($serverUrl){
	    		$mySforceConnection->setEndpoint($serverUrl);
	    	} else {
	    		$mySforceConnection->setEndpoint("https://www.salesforce.com/services/Soap/u/12.0");
	    	}
			$mySforceConnection->login($username, $password);
		} elseif ($sessionId && $serverUrl && !($username && $password)){
			if (stristr($serverUrl,'www')) {
				$errors = null;
				$errors = 'Must not connect to WWW if providing Session Id. Choose your Salesforce instance.';
				display_login($errors);
				exit;
			}
			$mySforceConnection->setEndpoint($serverUrl);
	    	$mySforceConnection->setSessionHeader($sessionId);
		}
	    
		session_unset();
		session_destroy();
		session_start();
		    $_SESSION['location'] = $mySforceConnection->getLocation();
		    $_SESSION['sessionId'] = $mySforceConnection->getSessionId();
		    $_SESSION['wsdl'] = $wsdl;
			if($_POST[rememberUser] == 'on'){
				 setcookie(user,$username,time()+60*60*24*7,'','','',TRUE);
			} else {
				setcookie(user,NULL,time()-3600);
			}
		session_write_close();

		header("Location: $actionJump");

	} catch (Exception $e) {
		$errors = null;
		$errors = $e->getMessage();
		display_login($errors);
		exit;
	}
	
}

?>
