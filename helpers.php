<?php
session_start();

// Use this to check if user is logged in
function is_logged() {
    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
        return true;
    } else {
        return false;
    }
}

?>