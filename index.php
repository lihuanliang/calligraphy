<?php

include_once("./core/DB.php");

$db = new Db();
var_dump($db->select("select * from test"));die;


