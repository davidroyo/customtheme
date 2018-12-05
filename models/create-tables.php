<?php
require 'database.php';

echo 'This is create-tables.php<br>';

$db = new database();

$db->createdb();


?>
