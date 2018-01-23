<?php

/**
 * Created by PhpStorm.
 * User: Munteanu
 * Date: 1/23/2018
 * Time: 12:19 AM
 */
class Math_history extends BaseObject {
    public static $TABLE_NAME = 'math_history';

    public $id;
    public $username;
    public $userIp;
    public $date;
    public $gameTime;
    public $gameScore;

    public function insert() {
        $nameEscaped = $this->escape($this->username);
        $query = "INSERT INTO `".static::$TABLE_NAME."`
                  SET username = '$nameEscaped',
                      userIp = '$this->userIp',
                      gameTime = '$this->gameTime',
                      gameScore = '$this->gameScore'
                 ";
        $db = self::getDBConnection();
        $result = $db->query($query);
        $this->id = $db->getLastInsertId();
    }
}