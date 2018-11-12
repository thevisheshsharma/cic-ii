<?php
session_start();
$host="localhost";
$username="root";
$password="root";
$db_name="iotadb";
$link=mysql_connect('localhost', 'root', '')or die("Cannot Connect");
mysql_select_db('iotadb')or die("Cannot Select DB");
?>
