<?php
error_reporting(0);
header('Access-Control-Allow-Origin: https://lightappengine.test');
header('Access-Control-Allow-Credentials: true');

foreach($_COOKIE as $key=>$value){
 setCookie($key,"",time()-60);
}

$ticket = $_REQUEST['ticket'];

header('Set-Cookie: PVEAuthCookie=' . urlencode($ticket) . ';SameSite=None; Secure');
