<?php

// 変数　$a に 3 を代入
$a = 3;
// 変数　$b に 7 を代入
$b = 7;

echo $a + $b;

$array = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];

echo $array[7];

$hello = "Hello, ";
$name = "白谷春奏";
$world = "‘s World!";
    
echo $hello, $name, $world;

$tech = 'tech';
$tech .= 'boost';

echo $tech;

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];