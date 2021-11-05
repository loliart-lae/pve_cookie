<?php
error_reporting(0);
header('Access-Control-Allow-Origin: https://lightappengine.test');
header('Access-Control-Allow-Credentials: true');

$ticket = $_REQUEST['ticket'];

header('Set-Cookie: PVEAuthCookie=' . urlencode($ticket) . ';SameSite=None; Secure');
