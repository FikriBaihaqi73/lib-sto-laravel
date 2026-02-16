<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!extension_loaded('sodium')) {
    // echo "Extension 'sodium' is not loaded!";
}

if (!file_exists(__DIR__ . '/../vendor/autoload.php')) {
    echo "Autoloader not found! Did composer install run?";
    exit;
}


require __DIR__ . '/../public/index.php';
