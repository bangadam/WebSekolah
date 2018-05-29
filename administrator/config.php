<?php

$page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '';

// this configuration path for website
define('PATH', 'http://localhost/WebSekolah/administrator/'); //isi path dari website anda
define('SITE_URL', PATH . 'index.php');
define('POSITION_URL', PATH . '?page=' . $page);

// this configuration for database website
define('DB_HOST', 'localhost');	// Host yang digunakan
define('DB_USERNAME', 'root'); // Username host yang digunakan
define('DB_PASSWORD', 'root'); // PAssword host yang digunakan
define('DB_NAME', 'db_schools'); // database yang digunakan

 ?>