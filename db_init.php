<?php
$rds_endpoint = "";
$db = "";
$account = "";
$passwd = "";

$connection = new PDO("mysql:host={$rds_endpoint};dbname={$db};charset=utf8", $account, $passwd);
