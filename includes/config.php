<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "root";
$db['db_name'] = "riocms";

foreach($db as $key => $value) {
    define (strtoupper ($key), $value);
}

// mysqli_connect('hostname','username','password ','databasename');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$connection) {
    echo "not connected";
}

?>
