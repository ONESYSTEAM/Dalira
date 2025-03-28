<?php

// Start session management and output buffering
session_start();
ob_start();

// Array to store messages
$invalid = array();
$success = array();
$warning = array();
$info = array();

// Include global settings
$settings = include(__DIR__ . '/../../config/settings.php');

// Include necessary files for database connectivity and facade classes
include(__DIR__ . '/../../config/database.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $settings["app_description"] ?>">
    <meta name="keywords" content="<?= $settings["app_keywords"] ?>">
    <meta name="author" content="<?= $settings["app_author"] ?>">
    <title><?= $settings["app_name"] ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>