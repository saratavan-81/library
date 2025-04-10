<?php
$localhost="localhost";
$namedb="root";
$passworddb="";
$db="projectwebtavan";
$database=new PDO("mysql:host=$localhost;dbname=$db","$namedb","$passworddb",[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]);

