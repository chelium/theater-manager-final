<?php
include("database.php");
// Use this to check if user is logged in
function is_logged() {
    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
        return true;
    } else {
        return false;
    }
}

// Redirect if not logged
function auth_check() {
    if (!is_logged()) {
        header("location:login.php");
    }
}

// Use this to login; Returns true on successful login and false on failed login
function attempt_login($name, $pass) {
    $result = get_user($name);
    $row = mysqli_fetch_array($result);
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
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    $query = mysqli_query($conn, "SELECT * FROM users WHERE name='$name'");
    return $query;
}

?>