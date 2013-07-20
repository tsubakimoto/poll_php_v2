<?php

define('DSN', 'mysql:host=localhost;dbname=dotinstall_poll_php');
define('DB_USER', 'dbuser');
define('DB_PASSWORD', 'c0dy21dw');

define('SITE_URL', 'http://192.168.33.10/poll_php_v2/');

error_reporting(E_ALL & ~E_NOTICE);

session_set_cookie_params(0, '/vagrant/poll_php_v2/');



