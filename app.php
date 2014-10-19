<?php
session_start();

require_once 'vendor/autoload.php';
require_once 'config.php';

Facebook\FacebookSession::setDefaultApplication(APP_ID, APP_SECRET);
$fb = new Facebook\FacebookRedirectLoginHelper(LOGIN_REDIRECT_PAGE);

?>