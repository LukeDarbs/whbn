<?php
define('DEBUG', false);

# page settings
define('BASE_URL', get_site_path());
define('SITENAME', 'Britannia Row Productions Training');
define("ROOT", __DIR__ ."");
define("HTTP", ($_SERVER["HTTP_HOST"] == "localhost")
   ? "http://idreamincolour.co.uk/sneak-peek/work/brit-row-training/snapshot/"
   : "http://idreamincolour.co.uk/sneak-peek/work/brit-row-training/snapshot/"
);

# site settings
define('USE_DATABASE', FALSE);

# email settings
define('FROM_EMAIL_ADDRESS', 'training@britanniarow.com');

# mysql database settings
if (USE_DATABASE) {
	if (!strstr(BASE_URL, 'projects')) {
		define('DB_HOST', '');
		define('DB_USER', '');
		define('DB_PASS', '');
		define('DB_DATABASE', '');
	} else {
		define('DB_HOST', '127.0.0.1');
		define('DB_USER', 'root');
		define('DB_PASS', 'admin');
		define('DB_DATABASE', 'admin_test');
	}
	connect_database();
}

# data paths
define('EXPORT_PATH', get_root_path().'data/exports/');
