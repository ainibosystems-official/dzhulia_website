<?php
session_start();

function isLoggedIn() {
    return isset($_SESSION["logged"]) && $_SESSION["logged"] === true;
}

function requireLogin() {
    if (!isLoggedIn()) {
        header("Location: /login.php");
        exit;
    }
}
