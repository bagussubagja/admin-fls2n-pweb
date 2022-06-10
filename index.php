<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: ../dark/auth-login.php");
} else {
    header("location: ../dark/index.php");
}
