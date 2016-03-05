<?php
define('ABSPATH', dirname(__FILE__) . '/web/wp/');
define('CONTENT_DIR', '/app');
define('WP_CONTENT_DIR', dirname(__FILE__) . '/web'.CONTENT_DIR);
define('WP_ENV', 'development');
define('WP_TESTS_MULTISITE', true);
define('WP_DEBUG', true);

define('DB_NAME', 'infopub');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix  = 'wptests_';   // Only numbers, letters, and underscores please!
define('WP_TESTS_DOMAIN', 'example.org');
define('WP_TESTS_EMAIL', 'admin@example.org');
define('WP_TESTS_TITLE', 'Test Blog');
define('WP_PHP_BINARY', 'php');
define('WPLANG', '');
