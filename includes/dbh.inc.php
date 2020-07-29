<?php

$servername = 'localhost';
$dbusername = 'bitxuhqm_bitxpros';
$dbpassword = 'bitxpros20';
$dbname = 'bitxuhqm_bitxpros';

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(!$conn) {
    die('connection failed: ' .mysqli_connect_error());
}



