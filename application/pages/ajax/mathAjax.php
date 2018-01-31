<?php
/**
 * Created by PhpStorm.
 * User: Munteanu
 * Date: 1/25/2018
 * Time: 10:58 PM
 */
header('Content-Type: application/json');

$getTime = isset($_GET['testTime']) ? $_GET['testTime'] : '999';
$getScore = isset($_GET['testScore']) ? $_GET['testScore'] : '555';

echo($getTime . " and " .$getScore );

$mathHistory = new Math_history();

$mathHistory->username = "thebull";
$mathHistory->userIp = "theIpIsHere";

//$mathHistory->gameTime = $getTime;
//$mathHistory->gameScore = $getScore;

$mathHistory->gameTime = "gtime1";
$mathHistory->gameScore = "gscore1";

$mathHistory->insert();
