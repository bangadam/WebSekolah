<?php 

$page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '';

// this configuration path for website
define('PATH', 'http://localhost/WebsiteSMK/'); //isi path dari website anda
define('SITE_URL', PATH . 'index.php');
define('POSITION_URL', PATH . '?page=' . $page);

// this configuration for database website 
define('DB_HOST', 'u805207952_adam');	// Host yang digunakan
define('DB_USERNAME', 'u805207952_adam'); // Username host yang digunakan
define('DB_PASSWORD', 'arekgedangan'); // PAssword host yang digunakan
define('DB_NAME', 'u805207952_adam'); // database yang digunakan

 ?>
