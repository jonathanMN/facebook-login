<?php
session_start();

require_once 'vendor/autoload.php';
require_once 'config.php';

Facebook\FacebookSession::setDefaultApplication(APP_ID, APP_SECRET);
$fb = new Facebook\FacebookRedirectLoginHelper(LOGIN_REDIRECT_PAGE);

if($session = $fb->getSessionFromRedirect())
{
	$_SESSION['facebook'] = $session->getToken();
	header('Location: index.php');
}
if(isset($_SESSION['facebook']))
{
	$session = new Facebook\FacebookSession($_SESSION['facebook']);
	$request = new Facebook\FacebookRequest($session, 'GET', '/me');
	$request = $request->execute();
	$user = $request->getGraphObject()->asArray();
}

?>