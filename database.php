<?php

define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'daenerys');
define('DB_PASSWORD', 'daenerys');
define('DB_DATABASE', 'theaterdb');

function get_conn() {
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    return $conn;
}

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

// Create test user
function create_test_user() {
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    $query = get_user("user");
    if (!$query || mysqli_num_rows($query) == 0) {
        $sql = "INSERT INTO users (name, pass, prices_key, theaters_key, schedules_key, revenues_key) VALUES('user','123','1','1','1', '1')";
        if ($conn->query($sql)) {
            echo "User successfully created.";
        } else {
            echo "ERROR: " . mysqli_error($conn);
        }
    }
}
?>
