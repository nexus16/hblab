<?php
echo "hello";
require( 'DB_driver.php' );
echo "hello";
$DB = new DB_driver();
$DB ->connect();
?>

