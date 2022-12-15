<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "1"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0){
    $DB_SERVER = "localhost";
    $DB_NAME = "find_graphics";
    $DB_USER = "root";
    $DB_PASS = "";
}else{
    $DB_SERVER = "mysql31.unoeuro.com";
    $DB_NAME = "hecamefromsporting_com_db";
    $DB_USER = "hecamefromsporting_com";
    $DB_PASS = "Ge4FBDrbndx6";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);