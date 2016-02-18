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

echo getIP();

/*require_once __DIR__ . '/connection.php';
$bdd = new DB_CONNECT();


if($_GET['type'] == "" && $_GET['son'] == "")
{
    $stmt_add_action = "INSERT INTO musicStats (ip, pays, date, action) VALUES ('".getIP()."', '".$_GET['pays']."', NOW(), '".$_GET['action']."')";
}
elseif($_GET['type'] == "")
{
    $stmt_add_action = "INSERT INTO musicStats (ip, pays, date, action, son) VALUES ('".getIP()."', '".$_GET['pays']."', NOW(), '".$_GET['action']."', '".$_GET['son']."')";
}
elseif($_GET['son'] == "")
{
    $stmt_add_action = "INSERT INTO musicStats (ip, pays, date, action, type) VALUES ('".getIP()."', '".$_GET['pays']."', NOW(), '".$_GET['action']."', '".$_GET['type']."')";
}
else
{
    $stmt_add_action = "INSERT INTO musicStats (ip, pays, date, action, type, son) VALUES ('".getIP()."', '".$_GET['pays']."', NOW(), '".$_GET['action']."', '".$_GET['type']."', '".$_GET['son']."')";
}




$res_users = mysql_query($stmt_add_action) or die(mysql_error());
*/
?>