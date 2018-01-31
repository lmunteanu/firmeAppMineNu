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

$loggedName = User::isLogged() ? $_SESSION['loggedUserId'] : 'dummy';

$name = isset($_GET['math-name']) ? $_GET['math-name'] : $loggedName;


$mathHistory = new Math_history();
$mathHistory->username = $name;
//$mathHistory->username = $_POST['uname'];
//$mathHistory->username = $_SESSION['loggedUserId'];
//if (User::isLogged()) {
//    $mathHistory->username = User::getUserName($_SESSION['loggedUserId']);
//}
$mathHistory->userIp = getUserIp();
$mathHistory->gameTime = 55;
$mathHistory->gameScore = 11;

if (isPost()) {
    echo "[ isPost " .
        " - 2uname: " . $mathHistory->username .
        " - 2userip: " . $mathHistory->userIp .
        " - 2gametime: " . $mathHistory->gameTime .
        " - 2gamescore: " . $mathHistory->gameScore .
        " ]" ;
} else {
    echo "[ noPost" .
        " - uname: " . $mathHistory->username .
        " - userip: " . $mathHistory->userIp .
        " - gametime: " . $mathHistory->gameTime .
        " - gamescore: " . $mathHistory->gameScore .
        " ]";
}

//if (!empty($_POST["mail"])) {
//$mathHistory->insert();

$TEMPLATE_VARS['mathHistory'] = $mathHistory;
$TEMPLATE_VARS['templatePath'] = 'math.php';
