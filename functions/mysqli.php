<?php
require("../config/db.php");

$db_samp = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_LARP);
if($db_samp->connect_error)
	die('0|DB 접속 오류 ('.$db_samp->connect_errno.') '.$db_samp->connect_error);
$db_samp->query("SET SESSION CHARACTER_SET_CONNECTION = UTF8");
$db_samp->query("SET SESSION CHARACTER_SET_RESULTS = UTF8");
$db_samp->query("SET SESSION CHARACTER_SET_CLIENT = UTF8");

$db_log = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_LARP_LOG);
if($db_log->connect_error)
	die('0|DB 접속 오류 ('.$db_log->connect_errno.') '.$db_log->connect_error);
$db_log->query("SET SESSION CHARACTER_SET_CONNECTION = UTF8");
$db_log->query("SET SESSION CHARACTER_SET_RESULTS = UTF8");
$db_log->query("SET SESSION CHARACTER_SET_CLIENT = UTF8");
?>