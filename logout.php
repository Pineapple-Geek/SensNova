<?php

define('INSIDE', true);

$_AllowInVacationMode = true;
$_DontCheckPolls = true;
$_DontShowMenus = true;
$_DontForceRulesAcceptance = true;

$_EnginePath = './';
include($_EnginePath.'common.php');

loggedCheck();
includeLang('logout');

setcookie($_GameConfig['COOKIE_NAME'], '', time() - 100000, '/', '', 0);

header('Location: index.php');

?>
