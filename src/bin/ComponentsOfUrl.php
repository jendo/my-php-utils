#!/usr/bin/env php

<?php
require __DIR__ . '/../App/bootstrap.php';

use App\Utils\Strings;

$myArguments = $_SERVER['argv'];
$argumentCounts = $_SERVER['argc'];

if ($argumentCounts <= 1) {
    echo 'You need to write complete path of url as an argument.';
    echo PHP_EOL;
    exit;
}

$url = $_SERVER ['argv'][1];
$urlComponents = Strings::getUrlComponents($url);
echo 'Scheme : ' . $urlComponents['scheme'] . PHP_EOL;
echo 'Host : ' . $urlComponents['host'] . PHP_EOL;
echo 'Path : ' . $urlComponents['path'] . PHP_EOL;

