<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'national_parks_db');
define('DB_USER', 'park_user');
define('DB_PASSWORD', 'codeup');

require_once('db_connect.php');

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$query = 'CREATE TABlE national_parks (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(350) NOT NULL,
    location VARCHAR(240) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres FLOAT(12,2) UNSIGNED NOT NULL,
    PRIMARY KEY (id)

	)';
$dbc->exec($query);