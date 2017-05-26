<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', '..');

require 'functions.php';

$db = new PDO('mysql:host=127.0.0.1:3307; dbname=cms', 'root', 'usbw');

function createDB($db) {
    $sql = 'CREATE DATABASE IF NOT EXISTS `cms` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
            USE `cms`;

            CREATE TABLE IF NOT EXISTS `pages` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `label` varchar(50) COLLATE utf8_polish_ci NOT NULL,
                `title` varchar(50) COLLATE utf8_polish_ci NOT NULL,
                `slug` varchar(50) COLLATE utf8_polish_ci NOT NULL,
                `body` varchar(255) COLLATE utf8_polish_ci NOT NULL,
                `created` datetime DEFAULT NULL,
                `updated` datetime DEFAULT NULL,
                PRIMARY KEY (`id`)
            ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=3 ;';
    $stmt = $db->prepare($sql);
    $stmt->execute();
}

createDB($db);