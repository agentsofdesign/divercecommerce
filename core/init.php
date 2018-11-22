<!-- Database Connection -->
<?php
$db = mysqli_connect('localhost','root','','dc-database');
if(mysqli_connect_errno()) {
    echo 'Database connection failed with following errors: '. mysqli_connect_error();
    die();
}

// Document URL Settings
define('BASEURL', $_SERVER['DOCUMENT_ROOT'].'/php-website/');
require_once $_SERVER['DOCUMENT_ROOT'].'/php-website/config.php';
require_once BASEURL.'helpers/helpers.php';