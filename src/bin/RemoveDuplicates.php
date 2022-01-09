#!/usr/bin/env php
<?php

require __DIR__ . '/../App/bootstrap.php';

use App\Utils\Arrays;

$myArrayWithDuplicatedItems = [1, 1, 1, 2, 2, 2, 2, 2, 2, 3, 4, 5, 6, 7, 8];
$myArrayWithUniqueItems = Arrays::removeDuplicates($myArrayWithDuplicatedItems);

print_r($myArrayWithDuplicatedItems);
print_r($myArrayWithUniqueItems);
