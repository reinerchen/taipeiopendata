<?php
$sqlCreateTable = "
CREATE TABLE IF NOT EXISTS `opendata` (
    `_id` INT(6) UNSIGNED AUTO_INCREMENT ,
    `number` VARCHAR(30),
    `building_type` VARCHAR(30),
    `building_name` VARCHAR(30),
    `area` VARCHAR(30),
    `management` VARCHAR(30),
    `number_of_houses` VARCHAR(30),
    `rent_of_area` VARCHAR(30),
    `number_of_households` VARCHAR(30),
    `update_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`_id`),
    KEY `building_type`(`building_type`),
    KEY `building_name`(`building_name`),
    KEY `management`(`management`))
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";

$insertData = "INSERT INTO `opendata` (
    `number`,
    `building_type`,
    `building_name`,
    `area`,
    `management`,
    `number_of_houses`,
    `rent_of_area`,
    `number_of_households`, 
    `update_time`)
VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?) ";
