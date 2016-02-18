<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 18/02/2016
 * Time: 18:24
 */

require_once __DIR__ . '/connection.php';
$bdd = new DB_CONNECT();

$stmt_add_action = "INSERT INTO musicStats (ip, pays, date, action, type, son) VALUES ('".$_GET['ip']."', '".$_GET['pays']."', NOW(), '".$_GET['action']."', '".$_GET['type']."', '".$_GET['son']."')";
$res_users = mysql_query($stmt_check_pwd) or die(mysql_error());

?>