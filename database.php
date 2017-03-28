<?php

// Use this to connect to the database
function connect() {
    $server = 'localhost';
    $dbuser = 'daenerys';
    $dbpass = 'daenerys';
    $dbname = 'theaterdb';
    $connect = mysql_connect($server,$dbuser,$dbpass)
             OR die(mysql_error());
    mysql_select_db("$dbname", $connect);
}

// Use this to login; Returns true on successful login and false on failed login
function login($name, $pass) {
    $safe_name = mysql_real_escape_string($name);
    $row = get_user($name);
    if ($row['pass'] == $pass) {
        $_SESSION['username'] = $row['name'];
        $_SESSION['password'] = $row['pass'];
        //$_SESSION['theaters'] = $row['theaters'];
        //$_SESSION['schedules'] = $row['schedules'];
        return true;
    }
    return false;
}

// Use this to query the database for a user
function get_user($name) {
    $query = mysql_query("SELECT * FROM users WHERE name='$name'", $connect);
    $row = mysql_fetch_array($query);
    return $row;
}

?>