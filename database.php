<?php

define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'daenerys');
define('DB_PASSWORD', 'daenerys');
define('DB_DATABASE', 'theaterdb');
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

function create_users_table() {
    $sql = "CREATE TABLE users(
  `name` varchar(50) NOT NULL UNIQUE,
  `pass` varchar(50) NOT NULL,
  `prices_key` int(11) NOT NULL,
  `theaters_key` int(11) NOT NULL,
  `schedules_key` int(11) NOT NULL,
  `revenues_key` int(11) NOT NULL)";
    
    if (mysqli_query($conn, $sql)) {
        echo "Table successfully created.";
    } else {
        echo "ERROR: " . mysqli_error($conn);
    }
}
?>
