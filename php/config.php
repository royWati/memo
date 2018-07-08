<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DATABASE','ememo');
//create an instance of the mysqli class
$mysqli=new mysqli(DB_HOST,DB_USER,DB_PASSWORD);
//select the database
$mysqli->select_db(DATABASE);
?>