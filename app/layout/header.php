<?php

/**
 * Initialize session management and enable output buffering.
 * This ensures session data is accessible and output is controlled.
 */
session_start();
ob_start();

/**
 * Arrays to store different types of messages.
 * Used for displaying notifications to the user.
 */
$invalid = [];  // Stores invalid/error messages
$success = [];  // Stores success messages
$warning = [];  // Stores warning messages
$info = [];     // Stores informational messages

/** 
 * Load application-wide configuration settings.
 * This file contains global settings like app name, description, and other metadata.
 */
$settings = include(__DIR__ . '/../../config/settings.php');

/**
 * Establish a database connection.
 * This file contains database connection details and initialization.
 */
include(__DIR__ . '/../../config/database.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Application Meta Information -->
    <meta name="description" content="<?= htmlspecialchars($settings["app_description"]) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($settings["app_keywords"]) ?>">
    <meta name="author" content="<?= htmlspecialchars($settings["app_author"]) ?>">
    
    <title><?= htmlspecialchars($settings["app_name"]) ?></title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= htmlspecialchars($settings["app_icon"]) ?>">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>
