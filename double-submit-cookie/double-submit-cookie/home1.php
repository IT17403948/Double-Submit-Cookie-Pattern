<?php
/**
 * Created by PhpStorm.
 * User: Kavi
 * Date: 5/17/2019
 * Time: 4:32 PM
 */
require_once 'tokens.php';
$val = $_POST["token"];
if(isset($_POST['updatepost'])){
    if(token::checkToken($val,$_COOKIE['csrfTokenCookie'])) {
        echo "Server request accepted req: ".$_POST['updatepost'].", CSRF token matched (cookie == hidden field) ((".$val.")----(".$_COOKIE['csrfTokenCookie']."))";
    }else {
        echo "Server request fail! , Unauthorized req!".$_COOKIE['csrfTokenCookie'];
    }
}
?>