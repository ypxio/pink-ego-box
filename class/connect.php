<?php

include_once("DB.php");

$dbconn = new DB();
$dbconn->setHost("localhost");
$dbconn->setUsername("root");
$dbconn->setPassword("zantetsuken");

echo $dbconn->connect();

mysql_select_db('vodeledb');