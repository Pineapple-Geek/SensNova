<?php

define('INSIDE', true);

$_DontCheckPolls = true;
$_DontForceRulesAcceptance = true;
$_UseMinimalCommon = true;
$_AllowInVacationMode = true;

$_SetAccessLogPreFilename = 'ajax/';
$_SetAccessLogPath = '../';
$_EnginePath = '../';

include($_EnginePath.'common.php');

loggedCheck(true);

if(isLogged())
{
    if(CheckAuth('supportadmin'))
    {
        $GivenID = (isset($_GET['id']) ? round($_GET['id']) : 0);
        if($GivenID > 0)
        {
            $Result = doquery("DELETE FROM {{table}} WHERE `ID` = {$GivenID} LIMIT 1;", 'chat_messages');
            if($Result !== false)
            {
                if(getDBLink()->affected_rows == 1)
                {
                    echo '1';
                }
                else
                {
                    echo '2';
                }
            }
            else
            {
                echo '3';
            }
        }
        else
        {
            echo '2';
        }
    }
    else
    {
        echo '4';
    }
}
else
{
    echo '5';
}
safeDie();

?>
