<?php

/* 在陣列中儲存資料 */

$address[0]= "spam@cyberpromo.net";
// print_r($address);

$price['gasket'] = 15.29;
// print_r($price);

/* 建立Array的方法 */

$address = array();
// print_r($address);

$price=array('gasket' => 15.29, 'wheel' => 75.25, 'tire' => 50.00);
// print_r($price);

$price = ['gasket' => 15.29, 'wheel' => 75.25, 'tire' => 50.00];
// print_r($price);

/* 如果只有第一個元素指定key value */
$days =array(1=> "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
// print_r($days);

/* 如果只有第一個元素指定key value為string */
$whoops = array('Fri' => "Black", "Brown", "Green"); 
// print_r($whoops);

/* 加入value到Array的方法 */
$family = array("Fred", "Wilma");
$family[] = "Pebbles";
// print_r($family);

/* 如果值加入到關聯式array未給key值 */
$person = array('name'=> "Fred");
$person[] ="Wilma";
// print_r($person);

/* 範圍賦值 range() */
$numbers= range(2,5);
// print_r($numbers);

$letters = range('a','z');
// print_r($letters);

$reverseNumbers= range(5,2);
// print_r($reverseNumbers);

/* 取得陣列的大小 */
$family = array("Fred", "Wilma", "Pebbles");
$size = count($family);
$sizeof = sizeof($family);
// print_r($size);
// print_r($sizeof);

$confusion = array( 10 => "ten", 11 => "eleven", 12=> "twelve");
$size = count($confusion);
// print_r($size);

/* 填充陣列 */
$scores = array(5, 10);
$padded = array_pad($scores, 5, 0);
// print_r($padded);


$padded = array_pad($scores, -5, 0);
// print_r($padded);

/* 多維陣列 */
$row0 = array(1,2,3);
$row1 = array(4,5,6);
$row2 = array(7,8,9);
$multi = array($row0,$row1,$row2);

$value = $multi[2][0];
// echo $value;
// echo ("The value at row 2, column 0 is {$multi[2][0]}\n");

/* 取得多個值 */

