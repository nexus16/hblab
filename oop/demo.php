<?php
require( 'DB_driver.php' );

$DB = new DB_driver();
// UPDATE
$DB->update('customer', array(
    'name' => 'hoang'
), 'id = 2');
echo "<br>insert thanh cong<br>"
?>

