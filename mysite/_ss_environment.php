<?php
    define('SS_ENVIRONMENT_TYPE', 'dev');
    define('SS_DATABASE_SERVER', 'mysql');
    define('SS_DATABASE_USERNAME', 'root');
    define('SS_DATABASE_PASSWORD', 'root');
    define('SS_DATABASE_NAME', 'ss_test');
    define('SS_DEFAULT_ADMIN_USERNAME', 'admin');
    define('SS_DEFAULT_ADMIN_PASSWORD', 'admin');

	global $_FILE_TO_URL_MAPPING;
	$_FILE_TO_URL_MAPPING[dirname(__FILE__)] = 'http://ss_test.com';
