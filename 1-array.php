<?php

$address[0]= "spam@cyberpromo.net";
// print_r($address);

$address = array();
// echo $address;

/* 建立Array的方法 */
$price=array('gasket' => 15.29, 'wheel' => 75.25, 'tire' => 50.00);
// print_r($price);

$price = ['gasket' => 15.29, 'wheel' => 75.25, 'tire' => 50.00];
// print_r($price);

//如果只有第一個元素指定key value
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
print_r($numbers);




