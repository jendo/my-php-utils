#!/usr/bin/env php
<?php

require __DIR__ . '/../App/bootstrap.php';

use App\Utils\Arrays;

$elements = ['janko', 'ferko', 'dusko', 'misko', 'lukas'];

do {
	$removedRandomElement = Arrays::removeRandomElementFromList($elements);
    echo sprintf('Removed random element is: %s' . PHP_EOL, $removedRandomElement);
} while ($elements !== []);
