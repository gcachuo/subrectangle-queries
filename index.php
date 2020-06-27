<?php
require 'SubrectangleQueries.php';

$rectangle = [
    [1, 2, 1],
    [4, 3, 4],
    [3, 2, 1],
    [1, 1, 1]
];

$obj = new SubrectangleQueries($rectangle);

echo $obj->getValue(0, 2) . "\n";
$obj->updateSubrectangle(0, 0, 3, 2, 5);
echo $obj->getValue(0, 2) . "\n";
echo $obj->getValue(3, 1) . "\n";
$obj->updateSubrectangle(3, 0, 3, 2, 10);
echo $obj->getValue(3, 1) . "\n";
echo $obj->getValue(0, 2) . "\n";
