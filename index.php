<?php

/*
    "name": "BenchmarkDotNet",
    "html_url": "https://github.com/dotnet/BenchmarkDotNet",
    "description": "Powerful .NET library for benchmarking",
    "homepage": "https://benchmarkdotnet.org",
    "watchers": 6198,
*/

$arr = [];

$item['name'] = "TestName1";
$item['description'] = "TestDescription1";
$item['html_url'] = "http://charlierees.com/TestURL1";
$item['homepage'] = "http://charlierees.com";
$item['watchers'] = 10;
$arr[] = $item;

$item['name'] = "TestName2";
$item['description'] = "TestDescription2";
$item['html_url'] = "http://charlierees.com/TestURL2";
$item['homepage'] = "http://charlierees.com";
$item['watchers'] = 11;
$arr[] = $item;

echo json_encode($arr);

?>

