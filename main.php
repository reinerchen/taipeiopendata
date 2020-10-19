<?php
include('db_init.php');
require_once('table_schema.php');

$connection->exec($sqlCreateTable); // create table 

$processArray = array();

$apiData = "https://data.taipei/api/v1/dataset/664a256d-4ea1-41bc-8be6-acd53d9864a0?scope=resourceAquire";

$openDatasOriginal = file_get_contents($apiData);
$openDatasJSON = json_decode($openDatasOriginal, true); 

foreach ($openDatasJSON["result"]["results"] as $value ) { // need array key process and bulk insert 
    $insert = $connection->prepare($insertData);
    $insert->execute(
        array($value["編號"], 
        $value["建物用途"], 
        $value["建案名稱"], 
        $value["樓地板面積      坪"], 
        $value["管理機關"], 
        $value["房舍數量"], 
        $value["每坪月租金        元"], 
        $value["戶數"])
    );
    
}
