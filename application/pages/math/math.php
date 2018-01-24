<?php
/**
 * Created by PhpStorm.
 * User: Munteanu
 * Date: 1/23/2018
 * Time: 10:12 PM





 */

//public $id;
//public $username;
//public $userIp;
//public $date;
//public $gameTime;
//public $gameScore;

$mathHistory = new Math_history();
//$mathHistory->username = $_POST['uname'];
//$mathHistory->username = $_SESSION['loggedUserId'];
$mathHistory->username = User::getUserName($_SESSION['loggedUserId']);
$mathHistory->userIp = getUserIp();
$mathHistory->gameTime = 55;
$mathHistory->gameScore = 11;

echo "echoing" . " - uname: " .
                $mathHistory->username . " - userip: " .
                $mathHistory->userIp . " - gametime: " .
                $mathHistory->gameTime . " - gamescore: ".
                $mathHistory->gameScore;

//$mathHistory->insert();

$TEMPLATE_VARS['templatePath'] = 'math.php';