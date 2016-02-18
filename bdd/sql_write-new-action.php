<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 18/02/2016
 * Time: 18:24
 */

require_once __DIR__ . '/connection.php';
$bdd = new DB_CONNECT();


if($_GET['type'] == "" && $GET['son'] == "")
{
    $stmt_add_action = "INSERT INTO musicStats (ip, pays, date, action) VALUES ('".$_GET['ip']."', '".$_GET['pays']."', NOW(), '".$_GET['action']."')";
}
elseif($_GET['type'] == "")
{
    $stmt_add_action = "INSERT INTO musicStats (ip, pays, date, action, son) VALUES ('".$_GET['ip']."', '".$_GET['pays']."', NOW(), '".$_GET['action']."', '".$_GET['son']."')";
}
elseif($_GET['son'] == "")
{
    $stmt_add_action = "INSERT INTO musicStats (ip, pays, date, action, type) VALUES ('".$_GET['ip']."', '".$_GET['pays']."', NOW(), '".$_GET['action']."', '".$_GET['type']."')";
}
else
{
    $stmt_add_action = "INSERT INTO musicStats (ip, pays, date, action, type, son) VALUES ('".$_GET['ip']."', '".$_GET['pays']."', NOW(), '".$_GET['action']."', '".$_GET['type']."', '".$_GET['son']."')";
}




$res_users = mysql_query($stmt_add_action) or die(mysql_error());

?>