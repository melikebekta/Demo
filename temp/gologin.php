<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../login");
    exit();
}
$username = $_SESSION['username'];
$authority = $_SESSION['authority'];
?>