<?php

session_start();
ob_start();

$invalid = [];
$success = [];
$warning = [];
$info = [];

$settings = include(__DIR__ . '/../../config/settings.php');

include(__DIR__ . '/../../config/database.php');
include(__DIR__ . '/../../app/Models/models-facade.php');

$modelsFacade = new ModelsFacade($settings);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $settings["APP_DESCRIPTION"] ?>">
    <meta name="keywords" content="<?= $settings["APP_KEYWORDS"] ?>">
    <meta name="author" content="<?= $settings["APP_AUTHOR"] ?>">

    <link rel="shortcut icon" href="<?= $settings["APP_ICON"] ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css">

    <title><?= $settings["APP_NAME"] ?></title>
</head>

<body>