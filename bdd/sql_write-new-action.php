<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 18/02/2016
 * Time: 18:24
 */

function getIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (! empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function ip_details($ip) {
    $json = file_get_contents("http://ipinfo.io/{$ip}");
    $details = json_decode($json);
    return $details;
}


$ip = getIP();


$ipDetails = ip_details($ip);


require_once __DIR__ . '/connection.php';
$bdd = new DB_CONNECT();


if($_GET['type'] == "" && $_GET['son'] == "")
{
    $stmt_add_action = "INSERT INTO musicStats (ip, pays, date, action) VALUES ('".$ip."', '".$ipDetails->country."', NOW(), '".$_GET['action']."')";
}
elseif($_GET['type'] == "")
{
    $stmt_add_action = "INSERT INTO musicStats (ip, pays, date, action, son) VALUES ('".$ip."', '".$ipDetails->country."', NOW(), '".$_GET['action']."', '".$_GET['son']."')";
}
elseif($_GET['son'] == "")
{
    $stmt_add_action = "INSERT INTO musicStats (ip, pays, date, action, type) VALUES ('".$ip."', '".$ipDetails->country."', NOW(), '".$_GET['action']."', '".$_GET['type']."')";
}
else
{
    $stmt_add_action = "INSERT INTO musicStats (ip, pays, date, action, type, son) VALUES ('".$ip."', '".$ipDetails->country."', NOW(), '".$_GET['action']."', '".$_GET['type']."', '".$_GET['son']."')";
}




$res_users = mysql_query($stmt_add_action) or die(mysql_error());

?>