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
function login($name, $pass) {
    $row = get_user($name);
    if ($row['pass'] == $pass) {
        $_SESSION['username'] = $row['name'];
        $_SESSION['password'] = $row['pass'];
        //$_SESSION['theaters'] = $row['theaters'];
        //$_SESSION['schedules'] = $row['schedules'];
        header("location:index.php");
        return true;
    }
    return false;
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

// Use this to query the database for a user
function get_user($name) {
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    $query = mysqli_query($conn, "SELECT * FROM users WHERE name='$name'");
    return $query;
}

?>