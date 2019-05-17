<?php
/**
 * Created by PhpStorm.
 * User: Kavi
 * Date: 5/17/2019
 * Time: 4:33 PM
 */
class token {

    public static function checkToken($token,$cookiecsrf){
        if($cookiecsrf == $token) {
            return true;
        }
    }
}
?>