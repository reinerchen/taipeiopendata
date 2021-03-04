<?php
include('db_init.php');
require_once('table_schema.php');

try { 
    $connection->query("set names utf8");
    
    for($starter = 0 ; $starter < 300 ; $starter ++){
        $random = rand(10000, 50000);
        $sql = "select * from opendata limit {$random}"; 

        $query    = $connection->query($sql);
        $datalist = $query->fetchAll();
        
        foreach ($datalist as $datainfo) { 
            echo $datainfo['_id'] . "\r";
        }
        
        foreach ($datalist as $datainfo) { 
            echo $datainfo['_id'] . "\r";
        }
        sleep(1);
    }
}
catch(Exception $e) { 
    echo $e->getMessage();
}
