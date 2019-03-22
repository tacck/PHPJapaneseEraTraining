<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\JapaneseEra\JapaneseEraBuilder;

// 平成
$date = '2019-04-30';
echo JapaneseEraBuilder::build($date) . PHP_EOL;

// 新元号
$date = '2019-05-01';
echo JapaneseEraBuilder::build($date) . PHP_EOL;

// 昭和
$date = '1978-08-08';
echo JapaneseEraBuilder::build($date) . PHP_EOL;

// 大正
$date = '1912-10-01';
echo JapaneseEraBuilder::build($date) . PHP_EOL;

// 明治
$date = '1868-01-01';
echo JapaneseEraBuilder::build($date) . PHP_EOL;

// 慶應
// $date = '1867-12-31';
// echo JapaneseEraBuilder::build($date) . PHP_EOL;
