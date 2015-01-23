<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'national_parks_db');
define('DB_USER', 'park_user');
define('DB_PASSWORD', 'codeup');

require_once('db_connect.php');
$parks = [
	['name' => 'American Samoa', 'location' => 'American Samoa', 'date_established' => '1988-10-31', 'area_in_acres' => '17919' ],
	['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1971-11-12', 'area_in_acres' => '1082866' ],
	['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => '892,372' ],
	['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => '316953' ],
	['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1980-06-28', 'area_in_acres' => '486848' ],
	['name' => 'Bryce Canyon', 'location' => 'Utah', 'date_established' => '1928-02-25', 'area_in_acres' => '1311875' ],
	['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => '1964-09-12', 'area_in_acres' => '462242' ],
	['name' => 'Capitol Reef', 'location' => 'Utah', 'date_established' => '1971-12-18', 'area_in_acres' => '663670' ],
	['name' => 'Carlsbad', 'location' => 'New Mexico', 'date_established' => '1930-05-14', 'area_in_acres' => '388566' ],
	['name' => 'Everglades', 'location' => 'Florida', 'date_established' => '1934-05-30', 'area_in_acres' => '1047116' ]
];

foreach ($parks  as $park) {
	$query = "INSERT INTO national_parks(name, location, date_established, area_in_acres) 
	VALUES ('{$park['name']}','{$park['location']}','{$park['date_established']}','{$park['area_in_acres']}') ";

//execute query
// $dbc->exec($query);
// echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}