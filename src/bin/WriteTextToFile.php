#!/usr/bin/env php
<?php

require __DIR__ . '/../App/bootstrap.php';

use App\Utils\Files;

$filename = '/application/temp/test.txt';
$text = 'Hello world' . PHP_EOL;

$result = Files::writingToAFile($filename, $text);

if ($result === true) {
	echo 'Text was written to file.';
} else {
	echo 'Text was NOT written to file.';
}
echo PHP_EOL;
